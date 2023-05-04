<?php

namespace App\Http\Controllers\endUser\Profile;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\endUser\ProfileInterface;
use App\Http\Requests\UserProfile\UpdateUserProfileRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    private $profileInterface;

    public function __construct(ProfileInterface $profileInterface)
    {
        $this->profileInterface = $profileInterface;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->profileInterface->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserProfileRequest $request, string $id)
    {
        return $this->profileInterface->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
