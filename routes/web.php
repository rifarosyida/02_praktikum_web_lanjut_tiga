<?php
use App\Http\Controllers\ControllerAboutUs;
use App\Http\Controllers\ControllerContactUs;
use App\Http\Controllers\ControllerNews;
use App\Http\Controllers\ControllerProduct;
use App\Http\Controllers\ControllerProgram;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//1. Halaman Home 
Route::get('/',  [HomeController::class, 'index']);

//2. Halaman Products (route prefix)
Route::prefix('category')->group(function(){
    Route::get('/marbel-edu-games',  [ControllerProduct::class, 'cat1'])->name('cat1');
    Route::get('/marbel-and-friends-kids-games',  [ControllerProduct::class, 'cat2'])->name('cat2');
    Route::get('/riri-story-books',  [ControllerProduct::class, 'cat3'])->name('cat3');
    Route::get('/kolak-kids-songs',  [ControllerProduct::class, 'cat4'])->name('cat4');
});
//3. Halaman News (route param)
Route::get('/news',[ControllerNews::class,'news1']);
Route::get('/news/{title}',[ControllerNews::class,'news2']);

//4. Halaman Program (route prefix) 
Route::prefix("program")->group(function(){
    Route::get('/karir',[ControllerProgram::class,'karir']);
    Route::get('/magang',[ControllerProgram::class,'magang']);
    Route::get('/kunjungan-industri',[ControllerProgram::class,'kunjunganIndustri']);
});
//5. Halaman About Us(route biasa)
Route::get('/about-us', [ControllerAboutUs::class, 'index']);

//6. Halaman Contact Us (route resource only)
Route::resource('/contact-us', ControllerContactUs::class, [
    'only' => ['index', 'create', 'store']
]);

