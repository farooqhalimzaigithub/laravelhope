<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['contacts']=ContactForm::all();
        return view('contact-form.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('contact-form.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('image')){
            $file = $request->file('image');
            // $fileName = $file->getClientOriginalName() ;
            $extension = $file->getClientOriginalExtension(); 
            // $destinationPath = 'images/' ; // for online link will be
            $destinationPath = 'public/images/' ; //for local link will be 
            $datetime = date('mdYhisa', time());
            $complete_name=$destinationPath.$datetime.'.'.$extension;
            $file_name=$datetime.'.'.$extension;
            $file->move($destinationPath,$file_name);
            }else{
                $file_name=null;
            }
            ContactForm::create([
               'from' =>$request->from,
               'to'   =>$request->to,
               'subject' =>$request->subject,
               'description' =>$request->description,
               'contact' =>$request->contact,
               'image' =>$file_name
             ]);
        return redirect()->route('contact_forms.index')->with('success','Data Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function show(ContactForm $contactForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['contact']=ContactForm::find($id);
        return view('contact-form.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $contactForm =ContactForm::find($id);


        if($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = $image->getClientOriginalName();
        $image->move(public_path('public/images/'), $filename);
        $contactForm->image = $request->file('image')->getClientOriginalName();
              }
        $contactForm->from=$request->from;
        $contactForm->to=$request->to;
        $contactForm->subject=$request->subject;
        $contactForm->description=$request->description;
        $contactForm->contact=$request->contact;
        // $contactForm->image=$request->image;
        $contactForm->save();
       return redirect()->route('contact_forms.index')->with('info','Data Update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       ContactForm::find($id)->delete();
           return redirect()->route('contact_forms.index')->with('error','Data Delete Successfully');
    }
}
