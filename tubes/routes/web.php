<?php

use Illuminate\Support\Facades\Route;
use App\Models\Movie;
use App\Models\Blog;
use App\Models\Celebrity;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Posting2Controller;
use App\Http\Controllers\PostingController;

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


//-------UNTUK TUBES--------------////

Route::get('/', function () {
    $movies = Movie::orderBy('release_date','desc')->get();
    $movies_rat = Movie::orderBy('rating','desc')->get();
    $blogs = Blog::paginate(4);
    $celebs = Celebrity::paginate(4);
    return view("home", compact('movies', 'movies_rat', 'blogs','celebs'));
});

// AUTHENTICATION
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//DASBOR ADMIN
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.page');
//user config
Route::get('/admin/users', [App\Http\Controllers\Backend\UserController::class, 'index'])->name('userlist');
Route::get('/admin/users/detail/{id}', [App\Http\Controllers\Backend\UserController::class, 'show'])->name('userdetail');
Route::get('/admin/users/reviews/{id}', [App\Http\Controllers\Backend\UserController::class, 'reviews'])->name('userreviews');
Route::get('/admin/users/favorites/{id}', [App\Http\Controllers\Backend\UserController::class, 'favorites'])->name('userfavorites');
Route::get('/admin/users/delete/{id}', [App\Http\Controllers\Backend\UserController::class, 'destroy'])->name('userdelete');
//celebrity config
Route::get('/admin/celebrities', [App\Http\Controllers\Backend\CelebrityController::class, 'index'])->name('celebritylist');
Route::get('/admin/celebrities/create', [App\Http\Controllers\Backend\CelebrityController::class, 'create'])->name('celebritycreate');
Route::get('/admin/celebrities/edit/{id}', [App\Http\Controllers\Backend\CelebrityController::class, 'edit'])->name('celebrityedit');
Route::get('/admin/celebrities/delete/{id}', [App\Http\Controllers\Backend\CelebrityController::class, 'destroy'])->name('celebritydelete');
Route::post('/admin/celebrities/store', [App\Http\Controllers\Backend\CelebrityController::class, 'store'])->name('celebritystore');
Route::put('/admin/celebrities/update/{id}', [App\Http\Controllers\Backend\CelebrityController::class, 'update'])->name('celebrityupdate');
//movie config
Route::get('/admin/movies', [App\Http\Controllers\Backend\MovieController::class, 'index'])->name('adminmovielist');
Route::get('/admin/movies/gallery/{id}', [App\Http\Controllers\Backend\MovieController::class, 'galleries'])->name('moviegallery');
Route::get('/admin/movies/create', [App\Http\Controllers\Backend\MovieController::class, 'create'])->name('moviecreate');
Route::get('/admin/movies/edit/{id}', [App\Http\Controllers\Backend\MovieController::class, 'edit'])->name('movieedit');
Route::get('/admin/movies/delete/{id}', [App\Http\Controllers\Backend\MovieController::class, 'destroy'])->name('moviedelete');
Route::post('/admin/movies/store', [App\Http\Controllers\Backend\MovieController::class, 'store'])->name('moviestore');
Route::put('/admin/movies/update/{id}', [App\Http\Controllers\Backend\MovieController::class, 'update'])->name('movieupdate');
//blog config
Route::get('/admin/blogs', [App\Http\Controllers\Backend\BlogController::class, 'index'])->name('blog.list');
Route::get('/admin/blogs/create', [App\Http\Controllers\Backend\BlogController::class, 'create'])->name('blogcreate');
Route::get('/admin/blogs/edit/{id}', [App\Http\Controllers\Backend\BlogController::class, 'edit'])->name('blogedit');
Route::get('/admin/blogs/delete/{id}', [App\Http\Controllers\Backend\BlogController::class, 'destroy'])->name('blogdelete');
Route::post('/admin/blogs/store', [App\Http\Controllers\Backend\BlogController::class, 'store'])->name('blogstore');
Route::put('/admin/blogs/update/{id}', [App\Http\Controllers\Backend\BlogController::class, 'update'])->name('blogupdate');

//DASBOR USER
Route::get('/user', [App\Http\Controllers\UserController::class,'index'])->name('user.page');
Route::get('/user/reviews/{id}', [App\Http\Controllers\UserController::class, 'reviews'])->name('user.reviews');
Route::get('/user/favorites/{id}', [App\Http\Controllers\UserController::class, 'favorites'])->name('user.favorites');
Route::put('/user/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');

//Movies
Route:: get('/movies/single/{mvsingle}', [App\Http\Controllers\MoviesController::class,'msingle'])->name('moviesingle');
Route:: get('/movielist', [Posting2Controller::class,'mlist'])->name('movielist');
Route:: get('/moviegrid', [Posting2Controller::class,'mgrid'])->name('moviegrid');
Route:: get('/genre1', [Posting2Controller::class,'genre1'])->name('genre1');
Route:: get('/genre2', [Posting2Controller::class,'genre2'])->name('genre2');
Route:: get('/genre3', [Posting2Controller::class,'genre3'])->name('genre3');
Route:: get('/genre4', [Posting2Controller::class,'genre4'])->name('genre4');
Route:: post ('/movie/cari',[Posting2Controller::class,'cari'])->name('cari');
Route:: get ('/movie/tampil',[Posting2Controller::class,'tampil'])->name('tampil');
Route:: put('/movies/sendreview/{id}', [App\Http\Controllers\MoviesController::class,'store_review'])->name('reviewstore');
Route:: get('/movies/savefavorite/{id}', [App\Http\Controllers\MoviesController::class,'store_favorite'])->name('favoritestore');

//Celebnities dan Blogs
Route::get('celeblist', [PostingController::class, 'celeblist'])->name('celeblist');
Route::get('celebsingle/{post}', [PostingController::class, 'celebsingle'])->name('celebsingle');
Route::post('celeblist/search', [PostingController::class, 'search'])->name('search');
Route::get('celeblist/searchceleb', [PostingController::class, 'searchceleb'])->name('searchceleb');
Route::get('movie/{post}', [PostingController::class, 'movie'])->name('movie');
Route::get('bloglist', [PostingController::class, 'bloglist'])->name('bloglist');
Route::get('blogdetail/{post}', [PostingController::class, 'blogdetail'])->name('blogdetail');
Route::post('bloglist/search_blog', [PostingController::class, 'search_blog'])->name('search_blog');
Route::get('bloglist/searchblog', [PostingController::class, 'searchblog'])->name('searchblog');
