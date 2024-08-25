<?php

use App\Http\Controllers\ContactController;
use App\Livewire\About;
use App\Livewire\Brand;
use App\Livewire\BrandImage;
use App\Livewire\Contact;
use App\Livewire\Front\News;
use App\Livewire\Gallery;
use App\Livewire\GalleryItem;
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
Route::get('/home', Home::class)->name('home-same');
Route::get('/about-us', About::class)->name('about');
Route::get('/gallery', Gallery::class)->name('gallerylist');
Route::get('/gallery/{id}', GalleryItem::class)->name('gallery-item');
Route::get('/brands', Brand::class)->name('brands');
Route::get('/brands/{id}', BrandImage::class)->name('brand-image');
Route::get('/news-notices', News::class)->name('newsnotice');
Route::get('/news/{id}', News::class)->name('news');
Route::get('/contact', Contact::class)->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('userMessage.store');
Route::get('/services', Home::class)->name('services');
Route::get('/subscribe', Home::class)->name('subscribe');
Route::post('/subscribe', Home::class)->name('subscribepost');
// Route::get('/services', ShowServicePage::class)->name('services');
// Route::get('/service/{id}', ShowService::class)->name('service');
// Route::get('/team-members', TeamPage::class)->name('service');
