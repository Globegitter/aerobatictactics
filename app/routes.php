<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Simply tell Laravel the HTTP verbs and URIs it should respond to. It is a
| breeze to setup your application using Laravel's RESTful routing and it
| is perfectly suited for building large applications and simple APIs.
|
| Let's respond to a simple GET request to http://example.com/hello:
|
|		Route::get('hello', function()
|		{
|			return 'Hello World!';
|		});
|
| You can even respond to more than one URI:
|
|		Route::post(array('hello', 'world'), function()
|		{
|			return 'Hello World!';
|		});
|
| It's easy to allow URI wildcards using (:num) or (:any):
|
|		Route::put('hello/(:any)', function($name)
|		{
|			return "Welcome, $name.";
|		});
|
*/

//Function removed in L4. Not replacing it in this version since it doesn't contain any controllers.
//Route::controller(Controller::detect());


Route::get('/', function(){
	return View::make('home.index');
});

Route::get('/about', function(){
	return View::make('about.about_us');
});

Route::get('/terms', function(){
	return View::make('about.terms');
});

Route::get('/team', function(){
	return View::make('team.team');
});

Route::get('aircraft/{any?}', array('as'=> 'aircraft', 'do'=>function($aircraftRequested='aircraft'){
	$aircraft = urldecode($aircraftRequested);
	$aircraft = "aircrafts.".$aircraft;

	// Only return view if it exists
	if ($exists = View::exists($aircraft)) {
		return View::make($aircraft);
	}
	else {
		return Response::error('404');
	}
}));

Route::get('services/{any?}', array('as'=> 'service', 'do'=>function($serviceRequested='service'){
	$service = urldecode($serviceRequested);
	$service = "services.".$service;
	if ($exists = View::exists($service)) {
		return View::make($service);
	}
	else {
		return Response::error('404');
	}
}));


Route::get('/contact', function(){
	return View::make('contact.contact');
});

Route::controller('order', 'OrderController');

/*************************************************************************/
//Admin stuff

Route::get('logout', array('as' => 'logout', 'uses' => 'auth@logout'));

Route::any('/admin', array('uses' => 'auth@login'));

Route::any('/admin/calendar', array('uses' => 'admin@calendar'));

Route::any('/admin/table', array('uses' => 'admin@table'));


