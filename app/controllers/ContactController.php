<?php

class ContactController extends \BaseController {

	public function getContactForm(){

		//Get all the data and store it inside Store Variable
		$data = Input::all();

		//Validation rules
		$rules = array (
		    'fullName' => 'required',
		    'email' => 'required|email',
		    'math' => 'required|integer|between:4,4',
		    'contactMessage' => 'required|min:5'
		);

		//Validate data
		$validator = Validator::make ($data, $rules);

		//If everything is correct than run passes.
		if ($validator -> passes()){

		   Mail::send('emails.contactForm', $data, function($message) use ($data)
		    {
		        $message->from($data['email'] , $data['fullName']);
		//email 'To' field: cahnge this to emails that you want to be notified.                    
		$message->to('skyler.knight22@gmail.com', 'John')->cc('tutorskylerknight@gmail.com')->subject('Message from skylerknight.com');

		    });
		    // Redirect to page
		return Redirect::to('http://skylerknight.com');

		 }else{
		//return contact form with errors
		    return Redirect::to('http://skylerknight.com/#/contact');

		 }
		}
	} 
