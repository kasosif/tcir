<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleComment extends Model
{
    protected $guarded = [];

    public function article () {
        return $this->belongsTo(Article::class);
    }

    public function owner () {
        return $this->belongsTo(User::class,'owner_id');
    }
}
