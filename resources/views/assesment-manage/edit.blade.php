@extends('layouts.main')
@section('content')
<div class="d-flex flex-column-fluid">
  <!--begin::Container-->
  <div class="container">
<!-- =======================alrt Error Mesage============== -->
    @if($errors->any())
      <div class="alert alert-danger alert-dismissible" id="custom_msg" role="alert">
            <button type="button" class="close" data-dismiss="alert">
                <i class="fa fa-times"></i>
            </button>
            <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
           </ul>
      </div>
<!-- =======================End of alert Error Mesage============== -->
     @endif
    <div class="row">
      <div class="col-lg-12 card-header">
        <!--begin::Card-->
        <!-- <div class="card card-custom gutter-b example example-compact" style="border : 1px solid yellow;"> -->
          <div class="">
            <h3 class="card-title">Assesment</h3>
            <!-- <div class="card-toolbar"> -->
            <!--   <div class="example-tools justify-content-center">
                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
              </div> -->
            <!-- </div> -->
          </div>
          <form class="form  mt-12"  method="post" action="{{route('assesments.update',$assesment->id)}}" >
            @csrf
            @method('PUT')

            <!-- <h4 class="mb-8 font-weight-bold text-dark">Module Details</h4> -->
            <div class="row">
               <div class="form-group col-lg-4">
                <label for="inputState">Assesment</label>
               <input type="text" name="assesment_title" value="{{$assesment->assesment_title}}"  class="form-control ">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputState">Assesment Date</label>
                <input type="date"  name="assesment_date"  class="form-control "  value="<?php echo date('Y-m-d');?>">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputState">Due Date</label>
                <input type="date" value="<?php echo date('Y-m-d');?>"  name="due_date"  class="form-control ">
              </div>
               <div class="form-group col-lg-4">
                <label for="inputState"> from</label>
                <input type="text"  name="from" value="{{$assesment->from}}"  class="form-control ">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputState"> For</label>
                <input type="text"  name="for"  value="{{$assesment->for}}" class="form-control ">
              </div>
              <div class="col-lg-4">
                <!--begin::Input-->
                <div class="form-group">
                  <label> organization</label>
                  <input type="text" class="form-control  " value="{{$assesment->organization}}" name="organization"  required="" />
                  <!-- <span class="form-text text-muted">Please enter Number</span> -->
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
                  @push('script')
                 <script >
                   $('#custom_msg').delay(3000).fadeOut('slow')//show for some time alert msg for  error
                 </script>


                  @endpush