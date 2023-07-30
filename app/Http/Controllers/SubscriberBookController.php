<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubscriberBookRequest;
use App\Http\Requests\UpdateSubscriberBookRequest;
use App\Models\Book;
use App\Models\SubscriberBook;

class SubscriberBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['book_subscribers'] = SubscriberBook::orderBy('id', 'desc')->get();
        return view('backend.pages.books.subscribers.show-subscribers', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['book_subscribers'] = SubscriberBook::orderBy('id', 'desc')->get();
        $data['books'] = Book::orderBy('id', 'desc')->get();
        return view('backend.pages.books.subscribers.create-subscriber', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreSubscriberBookRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubscriberBookRequest $request)
    {
        $subscriberID = $request->subscriber_id;
        $ip_sender = getenv("REMOTE_ADDR");

        $subscriber_books = SubscriberBook::updateOrCreate(['id' => $subscriberID],
            [
                'email' => $request->email,
                'name' => $request->name,
                'phonenumber' => $request->phonenumber,
                'book_id' => $request->book_id,
                'ip_sender' => $ip_sender,
            ]);

        $data['book_subscribers'] = SubscriberBook::orderBy('id', 'desc')->get();
        return view('backend.pages.books.subscribers.show-subscribers', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreSubscriberBookRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store_frontend(StoreSubscriberBookRequest $request)
    {
        $subscriberID = $request->subscriber_id;
        $ip_sender = getenv("REMOTE_ADDR");

        $subscriber_book = SubscriberBook::updateOrCreate(['id' => $subscriberID],
            [
                'email' => $request->email,
                'name' => $request->name,
                'phonenumber' => $request->phonenumber,
                'book_id' => $request->book_id,
                'ip_sender' => $ip_sender,
            ]);

        $request->session()->put('subscriber', $subscriber_book->email);


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\SubscriberBook $subscriberBook
     * @return \Illuminate\Http\Response
     */
    public function show(SubscriberBook $subscriberBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\SubscriberBook $subscriberBook
     * @return \Illuminate\Http\Response
     */
    public function edit(SubscriberBook $subscriberBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateSubscriberBookRequest $request
     * @param \App\Models\SubscriberBook $subscriberBook
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubscriberBookRequest $request, SubscriberBook $subscriberBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\SubscriberBook $subscriberBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubscriberBook $subscriberBook)
    {
        //
    }
}
