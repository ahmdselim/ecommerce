<?php

namespace App\Http\Controllers\endUser\HomeDashboard;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\endUser\HomeDashboardInterface;
use Illuminate\Http\Request;

class HomeDashboardController extends Controller
{
    private $homeDashboardInterface;

    public function __construct(HomeDashboardInterface $homeDashboardInterface)
    {
        $this->homeDashboardInterface = $homeDashboardInterface;
    }


    public function index()
    {
        return $this->homeDashboardInterface->index();
    }
}
