<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $profiles = Profile::all();
        return view('profiles.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfileRequest $request)
    {
        //
        $request->validate([
            'user_id'=> 'required',    
            'firstname'=> 'required',
            'lastname'=> 'required',
            ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        //
        return view('profile.show', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
        return view('profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfileRequest $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
