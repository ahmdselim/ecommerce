<?php

namespace App\Http\Controllers\endUser\Ads;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\endUser\AdsInterface;
use App\Http\Requests\Ads\StoreAdsRequest;
use Illuminate\Http\Request;

class AdsController extends Controller
{

    private $adInterface;

    public function __construct(AdsInterface $adInterface)
    {
        $this->adInterface = $adInterface;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->adInterface->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->adInterface->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdsRequest $request)
    {
        return $this->adInterface->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->adInterface->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
