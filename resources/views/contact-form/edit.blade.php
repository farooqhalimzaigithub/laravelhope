@extends('layouts.main')
@section('content')
<div class="d-flex flex-column-fluid">
  <!--begin::Container-->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 card-header">
        <!--begin::Card-->
        <!-- <div class="card card-custom gutter-b example example-compact" style="border : 1px solid yellow;"> -->
          <div class="">
            <h2 class="card-title col-lg-12" style="color: white; background: #3b96eb; height: 50px; text-align: center; padding-top: 10px;">Contact Info</h2>
            <!-- <div class="card-toolbar"> -->
            <!--   <div class="example-tools justify-content-center">
                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
              </div> -->
            <!-- </div> -->
          </div>
          <form class="form  mt-12"  method="post" action="{{route('contact_forms.update',$contact->id)}}"  enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- <h4 class="mb-8 font-weight-bold text-dark">Module Details</h4> -->
            <div class="row">
               <div class="form-group col-lg-6">
                <label for="inputState">From</label>
               <input type="text" name="from" value="{{$contact->from}}"  class="form-control ">
              </div>
              <div class="form-group col-lg-6">
                <label for="inputState"> To</label>
                <input type="text"  name="to"  value="{{$contact->to}}" class="form-control ">
              </div>
              </div>
             
               <div class="row">
               <div class="form-group col-lg-12">
                <label for="inputState">Subject</label>
                <input type="text"  name="subject"  value="{{$contact->subject}}"  class="form-control ">
              </div>
              </div>
               <div class="row">
	              <div class="form-group col-lg-12">
	                <label for="inputState"> Description</label>
	                <textarea type="text" class="form-control  "  value="{{$contact->description}}" name="description"  required="" >{{$contact->description}}</textarea>
	              </div>
              </div>
              
               <div class="row">
               <div class="form-group col-lg-6">
                <label for="inputState">Contact Number</label>
                <input type="number"  name="contact"  value="{{$contact->contact}}"  class="form-control " >
              </div>
              <div class="form-group col-lg-6">
               <label>
                 
                  <label for="inputState">Attechment</label>
                                                    <input type="file"  id="image" width="100%" value="{{$contact->image}}" name="image" class="image"/> 
                                                <input type="hidden" id="hidden_image"  name="hidden_image">
                                                 <img src="{{asset('public/images/'.$contact->image)}}" width="100" height="100"  />
                                                </label>

             <!--    <input type="file"  name="image"  value="{{$contact->image}}" class="form-control " > -->
              </div>
             </div>
            
            <!-- </div> -->

            <div class="d-flex justify-content-between  mt-0 pt-10 pb-10">
            <!-- <div class="mr-2">
              <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Previous</button>
            </div> -->
            <div>
              <button type="submit" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4">Update</button>
              
            </div>
          </div>
          <!--end::Wizard Actions-->
        </form>

        <!--end::Body-->
      </div>
      <!--end::Mixed Widget 17-->
    </div>

  </div>
  <!--end::Row-->

  <!--end::Row-->
  <!--end::Dashboard-->
</div>
<!--end::Container-->

@endsection
<script >
</script>