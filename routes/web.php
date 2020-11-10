
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

if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}




//Default Controller
// Route::get('/', 'HomeController@index');
// Route::post('/home/submit', 'HomeController@submit');
// Route::get('/home/skin/{any?}', 'HomeController@getSkin');

Route::get('/', 'VmslCotroller@home');

Route::get('/search', 'VmslCotroller@search');


Route::get('/booking', 'VmslCotroller@booking_form');
Route::post('/booking', 'BookingcontrollerController@store_public');



Route::get('dashboard/import', 'DashboardController@getImport');
/* Auth & Profile */
Route::get('user/profile','UserController@getProfile');
Route::get('user/theme','UserController@getTheme');
Route::get('user/login','UserController@getLogin');
Route::get('user/register','UserController@getRegister');
Route::get('user/logout','UserController@getLogout');
Route::get('user/reminder','UserController@getReminder');
Route::get('user/reset/{any?}','UserController@getReset');
Route::get('user/reminder','UserController@getReminder');
Route::get('user/activation','UserController@getActivation');
// Social Login
Route::get('user/socialize/{any?}','UserController@socialize');
Route::get('user/autosocialize/{any?}','UserController@autosocialize');
//
Route::post('user/signin','UserController@postSignin');
Route::post('user/login','UserController@postSigninMobile');
Route::post('user/signup','UserController@postSignupMobile');
Route::post('user/create','UserController@postCreate');
Route::post('user/saveprofile','UserController@postSaveprofile');
Route::post('user/savepassword','UserController@postSavepassword');
Route::post('user/doreset/{any?}','UserController@postDoreset');
Route::post('user/request','UserController@postRequest');
/* Posts & Blogs */
Route::get('posts','HomeController@posts');
Route::get('posts/category/{any}','HomeController@posts');
Route::get('posts/read/{any}','HomeController@read');
Route::post('posts/comment','HomeController@comment');
Route::get('posts/remove/{id?}/{id2?}/{id3?}','HomeController@remove');
// Start Routes for Notification
Route::resource('notification','NotificationController');
Route::get('home/load','HomeController@getLoad');
Route::get('home/lang/{any}','HomeController@getLang');

Route::get('/set_theme/{any}', 'HomeController@set_theme');

include('pages.php');

Route::resource('sximoapi','SximoapiController');
Route::resource('services/posts', 'Services\PostController');


// Routes for  all generated Module
include('module.php');
// Custom routes
$path = base_path().'/routes/custom/';
$lang = scandir($path);
foreach($lang as $value) {
	if($value === '.' || $value === '..') {continue;}
	include( 'custom/'. $value );

}
// End custom routes
Route::group(['middleware' => 'auth'], function () {
	Route::resource('dashboard','DashboardController');
});


Route::group(['namespace' => 'Sximo','middleware' => 'auth'], function () {
	// This is root for superadmin

		include('sximo.php');

});

Route::group(['namespace' => 'Core','middleware' => 'auth'], function () {
	include('core.php');
});


//VMSL Route
Route::get('services', 'VmslCotroller@services_page')->name('service.page');
Route::get('single/service/{id}', 'VmslCotroller@SingleService')->name('single.service');
Route::get('404', 'VmslCotroller@not_found_page')->name('not.found');
Route::get('testimonials', 'VmslCotroller@testimonial_page')->name('testimonial.page');
Route::get('our/service/{id}', 'VmslCotroller@service_by_primary_cat')->name('get.services');
Route::get('about', 'VmslCotroller@about_page')->name('about.page');
Route::get('contact', 'VmslCotroller@contact_page')->name('contact.page');
Route::post('message', 'VmslCotroller@contact_message')->name('contact.message');
Route::get('faq', 'VmslCotroller@faq_page')->name('faq.page');
Route::get('portfolios', 'VmslCotroller@portfolio_page')->name('gallery.page');
Route::get('gallery/single/{id}', 'VmslCotroller@single_gallery')->name('single.gallery');
Route::get('calculator', 'VmslCotroller@calculator_page')->name('calculator.page');

Route::get('order/{id}', 'VmslCotroller@order')->name('order');
Route::get('membership', 'VmslCotroller@membership')->name('membership');
//Route::get('career', 'VmslCotroller@career')->name('career');
//Route::get('careersingle', 'VmslCotroller@career_single')->name('career.single');

Route::get('career','VmslCotroller@careerList');
Route::get('career/{id}','VmslCotroller@career');
Route::post('savecareer','VmslCotroller@savecareer');

Route::get('dynamicModal/{id}',[
    'as'=>'dynamicModal',
    'uses'=> 'VmslCotroller@loadModal'
]);

Route::post('/cart', 'VmslCotroller@addCart')->name('cart');
Route::get('/cart/remove/{cartId}', 'VmslCotroller@remove_cart');
Route::get('/cart', 'VmslCotroller@showCart')->name('cart');
Route::get('/checkout', 'VmslCotroller@checkout');
Route::post('/place-order', 'VmslCotroller@place_order');

