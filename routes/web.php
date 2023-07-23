<?php

use App\Enums\OrderStatusEnum;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\MailTestingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SliderController;
use App\Models\Country;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('country',[CountryController::class,'index'])->name('country');

Route::get('/slider',[SliderController::class,'index'])->name('allslider');


Route::get('/start',[MailTestingController::class,'start']);
Route::get('/ship',[MailTestingController::class,'ship']);
Route::get('/complete',[MailTestingController::class,'complete']);


require __DIR__.'/auth.php';
