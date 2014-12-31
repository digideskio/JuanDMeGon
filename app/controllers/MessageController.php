<?php

	class MessageController extends \BaseController
	{
		public function sendMessage()
		{
			//Getting input
			$input = Input::all();

			//Creating an instance
			$message = new Message();
			$validator = $message->validateFields($input);

		    if ($validator->passes()) //If validation passes we send the message (email)
		    {
		    	//Getting the value of every field
		    	$name = $input['name'];
				$email = $input['email'];
				$website = $input['website'];
				$message = $input['message'];

				$message = Message::sendMessage("$name Contact me!", "Name: $name. </br> Email: $email. </br> Website: $website </br>Message: $message", $email);

				//Note that if something fail the $message var will be false

				return Redirect::to('/')->with('message', $message);
		    }
		    else
		    {
		    	Input::flash(); //If validation fails we put old input values into the session to re-use in the view

		    	// With fail we send the errors messages to the view (withErrors)
		        return Redirect::to('/')->withErrors($validator, 'message');
		    }
		}
	}