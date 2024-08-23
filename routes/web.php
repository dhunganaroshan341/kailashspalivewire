<?php

use App\Livewire\About;
use App\Livewire\Brand;
use App\Livewire\Front\News;
use App\Livewire\Home;
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

// Route::get('/', function () {
//     // return view('welcome');
// });
Route::get('/', Home::class)->name('home');
Route::get('/about-us', About::class)->name('about');
Route::get('/gallery', Home::class)->name('gallerylist');
Route::get('/gallery/{id}', Home::class)->name('gallery-item');
Route::get('/brands', Brand::class)->name('brands');
Route::get('/news-notices', News::class)->name('newsnotice');
Route::get('/news/{id}', News::class)->name('news');
Route::get('/contact', Home::class)->name('contact');
Route::get('/services', Home::class)->name('services');
Route::get('/subscribe', Home::class)->name('subscribe');
Route::post('/subscribe', Home::class)->name('subscribepost');
// Route::get('/services', ShowServicePage::class)->name('services');
// Route::get('/service/{id}', ShowService::class)->name('service');
// Route::get('/team-members', TeamPage::class)->name('service');
