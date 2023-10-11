<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\Post;
use App\Models\PostFile;
use App\Models\PostTranslation;
use App\Models\Slug;
use App\Services\ForSlugService;
use App\Services\PostImagesUploadService;
use App\Services\PostImageUploadService;


class PostController extends Controller
{
    public function __construct(private ForSlugService $forSlugService,
                                 private PostImageUploadService $postImageUploadService,
                                 private PostImagesUploadService $postImagesUploadService)
    {
        $this->forSlugService = $forSlugService;
        $this->postImagesUploadService = $postImagesUploadService;
        $this->postImageUploadService = $postImageUploadService;
    }

    public function index($sec)
    {
        $section = Section::where('id', $sec)->with('translations')->first();
        if (getStyleAttribute($section->type_id) == 1) {
            $post = Post::where('section_id', $sec)->with(['translations', 'slugs'])->first();
            if (isset($post) && $post !== null) {
                return redirect()->route('post.edit', [app()->getLocale(), $post->id,]);
            }
            return redirect()->route('post.create', [app()->getLocale(), $sec,]);
        }

        $posts = Post::where('section_id', $sec)->orderBy('date', 'desc')->orderBy('created_at', 'desc')->with('translation')->get();

        return view('admin.posts.list', compact(['section', 'posts']));
    }

    public function create($sec)
    {
        $section = Section::where('id', $sec)->with('translations')->first();
        return view('admin.posts.add', compact(['section']));
    }

    public function store($sec, Request $request)
    {

        $section = Section::where('id', $sec)->with('translations')->first();
        $values = $request->all();
        $values['section_id'] = $sec;
        $values['author_id'] = auth()->user()->id;
        $postFillable = (new Post)->getFillable();
        $postTransFillable = (new PostTranslation)->getFillable();

        $values['image'] = $this->postImageUploadService->storeImage($values);

        if ($request->has('is_component')) {
            $values['additional'] = getAdditional($values, array_diff(array_keys($section->componentfields['nonTrans']), $postFillable));
        } else {
            $values['additional'] = getAdditional($values, array_diff(array_keys($section->fields['nonTrans']), $postFillable));
        }

        $post = Post::create($values);

        $this->forSlugService->storePostSlug($request, $values, $section, $postTransFillable, $post);

        $this->postImagesUploadService->storeImages($values, $post);

        return redirect()->route('post.list', [app()->getLocale(), $section->id,]);
    }

    public function edit($id)
    {
        $post = Post::where('id', $id)->with(['translations', 'files'])->first();
        $section = Section::where('id', $post->section_id)->with('translations')->first();
        return view('admin.posts.edit', compact('section', 'post'));
    }


    public function update($id, Request $request)
    {
        $post = Post::where('id', $id)->with('translations')->first();
        $section = Section::where('id', $post->section_id)->with('translations')->first();
        $values = $request->all();

        $values['image'] = $this->postImageUploadService->updateImage($values);

        $this->forSlugService->updatePostSlug($request, $values, $post, $section, $id);

        $allOldFiles = PostFile::where('post_id', $post->id)->get();
        foreach ($allOldFiles as $key => $fil) {
            if (isset($values['old_file']) && count($values['old_file']) > 0) {
                if (!in_array($fil->id, array_keys($values['old_file']))) {
                    $fil->delete();
                }
            } else {
                $fil->delete();
            }
        }

        Post::findOrFail($post->id)->update($values);

        $this->postImagesUploadService->updateImages($values, $post);

        return redirect()->route('post.list', [app()->getLocale(), $section->id,]);
    }

    public function deletefiles(Request $request)
    {
        // dd($request->locale);
        $post = PostTranslation::where([['post_id', $request->post_id], ['locale', $request->locale]])->first();
        $publications = collect($post['locale_additional']['publications']);
        $publications->map(function ($item, $index) use ($publications, $request, $post) {
            $publications->forget($request->key);
            return $publications;
        });
        $publications = $publications->toArray();
        PostTranslation::where([['post_id', $request->post_id], ['locale', $request->locale]])->update(array('locale_additional' => array('publications' => $publications)));
        $post = PostTranslation::where([['post_id', $request->post_id], ['locale', $request->locale]])->first();
        return response()->json(['success' => 'File Deleted']);
    }

    public function destroy($post)
    {
        $post = Post::where('id', $post)->first();

        $section = Section::where('id', $post->section_id)->with('translations')->first();

        $this->postImageUploadService->destroyImage($post);

        $files = PostFile::where('post_id', $post->id)->get();

        $this->postImagesUploadService->destroyImages($files);

        Slug::where('slugable_id', $post->id)->where('slugable_type', 'App\Models\Post')->delete();

        $post->delete();

        return redirect()->route('post.list', [app()->getLocale(), $section->id,]);
    }
}
