<?php

namespace App\Libraries;

use Illuminate\Support\Facades\Storage;

trait Galleriable {

    public function deleteGallery(string $directory) {
        if ($this->gallery->count()) {
            foreach ($this->gallery as $image) {
                if ( file_exists(public_path('uploads/'.$directory.'/'.$image->name)) ) {
                    Storage::delete(public_path('uploads/'.$directory.'/'.$image->name));
                }
            }
        }
    }
}
