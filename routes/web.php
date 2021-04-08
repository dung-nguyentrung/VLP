<?php

use App\Http\Livewire\Admin\DashboardComponent;
use App\Http\Livewire\CareersComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\GalleryComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\NewDetailsComponent;
use App\Http\Livewire\NewsComponent;
use App\Http\Livewire\ShopComponent;
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

Route::get('/',HomeComponent::class)->name('home');

Route::get('/shop',ShopComponent::class);

Route::get('product/{slug}',DetailsComponent::class)->name('product.details');

Route::get('/careers',CareersComponent::class);

Route::get('/news',NewsComponent::class);

Route::get('/new/{new_slug}',NewDetailsComponent::class)->name('new.details');

Route::get('/gallery',GalleryComponent::class);

Route::get('/contact',ContactComponent::class);

Route::get('/page-not-found', function () {
    return view('errors.404');
})->name('errors');
//ADMIM
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function(){
    Route::get('/dashboard',DashboardComponent::class)->name('dashboard');
});
