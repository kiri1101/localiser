<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['countries'] = Country::orderBy('id','desc')->get();
        return view('backend.pages.show-countries',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.create-country');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCountryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCountryRequest $request)
    {
        $countryID = $request->country_id;

        $country   =   Country::updateOrCreate(['id' => $countryID],
            [
                'titre' => $request->titre,
                'description' => $request->description,
            ]);

        if($request->fichier){
            $fileName = time().'_img1.'.$request->fichier->extension();
            $request->fichier->move(public_path('uploads/countries/'.$country->id.'/images/'), $fileName);
            $country->banner = 'uploads/countries/'.$country->id.'/images/'.$fileName;
            $country->save();
        }

        if($request->fichier2){

            $fileName = time().'_img2.'.$request->fichier2->extension();
            $request->fichier2->move(public_path('uploads/countries/'.$country->id.'/images/'), $fileName);
            $country->photo_path = 'uploads/countries/'.$country->id.'/images/'.$fileName;
            $country->save();
        }

        if($request->fichier3){
            $fileName = time().'_img3.'.$request->fichier3->extension();
            $request->fichier3->move(public_path('uploads/countries/'.$country->id.'/images/'), $fileName);
            $country->photo_path2 = 'uploads/countries/'.$country->id.'/images/'.$fileName;
            $country->save();
        }
        return redirect(\App::getLocale().'/countries');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, $id)
    {
        $data['country'] = Country::find($id);
        return view('backend.pages.edit-country',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCountryRequest  $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCountryRequest $request)
    {
        $countryID = $request->country_id;

        $country   =   Country::updateOrCreate(['id' => $countryID],
            [
                'titre' => $request->titre,
                'description' => $request->description,
            ]);

        if($request->fichier){
            $fileName = time().'_img1.'.$request->fichier->extension();
            $request->fichier->move(public_path('uploads/countries/'.$country->id.'/images/'), $fileName);
            $country->banner = 'uploads/countries/'.$country->id.'/images/'.$fileName;
            $country->save();
        }

        if($request->fichier2){

            $fileName = time().'_img2.'.$request->fichier2->extension();
            $request->fichier2->move(public_path('uploads/countries/'.$country->id.'/images/'), $fileName);
            $country->photo_path = 'uploads/countries/'.$country->id.'/images/'.$fileName;
            $country->save();
        }

        if($request->fichier3){
            $fileName = time().'_img3.'.$request->fichier3->extension();
            $request->fichier3->move(public_path('uploads/countries/'.$country->id.'/images/'), $fileName);
            $country->photo_path2 = 'uploads/countries/'.$country->id.'/images/'.$fileName;
            $country->save();
        }
        return redirect(\App::getLocale().'/countries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        //
    }
}
