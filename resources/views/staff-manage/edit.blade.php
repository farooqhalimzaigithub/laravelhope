@extends('layouts.main')
@section('content')
<div class="d-flex flex-column-fluid">
	<!--begin::Container-->
	<div class="container">
		<div class="row">
			<div class="col-lg-12 bg-white">
				<h2 class="card-title " style="color: white; background: #3b96eb; height: 50px; text-align: center; padding-top: 10px;">Staff Personal Info</h2>
					<!-- <div class="card-header">
						<h3 class="card-title">Staff Form</h3>
						<small class="text-danger">The * fields must be required</small>
						<div class="card-toolbar">
							<div class="example-tools justify-content-center">
								<span class="example-toggle" data-toggle="tooltip" title="View code"></span>
								<span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
							</div>
						</div>
					</div> -->
					<form class="form  mt-2 "  method="post" action="{{route('staffs.update',$staff->id)}}"  enctype="multipart/form-data" >
						@csrf
						@method('PUT')
						<!-- <h4 class="mb-8 font-weight-bold text-dark">Personal Details</h4> -->
						<div class="row">
							<div class="col-lg-12"  >
								<div class="form-row">
									<div class="form-group col-lg-3">
										<label for="inputCity"> Teacher Name <span class="text-danger">*</span></label>
										<input type="text" name="Teacher_Name" value="{{$staff->Teacher_Name}}" class="form-control" id="inputCity" required="">
									</div>
									<div class="form-group col-lg-3">
										<label for="inputCity">Father / Husband <span class="text-danger">*</span></label>
										<input type="text" name="Father_Name" value="{{$staff->Father_Name}}" class="form-control" id="inputCity" required="">
									</div>
									<div class="form-group col-lg-3">
										<label for="inputCity">Gender</label>
										<select class="form-control "  name="gender">
											<option  selected="" disabled="">Choose</option>
											@if($staff->gender=='male')
											<option value="male" selected="">Male</option>
											<option value="female">Female</option>
											@else
											<option value="male" >Male</option>
											<option value="female" selected="">Female</option>
											@endif
										</select>
									</div>
									<div class="form-group col-lg-3">
						  <label >Qualification <span class="text-danger">*</span></label>
					         <select class="form-control" id="Qualification" name="Qualification" required="">
                                    <option disabled="" selected="">Choose</option>
                                    <option value="NIL">NIL</option> 
                                    <option value="PTC" selected="">PTC</option> 
                                    <option value="CT">CT</option>
                                    <option value="ADE">ADE</option>
                                    <option value="B.ED">B.ED</option>
                                    <option value="M.ED">M.ED</option>
                              </select>
					       </div>
					</div>
								<div class="row">
									<div class="form-group col-lg-3">
										<label for="dob">Date Of Birth <span class="text-danger">*</span></label>
										<input type="text" name="DOB"  class="form-control"  id="DOB" value="{{$staff->DOB}}" required="">
									</div>
									<div class="form-group col-lg-3">
										<label for="fathe">Last Degree / Certificate  <span class="text-danger">*</span></label>
										<select class="form-control" id="Degree" name="Degree" required="">
                                            <option disabled="" selected="">Choose</option>
                                            <option value="SSC">SSC</option>
                                            <option value="FA/Fsc" selected="">FA/Fsc</option>
                                            <option value="BA/Bsc">BA/Bsc</option>
                                            <option value="BS">BS</option>
                                            <option value="MA/Msc">MA/Msc</option>
                                            <option value="MS">MS</option>
                                        </select>
										<!-- <input type="text" name="Degree" class="form-control" id="Degree" required="" > -->
									</div>
									<div class="form-group col-lg-3">
										<label for="father_cnic"> Subject <span class="text-danger">*</span></label>
										<input type="text" name="Subject" value="{{$staff->Subject}}" class="form-control" id="Degree" required="" >
									</div>
									<div class="form-group col-lg-3">
							<label for="dob">Date of Joining  <span class="text-danger">*</span></label>
							<input type="text" value="{{$staff->Experience}}"  name="Experience" class="form-control" id="inputCity">
						</div>
						
								
							</div>
						</div>
						<!-- <div class="col-lg-3 " style="float: right; "  >
							<div class="col-xl-3 "> -->
								<!--begin::Input-->
								<!-- <div class="form-group" >

									<p><img id="output" width="100" height="100" style="border: 1px solid black; margin-left: 30px; margin-top: 30px;" /></p>
									<p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
									<p><label for="file" style="cursor: pointer; margin-left: 50px;">Browse..</label></p>
								</div> -->
								<!--end::Input-->
							<!-- </div>
						</div> -->
					</div>
					<div class="row">
						
						<div class="form-group col-lg-3">
							<label for="inputCity">CNIC # <span class="text-danger">*</span></label>
							<input type="text" step="any"  value="{{$staff->CNIC}}" name="CNIC" class="form-control"  >
						</div>
						<div class="form-group col-lg-3">
							<label for="inputSte">Marital Status</label>
							<select class="form-control "   name="marital_status">
								<option selected disabled="">Choose</option>
								@if($staff->marital_status=='single')
								<option value="single" selected="">Single</option>
								<option value="marreid">Marreid</option>
								@else
								<option value="single">Single</option>
								<option value="marreid">Marreid</option>
								@endif
							</select>
						</div>
						<div class="form-group col-lg-3">
							<label >Bank Name</label>
							<input type="text" name="Bank_Name" value="{{$staff->Bank_Code}}" class="form-control">
						</div>
						<div class="form-group col-lg-3">
							<label for="inputCity">Bank Code #</label>
							<input type="text" name="Bank_Code" value="{{$staff->Bank_Code}}" class="form-control" />
						</div>
							
					</div>
					<div class="row">
						
						
						<div class="form-group col-lg-3">
							<label for="inputCity">Account #</label>
							<input type="number" name="Account" value="{{$staff->Account}}" class="form-control"  />
						</div>
						<div class="form-group col-lg-3">
							<label for="inputCity">Contact #</label>
							<input type="number" name="Contact" value="{{$staff->Contact}}" class="form-control" />
						</div>
						<div class="form-group col-lg-3">
							<label for="inputCity">Whatsapp #</label>
							<input type="number" name="Whatsapp" value="{{$staff->Whatsapp}}" class="form-control" />
						</div>
						<div class="form-group col-lg-3">
										<label for="inputCity">Disability</label>
										<select class="form-control "   name="Disability">
										<option selected disabled="">Choose</option>
										@if($staff->Disability=='yes')
										<option value="yes" selected="">Yes</option>
										<option value="no">No</option>
										@else
										<option value="yes">Yes</option>
										<option value="no">No</option>
										@endif
									    </select>
									</div>
					</div>
					<hr>
					<h4 class="mb-8 font-weight-bold text-dark">Academic | Educational Details</h4>
<div class="row">
	<div class="col-12"  >
		<table class="table table-bordered " id="item_table">
			 
			<tr class="bg-default" style="text-align: center;">
				<th >#</th>
				<th width="15%">Year</th>
				<th width="15%">Roll No</th>

				<th width="15%">Total Mark</th>
				<th width="15%">Obtain Mark</th>
				<th width="10%">Percentage %</th>
				<th width="15%">Board </th>
				<th width="15%">Description</th>
				<th><button type="button" name="add" id="add" class="btn btn-success btn-sm add">+</button></th>
			</tr>
			<tbody>
				<?php $i=1;?>
             @if($edu_info->isEmpty())
             <tr class="table_append_rows" id="table_append_rows_{{$i}}"> 
                           
                            <td>{{$i}}</td>
                            
                                <td><input type="text"  id="year" width="5%" name="edu_year[]" class="form-control  year"/></td>
                                <td><input type="text"  id="edu_roll_no" width="5%" name="edu_roll_no[]" class="form-control  edu_roll_no"/></td>
                                <td><input type="text"  id="edu_total_mark" width="5%" name="edu_total_mark[]" class="form-control  edu_total_mark"/></td>
                                <td><input type="text"  id="edu_obtain_mark" width="5%" name="edu_obtain_mark[]" class="form-control  edu_obtain_mark"/></td>
                                <td><input type="text"  id="edu_percentage" width="5%" name="edu_percentage[]" class="form-control  edu_percentage"/></td>
                                <td><input type="text"  id="edu_board" width="5%" name="edu_board[]" class="form-control  edu_board"/></td>
                                <td class="edu_description">
                                <input  type="hidden" name="raw_row[]" value="0" id="raw_row">
                                <textarea type="text"  id="edu_description" width="5%" name="edu_description[]" class="form-control edu_description" placeholder="Description" ></textarea></td>
                                
                                   <td><div ></div><button  type="button" name="add_to" id="add_to" class="btn btn-danger btn-sm add_to">-</button></td>
                                </tr>
                                @else
                               <tr class="table_append_rows" id="table_append_rows_{{$i}}"> 
                               	 @foreach ($edu_info as $data)
                               	 <td>{{$i}}</td>
                            
                                <td><input type="text"  id="year" value="{{$data->edu_year}}" width="5%" name="edu_year[]" class="form-control  year"/></td>
                                <td><input type="text"  id="edu_roll_no" value="{{$data->edu_roll_no}}" width="5%" name="edu_roll_no[]" class="form-control  edu_roll_no"/></td>
                                <td><input type="text"  id="edu_total_mark" value="{{$data->edu_total_mark}}" width="5%" name="edu_total_mark[]" class="form-control  edu_total_mark"/></td>
                                <td><input type="text"  id="edu_obtain_mark" value="{{$data->edu_obtain_mark}}" width="5%" name="edu_obtain_mark[]" class="form-control  edu_obtain_mark"/></td>
                                <td><input type="text"  id="edu_percentage" value="{{$data->edu_percentage}}" width="5%" name="edu_percentage[]" class="form-control  edu_percentage"/></td>
                                <td><input type="text"  id="edu_board" value="{{$data->edu_board}}" width="5%" name="edu_board[]" class="form-control  edu_board"/></td>
                                <td class="edu_description">
                                <input  type="hidden" name="raw_row[]" value="0" id="raw_row">
                                <textarea type="text"  id="edu_description" width="5%" name="edu_description[]" value="{{$data->edu_description}}" class="form-control edu_description">{{$data->edu_description}}</textarea> </td>
                                   <td><div ></div><button  type="button" name="add_to" id="add_to" class="btn btn-danger btn-sm add_to">-</button></td>
                                </tr>
                                <?php $i++; ?>
                                @endforeach
                                @endif
			</tbody>
		</table>
	</div>    
</div>
<hr>
<h4 class="mb-8 font-weight-bold text-dark">Professional Details</h4>
<div class="row">
	<div class="col-12"  >
		<table class="table table-bordered " id="item2_table">
			<tr class="bg-default" style="text-align: center;">
				<th >#</th>
				<th width="15%">Year</th>
				<th width="15%">Roll No</th>

				<th width="15%">Total Mark</th>
				<th width="15%">Obtain Mark</th>
				<th width="10%">Percentage %</th>
				<th width="15%">Board </th>
				<th width="15%">Description</th>
				<th><button type="button" name="add2" id="add2" class="btn btn-success btn-sm add2">+</button></th>
			</tr>
			<tbody>
				<tbody>
				<?php $i=1;?>
             @if($prof_info->isEmpty())
             <tr class="table_append_rows" id="table_append_rows_{{$i}}"> 
                           
                             <td>{{$i}}</td>
                            
                                <td><input type="text"  id="year" width="5%" name="prof_year[]" class="form-control  year"/></td>
                                <td><input type="text"  id="prof_roll_no" width="5%" name="prof_roll_no[]" class="form-control  prof_roll_no"/></td>
                                <td><input type="text"  id="prof_total_mark" width="5%" name="prof_total_mark[]" class="form-control  prof_total_mark"/></td>
                                <td><input type="text"  id="prof_obtain_mark" width="5%" name="prof_obtain_mark[]" class="form-control  prof_obtain_mark"/></td>
                                <td><input type="text"  id="prof_percentage" width="5%" name="prof_percentage[]" class="form-control  prof_percentage"/></td>
                                <td><input type="text"  id="prof_board" width="5%" name="prof_board[]" class="form-control  prof_board"/></td>
                                <td class="prof_description">
                                <input  type="hidden" name="raw_row[]" value="0" id="raw_row">
                                <textarea type="text"  id="prof_description" width="5%" name="prof_description[]" class="form-control prof_description" placeholder="Description" ></textarea></td>
                                
                                   <td><div ></div><button  type="button" name="add_to" id="add_to" class="btn btn-danger btn-sm add_to">-</button></td>
                                </tr>
                                @else
                               <tr class="table_append_rows" id="table_append_rows_{{$i}}"> 
                               	 @foreach ($prof_info as $data)
                               	 <td>{{$i}}</td>
                            <td class="prof_description">
                                <input  type="hidden" name="raw_row[]" value="0" id="raw_row">

                                <textarea type="text"  id="prof_description" width="5%" name="prof_description[]" value="{{$data->prof_description}}" class="form-control prof_description">{{$data->prof_description}}</textarea></td>
                                <td><input type="text"  id="year" value="{{$data->prof_year}}" width="5%" name="prof_year[]" class="form-control  year"/></td>
                                <td><input type="text"  id="prof_roll_no" value="{{$data->prof_roll_no}}" width="5%" name="prof_roll_no[]" class="form-control  prof_roll_no"/></td>
                                <td><input type="text"  id="prof_total_mark" value="{{$data->prof_total_mark}}" width="5%" name="prof_total_mark[]" class="form-control  prof_total_mark"/></td>
                                <td><input type="text"  id="prof_obtain_mark" value="{{$data->prof_obtain_mark}}" width="5%" name="prof_obtain_mark[]" class="form-control  prof_obtain_mark"/></td>
                                <td><input type="text"  id="prof_percentage" value="{{$data->prof_percentage}}" width="5%" name="prof_percentage[]" class="form-control  prof_percentage"/></td>
                                <td><input type="text"  id="prof_board" value="{{$data->prof_board}}" width="5%" name="prof_board[]" class="form-control  prof_board"/></td>
                                   <td><div ></div><button  type="button" name="add_to" id="add_to" class="btn btn-danger btn-sm add_to">-</button></td>
                                </tr>
                                <?php $i++; ?>
                                @endforeach
                                @endif
			</tbody>
			</tbody>
		</table>
	</div>    
</div>
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
<!-- </div>  -->
<!--end::Container-->


@endsection


@push('script')
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script>
	$(document).ready(function(){
    // alert('okk');
    var count =  0;

    $(document).on('click','#add',function(){
    	count++;
    	html += '';
    	var html = '<tr>';
    	html += '<tr  id="row'+count+'">';
    	html += '<td>'+count+'</td>';
    	
    	html += '<td><input type="text"  id="year" placeholder="Year"  name="edu_year[]" class="form-control year"/></td>';
    	html += '<td><input type="number"  placeholder="Roll No" id="roll_no"  name="edu_roll_no[]" class="form-control roll_no"/></td>';
    	html += '<td><input type="number"  placeholder="Total Marks" id="total_mark" name="edu_total_mark[]" class="form-control percentage"/></td>';
    	html += '<td><input type="number"   placeholder="Obtain Marks" id="edu_obtain_mark" name="edu_obtain_mark[]" class="form-control percentage"/></td>';
    	html += '<td><input type="text"  placeholder="Percentage " id="percentage"  name="edu_percentage[]" class="form-control percentage"/></td>';
    	html += '<td><input type="text"  placeholder="Board " id="board"  name="edu_board[]" class="form-control board"/></td>';
    	html += '<td ><textarea type="text"  id="description" placeholder="description"  name="edu_description[]" class="form-control description"/></textarea></td>';
    	html += '<td style="text-align:center"><button type="button" data-id="'+count+' " name="remove" class="btn my btn-danger btn-sm "> - </button></td>';
    	html += '</tr>';
    	$('#item_table').append(html);
    });
});
	$(document).on('click','.my',function(){
		var count=$(this).data('id');
		var row= $('#row'+count).remove();
		console.log(count);
	});
	var count =  0;
	$(document).on('click','#add2',function(){
		// alert('okk');
		count++;
		html += '';
		var html = '<tr>';
		html += '<tr  id="row'+count+'">';
		html += '<td>'+count+'</td>';
		html += '<td><input type="text"  id="year" placeholder="Year"  name="prof_year[]" class="form-control year"/></td>';
		html += '<td><input type="number"  placeholder="Roll No" id="roll_no"  name="prof_roll_no[]" class="form-control roll_no"/></td>';
		html += '<td><input type="number"  placeholder="Total Marks" id="total_mark" name="prof_total_mark[]" class="form-control percentage"/></td>';
		html += '<td><input type="number"   placeholder="Obtain Marks" id="obtain_mark" name="prof_obtain_mark[]" class="form-control percentage"/></td>';
		html += '<td><input type="text"  placeholder="Percentage " id="percentage"  name="prof_percentage[]" class="form-control percentage"/></td>';
		html += '<td><input type="text"  placeholder="Board " id="board"  name="prof_board[]" class="form-control board"/></td>';
		html += '<td ><textarea type="text"  id="description" placeholder="description"  name="prof_description[]" class="form-control description"/></textarea></td>';
		html += '<td style="text-align:center"><button type="button" data-id="'+count+' " name="remove" class="btn my2 btn-danger btn-sm "> - </button></td>';
		html += '</tr>';
		$('#item2_table').append(html);
	});
	$(document).on('click','.my2',function(){
		var count=$(this).data('id');
		var row= $('#row'+count).remove();
		console.log(count);
	});
</script>
<script>
	var loadFile = function(event) {
		var image = document.getElementById('output');
		image.src = URL.createObjectURL(event.target.files[0]);
	};
</script>
@endpush