<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\database;
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


///// SESSION WALA KAAM REHTA HA PLUS BG PICTURE PLUS BACKGROUND

Route::get('/', function () {
    return view('teacherlogin');
});

Route::get('/tlogin', function () {
    return view('teacherlogin');
});

Route::get('/tsignup', function () {
    return view('teachersignup');
});

Route::post("signup", [database::class, "addTeachersData"]);


Route::get('signin', [database::class, "teacherlogin"]);



//student
Route::get('/stuLogin', function () {
    return view('studentlogin');                                                                                                                                          
});

Route::get('/stuSignup', function () {
    return view('studentsignup');
});

Route::post("stuSignup", [database::class, "addStudentsData"]);
Route::get('stuSignin', [database::class, "studentlogin"]);
Route::post('/settings/update/{teachername}' , [database::class, "updateData"]);
Route::post('/studentsettings/update/{studentname}' , [database::class, "studentUpdateData"]);
// Route::view("dashboard","dashboard");
Route::get('/projects/addproject/backprojects/{teachername}', [database::class, 'backproject']);
Route::get('/list/studentadd/backstudent/{teachername}', [database::class, 'backstudent']);

//practiceeeeeee
// Route::view("table", "table");

// Route::get('table' , [database::class ,"dataFetch"]);
// Route::get('delete/{id}',[database::class, "dataDelete"]);
// Route::get('edit/{id}',[database::class, "showData"]);
// Route::post('edit/update' , [database::class, "updateData"]);

Route::view('logout', 'teacherlogin');
Route::view('signout', 'studentlogin');

Route::get('send-mail', [database::class, 'index']);

Route::get("/dashboard/{teachername}", [database::class, 'dashboard']);
Route::get("/studentdashboard/{studentname}", [database::class, 'studashboard']);
Route::view("/dashboard/new/{teachername}", "addtask");
Route::view("/studentdashboard/new/{teachername}", "addtask");
Route::post("/dashboard/new/add/{teachername}", [database::class, "addnewtask"]);
Route::post("studentdashboard/new/add/{studentname}", [database::class, "addnewtaskStudent"]);
// Route::get('/dashboard/{teachername}', function(){
//     return view('dashboard', ['teachername'=>'ayesha amjad']);
// });
Route::get('/dashboard/edit/{id}/{teachername}', [database::class, "deletedata"]);
Route::post('/dashboard/relode/{teachername}', [database::class, "relode"]);

Route::get('adminpanel', [database::class, 'adminpanel']);
Route::get('teacherstable', [database::class, 'adminteacherstable']);
Route::get('studentstable', [database::class, 'adminstudentstable']);
Route::get('projectstable', [database::class, 'adminprojectstable']);
Route::get('adminTeacherdelete/{id}', [database::class, 'adminTeacherdelete']);
Route::get('emptyteachers', [database::class, 'emptyteachers']);
Route::get('emptystudents', [database::class, 'emptystudents']);
Route::get('adminStudentdelete/{id}', [database::class, 'adminStudentdelete']);
Route::get('adminmail/{email}/{password}/{registration}/{section}/{check}/', [database::class, 'adminMail']);
Route::view('adminlogout', 'teacherlogin');

Route::get('list/{teachername}', [database::class, 'showteachername']);
Route::get('list/studentadd/{teachername}', [database::class, 'showStudents']);
Route::get('projects/{teachername}', [database::class, 'showprojects']);
Route::get('showprojects/{teachername}/studentprojectmarking/{projectname}/{fullname}', [database::class, 'projectmarking']);
Route::get('showprojects/{teachername}/{projectname}', [database::class, 'showProjectsTeacher']);
Route::get('studentprojects/{studentname}', [database::class, 'showstudentprojects']);
Route::get('studentprojects/{studentname}/{projectname}', [database::class, 'showstuproject']);
Route::post('studentprojects/{studentname}/stusubmitproject/{teachername}/{projectname}', [database::class, 'studentSubmitProject']);
Route::get('projects/addproject/{teachername}', [database::class, 'addprojects']);
Route::post('projects/addproject/submitproject/{teachername}', [database::class, 'submitproject']);
Route::get('profile/{teachername}',[database::class, 'teacherprofile']);
Route::get('studentprofile/{studentname}',[database::class, 'studentprofile']);
Route::get('settings/{teachername}', [database::class, 'settings']);
Route::get('studentsettings/{studentname}', [database::class, 'studentsettings']);
Route::get('/list/studentadd/assignstudent/{registration}/{teachername}', [database::class, "assignStudent"]);
Route::get('/list/deletestudent/{registration}/{teachername}', [database::class, "deleteStudent"]);
