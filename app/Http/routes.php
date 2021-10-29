<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/news', function (){
    $news = \App\Models\Article::all();

   return view('news.index',
       [
           'newss'=>$news
       ]);
})->name('news.index');
Route::get('/news/create', function (){
    return view('news.create');
})->name('news.create');
Route::post('/news', function (\Illuminate\Http\Request $request){
//    dd($request->all());
    $validator = Validator::make($request->all(), [
        'title' => 'required|max:50',
        'article' => 'required|max:2500|min:5',
    ]);
    if ($validator->fails()) {
        return redirect(route('news.create'))
            ->withInput()
            ->withErrors($validator);
    }
    $article = new \App\Models\Article();
    $article->title = $request->title;
    $article->article = $request->article;
    $article->save();
    return redirect(route('news.index'));
})->name('news.store');

