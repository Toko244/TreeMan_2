<?php


    namespace App\Services;

    use Illuminate\Support\Facades\File;
    use App\Models\PostFile;

    class PostImagesUploadService {

        public function storeImages($values, $post)
        {
            if (isset($values['files']) && count($values['files']) > 0) {
                foreach ($values['files'] as $key => $files) {
                    foreach ($files['file'] as $k => $file) {
                        $postFile = new PostFile;
                        $postFile->type = $key;
                        $postFile->file = $file;
                        $postFile->title = $values['files'][$key]['desc'][$k];
                        $postFile->post_id = $post->id;
                        $postFile->save();
                    }

                }
            }

        }

        public function updateImages($values, $post)
        {
            if (isset($values['files']) && count($values['files']) > 0) {
                foreach ($values['files'] as $key => $files) {
                    foreach ($files['file'] as $k => $file) {
                        $postFile = new PostFile;
                        $postFile->type = $key;
                        $postFile->file = $file;
                        $postFile->title = $values['files'][$key]['desc'][$k];
                        $postFile->post_id = $post->id;
                        $postFile->save();
                    }
                }
            }
        }

        public function destroyImages($files)
        {
            foreach ($files as $file) {
                if (File::exists(config('config.image_path') . $file->file)) {
                    File::delete(config('config.image_path') . $file->file);
                }
                if (File::exists(config('config.image_path') . 'thumb/' . $file->file)) {
                    File::delete(config('config.image_path') . 'thumb/' . $file->file);
                }
                $file->delete();
            }
        }
    }

?>
