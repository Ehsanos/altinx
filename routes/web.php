<?php

use App\Enums\OrderStatusEnum;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MailTestingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SliderController;
use App\Models\Country;
use Illuminate\Support\Facades\Route;



//Route::get('/', [IndexController::class, 'index'])->name('index');


Route::get('/languages/{lang}', [IndexController::class, 'change_lang'])->name('change.lang');

Route::name('langs.')->middleware('locale')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/products',[ProductController::class,'index'])->name('products');
    Route::get('/details/{id}',[ProductController::class,'show'])->name('product_details');

});


Route::get('country', [CountryController::class, 'index'])->name('country');

Route::get('/slider', [SliderController::class, 'index'])->name('allslider');


Route::get('/start', [MailTestingController::class, 'start']);
Route::get('/ship', [MailTestingController::class, 'ship']);
Route::get('/complete', [MailTestingController::class, 'complete']);


require __DIR__ . '/auth.php';
