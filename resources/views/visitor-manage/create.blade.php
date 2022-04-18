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
            <h3 class="card-title">Visitors Info</h3>
            <!-- <div class="card-toolbar"> -->
            <!--   <div class="example-tools justify-content-center">
                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
              </div> -->
            <!-- </div> -->
          </div>
          <form class="form  mt-12"  method="post" action="{{route('visitors.store')}}" >
            @csrf

            <!-- <h4 class="mb-8 font-weight-bold text-dark">Module Details</h4> -->
            <div class="row">
               <div class="form-group col-lg-4">
                <label for="inputState">Visitor Name</label>
               <input type="text" name="name"  class="form-control ">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputState"> Contact Number</label>
                <input type="number"  name="contact_number"  class="form-control ">
              </div>
             
              
               <div class="form-group col-lg-4">
                <label for="inputState"> Designation</label>
                <input type="text"  name="designation"  class="form-control ">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputState"> Organization</label>
                <input type="text"  name="organization"  class="form-control ">
              </div>
               <div class="form-group col-lg-4">
                <label for="inputState">Visit Date</label>
                <input type="date"  name="visit_date"  class="form-control " value="<?php echo date('Y-m-d');?>">
              </div>
              
              <div class="col-lg-4">
                <!--begin::Input-->
                <div class="form-group">
                  <label> Purpose Of Visit</label>
                  <textarea type="text" class="form-control  " name="purpose_of_visit"  required="" ></textarea>
                </div>
                <!--end::Input-->
              </div>
              <div class="col-lg-4">
                <!--begin::Input-->
                <div class="form-group">
                  <label> Remarks</label>
                  <textarea type="text" class="form-control  " name="remark"  required="" ></textarea>
                </div>
                <!--end::Input-->
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