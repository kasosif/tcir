<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleGallery extends Model
{
    protected $guarded = [];

    public function article () {
        return $this->belongsTo(Article::class);
    }
}
