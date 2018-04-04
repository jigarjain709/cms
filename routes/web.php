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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@profile');

Route::post('/submit','ProfileController@update');

Route::get('/notifications','NotificationController@notification');

Route::get('/placements','PlacementController@place');

Route::get('/attendance','AttendanceController@index');

Route::get('/result','ResultController@index');

Route::get('/timetable', 'TimetableController@index');
Route::get('/teacher_timetable', 'TeacherTimetableController@index');
Route::get('/admin_timetable', 'AdminTimetableController@index');
Route::resource('timetables', 'StudentAdminTimetableController');
Route::resource('teacher_timetables', 'AdminTimetableController');
Route::get('admin_student_timetable', 'StudentAdminTimetableController@index');
Route::get('editItem', 'StudentAdminTimetableController@editItem');

// Route::get('/profile', function () {
//     return view('profile');
// });
