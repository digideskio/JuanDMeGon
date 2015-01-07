<?php

/*
|--------------------------------------------------------------------------
| Register The Laravel Class Loader
|--------------------------------------------------------------------------
|
| In addition to using Composer, you may use the Laravel class loader to
| load your controllers and models. This is useful for keeping all of
| your classes in the "global" namespace without Composer updating.
|
*/

ClassLoader::addDirectories(array(

	app_path().'/commands',
	app_path().'/controllers',
	app_path().'/models',
	app_path().'/database/seeds',

));

/*
|--------------------------------------------------------------------------
| Application Error Logger
|--------------------------------------------------------------------------
|
| Here we will configure the error logger setup for the application which
| is built on top of the wonderful Monolog library. By default we will
| build a basic log file setup which creates a single file for logs.
|
*/

Log::useFiles(storage_path().'/logs/laravel.log');

/*
|--------------------------------------------------------------------------
| Application Error Handler
|--------------------------------------------------------------------------
|
| Here you may handle any errors that occur in your application, including
| logging them or displaying custom views for specific errors. You may
| even register several error handlers to handle different types of
| exceptions. If nothing is returned, the default error view is
| shown, which includes a detailed stack trace during debug.
|
*/

App::error(function(Exception $exception, $code)
{
	Log::error($exception);
});

/*
|--------------------------------------------------------------------------
| Maintenance Mode Handler
|--------------------------------------------------------------------------
|
| The "down" Artisan command gives you the ability to put an application
| into maintenance mode. Here, you will define what is displayed back
| to the user if maintenance mode is in effect for the application.
|
*/

App::down(function()
{
	return Response::make("Be right back!", 503);
});

/*
|--------------------------------------------------------------------------
| Require The Filters File
|--------------------------------------------------------------------------
|
| Next we will load the filters file for the application. This gives us
| a nice separate location to store our route and application filter
| definitions instead of putting them all in the main routes file.
|
*/

require app_path().'/filters.php';


/*
|--------------------------------------------------------------------------
| Adding own code
|--------------------------------------------------------------------------
|--- Setting the app location value ---
|
| With this code is obtained the location value of the visitor and
| according to this value is stablished the location value for
| the app to show some values by the language of the user.
|
*/

$defaultLanguage = 'en'; //Is stablished the default value

//Obtaining the colon separated lang values (stablished in .env.*.php file)
$supportedLanguages = strtolower(getenv('languages') ?: $defaultLanguage);//If is not stablished then will be the default
$supportedLanguages = explode(',', $supportedLanguages); //Exploding by colon the values

//Verifying if browser language is set
if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
{
	//If is set, so is stablished
	$userLanguage = $_SERVER['HTTP_ACCEPT_LANGUAGE']; //Is obtained the browser language
	//the first two characters in $user_language are the iso2 code of the language
	$userLanguage = strtolower(substr($userLanguage, 0, 2));
}
else
{
	//If is not stablished, so use default value
	$userLanguage = $defaultLanguage;
}

//Verifying if the user language is supported
if(in_array($userLanguage, $supportedLanguages))
{
	App::setLocale($userLanguage);
}
else //If user language is not supported, so the default language is used
{
	App::setLocale($defaultLanguage);
}