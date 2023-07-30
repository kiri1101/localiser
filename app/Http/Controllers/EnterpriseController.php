<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEnterpriseRequest;
use App\Http\Requests\UpdateEnterpriseRequest;
use App\Models\Country;
use App\Models\Enterprise;
use App\Models\SecteurActivite;
use App\Models\Street;
use App\Models\Town;
use Redirect;
use Response;


class EnterpriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['enterprises'] = Enterprise::orderBy('id', 'desc')->get();
        return view('backend2.pages.enterprises.show-enterprises', $data);
        //return view('backend.pages.show-entreprises',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['secteurs'] = SecteurActivite::orderBy('id','desc')->get();
        $data['countries'] = Country::orderBy('id','desc')->get();
        $data['towns'] = Town::orderBy('id','desc')->get();
        $data['streets'] = Street::orderBy('id','desc')->get();
        return view('backend.pages.create-entreprise',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEnterpriseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEnterpriseRequest $request)
    {

        $enterpriseID = $request->enterprise_id;

        $enterprise   =   Enterprise::updateOrCreate(['id' => $enterpriseID],
            [   'raison_social' => $request->raison_social,
                'carte_contribuable' => $request->carte_contribuable,
                'registre_commerce'=> $request->registre_commerce,
                'statut_juridique' => $request->statut_juridique,
                'type_entreprise' => $request->type_entreprise,
                'chiffres_affaires'=> $request->chiffres_affaires,
                'short_description'=> $request->short_description,
                'description'=> $request->description,
                'services'=> $request->services,
                'slogan'=> $request->slogan,

                'social_media_whatsapp'=> $request->social_media_whatsapp,
                'social_media_linkedin'=> $request->social_media_linkedin,
                'social_media_facebook'=> $request->social_media_facebook,


                'nombre_employees' => $request->nombre_employees,
                'note_moyennes' => $request->note_moyennes,
                'nombre_commentaire'=> $request->nombre_commentaire,
                'status_localizeur' => $request->status_localizeur,
                'SecteurActivite_id' => $request->secteur_activite,
                'localisation_pays_id'=> $request->localisation_pays,
                'localisation_street_id'=> $request->localisation_street,

                'localisation_ville_id' => $request->localisation_ville,
                'localisation_adresse'=> $request->localisation_adresse,
                'localisation_bp' => $request->localisation_bp,
                'localisation_tel' => $request->localisation_tel,
                'localisation_tel_2' => $request->localisation_tel_2,
                'localisation_email'=> $request->localisation_email,
                'localisation_fax' => $request->localisation_fax,
                'localisation_siteweb' => $request->localisation_siteweb,
                'deleted_at'=> $request->deleted_at,
                ]);

        if($request->logo){

            $fileName = time().'_logo.'.$request->logo->extension();
            $request->logo->move(public_path('uploads/entreprises/logo/'.$enterprise->id.'/company-images/'), $fileName);
            $enterprise->logo = 'uploads/entreprises/logo/'.$enterprise->id.'/company-images/'.$fileName;
            $enterprise->save();
        }

        if($request->fichier){
            $fileName = time().'_img1.'.$request->fichier->extension();
            $request->fichier->move(public_path('uploads/entreprises/'.$enterprise->id.'/company-images/'), $fileName);
            $enterprise->photo_path = 'uploads/entreprises/'.$enterprise->id.'/company-images/'.$fileName;
            $enterprise->save();
        }

        if($request->fichier2){

            $fileName = time().'_img2.'.$request->fichier2->extension();
            $request->fichier2->move(public_path('uploads/entreprises/'.$enterprise->id.'/company-images/'), $fileName);
            $enterprise->photo_path2 = 'uploads/entreprises/'.$enterprise->id.'/company-images/'.$fileName;
            $enterprise->save();
        }

        if($request->fichier3){
            $fileName = time().'_img3.'.$request->fichier3->extension();
            $request->fichier3->move(public_path('uploads/entreprises/'.$enterprise->id.'/company-images/'), $fileName);
            $enterprise->photo_path3 = 'uploads/entreprises/'.$enterprise->id.'/company-images/'.$fileName;
            $enterprise->save();
        }

        if($request->fichier4){
            $fileName = time().'_img4.'.$request->fichier4->extension();
            $request->fichier4->move(public_path('uploads/entreprises/'.$enterprise->id.'/company-images/'), $fileName);
            $enterprise->photo_path4 = 'uploads/entreprises/'.$enterprise->id.'/company-images/'.$fileName;
            $enterprise->save();
        }

        if($request->fichier5){
            $fileName = time().'_img5.'.$request->fichier5->extension();
            $request->fichier5->move(public_path('uploads/entreprises/'.$enterprise->id.'/company-images/'), $fileName);
            $enterprise->photo_path5 = 'uploads/entreprises/'.$enterprise->id.'/company-images/'.$fileName;
            $enterprise->save();
        }

        if($request->fichier6){
            $fileName = time().'_img6.'.$request->fichier6->extension();
            $request->fichier6->move(public_path('uploads/entreprises/'.$enterprise->id.'/company-images/'), $fileName);
            $enterprise->photo_path6 = 'uploads/entreprises/'.$enterprise->id.'/company-images/'.$fileName;
            $enterprise->save();
        }

       // 'photo_path' => 'uploads/company-images/'.trim($request->raison_social, " ").'/'.$fileName,



        //return Response::json($enterprise);
        return redirect(\App::getLocale().'/entreprises');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enterprise  $enterprise
     * @return \Illuminate\Http\Response
     */
    public function show(Enterprise $enterprise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enterprise  $enterprise
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, $id)
    {
        $data['enterprise']  = Enterprise::where('id',$id)->first();
        $data['secteurs'] = SecteurActivite::orderBy('id','desc')->get();
        $data['countries'] = Country::orderBy('id','desc')->get();
        $data['towns'] = Town::orderBy('id','desc')->get();
        $data['streets'] = Street::orderBy('id','desc')->get();
        return view('backend.pages.update-entreprise',$data);

        //return Response::json($enterprise);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEnterpriseRequest  $request
     * @param  \App\Models\Enterprise  $enterprise
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEnterpriseRequest $request, Enterprise $enterprise)
    {
        $enterpriseID = $request->enterprise_id;


        $enterprise   =   Enterprise::updateOrCreate(['id' => $enterpriseID],
            [   'raison_social' => $request->raison_social,
                'carte_contribuable' => $request->carte_contribuable,
                'registre_commerce'=> $request->registre_commerce,
                'statut_juridique' => $request->statut_juridique,
                'type_entreprise' => $request->type_entreprise,
                'chiffres_affaires'=> $request->chiffres_affaires,
                'short_description'=> $request->short_description,
                'description'=> $request->description,
                'services'=> $request->services,
                'slogan'=> $request->slogan,

                'social_media_whatsapp'=> $request->social_media_whatsapp,
                'social_media_linkedin'=> $request->social_media_linkedin,
                'social_media_facebook'=> $request->social_media_facebook,


                'nombre_employees' => $request->nombre_employees,
                'note_moyennes' => $request->note_moyennes,
                'nombre_commentaire'=> $request->nombre_commentaire,
                'status_localizeur' => $request->status_localizeur,
                'SecteurActivite_id' => $request->secteur_activite,
                'localisation_pays_id'=> $request->localisation_pays,
                'localisation_street_id'=> $request->localisation_street,

                'localisation_ville_id' => $request->localisation_ville,
                'localisation_adresse'=> $request->localisation_adresse,
                'localisation_bp' => $request->localisation_bp,
                'localisation_tel' => $request->localisation_tel,
                'localisation_tel_2' => $request->localisation_tel_2,
                'localisation_email'=> $request->localisation_email,
                'localisation_fax' => $request->localisation_fax,
                'localisation_siteweb' => $request->localisation_siteweb,
                'deleted_at'=> $request->deleted_at,

                'top_10' => $request->top_10 =="true",
                'top_30' => $request->top_30 =="true",
                'top_50' => $request->top_50 =="true",

            ]);



        if($request->logo){

            $fileName = time().'_logo.'.$request->logo->extension();
            $request->logo->move(public_path('uploads/entreprises/logo/'.$enterprise->id.'/company-images/'), $fileName);
            $enterprise->logo = 'uploads/entreprises/logo/'.$enterprise->id.'/company-images/'.$fileName;
            $enterprise->save();
        }

        if($request->fichier){
            $fileName = time().'_img1.'.$request->fichier->extension();
            $request->fichier->move(public_path('uploads/entreprises/'.$enterprise->id.'/company-images/'), $fileName);
            $enterprise->photo_path = 'uploads/entreprises/'.$enterprise->id.'/company-images/'.$fileName;
            $enterprise->save();
        }

        if($request->fichier2){

            $fileName = time().'_img2.'.$request->fichier2->extension();
            $request->fichier2->move(public_path('uploads/entreprises/'.$enterprise->id.'/company-images/'), $fileName);
            $enterprise->photo_path2 = 'uploads/entreprises/'.$enterprise->id.'/company-images/'.$fileName;
            $enterprise->save();
        }

        if($request->fichier3){
            $fileName = time().'_img3.'.$request->fichier3->extension();
            $request->fichier3->move(public_path('uploads/entreprises/'.$enterprise->id.'/company-images/'), $fileName);
            $enterprise->photo_path3 = 'uploads/entreprises/'.$enterprise->id.'/company-images/'.$fileName;
            $enterprise->save();
        }

        if($request->fichier4){
            $fileName = time().'_img4.'.$request->fichier4->extension();
            $request->fichier4->move(public_path('uploads/entreprises/'.$enterprise->id.'/company-images/'), $fileName);
            $enterprise->photo_path4 = 'uploads/entreprises/'.$enterprise->id.'/company-images/'.$fileName;
            $enterprise->save();
        }

        if($request->fichier5){
            $fileName = time().'_img5.'.$request->fichier5->extension();
            $request->fichier5->move(public_path('uploads/entreprises/'.$enterprise->id.'/company-images/'), $fileName);
            $enterprise->photo_path5 = 'uploads/entreprises/'.$enterprise->id.'/company-images/'.$fileName;
            $enterprise->save();
        }

        if($request->fichier6){
            $fileName = time().'_img6.'.$request->fichier6->extension();
            $request->fichier6->move(public_path('uploads/entreprises/'.$enterprise->id.'/company-images/'), $fileName);
            $enterprise->photo_path6 = 'uploads/entreprises/'.$enterprise->id.'/company-images/'.$fileName;
            $enterprise->save();
        }

        if($request->fichier7){
            $fileName = time().'_img7.'.$request->fichier7->extension();
            $request->fichier7->move(public_path('uploads/entreprises/'.$enterprise->id.'/company-images/'), $fileName);
            $enterprise->photo_path7 = 'uploads/entreprises/'.$enterprise->id.'/company-images/'.$fileName;
            $enterprise->save();
        }

        if($request->fichier8){

            $fileName = time().'_img8.'.$request->fichier8->extension();
            $request->fichier8->move(public_path('uploads/entreprises/'.$enterprise->id.'/company-images/'), $fileName);
            $enterprise->photo_path8 = 'uploads/entreprises/'.$enterprise->id.'/company-images/'.$fileName;
            $enterprise->save();
        }

        if($request->fichier9){
            $fileName = time().'_img9.'.$request->fichier9->extension();
            $request->fichier9->move(public_path('uploads/entreprises/'.$enterprise->id.'/company-images/'), $fileName);
            $enterprise->photo_path9 = 'uploads/entreprises/'.$enterprise->id.'/company-images/'.$fileName;
            $enterprise->save();
        }

        if($request->fichier10){
            $fileName = time().'_img10.'.$request->fichier10->extension();
            $request->fichier10->move(public_path('uploads/entreprises/'.$enterprise->id.'/company-images/'), $fileName);
            $enterprise->photo_path10 = 'uploads/entreprises/'.$enterprise->id.'/company-images/'.$fileName;
            $enterprise->save();
        }

        if($request->fichier11){
            $fileName = time().'_img11.'.$request->fichier11->extension();
            $request->fichier11->move(public_path('uploads/entreprises/'.$enterprise->id.'/company-images/'), $fileName);
            $enterprise->photo_path11 = 'uploads/entreprises/'.$enterprise->id.'/company-images/'.$fileName;
            $enterprise->save();
        }

        if($request->fichier12){
            $fileName = time().'_img12.'.$request->fichier12->extension();
            $request->fichier12->move(public_path('uploads/entreprises/'.$enterprise->id.'/company-images/'), $fileName);
            $enterprise->photo_path12 = 'uploads/entreprises/'.$enterprise->id.'/company-images/'.$fileName;
            $enterprise->save();
        }

        if($request->fichier13){
            $fileName = time().'_img10.'.$request->fichier13->extension();
            $request->fichier13->move(public_path('uploads/entreprises/'.$enterprise->id.'/company-images/'), $fileName);
            $enterprise->photo_path13 = 'uploads/entreprises/'.$enterprise->id.'/company-images/'.$fileName;
            $enterprise->save();
        }

        if($request->fichier14){
            $fileName = time().'_img11.'.$request->fichier14->extension();
            $request->fichier14->move(public_path('uploads/entreprises/'.$enterprise->id.'/company-images/'), $fileName);
            $enterprise->photo_path14 = 'uploads/entreprises/'.$enterprise->id.'/company-images/'.$fileName;
            $enterprise->save();
        }

        if($request->fichier15){
            $fileName = time().'_img12.'.$request->fichier15->extension();
            $request->fichier15->move(public_path('uploads/entreprises/'.$enterprise->id.'/company-images/'), $fileName);
            $enterprise->photo_path15 = 'uploads/entreprises/'.$enterprise->id.'/company-images/'.$fileName;
            $enterprise->save();
        }

        return redirect(\App::getLocale().'/entreprises');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enterprise  $enterprise
     * @return \Illuminate\Http\Response
     */
    public function destroy($lang, Enterprise $enterprise)
    {
        $enterprise->delete();
        return redirect(\App::getLocale() . '/entreprises');
    }
}
