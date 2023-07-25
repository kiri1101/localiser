<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommunityprofileRequest;
use App\Http\Requests\UpdateCommunityprofileRequest;
use App\Models\Communityprofile;

class CommunityprofileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreCommunityprofileRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommunityprofileRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Communityprofile $communityprofile
     * @return \Illuminate\Http\Response
     */
    public function show(Communityprofile $communityprofile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Communityprofile $communityprofile
     * @return \Illuminate\Http\Response
     */
    public function edit(Communityprofile $communityprofile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateCommunityprofileRequest $request
     * @param \App\Models\Communityprofile $communityprofile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommunityprofileRequest $request, Communityprofile $communityprofile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Communityprofile $communityprofile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Communityprofile $communityprofile)
    {
        //
    }
}
