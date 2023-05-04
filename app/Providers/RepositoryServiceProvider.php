<?php

namespace App\Providers;

use App\Http\Interfaces\dashboard\AdsDashboardInterface;
use App\Http\Interfaces\dashboard\AuthDashboardInterface;
use App\Http\Interfaces\dashboard\BrandsDashboardInterface;
use App\Http\Interfaces\dashboard\CategoryDashboardInterface;
use App\Http\Interfaces\dashboard\DepartmentDashboardInterface;
use App\Http\Interfaces\endUser\AdsInterface;
use App\Http\Interfaces\endUser\AuthInterface;
use App\Http\Interfaces\endUser\BookmarkInterface;
use App\Http\Interfaces\endUser\HomeDashboardInterface;
use App\Http\Interfaces\endUser\HomeInterface;
use App\Http\Interfaces\endUser\MessageInterface;
use App\Http\Interfaces\endUser\MyAdsInterface;
use App\Http\Interfaces\endUser\ProductsInterface;
use App\Http\Interfaces\endUser\ProfileInterface;
use App\Http\Interfaces\endUser\ReviewAdInterface;
use App\Http\Interfaces\endUser\SettingsInterface;
use App\Http\Repositories\dashboard\AdsDashboardRepository;
use App\Http\Repositories\dashboard\AuthDashboardRepository;
use App\Http\Repositories\dashboard\BrandsDashboardRepository;
use App\Http\Repositories\dashboard\CategoryDashboardRepository;
use App\Http\Repositories\dashboard\DepartmentDashboardRepository;
use App\Http\Repositories\endUser\HomeRepository;
use App\Http\Repositories\endUser\AuthRepository;
use App\Http\Repositories\endUser\MyAdsRepository;
use App\Http\Repositories\endUser\AdsRepository;
use App\Http\Repositories\endUser\BookmarkRepository;
use App\Http\Repositories\endUser\HomeDashboardRepository;
use App\Http\Repositories\endUser\MessageRepository;
use App\Http\Repositories\endUser\ProductsRepository;
use App\Http\Repositories\endUser\ProfileRepository;
use App\Http\Repositories\endUser\SettingsRepository;
use Illuminate\Support\ServiceProvider;
use App\Http\Repositories\endUser\ReviewAdRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

        /**
         * endUser
         */

        // home
        $this->app->bind(
            HomeInterface::class,
            HomeRepository::class
        );

        // auth
        $this->app->bind(
            AuthInterface::class,
            AuthRepository::class
        );

        // profile
        $this->app->bind(
            ProfileInterface::class,
            ProfileRepository::class
        );

        // myAds
        $this->app->bind(
            MyAdsInterface::class,
            MyAdsRepository::class
        );

        // ads
        $this->app->bind(
            AdsInterface::class,
            AdsRepository::class
        );

        // reviews
        $this->app->bind(
            ReviewAdInterface::class,
            ReviewAdRepository::class
        );

        // products
        $this->app->bind(
            ProductsInterface::class,
            ProductsRepository::class
        );

        // settings
        $this->app->bind(
            SettingsInterface::class,
            SettingsRepository::class
        );

        // bookmark
        $this->app->bind(
            BookmarkInterface::class,
            BookmarkRepository::class
        );

        // home Dashboard
        $this->app->bind(
            HomeDashboardInterface::class,
            HomeDashboardRepository::class
        );

        // message Dashboard
        $this->app->bind(
            MessageInterface::class,
            MessageRepository::class
        );




        /**
         * dashboard
         */

        // login
        $this->app->bind(
            AuthDashboardInterface::class,
            AuthDashboardRepository::class
        );

        // ads
        $this->app->bind(
            AdsDashboardInterface::class,
            AdsDashboardRepository::class
        );

        // department
        $this->app->bind(
            DepartmentDashboardInterface::class,
            DepartmentDashboardRepository::class
        );

        // category
        $this->app->bind(
            CategoryDashboardInterface::class,
            CategoryDashboardRepository::class
        );

        // brand
        $this->app->bind(
            BrandsDashboardInterface::class,
            BrandsDashboardRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
