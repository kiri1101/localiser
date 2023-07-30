<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdvideoRequest;
use App\Http\Requests\UpdateAdvideoRequest;
use App\Models\Advideo;
use App\Models\Enterprise;
use Illuminate\Support\Facades\Auth;

class AdvideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['advideos'] = Advideo::orderBy('id', 'desc')->get();
        return view('backend2.pages.advideos.show-advideos', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['enterprises'] = Enterprise::orderBy('id', 'desc')->get();
        return view('backend2.pages.advideos.create-advideo', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreAdvideoRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdvideoRequest $request)
    {
        $advideo_id = $request->advideo_id;


        $advideo = Advideo::updateOrCreate(['id' => $advideo_id],
            [
                'name_fr' => $request->name_fr,
                'name_en' => $request->name_en,
                'short_description_fr' => $request->short_description_fr,
                'short_description_en' => $request->short_description_en,
                'youtube_link' => $request->youtube_link,
                'company_id' => $request->company_id,
                'status' => ($request->status == "1"),
                'added_by' => Auth::user()->id,
            ]);

        if ($request->image_path) {
            $fileName = time() . '_img.' . $request->image_path->extension();
            $request->image_path->move(public_path('storage/advideos/' . $advideo->id . '/'), $fileName);
            $advideo->image_path = 'storage/advideos/' . $advideo->id . '/' . $fileName;
            $advideo->save();
        }

        return redirect()->route('advideos.index', app()->getLocale())->with('success', 'advideo has been added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Advideo $advideo
     * @return \Illuminate\Http\Response
     */
    public function show($lang, Advideo $advideo)
    {
        $data['advideo'] = $advideo;
        $data['enterprises'] = Enterprise::orderBy('id', 'desc')->get();
        return view('backend2.pages.advideos.show-advideo', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Advideo $advideo
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, Advideo $advideo)
    {
        $data['advideo'] = $advideo;
        $data['enterprises'] = Enterprise::orderBy('id', 'desc')->get();
        return view('backend2.pages.advideos.edit-advideo', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateAdvideoRequest $request
     * @param \App\Models\Advideo $advideo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdvideoRequest $request, $lang, Advideo $advideo)
    {
        $advideo_id = $advideo->id;


        $advideo = Advideo::updateOrCreate(['id' => $advideo_id],
            [
                'name_fr' => $request->name_fr,
                'name_en' => $request->name_en,
                'short_description_fr' => $request->short_description_fr,
                'short_description_en' => $request->short_description_en,
                'youtube_link' => $request->youtube_link,
                'company_id' => $request->company_id,
                'status' => ($request->status == "1"),

            ]);

        if ($request->image_path) {
            $fileName = time() . '_img.' . $request->image_path->extension();
            $request->image_path->move(public_path('storage/advideos/' . $advideo->id . '/'), $fileName);
            $advideo->image_path = 'storage/advideos/' . $advideo->id . '/' . $fileName;
            $advideo->save();
        }

        return redirect()->route('advideos.index', app()->getLocale())->with('success', 'advideo has been added successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Advideo $advideo
     * @return \Illuminate\Http\Response
     */
    public function destroy($lang, Advideo $advideo)
    {
        $advideo->delete();
        return redirect()->route('advideos.index', app()->getLocale())->with('success', 'Advideo has been deleted successfully');
    }
}
