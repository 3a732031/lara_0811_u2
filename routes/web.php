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
    //return view('welcome');
    return 'welcome';
});

//Route轉跳路由
Route::get('r1', function() {
    return redirect('r2');
});
Route::get('r2', function() {
    return view('welcome');
});

//Route接受參數
//Route::get('hello/{name}',function($name){
//    return'Hello,'.$name;
//});

//修改參數成選擇性
Route::get('hello/{name?}', function($name='Everybody') {
    return 'Hello, '.$name;
})->name('hello.index');//Route取名為hello.index

//使用 artisan 指令了解目前 route 內容
//Route::get('r3', function() {
//    return redirect('r2');
//});

//練習 5：設定 Route 前置
//設定 dashboard路徑的 Route
Route::get('dashboard',function(){
    return'dashboard';
});

//設定另一個 Route 以群組包起來設定 prefix
Route::group(['prefix'=>'admin'],function(){
    Route::get('dashboard',function(){
        return'admin dashboard';
    });
});
