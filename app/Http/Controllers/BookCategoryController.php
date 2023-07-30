<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookCategoryRequest;
use App\Http\Requests\UpdateBookCategoryRequest;
use App\Models\BookCategory;
use Illuminate\Support\Facades\Auth;

class BookCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['categories'] = BookCategory::orderBy('id', 'desc')->get();
        return view('backend.pages.books.categories.show-categories', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.books.categories.create-category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreBookCategoryRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookCategoryRequest $request)
    {
        $category_id = $request->category_id;

        $code_name = str_replace("'", "", str_replace(" ", "_", $request->name_fr));

        $category = BookCategory::updateOrCreate(['id' => $category_id],
            ['code_name' => $code_name,
                'name_fr' => $request->name_fr,
                'short_description_fr' => $request->short_description_fr,
                'added_by' => Auth::user()->name,
            ]);

        $data['categories'] = BookCategory::orderBy('id', 'desc')->get();
        return view('backend.pages.books.categories.show-categories', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\BookCategory $bookCategory
     * @return \Illuminate\Http\Response
     */
    public function show(BookCategory $bookCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\BookCategory $bookCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(BookCategory $bookCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateBookCategoryRequest $request
     * @param \App\Models\BookCategory $bookCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookCategoryRequest $request, BookCategory $bookCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\BookCategory $bookCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookCategory $bookCategory)
    {
        //
    }
}
