<?php

namespace App\Http\Controllers;

use App\Models\Assesment;
use Illuminate\Http\Request;

class AssesmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['assesments']=Assesment::all();
        return view('assesment-manage.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('assesment-manage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Assesment::create($request->all());
         return redirect()->route('assesments.index')->with('success','Data Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assesment  $assesment
     * @return \Illuminate\Http\Response
     */
    public function show(Assesment $assesment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assesment  $assesment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $data['assesment']=Assesment::find($id);
       return view('assesment-manage.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Assesment  $assesment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assesment $assesment)
    {

             $this->validateAssesment($request);
            if($assesment->update(request()->all()))
             return redirect()->route('assesments.index')->withSuccess('Data updated!');
        return back()->withError('Data not updated!');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assesment  $assesment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assesment $assesment)
    {
        if(!$assesment->exists())
            return back()->withError('Record not found!');

        if($assesment->delete())
         return redirect()->route('assesments.index')->withSuccess('Record deleted!');
            // return back()->withSuccess('Record deleted!');
        return back()->withError('Record not deleted!');
    }

     protected function validateAssesment(Request $request)//this is used for validation
    {
        return $this->validate($request,[
            'assesment_title' => 'required'
        ]);
    }
}
