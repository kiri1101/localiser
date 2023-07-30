<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubscriberMailRequest;
use App\Http\Requests\UpdateSubscriberMailRequest;
use App\Models\SubscriberMail;

class SubscriberMailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['subscriber_mails'] = SubscriberMail::orderBy('id', 'desc')->get();
        return view('backend.pages.subscribers_mails.show-subscriber-mail', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.subscribers_mails.create-subscriber-mail');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreSubscriberMailRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubscriberMailRequest $request)
    {
        $subscriberID = $request->subscriber_id;
        $ip_sender = getenv("REMOTE_ADDR");

        $subscriber_mail = SubscriberMail::updateOrCreate(['id' => $subscriberID],
            [
                'email' => $request->email,
                'ip_sender' => $ip_sender,
            ]);

        $data['subscriber_mails'] = SubscriberMail::orderBy('id', 'desc')->get();
        return view('backend.pages.subscribers_mails.show-subscriber-mail', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreSubscriberMailRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store_ajax(StoreSubscriberMailRequest $request)
    {
        $subscriberID = $request->subscriber_id;
        $ip_sender = getenv("REMOTE_ADDR");

        $country = SubscriberMail::updateOrCreate(['id' => $subscriberID],
            [
                'email' => $request->email,
                'ip_sender' => $ip_sender,
            ]);

        $data['subscriber_mails'] = SubscriberMail::orderBy('id', 'desc')->get();
        return response()->json(['success' => 'Ajax request submitted successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\SubscriberMail $subscriberMail
     * @return \Illuminate\Http\Response
     */
    public function show(SubscriberMail $subscriberMail)
    {
        $data['subscriber_mails'] = $subscriberMail;
        return view('backend.pages.subscribers_mails.show-subscriber-mail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\SubscriberMail $subscriberMail
     * @return \Illuminate\Http\Response
     */
    public function edit(SubscriberMail $subscriberMail)
    {
        $data['subscriber_mails'] = $subscriberMail;
        return view('backend.pages.subscribers_mails.show-subscriber-mail', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateSubscriberMailRequest $request
     * @param \App\Models\SubscriberMail $subscriberMail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubscriberMailRequest $request, SubscriberMail $subscriberMail)
    {
        $subscriberID = $request->subscriber_mail_id;
        $ip_sender = getenv("REMOTE_ADDR");

        $country = SubscriberMail::updateOrCreate(['id' => $subscriberID],
            [
                'email' => $request->email,
                'ip_sender' => $ip_sender,
            ]);

        return response()->json(['success' => 'Ajax request submitted successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\SubscriberMail $subscriberMail
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubscriberMail $subscriberMail)
    {
        //
    }
}
