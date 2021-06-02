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

Route::get('/', function () {
    return view('welcome');
});

// =====================================================================
//
// THIS IS THE OLD ROUTE FOR THE DASHBOARD.  
// WE REMOVED IT SINCE WE WOULD LIKE TO HAVE 
// A DIFFERNT DASHBOARD FOR THE DIFFERENT USER AND THEIR ROLES.
// I'M KEEPING IT HERE FOR REFERENCE.

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');
//
// =====================================================================


// =====================================================================
//
// Authentication Route for User Roles.
// Here we will use a middleware that will check authentication.
// Without Authentication, they will not be fowarded to the dashboard.
// Once Authenticated, they will be forwarded to the dashboard route
// via the index method on the DashboardController
//
Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});
//
// =====================================================================


// =====================================================================
//
// For users
Route::group(['middleware' => ['auth', 'role:user']], function() {
    Route::get('/dashboard/myprofile', 'App\Http\Controllers\DashboardController@myprofile')->name('dashboard.myprofile');
});
//
// =====================================================================
require __DIR__.'/auth.php';
