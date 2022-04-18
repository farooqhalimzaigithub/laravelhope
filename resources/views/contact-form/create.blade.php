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
          <form class="form  mt-12"  method="post" action="{{route('contact_forms.store')}}" enctype="multipart/form-data" >
            @csrf

            <!-- <h4 class="mb-8 font-weight-bold text-dark">Module Details</h4> -->
            <div class="row">
               <div class="form-group col-lg-6">
                <label for="inputState">From</label>
               <input type="text" name="from"  class="form-control ">
              </div>
              <div class="form-group col-lg-6">
                <label for="inputState"> To</label>
                <input type="text"  name="to"  class="form-control ">
              </div>
              </div>
             
               <div class="row">
               <div class="form-group col-lg-12">
                <label for="inputState">Subject</label>
                <input type="text"  name="subject"  class="form-control ">
              </div>
              </div>
               <div class="row">
	              <div class="form-group col-lg-12">
	                <label for="inputState"> Description</label>
	                <textarea type="text" class="form-control  " name="description"  required="" ></textarea>
	              </div>
              </div>
              
               <div class="row">
               <div class="form-group col-lg-6">
                <label for="inputState">Contact Number</label>
                <input type="number"  name="contact"  class="form-control " >
              </div>
              <div class="form-group col-lg-6">
                <label for="inputState">Attechment</label>
                <input type="file"  name="image"  class="form-control " >
              </div>
             </div>
            
            <!-- </div> -->

            <div class="d-flex justify-content-between  mt-0 pt-10 pb-10">
            <!-- <div class="mr-2">
              <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Previous</button>
            </div> -->
            <div>
              <button type="submit" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4">Submit</button>
              
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