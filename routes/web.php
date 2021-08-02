<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\PostController;



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

Route::get('/', function() {
    
    
    return view('welcome');
    
})->name('welcome');


Route::get('/javascript/{framework?}', function($framework = "JS") {
    $arrays = ["Angular", "React"];
    $nombre = 'VUE';
    return view('home', compact('nombre', 'framework', 'arrays'));
    
})->name('framework');


Route::get('/web', [WebController::class, 'index'])->name('index');

/* Route::group(['prefix' => ['admin']], function(){
    
    Route::resource('post', PostController::class);
});
*/
Route::resource('post', PostController::class);