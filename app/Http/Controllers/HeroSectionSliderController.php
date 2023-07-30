<?php

namespace App\Http\Controllers;

use App\Models\HeroSectionSlider;
use App\Http\Requests\StoreHeroSectionSliderRequest;
use App\Http\Requests\UpdateHeroSectionSliderRequest;

class HeroSectionSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['slides'] = HeroSectionSlider::orderBy('id','desc')->paginate(8);
        return view('backend.pages.show-hero-section-slides',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.create-hero-section-slide');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHeroSectionSliderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHeroSectionSliderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HeroSectionSlider  $heroSectionSlider
     * @return \Illuminate\Http\Response
     */
    public function show(HeroSectionSlider $heroSectionSlider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HeroSectionSlider  $heroSectionSlider
     * @return \Illuminate\Http\Response
     */
    public function edit(HeroSectionSlider $heroSectionSlider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHeroSectionSliderRequest  $request
     * @param  \App\Models\HeroSectionSlider  $heroSectionSlider
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHeroSectionSliderRequest $request, HeroSectionSlider $heroSectionSlider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HeroSectionSlider  $heroSectionSlider
     * @return \Illuminate\Http\Response
     */
    public function destroy(HeroSectionSlider $heroSectionSlider)
    {
        //
    }
}
