<?php

namespace App;


use App\I18n\LocalizableModel;

class Category extends LocalizableModel
{

    protected $guarded = [];

    protected $localizable = [
        'name'
    ];

    public function subs () {
        return $this->hasMany(SubCategory::class);
    }

}
