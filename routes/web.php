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
/*
Route::get('/', function () {
    return view('welcome');
});*/


//Laravel8系からルーティングが変更、フルパスで記述しないと表示されない*/

Route::get('/','App\Http\Controllers\storeController@turumaki');
Route::get('titosedai','App\Http\Controllers\storeController@titosedai');
Route::get('turusmart','App\Http\Controllers\storeController@turusmart');
Route::get('titosesmart','App\Http\Controllers\storeController@titosesmart');
