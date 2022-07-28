<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\Isset_;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaptopsController;
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

Route::get('/',[HomeController:: class,'index'])->name('home.index');
Route::get('/about', [HomeController:: class,'about'])->name('home.about');
Route::get('/contact', [HomeController:: class,'contact'])->name('home.contact');

Route::resource('laptops',LaptopsController::class);

Route::get('/store/{category?}/{item?}', function ($category = null,$item=null) {
    if (Isset($category)){

        if (Isset($item)){
        return "you are viewing the store for {$category} for {$item}" ;
    }
        return 'you are viewing the store for ' . strip_tags($category) ;
    }
         return 'you are viewing all instrument';
});

// Route::get('/store', function () {
//     $category=request('category');
//     if (Isset($category)){
//     return ('you are viewing the store for ' . strip_tags($category) );
//     }
//     return ('you are viewing all instrument');
// });