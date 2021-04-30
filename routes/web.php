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
use App\Http\Controllers\CartController;
use App\Http\Controllers\ExportController;
use App\Http\Livewire\NewDetailsComponent;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\SearchController;
use App\Http\Livewire\Admin\AddFaqComponent;
use App\Http\Livewire\Admin\ProductComponent;
use App\Http\Livewire\Admin\CategoryComponent;
use App\Http\Livewire\Admin\DashboardComponent;
use App\Http\Livewire\Admin\UpdateFaqComponent;
use App\Http\Livewire\Admin\AddProductComponent;
use App\Http\Livewire\Admin\AddCategoryComponent;
use App\Http\Livewire\Admin\AddGalleryComponent;
use App\Http\Livewire\Admin\AddPostComponent;
use App\Http\Livewire\Admin\RecruitmentComponent;
use App\Http\Livewire\Admin\UpdateProductComponent;
use App\Http\Livewire\Admin\AddRecruitmentComponent;
use App\Http\Livewire\Admin\AdminGalleryComponent;
use App\Http\Livewire\Admin\ChangePasswordComponent;
use App\Http\Livewire\Admin\UpdateCategoryComponent;
use App\Http\Livewire\Admin\EditRecruitmentComponent;
use App\Http\Livewire\Admin\PostComponent;
use App\Http\Livewire\Admin\SettingComponent;
use App\Http\Livewire\Admin\UpdatePostComponent;
use App\Http\Livewire\Admin\UserProfileComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\ProductCategory;
use App\Http\Livewire\SearchComponent;

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

Route::get('/search',SearchComponent::class)->name('search');

Route::get('/shop',ShopComponent::class);

Route::get('/cart',CartComponent::class)->name('product.cart');

Route::post('/add-to-cart',[CartController::class,'store'])->name('cart.add');

Route::get('/product-category/{slug}',ProductCategory::class)->name('product-category');

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

    //Setting site
    Route::get('/setting-site',SettingComponent::class)->name('setting.site');

    //Post
    Route::get('/posts',PostComponent::class)->name('posts');

    Route::get('/add-post',AddPostComponent::class)->name('post.add');

    Route::get('/update-post/{post_slug}',UpdatePostComponent::class)->name('post.update');

    //Profile
    Route::get('/user/profile',UserProfileComponent::class)->name('profile');
    Route::get('/user/change-password',ChangePasswordComponent::class)->name('changePassword');

    //Gallery
    Route::get('/admin/galleries',AdminGalleryComponent::class)->name('admin.galleries');
    Route::get('/add-gallery',AddGalleryComponent::class)->name('gallery.add');
});
