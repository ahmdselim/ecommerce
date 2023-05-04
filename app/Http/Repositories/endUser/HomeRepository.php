<?php

namespace App\Http\Repositories\endUser;

use App\Http\Interfaces\endUser\HomeInterface;
use App\Mail\UserWelcome;
use App\Models\Ad;
use App\Models\Bookmark;
use App\Models\Checkout;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class HomeRepository implements HomeInterface
{

    private $adModel, $bookmarkModel, $checkoutModel;

    public function __construct(Ad $adModel, Bookmark $bookmarkModel, Checkout $checkoutModel)
    {
        $this->adModel = $adModel;
        $this->bookmarkModel = $bookmarkModel;
        $this->checkoutModel = $checkoutModel;
    }

    public function index()
    {
        $adsOfCategory = $this->adModel::with("category", "adImages")->where("status", "accept")->get();
        $randomAds = $this->adModel::inRandomOrder()->where("status", "accept")->limit(5)->get();
        $ourRecommendsAds = $this->adModel::where('visitors', '>', 0)->where("status", "accept")->inRandomOrder()->limit(5)->get();
        $topProductByCheckout = $this->checkoutModel::whereMonth(
            'created_at',
            '=',
            Carbon::now()->subMonth()->month
        )->orWhereMonth(
            'created_at',
            '=',
            Carbon::now()->month
        )->with("product", "user")->inRandomOrder()
            ->limit(6)
            ->get();

        // dd(auth()->check());


        // Mail::to("ah3139892@gmail.com")->send(new UserWelcome());

        return view('pages.endUser.home.index', compact('adsOfCategory', 'randomAds', 'ourRecommendsAds', 'topProductByCheckout'));
    }
}
