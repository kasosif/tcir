<?php

namespace App\Libraries;

use Illuminate\Support\Facades\Storage;

trait Galleriable {

    public function deleteGallery(string $directory) {
        if ($this->gallery->count()) {
            foreach ($this->gallery as $image) {
                if ( file_exists(storage_path('app/public/'.$directory.'/'.$image->name)) ) {
                    Storage::delete('app/public/'.$directory.'/'.$image->name);
                }
            }
        }
    }
}
