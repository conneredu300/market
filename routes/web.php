<?php

/*
|--------------------------------------------------------------------------
| PagesController(Home,About,Contact)
|--------------------------------------------------------------------------
*/

Route::get('/','PagesController@index')->name('home');

Route::get('/about','PagesController@about')->name('about');

Route::get('/contact','PagesController@contact')->name('contact');


/*
|--------------------------------------------------------------------------
| CategoryController(add,delete,update,Select)
|--------------------------------------------------------------------------
*/

Route::get('/categories','CategoryController@getAll')->name('categories');

Route::get('/categories/{category}','CategoryController@categoriesProducts');

Route::post('/categories/add','CategoryController@addCategory');

Route::get('/categories/delete/{category}','CategoryController@deleteCategoryGet');

Route::post('/categories/delete/{category}','CategoryController@deleteCategoryPost');

Route::get('/categories/update/{category}','CategoryController@updateCategoryGet');

Route::post('/categories/update/{category}','CategoryController@updateCategoryPost');

/*
|--------------------------------------------------------------------------
| ProductController(add,delete,update,Select)
|--------------------------------------------------------------------------
*/

Route::get('/products','ProductController@getAll')->name('products');

Route::get('/products/add','ProductController@addProductGet')->name('productsAdd');

Route::post('/products/add','ProductController@addProductPost');

Route::get('/products/delete/{product}','ProductController@deleteProductGet');

Route::post('/products/delete/{product}','ProductController@deleteProductPost');

Route::get('/products/update/{product}','ProductController@updateProductGet');

Route::post('/products/update/{product}','ProductController@updateProductPost');

Route::get('/products/{product}','ProductController@viewProduct');


/*
|--------------------------------------------------------------------------
|-CustomerController(add,delete,update,Select)
|--------------------------------------------------------------------------
*/
Route::get('/customers','CustomerController@getAll')->name('customers');

Route::get('/customers/{customer}','CustomerController@viewCustomer');

Route::post('/customers/add','CustomerController@addCustomerPost');

Route::get('/customers/delete/{customer}','CustomerController@deleteCustomerGet');

Route::post('/customers/delete/{customer}','CustomerController@deleteCustomerPost');

Route::get('/customers/update/{customer}','CustomerController@updateCustomerGet');

Route::post('/customers/update/{customer}','CustomerController@updateCustomerPost');


/*
|--------------------------------------------------------------------------
|-OrderController(add,delete,update,Select)
|--------------------------------------------------------------------------
*/

Route::get('/orders','OrderController@getAll')->name('orders');

Route::get('/orders/{id}','OrderController@getCustomerOrder');

Route::post('/orders/add','OrderController@addOrder');