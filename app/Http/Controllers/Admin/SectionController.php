<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slug;
use App\Models\Section;
use App\Models\PostFile;
use App\Models\MenuSection;
use Illuminate\Http\Request;
use App\Services\ForSlugService;
use App\Services\PostImagesUploadService;
use App\Services\PostImageUploadService;
use App\Http\Controllers\Controller;
use App\Http\Requests\SectionRequest;
use App\Services\SectionDestroyService;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class SectionController extends Controller
{

    public function __construct(private ForSlugService $forSlugService,
                                 private PostImageUploadService $postImageUploadService,
                                 private PostImagesUploadService $postImagesUploadService)
    {
        $this->forSlugService = $forSlugService;
        $this->postImagesUploadService = $postImagesUploadService;
        $this->postImageUploadService = $postImageUploadService;
    }

    /**
     * index
     *  Lists Sections
     * @return void
     */
    public function index()
    {
        $sections = Section::where('parent_id', null)->orderBy('order', 'asc')->with('children')->get();
        return view('admin.sections.list', compact('sections'));
    }
    public function create()
    {

        $sectionTypes = sectionTypes();
        $sections = Section::with('translations')->where('is_component', '!=', 1)->get();
        $menuTypes = menuTypes();
        return view('admin.sections.add', compact(['sectionTypes', 'sections', 'menuTypes']));
    }

    public function store(SectionRequest $request)
    {
        $values = $request->validated();

        $values['additional'] = getAdditional($values, config('sectionAttr.additional'));

        $values['order'] = Section::max('id');

        $section = Section::create($values);

        $this->forSlugService->storeSectionSlug($request, $values, $section);

        $notification = array('type' => 'success', 'message' => 'Section Added Successfully');

        if ($request->has('is_component')) {
            return redirect()->route('components.list', [app()->getLocale(), $values['parent_id']])->with($notification);
        } else {
            return redirect()->route('section.list', [app()->getLocale()])->with($notification);
        }
    }

    public function edit($id)
    {
        $sectionTypes = sectionTypes();
        $section = Section::where('id', $id)->with(['translations', 'menuTypes'])->first();
        $sections = Section::with('translations')->where('id', '!=', $section->id)->where('parent_id', '!=', $section->id)->orWhere('parent_id', null)->get();
        $menuTypes = menuTypes();
        return view('admin.sections.edit', compact(['sections', 'section', 'sectionTypes', 'menuTypes']));
    }

    public function update($id, SectionRequest $request)
    {
        $values = $request->validated();
        MenuSection::where('section_id', $id)->delete();
        Slug::where('slugable_id', $id)->where('slugable_type', 'App\Models\Section')->delete();

        $values['additional'] = getAdditional($values, config('sectionAttr.additional'));

        $section = Section::find($id)->update($values);

        $this->forSlugService->updateSectionSlug($request, $values, $section, $id);

        $notification = array('type' => 'success', 'message' => 'Section Updated Successfully');

        if ($request->has('is_component')) {
            return redirect()->route('components.list', [app()->getLocale(), $values['parent_id']])->with($notification);
        } else {
            return redirect()->route('section.list', [app()->getLocale()])->with($notification);
        }
    }

    public function arrange(Request $request)
    {
        $array = $request->input('orderArr');
        Section::rearrange($array);
        return ['error' => false];
    }

    public function destroy($id, SectionDestroyService $sectionDestroyService)
    {
        $section = Section::where('id', $id)->with('translations', 'posts')->first();

        $post = $section->posts;

        $postImagesUploadService = $this->postImagesUploadService;

        $postImageUploadService = $this->postImageUploadService;

        $sectionDestroyService->destroySectionComponents($section, $post, $postImagesUploadService, $postImageUploadService);

        $sectionDestroyService->destroySectionPosts($section, $postImagesUploadService, $postImageUploadService);

        Slug::where('slugable_id', $id)->where('slugable_type', 'App\Models\Section')->delete();

        $notification = array('message' => 'Section Deleted Successfully', 'type' => 'success');

        $section->delete();

        return redirect()->route('section.list', [app()->getLocale()])->with($notification);
    }
}
