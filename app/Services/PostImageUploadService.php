<?php

    namespace App\Services;

    use Illuminate\Support\Facades\File;

    class PostImageUploadService {

        public function storeImage($values)
        {
            if (isset($values['image']) && ($values['image'] != '')) {
                $newimageName = uniqid() . "." . $values['image']->getClientOriginalExtension();
                $values['image']->move(config('config.file_path'), $newimageName);
                $values['image'] = '';
                $values['image'] = $newimageName;

                return $values['image'];
            }
        }

        public function updateImage($values)
        {
            if (isset($values['image']) && ($values['image'] != '')) {
                $newimageName = uniqid() . "." . $values['image']->getClientOriginalExtension();
                $values['image']->move(config('config.file_path'), $newimageName);
                $values['image'] = '';
                $values['image'] = $newimageName;

                return $values['image'];

            } elseif (isset($values['old_image'])) {
                $values['image'] = $values['old_image'];

                return $values['image'];
            }


        }

        public function destroyImage($post)
        {
            if (File::exists(config('config.file_path') . $post->image)) {
                File::delete(config('config.file_path') . $post->image);
            }
        }
    }
?>
