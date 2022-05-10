<?php

namespace App\Http\Controllers;

use App\Models\NearestInstitution;
use Illuminate\Http\Request;
use Auth;

class NearestInstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['nearestInstitutions']=NearestInstitution::where('school_id',auth()->user()->school_id)->get();
        // dd($data['nearestInstitutions']);
        return view('nearest-institution.index',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        // dd('okk');
        $school_id=auth()->user()->school_id;//get current user school id
        $inputs=$request->all();
        $inputs['school_id']=$school_id;//school id asign to in array
        $nearestInstitution =NearestInstitution::create($inputs); //at the last create all input

        return redirect()->route('nearest_institutions.index')->with('success','Data Added Successfully!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NearestInstitution  $nearestInstitution
     * @return \Illuminate\Http\Response
     */
    public function show(NearestInstitution $nearestInstitution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NearestInstitution  $nearestInstitution
     * @return \Illuminate\Http\Response
     */
    public function edit(NearestInstitution $nearestInstitution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NearestInstitution  $nearestInstitution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $nearest_institution_id=$request->nearest_institution_id;
        $nearestInstitution=NearestInstitution::find($nearest_institution_id);
        $nearestInstitution->name=$request->name;
        $nearestInstitution->level=$request->level;
        $nearestInstitution->distance=$request->distance;
        $nearestInstitution->emis_code=$request->emis_code;
        $nearestInstitution->save();
       return redirect()->route('nearest_institutions.index')->with('info','Data Update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NearestInstitution  $nearestInstitution
     * @return \Illuminate\Http\Response
     */
    public function destroy(NearestInstitution $nearestInstitution)
    {
        //
    }
}
