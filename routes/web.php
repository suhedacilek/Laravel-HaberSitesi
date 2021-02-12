<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('homepage');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/haber/{id}/{slug}', [HomeController::class, 'haber'])->name('haber');
Route::get('/categoryhaber/{id}/{slug}', [HomeController::class, 'categoryhaber'])->name('categoryhaber');
Route::post('/gethaber', [HomeController::class, 'gethaber'])->name('gethaber');
Route::get('/haberlist/{search}', [HomeController::class, 'haberlist'])->name('haberlist');



//Admin
Route::middleware('auth')->prefix('admin')->group(function () {


    //Admin

    Route::middleware('admin')->group(function () {


        Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home')->middleware('auth');

        Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
        Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
        Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
        Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
        Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
        Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
        Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');


        Route::prefix('haber')->group(function () {

            Route::get('/', [\App\Http\Controllers\Admin\HaberController::class, 'index'])->name('admin_haber');
            Route::get('create', [\App\Http\Controllers\Admin\HaberController::class, 'create'])->name('admin_haber_add');
            Route::post('store', [\App\Http\Controllers\Admin\HaberController::class, 'store'])->name('admin_haber_store');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\HaberController::class, 'update'])->name('admin_haber_update');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\HaberController::class, 'edit'])->name('admin_haber_edit');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\HaberController::class, 'destroy'])->name('admin_haber_delete');
            Route::get('show', [\App\Http\Controllers\Admin\HaberController::class, 'show'])->name('admin_haber_show');

        });

        //Review
        Route::prefix('review')->group(function () {

            Route::get('/', [\App\Http\Controllers\Admin\ReviewController::class, 'index'])->name('admin_review');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'update'])->name('admin_review_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'destroy'])->name('admin_review_delete');
            Route::get('show/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'show'])->name('admin_review_show');
        });

        //Setting
        Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
        Route::post('setting/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');

        //Faq
        Route::prefix('faq')->group(function () {

            Route::get('/', [\App\Http\Controllers\Admin\FaqController::class, 'index'])->name('admin_faq');
            Route::get('create', [\App\Http\Controllers\Admin\FaqController::class, 'create'])->name('admin_faq_add');
            Route::post('store', [\App\Http\Controllers\Admin\FaqController::class, 'store'])->name('admin_faq_store');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'update'])->name('admin_faq_update');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'edit'])->name('admin_faq_edit');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'destroy'])->name('admin_faq_delete');
            Route::get('show', [\App\Http\Controllers\Admin\FaqController::class, 'show'])->name('admin_faq_show');

        });

        Route::prefix('user')->group(function () {


            Route::get('/', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_users');
            Route::post('create', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin_user_add');
            Route::post('store', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_user_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_delete');
            Route::get('show/{id}', [\App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');
            Route::get('userrole/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_roles'])->name('admin_user_roles');
            Route::post('userrolestore/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_store'])->name('admin_user_role_add');
            Route::get('userroledelete/{userid}/{roleid}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_delete'])->name('admin_user_role_delete');

        });

        Route::prefix('message')->group(function () {

            Route::get('/', [\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('admin_message');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'update'])->name('admin_message_update');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'edit'])->name('admin_message_edit');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('admin_message_delete');
            Route::get('show', [\App\Http\Controllers\Admin\MessageController::class, 'show'])->name('admin_message_show');

        });

    });
});


//Haber Image Gallery
Route::prefix('image')->group(function () {

    Route::get('create/{product_id}',[\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
    Route::post('store/{product_id}',[\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
    Route::get('delete/{id}/{product_id}',[\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
    Route::get('show',[\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
});

//Login
Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('admin_logout');

//User
Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {
    Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('myprofile');

    Route::get('/myreviews', [\App\Http\Controllers\UserController::class, 'myreviews'])->name('myreviews');
    Route::get('/destroymyreview/{id}', [\App\Http\Controllers\UserController::class, 'destroymyreview'])->name('user_review_delete');
});

//User
Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {

    Route::get('user/profile', [UserController::class, 'index'])->name('userprofile');


    Route::prefix('haber')->group(function () {

        Route::get('/', [\App\Http\Controllers\ProductController::class, 'index'])->name('user_haber');
        Route::get('create', [\App\Http\Controllers\ProductController::class, 'create'])->name('user_haber_add');
        Route::post('store', [\App\Http\Controllers\ProductController::class, 'store'])->name('user_haber_store');
        Route::post('update/{id}', [\App\Http\Controllers\ProductController::class, 'update'])->name('user_haber_update');
        Route::get('edit/{id}', [\App\Http\Controllers\ProductController::class, 'edit'])->name('user_haber_edit');
        Route::get('delete/{id}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('user_haber_delete');
        Route::get('show', [\App\Http\Controllers\ProductController::class, 'show'])->name('user_haber_show');
    });

        Route::prefix('image')->group(function () {

            Route::get('create/{product_id}',[\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('user_image_add');
            Route::post('store/{product_id}',[\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('user_image_store');
            Route::get('delete/{id}/{product_id}',[\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('user_image_delete');
            Route::get('show',[\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('user_image_show');
        });
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
