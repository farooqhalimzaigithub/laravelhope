@extends('layouts.main')
@section('content')

<style type="text/css">
  @media print{
    .printBlock{
        display: none !important;
    }
    .common{
        display: none !important;
    }
}
</style>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
  <div class="alert alert-success d-none" align="center" id="msg">
</div>
  <!--begin::Entry-->
  <div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
      <!--begin::Teachers-->
      <div class="d-flex flex-row">
        <!--begin::Content-->
        <div class="flex-row-fluid ml-lg-8">
          <!--begin::Card-->
          <div class="card card-custom">
            <!--begin::Header-->
            <div class="card-header flex-wrap border-0 pt-6 mg-0 pb-0">
              <h3 class="card-title align-items-start flex-column">
                <span class="card-label font-weight-bolder text-dark">Show All Attendances </span>
                <!-- <span class="text-muted mt-1 font-weight-bold font-size-sm">Manage over 1600 Fee Tarrif</span> -->
              </h3>
              <div class="card-toolbar">
                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="">
                  <!--end::Modal Content-->
                </div>
              </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body">
              <form action="{{route('student_attendances.store')}}" method="POST" >
                @csrf
          <div class="row">
            <div class="col-4 p-6 pt-1 common">
              <label class="form-control-label">Staff <span class="text-danger">*</span></label>
                     <select class="form-control staff_id" id="staff_id" name="staff_id" required="true">
                      <option selected="" disabled="" value=""> Choose</option>
                      @foreach($staffs as $staff)
                       <option value="{{$staff->id}}">{{$staff->Teacher_Name}}</option>
                       @endforeach
                     </select>
            </div>
            <div class="col-4 p-6 pt-1 common">
              <label class="form-control-label">From Date: <span class="text-danger">*</span></label>
                      <input class="form-control from_date" id="from_date" type="date" value="<?php echo date('Y-m-d'); ?>" name="from_date" required >
            </div>
            <div class="col-4 p-6 pt-1 common">
              <label class="form-control-label">To Date: <span class="text-danger">*</span></label>
                      <input class="form-control to_date" id="to_date" type="date" value="<?php echo date('Y-m-d'); ?>" name="to_date" required >
            </div>
             </div>
                 <div class="row">
                 <div class="col-4 p-6 pt-8 pl-9 common">
                      <button class="btn btn-primary search" type="button"  name="search" required >Search</button>
                  </div>
                 </div>
         
          <hr>
<table id="" class="table table-striped table-bordered" >
  <thead>
    <tr>
      <th >S.NO</th>
      <th scope="col">Name</th>
      <th scope="col">Attendance Date</th>
      <th scope="col">Attendance Status</th> 
    </tr>
  </thead>
  <tbody id="append_herew">
   
  </tbody>
</table>
</form>
</div>

          <!--end::Body-->
        </div>
        <!--end::Card-->

      </div>
    </div>
        
      <!--end::Content-->
    <!--end::Teachers-->
  </div>
  <!--end::Container-->
  </div>
<!--end::Entry-->
</div>
  <div class="pull-left btn-group btn-group-lg hidden-print printBlock">
<a href="javascript:window.print()" class="btn btn-primary"><i class="fa fa-print"></i> Print</a>
</div>

<!--end::Content-->
@endsection
@push('script')
<script >

   // =============select section==================
   var counter=0;
    $(document).on('click', '.search', function () {
             var from_date = $('#from_date').val();
             var to_date = $('#to_date').val();
             var staff_id = $('#staff_id').val();
  $.ajax({
         type:'get',
         url: 'techer_report',
         data:{'staff_id':staff_id,'to_date':to_date,'from_date':from_date},
        success:function(data){
                // debugger;
              console.log(data);
                 var html="";
             $.each(data, function(l1, row1)
             {
              counter++; 
               // if(row1.att_date!=null && row1.att_date!="")
               //   { 
             html+=`<tr>
             <td ><input type="hidden" value="`+counter+`" name="raw_row[]">`+counter+`</td>
             <td ><input type="hidden" name="student_id[]" value="`+row1.staff.id+`" />`+row1.staff.Teacher_Name+`</td>
             
             <td ><input type="hidden" name="att_date[]" value="`+row1.att_date+`"  >`+row1.att_date+`</td>
              <td ><input type="hidden" name="attendance[]" value="`+row1.attendance+`"  >`+row1.attendance+`</td></tr>`;
             // } 
             });
            $('#append_herew').empty();
           $('#append_herew').append(html);
        },
         error:function(){
        }
   });
  });   
    
</script>
@endpush



