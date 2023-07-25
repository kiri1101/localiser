<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStreetRequest;
use App\Http\Requests\UpdateStreetRequest;
use App\Models\Street;

class StreetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['streets'] = Street::orderBy('id','desc')->get();
        //return view('backend.pages.show-streets',$data);
        return view('backend.pages.show-streets',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.create-street');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStreetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStreetRequest $request)
    {
        $streetID = $request->street_id;

        $street   =   Street::updateOrCreate(['id' => $streetID],
            [
                'titre' => $request->titre,
                'description' => $request->description,
            ]);

        if($request->fichier){
            $fileName = time().'_img1.'.$request->fichier->extension();
            $request->fichier->move(public_path('uploads/streets/'.$street->id.'/images/'), $fileName);
            $street->banner = 'uploads/streets/'.$street->id.'/images/'.$fileName;
            $street->save();
        }

        if($request->fichier2){

            $fileName = time().'_img2.'.$request->fichier2->extension();
            $request->fichier2->move(public_path('uploads/streets/'.$street->id.'/images/'), $fileName);
            $street->photo_path = 'uploads/streets/'.$street->id.'/images/'.$fileName;
            $street->save();
        }

        if($request->fichier3){
            $fileName = time().'_img3.'.$request->fichier3->extension();
            $request->fichier3->move(public_path('uploads/streets/'.$street->id.'/images/'), $fileName);
            $street->photo_path2 = 'uploads/streets/'.$street->id.'/images/'.$fileName;
            $street->save();
        }
        return redirect(\App::getLocale().'/streets');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Street  $street
     * @return \Illuminate\Http\Response
     */
    public function show(Street $street)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Street  $street
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, $id)
    {
        $data['street'] = Street::find($id);
        return view('backend.pages.edit-street',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStreetRequest  $request
     * @param  \App\Models\Street  $street
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStreetRequest $request, Street $street)
    {
        $streetID = $request->street_id;

        $street   =   street::updateOrCreate(['id' => $streetID],
            [
                'titre' => $request->titre,
                'description' => $request->description,
            ]);

        if($request->fichier){
            $fileName = time().'_img1.'.$request->fichier->extension();
            $request->fichier->move(public_path('uploads/streets/'.$street->id.'/images/'), $fileName);
            $street->banner = 'uploads/streets/'.$street->id.'/images/'.$fileName;
            $street->save();
        }

        if($request->fichier2){

            $fileName = time().'_img2.'.$request->fichier2->extension();
            $request->fichier2->move(public_path('uploads/streets/'.$street->id.'/images/'), $fileName);
            $street->photo_path = 'uploads/streets/'.$street->id.'/images/'.$fileName;
            $street->save();
        }

        if($request->fichier3){
            $fileName = time().'_img3.'.$request->fichier3->extension();
            $request->fichier3->move(public_path('uploads/streets/'.$street->id.'/images/'), $fileName);
            $street->photo_path2 = 'uploads/streets/'.$street->id.'/images/'.$fileName;
            $street->save();
        }
        return redirect(\App::getLocale().'/streets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Street  $street
     * @return \Illuminate\Http\Response
     */
    public function destroy(Street $street)
    {
        //
    }
}
