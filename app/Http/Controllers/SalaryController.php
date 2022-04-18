<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use App\Models\Staff;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['salaries']=Salary::all();
       return view('salary-manage.index',$data);
    }


// use for common get salary data
    public function getSalary(Request $request)
    {
          $data = Staff::where('id',$request->id)->first();

          return response()->json($data);
    }

    // submit salary in Table
    public function paidSalaryPayment(Request $request)
    {
        $received        =$request->received_amount;
        $remaining_amount=$request->remaining_amount;
     // $old_received=StudentFee::where('id',$request->id)->first(['received_amount']);
     $new_received=$request->basic_salery - $received;
     
        $staff=Staff::where('id',$request->staff_id)->first();
        $staff->balance=$request->remaining_amount;
       
        $staff->save();

        $array = ['staff_id' =>$request->staff_id,'school_id' =>auth()->user()->school_id,'user_id' =>auth()->user()->id, 'att_date'=>$request->att_date,'remaining_amount'=>$request->remaining_amount,'amount'=>$request->amount,'received_amount'=>$request->received_amount];
             $salary_create =Salary::create($array);
             
         
          return response()->json(['data'=>$salary_create]);
      }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $data['staffs']=Staff::all();
         $data['staffs'] = Staff::where('school_id', auth()->user()->school_id)->get();
        return view('salary-manage.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function show(Salary $salary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function edit(Salary $salary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Salary $salary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salary $salary)
    {
        //
    }
}
