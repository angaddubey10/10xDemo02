<?php

use Illuminate\Support\Facades\Route;
// use app\Http\Controllers\HelloController;
use App\Http\Controllers\HelloController;
// why app is not working and App is working here but actual folder name is app with a in lower case
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
//Route::get('hello', 'HelloController@index');

Route::get('/hellos', [HelloController::class,'index']);
