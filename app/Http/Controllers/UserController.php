<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\District;
use Illuminate\Support\Facades\Hash;
use Session;
use Auth;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if(Auth::user()->role_id === 3){
            $data['users']= User::where('role_id', 2)->get();
        }elseif(auth()->user()->role_id == 2){
            $data['users']= User::where('district_id', auth()->user()->district_id)->get();
        }else{
            $data['users']= User::All();
        }
        return view('user-managment.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Auth::user();
        $data['roles']= Role::all();
        $data['districts'] = District::all();
        return view('user-managment.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request1 = $request->all();
        $request1['password'] = Hash::make($request->input('password'));
         $request1['school_id'] = auth()->user()->school_id;
         // dd($request1);
        $user = User::create($request1);
        return redirect()->route('users.index')->with('success','Data successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $data['user']=User::find($id);
       $data['roles']=Role::all();
       $data['districts'] = District::all();
       return view('user-managment.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateUser= User::where('id',$id)->update([
                    'name' => $request->name,
                    'email'=>$request->email,
                    'role_id'=> $request->role_id
                ]);
        if($updateUser)
         {

        return redirect()->route('users.index')->with('info','Data Updated successfully!');
        }
        else
        {
        return back()->with('error','User Updated successfully!'); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return back()->with('error','User deleted successfully');
    }
}
