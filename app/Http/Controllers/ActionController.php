<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Sendinblue\Mailin as Mailin;

class ActionController extends Controller
{
    // send the contact form
    public function sendContactForm(Request $request)
    {
    	// send the email with sendinblue
    	$mailin = new Mailin("https://api.sendinblue.com/v2.0",env('SENDINBLUE_KEY'));

	    $data = array( "to" => array("contact@lucolo.com"=>"Lucolo General Contact"),
	        "from" => array($request->email,$request->name),
	        "subject" => "Message from www.lucolo.com",
	        "html" => "Name: ".$request->name."<br>Email: ".$request->email."<br>Phone: ".$request->phone."<br><br>".$request->message
		);
	 
	    $mailin->send_email($data);

	    return "true";
    }
}