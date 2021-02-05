<?php

namespace App;


use App\I18n\LocalizableModel;

class SubCategory extends LocalizableModel
{
    protected $guarded = [];

    protected $localizable = [
        'name'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function subs () {
        return $this->hasMany(ChildCategory::class);
    }
}
