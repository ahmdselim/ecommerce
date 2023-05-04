<?php

namespace App\Http\Controllers\endUser\Bookmark;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\endUser\BookmarkInterface;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    private $bookmarkInterface;

    public function __construct(BookmarkInterface $bookmarkInterface)
    {
        $this->bookmarkInterface = $bookmarkInterface;
    }


    public function index()
    {
        return $this->bookmarkInterface->index();
    }
}
