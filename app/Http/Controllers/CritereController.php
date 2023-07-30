<?php

namespace App\Http\Controllers;

use App\Models\Critere;
use App\Http\Requests\StoreCritereRequest;
use App\Http\Requests\UpdateCritereRequest;

class CritereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['criteres'] = Critere::orderBy('id','desc')->get();
        return view('backend.pages.show-criteres',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.create-critere');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCritereRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCritereRequest $request)
    {
        $criteriaID = $request->criteria_id;

        $critere   =   Critere::updateOrCreate(['id' => $criteriaID],
            [   'titre' => $request->titre,
                'description' => $request->description,
            ]);


        //return Response::json($enterprise);
        return redirect(\App::getLocale().'/criteres');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Critere  $critere
     * @return \Illuminate\Http\Response
     */
    public function show(Critere $critere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Critere  $critere
     * @return \Illuminate\Http\Response
     */
    public function edit(Critere $critere)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCritereRequest  $request
     * @param  \App\Models\Critere  $critere
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCritereRequest $request, Critere $critere)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Critere  $critere
     * @return \Illuminate\Http\Response
     */
    public function destroy(Critere $critere)
    {
        //
    }
}
