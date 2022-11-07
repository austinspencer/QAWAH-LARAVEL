<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

// Routes For Front 

Route::get('/', function () {
	return view('welcome');
});

Route::get('home', 'HomeController@index')->name('home');
Route::get('test', 'PageController@index');



// Routes For Admin 
Route::group(['prefix' => 'admin'], function () {

	// Route::get('', function () {
	// 	return view('dashboard');
	// });

// Admin Auth Routes
Route::get('admin-login', 'Auth\LoginController@ShowLoginForm')->name('admin.login');
Route::get('', 'Auth\LoginController@ShowLoginForm')->name('admin.login');
Route::post('admin-login', 'Auth\LoginController@login')->name('admin.login');
Route::get('logout', 'Auth\LoginController@logout')->name( 'admin.logout' );

//Route::get('', 'DashboardController@initContent');
Route::get('dashboard', 'DashboardController@initContent'); //This will resoluve AdminControllers\DashboardController file

//Banner section routes
Route::get('slider','BannerController@index');
Route::get('add-slider','BannerController@show');
Route::post('slider-store','BannerController@store')->name('slider.store');
Route::get('slider/edit/{id}',['as'=>'slider.edit','uses'=>'BannerController@edit']);
Route::post('slider-update/{id}' , ['as' => 'slider.update' , 'uses' => 'BannerController@update']);
Route::get('slider/delete/{id}' , ['as' => 'slider.delete' , 'uses' => 'BannerController@destroy']);

// InnerBanner section routes
Route::get('banner','InnerBannerController@index');
Route::get('add-banner','InnerBannerController@show');
Route::post('banner-store','InnerBannerController@store')->name('banner.store');
Route::get('banner/edit/{id}',['as'=>'banner.edit','uses'=>'InnerBannerController@edit']);
Route::post('banner-update/{id}' , ['as' => 'banner.update' , 'uses' => 'InnerBannerController@update']);
Route::get('banner/delete/{id}' , ['as' => 'banner.delete' , 'uses' => 'InnerBannerController@destroy']);

Route::get('logo', 'LogoController@addlogo');
Route::post('logo/upload', 'LogoController@update_logo')->name('logo.upload');

//Home section content routes
Route::get('home', 'HomePageController@index');
Route::get('home/add-content', 'HomePageController@create');
Route::post('homestore','HomePageController@store')->name('home.store');
Route::get('home/edit/{id}',['as'=>'home.edit', 'uses'=>'HomePageController@edit']);
Route::post('cms-update/{id}' , ['as' => 'cms.update' , 'uses' => 'HomePageController@update']);
Route::get('home/delete/{id}' , ['as' => 'home.delete' , 'uses' => 'HomePageController@destroy']);


//About section content routes
Route::get('about', 'HomePageController@about');
Route::get('about/add-content', 'HomePageController@create');
Route::get('about/edit/{id}',['as'=>'about.edit', 'uses'=>'HomePageController@aboutEdit']);
Route::get('about/delete/{id}' , ['as' => 'about.delete' , 'uses' => 'HomePageController@aboutDestroy']);


//Contact page content routes
Route::get('contact', 'HomePageController@contact');
Route::get('contact/add-content', 'HomePageController@create');
Route::get('contact/edit/{id}',['as'=>'contact.edit', 'uses'=>'HomePageController@contactEdit']);
Route::get('contact/delete/{id}' , ['as' => 'contact.delete' , 'uses' => 'HomePageController@contactDestroy']);


//Users section content routes
Route::get('users','UserController@showView');
Route::get('user/add-user', 'UserController@showUserForm');
Route::post('create-user','UserController@createUser')->name('create.user');
Route::get('user/edit/{id}',['as'=>'user.edit', 'uses'=>'UserController@edit']);
Route::post('user-update/{id}' , ['as' => 'user.update' , 'uses' => 'UserController@update']);
Route::get('user/delete/{id}' , ['as' => 'user.delete' , 'uses' => 'UserController@destroy']);
Route::get('user/show/{id}',['as'=>'user.show', 'uses'=>'UserController@show']);


// Category section routes
Route::get('category','CategoryController@index');
Route::get('add-category','CategoryController@show');
Route::post("create-category","CategoryController@create")->name('create.category');
Route::get('category/edit/{id}',['as'=>'category.edit', 'uses'=>'CategoryController@edit']);
Route::post('category-update/{id}' , ['as' => 'category.update' , 'uses' => 'CategoryController@update']);
Route::get('category/delete/{id}' , ['as' => 'category.delete' , 'uses' => 'CategoryController@destroy']);


// Product section routes
Route::get('product','ProductController@index');
Route::get('add-product','ProductController@show');
Route::post('productstore','ProductController@store')->name('product.store');
Route::get('product/edit/{id}',['as'=>'product.edit','uses'=>'ProductController@edit']);
Route::post('product-update/{id}' , ['as' => 'product.update' , 'uses' => 'ProductController@update']);
Route::get('product/delete/{id}' , ['as' => 'product.delete' , 'uses' => 'ProductController@destroy']);
Route::get('show-gallery/{id}',['as'=>'show.gallery', 'uses'=> 'ProductController@showGallery']);
Route::post('upload-images','ProductController@storeImages')->name('upload.images');
Route::get('gallery/delete/{id}' , ['as' => 'gallery.delete' , 'uses' => 'ProductController@galleryDestroy']);




// Packages section routes
Route::get('packages-catogeries','Package_catogeriesController@index');
Route::get('add-packages-catogeries','Package_catogeriesController@add');
Route::post('packages-catogeries-store','Package_catogeriesController@store')->name('Package_catogeries.store');
Route::get('packages-catogeries/edit/{id}',['as'=>'Package_catogeries.edit','uses'=>'Package_catogeriesController@edit']);
Route::post('packages-catogeries-update/{id}' , ['as' => 'Package_catogeries.update' , 'uses' => 'Package_catogeriesController@update']);
Route::get('packages-catogeries/delete/{id}' , ['as' => 'Package_catogeries.delete' , 'uses' => 'Package_catogeriesController@destroy']);




// Packages section routes
Route::get('packages','PackageController@index');
Route::get('add-package','PackageController@create');
Route::post('packagestore','PackageController@store')->name('package.store');
Route::get('package/edit/{id}',['as'=>'package.edit','uses'=>'PackageController@edit']);
Route::post('package-update/{id}' , ['as' => 'package.update' , 'uses' => 'PackageController@update']);
Route::get('package/delete/{id}' , ['as' => 'package.delete' , 'uses' => 'PackageController@destroy']);

// Order section routes
Route::get('order','OrderController@index');
// Route::get('add-category','CategoryController@show');
// Route::post("create-category","CategoryController@create")->name('create.category');
Route::get('order/edit/{id}',['as'=>'order.edit', 'uses'=>'OrderController@edit']);
Route::get('order/show/{id}',['as'=>'order.show', 'uses'=>'OrderController@show']);
// Route::post('category-update/{id}' , ['as' => 'category.update' , 'uses' => 'CategoryController@update']);
Route::get('order/delete/{id}' , ['as' => 'order.delete' , 'uses' => 'OrderController@destroy']);

// Inquiry and newsletter section routes
Route::get('show-inquiries','InquiryController@showInquiries');
Route::get('delete/inquiry/{id}',['as'=>'delete.inquiry', 'uses'=>'InquiryController@destroy']);
Route::post('get/Inquiry','InquiryController@getInquiryData');


Route::post('dropzone/upload', 'DashboardController@upload')->name('dropzone.upload');
Route::get('dropzone/fetch', 'DashboardController@fetch')->name('dropzone.fetch');
Route::get('dropzone/delete', 'DashboardController@delete')->name('dropzone.delete');


});
