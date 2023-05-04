<?php

namespace App\Http\Controllers\endUser\Settings;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\endUser\SettingsInterface;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    private $settingsInterface;

    public function __construct(SettingsInterface $settingsInterface)
    {
        $this->settingsInterface = $settingsInterface;
    }

    public function index()
    {
        return $this->settingsInterface->index();
    }
}
