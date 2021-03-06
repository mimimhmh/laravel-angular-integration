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

// Routes to Angular application.
// Take optional 'path' parameter which captures the rest of the URI.
// name('<app-name>'): so we have named route, that way if we change routes we don't have to change files.
// where('path', '.*'): use regex for optional 'path' that will ignore the rest of the URI
// so Laravel doesn't get in the way of passing route to Angular.

Route::get('angular-app1/{path?}', function () {
    return view('NgApp1');
})->where('path', '.*')
  ->name('app1');

Route::get('angular-app2/pods/{path?}', function () {
    return view('NgApp2');
})->where('path', '.*')
  ->name('app2');

// Default route.
Route::get('/', function () {
    return view('welcome');
});
