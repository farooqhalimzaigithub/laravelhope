<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;
use DB;
use Auth;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['facility']=DB::table('facilities')->where('school_id',auth()->user()->school_id)->first();
        // dd($data['facility']);
        return view('facility-manage.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data['facility']=Facility::updateOrCreate(
        ['id' => $request->facility_id],
        ['school_id'=>auth()->user()->school_id,'no_of_room' =>$request->input(['no_of_room']),'date_of_establishment' =>$request->input(['date_of_establishment']),'physical_status' =>$request->input(['physical_status']),'room_other_use' =>$request->input(['room_other_use']),'boundary_wall' =>$request->input(['boundary_wall']),'extra_space' =>$request->input(['extra_space']),'ventilation' =>$request->input(['ventilation']),'electricity' =>$request->input(['electricity']),'solar' =>$request->input(['solar']),'light' =>$request->input(['light']),'toilet' =>$request->input(['toilet']),'fan' =>$request->input(['fan']),'water_supply' =>$request->input(['water_supply']),'veranda' =>$request->input(['veranda']),'play_ground' =>$request->input(['play_ground']),'teacher_chair' =>$request->input(['teacher_chair']),'teacher_table' =>$request->input(['teacher_table']),'cupboard' =>$request->input(['cupboard']),'black_board' =>$request->input(['black_board']),'student_chair' =>$request->input(['student_chair']),'water_cooler' =>$request->input(['water_cooler']),'mat' =>$request->input(['mat']),'school_bell' =>$request->input(['school_bell']),'tlm_chart' =>$request->input(['tlm_chart'])]);
          // view('facility-manage.create',$data);
       return back()->with('success','Action Done successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function show(Facility $facility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function edit(Facility $facility)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $facility=Facility::find($id);
        $facility->update();
         view('facility-manage.create',$facility)->with('success','Action Done successfully!!');;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facility $facility)
    {
        //
    }
}
