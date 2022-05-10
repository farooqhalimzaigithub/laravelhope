@extends('layouts.main')
@section('content')
<div class="d-flex flex-column-fluid">
	<!--begin::Container-->
	<div class="container">
		<div class="row">
			<div class="col-lg-12 bg-white">
				<!--begin::Card-->
				<!-- <div class="card card-custom gutter-b example example-compact" style="border : 1px solid yellow;"> -->
					<div class="card-header">
						<h3 class="card-title">Student Registration Form </h3>
						<small class="text-danger">The * fields must be required</small>
						<div class="card-toolbar">
							<div class="example-tools  justify-content-center">
			 					<span class="example-toggle" data-toggle="tooltip" title="View code"></span>
								<span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
							</div>
						</div>
					</div>
					<form class="form  mt-2 "  method="post" action="{{route('students.store')}}"  enctype="multipart/form-data" >
						@csrf
		 				<h4 class="mb-8 font-weight-bold text-dark">Registration Info</h4>
						<div class="row">
							<div class="col-lg-9" style="float: left; " >

								<div class="form-row">
									<div class="form-group col-lg-4">
										<label for="inputCity"> Name <span class="text-danger">*</span></label>
										<input type="text" name="name" class="form-control" id="inputCity" required="">
									</div>
									<div class="form-group col-lg-4">
										<label for="student_cnic"> B-Form</label>
										<input type="text" name="student_cnic" class="form-control" id="student_cnic">
									</div>
									<div class="form-group col-lg-4">
										<label for="dob">Date Of Birth <span class="text-danger">*</span></label>
										<input type="date" name="dob" value="<?php echo date('Y-m-d');?>" class="form-control" id="dob" required="">
									</div>
								</div>
							</div>
							<div class="col-lg-3" style="float: right; height: 20px;"  >
								<div class="col-xl-3 ">
									<!--begin::Input-->
									<div class="form-group" >

										<label >
											<p><img id="output" width="100" height="100" style="border: 1px solid black; margin-left: 30px; margin-top: 30px;" /></p>
											<p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
											<p><label for="file" style="cursor: pointer; margin-left: 50px;">Browse..</label></p>
										</label>
									</div>
									<!--end::Input-->
								</div>
							</div> 
						</div> 
						<div class="row">
							<div class="form-group col-lg-3">
								<label for="inputCity">Father Name <span class="text-danger">*</span></label>
								<input type="text" name="father_name" class="form-control" id="inputCity">
							</div>
							<div class="form-group col-lg-3">
								<label for="father_cnic">Father CNIC#</label>
								<input type="text" name="father_cnic_no" class="form-control" id="father_cnic">
							</div>
							<div class="form-group col-lg-3">
								<label for="inputState">Father Occupation</label>
								<input class="form-control "  name="father_occupation"  placeholder="Father Occupation" />	
							</div>
						</div>
						<hr>
						<h4 class="mb-8 font-weight-bold text-dark">Personal Details</h4>
						<div class="row">
							<div class="form-group col-lg-3">
								<label for="inputState">Religion <span class="text-danger">*</span></label>
								<select class="form-control "  name="religion">
									<option value="muslim">Muslim</option>
									<option value="non-muslim">Non Muslim</option>
								</select>
							</div>
							<div class="form-group col-lg-3">
								<label for="inputState">Country <span class="text-danger">*</span></label>

								<select class="form-control "  name="country_id">
									<!-- <option  selected="" disabled="">Choose</option> -->
									@foreach($countries as $country)
									<option value="{{$country->id}}">{{$country->name}}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group col-lg-3">
								<label for="guardian_name">Guardian Name</label>
								<input type="text" name="guardian_name" class="form-control" id="guardian_name">
							</div>
							<div class="form-group col-lg-3">
								<label for="guardian_cnic_no">Guardian CNIC#</label>
								<input type="text" name="guardian_cnic_no" class="form-control" id="guardian_cnic_no">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-lg-3">
								<label for="ddd">Father Alive</label>

								<select class="form-control "  name="father_alive">
									<!-- <option  selected="" disabled="">Choose</option> -->
									<option value="yes">Yes</option>
									<option value="no">No</option>
								</select>
							</div>
							<div class="col-xl-3">
							<div class="form-group">
								<label>Tehsil  <span class="text-danger">*</span></label>
								<select class="form-control  tehsil_id"   name="tehsil_id" id="tehsil_id">
										<option selected disabled="">Choose</option>
										@foreach($tehsils as $tehsil)
	                                     <option value="{{$tehsil->id}}">{{$tehsil->tehsil_name}}</option>
	                                    @endforeach
									    </select>
							</div>
							
			 			</div>
						
						<div class="col-xl-3">
							<div class="form-group">
								<label>NA <span class="text-danger">*</span></label>
								<select class="form-control "   name="na_id" id="na_id">
										<option selected disabled="">Choose</option>
										@foreach($nas as $na)
	                                      <option value="{{$na->id}}">{{$na->na_name}}</option>
	                                    @endforeach
									    </select>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="form-group">
								<label>PK <span class="text-danger">*</span></label>
								<select class="form-control "   name="pk_id" id="pk_id">
										<option selected disabled="">Choose</option>
										@foreach($pks as $pk)
	                                      <option value="{{$pk->id}}">{{$pk->pk_name}}</option>
	                                    @endforeach
									    </select>
						 	</div>
						</div>
						</div>
						<div class="row">
						
						
					</div>
						<div class="row">
							<div class="col-xl-3">
							<div class="form-group">
								<label>UC   <span class="text-danger">*</span></label>
								<select class="form-control  uc_id"   name="uc_id" id="uc_id">
										<option selected disabled="">Choose</option>
										
									    </select>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="form-group">
								<label>VC   <span class="text-danger">*</span></label>
								<select class="form-control  vc_id"   name="vc_id" id="vc_id">
										<option selected disabled="">Choose</option>
										
									    </select>
							</div>
							
						</div>
						</div>

						<hr>
						<h4 class="mb-8 font-weight-bold text-dark">Academic Details</h4>
						<div class="row">
							<div class="form-group col-lg-3">
								<label for="inputCity">Date Of Admission <span class="text-danger">*</span></label>
								<input type="date" name="date_of_admission" value="<?php echo date('Y-m-d');?>" class="form-control" id="inputCity" required="">
							</div>
							<div class="form-group col-lg-3">
								<label for="inputCity">Session <span class="text-danger">*</span></label>
								<select class="form-control " required="true"  name="session_id">
									<option selected="" value="" disabled="">Choose</option>
									
									<option value="{{$session->id }}" 
										>
										{{ $session->name }}
										
									</option>
									
								</select>
							</div>

							<div class="form-group col-lg-3">
								<label for="inputCity"> Class Of Addmission <span class="text-danger">*</span></label>
								<select class="form-control " required="true"  name="current_class_id">
									<option selected="" value="" disabled="">Choose</option>
									@foreach($classes as $data)
									<option value="{{$data->id }}" 
										>
										{{ $data->name }}
										
									</option>
									@endforeach
								</select>
							</div>
							<div class="form-group col-lg-3">
								<label for="inputCity">Section <span class="text-danger">*</span></label>
								<select class="form-control " required="true"  name="section_id">
									<option selected="" value="" disabled="">Choose</option>
									@foreach($sections as $section)
									<option value="{{$section->id }}" 
										>
										{{ $section->name }}
										
									</option>
									@endforeach
								</select>
							</div>
</div>
<hr>
<h4 class="mb-8 font-weight-bold text-dark">Health Details</h4>
<div class="row">
	<div class="form-group col-lg-4">
		<label for="inputState">Gender</label>
		<select class="form-control "  name="gender">
			<!-- <option  selected="" disabled="">Choose</option> -->
			<option value="male">Male</option>
			<option value="female">Female</option>
		</select>
	</div>

	<div class="form-group col-lg-4">
		<label for="inputState">Disable</label>
		
		<select class="form-control "  name="health_id">
			<!-- <option  selected="" disabled="">Choose</option> -->
			@foreach($healths as $health)
			<option value="{{$health->name}}">{{$health->name}}</option>
			@endforeach
		</select>
	</div>
</div>
<hr>

<h4 class="mb-8 font-weight-bold text-dark">Address Details</h4>
<div class="row">
	<div class="form-group col-lg-4">
		<label for="inputCity">Village Address</label>
		<input type="text" name="village" class="form-control">
	</div>
	<div class="form-group col-lg-4">
		<label for="inputCity">Contact No</label>
		<input type="text" name="contact_no" class="form-control" id="inputCity">
	</div>
	<div class="form-group col-lg-4">
		<label for="inputCity">Addrss</label>
		<textarea type="text" name="address" placeholder=" Addrss" class="form-control" id="inputCity"></textarea>
	</div>

</div>
<hr>
<h4 class="mb-8 font-weight-bold text-dark">Previous School Details</h4>
<div class="row">
	<div class="form-group col-lg-4">
		<label for="inputCity">School Name</label>

		<input type="text" class="form-control" name="previous_school">
	</div>
	<div class="form-group col-lg-2">
		<label for="inputCity">WithDrawl No</label>
		<input type="text" name="withdrawl_no" class="form-control" id="inputCity">
	</div>
	<div class="form-group col-lg-2">
		<label for="inputCity">CLC No</label>
		<input type="text" name="clc_no" class="form-control" id="inputCity">
	</div>
	<div class="form-group col-lg-4">
		<label for="inputCity">Remarks</label>
		<textarea type="text" name="remark" placeholder="Describe Remarks" class="form-control" id="inputCity"></textarea>
	</div>
</div>
<div class="d-flex justify-content-between border-top mt-0 pt-10 pb-10">
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
@push('script')
<script type="text/javascript">
	var loadFile = function(event) {
		var image = document.getElementById('output');
		image.src = URL.createObjectURL(event.target.files[0]);
	};


	// 	 $(document).on('change', '.district_id', function (){
//             var district_id=$(this).val();
//   // alert(district_id);
//   console.log(district_id);
  
//   $.ajax({
//     type:'get',
//     url: "{{ route('districtFind')}}",
//     data:{'district_id':district_id},
//     datatype:'json',
//     success:function(data)
//     {
//       console.log(data.tehsilArr);
//        console.log(data.pkArr);
//        console.log(data.naArr);
//     // console.log(data.subjects);
//         var tr=$(this).parent().parent();
//           var op1 = "<option value=''>Choose</option>";
//           var op2 = "<option value=''>Choose</option>";
//           var op3 = "<option value=''>Choose</option>";
//           $.each(data.tehsilArr, function(k,val)
//             {
//             // console.log(val);
//              if (val.id!=null && val.id!="") {
//                 op1 +="<option value='"+val.id+"'>"+val.tehsil_name+"</option>";
//             }  
//             });  
//              $('#tehsil_id').html(" ");
//              $('#tehsil_id').append(op1);

//              $.each(data.pkArr, function(k,val)
//             {
//             // console.log(val);
//              if (val.id!=null && val.id!="") {
//                 op2 +="<option value='"+val.id+"'>"+val.pk_name+"</option>";
//             }  
//             });  
//              $('#pk_id').html(" ");
//              $('#pk_id').append(op2);

//               $.each(data.naArr, function(k,val)
//             {
//             // console.log(val);
//              if (val.id!=null && val.id!="") {
//                 op3 +="<option value='"+val.id+"'>"+val.na_name+"</option>";
//             }  
//             });  
//              $('#na_id').html(" ");
//              $('#na_id').append(op3);
//     },
//          });
// });
// ======================for uc=======================
$(document).on('change', '.tehsil_id', function (){
            var tehsil_id=$(this).val();
  // alert(tehsil_id);
  console.log(tehsil_id);
  
  $.ajax({
    type:'get',
    url: "{{ route('ucFind')}}",
    data:{'tehsil_id':tehsil_id},
    datatype:'json',
    success:function(data)
    {
      console.log(data);
        var tr=$(this).parent().parent();
          var op = "<option value=''>Choose</option>";
          $.each(data, function(k,val)
            {
             if (val.id!=null && val.id!="") {
                op +="<option value='"+val.id+"'>"+val.uc_name+"</option>";
            }  
            });  
             $('#uc_id').html(" ");
             $('#uc_id').append(op);
    },
         });
});	

// ======================for VC=======================
$(document).on('change', '.uc_id', function (){
            var uc_id=$(this).val();
  // alert(tehsil_id);
  console.log(uc_id);
  
  $.ajax({
    type:'get',
    url: "{{ route('vcFind')}}",
    data:{'uc_id':uc_id},
    datatype:'json',
    success:function(data)
    {
      console.log(data);
        var tr=$(this).parent().parent();
          var op = "<option value=''>Choose</option>";
          $.each(data, function(k,val)
            {
             if (val.id!=null && val.id!="") {
                op +="<option value='"+val.id+"'>"+val.vc_name+"</option>";
            }  
            });  
             $('#vc_id').html(" ");
             $('#vc_id').append(op);
    },
         });
});	
</script>
@endpush