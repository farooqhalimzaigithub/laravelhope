<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use DB;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['schools']=School::where('district_id', auth()->user()->district_id)->get();

        return view('pre_configuration.school-manage.index',$data);
    }



    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function schoolUpdate()
    {
         $data['sLevels']=DB::table('s_levels')->get();
        $data['transports']=DB::table('transports')->get();
        $data['districts']=DB::table('districts')->get();
        $data['nas']=DB::table('nas')->get();
        $data['pks']=DB::table('pks')->get();
        $data['tehsils']=DB::table('tehsils')->get();
        $data['ucs']=DB::table('ucs')->get();
        $data['vcs']=DB::table('vcs')->get();
        $data['school']=Auth::user()->school()->first();
        // dd($data['school']);
         return view('.school.create',$data);
    } 
        public function create()
    {
        // dd('okk');
        $data['tehsils']=DB::table('tehsils')->where('district_id',Auth::user()->district_id)->get();
        $data['nas']=DB::table('nas')->where('district_id',Auth::user()->district_id)->get();
        $data['pks']=DB::table('pks')->where('district_id',Auth::user()->district_id)->get();
        $data['sLevels']=DB::table('s_levels')->get();
        $data['transports']=DB::table('transports')->get();
     return view('pre_configuration.school-manage.create',$data);
    }

    
    //  public function districtFind(Request $request)
    // {
    //     $tehsilArr=DB::table('tehsils')->where('district_id',$request->district_id)->get()->toArray();
    //     $pkArr=DB::table('pks')->where('district_id',$request->district_id)->get()->toArray();
    //     $naArr=DB::table('nas')->where('district_id',$request->district_id)->get()->toArray();
            
    //           return response()->json(['tehsilArr' => $tehsilArr, 'pkArr' => $pkArr, 'naArr' => $naArr]);
           
    // }
     public function ucFind(Request $request)
    {
        $data=DB::table('ucs')->where('tehsil_id',$request->tehsil_id)->get()->toArray();    
              return response()->json($data);
           
    }
     public function vcFind(Request $request)
    {
        $data=DB::table('vcs')->where('uc_id',$request->uc_id)->get()->toArray();    
              return response()->json($data);
           
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function schoolUpdateMethod(Request $request)
    {

        $data['districts']=DB::table('districts')->get();
        $district_id = $request->input('district_id');
        $tehsil_id = $request->input('tehsil_id');
        $na_id = $request->input('na_id');
        $pk_id = $request->input('pk_id');
        $uc_id = $request->input('uc_id');
        $vc_id = $request->input('vc_id');
        $village = $request->input('village');
        $mohallah = $request->input('mohallah');
        $name = $request->input('name');
        $lat = $request->input('lat');
        $lng = $request->input('lng');
        $land_mark = $request->input('land_mark');
        $school_type = $request->input('school_type');
        $school_code = $request->input('school_code');
        $status = $request->input('status');
        $building_ownership = $request->input('building_ownership');
        $gender = $request->input('gender');
        $building_structure = $request->input('building_structure');
        // =================extra add================
        $level_id = $request->input('level_id');
        $transport_id = $request->input('transport_id');
        $area = $request->input('area');
        $school_id = $request->input('school_id');
        $user_id = Auth::user()->id;

        $school=School::updateOrCreate(
                    ['id' => $school_id],
                    [
                        // 'user_id'   =>$user_id,
                        'district_id'    => $district_id,
                        'tehsil_id'         =>$tehsil_id,
                        'na_id'        =>$na_id,
                        'pk_id'       =>$pk_id,
                        'uc_id' =>$uc_id,
                        'vc_id'  =>$vc_id,
                        'village' =>$village,
                        'mohallah' =>$mohallah,
                        'name' =>$name,
                        'lat' =>$lat,
                        'lng' =>$lng,
                        'land_mark' =>$land_mark,
                        'school_type' =>$school_type,
                        'school_code' =>$school_code,
                        'status' =>$status,
                        'building_ownership' =>$building_ownership,
                        'gender' =>$gender,
                        'building_structure' =>$building_structure,
                        'level_id' =>$level_id,
                        'transport_id' =>$transport_id,
                        'area' =>$area
                    ]);
        return back()->with( ['data' => $data] )->with('success','School  Updated Successfully!');

    }


    public function store(Request $request)
    {
        $inputs = request()->validate([
            'responsible_person' => 'required',
            'email' => 'required',
            'contact_number' => 'required',
            'password' => 'required| min:3| max:7 |confirmed',
            'password_confirmation' => 'required| min:3',
            'district_id' => 'required'
        ]);
        $inputs['password'] =$request->input('password');//remover encrypt password
        // $inputs['password'] = Hash::make($request->input('password'));
         $inputs['name']    = $request->input('responsible_person');
         $inputs['role_id'] = 1;
        // dd($inputs);
        $user = User::create($inputs);
        $school = new School();
        $school->district_id = Auth::user()->district_id;
        $school->tehsil_id = $request->input('tehsil_id');
        $school->na_id = $request->input('na_id');
        $school->pk_id = $request->input('pk_id');
        $school->uc_id = $request->input('uc_id');
        $school->vc_id = $request->input('vc_id');
        $school->village = $request->input('village');
        $school->mohallah = $request->input('mohallah');
        $school->name = $request->input('name');
        $school->lat = $request->input('lat');
        $school->lng = $request->input('lng');
        $school->land_mark = $request->input('land_mark');
        $school->school_type = $request->input('school_type');
        $school->school_code = $request->input('school_code');
        $school->status = $request->input('status');
        $school->building_ownership = $request->input('building_ownership');
        $school->gender = $request->input('gender');
        $school->building_structure = $request->input('building_structure');
        // =================extra add================
        $school->level_id = $request->input('level_id');
        $school->transport_id = $request->input('transport_id');
        $school->area = $request->input('area');
        // $school->district_id = $request->input('district_id');
        // $school->user_id = Auth::user()->id;
        $school->save();
        
        $school_id = $school->id;
        $user->school_id = $school_id;
        $user->update();
        
        return redirect()->route('schools.index')->with('success','Data Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['school']=School::find($id);
        $data['user']=User::where('id',$id)->first();
          // dd($data['user']);

        return view('pre_configuration.school-manage.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['school']=School::find($id);
        $data['user']=User::where('id',$id)->first();
          // dd($data['user']);

        return view('pre_configuration.school-manage.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $school =School::find($id);
        $school->name = $request->input('name');
        $school->lat = $request->input('lat');
        $school->lng = $request->input('lng');
        $school->address = $request->input('address');
        $school->land_mark = $request->input('land_mark');
        $school->school_type = $request->input('school_type');
        $school->status = $request->input('status');
        $school->building_ownership = $request->input('building_ownership');
        $school->gender = $request->input('gender');
        $school->building_structure = $request->input('building_structure');
        $school->district_id = $request->input('district_id');
        $school->user_id = Auth::user()->id;
        $school->save();
      $school_id=$school->id;
      // $school->save();
         $password = Hash::make($request->input('password'));
        $name= $request->input('responsible_person');
        $email = $request->input('email');
        $contact_number= $request->input('contact_number');

        User::where('email', $email)->update([ 'name'=>$name,'password'=>$password,'email'=>$email,'contact_number'=>$contact_number
            ]);
       return redirect()->route('schools.index')->with('info','Data Update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        School::find($id)->delete();
           return redirect()->route('schools.index')->with('error','Data Delete Successfully');
    }
}
