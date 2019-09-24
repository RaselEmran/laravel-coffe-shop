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

// Auth::routes();

// Route::group(['middleware' => 'auth'], function() {
//     Route::get('/home', 'HomeController@index')->name('home');
//     Route::get('/plans', 'PlanController@index')->name('plans.index');
//     Route::get('/plan/{plan}', 'PlanController@show')->name('plans.show');
    
// });

// Route::get('/landing/pages','LandingController@index')->name('landing');
// Route::post('/card-payment','LandingController@payment')->name('card-payment');
// Route::get('/chose/plan', 'PlanController@choose')->name('plans.chose');
// Route::post('/subscription', 'SubscriptionController@create')->name('subscription.create');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/subscription', 'SubscriptionController@user_subcription')->name('user.subscription');
Route::get('/change/subscription/{id}', 'SubscriptionController@change_subcription')->name('change.subscription');
Route::post('/post/plan', 'SubscriptionController@post_plan')->name('user.post.plan');
Route::delete('/user/subscription/destroy/{id}','SubscriptionController@cancel')->name('user.subscription.destroy');


Route::get('/', 'FrontController@index')->name('front.index');

Route::get('admin/login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Admin\Auth\LoginController@login');
Route::post('admin/logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');

// Password Reset Routes...
Route::get('admin/password/reset', 'Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin/password/email', 'Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/password/reset/{token}', 'Admin\Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin/password/reset', 'Admin\Auth\ResetPasswordController@reset')->name('password.update');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.', 'middleware' => 'auth:admin'], function(){
   Route::get('/dashboard', function(){
       return view('admin.dashboard');
   })->name('dashboard');

   Route::resource('package', 'PackageController');
   Route::resource('coffee', 'CoffeeController');
   Route::get('/member','MemberController@index')->name('member');
   Route::get('/nextdelivery','MemberController@nextdelivery')->name('nextdelivery');
   Route::get('/message','MessegeController@index')->name('messege.index');
   Route::get('/message/send','MessegeController@create')->name('messege.send');
   Route::post('/message/send','MessegeController@store')->name('messege.postsend');
   Route::get('/api','ApiController@index')->name('api');
   Route::post('/api','ApiController@api_store')->name('api.store');
});


Route::view('about', 'about')->name('about');
Route::view('coffee', 'coffee')->name('coffee');
Route::view('behov', 'behov')->name('behov');
Route::view('bestill', 'bestill')->name('bestill');
Route::view('checkout', 'checkout')->name('checkout');

Route::get('/landing/pages','LandingController@index')->name('landing');
Route::post('/card-payment','LandingController@payment')->name('card-payment');
Route::get('/stripe','LandingController@stripe')->name('stripe');
Route::post( '/stripe','LandingController@stripePost' )->name('stripe.post');
Route::get('/plans', 'PlanController@choose')->name('plans.chose');
Route::post('/subscription', 'SubscriptionController@create')->name('subscription.create');
