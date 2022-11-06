<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RoomController;

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

Route::get('/index', function() {
    return view('welcome');
});

Route::get('/profilee',[PagesController::class, 'profile'])->name('profile');
Route::get('/login',[PagesController::class, 'loginPage'])->name('login');


Route::get('/hm',[PagesController::class, 'home'])->name('home');
Route::get('/contact',[PagesController::class, 'contact'])->name('contact');
Route::get('/service',[PagesController::class, 'service'])->name('service');
Route::get('/about',[PagesController::class, 'about'])->name('about');
Route::get('/ourteam',[PagesController::class, 'ourteam'])->name('ourteam');


Route::get('/basichome',[PagesController::class, 'basicHome'])->name('basicHome');


//value pass by url
Route::get('/user/{id}', function($id) {
    return "<b>Passed : ".$id."<br>";
});

//Student
Route::get('/studentHome',[StudentController::class, 'studentHome'])->name('studentHome')->middleware('loginCheck');
Route::get('/studentList',[StudentController::class, 'studentList'])->name('studentList')->middleware('loginCheck');

Route::get('/createUser',[CustomerController::class, 'index'])->name('createUser');
Route::post('/createUser',[CustomerController::class, 'create'])->name('createUser');

Route::get('/createStudent',[StudentController::class, 'createStudent'])->name('createStudent')->middleware('loginCheck');
Route::post('/createStudent',[StudentController::class, 'createStudentSubmitted'])->name('createStudent');

Route::get('/studentUpdate/{sid}',[StudentController::class, 'studentEdit'])->name('studentUpdate')->middleware('loginCheck','adminCheck');
Route::post('/studentUpdate',[StudentController::class, 'studentEditSubmitted'])->name('studentUpdate');

Route::get('/studentDelete/{id}',[StudentController::class, 'studentDelete'])->name('studentDelete');

Route::get('/studentLogin',[StudentController::class, 'studentLogin'])->name('studentLogin');
Route::post('/studentLogin',[StudentController::class, 'studentLoginCheck'])->name('studentLogin');

Route::get('/studentLogout',[StudentController::class, 'studentLogout'])->name('studentLogout');

Route::get('/profile}',[StudentController::class, 'profile'])->name('profile')->middleware('loginCheck');
Route::get('/details/{id}',[StudentController::class, 'details'])->name('details');


Route::get('/profileUpdate/{sid}',[StudentController::class, 'profileEdit'])->name('profileUpdate')->middleware('loginCheck');
Route::post('/profileUpdate',[StudentController::class, 'profileEditSubmitted'])->name('profileUpdate')->middleware('loginCheck');


Route::get('/changePassword/{id}/{password}',[StudentController::class, 'changePassword'])->name('changePassword')->middleware('loginCheck');

//ADDRESS
Route::get('/getDistrict/{city_id}', [StudentController::class, 'getDistrict'])->middleware('loginCheck');
Route::get('/getArea/{district_id}', [StudentController::class, 'getArea']);

//ROOM
Route::get('/room', [RoomController::class, 'index'])->name('room')->middleware('loginCheck');

Route::get('/getRoom/{cetegory}', [RoomController::class, 'getRoom'])->name('getRoom')->middleware('loginCheck');
Route::get('/getRent/{id}', [RoomController::class, 'getRent'])->name('getRent')->middleware('loginCheck');

Route::get('/addRoom', [RoomController::class, 'newRoom'])->name('addRoom')->middleware('adminCheck');
Route::post('/addRoom', [RoomController::class, 'create'])->name('addRoom');

Route::post('/bookings', [RoomController::class, 'bookings'])->name('bookings')->middleware('loginCheck');
Route::get('/makeAvailable/{id}',[RoomController::class, 'makeAvailable'])->name('makeAvailable')->middleware('loginCheck');



