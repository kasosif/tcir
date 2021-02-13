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

Route::get('/demo/our-mission', function () {
    return view('ourmission');
})->name('our-mission');

Route::get('/demo/our-resumes', function () {
    return view('ourresumes');
})->name('our-resumes');

Route::get('/demo/page/{page?}', function ($page = null) {
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
        return view($page,compact('cat'));
    } else {
        return redirect()->route('homepage');
    }
});
