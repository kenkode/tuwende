<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\Contact;
use Redirect;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
	{

		return view('contact');
		
	}

	public function contact(Request $request)
	{

		Mail::to('wangoken2@gmail.com')->send(new Contact($request->name,$request->email,$request->subject,$request->body));

        if( count(Mail::failures()) == 0 ) {
          return Redirect::to('contact')->withFlashMessage("Message successfully delivered!");
        }else{
           return Redirect::to('contact')->withDeleteMessage("An error occured...Please check your internet connection!");
        }
		
	}
}
