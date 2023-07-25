<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Http\Requests\StoreCommentaireRequest;
use App\Http\Requests\UpdateCommentaireRequest;
use App\Models\CritereGrade;
use App\Models\Enterprise;
use App\Models\Entreprise_Critere;
use EntrepriseCritere;

class CommentaireController extends Controller
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
     * @param  \App\Http\Requests\StoreCommentaireRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommentaireRequest $request){

        $count = 0;
        $sum = 0;

        if ($request->critere_0) {
            $count++;
            $sum += $request->critere_0;

            Entreprise_Critere::create([

                'enterprise_id' => $request->company_id,
                'grade' => $request->critere_0,
                'critere_id' => $request->critere_id_0,
            ]);
        }

        if ($request->critere_1) {
            $count++;
            $sum += $request->critere_1;
            Entreprise_Critere::create([
                'enterprise_id' => $request->company_id,
                'grade' => $request->critere_1,
                'critere_id' => $request->critere_id_1,
            ]);
        }

        if ($request->critere_2) {
            $count++;
            $sum += $request->critere_2;
            Entreprise_Critere::create([
                'enterprise_id' => $request->company_id,
                'grade' => $request->critere_2,
                'critere_id' => $request->critere_id_2,
            ]);
        }

        if ($request->critere_3) {
            $count++;
            $sum += $request->critere_3;
            Entreprise_Critere::create([
                'enterprise_id' => $request->company_id,
                'grade' => $request->critere_3,
                'critere_id' => $request->critere_id_3,
            ]);
        }

        if ($request->critere_4) {
            $count++;
            $sum += $request->critere_4;
            Entreprise_Critere::create([
                'enterprise_id' => $request->company_id,
                'grade' => $request->critere_4,
                'critere_id' => $request->critere_id_4,
            ]);
        }

        $grade = $sum/$count;


        $commentaireID = $request->commentaire_id;

        $critere   =   Commentaire::updateOrCreate(['id' => $commentaireID],
            [   'name' => $request->name,
                'email' => $request->email,
                'comment' => $request->comment,
                'enterprise_id' => $request->company_id,
                'note' => $grade
            ]);
        return  redirect()->route('single-company',[app()->getLocale(), $request->company_id]);

        $entreprise = Enterprise::find($request->company_id);
        $entreprise->rating = Commentaire::where('enterprise_id',$request->company_id)->avg('note');
        $entreprise->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function show(Commentaire $commentaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Commentaire $commentaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommentaireRequest  $request
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommentaireRequest $request, Commentaire $commentaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commentaire $commentaire)
    {
        //
    }
}


