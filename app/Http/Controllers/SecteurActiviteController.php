<?php

namespace App\Http\Controllers;

use App\Models\Critere;
use App\Models\SecteurActivite;
use App\Http\Requests\StoreSecteurActiviteRequest;
use App\Http\Requests\UpdateSecteurActiviteRequest;
use App\Models\SecteurActiviteCritere;

class SecteurActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['secteurs'] = SecteurActivite::orderBy('id','asc')->get();

        foreach($data['secteurs'] as $secteur){
            $scs = SecteurActiviteCritere::orderBy('id','asc')->where('SecteurActivite_id',$secteur->id)->get();
            $myArray = array();

            foreach($scs as $sc){
                array_push($myArray, Critere::find($sc->critere_id));
                //dd($myArray);
            }
            $secteur->criteres = $myArray;
        }

        $data['secteur_criteres']=SecteurActiviteCritere::orderBy('id','asc')->where('SecteurActivite_id',);
        return view('backend.pages.show-secteurs',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['criteres'] = Critere::orderBy('id','desc')->get();
        return view('backend.pages.create-secteur',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSecteurActiviteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSecteurActiviteRequest $request)
    {
        $secteurID = $request->secteur_id;
        $secteur   =   SecteurActivite::updateOrCreate(['id' => $secteurID],
            [   'titre' => $request->titre,
                'description' => $request->description,
                'icon' => $request->icon,
            ]);


        if($request->fichier){

            $fileName = time().'.'.$request->fichier->extension();
            $request->fichier->move(public_path('uploads/Business-Sectors/'.$secteur->id.'/images/'), $fileName);
            $secteur->banner = 'uploads/Business-Sectors/'.$secteur->id.'/images/'.$fileName;
            $secteur->save();

        }


        if($request->criteres){
            foreach ($request->criteres as $critere_id){

                $sc = SecteurActiviteCritere::create(
                    [
                        'SecteurActivite_id' => $secteur->id,
                        'critere_id' => $critere_id,
                    ]);
            }
        }




        //return Response::json($enterprise);
        return redirect(\App::getLocale().'/secteurs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SecteurActivite  $secteurActivite
     * @return \Illuminate\Http\Response
     */
    public function show(SecteurActivite $secteurActivite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SecteurActivite  $secteurActivite
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, $id)
    {
        $data['secteur'] = SecteurActivite::find($id);
        $data['criteres'] = Critere::orderBy('id','desc')->get();
        return view('backend.pages.update-secteur',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSecteurActiviteRequest  $request
     * @param  \App\Models\SecteurActivite  $secteurActivite
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSecteurActiviteRequest $request, SecteurActivite $secteurActivite)
    {
        $secteurID = $request->secteur_id;
        $secteur   =   SecteurActivite::updateOrCreate(['id' => $secteurID],
            [   'titre' => $request->titre,
                'description' => $request->description,
                'icon' => $request->icon,
            ]);

        if($request->criteres){
            foreach ($request->criteres as $critere_id){

                $sc = SecteurActiviteCritere::create(
                    [
                        'SecteurActivite_id' => $secteur->id,
                        'critere_id' => $critere_id,
                    ]);
            }
        }

        if($request->fichier){
            $fileName = time().'img01.'.$request->fichier->extension();
            $request->fichier->move(public_path('uploads/Business-Sectors/'.$secteur->id.'/images/'), $fileName);
            $secteur->banner = 'uploads/Business-Sectors/'.$secteur->id.'/images/'.$fileName;
            $secteur->save();
        }

        return redirect(\App::getLocale().'/secteurs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SecteurActivite  $secteurActivite
     * @return \Illuminate\Http\Response
     */
    public function destroy(StoreSecteurActiviteRequest $request)
    {
        SecteurActivite::destroy($request->id);
        return redirect()->route('show-all-secteurs' , app()->getLocale());

    }
}
