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
Route::get('/Our books', 'PagesController@books')->name('ourbooks');
Route::get('/nuggets', 'PagesController@nugget')->name('nuggetquote');
Route::get('/ministers', 'PagesController@minister')->name('minister');
Route::get('/blogs', 'PagesController@blogs')->name('ourblogs');
Route::get('blog/{id}/read/{title}', 'PagesController@viewBlog')->name('readblog');
Route::get('event/{id}/full-details/{title}', 'PagesController@viewEvent')->name('readEvent');
Route::get('nugget/{id}/quote/{title}', 'PagesController@viewNugget')->name('readNugget');
// Route::resource('comment', CommentController::class);



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes(['verify' => true]);
Route::prefix('comment')->middleware(['auth'])->group(function () {
Route::resource('comment', CommentController::class);
Route::post('activate-notification', 'SettingsController@activate')->name('activate_notification');
Route::get('mark-as-read/{id}', 'Admin\Users@readNotification')->name('mark-as-read');

});

// ============================================================================
//=======================  admin authentication===========================
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard' ,'Admin\AdminController@index')->name('admindashboard');
    Route::resource('admin', 'Admin\AdminController');
    // blogs
    Route::resource('blogs', 'Admin\BlogController');
    Route::resource('events', 'Admin\EventController');
    Route::resource('users', 'Admin\Users');
    Route::resource('gallery', 'Admin\GalleryController');
    Route::resource('nugget', 'Admin\NuggetController');
    Route::resource('books', 'Admin\BooksController');
    Route::resource('configurations', 'Admin\ConfigController');
    Route::post("delete-picture-on-blog", 'Admin\BlogController@deleteImageFromBlog')->name('delete-image-from-blog');
    Route::get('approve-user/{id}/{status}', 'Admin\Users@approved')->name('approve-users');
    Route::get('make-user-admin/{id}', 'Admin\Users@makeAdmin')->name('make-users-admin');
    // Route::resource('comment', CommentController::class);


});
//=======================  end admin authentication===========================


// , 'verified'
// ============================================================================
//=======================  member authentication===========================
Route::prefix('members')->middleware(['auth', 'member'])->group(function () {
    Route::get('/dashboard','Members\MemberController@index')->name('memberdashboard');
    Route::resource('members', 'Members\MemberController');
   Route::resource('testimony', 'TestimonyController');


});
//=======================  end member authentication===========================

