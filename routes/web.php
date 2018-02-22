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

Auth::routes();

Route::group(['namespace' => 'Blog'], function (){
    Route::get('/', 'BlogController@index')->name('home');
    Route::get('/about', function (){
        return view('blog.static_page.about');
    })->name('about');
    Route::get('/contact', function (){
        return view('blog.static_page.contact');
    })->name('contact');
    Route::get('/category_{slug}', 'BlogController@category');
    Route::get('/category_{category_slug}/post_{post_slug}', 'BlogController@post')->name('post');
    Route::get('tag_{slug}', 'BlogController@tag');
    Route::group(['middleware' => 'auth'], function (){
        Route::resource('/comment', 'CommentController');
        Route::resource('/my_post', 'MyPostController');
    });


});




//admin-panel
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function (){
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
    Route::post('/general_slug', 'SlugController@generalSlug');
    Route::resource('/category', 'CategoryController', ['as' => 'admin']);
    Route::resource('/tag', 'TagController', ['as' => 'admin']);
    Route::resource('/post', 'PostController', ['as' => 'admin']);
    Route::resource('/comment', 'CommentController', ['as' => 'admin']);
    Route::resource('/user', 'UserController', ['as' => 'admin']);
});




