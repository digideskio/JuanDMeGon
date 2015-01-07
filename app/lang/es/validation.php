<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

	"accepted"             => "El :attribute debe ser aceptado.",
	"active_url"           => "El :attribute no es una RL válida.",
	"after"                => "El :attribute debe ser una fecha posterior a :date.",
	"alpha"                => "El :attribute sólo debe contener letras.",
	"alpha_dash"           => "El :attribute sólo puede contener letras, números y guiones.",
	"alpha_num"            => "El :attribute sólo puede contener letras y números.",
	"array"                => "El :attribute debe ser una colección.",
	"before"               => "El :attribute debe ser una fecha anterior a :date.",
	"between"              => array(
		"numeric" => "El :attribute debe estar entre :min y :max.",
		"file"    => "El :attribute debe tener entre :min y :max kilobytes.",
		"string"  => "El :attribute debe tener entre :min y :max caracteres.",
		"array"   => "El :attribute debe tener entre :min y :max elementos.",
	),
	"confirmed"            => "El :attribute de confirmación no coincide.",
	"date"                 => "El :attribute no es una fecha válida.",
	"date_format"          => "El :attribute no coincide con el formato :format.",
	"different"            => "El :attribute y :other deben ser diferentes.",
	"digits"               => "El :attribute debe tener :digits digitos.",
	"digits_between"       => "El :attribute must be between :min and :max digits.",
	"email"                => "El :attribute debe ser un correo válido.",
	"exists"               => "El selected :attribute is invalid.",
	"image"                => "El :attribute must be an image.",
	"in"                   => "El selected :attribute is invalid.",
	"integer"              => "El :attribute must be an integer.",
	"ip"                   => "El :attribute must be a valid IP address.",
	"max"                  => array(
		"numeric" => "El :attribute may not be greater than :max.",
		"file"    => "El :attribute may not be greater than :max kilobytes.",
		"string"  => "El :attribute may not be greater than :max characters.",
		"array"   => "El :attribute may not have more than :max items.",
	),
	"mimes"                => "El :attribute must be a file of type: :values.",
	"min"                  => array(
		"numeric" => "El :attribute must be at least :min.",
		"file"    => "El :attribute must be at least :min kilobytes.",
		"string"  => "El :attribute must be at least :min characters.",
		"array"   => "El :attribute must have at least :min items.",
	),
	"not_in"               => "El selected :attribute is invalid.",
	"numeric"              => "El :attribute must be a number.",
	"recaptcha"			   => 'El :attribute no es correcto.',
	"regex"                => "El formato de :attribute es invalido.",
	"required"             => "El campo :attribute es obligatorio.",
	"required_if"          => "El :attribute field is required when :other is :value.",
	"required_with"        => "El :attribute field is required when :values is present.",
	"required_with_all"    => "El :attribute field is required when :values is present.",
	"required_without"     => "El :attribute field is required when :values is not present.",
	"required_without_all" => "El :attribute field is required when none of :values are present.",
	"same"                 => "El :attribute and :other must match.",
	"size"                 => array(
		"numeric" => "El :attribute must be :size.",
		"file"    => "El :attribute must be :size kilobytes.",
		"string"  => "El :attribute must be :size characters.",
		"array"   => "El :attribute must contain :size items.",
	),
	"unique"               => "El :attribute has already been taken.",
	"url"                  => "El formato de :attribute es inválido.",


	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => array(
		'name' => array(
			'regex' => 'El campo :attribute puede tener hasta dos nombres REALES.',
		),
	),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array
	(
		'g-recaptcha-response' => 'validación'
	),

);
