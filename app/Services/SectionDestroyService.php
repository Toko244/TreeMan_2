<?php

namespace App\Services;

use App\Models\Slug;
use App\Models\PostFile;
use Illuminate\Support\Facades\File;


class SectionDestroyService {

    public function destroySectionComponents($section, $post, $postImagesUploadService, $postImageUploadService)
    {
        if (count($section->sectioncomponents()) > 0) {
            foreach ($section->sectioncomponents() as $key => $component) {
                if (count($component->posts) > 0) {
                    foreach ($component->posts as $key => $component_post) {

                        if (isset($component_post->image) && File::exists(config('config.file_path') . $component_post->image)) {
                            $postImageUploadService->destroyImage($post);
                        }
                        $files = PostFile::where('post_id', $component_post->id)->get();

                        $postImagesUploadService->destroyImages($files);

                        // $component_post->slugs()->delete();
                        Slug::where('slugable_id', $component_post->id)->where('slugable_type', 'App\Models\Post')->delete();
                    }
                }
                $component->slugs()->delete();
            }
        }
    }

    public function destroySectionPosts($section, $postImagesUploadService, $postImageUploadService)
    {
        if (count($section->posts) > 0) {
            foreach ($section->posts as $key => $post) {

                if (isset($post->image) && File::exists(config('config.file_path') . $post->image)) {
                    $postImageUploadService->destroyImage($post);
                }
                $files = PostFile::where('post_id', $post)->get();
                if ($files) {
                    $postImagesUploadService->destroyImages($files);
                }
                $post->slugs()->delete();
            }
        }
    }

}
?>
