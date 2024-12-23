<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\LocaleController;
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


Route::get('/locale/{locale}', [LocaleController::class, 'changeLang'])->name('changeLang');


Route::name('app.')->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'index')->name('home');
        Route::get('/about', 'about')->name('about');
        Route::get('/cars', 'cars')->name('cars');
        Route::get('/cars/{id}', 'car')->name('car');
        Route::get('/contact', 'contact')->name('contact');
        Route::get('/blogs', 'blogs')->name('blogs');
        Route::get('/blog/{blog:slug}', 'blog')->name('blog');
        Route::post('/comment/{car_id}', 'comment')->name('comment')->middleware('auth');
    });


    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

    Route::controller(AuthController::class)->group(function (){
        Route::get('/register', 'register')->name('register');
        Route::post('/register', 'registerPost')->name('registerPost');
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'loginPost')->name('loginPost');
        Route::get('/profile', 'profile')->name('profile')->middleware('auth');
        Route::get('/logout', 'logout')->name('logout');
    });
});


Route::prefix('admin')->name('admin.')->group(function (){

    Route::controller(AuthController::class)->group(function (){
        Route::get('/login', 'login')->name('login');
    });

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('admin');


    Route::controller(CategoryController::class)->middleware('admin')->prefix('categories')->name('categories.')->group(function (){

        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');

    });


    Route::controller(BlogController::class)->middleware('admin')->prefix('blogs')->name('blogs.')->group(function (){

        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');

    });

    Route::controller(CarController::class)->middleware('admin')->prefix('cars')->name('cars.')->group(function (){

        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');

    });


    Route::controller(App\Http\Controllers\Admin\ContactController::class)->middleware('admin')->prefix('contact')->name('contact.')->group(function (){

        Route::get('/', 'index')->name('index');
        Route::get('/read/{id}', 'read')->name('read');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');

    });


    Route::controller(SettingController::class)->middleware('admin')->prefix('setting')->name('setting.')->group(function (){

        Route::get('/', 'index')->name('index');
        Route::post('/update', 'update')->name('update');
    });


    Route::controller(ServiceController::class)->middleware('admin')->prefix('service')->name('service.')->group(function (){
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');

        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });


});