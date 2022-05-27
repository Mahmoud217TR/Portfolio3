<?php

namespace App\Http\Controllers;

use App\Events\ContactMessageEvent;
use App\Models\Message;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin')->except('store');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::latest()->paginate(20);
        return view('message.index',compact('messages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMessageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMessageRequest $request)
    {
        
        event(new ContactMessageEvent($request->all()));
        // Flush a Success Message ???
        return redirect()->route('contacts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        $this->authorize('view',$message);
        return view('message.show',compact('message'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        $this->authorize('delete',$message);
        $message->delete();
        return redirect()->route('message.index');
    }
}
