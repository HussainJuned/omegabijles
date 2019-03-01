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

Route::get('/', 'HomeController@index');
Route::get('/register', 'RegisterController@showRegisterForm');
Route::get('/contact', 'HomeController@getContact')->name("contact");
Route::get('/login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('/contact', 'HomeController@postContact');
Route::get('/hoehetwerkt', 'HomeController@howitworks');
Route::get('/Aanmelden', 'HomeController@becomeatutor')->name("become_tutor");
Route::get('/aanmelden', 'HomeController@becomeatutor')->name("become_tutor");
Route::get('/haarlem', function (){
return view('new_harleem');
});
Route::get('/haarlem-old', function () {
  return view('haarlem');
});
Route::get('/bloemendaal', function (){
return view('bloemendaal');
});
Route::get('/velsen', function (){
return view('velsen');
});
Route::get('/overons', 'HomeController@overons');
Route::get('/wordbijlesgever', 'HomeController@wordbijlesgever');
Route::get('/wordbijlesgever1', 'HomeController@wordbijlesgever1');
Route::get('/wordbijlesgever2', 'HomeController@wordbijlesgever2');
Route::get('/algemenevoorwaarden', 'HomeController@algemenevoorwaarden');
Route::get('/privacyencookies', 'HomeController@privacy');

Route::get('/ja', 'HomeController@bijlespagina');


Route::post('/register', 'RegisterController@registerTutor');
Route::get('/applytutorsuccess', 'HomeController@applytutorsuccess');
Route::get('/tutorprofile/{id}', 'HomeController@tutorprofile')->name('tutorprofile.show');
Route::get('/searchtutor', 'SearchController@index')->name('search.index');

Route::get('/search-tutor/{postcode}/{subject}', 'HomeController@search');
Route::get('/search-tutor/{subject?}', 'SearchController@search');
Route::get('/haarlem/{subject}','SearchController@searchHaarlem');
Route::get('/bloemendaal/{subject}','SearchController@searchBloemendaal');
Route::get('/velsen/{subject}','SearchController@searchVelsen');
Route::get('/tutor/forget-password','Auth\ForgetPasswordController@index');
Route::post('/tutor/forgetpassword', 'Auth\ForgetPasswordController@sendTokenToMail');
Route::get('/tutor/resetpassword/{token}', 'Auth\ForgetPasswordController@verifyToken');
Route::post('/tutor/forgetchangepass', 'Auth\ForgetPasswordController@changePassword');

//Review tutor
Route::post('/tutor_profile/review/{id}', 'TutorReviewController@store')->name('tutor.review.store');
Route::post('/search/filter', 'HomeController@filterData');
Route::post('/contacttutor', 'HomeController@contactTutor');



Route::get('/admin','Admin\HomeController@index');
Route::get('/admin/changestatus/{id}','Admin\HomeController@changeStatus');
Route::get('/admin/tutorprofile/{id}', 'Admin\HomeController@tutorprofile');
Route::get('/admin/login', 'Admin\Auth\LoginController@showLoginForm');
Route::post('/admin/login', 'Admin\Auth\LoginController@login');
Route::get('/admin/changepassword', 'Admin\HomeController@changePassForm');
Route::post('/admin/changepass', 'Admin\HomeController@changepass');
Route::get('/admin/logout' , 'Admin\Auth\LoginController@logout');
Route::get('/admin/email','Admin\HomeController@showEmail');
Route::get('/admin/documenten', function () {
    return view('admin.documenten');
});
Route::get('/admin/spreadsheets', function () {
    return view('admin.spreadsheets');
});

Route::get('/tutor/home','Tutor\HomeController@index');

Route::get('/tutor/login',['uses' => 'Auth\LoginController@showLoginForm']);
Route::post('/tutor/login', 'Auth\LoginController@authenicate');
Route::get('/tutor/changepassword', 'Tutor\HomeController@changePassForm');
Route::post('/tutor/changepass', 'Tutor\HomeController@changepass');
Route::get('/tutor/logout' , 'Auth\LoginController@logout');
Route::get('/tutor/email','Tutor\HomeController@email');
Route::get('/tutor/uren','Tutor\HomeController@uren');
Route::get('/tutor/documenten','Tutor\HomeController@documenten');
Route::get('/tutor/evaluatie', 'Tutor\HomeController@evaluatie');
Route::get('/tutor/maandevaluatie', 'Tutor\HomeController@maandevaluatie');
Route::get('/tutor/mijnvakken','Tutor\TutorController@mijnvakken');
Route::post('/tutor/updateMijnvakken','Tutor\TutorController@updateMijnvakken');
Route::get('/tutor/mijnprofiel','Tutor\TutorController@mijnprofiel');
Route::post('/tutor/updateMijnprofiel','Tutor\TutorController@updateMijnProfile');
Route::get('/tutor/persoonlijkeinfo','Tutor\TutorController@persoonlijkeinfo');
Route::post('/tutor/info/update','Tutor\TutorController@tutorInfoUpdate');
Route::get('/tutor/videos', function () {
    return view('tutor.videos');
});

Route::post('/sendIntentMail', 'HomeController@sendIntentMail');