<?php

class ContactController extends BaseController {
 
	public function getContact(){
		return View::make('contact');
	}
	public function getContactUsForm(){
		$data = Input::all();
		$rules = array (
			'name' => 'required|min:5',
			'email' => 'required|email',
			'message' => 'required|min:10'
		);
		$validation = Validator::make(Input::all(), $rules);
	    if ($validation->fails()){
			return Redirect::to('contact')->withInput()->withErrors($validation);
	    }else{
			date_default_timezone_set('America/Chicago');
			$timestamp = date('D, F dS \a\t h\:i a e');
			$id = DB::table('contact_info')->insertGetId(
			    array(
					'name' => $data['name'],
					'email' => $data['email'],
					'phone' => $data['phone'],
					'company' => $data['company'],
					'message' => $data['message'],
					'misc' => $data['misc'],
					'added_on' => $timestamp
				)
			);
			Mail::send('emails.form_email', $data, function($message){
				$message->from('contactForm@mikehopkinsmm.com', 'Contact Form');
				$message->to('website@mikehopkinsmm.com');
				$message->subject('Message from Form Generator');
			});
			return Redirect::to('contact')->with('message', 'Your message is on it\'s way!');
		}
	}
}
