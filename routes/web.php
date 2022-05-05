<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/archives/', function () {
    return view('archives.index');
});

Route::get('/archives/{category}/',function($category){
    return view('archives.category' , ['category'=>$category]);
});


Route::get('/sum/{x}/{y}/', 'MathController@sum');


//getはURLを指定して直接呼び出したとき。
//postはフォームを使ってpostメソッドというもので呼び出すもの。
//第一引数はパスの指定
//第二引数はどういった処理を行うのか
//returnはphpの戻り値

//viewファイルは基本的に表示のみを司る場所　となっているので、
//あまりDBからのデータを用いた計算などは荷が思いので、なるべくviewは表示のみにする

//Routesフォルダ内はルーティングのみにとどめるのが推奨