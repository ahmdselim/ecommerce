<?php

namespace App\Http\Repositories\endUser;

use App\Http\Interfaces\endUser\BookmarkInterface;
use App\Models\Bookmark;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BookmarkRepository implements BookmarkInterface
{
    private $profileModel, $bookmarkModel;

    public function __construct(Profile $profileModel, Bookmark $bookmarkModel)
    {
        $this->profileModel = $profileModel;
        $this->bookmarkModel = $bookmarkModel;
    }

    public function index()
    {
        $profile = $this->profileModel::where("user_id", Auth::user()->id)->first();
        // $bookmarks = $this->bookmarkModel::with(["ads"])->get();

        $bookmarks = DB::table('bookmarks')->join("ads", 'bookmarks.ad_id', 'ads.id')->select("bookmarks.*", "ads.*")->get();


        return \view("pages.endUser.dashboard.bookmark.index", compact("profile", "bookmarks"));
    }
}
