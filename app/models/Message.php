<?php

	class Message extends ValidableModel
	{
		/*
        |--------------------------------------------
        |Definning rules to validate form fields
        |--------------------------------------------	        
        */
		protected $rules = array
		(
			'name'						=> 'required|regex:/^([A-Za-z]{2,10})( [A-Za-z]{2,10}){0,1}$/',
			'email'						=> 'required|email',
			'website'					=> 'url',
			'message'					=> 'required|between:1,500',
			'g-recaptcha-response' => 'required|recaptcha'
			//Legacy//'recaptcha_response_field'	=> 'required|recaptcha'
		);

		/*
        |--------------------------------------------
        |Definning custom message for regex name
        |--------------------------------------------	        
        */
		protected $messages = array
		(
			"name.regex"	=> "The :attribute field must have up to two REAL names."
		);


		/*
        |--------------------------------------------
        |Defining methods
        |--------------------------------------------	        
        */

		public static function sendMessage($subject, $message, $from)
		{
			$to = 'contacto@juandmegon.com';
			$headers  = "From: $from\r\n";
			$headers .= "Reply-To: $to\r\n";
			$headers .= "Return-Path: $to\r\n";
			$headers .= "X-Mailer: PHP/" . phpversion(). "\r\n";
			$headers .= 'MIME-Version: 1.0' . "\n";
			$headers .= 'Content-type: text/html; UTF-8' . "\r\n";
			return mail($to,$subject,$message,$headers);
		}
	}