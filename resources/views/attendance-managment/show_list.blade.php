@extends('layouts.main')
@section('content')
<!-- Modal -->
     <div class="modal fade bs-example-modal-lg ShowAttendance" id="ShowAttendance" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Attendance Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form  method="post"  id="contact_us"  action="#">
                  @csrf
                <div class="form-row">
                   <div class="form-group col-md-4">
                      <label for="fees">Attendance Date</label>
                      <input type="date" class="form-control" id="att_date" name="att_date" />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="received_amount">Class</label>
                      <input type="text" class="form-control" id="class_name"  name="class_section_session_id" readonly="" />
                      <input type="hidden" id="class_section_session_id"  name="class_section_session_id" />
                    </div>
                    <div class="form-group col-md-6">
                      <label for="student_name">Student</label>
                      <input type="text" class="form-control" name="student_id" id="student_name" placeholder="Name" readonly="">
                    </div>
                  </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <input type="hidden" id="attendance" name="attendance">
                      <label for="student_name">Attendance</label><br>
                      Present
                      <input type="checkbox"  class="common" value="0"  id="present" onclick="clickHandleCheckBox(this)">&nbsp;&nbsp;&nbsp;Absent
                      <input type="checkbox"   class="common" value="2"  id="absent" onclick="clickHandleCheckBox(this)">&nbsp;&nbsp;
                      Leave
                      <input type="checkbox"   class="common"  value="1" id="leave" onclick="clickHandleCheckBox(this)">
                    </div>
                </div> 
                  <input type="hidden" name="att_id" id="att_id" value="att_id" />
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary font-weight-bold" id="send_form" type="submit" form="fee-collection">Save</button>

            </div>
            </form>
        </div>
        </div>
    </div>
    <!-- end row -->
<!-- modal  Start-->

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
  <div class="alert alert-success d-none" align="center" id="msg">
    <!-- @if(Session::has('message')) -->
        <strong></strong>
    <!-- @endif -->
</div>
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
								<span class="card-label font-weight-bolder text-dark">Show All Attendances </span>
								<!-- <span class="text-muted mt-1 font-weight-bold font-size-sm">Manage over 1600 Fee Tarrif</span> -->
							</h3>
							<div class="card-toolbar">
								<div class="dropdown dropdown-inline" data-toggle="tooltip" title="">
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
            <!-- <div class="col-4 p-5 pt-1">
              <label class="form-control-label">Date: <span class="text-danger">*</span></label>
                      <input class="form-control att_date" type="date" value="<?php echo date('Y-m-d'); ?>" name="att_date" required >
            </div> -->
            <div class="col-4 p-5 pt-1">
                <label class="form-control-label">Section: <span class="text-danger">*</span></label>
              <select  name="section_id" id="section_id" class="form-control section_id">
                <option selected>Choose Section</option>
                   @foreach($sections as $record)
                <option value="{{$record->id }}">{{ $record->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="row">
                 <div class="col-4 p-5 pt-1 pl-9">
                      <button class="btn btn-primary search" type="button"  name="search" required >Search</button>
                  </div>
                 </div>
          </div>
          <hr>
<table id="example" class="table table-striped table-bordered" >
  <thead>
    <tr>
      <th >S.NO</th>
      <th scope="col">Name</th>
      <th scope="col">Class</th>
      <th scope="col">Attendance Date</th>
      <th scope="col">Attendance Status</th>
      <th scope="col">Action</th>
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
    $(document).on('click', '.search', function () {
             var att_date=$('.att_date').val();
             // var section_id=$('.section_id').val();
             var class_id=$('.class_id').val();
             var section_id=$('.section_id').val();
              console.log(class_id);
  $.ajax({
         type:'get',
         url: 'sectionListShow',
         data:{'att_date':att_date,'class_id':class_id,'section_id':section_id},
        success:function(data){
                // debugger;
              console.log(data);
                 var html="";
             $.each(data, function(l1, row1)
             {
              counter++;  
             html+=`<tr>
             <td ><input type="hidden" value="`+counter+`" name="raw_row[]">`+counter+`</td>
             <td ><input type="hidden" name="student_id[]" value="`+row1.student.id+`" />`+row1.student.name+`</td>
              <td ><input type="hidden" name="student_id[]" value="`+row1.class.id+`" />`+row1.class.name+`</td>
             <td ><input type="hidden" name="att_date[]" value="`+row1.att_date+`"  >`+row1.att_date+`</td>`;
             if(row1.attendance ==0){
           html+=`<td><span class="badge bg-success font-size-12"> Present</span> </td>`;
            }
            if( row1.attendance ==1){
               html+=`<td><span class="badge bg-info font-size-12"> Leave</span> </td>`;
            }
            if(row1.attendance ==2){
               html+=`<td><span class="badge bg-danger font-size-12"> Absent</span> </td>`;
            }
             html+=`<td><a href="#" class="text-success" data-bs-toggle="modal" onclick="getPayment('${encodeURIComponent(JSON.stringify(row1))}')"><i class="fa fa-edit text-primary mr-5">Attendance</i></a></td></tr>`;
          }); 
            $('#append_herew').empty();
           $('#append_herew').append(html);
        },
         error:function(){
        }
   });
  });   
    
function clickHandleCheckBox(e) {
  // console.log(e).sibling();
 var sibling= $(e).siblings();
 var checked= $(e).val();
  console.log(sibling);
  // var tr=$(e).parent();//get parent of click 
 var p=(sibling).parent();
  // alert(p);
  // console.log(tr);
  p.find('.common').prop('checked',false);//find all inside row or parent
  $(e).prop("checked", true);//checked who click 

  $('#attendance').val(checked);

}
// ===========================show model ==============
function getPayment(obj){
            var obj = JSON.parse(decodeURIComponent(obj))
            console.log(obj);
          // get fetch record from obj
            var student_name = obj.student.name;
            var class_name = obj.class.name;
            var attendance = obj.attendance;
            var att_date = obj.att_date;
            var att_id = obj.id;
      // putting val in field
            $('#att_id').val(att_id);
            $('#student_name').val(student_name);
            $('#class_name').val(class_name);
            // $('#attendance').val(attendance);
            $('#att_date').val(att_date);
               $('#leave').prop('checked',false);
               $('#absent').prop('checked',false);
               $('#present').prop('checked',false);
            if(obj.attendance==0){//this is for check or un check in model
               // $('#present').val(attendance);
               $('#present').prop('checked',true);
            }
            if(obj.attendance==2){
               // $('#absent').val(attendance);
               $('#absent').prop('checked',true);
            }
            if(obj.attendance==1){
               // $('#leave').val(attendance);
               $('#leave').prop('checked',true);
            }
            $('#ShowAttendance').modal('show');
       }

       // for updating
       
       $(document).ready(function() {
        $("#send_form").on('click',function(){
    // var formData = new FormData($(this)[0]);
    var formData = new FormData(document.getElementById("contact_us"));
    console.log(formData);
      $.ajax({
            method: 'post',
            processData: false,
            contentType: false,
            cache: false,
            data: formData,
            dataType:'json',
            enctype: 'multipart/form-data',
             url: 'submitAttendance',
         success: function(data) {
          console.log(data);
           $('#ShowAttendance').modal('hide');
          $('#msg').removeClass('d-none').text(data.message).fadeIn('slow');
     //$('#msg').html("data insert successfully").fadeIn('slow') //also show a success message 
           $('#msg').delay(3000).fadeOut('slow')
            // console.log(data);
         }
      });
    });
});
</script>
@endpush



