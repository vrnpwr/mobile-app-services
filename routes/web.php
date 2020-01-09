<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
// 	return view('admin.dashboard.dashboard');
// })->middleware('auth');

Route::get('/test',function() {
	return view('admin.test.form');
});
//Filepond Image
Route::delete('/filepond/deleteImage','FilePondController@deleteImage');
Route::get('/filepond/uploadImage','FilePondController@uploadImage');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function () {
	return view('admin.admin');
});
Route::get('/dashboard', function () {
	return view('admin.dashboard.dashboard');
})->middleware('auth');
Route::get('/blogs',function () {
	return view('admin.blogs.blogs');
});
Route::get('/enquires',function () {
	return view('admin.enquires.enquires');
});
Route::get('/add-clients',function() {
	return view('admin.key-clients.add-clients');
});
// Route::get('/slider',function() {
// 	return view('admin.slider.slider');
// });
Route::resource('slider','SliderController')->middleware('auth');
Route::resource('services','ServicesController')->middleware('auth');
Route::resource('key-clients','KeyClientsController')->middleware('auth');
Route::resource('testimonials','TestimonialsController')->middleware('auth');
Route::resource('blogs','BlogsController')->middleware('auth');
Route::resource('portfolio','PortfolioController')->middleware('auth');
Route::resource('sub-domains','SubDomainsController')->middleware('auth');
Route::resource('enquiries','EnquiriesController')->middleware('auth');
Route::resource('dashboard','DashboardController')->middleware('auth');
Route::resource('/','HomePagesController');
Route::resource('subscribe','SubscribersController');


/*Subdomain route*/
// Route::domain('{account}.myapp.com')->group(function () {
// 	Route::get('user/{id}', function ($account, $id) {
// 		return view('admin.slider.slider');
// 	});
// });
/*Subdomain route*/

