<?php

namespace App;

use App\I18n\LocalizableModel;

class ArticleCategory extends LocalizableModel
{
    protected $guarded = [];

    protected $localizable = [
        'name'
    ];

    public function articles() {
        return $this->hasMany(Article::class,'mycategory_id');
    }

    public function countArticles($cat = null) {
        $q = $this->articles();
        if ($cat) {
            $q = $q->where('category',$cat);
        }
        return $q->count();
    }
}
