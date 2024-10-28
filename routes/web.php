<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\bookingController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\trailerController;
use App\Http\Controllers\userController;

use App\Http\Controllers\adminshowController;

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
    return view('pages.home');
});

Route::view('about','pages.about');

Route::view('contact','pages.contact');

Route::view('services','pages.services');

Route::view('team','pages.team');

Route::view('blog','pages.blog');

Route::view('blog_detail','pages.blog_detail');

//Route::view('trailer','pages.trailer');

Route::view('booking','pages.booking');

Route::view('edit','pages.edit');

//Route::view('/addUser', 'pages.home')->name('add');

//admin //

Route::view('/','admin.index');

Route::view('/main','admin.main');

Route::view('/charts','admin.charts');

Route::view('/layout','admin.layout');

Route::view('/layout-static','admin.layout-static');

Route::view('/log','admin.login');

Route::view('/tables','admin.tables');

Route::view('/register','admin.register');

Route::view('/password','admin.password');

Route::view('/error','admin.error');

Route::view('/error1','admin.error1');

Route::view('/error2','admin.error2');

Route::view('adminShow','admin.adminShow');

//admin login//

Route::view('addUser','admin.home')->name('add');

Route::view('/signup','admin.signup');

// Route::view('/editUser','admin.editUser');

//controller routes//

Route::get('/',[trailerController::class,'showtrailer']);

Route::post('/save',[bookingController::class,'bookingPerson'])->name('save');

Route::post('/save',[userController::class,'addPerson'])->name('save');

//ADMIN//


Route::get('/', [adminController::class, 'showPerson'])->name('home');

Route::post('/save', [adminController::class, 'savePerson'])->name('save');

Route::get('/edit/{id}', [adminController::class, 'editPerson'])->name('edit');

Route::get('/update', [adminController::class, 'updatePerson'])->name('update');

Route::get('delete/{id}', [adminController::class, 'deletePerson'])->name('delete');

//Route::view('/save', 'admin.signup')->name('save');

//ADMIN SHOW//



Route::get('/', [adminshowController::class, 'movieShow'])->name('show');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users', [adminController::class, 'updatePerson'])->name('users');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
