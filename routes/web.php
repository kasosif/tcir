<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Article;
use App\ArticleView;

Route::get('/', function () {
    return view('construction');
});
Route::get('/demo', function () {
    return view('homepage');
})->name('homepage');
Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/demo/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/demo/in-progress', function () {
    return view('in_progress');
})->name('in_progress');

Route::get('/demo/our-mission', function () {
    return view('ourmission');
})->name('our-mission');

Route::get('/demo/our-resumes', function () {
    return view('ourresumes');
})->name('our-resumes');

Route::get('/demo/our-status', function () {
    return view('statut');
})->name('our-status');

Route::get('/demo/become-member', function () {
   return view('become-member');
});
Route::post('/demo/do-become-member', function (\Illuminate\Http\Request $request) {
   $request->validate([
       'fullname' => ['required', 'string', 'max:255'],
       'email' => ['required', 'string', 'email', 'max:255', 'unique:members'],
       'phone' => ['required', 'numeric','digits:8','unique:members']
   ]);

   \App\Member::create($request->except('_token'));

    /**
     * @todo Send Mail to contact@tcir.org
     */
   return redirect()->back()->with('success',__('Thank You for your registration'));

})->name('doBecomeMember');
Route::get('/demo/page/{page?}', function (\Illuminate\Http\Request $request, $page = null) {
    if ($page) {
        $cat = \App\Category::where('link', $page)->first();
        if (!$cat) {
            $cat = \App\SubCategory::where('link', $page)->first();
        }
        if (!$cat) {
            $cat = \App\ChildCategory::where('link', $page)->first();
        }
        if (!$cat) {
            return redirect()->route('homepage');
        }
        switch ($cat->link) {
            case 'activities':
                $article_categories = \App\ArticleCategory::all();
                $latest_posts = \App\Article::where('is_valid', 1)
                    ->where('category','activities')
                    ->orderBy('created_at','desc')
                    ->take(3)->get();
                $articles = \App\Article::where('is_valid', 1)
                    ->where('category','activities');

                if ($request->has('category')) {
                    $articles = $articles->where('mycategory_id',$request->get('category'));
                }
                $articles = $articles->orderBy('created_at','desc')
                    ->paginate(5);
                return view($page,compact('cat','articles','latest_posts','article_categories'));
            case 'read-for-you':
                $article_categories = \App\ArticleCategory::all();
                $latest_posts = \App\Article::where('is_valid', 1)
                    ->where('category','read-for-you')
                    ->orderBy('created_at','desc')
                    ->take(3)->get();
                $articles = \App\Article::where('is_valid', 1)
                    ->where('category','read-for-you');
                if ($request->has('category')) {
                    $articles = $articles->where('mycategory_id',$request->get('category'));
                }
                $articles = $articles->orderBy('created_at','desc')
                ->paginate(5);
                return view($page,compact('cat','articles','latest_posts','article_categories'));
        }
        return view($page,compact('cat'));
    } else {
        return redirect()->route('in_progress');
    }
});

Route::get('/demo/article/{slug}',function ($slug) {
    $cat = \App\Category::where('link','activities')->first();
    $article = Article::where('slug',$slug)->first();

    //Check Article
    if (!$article) {
        return redirect()->route('homepage');
    }
//Comments
    $comments = $article
        ->comments()
        ->where('is_valid',1)
        ->orderBy('created_at','desc')
        ->get();
    if(!$article->is_viewed()) {
        $article->increment('count_views');
        ArticleView::createViewLog($article);
    }
    return view('single_article',compact('article','comments','cat'));
})->name('single_article');
