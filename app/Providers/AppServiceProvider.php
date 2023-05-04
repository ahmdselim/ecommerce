<?php

namespace App\Providers;

use App\Models\Bookmark;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(Request $request): void
    {
        // $allBookmark = auth()->user() ? Bookmark::where("user_id", auth()->user()->id)->count() : null;
        // dd($request->user());
        // View::share('allBookmark', $allBookmark);
    }
}
