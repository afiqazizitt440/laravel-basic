<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    //add function submit
    public function submit(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required',
    		'email' => 'required'
    	]);


    	//return $request->input('name');
    	//create new message
	    $message = new Message;
	    $message->name = $request->input('name');
	    $message->email = $request->input('email');
	    $message->message = $request->input('message');

	    //save
	    $message->save();

	    //redirect
	    return redirect('/')->with('success', 'message sent');
    }

    //pullig
    public function getMessages()
    {
    	$message = Message::all();
    	return view('messages')->with('messages', $message);

    }
   
    

}
