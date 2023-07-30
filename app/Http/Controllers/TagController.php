<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['tags'] = Tag::orderBy('id', 'desc')->get();
        return view('backend.pages.tags.show-tags', $data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.tags.create-tag');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTagRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTagRequest $request)
    {
        $tag_id = $request->tag_id;

        $code_name =  str_replace("'","", str_replace(" ","_", $request->name_fr));

        $tag   =   Tag::updateOrCreate(['id' => $tag_id],
            [   'code_name' => $code_name,
                'name_fr' => $request->name_fr,
                'short_description_fr' => $request->short_description_fr,
                'added_by' => Auth::user()->name,
            ]);


        //return Response::json($enterprise);
        return redirect(\App::getLocale().'/admin_show_tags');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTagRequest  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTagRequest $request, Tag $tag)
    {
        $tag_id = $request->id;

        $tag   =   Tag::updateOrCreate(['id' => $tag_id],
            [
                'name_fr' => $request->name_fr,
                'short_description_fr' => $request->short_description_fr
            ]);


        //return Response::json($enterprise);
        return redirect(\App::getLocale().'/admin_show_tags');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(UpdateTagRequest $request)
    {
        Tag::destroy($request->id);
        return redirect(\App::getLocale().'/admin_show_tags');
    }
}
