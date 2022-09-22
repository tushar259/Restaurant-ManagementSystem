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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home.index');
Route::post('/home', 'HomeController@mitu');

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
Route::get('/registration', 'RegistrationController@index')->name('registration.index');
Route::post('/registration', 'RegistrationController@verify');
Route::get('/adminregistration', 'AdminRegistrationController@index')->name('adminregistration.index');
Route::post('/adminregistration', 'AdminRegistrationController@verify');
Route::get('/logout', 'LogoutController@index')->name('logout.index');
Route::get('/profile', 'ProfileController@index')->name('profile.index');
Route::get('/editprofile', 'EditProfileController@index')->name('editprofile.index');
Route::post('/editprofile', 'EditProfileController@update');
Route::get('/changepassword', 'ChangePasswordController@index')->name('changepassword.index');
Route::post('/changepassword', 'ChangePasswordController@update');
Route::get('/productlist', 'ProductListController@index')->name('productlist.index');
Route::get('/editproduct/{addid}', 'EditProductController@index')->name('editproduct.index');
Route::post('/editproduct/{addid}', 'EditProductController@update');
Route::get('/deleteproduct/{addid}', 'DeleteProductController@index')->name('deleteproduct.index');
Route::post('/deleteproduct/{addid}', 'DeleteProductController@delete');
Route::get('/addproduct', 'AddProductController@index')->name('addproduct.index');
Route::post('/addproduct', 'AddProductController@add');
Route::get('/userlist', 'UserListController@index')->name('userlist.index');
Route::get('/deleteuser/{addid}', 'DeleteUserController@index')->name('deleteuser.index');
Route::post('/deleteuser/{addid}', 'DeleteUserController@delete');
Route::get('/search', 'SearchController@index')->name('search.index');
Route::get('/addcart/{addid}', 'AddCartController@index')->name('addcart.index');
Route::post('/addcart/{addid}', 'AddCartController@addtocart');
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@order');
Route::get('/addremovecart/{addid}', 'AddRemoveCartController@index')->name('addremovecart.index');
Route::post('/addremovecart/{addid}', 'AddRemoveCartController@update');
Route::get('/deletecart/{addid}', 'DeleteCartController@index')->name('deletecart.index');
Route::post('/deletecart/{addid}', 'DeleteCartController@delete');
Route::get('/order', 'OrderController@index')->name('order.index');
Route::get('/orderlist', 'OrderListController@index')->name('orderlist.index');
Route::get('/addcartajax', 'AddCartAjaxController@index')->name('addcartajax.index');























