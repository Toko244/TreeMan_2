<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Models\PostFile;
use App\Models\Slug;
use App\Services\PostImagesUploadService;
use App\Services\PostImageUploadService;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ComponentsController extends Controller
{

    public function __construct(private PostImageUploadService $postImageUploadService,
                                private PostImagesUploadService $postImagesUploadService)
    {
        $this->postImagesUploadService = $postImagesUploadService;
        $this->postImageUploadService = $postImageUploadService;
    }

    /**
     * index
     *  Lists Sections
     * @return void
     */
    public function index($id){
        $section = Section::where('id', $id)->first();
        $components = Section::where('parent_id', $id)->where('is_component', 1)->orderBy('order', 'asc')->with('children')->get();
        return view('admin.components.list', compact('components', 'id', 'section'));
    }
    public function create($id){
        $section = Section::where('id', $id)->first();
        return view('admin.components.add', compact(['section']));
    }
    public function edit($id){
        $section = Section::where('id', $id)->with(['translations', 'menuTypes'])->first();
        $sections = Section::with('translations')->where('id', '!=', $section->id)->where('parent_id', '!=', $section->id)->orWhere('parent_id', null)->get();
        return view('admin.components.edit', compact(['sections', 'section']));
    }
    public function post($id){
        $section = Section::where('id', $id)->first();
        $components = Section::where('parent_id', $id)->orderBy('order', 'asc')->with('children')->get();
        return view('admin.components.list', compact('components', 'id', 'section'));
    }
    public function destroy($id) {
        $sec = Section::where('id', $id)->with('translations')->first();

        if (count($sec->posts) > 0) {
            foreach ($sec->posts as $key => $component_post) {
                if (isset($component_post->image) && File::exists(config('config.file_path') . $component_post->image)) {
                    $this->postImageUploadService->destroyImage($component_post);
                }
                $files = PostFile::where('post_id', $component_post->id)->get();

                $this->postImagesUploadService->destroyImages($files);

                Slug::where('slugable_id', $component_post->id)->where('slugable_type', 'App\Models\Post')->delete();
            }
        }
        Slug::where('slugable_id', $sec->id)->where('slugable_type', 'App\Models\Section')->delete();
        Section::where('id', $id)->delete();

        return redirect()->route('components.list', [app()->getLocale(), $sec->parent_id]);
    }
    public function arrange(Request $request) {
        $array = $request->input('orderArr');
        Section::componentrearrange($array);
        return ['error' => false];
    }
}
