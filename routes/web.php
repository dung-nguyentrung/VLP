<?php

use Maatwebsite\Excel\Excel;
use App\Exports\CatergoryExport;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\NewsComponent;
use App\Http\Livewire\ShopComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CareersComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\GalleryComponent;
use App\Http\Controllers\CareerController;
use App\Http\Livewire\NewDetailsComponent;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ExportController;
use App\Http\Livewire\Admin\CategoryComponent;
use App\Http\Livewire\Admin\DashboardComponent;
use App\Http\Livewire\Admin\AddCategoryComponent;
use App\Http\Livewire\Admin\UpdateCategoryComponent;

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

Route::post('/comment',[CommentController::class,'addProductComment'])->name('comment');

Route::get('/careers',CareersComponent::class)->name('careers');

Route::post('/career/apply',[CareerController::class,'store'])->name('recruitment');

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
    //Category
    Route::get('/categories',CategoryComponent::class)->name('categories');
    Route::get('/add-category',AddCategoryComponent::class)->name('category.add');
    Route::get('/update-category/{category_slug}',UpdateCategoryComponent::class)->name('category.update');
});
