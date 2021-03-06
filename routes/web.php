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

/*
|--------------------------------------------------------------------------
| ACCESS LEVEL
|--------------------------------------------------------------------------

0 - member
1 - Reserve
2 - editor
3 - admin
4 - superadmin

*/

// FrontController

Route::get('/', 					'FrontController@index');
Route::get('/stories', 				'FrontController@stories');
Route::get('/shopping', 			'FrontController@product');
Route::get('/product/details', 		'FrontController@product_details');
Route::get('/events', 				'FrontController@events');
Route::get('/posts/details', 		'FrontController@post_details');
Route::get('/about', 				'FrontController@about');
Route::get('/contact', 				'FrontController@contact');
Route::get('/gallery', 				'FrontController@gallery');

Route::get('/checkout', 			'FrontController@checkout');
Route::post('/send_email', 			'FrontController@send_email')->name('send_email');
Route::post('/proceed/checkout', 	'PaymentController@createPayment')->name('proceed_checkout');
Route::view('/checkout-page', 		'checkout-page');
Route::post('/checkout', 			'PaymentController@createPayment')->name('create-payment');
Route::get('/confirm', 				'PaymentController@confirmPayment')->name('confirm-payment');


Route::get('/redirect',              'HomeController@redirect')->name('redirect');



Route::resource('/cart', 'CartController');



Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback','Auth\LoginController@handleProviderCallback');



Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{
	Route::match(['get', 'post'], '/alumni-dashboard/', 'AlumniController@alumni_dashboard')->name('dashboard');
});


Route::group(['middleware' => 'App\Http\Middleware\MemberMiddleware'], function()
{
	Route::match(['get', 'post'], '/memberOnlyPage/', 'HomeController@member');
});


Route::group(['middleware' => 'App\Http\Middleware\SuperAdminMiddleware'], function()
{
Route::match(['get', 'post'], '/superAdminOnlyPage/', 'HomeController@super_admin');
});




Route::post('/pin/get_info', 	'PinController@pin_get_info');





Route::get('/sign-in', 	'Auth\LoginController@alumni_login');
Route::post('/sign-in', 	'Auth\LoginController@alumni_login_submit');
Route::get('/sign-up', 	'Auth\RegisterController@alumni_register');
Route::post('/sign-up', 'Auth\RegisterController@alumni_register_submit');
Auth::routes();





// Route::get('/alumni-dashboard', 'AlumniController@alumni_dashboard');
Route::get('/alumni-feeds', 	'AlumniController@alumni_feeds')->name('alumni_feeds');
Route::get('/alumni-list', 		'AlumniController@alumni_list')->name('alumni_list');
Route::get('/alumni-info', 		'AlumniController@alumni_info')->name('alumni_info');
Route::get('/alumni-faculties', 'AlumniController@alumni_faculties')->name('alumni_faculties');


Route::get('/alumni-profile', 'AlumniController@alumni_profile');



Route::group(['middleware' => ['auth']], function() {

    Route::get('/profile', 'UserController@profile')->name('profile');
    Route::get('/photo/delete/{id}',            'AlbumController@delete');
    Route::get('/post/delete/{id}',            'PostController@delete');
    
	Route::get('/officers', 			'UserController@officers')->name('officers');
	Route::get('/faculties', 			'UserController@faculties')->name('faculties');
    Route::resource('users','UserController');
    Route::resource('pins','PinController');
    Route::resource('products','ProductController');
    Route::resource('albums','AlbumController');


    Route::get('/event', 			'PostController@events')->name('event');
    Route::resource('posts','PostController');
});



