<?php

namespace App\Http\Controllers;

use App\Models\VecModel;
use Illuminate\Http\Request;

class VecModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['vecs']=VecModel::all();

        return  view('pre_configuration.vec-manage.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return  view('pre_configuration.vec-manage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $createvec=VecModel::create($request->all());
                if($request->hasFile('att_sheet_image')){
                    $file = $request->file('att_sheet_image');
                    // $fileName = $file->getClientOriginalName() ;
                    $extension = $file->getClientOriginalExtension();  
                    $destinationPath = 'public/images/' ; //for local link will be 
                    $datetime = date('mdYhisa', time());
                    $complete_name=$destinationPath.$datetime.'.'.$extension;
                    $file_name=$datetime.'.'.$extension;
                    $file->move($destinationPath,$file_name);
               }else{
                    $file_name=null;
                    }

                    if($request->hasFile('group_image')){
                    $file1 = $request->file('group_image');
                    // $fileName = $file->getClientOriginalName() ;
                    $extension1 = $file1->getClientOriginalExtension();  
                    $destinationPath1 = 'public/images/' ; //for local link will be 
                    $datetime1 = date('mdYhisa', time());
                    $complete_name1=$destinationPath1.$datetime1.'.'.$extension1;
                    $file_name1=$datetime1.'.'.$extension1;
                    $file->move($destinationPath1,$file_name1);
               }else{
                    $file_name1=null;
                    }
                     $staff=VecModel::create([
                    'meeting_place'=>$request->meeting_place,
                    'meeting'=>$request->meeting,
                    'meeting_date'=>$request->meeting_date,
                    'proceeding'=>$request->proceeding,
                    'present_member'=>$request->present_member,
                    'absent_member'=>$request->absent_member,
                    'att_sheet_image'=>$file_name,
                    'group_image'=>$file_name1
                  ]);
       return redirect()->route('vecs.index')->with('success','Data Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VecModel  $vecModel
     * @return \Illuminate\Http\Response
     */
    public function show(VecModel $vecModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VecModel  $vecModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['vec'] =VecModel::find($id);
        return view('pre_configuration.vec-manage.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VecModel  $vecModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vec =VecModel::find($id);
      $vec->meeting=$request->meeting;
      $vec->meeting_place=$request->meeting_place;
      $vec->meeting_date=$request->meeting_date;
      $vec->proceeding=$request->proceeding;
      $vec->absent_member=$request->absent_member;
      $vec->present_member=$request->present_member;
      $vec->group_image=$request->group_image;
      $vec->att_sheet_image=$request->att_sheet_image;
      $vec->agenda=$request->agenda;
      $vec->save();
       return redirect()->route('vecs.index')->with('info','Data Update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VecModel  $vecModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         VecModel::find($id)->delete();
           return redirect()->route('vecs.index')->with('error','Data Delete Successfully');
    }
}
