<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;
use App\Models\ClassSectionSession;
use App\Models\EnrollmentSummaryMeta;
use App\Models\Session;
use Auth;
use DB;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $data['enrollments']= Enrollment::all();
        return view('enrollment-manage.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enrollment = DB::table('enrollments')->where('school_id', Auth::user()->school_id)->get();
        $enrollment_summary_meta = DB::table('enrollment_summary_metas')->where('school_id', Auth::user()->school_id)->first();
        $classes = DB::table('free_classes')->get();
        return view('enrollment-manage.create',compact('enrollment','enrollment_summary_meta','classes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
                $e_rows = $request->input('class_id');
                $grand_total = $request->grand_total;
                $total_girls = $request->total_girls;
                $total_boys = $request->total_boys;
        if(!empty($e_rows)){
            foreach($e_rows as $key=>$row) 
            {              
                $class_id= $request->class_id[$key];
                $boy = $request->boy[$key];
                $girl = $request->girl[$key];
                $total = $request->total[$key];
                $id = $request->id[$key];
                
                if($total == 0 )
                continue;     
                $enrollment = Enrollment::updateOrCreate(
                ['id' => $id],
                [
                    'school_id'   =>Auth::user()->school_id,
                    'class_id'    => $class_id,
                    'boy'         =>$boy,
                    'girl'        =>$girl,
                    'total'       => $total
                ]);
            }
        }

    $roleUser = EnrollmentSummaryMeta::updateOrCreate(
        ['id' => $request->afghan_id],
        [
            'school_id'=>Auth::user()->school_id,
            'afghan_boys' =>$request->input(['afghan_boys']),
            'afghan_girls' =>$request->input(['afghan_girls']),
            'afghan_total' =>$request->input(['afghan_total']),
            'disable_girls' =>$request->input(['disable_girls']),
            'disable_boys' =>$request->input(['disable_boys']),
            'disable_total' =>$request->input(['disable_total']),
            'grand_total' => $grand_total,
            'total_boys'  => $total_boys,
            'total_girls' => $total_girls
        ]

);
        
       
        
          return back()->with('success','Action  Perform Successfully!!!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function show(Enrollment $enrollment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function edit(Enrollment $enrollment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
            echo $id;
            exit;
            $enrollment = Enrollment::where('school_id', $id)->delete();
            $afghan = Afghan::where('school_id', $id)->delete();
             Afghan::create([
            'school_id'     =>Auth::user()->id,
            'afghan_boys'   =>$request->afghan_boys,
            'afghan_girls'  =>$request->afghan_girls,
            'afghan_total'  =>$request->afghan_total,
            'disable_girls' =>$request->disable_girls,
            'disable_boys'  =>$request->disable_boys,
            'disable_boys'  =>$request->disable_boys,
            'disable_total' =>$request->disable_total
                    ]);

                $e_rows=$request->input('class_id');
                $grand_total = $request->grand_total;
                $total_girls = $request->total_girls;
                $total_boys = $request->total_boys;
                if(!empty($e_rows)){
                foreach($e_rows as $key=>$row) 
                {                   
                    $class_id =$request->class_id[$key];
                    $boy      = $request->boy[$key];
                    $girl     = $request->girl[$key];
                    $total    = $request->total[$key];
                    $enrollment=Enrollment::create([
                        'school_id'   =>Auth::user()->id,
                        'class_id'    => $class_id,
                        'boy'         =>$boy,
                        'girl'        =>$girl,
                        'total'       =>$total,
                        'grand_total' =>$grand_total,
                        'total_boys'  =>$total_boys,
                        'total_girls' =>$total_girls
                    ]);
           }
        }
         return back()->with('success','Action  Perform Successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enrollment $enrollment)
    {
        //
    }

     protected function enrollmentValidation(Request $request)
    {
        return $this->validate($request,[
            'class_section_session_id' => 'required',
            // 'session_id' => 'required'
        ]);
    }
}
