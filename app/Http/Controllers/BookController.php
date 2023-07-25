<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use App\Models\BookCategory;
use App\Models\BookTag;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['books'] = Book::orderBy('id', 'desc')->get();

        return view('backend.pages.books.show-books', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = BookCategory::orderBy('id', 'desc')->get();
        $data['tags'] = BookTag::orderBy('id', 'desc')->get();
        return view('backend.pages.books.create-book', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreBookRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookRequest $request)
    {
        $bookID = $request->book_id;


        $book = Book::updateOrCreate(['id' => $bookID],
            [
                'title_fr' => $request->title_fr,
                'author' => $request->author,
                'category_id' => $request->category_id,
                'short_description_fr' => $request->short_description_fr,
                'description_fr' => $request->description_fr,
                'post_read_time' => $request->post_read_time,
                'number_visits' => $request->number_visits,
                'added_by' => Auth::user()->name,

            ]);

        if ($request->banner) {
            $fileName = time() . '_banner.' . $request->banner->extension();
            $request->banner->move(public_path('uploads/books/' . $book->id . '/book-images/'), $fileName);
            $book->banner = 'uploads/books/' . $book->id . '/book-images/' . $fileName;
            $book->save();
        }

        if ($request->image_path) {
            $fileName = time() . '_img.' . $request->image_path->extension();
            $request->image_path->move(public_path('uploads/books/' . $book->id . '/book-images/'), $fileName);
            $book->image_path = 'uploads/books/' . $book->id . '/book-images/' . $fileName;
            $book->save();
        }

        if ($request->image_path2) {
            $fileName = time() . '_img2.' . $request->image_path2->extension();
            $request->image_path2->move(public_path('uploads/books/' . $book->id . '/book-images/'), $fileName);
            $book->image_path2 = 'uploads/books/' . $book->id . '/book-images/' . $fileName;
            $book->save();
        }

        if ($request->book_path) {
            $fileName = time() . '_pdf.' . $request->book_path->extension();
            $request->book_path->move(public_path('uploads/books/' . $book->id . '/book-pdf/'), $fileName);
            $book->book_path = 'uploads/books/' . $book->id . '/book-pdf/' . $fileName;
            $book->save();
        }

        if ($request->tags) {
            $book->tags()->attach($request->tags);
        }

        $data['books'] = Book::orderBy('id', 'desc')->get();
        return view('backend.pages.books.show-books', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Book $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Book $book
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, Book $book)
    {
        $data['categories'] = BookCategory::orderBy('id', 'desc')->get();
        $data['tags'] = BookTag::orderBy('id', 'desc')->get();
        $data['book'] = $book;
        return view('backend.pages.books.edit-book', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateBookRequest $request
     * @param \App\Models\Book $book
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        $bookID = $request->book_id;


        $book = Book::updateOrCreate(['id' => $bookID],
            [
                'title_fr' => $request->title_fr,
                'author' => $request->author,
                'category_id' => $request->category_id,
                'short_description_fr' => $request->short_description_fr,
                'description_fr' => $request->description_fr,
                'post_read_time' => $request->post_read_time,
                'added_by' => Auth::user()->name,

            ]);

        if ($request->banner) {
            $fileName = time() . '_banner.' . $request->banner->extension();
            $request->banner->move(public_path('uploads/books/' . $book->id . '/book-images/'), $fileName);
            $book->banner = 'uploads/books/' . $book->id . '/book-images/' . $fileName;
            $book->save();
        }

        if ($request->image_path) {
            $fileName = time() . '_img.' . $request->image_path->extension();
            $request->image_path->move(public_path('uploads/books/' . $book->id . '/book-images/'), $fileName);
            $book->image_path = 'uploads/books/' . $book->id . '/book-images/' . $fileName;
            $book->save();
        }

        if ($request->image_path2) {
            $fileName = time() . '_img2.' . $request->image_path2->extension();
            $request->image_path2->move(public_path('uploads/books/' . $book->id . '/book-images/'), $fileName);
            $book->image_path2 = 'uploads/books/' . $book->id . '/book-images/' . $fileName;
            $book->save();
        }

        if ($request->book_path) {
            $fileName = time() . '_pdf.' . $request->book_path->extension();
            $request->book_path->move(public_path('uploads/books/' . $book->id . '/book-pdf/'), $fileName);
            $book->book_path = 'uploads/books/' . $book->id . '/book-pdf/' . $fileName;
            $book->save();
        }

        if ($request->tags) {
            $book->tags()->attach($request->tags);
        }

        $data['books'] = Book::orderBy('id', 'desc')->get();
        return view('backend.pages.books.show-books', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Book $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
