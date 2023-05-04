<?php

namespace App\Http\Controllers\dashboard\Ads;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\dashboard\AdsDashboardInterface;
use App\Http\Requests\Ads\StoreAdsRequest;
use App\Http\Requests\Ads\UpdateAdsRequest;
use App\Models\Ad;
// use Illuminate\Http\Request;

class AdsDashboardController extends Controller
{

    private $adsDashboardInterface;

    public function __construct(AdsDashboardInterface $adsDashboardInterface)
    {
        $this->adsDashboardInterface = $adsDashboardInterface;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->adsDashboardInterface->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->adsDashboardInterface->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdsRequest $request)
    {
        return $this->adsDashboardInterface->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ad $ad)
    {
        //
        return $this->adsDashboardInterface->edit($ad);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdsRequest $request, Ad $ad)
    {
        return $this->adsDashboardInterface->update($request, $ad);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ad $ad)
    {
        return $this->adsDashboardInterface->destroy($ad);
    }
}
