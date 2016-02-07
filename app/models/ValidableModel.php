<?php

	class ValidableModel extends Eloquent
	{
		/*
        |--------------------------------------------
        |Definning rules to validate form fields
        |--------------------------------------------	        
        */
		protected $rules = array();

		/*
        |--------------------------------------------
        |Definning custom message for regex name
        |--------------------------------------------	        
        */
		protected $messages = array();


		/*
        |--------------------------------------------
        |Defining methods
        |--------------------------------------------	        
        */
        public function validateFields($values)
		{
			/*
	        |----------------------------------------------------------------
	        |Making the validation with all input fields and the rules
	        |----------------------------------------------------------------	        
	        */
		    return Validator::make($values, $this->rules, $this->messages);
		}
	}