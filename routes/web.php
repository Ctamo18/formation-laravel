<?php

use App\Http\Controllers\TestController;
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
    return view('layout.app');
});

Route::get('test/', function () {
    return view('test');
});

Route::redirect('/here', '/test');

Route::view('/home', 'home', ['name'=>'Tamo', 'last_name'=>"Chantal" ]);

Route::get ('index', [TestController::class, 'rendu']);

Route::get ('main', [TestController::class, 'main']);

Route::get ('article', [TestController::class, 'article']);

Route::get('about',[TestController::class,'about']);


