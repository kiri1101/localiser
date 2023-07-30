<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookTagRequest;
use App\Http\Requests\UpdateBookTagRequest;
use App\Models\BookTag;
use Illuminate\Support\Facades\Auth;

class BookTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['tags'] = BookTag::orderBy('id', 'desc')->get();
        return view('backend.pages.books.tags.show-tags', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.books.tags.create-tag');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreBookTagRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookTagRequest $request)
    {
        $tag_id = $request->tag_id;

        $code_name = str_replace("'", "", str_replace(" ", "_", $request->name_fr));

        $tag = BookTag::updateOrCreate(['id' => $tag_id],
            ['code_name' => $code_name,
                'name_fr' => $request->name_fr,
                'short_description_fr' => $request->short_description_fr,
                'added_by' => Auth::user()->name,
            ]);


        $data['tags'] = BookTag::orderBy('id', 'desc')->get();
        return view('backend.pages.books.tags.show-tags', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\BookTag $bookTag
     * @return \Illuminate\Http\Response
     */
    public function show(BookTag $bookTag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\BookTag $bookTag
     * @return \Illuminate\Http\Response
     */
    public function edit(BookTag $bookTag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateBookTagRequest $request
     * @param \App\Models\BookTag $bookTag
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookTagRequest $request, BookTag $bookTag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\BookTag $bookTag
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookTag $bookTag)
    {
        //
    }
}
