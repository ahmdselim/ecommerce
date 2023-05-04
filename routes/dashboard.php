<?php

use App\Http\Controllers\dashboard\Ads\AdsDashboardController;
use App\Http\Controllers\dashboard\Auth\AuthDashboardController;
use App\Http\Controllers\dashboard\Brand\BrandDashboardController;
use App\Http\Controllers\dashboard\Category\CategoryDashboardController;
use App\Http\Controllers\dashboard\Department\DepartmentDashboardController;
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


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {

    Route::group([
        "prefix" => "admin"
    ], function () {
        Route::get("/auth", [AuthDashboardController::class, "index"])->name("admin.auth");
        Route::post("/auth/login", [AuthDashboardController::class, "login"])->name("admin.auth.login");

        Route::get("/home", function () {
            return \view("pages.dashboard.home.index");
        })->name("admin.home");

        Route::group([
            "prefix" => "department"
        ], function () {
            Route::get("/", [DepartmentDashboardController::class, "index"])->name("admin.department.index");
            Route::get("/create/", [DepartmentDashboardController::class, "create"])->name("admin.department.create");
            Route::post("/store/", [DepartmentDashboardController::class, "store"])->name("admin.department.store");
            Route::get("/edit/{department}", [DepartmentDashboardController::class, "edit"])->name("admin.department.edit");
            Route::put("/update/{department}", [DepartmentDashboardController::class, "update"])->name("admin.department.update");
            Route::delete("/destroy/{department}", [DepartmentDashboardController::class, "destroy"])->name("admin.department.destroy");
        });

        Route::group([
            "prefix" => "category"
        ], function () {
            Route::get("/", [CategoryDashboardController::class, "index"])->name("admin.category.index");
            Route::get("/create/", [CategoryDashboardController::class, "create"])->name("admin.category.create");
            Route::post("/store/", [CategoryDashboardController::class, "store"])->name("admin.category.store");
            Route::get("/edit/{category}", [CategoryDashboardController::class, "edit"])->name("admin.category.edit");
            Route::put("/update/{category}", [CategoryDashboardController::class, "update"])->name("admin.category.update");
            Route::delete("/destroy/{category}", [CategoryDashboardController::class, "destroy"])->name("admin.category.destroy");
        });


        Route::group([
            "prefix" => "ads"
        ], function () {
            Route::get("/", [AdsDashboardController::class, "index"])->name("admin.ads.index");
            Route::get("/create/", [AdsDashboardController::class, "create"])->name("admin.ads.create");
            Route::post("/store", [AdsDashboardController::class, "store"])->name("admin.ads.store");
            Route::get("/edit/{ad}", [AdsDashboardController::class, "edit"])->name("admin.ads.edit");
            Route::put("/update/{ad}", [AdsDashboardController::class, "update"])->name("admin.ads.update");
            Route::delete("/destroy/{ad}", [AdsDashboardController::class, "destroy"])->name("admin.ads.destroy");
        });

        Route::group([
            "prefix" => "brand"
        ], function () {
            Route::get("/", [BrandDashboardController::class, "index"])->name("admin.brands.index");
            Route::get("/create/", [BrandDashboardController::class, "create"])->name("admin.brands.create");
            Route::post("/store", [BrandDashboardController::class, "store"])->name("admin.brands.store");
            Route::get("/edit/{brand}", [BrandDashboardController::class, "edit"])->name("admin.brands.edit");
            Route::put("/update/{brand}", [BrandDashboardController::class, "update"])->name("admin.brands.update");
            Route::delete("/destroy/{brand}", [BrandDashboardController::class, "destroy"])->name("admin.brands.destroy");
        });
    });
});
