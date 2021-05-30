<?php

use App\Http\Livewire\CartComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\NewsComponent;
use App\Http\Livewire\ShopComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ProductCategory;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\CareersComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\GalleryComponent;
use App\Http\Controllers\CartController;
use App\Http\Livewire\Admin\FaqComponent;
use App\Http\Livewire\SearchNewComponent;
use App\Http\Controllers\CareerController;
use App\Http\Livewire\Admin\PostComponent;
use App\Http\Livewire\NewDetailsComponent;
use App\Http\Controllers\CommentController;
use App\Http\Livewire\Admin\AddFaqComponent;
use App\Http\Livewire\NewsCategoryComponent;
use App\Http\Livewire\Admin\AddPostComponent;
use App\Http\Livewire\Admin\ProductComponent;
use App\Http\Livewire\Admin\SettingComponent;
use App\Http\Livewire\Admin\CategoryComponent;
use App\Http\Livewire\Admin\DashboardComponent;
use App\Http\Livewire\Admin\UpdateFaqComponent;
use App\Http\Livewire\Admin\AddGalleryComponent;
use App\Http\Livewire\Admin\AddProductComponent;
use App\Http\Livewire\Admin\UpdatePostComponent;
use App\Http\Livewire\Admin\AddCategoryComponent;
use App\Http\Livewire\Admin\AddPartnerComponent;
use App\Http\Livewire\Admin\RecruitmentComponent;
use App\Http\Livewire\Admin\UserProfileComponent;
use App\Http\Livewire\Admin\AdminGalleryComponent;
use App\Http\Livewire\Admin\PostCategoryComponent;
use App\Http\Livewire\Admin\UpdateGalleyComponent;
use App\Http\Livewire\Admin\UpdateProductComponent;
use App\Http\Livewire\Admin\AddRecruitmentComponent;
use App\Http\Livewire\Admin\ChangePasswordComponent;
use App\Http\Livewire\Admin\UpdateCategoryComponent;
use App\Http\Livewire\Admin\AddPostCategoryComponent;
use App\Http\Livewire\Admin\AddSliderComponent;
use App\Http\Livewire\Admin\CustomerComponent;
use App\Http\Livewire\Admin\EditRecruitmentComponent;
use App\Http\Livewire\Admin\PartnerComponent;
use App\Http\Livewire\Admin\SliderComponent;
use App\Http\Livewire\Admin\UpdatePartnerComponent;
use App\Http\Livewire\Admin\UpdatePostCategoryComponent;
use App\Http\Livewire\Admin\UpdateSliderComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ThankyouComponent;
use App\Http\Livewire\UserOrderComponent;

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

Route::post('/update-cart',[CartController::class,'updateCart'])->name('cart.update');

Route::post('/delete-item-cart',[CartController::class,'deleteCart'])->name('cart.delete');

Route::post('/destroy-item-cart',[CartController::class,'destroyCart'])->name('cart.destroy');

Route::post('/cart-checkout',[CartController::class,'checkout'])->name('cart.checkout');

Route::post('/order-checkout',[CartController::class,'orderCheckout'])->name('order.checkout');

Route::post('/cancel-order',[CartController::class,'cancelOrder'])->name('order.cancel');

Route::get('/checkout',CheckoutComponent::class)->name('checkout');

// Route::get('handle-payment', [PayPalPaymentController::class,'handlePayment'])->name('make.payment');

// Route::get('cancel-payment', [PayPalPaymentController::class,'paymentCancel'])->name('cancel.payment');

// Route::get('payment-success',[PayPalPaymentController::class,'paymentSuccess'])->name('success.payment');

Route::get('/product-category/{slug}',ProductCategory::class)->name('product-category');

Route::get('product/{slug}',DetailsComponent::class)->name('product.details');

Route::post('/comment',[CommentController::class,'addProductComment'])->name('comment');

Route::post('/comment/delete',[CommentController::class,'deleteProductComment'])->name('comment.delete');

Route::get('/careers',CareersComponent::class)->name('careers');

Route::post('/career/apply',[CareerController::class,'store'])->name('recruitment');

Route::get('/news',NewsComponent::class);

Route::get('/new/{new_slug}',NewDetailsComponent::class)->name('new.details');

Route::get('/news/search',SearchNewComponent::class)->name('new.search');

Route::get('/news-category/{slug}',NewsCategoryComponent::class)->name('new.category');

Route::post('/new/comment',[CommentController::class,'addPostComment'])->name('new.comment');

Route::post('/new/comment/delete',[CommentController::class,'deleteNewComment'])->name('new.comment.delete');

Route::get('/gallery',GalleryComponent::class);

Route::get('/contact',ContactComponent::class);

Route::get('/user-order',UserOrderComponent::class)->name('user.order');

Route::get('/thankyou',ThankyouComponent::class)->name('thankyou');

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

    Route::get('/update-gallery/{gallery_id}',UpdateGalleyComponent::class)->name('gallery.update');

    //Post Category
    Route::get('/post/cateogries',PostCategoryComponent::class)->name('post.categories');

    Route::get('/post/cateogry/add',AddPostCategoryComponent::class)->name('post.category.add');

    Route::get('/post/cateogry/update/{post_category_slug}',UpdatePostCategoryComponent::class)->name('post.category.update');

    //SLider
    Route::get('/sliders',SliderComponent::class)->name('sliders');

    Route::get('/add-slider',AddSliderComponent::class)->name('slider.add');

    Route::get('/update-slider/{slider_id}',UpdateSliderComponent::class)->name('slider.update');

    //Partner
    Route::get('/partners',PartnerComponent::class)->name('partners');

    Route::get('/add-partner',AddPartnerComponent::class)->name('partner.add');

    Route::get('/update-partner/{partner_id}',UpdatePartnerComponent::class)->name('partner.update');

    //Customer
    Route::get('/customer',CustomerComponent::class)->name('customers');

    //Order
    Route::get('/orders',\App\Http\Livewire\Admin\OrderComponent::class)->name('orders');

    //Application
    Route::get('/apply',\App\Http\Livewire\Admin\ApplyComponent::class)->name('apply');

    //Staff
    Route::get('/staffs',\App\Http\Livewire\Admin\StaffComponent::class)->name('staffs');

    //Invoice
    Route::get('/update-debt/{order_id}',\App\Http\Livewire\Admin\UpdateDebtComponent::class)->name('debt.update');

    //Bill
    Route::get('/invoice/{order_id}',\App\Http\Livewire\Admin\BillComponent::class)->name('invoice');

    //Refund
    Route::get('/refund/{order_id}',\App\Http\Livewire\Admin\RefundComponent::class)->name('refund');

    Route::get('/print-bill/{debt_id}',\App\Http\Livewire\Admin\BillRefundComponent::class)->name('bill.print');

    //Calendar
    Route::get('/calendar',\App\Http\Livewire\Admin\CalendarComponent::class)->name('calendar');

    Route::get('/history',\App\Http\Livewire\Admin\HistoryComponent::class)->name('history');
});
