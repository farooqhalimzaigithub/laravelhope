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
										<label for="inputCity">Registration No <span class="text-danger">*</span></label>
										<input type="text" name="registration_no" class="form-control" id="inputCity" required="">
									</div>
									<div class="form-group col-lg-4">
										<label for="inputCity">Admission No <span class="text-danger">*</span></label>
										<input type="text" name="admission_no" class="form-control" id="inputCity" required="">
									</div>
									<div class="form-group col-lg-4">
										<label for="inputCity"> Name <span class="text-danger">*</span></label>
										<input type="text" name="name" class="form-control" id="inputCity" required="">
									</div>
									
									<div class="form-group col-lg-4">
										<label for="dob">Date Of Birth <span class="text-danger">*</span></label>
										<input type="date" name="dob" value="<?php echo date('Y-m-d');?>" class="form-control" id="dob" required="">
									</div>
									<div class="form-group col-lg-8	">
										<label for="student_cnic">Student Form-B</label>
										<input type="text" name="student_cnic" class="form-control" id="student_cnic">
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
							<div class="form-group col-lg-4">
								<label for="inputState">Domicile <span class="text-danger">*</span></label>
								<select class="form-control"  name="district_id">
									<option  selected="" disabled="">Choose</option>
									@foreach($districts as $district)
									<option value="{{$district->id}}">{{$district->district_name}}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group col-lg-4">
								<label for="inputState">Religion</label>
								<select class="form-control "  name="religion">
									<option value="muslim">Muslim</option>
									<option value="non-muslim">Non Muslim</option>
								</select>
							</div>
							<div class="form-group col-lg-4">
								<label for="inputState">Nationality</label>

								<select class="form-control "  name="country_id">
									<!-- <option  selected="" disabled="">Choose</option> -->
									@foreach($countries as $country)
									<option value="{{$country->id}}">{{$country->name}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<hr>
						<h4 class="mb-8 font-weight-bold text-dark">Personal Details</h4>
						<div class="row">


						</div>
						<div class="row">
							<div class="form-group col-lg-4">
								<label for="inputCity">Father Name <span class="text-danger">*</span></label>
								<input type="text" name="father_name" class="form-control" id="inputCity">
							</div>
							<div class="form-group col-lg-4">
								<label for="father_cnic">Father CNIC#</label>
								<input type="text" name="father_cnic_no" class="form-control" id="father_cnic">
							</div>
							<div class="form-group col-lg-4">
								<label for="inputState">Father Occupation</label>

								<select class="form-control "  name="father_occupation">
									<option  selected="" disabled="">Choose</option>
									@foreach($occupations as $occupation)
									<option value="{{$occupation->id}}">{{$occupation->name}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-lg-4">
								<label for="guardian_name">Guardian Name</label>
								<input type="text" name="guardian_name" class="form-control" id="guardian_name">
							</div>
							<div class="form-group col-lg-4">
								<label for="guardian_cnic_no">Guardian CNIC#</label>
								<input type="text" name="guardian_cnic_no" class="form-control" id="guardian_cnic_no">
							</div>
							<div class="form-group col-lg-4">
								<label for="ddd">Father Alive</label>

								<select class="form-control "  name="father_alive">
									<!-- <option  selected="" disabled="">Choose</option> -->
									<option value="yes">Yes</option>
									<option value="no">No</option>
								</select>
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
		<label for="inputState">Blood Group</label>
		
		<select class="form-control "  name="blood_id">
			<!-- <option  selected="" disabled="">Choose</option> -->
			@foreach($bloods as $blood)
			<option value="{{$blood->id}}">{{$blood->name}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group col-lg-4">
		<label for="inputState">Disable</label>
		
		<select class="form-control "  name="health_id">
			<!-- <option  selected="" disabled="">Choose</option> -->
			@foreach($healths as $health)
			<option value="{{$health->id}}">{{$health->name}}</option>
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
</script>
@endpush