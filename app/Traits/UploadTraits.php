<?php

namespace App\Traits;

/**
 * 
 */
trait UploadTraits
{
    private function imageUpload($images, $imageColunm = null)
    {
        $uploadImagens = [];

        if (is_array($images)) {
            foreach ($images as $image) {
                $uploadImagens[] = [$imageColunm => $image->store('products', 'public')];
            }
        } else {
            $uploadImagens = $images->store('logo', 'public');
        }

        return $uploadImagens;
    }
}
