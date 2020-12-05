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
    return view('index');
});

                            //-----admin related routes-----------
                            //////
Route::get('/dash', 'AdminController@count');
////
Route::view('/adminreg', 'adminreg');
Route::view('adminlog', 'adminlogin');
Route::post('admin_insert', 'AdminController@store');
Route::post('admin_login', 'AdminController@login');
Route::get('/changepic/{id}','AdminController@photo');
Route::post('/changepic/adminphoto/{id}','AdminController@update');

//edit and delete for student (admin_dash)
Route::get('/student/edit/{id}', 'StudentController@edit');
Route::post('/admin_stud_update/{id}', 'StudentController@update');
Route::get('/student/delete/{id}', 'StudentController@destroy');

//edit and delete for Teacher (admin_dash)
Route::get('/teacher/edit/{id}', 'TeacherController@edit');
Route::post('/admin_teach_update/{id}', 'TeacherController@update');
Route::get('/teacher/delete/{id}', 'TeacherController@destroy');

//teacher dashboard student and teacher display
Route::view('/studdata','dash.studentdata');
Route::get('/studdata','StudentController@index');
Route::view('/teachdata','dash.teacherdata');
Route::get('/teachdata','TeacherController@index');

//admin pannel teacher registration
Route::post('teacher_insert', 'TeacherController@store');

//admin pannel student  registration
Route::post('student_insert', 'StudentController@store');
Route::view('/stureg', 'studentreg');

//change password admin

Route::get('/change_pass/admin/{id}', 'AdminController@change_pass');
Route::post('/change/{id}', 'AdminController@update_pass');

//Approval part
Route::get('approve', 'TeacherController@approve');
Route::get('/approve_reject/{id}', 'TeacherController@reject');
Route::get('/approved/{id}', 'TeacherController@approved');

//Performance
Route::get('/performance','AdminController@performance');
Route::get('/adminperf/{id}','AdminController@edit');
Route::post('/admin_perf_edit/{id}','AdminController@perfupdate');
Route::get('/delete/{id}','AdminController@perfdelete');

//assign class

Route::get('/assignstud','AdminController@assigndisplay');
Route::get('/assignteach','AdminController@assigndisplay1');
Route::post('/assign_student','AdminController@assign_stu');
Route::post('/assign_teacher','AdminController@assign_tea');
//Route::view('/assignstud','admin_assigstud');

//assign subjects
Route::get('/assignsubj','AdminController@assigndisplay_sub');
Route::post('/assign_sub','AdminController@assign_sub');

//add rooms and subjects
Route::view('/adclass', 'addroom');
Route::post('/addclass','AdminController@addroom');
Route::view('/adsubject', 'addsubjects');
Route::post('/addsubject','AdminController@addsub');


//Admin class details
//Route::view('/class','admin_class');
Route::get('/class', 'AdminController@main_class');
Route::post('/search', 'AdminController@search');
Route::get('myclass_edit_marks/{id}' , 'AdminController@myclass_marks');
Route::get('myclass_edit_attend/{id}' , 'AdminController@myclass_attend');
Route::post('/class_attend_update/{id}', 'AdminController@attend');
Route::post('/class_mark_update/{id}', 'AdminController@mark');

//logout

Route::get('/admin/logout', function () {
    Session::forget('admin');
    Session::forget('pic');
    Session::forget('name');
    Session::forget('email');
    Cookie::forget('ida');
    return redirect('/');
});
        //---------------------------------------------XXXXXXXXXXXX--------------------------------------------------------




    //--------------------------------------teacher related router------------------------------------------------------------
Route::view('/teachreg', 'teachreg');
Route::view('/tealog', 'tealogin');
Route::post('teacher_login', 'TeacherController@login');


///teacher dashboard count display
Route::get('/teachdash','TeacherController@count');

///teacher pannel my profile display
Route::get('/changeteachpic/{id}','TeacherController@photo');
Route::post('/changepic/teachphoto/{id}','TeacherController@update1');


//teacher pannel student marks Display

Route::get('/student_marks', 'StudentController@marks');
Route::get('/stud_marks/edit/{id}', 'StudentController@edit_marks');
Route::post('/stud_mark_update/{id}', 'StudentController@update_marks');
Route::post('tea_marks', 'StudentController@mar_tea');
Route::post('tea_attend', 'StudentController@attend_tea');


//teacher pannelstudent attendance Display

Route::get('/student_attend', 'StudentController@attend');
Route::get('/stud_attend/edit/{id}', 'StudentController@edit_attend');
Route::post('/stud_attend_update/{id}', 'StudentController@update_attend');


//change password teacher

Route::get('/change_pass/teacher/{id}', 'TeacherController@change_pass');
Route::post('/change_teach/{id}', 'TeacherController@update_pass');


//profile part
Route::get('/myprof/{id}','AdminController@profile');
Route::view('/myprof','myprofile');
Route::get('/myprof1/{id}','TeacherController@profile');
Route::view('/myprof1','myprofile1');

//teacher public registration
Route::view('teach_reg_public', 'teach_reg_public');
Route::post('teacher_public_insert', 'TeacherController@store_public');

//teacher class
//Route::view('/myclass','teacher_class');
Route::get('/myclass', 'TeacherController@room_dis');
Route::post('/teach_search', 'TeacherController@teach_search');
//logout

Route::get('/teacher/logout', function () {
    Session::forget('teacher');
    Session::forget('pic');
    Session::forget('name');
    Session::forget('email');
    Session::forget('dob');
    Session::forget('id1');
    Session::forget('gender');
    Session::forget('phone');
    Cookie::forget('id');
    return redirect('/');
});


  //-------------------------------------XXXXXXXXXXXXXXXXXXXXXXXXXXXX------------------------------------------------------------------



//---------------------------------------student dashboard ------------------------------------------------------------------

//student related routes
Route::view('/studlog', 'studlogin');
Route::post('student_login', 'StudentController@login');
Route::get('/studdash','StudentController@stud_display');

//logout

Route::get('/student/logout', function () {
    Session::forget('student');
    Session::forget('stpic');
    Cookie::forget('ids');
    return redirect('/');
});


//change password student
Route::get('/change_pass/student/{id}', 'StudentController@change_pass');
Route::post('/change_stud/{id}', 'StudentController@update_pass');



//student marks and attendance display in student pannel

Route::get('/student_marks_panel', 'StudentController@pannel_marks');
Route::get('/student_attendance_panel', 'StudentController@pannel_attend');
//my class part
Route::get('/stud_myclass', 'StudentController@myclass');

//sports part

Route::view('/sports','studsports');
Route::post('/studsports','StudentController@sports');

//Cultural Activites

Route::view('/events','studculture');
Route::post('/studevent','StudentController@cultural');

//transport details

Route::view('/trans','studtransport');
Route::post('/studtrans','StudentController@transport');

//profile part
Route::get('/myprof2/{id}','StudentController@profile');
Route::view('/myprof2','myprofile2');
Route::get('/changestudpic/{id}','StudentController@photo');
Route::post('/changepic/studphoto/{id}','StudentController@update1');

//----------------------------------------------XXXXXXXXXXXXXXXXXXXXXXXXX----------------------------------------------------



//home page
//Route::view('home', 'home');
//Route::view('home1', 'index');
Route::view('explore', 'explore');
Route::view('demo', 'dash.demo');
