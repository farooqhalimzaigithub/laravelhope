@extends('layouts.main')
@section('content')
<!-- for datatables -->
<!-- <link href="{{asset('assets/data-table-libs/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" /> -->

<!-- <link href="{{asset('assets/data-table-libs/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" /> -->
<!--begin::Content-->
<!-- modal  Start-->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="container">
    		<div class="row col-lg-12"  >
    			<div class="card-header">
    				<h3>This is Header</h3>
    			</div>
    			<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">Month Of Fee</th>
      <th scope="col">Amount </th>
      <th scope="col">Received Amount</th>
      <th scope="col">Balance </th>
    </tr>
  </thead>
  <tbody id="append_here_modal">
    
  </tbody>
</table>
    		</div>
    		<div class="row col-lg-12" style="border: 1px solid black; height: 200px;">
    			<div class="">
    				<h3>Other Details of fee</h3>
    			</div>
    		</div>
    		
    	</div>
   
    </div>
  </div>
</div>
<!-- modal  Start-->

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

	 <!-- <div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
		<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			begin::Info
			
			
			<div class="d-flex align-items-center">
				
			</div>
		
		</div>
	</div> -->
	<!--end::Subheader-->
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<!--begin::Teachers-->
			<div class="d-flex flex-row">
				<!--begin::Aside-->

				<!--end::Aside-->
				<!--begin::Content-->
				<div class="flex-row-fluid ml-lg-8">
					<!--begin::Card-->
					<div class="card card-custom">
						<!--begin::Header-->
						<div class="card-header flex-wrap border-0 pt-6 mg-0 pb-0">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label font-weight-bolder text-dark">Student Attendance </span>
								<!-- <span class="text-muted mt-1 font-weight-bold font-size-sm">Manage over 1600 Fee Tarrif</span> -->
							</h3>
							<div class="card-toolbar">
								<div class="dropdown dropdown-inline" data-toggle="tooltip" title="">
									<!--begin::Trigger Modal-->
									<!-- <a class="nav-link py-2 px-4 btn btn-primary"  href="#"><i class="ki ki-plus text-light"></i>  Add New</a> -->

									<!--end::Trigger Modal-->
									<!--begin::Modal Content-->

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
                  <div class="form-group">
                       <label class="form-control-label">Date: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="date" value="<?php echo date('Y-m-d'); ?>" name="att_date" required >
                  </div>
                 </div>
          <div class="row">
             <div class="col-4 p-5 pt-1">
                <label class="form-control-label">Session: <span class="text-danger">*</span></label>
              <select  name="session_id" id="session_id" class="form-control session_id">
                <option selected>Choose Session</option>
               
                   <option value="{{$session->id}}">
                                                {{ $session->name}}
                                            </option>
                
              </select>
            </div>
            <div class="col-4 p-5 pt-1">
                <label class="form-control-label">Class: <span class="text-danger">*</span></label>
              <select id="inputState" name="class_id" class="form-control class_id">
                <option selected>Choose Class</option>
                @foreach($classes as $record)
                <option value="{{$record->id }}">{{ $record->name }}</option>
                @endforeach
              </select>
            </div>

             <div class="col-4 p-5 pt-1">
                <label class="form-control-label">Section: <span class="text-danger">*</span></label>
              <select  name="section_id" id="section_id" class="form-control section_id">
                <option selected>Choose Section</option>
                   @foreach($sections as $record)
                <option value="{{$record->id }}">{{ $record->name }}</option>
                @endforeach
              </select>
            </div>
           
          </div>
<table id="example" class="table table-striped table-bordered" >
  <thead>
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">Name</th>
      <th scope="col">F/Name</th>
      <th scope="col">CNIC</th>
      <!-- <th scope="col">Received Amount</th>
      <th scope="col">Discount</th>
      <th scope="col">Balance</th>
      <th scope="col">Total</th> -->
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody id="append_herew">
   
  </tbody>
</table>
<div class="card-footer">
        <button type="submit" id="submit" class="btn btn-primary">Create Attendance</button>
        <!-- <button type="submit" class="btn btn-danger float-right">Cancel</button> -->
    </div>
</form>
</div>

															<!--end::Body-->
														</div>
														<!--end::Card-->
													</div>
													<!--end::Content-->
												</div>
												<!--end::Teachers-->
											</div>
											<!--end::Container-->
										</div>
										<!--end::Entry-->
									</div>
									<!--end::Content-->
									@endsection
									@push('script')
<script >
   // =============select section==================
   var counter=0;
    $(document).on('change', '.section_id', function () {
            // second method
             var section_id=$(this).val();
             var class_id=$('.class_id').val();
              console.log(class_id);
              console.log(section_id);
  $.ajax({
         type:'get',
         url: 'sectionList',
         data:{'class_id':class_id,'section_id':section_id},
        success:function(data){
                // debugger;
              console.log(data);
                 var html="";
             $.each(data, function(l1, row1)
             {
                 // debugger;
              // $.each(row1.students, function(l1, rowf)
              // {
              counter++;   
                console.log(row1); 
             html+=`<tr>
             <td ><input type="hidden" value="`+counter+`" name="raw_row[]">`+counter+`</td>
             <td ><input type="hidden" name="student_id[]" value="`+row1.id+`" />`+row1.name+`</td>
             <td ><input type="hidden" name="father_name[]" value="`+row1.father_name+`"  >`+row1.father_name+`</td><td><input type="hidden" name= "dob[]" value="`+row1.dob+`" id="dob">`+row1.dob+`</td>
            <td >Present
            <input type="checkbox" class="check_id addClass" onclick="clickHandleCheckBox(this)"  name="attendance[]"  value="Present" checked>
            Absent
            <input type="checkbox" class="check_id" onclick="clickHandleCheckBox(this)" name="attendance[]" value="Absent" >
            Leave
            <input type="checkbox" class="check_id" onclick="clickHandleCheckBox(this)" name="attendance[]" value="Leave" > 
             </td>
             </td>
             
              </tr>`;
          // }); 
          }); 
            $('#append_herew').empty();
           $('#append_herew').append(html);
        },
         error:function(){
        }
   });
  });   
    
function clickHandleCheckBox(e) {
  var tr=$(e).parent();//get parent of click 
  // console.log(tr);
  tr.find('.check_id').prop('checked',false);//find all inside row or parent
  $(e).prop("checked", true);//checked who click 

}

</script>
@endpush



