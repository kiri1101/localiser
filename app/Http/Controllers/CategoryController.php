<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['categories'] = Category::orderBy('id', 'desc')->get();
        return view('backend.pages.categories.show-categories', $data);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.categories.create-category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $category_id = $request->category_id;

        $code_name =  str_replace("'","", str_replace(" ","_", $request->name_fr));

        $category   =   Category::updateOrCreate(['id' => $category_id],
            [   'code_name' => $code_name,
                'name_fr' => $request->name_fr,
                'short_description_fr' => $request->short_description_fr,
                'added_by' => Auth::user()->name,
            ]);


        //return Response::json($enterprise);
        return redirect(\App::getLocale().'/admin_show_categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category_id = $request->id;

        $category   =   Category::updateOrCreate(['id' => $category_id],
            [
                'name_fr' => $request->name_fr,
                'short_description_fr' => $request->short_description_fr
            ]);


        //return Response::json($enterprise);
        return redirect(\App::getLocale().'/admin_show_categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(UpdateCategoryRequest $request)
    {
        Category::destroy($request->id);
        return redirect(\App::getLocale().'/admin_show_categories');
    }
}
