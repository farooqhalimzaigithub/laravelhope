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
<div class="d-flex flex-column-fluid">
	<!--begin::Container-->
	<div class="container">
		<div class="row">
			<div class="col-lg-12 bg-white">
				<!--begin::Card-->
				<!-- <div class="card card-custom gutter-b example example-compact" style="border : 1px solid yellow;"> -->
					<div class="card-header">
						<h3 class="card-title">Student Reports </h3>
						<!-- <small class="text-danger">The * fields must be required</small> -->
						<div class="card-toolbar">
							<div class="example-tools  justify-content-center">
								<span class="example-toggle" data-toggle="tooltip" title="View code"></span>
								<span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
							</div>
						</div>
					</div>
					<form class="form  mt-2 "  method="post" action=""  enctype="multipart/form-data" >
						@csrf
						<!-- <h4 class="mb-8 font-weight-bold text-dark">Registration Info</h4> -->
						<div class="row">
            <div class="col-4 p-6 pt-1 common">
              <label class="form-control-label">Class <span class="text-danger">*</span></label>
                     <select class="form-control class_id" id="class_id" name="class_id" required="true">
                      <option selected="" disabled="" value=""> Choose</option>
                      @foreach($classes as $class)
                       <option value="{{$class->id}}">{{$class->name}}</option>
                       @endforeach
                     </select>
            </div>
            <div class="col-4 p-6 pt-1 common">
              <label class="form-control-label">Student <span class="text-danger">*</span></label>
                     <select class="form-control student_id" id="student_id" name="student_id" required="true">
                      <option selected="" disabled="" value=""> Choose</option>
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
					<!--end::Wizard Actions-->
					 <hr>
<table id="" class="table table-striped table-bordered" >
  <thead>
    <tr>
      <th >S.NO</th>
      <th scope="col">Name</th>
      <th scope="col">Class</th>
      <th scope="col">Attendance Date</th>
      <th scope="col">Attendance Status</th> 
    </tr>
  </thead>
  <tbody id="append_herew">
   
  </tbody>
</table>
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
 <div class="pull-left btn-group btn-group-lg hidden-print printBlock">
<a href="javascript:window.print()" class="btn btn-primary"><i class="fa fa-print"></i> Print</a>
</div>
<!--end::Container-->


@endsection

@push('script')
<script>
	    // ======================for VC=======================
$(document).on('change', '.class_id', function (){
            var class_id=$(this).val();
  // alert(tehsil_id);
  console.log(class_id);
  
  $.ajax({
    type:'get',
    url: "{{ route('studentFind')}}",
    data:{'class_id':class_id},
    datatype:'json',
    success:function(data)
    {
      console.log(data);
        // var tr=$(this).parent().parent();
          var op = "<option value=''>Choose</option>";
          $.each(data, function(k,val)
            {
             if (val.student.id!=null && val.student.id!="") {
                op +="<option value='"+val.student.id+"'>"+val.student.first_name+"</option>";
            }  
            });  
             $('#student_id').html(" ");
             $('#student_id').append(op);
    },
         });
});

 // =============select section==================
   var counter=0;
    $(document).on('click', '.search', function () {
             var from_date = $('#from_date').val();
             var to_date = $('#to_date').val();
             var student_id = $('#student_id').val();
  $.ajax({
         type:'get',
         url: 'student_report',
         data:{'student_id':student_id,'to_date':to_date,'from_date':from_date},
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
             <td ><input type="hidden" name="student_id[]" value="`+row1.student.id+`" />`+row1.student.first_name+`</td>
             <td ><input type="hidden" name="student_id[]" value="`+row1.class.id+`" />`+row1.class.name+`</td>
             
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