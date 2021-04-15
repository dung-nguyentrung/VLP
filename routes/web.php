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
use App\Http\Livewire\Admin\FaqComponent;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ExportController;
use App\Http\Livewire\NewDetailsComponent;
use App\Http\Controllers\CommentController;
use App\Http\Livewire\Admin\AddFaqComponent;
use App\Http\Livewire\Admin\ProductComponent;
use App\Http\Livewire\Admin\CategoryComponent;
use App\Http\Livewire\Admin\DashboardComponent;
use App\Http\Livewire\Admin\UpdateFaqComponent;
use App\Http\Livewire\Admin\AddProductComponent;
use App\Http\Livewire\Admin\AddCategoryComponent;
use App\Http\Livewire\Admin\RecruitmentComponent;
use App\Http\Livewire\Admin\UpdateProductComponent;
use App\Http\Livewire\Admin\AddRecruitmentComponent;
use App\Http\Livewire\Admin\UpdateCategoryComponent;
use App\Http\Livewire\Admin\EditRecruitmentComponent;

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
    //Dashboard
    Route::get('/dashboard',DashboardComponent::class)->name('dashboard');
    //Category
    Route::get('/categories',CategoryComponent::class)->name('categories');
    Route::get('/add-category',AddCategoryComponent::class)->name('category.add');
    Route::get('/update-category/{category_slug}',UpdateCategoryComponent::class)->name('category.update');
    //Product
    Route::get('/products',ProductComponent::class)->name('products');
    Route::get('/add-product',AddProductComponent::class)->name('product.add');
    Route::get('/update-product/{product_slug}',UpdateProductComponent::class)->name('product.update');
    //FAQ
    Route::get('/faqs',FaqComponent::class)->name('faqs');
    Route::get('/add-faq',AddFaqComponent::class)->name('faq.add');
    Route::get('/update-faq/{faq_id}',UpdateFaqComponent::class)->name('faq.update');
    //Recruitment
    Route::get('/recruitments',RecruitmentComponent::class)->name('recruitments');
    Route::get('/add-recruitment',AddRecruitmentComponent::class)->name('recruitment.add');
    Route::get('/update-recruitment/{recruitment_id}',EditRecruitmentComponent::class)->name('recruitment.update');
});
