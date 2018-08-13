<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
	


    public function submit(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required',
    		'email' => 'required',
    		'category' => 'required'
    	]);

    	//default
    	$var = isset($var) ? $var : 'default value';
    	//create new message
	    $report = new Report;
	    $report->name = $request->input('name');
	    $report->email = $request->input('email');
	    $report->message = $request->input('message');
	    $report->category = $request->input('category');
	    $report->phase = $request->input('phase');
	    $report->action = $request->input('action');

	    echo $request->input('name');

	    //save
	    $report->save();

	    //redirect
	    return redirect('/')->with('success', 'report sent');
    }
}
