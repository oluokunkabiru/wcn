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
// Route::resource('comment', CommentController::class);



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('comment')->middleware(['auth'])->group(function () {
Route::resource('comment', CommentController::class);
});

// ============================================================================
//=======================  admin authentication===========================
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard' ,'Admin\AdminController@index')->name('admindashboard');
    Route::resource('admin', 'Admin\AdminController');
    // blogs
    Route::resource('blogs', 'Admin\BlogController');
    Route::resource('events', 'Admin\EventController');
    Route::resource('testimony', 'Admin\Testimony');
    Route::resource('gallery', 'Admin\GalleryController');
    Route::resource('nugget', 'Admin\NuggetController');
    Route::resource('books', 'Admin\BooksController');
    // Route::resource('comment', CommentController::class);


});
//=======================  end admin authentication===========================



// ============================================================================
//=======================  member authentication===========================
Route::prefix('members')->middleware(['auth', 'member'])->group(function () {
    Route::get('/dashboard','Members\MemberController@index')->name('memberdashboard');
    Route::resource('members', 'Members\MemberController');
    Route::resource('memeberstestimony', 'Members\TestimonyController');
    // Route::resource('comment', CommentController::class);


});
//=======================  end member authentication===========================

