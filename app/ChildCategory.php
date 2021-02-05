<?php

namespace App;


use App\I18n\LocalizableModel;

class ChildCategory extends LocalizableModel
{
    protected $guarded = [];

    protected $localizable = [
        'name'
    ];


    public function subCategory() {
        return $this->belongsTo(SubCategory::class);
    }
}
