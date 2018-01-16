<?php

/*
|--------------------------------------------------------------------------
| PagesController(Home,About,Contact)
|--------------------------------------------------------------------------
*/

Route::get('/','PagesController@index');

Route::get('/about','PagesController@about');

Route::get('/contact','PagesController@contact');


/*
|--------------------------------------------------------------------------
| CategoryController(add,delete,update,Select)
|--------------------------------------------------------------------------
*/

Route::get('/categories','CategoryController@getAll');

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

Route::get('/products','ProductController@getAll');

Route::get('/products/add','ProductController@addProductGet');

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
Route::get('/customers','CustomerController@getAll');

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

Route::get('/orders','OrderController@getAll');

Route::get('/orders/{id}','OrderController@getCustomerOrder');

Route::post('/orders/add','OrderController@addOrder');