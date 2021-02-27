<?php

namespace App;

use App\Libraries\Galleriable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use Galleriable;

    protected $guarded = [];

    public function comments () {
        return $this->hasMany(ArticleComment::class);
    }

    public function owner () {
        return $this->belongsTo(User::class,'owner_id');
    }

    public function views()
    {
        return $this->hasMany(ArticleView::class);
    }

    public function gallery () {
        return $this->hasMany(ArticleGallery::class);
    }

    public function videos () {
        return $this->hasMany(ArticleVideo::class);
    }

    public function is_viewed () : bool
    {
        if(auth()->id() == null){
            return $this->views()
                ->where('ip', '=',  request()->ip())->exists();
        }

        return $this->views()
            ->where(function(Builder $q) {
                $q->where('session_id', '=', request()->getSession()->getId())
                    ->orWhere('user_id', '=', (auth()->check()) );
            })->exists();
    }

    public function mainVideo() {
        return $this->videos()->where('main', true)->first();
    }
}
