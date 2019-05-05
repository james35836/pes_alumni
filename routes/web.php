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
//     return view('welcome');
// });

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{
Route::match(['get', 'post'], '/adminOnlyPage/', 'HomeController@admin');
});


Route::group(['middleware' => 'App\Http\Middleware\MemberMiddleware'], function()
{
Route::match(['get', 'post'], '/memberOnlyPage/', 'HomeController@member');
});


Route::group(['middleware' => 'App\Http\Middleware\SuperAdminMiddleware'], function()
{
Route::match(['get', 'post'], '/superAdminOnlyPage/', 'HomeController@super_admin');
});

Route::get('/', 		'FrontController@index');
Route::get('/stories', 	'FrontController@stories');
Route::get('/shopping', 'FrontController@shopping');
Route::get('/events', 	'FrontController@events');
Route::get('/events/details', 	'FrontController@events_details');
Route::get('/about', 	'FrontController@about');
Route::get('/contact', 	'FrontController@contact');


Route::get('/sign-in', 	'Auth\LoginController@alumni_login');
Route::post('/sign-in', 	'Auth\LoginController@alumni_login_submit');
Route::get('/sign-up', 	'Auth\RegisterController@alumni_register');
Route::post('/sign-up', 'Auth\RegisterController@alumni_register_submit');
Auth::routes();

Route::get('/alumni-dashboard', 'AlumniController@alumni_dashboard');
Route::get('/alumni-feeds', 	'AlumniController@alumni_feeds');
Route::get('/alumni-list', 		'AlumniController@alumni_list');
Route::get('/alumni-info', 		'AlumniController@alumni_info');
Route::get('/alumni-faculties', 'AlumniController@alumni_faculties');


Route::get('/alumni-profile', 'AlumniController@alumni_profile');

Route::get('/alumni-info-update', 'AlumniController@alumni_info_update');

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback','Auth\LoginController@handleProviderCallback');

// Route::get('/manage/shop', 'ShopController@index');
// Route::get('/manage/officer', 'OfficerController@index');
// Route::get('/manage/events', 'PostController@index');
// Route::get('/manage/stories', 'StoriesController@index');
// Route::get('/manage/user', 'UserController@index');

Route::resource('/manage/officer', 'OfficerController');
Route::resource('/manage/events', 'PostController');
Route::resource('/manage/stories', 'StoriesController');
Route::resource('/manage/shop', 'ShopController');
Route::resource('/manage/user', 'UserController');

Route::post('/alumni/update_user_info', 'UserController@update');

Route::resource('/alumni/feeds', 'PostController');




// Route::get('/checkout', 'PaymentController@index');


Route::view('/checkout', 'checkout-page');
Route::post('/checkout', 'PaymentController@createPayment')->name('create-payment');
Route::get('/confirm', 'PaymentController@confirmPayment')->name('confirm-payment');



