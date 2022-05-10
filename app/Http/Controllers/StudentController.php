<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Campus;
use App\Models\Health;
use App\Models\Occupation;
use App\Models\Section;
use App\Models\Country;
use App\Models\Province;
use App\Models\Level;
use App\Models\Religion;
use App\Models\Session;
use App\Models\BloodGroup;
use App\Models\FeeStructure;
use App\Models\StudentFee;
use App\Models\District;
use App\Models\FreeClass;
use Illuminate\Http\Request;
use DB;
use Auth;
use DateTime;
use DatePeriod;
use DateInterval;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['students'] = Student::where('school_id', auth()->user()->school_id)->get();
        return view('student-managment.index',$data);
    }
public function showDetailStudent(Request $request)//fetch student Details
    {
      $data = Student::where('id', $request->student_id)->first();
      return response()->json($data);

    }


    ###############attendance report##################
    public function studentGet(Request $request)
    {
    
        $data['session']= Session::where('status',1)->first();
        $data['classes']=FreeClass::all();
        $data['sections']=Section::all();
    return view('reports.student-reports.create_report',$data);

    }

    public function allStudentReport(Request $request)
    {

      $from=$request->input('from');
      $to=$request->input('to');
      $data=StudentAttendance::whereIn('att_date',[$from,$to])->get();
       // return view('reports.student_reports.show_report',$data);

       return response()->json($data);

    }
    ###############attendance report##################
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $data['session']= Session::where('status',1)->first();
        $data['classes']=FreeClass::all();
        $data['sections']=Section::all();
        $data['healths']=Health::all();
        $data['districts']=DB::table('districts')->get();
        $data['occupations']=Occupation::all();
        $data['countries']=Country::all();
        $data['religions']=Religion::all();
        $data['bloods']=BloodGroup::all();

        $data['tehsils']=DB::table('tehsils')->where('district_id',Auth::user()->district_id)->get();
        $data['nas']=DB::table('nas')->where('district_id',Auth::user()->district_id)->get();
        $data['pks']=DB::table('pks')->where('district_id',Auth::user()->district_id)->get();
         return view('student-managment.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                //this is get those uc ,vc ,dist id which is related to the school
               // $uc_id=Auth::user()->school->uc_id;
               // $vc_id=Auth::user()->school->vc_id;
         $district_id=Auth::user()->school->district_id;
           // $tehsil_id=Auth::user()->school->tehsil_id;
           //     $na_id=Auth::user()->school->na_id;
           //     $pk_id=Auth::user()->school->pk_id;
               // dd($district_id);
        if($request->hasFile('image')){
                    $file = $request->file('image');
                    // $fileName = $file->getClientOriginalName() ;
                    $extension = $file->getClientOriginalExtension(); 
                    // $destinationPath = 'images/' ; // for online link will be
                    $destinationPath = 'public/images/' ; //for local link will be 
                    $datetime = date('mdYhisa', time());
                    $complete_name=$destinationPath.$datetime.'.'.$extension;
                    $file_name=$datetime.'.'.$extension;
                    $file->move($destinationPath,$file_name);
            }else{
                $file_name=null;
            }
                $student =new Student();
                $student->name=$request->name;
                $student->form_b=$request->student_cnic;
                $student->dob=$request->dob;
                $student->father_name=$request->father_name;
                $student->father_cnic_no=$request->father_cnic_no;
                $student->image=$file_name;
                $student->father_occupation=$request->father_occupation;
                $student->religion=$request->religion;//i.e islaam
                $student->address=$request->address;
                $student->contact_no=$request->contact_no;
                $student->gender=$request->gender;
                $student->health_id=$request->health_id;
                $student->guardian_name=$request->guardian_name;
                $student->guardian_cnic_no =$request->guardian_cnic_no;
                $student->father_alive=$request->father_alive;
                $student->date_of_admission=$request->date_of_admission;
                $student->current_class_id=$request->current_class_id;
                $student->session_id=$request->session_id;
                $student->section_id=$request->section_id;
                $student->country_id=$request->country_id;
                // $student->last_name=$request->last_name;
                $student->school_id = auth()->user()->school_id;
                $student->district_id =$district_id;
                $student->uc_id =$request->uc_id;
                $student->vc_id =$request->vc_id;
                $student->na_id =$request->na_id;
                $student->pk_id =$request->pk_id;
                $student->tehsil_id =$request->tehsil_id;
                $student->previous_school=$request->previous_school;
                $student->village=$request->village;
                $student->withdrawl_no=$request->withdrawl_no;
                $student->clc_no=$request->clc_no;
                $student->remark=$request->remark;
                $student->save();
                $student_id=$student->id;
     $fee_structure = FeeStructure::where('class_id',$request->current_class_id)->first();//this is error accur ewhen not add fee in fee structure note other wise they will pass null 
     // dd($fee_structure);
     $fee_amount=$fee_structure->amount;
     // dd($fee_amount);
     // $css_id=$request->current_class_id;
//  // after this add fee info for the futur
   $css= Session::where('status',1)->first();
   // dd($css);
   // $session_id = DB::table('sessions')->where('status',1)->pluck('id');
    $session_id=$css->id;
    // dd($session_id);
//   // Get year and month of initial date (From)
 $yearIni = date("Y", strtotime($css->start_date));
$begin1   = $css->start_date;
$end1     = $css->end_date;
$begin    = new DateTime($begin1);
$interval = new DateInterval('P1M');
$end      = new DateTime($end1);
$period   = new DatePeriod($begin, $interval, $end);
 // dd($period);
 foreach($period as $d){
  $start_date = $d->format("Y-m-d");
StudentFee::create([
    'session_id'=>$session_id,
    'school_id'=>auth()->user()->school_id,
    'class_id'=>$request->current_class_id,
    'month'=>$start_date,
    'student_id'=>$student_id,
    'amount'=>$fee_amount,
    'received_amount'=>0
]);
}
 return redirect()->route('students.index')->with('success','Data Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $data['session']= Session::where('status',1)->first();
          $data['classSectionSession'] = FreeClass::all();
          $data['sections'] = Section::all();
          $data['healths']=Health::all();
          $data['occupations']=Occupation::all();
          $data['levels']=Level::all();
          $data['countries']=Country::all();
          $data['provinces']=Province::all();
          $data['religions']=Religion::all();
          $data['bloods']=BloodGroup::all();
          $data['districts']=DB::table('districts')->get();
          $data['student']=Student::find($id);
          // dd($data['student']);
       return view('student-managment.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
      //this is get those uc ,vc ,dist id which is related to the school
               $uc_id=Auth::user()->school->uc_id;
               $vc_id=Auth::user()->school->vc_id;
         $district_id=Auth::user()->school->district_id;
           $tehsil_id=Auth::user()->school->tehsil_id;
               $na_id=Auth::user()->school->na_id;
               $pk_id=Auth::user()->school->pk_id;

      if($request->hasFile('image')){
                    $file = $request->file('image');
                    // $fileName = $file->getClientOriginalName() ;
                    $extension = $file->getClientOriginalExtension(); 
                    // $destinationPath = 'images/' ; // for online link will be
                    $destinationPath = 'public/images/' ; //for local link will be 
                    $datetime = date('mdYhisa', time());
                    $complete_name=$destinationPath.$datetime.'.'.$extension;
                    $file_name=$datetime.'.'.$extension;
                    $file->move($destinationPath,$file_name);
            }else{
                $file_name=null;
            }
       $student=Student::find($id);
       $student->name=$request->name;
       $student->form_b=$request->student_cnic;
       $student->dob=$request->dob;
       $student->father_name=$request->father_name;
       $student->father_cnic_no=$request->father_cnic_no;
       $student->registration_no=$request->registration_no;
       $student->admission_no=$request->admission_no;
       $student->image=$file_name;
       $student->father_occupation=$request->father_occupation;
       $student->religion=$request->religion;//i.e islaam
       $student->address=$request->address;
        $student->contact_no=$request->contact_no;
        $student->gender=$request->gender;
        $student->health_id=$request->health_id;
        $student->guardian_name=$request->guardian_name;
        $student->guardian_cnic_no =$request->guardian_cnic_no;
        $student->father_alive=$request->father_alive;
        $student->date_of_admission=$request->date_of_admission;
       $student->current_class_id=$request->current_class_id;
       $student->session_id=$request->session_id;
       $student->section_id=$request->section_id;
       $student->domicile_id=$request->district_id;
       $student->country_id=$request->country_id;
       // $student->last_name=$request->last_name;
       $student->school_id = auth()->user()->school_id;
       $student->district_id =$district_id;
        $student->uc_id =$uc_id;
        $student->vc_id =$vc_id;
        $student->na_id =$na_id;
        $student->pk_id =$pk_id;
        $student->tehsil_id =$tehsil_id;
        $student->blood_id=$request->blood_id;
        $student->previous_school=$request->previous_school;
        $student->village=$request->village;
        $student->withdrawl_no=$request->withdrawl_no;
        $student->clc_no=$request->clc_no;
        $student->remark=$request->remark;
       $student->save();
         return redirect()->route('students.index')->with('success','Data Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::find($id)->delete();
           return redirect()->route('students.index')->with('error','Data Delete Successfully');
    }
}
