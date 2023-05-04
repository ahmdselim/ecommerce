<?php

use App\Http\Controllers\endUser\Ads\AdsController;
use App\Http\Controllers\endUser\Auth\AuthController;
use App\Http\Controllers\endUser\Bookmark\BookmarkController;
use App\Http\Controllers\endUser\Home\HomeController;
use App\Http\Controllers\endUser\HomeDashboard\HomeDashboardController;
use App\Http\Controllers\endUser\MyAds\MyAdsController;
use App\Http\Controllers\endUser\Product\ProductsController;
use App\Http\Controllers\endUser\Profile\ProfileController;
use App\Http\Controllers\endUser\ReviewAds\ReviewAdsController;
use App\Http\Controllers\endUser\Settings\SettingsController;
use App\Http\Controllers\Message\MessageController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
    Route::get('/', [HomeController::class, "index"])->name("home.index");



    Route::group([
        "prefix" => "auth",
        "middleware" => "guest"
    ], function () {
        Route::get('/', [AuthController::class, "index"])->name("auth");
        Route::post('/login', [AuthController::class, "login"])->name("auth.login");
        Route::post('/signup', [AuthController::class, "signup"])->name("auth.signup");
        Route::middleware("auth")->get('/logout', [AuthController::class, "logout"])->name("auth.logout")->withoutMiddleware('guest');
    });

    Route::group([
        "prefix" => "dashboard",
        "middleware" => "adminAuth"
    ], function () {
        Route::get('/home', [HomeDashboardController::class, "index"])->name('dashboard.home');
        Route::get('/profile', [ProfileController::class, "index"])->name('dashboard.profile');
        Route::put('/profile/{id}/update', [ProfileController::class, "update"])->name('dashboard.profile.update');
        Route::get('/myads', [MyAdsController::class, "index"])->name("dashboard.myAds");
        Route::post('/myads/{id}/addToBookmark', [MyAdsController::class, "addToBookmark"])->name("dashboard.myAds.addToBookmark");
        Route::get("/ad/create", [AdsController::class, "create"])->name("dashboard.ad.create");
        Route::post("/ad/store", [AdsController::class, "store"])->name("dashboard.ad.store");
        Route::get("/product/create", [ProductsController::class, "create"])->name("dashboard.product.create");
        Route::post("/product/store", [ProductsController::class, "store"])->name("dashboard.product.store");
        Route::get("/settings", [SettingsController::class, "index"])->name("dashboard.settings");
        Route::get("/bookmark", [BookmarkController::class, "index"])->name("dashboard.bookmark");
        Route::get("/{id}/message", [MessageController::class, "index"])->name("dashboard.message")->middleware("checkUser");
        Route::post("{id}/message/store", [MessageController::class, "store"])->name("dashboard.message.store")->middleware("checkUser");
    });

    Route::group([
        'prefix' => 'ads'
    ], function () {
        Route::get("/", [AdsController::class, "index"])->name('endUser.ads.index');
        Route::get("/{id}/show", [AdsController::class, "show"])->name('endUser.ads.show');
        Route::post("/store", [ReviewAdsController::class, "store"])->name('endUser.ads.store');
    });

    // Route::group([
    //     'prefix' => 'products'
    // ], function () {
    //     Route::get("/", [ProductsController::class, "index"])->name('endUser.ads.index');
    //     Route::get("/{id}/show", [ProductsController::class, "show"])->name('endUser.ads.show');
    //     Route::post("/store", [ReviewAdsController::class, "store"])->name('endUser.ads.store');
    // });
});
