<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'PagesController@index')->name('index');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/become-a-member', 'PagesController@become_member')->name('become-a-member');
Route::get('/event', 'PagesController@event')->name('event');
Route::get('/gallery', 'PagesController@gallery')->name('gallery');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ============================================================================
//=======================  admin authentication===========================
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard' ,'Admin\AdminController@index')->name('admindashboard');

});
//=======================  end admin authentication===========================



// ============================================================================
//=======================  member authentication===========================
Route::prefix('members')->middleware(['auth', 'member'])->group(function () {
    Route::get('/dashboard','Members\MemberController@index')->name('memberdashboard');

});
//=======================  end member authentication===========================

