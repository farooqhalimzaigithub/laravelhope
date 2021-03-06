<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Designation;
use App\Models\ProfessionalInfo;
use App\Models\School;
use App\Models\StaffDetail;
use Illuminate\Http\Request;
use Session;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data['staffs'] = Staff::where('school_id', auth()->user()->school_id)->with('staffDetail','professionalInfo')->get();

        return view('staff-manage.index',$data);
    }  
     public function showDetailStaff(Request $request)
    {
        $data = Staff::where('id', $request->staff_id)->with('staffDetail','professionalInfo')->first();
      return response()->json($data);
    } 
     
     // =====================report=====================
    public function teacherGet(Request $request)
    {

          $data['staffs'] = Staff::where('school_id', auth()->user()->school_id)->with('staffDetail','professionalInfo')->get();
             // dd($data['staffs']);
        return view('reports.teacher-reports.teacher_report',$data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('staff-manage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         $school_data=School::where('id',auth()->user()->school_id)->first();
         // dd( $school_data);
         $district_id=$school_data->district_id;
         $tehsil_id=$school_data->tehsil_id;
         $na_id=$school_data->na_id;
         $pk_id=$school_data->pk_id;
         $uc_id=$school_data->uc_id;
         $vc_id=$school_data->vc_id;
         $staff=Staff::create([
            'district_id'=>$district_id,
            'tehsil_id'  =>$tehsil_id,
            'na_id'      =>$na_id,
            'pk_id'      =>$pk_id,
            'uc_id'      =>$uc_id,
            'vc_id'      =>$vc_id,
            'Teacher_Name'=>$request->Teacher_Name,
            'Father_Name'=>$request->Father_Name,
            'Qualification'=>$request->Qualification,
            'DOB'=>$request->DOB,
            'Degree'=>$request->Degree,
            'Subject'=>$request->Subject,
            'school_id'=> auth()->user()->school_id,
            'Experience'=>$request->Experience,
            'CNIC'=>$request->CNIC,
            'marital_status'=>$request->marital_status,
            'Bank_Name'=>$request->Bank_Name,
            'Bank_Code'=>$request->Bank_Code,
            'Account'=>$request->Account,
            'Contact'=>$request->Contact,
            'Whatsapp'=>$request->Whatsapp,
            'Disability'=>$request->Disability
          ]);
         $staff_id=$staff->id;
        $p_rows=$request->input('prof_year');
         $e_rows=$request->input('edu_year');
        if(!empty($e_rows)){
            foreach($e_rows as $key=>$row) 
        {                   
                    $edu_description = $request->edu_description[$key];
                    $edu_roll_no = $request->edu_roll_no[$key];
                    $edu_year = $request->edu_year[$key];
                    $edu_total_mark = $request->edu_total_mark[$key];
                    $edu_obtain_mark = $request->edu_obtain_mark[$key];
                    $edu_percentage = $request->edu_percentage[$key];
                    $edu_board = $request->edu_board[$key];
                    StaffDetail::create([
                    'staff_id'=>$staff_id,
                    'edu_description'=>$edu_description,
                    'edu_roll_no'=>$edu_roll_no,
                    'edu_year'=>$edu_year,
                    'edu_total_mark'=>$edu_total_mark,
                    'edu_obtain_mark'=>$edu_obtain_mark,
                    'edu_percentage'=>$edu_percentage,
                    'edu_board'=>$edu_board,
            
            
                  ]);
           }
        }
         if(!empty($p_rows)){
            foreach($p_rows as $key=>$row) 
        {

                   
                    $prof_description = $request->input('prof_description')[$key];
                    $prof_roll_no = $request->input('prof_roll_no')[$key];
                    $prof_year = $request->input('prof_year')[$key];
                    $prof_total_mark = $request->input('prof_total_mark')[$key];
                    $prof_obtain_mark = $request->input('prof_obtain_mark')[$key];
                    $prof_percentage = $request->input('prof_percentage')[$key];
                    $prof_board = $request->input('prof_board')[$key];
                    ProfessionalInfo::create([
                    'staff_id'=>$staff_id,
                    'prof_description'=>$prof_description,
                    'prof_roll_no'=>$prof_roll_no,
                    'prof_year'=>$prof_year,
                    'prof_total_mark'=>$prof_total_mark,
                    'prof_obtain_mark'=>$prof_obtain_mark,
                    'prof_percentage'=>$prof_percentage,
                    'prof_board'=>$prof_board,
            
            
                  ]);
           }

         }
        
           

      // }
       
        
        return redirect()->route('staffs.index')->with('success','Data Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        // dd($id);
         $data['staff']=Staff::find($id);
         $data['edu_info']=StaffDetail::where('staff_id',$id)->get();
         $data['prof_info']=ProfessionalInfo::where('staff_id',$id)->get();
        return view('staff-manage.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
       // dd($request->all());
        $Reg1=StaffDetail::where('staff_id',$id)->delete();
        $Reg2=ProfessionalInfo::where('staff_id',$id)->delete();
        // if($request->hasFile('image')){
        //             $file = $request->file('image');
        //             // $fileName = $file->getClientOriginalName() ;
        //             $extension = $file->getClientOriginalExtension(); 
        //             // $destinationPath = 'images/' ; // for online link will be
        //             $destinationPath = 'images/' ; //for local link will be 
        //             $datetime = date('mdYhisa', time());
        //             $complete_name=$destinationPath.$datetime.'.'.$extension;
        //             $file_name=$datetime.'.'.$extension;
        //             $file->move($destinationPath,$file_name);
        //     }else{
        //         $file_name=null;
        //     }
            $staff       =   Staff::find($id);        
            $staff->Teacher_Name  =$request->Teacher_Name;
            $staff->Father_Name   =$request->Father_Name;
            $staff->Qualification =$request->Qualification;
            $staff->DOB           =$request->DOB;
            $staff->Degree        =$request->Degree;
            $staff->marital_status=$request->marital_status;
            $staff->Subject       =$request->Subject;
            $staff->CNIC          =$request->CNIC;
            $staff->Bank_Name     =$request->Bank_Name;
            $staff->Bank_Code     =$request->Bank_Code;
            $staff->Account       =$request->Account;
            $staff->Contact       =$request->Contact;
            $staff->Whatsapp      =$request->Whatsapp;
            $staff->Disability    =$request->Disability;
            $staff->school_id     = auth()->user()->school_id;
            $staff->Experience    =$request->Experience;
            $staff->save();

            $staff_id = $staff->id;
         
         $e_rows=$request->input('edu_year');
        $p_rows=$request->input('prof_year');
         if(!empty($e_rows)){
            foreach($e_rows as $key=>$row) 
        {                   
                    $edu_description = $request->edu_description[$key];
                    $edu_roll_no = $request->edu_roll_no[$key];
                    $edu_year = $request->edu_year[$key];
                    $edu_total_mark = $request->edu_total_mark[$key];
                    $edu_obtain_mark = $request->edu_obtain_mark[$key];
                    $edu_percentage = $request->edu_percentage[$key];
                    $edu_board = $request->edu_board[$key];
                    StaffDetail::create([
                    'staff_id'=>$staff_id,
                    'edu_description'=>$edu_description,
                    'edu_roll_no'=>$edu_roll_no,
                    'edu_year'=>$edu_year,
                    'edu_total_mark'=>$edu_total_mark,
                    'edu_obtain_mark'=>$edu_obtain_mark,
                    'edu_percentage'=>$edu_percentage,
                    'edu_board'=>$edu_board,
            
            
                  ]);
           }
        }
         if(!empty($p_rows)){
            foreach($p_rows as $key=>$row) 
        {

                   
                    $prof_description = $request->input('prof_description')[$key];
                    $prof_roll_no = $request->input('prof_roll_no')[$key];
                    $prof_year = $request->input('prof_year')[$key];
                    $prof_total_mark = $request->input('prof_total_mark')[$key];
                    $prof_obtain_mark = $request->input('prof_obtain_mark')[$key];
                    $prof_percentage = $request->input('prof_percentage')[$key];
                    $prof_board = $request->input('prof_board')[$key];
                    ProfessionalInfo::create([
                    'staff_id'=>$staff_id,
                    'prof_description'=>$prof_description,
                    'prof_roll_no'=>$prof_roll_no,
                    'prof_year'=>$prof_year,
                    'prof_total_mark'=>$prof_total_mark,
                    'prof_obtain_mark'=>$prof_obtain_mark,
                    'prof_percentage'=>$prof_percentage,
                    'prof_board'=>$prof_board,
            
            
                  ]);
           }

         }

      
       
        
        return redirect()->route('staffs.index')->with('success','Data Updateed Successfully!!!');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd('okk');
         Staff::find($id)->delete();
        ProfessionalInfo::where('staff_id',$id)->delete();
        StaffDetail::where('staff_id',$id)->delete();
           return redirect()->route('staffs.index')->with('error','Data Delete Successfully');
    }
}
