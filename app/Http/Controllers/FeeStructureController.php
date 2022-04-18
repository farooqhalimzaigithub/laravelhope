<?php

namespace App\Http\Controllers;

use App\Models\FeeStructure;
use Illuminate\Http\Request;
use App\Models\FeeTarrif;
use App\Models\Level;
use App\Models\Fee;
use App\Models\FeeCategory;
use App\Models\FeeCollect;
use App\Models\FeeHistory;
use App\Models\Student;
use App\Models\StudentClass;
use App\Models\StudentFee;
use App\Models\FeeInstallment;
use App\Models\Session;
use App\Models\Section;
use App\Models\FreeClass;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Carbon\Carbon;
use Response;

class FeeStructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // $data['fee_structures']=FeeStructure::with('css.class')->get();
         $data['fee_structures']=FeeStructure::all();
       
        // dd($data['fee_structures']);
       return view('fee_structure.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['fee_types']=FeeCategory::all();
        $data['sections']=Section::all();
        $data['classes']=FreeClass::all();
        $data['session']= Session::where('status',1)->first();
     return view('fee_structure.create',$data);
    }

    /**
     * Store a newly created resource in storage. 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $checker = FeeStructure::where('class_id', $request->class_id)->where('fee_type_id', $request->fee_type_id)->get();
       // dd($checker);
       if ($checker->isEmpty()) {
        $school_id=auth()->user()->school_id;
       $fee_structure_data=$request->only(['session_id','class_id','fee_type_id','amount']);
       $fee_structure_data['school_id'] = $school_id;//putting schol id in data
            $record=FeeStructure::create($fee_structure_data);
            return redirect()->route('fee_structures.index')->withSuccess('Data Saved Successfully!');
        }else{
            return back()->withError('Data All ready  Exist!');
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FeeStructure  $feeStructure
     * @return \Illuminate\Http\Response
     */
    public function show(FeeStructure $feeStructure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FeeStructure  $feeStructure
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $data['fee_category']=FeeCategory::all();
         $data['classes']=FreeClass::all();
         $data['sessions']=Session::all();
         // dd($data['classes']);
         $data['fee_structure']=FeeStructure::find($id);
       return view('fee_structure.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FeeStructure  $feeStructure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $record=FeeStructure::find($id);
        $record=FeeStructure::where('id',$id)->delete();
         $checker = FeeStructure::where('class_section_session_id', $request->class_section_session_id)->where('fee_type_id', $request->fee_type_id)->get();
        // dd($checker);
       if ($checker->isEmpty()) {
            $record=FeeStructure::create($request->all());
            return redirect()->route('fee_structures.index')->withSuccess('Data Saved Successfully!');
        }else{
            return back()->withError('Data All ready  Exist!');
            
        }
    }


    // =========================payment work=====================
public function paymentFee(Request $request)
    {
     
        $data['classes'] = FreeClass::all();
     
        return view('fee_payment.index',$data);

    }
   public function feeDetailGet(Request $request)
    {

        // $data = StudentClass::with(['student' => function($q) {
        //                 $q->where('school_id',auth()->user()->school_id);
        //             }])->where('class_section_session_id',$request->class_section_session_id)->get();
        $data =Student::where('current_class_id',$request->class_id)->get();
        // dd($data);
     return response()->json($data);
    }
    public function getStudentRecord(Request $request)
    {
        $now = Carbon::now();
        $monthCurrent = $now->startOfMonth();
        $stdRecords=StudentFee::where('student_id',$request->student_id)->whereMonth('month', '<=', $monthCurrent)->get();
        // dd($stdRecords);
        return response()->json($stdRecords);


    }
    public function getfeePayment(Request $request,$id)
    {
         // dd($id);
       $now = Carbon::now();
        $monthCurrent = $now->startOfMonth();
        $data['stdRecords']=StudentFee::with('student','class','session')->where('student_id',$id)->whereMonth('month', '<=', $monthCurrent)->get();
           // dd($data['stdRecords']);
        return view('fee_structure.student_fee_detail',$data);

    }

    public function paidPayment(Request $request)
   {
     $student_fee=StudentFee::where('id',$request->id)->first();
     $old_received=$student_fee->received_amount;
     // $old_received=StudentFee::where('id',$request->id)->first(['received_amount']);
     $new_received=$old_received + $request->paid;
     $student_fee->received_amount = $new_received;
     if($student_fee->amount==$new_received)
        {
          $student_fee->clear=1;
        }
          $student_fee->save();
           $student_fee_id=$student_fee->id;

             $array = ['student_fee_id' =>$student_fee_id,'school_id' =>auth()->user()->school_id, 'session_id'=>$request->session_id,'class_id'=>$request->class_id,'month'=>$request->month,'student_id'=>$request->student_id,'amount'=>$request->amount,'received_amount'=>$request->received_amount];
             $create_fee =FeeInstallment::create($array);
         
          return response()->json(['data'=>$student_fee]);

          

   }
    
    // =========================payment work=====================
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FeeStructure  $feeStructure
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeeStructure $feeStructure)
    {
        //
    }
}
