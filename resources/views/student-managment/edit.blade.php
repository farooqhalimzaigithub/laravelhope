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
						<h3 class="card-title"> Student Registration Form </h3>
						<small class="text-danger">The * fields must be required</small>
						<div class="card-toolbar">
							<div class="example-tools  justify-content-center">
								<span class="example-toggle" data-toggle="tooltip" title="View code"></span>
								<span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
							</div>
						</div>
					</div>
					<form class="form  mt-2 "  method="post" action="{{route('students.update',$student->id)}}"  enctype="multipart/form-data" >
						@csrf
						@method('PUT')
						<h4 class="mb-8 font-weight-bold text-dark">Registration Info</h4>
						<div class="row">
							<div class="col-lg-9" style="float: left; " >

								<div class="form-row">
							 		<div class="form-group col-lg-4">
										<label for="inputCity">Registration No <span class="text-danger">*</span></label>
										<input type="text" name="registration_no" value="{{$student->registration_no}}" class="form-control" id="inputCity" required="">
									</div>
									<div class="form-group col-lg-4">
										<label for="inputCity">Admission No <span class="text-danger">*</span></label>
										<input type="text" name="admission_no" value="{{$student->admission_no}}" class="form-control" id="inputCity" required="">
									</div>
									<div class="form-group col-lg-4">
		<label for="inputCity"> Name <span class="text-danger">*</span></label>
		<input type="text" name="name" value="{{$student->name}}" class="form-control" id="inputCity" required="">
	</div>
	<!-- <div class="form-group col-lg-4">
		<label for="inputCity">Last Name <span class="text-danger">*</span></label>
		<input type="text" name="last_name" class="form-control" value="{{$student->last_name}}" id="inputCity" required="">
	</div> -->
			<div class="form-group col-lg-4">
		<label for="dob">Date Of Birth <span class="text-danger">*</span></label>
		<input type="date" name="dob" value="{{$student->dob}}" class="form-control" id="dob" required="">
	</div>
	<div class="form-group col-lg-8">
		<label for="cnic_no">Form-B</label>
		<input type="text" name="form_b" value="{{$student->form_b}}" class="form-control" id="form_b">
	</div>						

</div>
</div>
<div class="col-lg-3" style="float: right; height: 20px;"  >
	<div class="col-xl-3 ">
		<!--begin::Input-->
		<div class="form-group" >
			
			<label >
				<p><img id="output" width="100" height="100" style="border: 1px solid black; margin-left: 30px; margin-top: 30px;" /></p>
			<p><input type="file"  accept="image/*" value="{{$student->image}}" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
			<p><label for="file" style="cursor: pointer; margin-left: 50px;">Browse..</label></p>
			</label>
		</div>
		<!--end::Input-->
	</div>
</div>
</div> 
<div class="row">
	<div class="form-group col-lg-4">
		<label for="inputState">Domicile</label>
		<select class="form-control"  name="district_id">
			<option  selected="" disabled="">Choose</option>
			@foreach($districts as $district)
			@if($district->id==$student->domicile_id)
			<option value="{{$district->id}}" selected="">{{$district->district_name}}</option>
			@else
			<option value="{{$district->id}}">{{$district->district_name}}</option>
			@endif
			@endforeach
		</select>
	</div>
	<div class="form-group col-lg-4">
		<label for="inputState">Religion</label>
		<select class="form-control "  name="religion">
			@if($student->religion=='muslim')
			<option value="muslim" selected="">Muslim</option>
			<option value="non-muslim">Non Muslim</option>
			@else
			<option value="muslim" >Muslim</option>
			<option value="non-muslim" selected="">Non Muslim</option>
			@endif
		</select>
	</div>
	<div class="form-group col-lg-4">
		<label for="inputState">Nationality</label>
		
		<select class="form-control "  name="country_id">
			<option  selected="" disabled="">Choose</option>
			@foreach($countries as $country)
			@if($country->id==$student->country_id)
			<option value="{{$country->id}}" selected="">{{$country->name}}</option>
			@else
			<option value="{{$country->id}}" >{{$country->name}}</option>
			@endif
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
		<label for="inputCity">Father</label>
		<input type="text" name="father_name" value="{{$student->father_name}}" class="form-control" id="inputCity">
	</div>
	<div class="form-group col-lg-4">
		<label for="father_cnic">Father CNIC #</label>
		<input type="text" name="father_cnic_no" value="{{$student->father_cnic_no}}" class="form-control" id="father_cnic">
	</div>
	<div class="form-group col-lg-4">
		<label for="inputState">Father Occupation</label>
		
		<select class="form-control "  name="father_occupation">
			<option  selected="" disabled="">Choose</option>
			@foreach($occupations as $occupation)
			@if($occupation->id==$student->father_occupation)
			<option value="{{$occupation->id}}" selected="">{{$occupation->name}}</option>
			@else
			<option value="{{$occupation->id}}">{{$occupation->name}}</option>
			@endif
			@endforeach
		</select>
	</div>
</div>
<div class="row">
	<div class="form-group col-lg-4">
		<label for="guardian_name">Guardian Name</label>
		<input type="text" name="guardian_name" value="{{$student->guardian_name}}" class="form-control" id="guardian_name">
	</div>
	<div class="form-group col-lg-4">
		<label for="guardian_cnic_no">Guardian CNIC #</label>
		<input type="text" name="guardian_cnic_no" value="{{$student->guardian_cnic_no}}" class="form-control" id="guardian_cnic_no">
	</div>
	<div class="form-group col-lg-4">
		<label for="ddd">Father Alive</label>
		<select class="form-control "  name="father_alive">
			<option  selected="" disabled="">Choose</option>

		@if($occupation->father_alive=='yes')
			<option value="yes" selected="">Yes</option>
			<option value="no">No</option>
			@else
			<option value="yes" >Yes</option>
			<option value="no" selected="">No</option>
			@endif
		</select>
	</div>
</div>

<hr>
<h4 class="mb-8 font-weight-bold text-dark">Academic Details</h4>
<div class="row">
	<div class="form-group col-lg-3">
		<label for="inputCity">Admission Date <span class="text-danger">*</span></label>
		<input type="text" name="date_of_admission" value="{{$student->date_of_admission}}"  class="form-control" id="inputCity" required="">
	</div>
	<div class="form-group col-lg-3">
	 <label for="inputCity">Session <span class="text-danger">*</span></label>
	 <select class="form-control " required="true"  name="session_id">
	  <option selected="" value="" disabled="">Choose</option>
	   <option value="{{$session->id }}" selected="">{{ $session->name }}</option>
     
	</select>
	</div>
	<div class="form-group col-lg-3">
		<label for="inputCity"> Class <span class="text-danger">*</span></label>
		<select class="form-control " required="true"  name="current_class_id">
		<option  selected="" disabled="">Choose</option>
			 @foreach($classSectionSession as $record)
			 @if($record->id==$student->current_class_id)

                <option  value="{{$record->id }}"  selected="">{{ $record->name }}</option>
                     @else
                     <option  value="{{$record->id }}" 
                     >{{ $record->name }}</option>
                     @endif
             @endforeach
		</select>
	</div>
	<div class="form-group col-lg-3">
		<label for="dob">Section <span class="text-danger">*</span></label>
		<select class="form-control " required="true"  name="section_id">
			<option  selected="" disabled="">Choose</option>
			@foreach($sections as $section)
			 @if($section->id==$student->section_id)
			<option value="{{$section->id}}" selected="">{{$section->name}}</option>
			@else
			<option value="{{$section->id}}">{{$section->name}}</option>
			@endif
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
			<option  selected="" disabled="">Choose</option>
			@if($student->gender=='male')
			<option value="male" selected="">Male</option>
			<option value="female">Female</option>
			@else
			<option value="male" >Male</option>
			<option value="female" selected="">Female</option>
			@endif
		</select>
	</div>
	<div class="form-group col-lg-4">
		<label for="inputState">Blood Group</label>
		
		<select class="form-control "  name="blood_id">
		<option  selected="" disabled="">Choose</option>
			@foreach($bloods as $blood)
			@if($blood->id==$student->blood_id)
			<option value="{{$blood->id}}" selected="">{{$blood->name}}</option>
			@else
			<option value="{{$blood->id}}" >{{$blood->name}}</option>
			@endif
			@endforeach
		</select>
	</div>
	<div class="form-group col-lg-4">
		<label for="inputState">Disable</label>
		
		<select class="form-control "  name="health_id">
			<option  selected="" disabled="">Choose</option>
			@foreach($healths as $health)
			@if($health->id==$student->health_id)
			<option value="{{$health->id}}" selected="">{{$health->name}}</option>
			@else
			<option value="{{$health->id}}">{{$health->name}}</option>
			@endif
			@endforeach
		</select>
	</div>
</div>
<hr> 

<h4 class="mb-8 font-weight-bold text-dark">Address Details</h4>
<div class="row">
	<div class="form-group col-lg-4">
		<label for="inputCity">Village </label>
		<input type="text" name="village" value="{{$student->village}}" class="form-control">
	</div>
	<div class="form-group col-lg-4">
		<label for="inputCity">Contact No</label>
		<input type="text" name="contact_no" value="{{$student->contact_no}}" class="form-control" id="inputCity">
	</div>
	<div class="form-group col-lg-4">
		<label for="inputCity">Addrss</label>
		<textarea type="text" name="address" value="{{$student->address}}" placeholder=" Addrss" class="form-control" id="inputCity">{{$student->address}}</textarea>
	</div>

</div>
<hr>
<h4 class="mb-8 font-weight-bold text-dark">Previous School Details</h4>
<div class="row">
	<div class="form-group col-lg-4">
		<label for="inputCity">School Name</label>
	 	
		<input type="text" class="form-control" value="{{$student->previous_school}}" name="previous_school">
	</div>
	<div class="form-group col-lg-2">
		<label for="inputCity">WithDrawl No</label>
		<input type="text" name="withdrawl_no" value="{{$student->withdrawl_no}}" class="form-control" id="inputCity">
	</div>
	<div class="form-group col-lg-2">
		<label for="inputCity">CLC No</label>
		<input type="text" name="clc_no" value="{{$student->clc_no}}" class="form-control" id="inputCity">
	</div>
	<div class="form-group col-lg-4">
		<label for="inputCity">Remarks</label>
		<textarea type="text" name="remark" value="{{$student->remark}}" placeholder="Describe Remarks" class="form-control" id="inputCity">{{$student->remark}}</textarea>
	</div>
</div>
<div class="d-flex justify-content-between border-top mt-0 pt-10 pb-10">
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
<script>
	var loadFile = function(event) {
		var image = document.getElementById('output');
		image.src = URL.createObjectURL(event.target.files[0]);
	};
</script>
@endpush