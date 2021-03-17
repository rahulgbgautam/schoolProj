<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentReportController;


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

Route::get('/welcomenew', function () {
	return view('welcomenew');
});




Route::get('/school','IndexController@index');

Route::view('/admin-portal','school.admin-portal');

Route::view('/staff-portal','school.staff-portal');

Route::view('/notification-portal','school.notification-portal');

Route::view('/student-details-add','school.student-details-add');

Route::view('/student-details-add-new','school.student-details-add-new');

Route::view('/notification-add','school.notification-add');

Route::view('/forgot-password','school.forgot-password');

Route::view('/admin-login','school.admin-login');

Route::view('/student-details','school.student-details');

Route::post('/student-details-show','StudentDetailsShowController@StudentDetailsShow');


Route::view('/notification-details','school.notification-details');

Route::view('/staff-details','school.staff-details');

Route::view('/staff-details-add','school.staff-details-add');

Route::view('/admin-details','school.admin-details');

Route::view('/admin-add','school.admin-add');

Route::view('/student-marks-add','school.student-marks');

Route::view('/student-marks-add-new','school.student-marks-add-new');

Route::view('/student-reports','school.student-reports');



Route::get('/student-report-below-fifth','StudentReportController@index');

Route::post('/term-vise','StudentReportController@TermVise');

Route::post('/SubjectVise','StudentReportController@SubjectVise');

Route::post('/NumberGirlsAndBoys','StudentReportController@NumberGirlsAndBoys');

Route::post('/HindiAndTelguStudent','StudentReportController@HindiAndTelguStudent');

Route::post('/StudentInBus','StudentReportController@StudentInBus');


Route::post('/each-student-record','StudentReportController@EachStudentRecord');


Route::post('/stafflogin','StaffLoginController@stafflogin');





Route::get('/student-report-above-fifth','StudentReportAboveFifthController@index');

Route::post('/term-vise-above-fifth','StudentReportAboveFifthController@TermVise');

Route::post('/SubjectVise-above-fifth','StudentReportAboveFifthController@SubjectVise');

Route::post('/NumberGirlsAndBoys-above-fifth','StudentReportAboveFifthController@NumberGirlsAndBoys');

Route::post('/HindiAndTelguStudent-above-fifth','StudentReportAboveFifthController@HindiAndTelguStudent');

Route::post('/StudentInBus-above-fifth','StudentReportAboveFifthController@StudentInBus');


Route::post('/each-student-record-above-fifth','StudentReportAboveFifthController@EachStudentRecord');










Route::view('/student-above-fifth','school.student-marks-add-new-above-fifth');

Route::view('/student-below-fifth','school.student-marks-add-new');


Route::view('/student-details-show-fill','school.student-details-show-fill');







// Route::get('/student-report',[StudentReportController::class, 'index']);




Route::view('/image-form','school.image-upload');



Route::Resource('image-upload','ImageUploadController');



Route::Resource('admin','AdminController');

Route::Resource('student','StudentController');

Route::Resource('staff','StaffController');

Route::Resource('notification','NotificationController');

Route::Resource('student-marks','StudentMarksController');

Route::Resource('fees-structure','FeesController');

Route::Resource('student-marks-above-fifth','StudentMarksAboveFifthController');





