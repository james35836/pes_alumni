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




// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{
Route::match(['get', 'post'], '/adminOnlyPage/', 'HomeController@admin');
Route::match(['get', 'post'], '/alumni-dashboard/', 'AlumniController@alumni_dashboard');

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
Route::get('/shopping', 'FrontController@product');
Route::get('/product/details', 'FrontController@product_details');
Route::get('/events', 	'FrontController@events');
Route::get('/posts/details', 	'FrontController@post_details');
Route::get('/about', 	'FrontController@about');
Route::get('/contact', 	'FrontController@contact');
Route::get('/gallery', 	'FrontController@gallery');


Route::post('/pin/get_info', 	'PinController@pin_get_info');





Route::get('/sign-in', 	'Auth\LoginController@alumni_login');
Route::post('/sign-in', 	'Auth\LoginController@alumni_login_submit');
Route::get('/sign-up', 	'Auth\RegisterController@alumni_register');
Route::post('/sign-up', 'Auth\RegisterController@alumni_register_submit');
Auth::routes();





// Route::get('/alumni-dashboard', 'AlumniController@alumni_dashboard');
Route::get('/alumni-feeds', 	'AlumniController@alumni_feeds');
Route::get('/alumni-list', 		'AlumniController@alumni_list');
Route::get('/alumni-info', 		'AlumniController@alumni_info');
Route::get('/alumni-faculties', 'AlumniController@alumni_faculties');


Route::get('/alumni-profile', 'AlumniController@alumni_profile');
Route::get('/alumni-info-update', 'AlumniController@alumni_info_update');

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback','Auth\LoginController@handleProviderCallback');


Route::resource('/manage/product', 'ProductController');
Route::resource('/manage/users', 'UserController');
Route::resource('/manage/events', 'PostController');
Route::resource('/cart', 'CartController');
Route::post('/alumni/update_user_info', 'UserController@update');
Route::resource('/alumni/feeds', 'PostController');



Route::get('/manage/user/add', 			'UserController@create');
Route::post('/manage/user/add_submit',   'UserController@store');
Route::get('/manage/user/edit', 			'UserController@manage_user_edit');
Route::post('/manage/user/edit_submit',   'UserController@update');



Route::get('/manage/post/add', 			'PostController@manage_post_add');
Route::get('/manage/post/edit', 		'PostController@manage_post_edit');
Route::post('/manage/post/add_submit', 	'PostController@store');
Route::post('/manage/post/edit_submit', 'PostController@update');

Route::get('/manage/events', 	'PostController@event_list');
Route::get('/manage/stories', 	'PostController@story_list');



Route::get('/manage/officer', 	'UserController@officer_list');


Route::post('/send_email', 'FrontController@send_email')->name('send_email');

// Route::get('/checkout', 'PaymentController@index');

Route::post('/proceed/checkout', 'PaymentController@createPayment')->name('proceed_checkout');

Route::get('/checkout', 'FrontController@checkout');
Route::view('/checkout-page', 'checkout-page');
Route::post('/checkout', 'PaymentController@createPayment')->name('create-payment');
Route::get('/confirm', 'PaymentController@confirmPayment')->name('confirm-payment');



