<?php

use Illuminate\Support\Facades\Route;
use App\Models\Module;
use App\Models\Student;
use App\Models\Staff;
use App\Models\StudentAttendance;
use App\Models\StaffAttendance;
use App\Models\School;
 use Carbon\Carbon;
 use Illuminate\Support\Facades\DB;
// use DB;
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
Route::get('/clear-all', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('cache:clear');
    dd("cache, route and config are cleared!");
});
Auth::routes();
Route::get('/', function () {
        if(Auth::user()->role_id==3){
             return view('layouts.hq-dashboard'); //this is actualy dashboard
         }else if (Auth::user()->role_id==2) {

          $data['schools'] = School::where('district_id',Auth::user()->district_id)->get();
          $data['tehsils'] = DB::table('tehsils')->where('district_id',Auth::user()->district_id)->get();
          $data['nas'] = DB::table('nas')->where('district_id',Auth::user()->district_id)->get();
          $data['pks'] = DB::table('pks')->where('district_id',Auth::user()->district_id)->get();
          // dd($data['tehsils']);
              return view('layouts.dmo-dashboard',$data); //this is actualy dashboard
         }else{
               $data['student_count_att_all'] = Student::where('school_id',Auth::user()->school_id)->count();
               $data['student_count_att_p'] = StudentAttendance::where('school_id',Auth::user()->school_id)->where('attendance',"Present")->get();
               $data['pak_std'] = Student::where('school_id',Auth::user()->school_id)->where('country_id',"1")->count();
               $data['afgh_std'] = Student::where('school_id',Auth::user()->school_id)->where('country_id',"2")->count();
               $data['muslim'] = Student::where('school_id',Auth::user()->school_id)->where('religion',"muslim")->count();
               $data['non-muslim'] = Student::where('school_id',Auth::user()->school_id)->where('religion',"non-muslim")->count();
               $data['male'] = Student::where('gender',"male")->count();
               $data['female'] = Student::where('gender',"female")->count();
               $data['health_no'] = Student::where('health_id',"1")->count();
               $data['health_yes'] = Student::where('health_id',"2")->count();
              

               $data['student_count_att_a'] = StudentAttendance::where('school_id',Auth::user()->school_id)->where('attendance',"Absent")->where('created_at', Carbon::today())->count();

               $data['staff_count_att_all'] = Staff::where('school_id',Auth::user()->school_id)->count();
               $data['staff_count_att_p'] = StaffAttendance::where('school_id',Auth::user()->school_id)->where('attendance',0)->where('att_date', Carbon::today())->count(); //0 use for present 
               
               // dd($data['student_count_att_a']);
               $data['staff_count_att_a'] = StaffAttendance::where('school_id',Auth::user()->school_id)->where('attendance',2)->where('att_date', Carbon::today())->count();//1 use for leave

                // dd($data['staff_count_att_a']);
               $data['staff_count_att_l'] = StaffAttendance::where('school_id',Auth::user()->school_id)->where('attendance',1)->where('att_date', Carbon::today())->count(); //2 use for absent

               // echo "<pre >";
               //   print_r($data);exit;
              return view('layouts.dashboard',$data); //this is actualy dashboard
         }
})->middleware('auth');


//@@@@@@@@@@@@@@@@@@@@@@@$ for resource routes $@@@@@@@@@@@@@@@@@@@@@@@@@
Route::resource('users','App\Http\Controllers\UserController'); //done
Route::resource('modules','App\Http\Controllers\ModuleController'); //done
// Route::resource('permissions','App\Http\Controllers\PermissionController');
Route::resource('roles','App\Http\Controllers\RoleController'); //roles
Route::resource('students','App\Http\Controllers\StudentController'); //done
Route::resource('bloods','App\Http\Controllers\BloodGroupController'); //done
// Route::resource('casts','App\Http\Controllers\CastController'); // done
Route::resource('religions','App\Http\Controllers\ReligionController'); //done
// Route::resource('cities','App\Http\Controllers\CityController'); //done
Route::resource('provinces','App\Http\Controllers\ProvinceController'); //done
Route::resource('countries','App\Http\Controllers\CountryController'); //done
Route::resource('levels','App\Http\Controllers\LevelController'); //done
Route::resource('sections','App\Http\Controllers\SectionController'); //done
Route::resource('sessions','App\Http\Controllers\SessionController'); //done
Route::resource('free_classes','App\Http\Controllers\FreeClassController'); //done
// Route::resource('class_section_session','App\Http\Controllers\ClassSectionSessionController'); //done
Route::resource('schools','App\Http\Controllers\SchoolController'); //done
// Route::resource('campuses','App\Http\Controllers\CampusController'); // done
Route::resource('branches','App\Http\Controllers\BranchController'); //done
Route::resource('banks','App\Http\Controllers\BankController'); // done
Route::resource('bank_accounts','App\Http\Controllers\BankAccountController'); // done
// Route::resource('departments','App\Http\Controllers\DepartmentController'); // done
Route::resource('designations','App\Http\Controllers\DesignationController'); // done
// Route::resource('enrollments','App\Http\Controllers\EnrollmentRegisterController'); // done
Route::resource('examtypes','App\Http\Controllers\ExamTypeController'); //done
Route::resource('exams','App\Http\Controllers\ExaminationController'); //done
Route::resource('expenses','App\Http\Controllers\ExpenseController'); //done
Route::resource('expense_categories','App\Http\Controllers\ExpenseCategoryController'); //done 
Route::resource('fees','App\Http\Controllers\FeeController'); //done
Route::resource('fee_categories','App\Http\Controllers\FeeCategoryController'); //done
Route::resource('grades','App\Http\Controllers\GradeController'); //done
Route::resource('healths','App\Http\Controllers\HealthController'); //done
Route::resource('occupations','App\Http\Controllers\OccupationController'); //done
Route::resource('class_tarrifs','App\Http\Controllers\ClassTarrifController'); //done
Route::resource('fee_tarrifs','App\Http\Controllers\FeeTarrifController'); //done
Route::resource('fee_structures','App\Http\Controllers\FeeStructureController'); //done
// Route::resource('staff_categories','App\Http\Controllers\StaffCategoryController'); //done
Route::resource('staffs','App\Http\Controllers\StaffController'); //done
 Route::resource('vecs','App\Http\Controllers\VecModelController'); //done
 Route::resource('salaries','App\Http\Controllers\SalaryController'); //done
 Route::resource('assesments','App\Http\Controllers\AssesmentController'); //done
 Route::resource('visitors','App\Http\Controllers\VisitorController'); //done
 Route::resource('enrollments','App\Http\Controllers\EnrollmentController'); //done
 Route::resource('facilities','App\Http\Controllers\FacilityController'); //done
 Route::resource('contact_forms','App\Http\Controllers\ContactFormController'); //done
 Route::resource('nearest_institutions','App\Http\Controllers\NearestInstitutionController'); //done
//@@@@@@@@@@@@@@@@@@@@@@@$End of resource routes $@@@@@@@@@@@@@@@@@@@@@@@@@
// get branch code through ajax
Route::get('getBranch', [App\Http\Controllers\BranchController::class, 'getBranch'])->name('get.Branch');
Route::get('getFee', [App\Http\Controllers\FeeTarrifController::class, 'getFee'])->name('get.Fee');
Route::get('feeDetail', [App\Http\Controllers\FeeTarrifController::class, 'feeDetail'])->name('feeDetail');
Route::get('getCSS', [App\Http\Controllers\FeeTarrifController::class, 'getCSS'])->name('getCSS');
Route::post('dataSubmit', [App\Http\Controllers\FeeTarrifController::class, 'dataSubmit'])->name('dataSubmit');
Route::get('dataGet', [App\Http\Controllers\FeeTarrifController::class, 'dataGet'])->name('dataGet');
Route::get('classWiseRecord', [App\Http\Controllers\FeeTarrifController::class, 'classWiseRecord'])->name('classWiseRecord');
// ===========================payment fee=======================
Route::get('paymentFee', [App\Http\Controllers\FeeStructureController::class, 'paymentFee'])->name('paymentFee');
Route::get('feeDetailGet', [App\Http\Controllers\FeeStructureController::class, 'feeDetailGet'])->name('feeDetailGet');
Route::get('getStudentRecord', [App\Http\Controllers\FeeStructureController::class, 'getStudentRecord'])->name('getStudentRecord');
Route::get('getfeePayment/{id}', [App\Http\Controllers\FeeStructureController::class, 'getfeePayment'])->name('getfeePayment');
Route::post('paidPayment', [App\Http\Controllers\FeeStructureController::class, 'paidPayment'])->name('paidPayment');
// ================For every model Delete======================
// ================For  Student Attendance======================
Route::resource('student_attendances','App\Http\Controllers\StudentAttendanceController'); //
Route::get('att_list', [App\Http\Controllers\StudentAttendanceController::class, 'attendanceList'])->name('att_list');
Route::get('att_list_show', [App\Http\Controllers\StudentAttendanceController::class, 'attendanceListShow'])->name('att_list_show');
Route::get('sessionList', [App\Http\Controllers\StudentAttendanceController::class, 'sessionList'])->name('sessionList');
Route::get('sectionList', [App\Http\Controllers\StudentAttendanceController::class, 'sectionList'])->name('sectionList');
Route::get('sectionListShow', [App\Http\Controllers\StudentAttendanceController::class, 'sectionListShow'])->name('sectionListShow');
Route::post('submitAttendance', [App\Http\Controllers\StudentAttendanceController::class, 'submitAttendance'])->name('submitAttendance');
//this is for show detail of student
Route::get('show_detail_of_student', [App\Http\Controllers\StudentController::class, 'showDetailStudent'])->name('show_detail_of_student');
// ================For Attendance======================
// ================For Staff Attendance======================
Route::resource('staff_attendances','App\Http\Controllers\StaffAttendanceController'); //
Route::get('staff_attendance_list', [App\Http\Controllers\StaffAttendanceController::class, 'staffAttendanceList'])->name('staff_attendance_list');
Route::get('add_attendance', [App\Http\Controllers\StaffAttendanceController::class, 'addStaffAttendance'])->name('add_attendance');

// get staff
Route::get('staffCommonList', [App\Http\Controllers\StaffAttendanceController::class, 'staffCommonList'])->name('staffCommonList');
Route::get('staffListShow', [App\Http\Controllers\StaffAttendanceController::class, 'staffListShow'])->name('staffListShow');
Route::post('submitStaffAttendance', [App\Http\Controllers\StaffAttendanceController::class, 'submitStaffAttendance'])->name('submitStaffAttendance');

//this is for show detail of student
Route::get('show_detail_of_staff', [App\Http\Controllers\StaffController::class, 'showDetailStaff'])->name('show_detail_of_staff');
// ================For Staff Attendance======================

// @@@@@@@@@@@@@@@@@@@@@SALARY MODULE@@@@@@@@@@@@@@@@@@@@@
Route::get('getSalary', [App\Http\Controllers\SalaryController::class, 'getSalary'])->name('getSalary');
Route::post('paidSalaryPayment', [App\Http\Controllers\SalaryController::class, 'paidSalaryPayment'])->name('paidSalaryPayment');
// @@@@@@@@@@@@@@@@@@@@@SALARY MODULE@@@@@@@@@@@@@@@@@@@@@


// @@@@@@@@@@@@@@@@@@@@@@@@@Ajax Work For School Creation@@@@@@@@@@@@@@@@@@@@
Route::post('schoolUpdateMethod', [App\Http\Controllers\SchoolController::class, 'schoolUpdateMethod'])->name('schoolUpdateMethod');
Route::get('school_update', [App\Http\Controllers\SchoolController::class, 'schoolUpdate'])->name('school_update');
Route::get('districtFind', [App\Http\Controllers\SchoolController::class, 'districtFind'])->name('districtFind');
Route::get('ucFind', [App\Http\Controllers\SchoolController::class, 'ucFind'])->name('ucFind');
Route::get('vcFind', [App\Http\Controllers\SchoolController::class, 'vcFind'])->name('vcFind');
// @@@@@@@@@@@@@@@@@@@@@@@@@Ajax Work For School@@@@@@@@@@@@@@@@@@@@
// @@@@@@@@@@@@@@@@@@@@@@@@Reports@@@@@@@@@@@@@@@@@@@@@@
Route::get('studentGet', [App\Http\Controllers\StudentController::class, 'studentGet'])->name('studentGet');
Route::get('student_report', [App\Http\Controllers\StudentAttendanceController::class, 'studentReport'])->name('student_report');

Route::get('teacherGet', [App\Http\Controllers\StaffController::class, 'teacherGet'])->name('teacherGet');
Route::get('techer_report', [App\Http\Controllers\StaffAttendanceController::class, 'teacherReport'])->name('techer_report');
Route::get('studentFind', [App\Http\Controllers\StudentAttendanceController::class, 'studentFind'])->name('studentFind');

// @@@@@@@@@@@@@@@@@@@@@@@@Reports@@@@@@@@@@@@@@@@@@@@@@
Route::get('/routes', function () {
    $routeCollection = Route::getRoutes();

    echo "<table style='width:100%'>";
    echo "<tr>";
    echo "<td width='10%'><h4>HTTP Method</h4></td>";
    echo "<td width='10%'><h4>Route</h4></td>";
    echo "<td width='10%'><h4>Name</h4></td>";
    echo "<td width='70%'><h4>Corresponding Action</h4></td>";
    echo "</tr>";
    foreach ($routeCollection as $value) {
        echo "<tr>";
        echo "<td>" . $value->methods()[0] . "</td>";
        echo "<td>" . $value->uri() . "</td>";
        echo "<td>" . $value->getName() . "</td>";
        echo "<td>" . $value->getActionName() . "</td>";
        echo "</tr>";
    }
    echo "</table>";
});