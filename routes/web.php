<?php

use App\Enums\OrderStatusEnum;
use App\Http\Controllers\AgentContoller;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DelegteController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MailTestingController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SliderController;
use App\Models\Catalog;
use App\Models\Country;
use Illuminate\Support\Facades\Route;



//Route::get('/', [IndexController::class, 'index'])->name('index');


Route::get('/languages/{lang}', [IndexController::class, 'change_lang'])->name('change.lang');

Route::name('langs.')->middleware('locale')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/products',[ProductController::class,'index'])->name('products');
    Route::get('/details/{id}',[ProductController::class,'show'])->name('product_details');
    Route::get('/catalogs',[CatalogController::class,'index'])->name('catalog');
    Route::get('/posts',[PostController::class,'index'])->name('news');
    Route::get('/posts/{post}',[PostController::class,'show'])->name('showPost');
    Route::get('/agents',[AgentContoller::class,'index'])->name('agents');
    Route::get('/delegte',[DelegteController::class,'index'])->name('delegte');
    Route::get('/jobs',[JobController::class,'index'])->name('jobs');
    Route::get('/about',[IndexController::class,'about'])->name('about');


});


Route::get('country', [CountryController::class, 'index'])->name('country');

Route::get('/slider', [SliderController::class, 'index'])->name('allslider');


Route::get('/start', [MailTestingController::class, 'start']);
Route::get('/ship', [MailTestingController::class, 'ship']);
Route::get('/complete', [MailTestingController::class, 'complete']);


require __DIR__ . '/auth.php';
