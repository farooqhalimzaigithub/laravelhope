@extends('layouts.main')
@section('content')
<div class="d-flex flex-column-fluid">

							<div class="container">
								<div class="row">
									<div class="col-lg-12 bg-white">



@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



											<div class="card-header">
												<h3 class="card-title">School  Creation</h3>
												<div class="card-toolbar">
													<div class="example-tools justify-content-center">
														<span class="example-toggle" data-toggle="tooltip" title="View code"></span>
														<span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
													</div>
												</div>
											</div>
											<form class="form"  method="post" action="{{route('schools.store')}}" >
												<input type="hidden" name="district_id" value="{{ Auth::user()->district_id; }}">
			@csrf
				<div class="container">
					<div class="row">
						<div class="col-xl-8">
							<div class="form-group">
								<label>School name</label>
								<input type="text" class="form-control" name="name"  required="" />		
								<!-- <span class="form-text text-danger">Please enter Name</span> -->
							</div>
							
						</div>
						<div class="col-xl-4">
							<div class="form-group">
								<label>School Code</label>
								<input type="text" class="form-control" name="school_code"  required="" />		
								<!-- <span class="form-text text-danger">Please enter Name</span> -->
							</div>
							
						</div>

						</div>
						<div class="row">
						
						<div class="col-xl-4">
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
						
						<div class="col-xl-4">
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
						<div class="col-xl-4">
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
						<div class="col-xl-3">
							<div class="form-group">
								<label>Village    <span class="text-danger">*</span></label>
								<input type="text" class="form-control" name="village"  required="" />	
							</div>
							
						</div>
						<div class="col-xl-3">
							<div class="form-group">
								<label>Mohallah     <span class="text-danger">*</span></label>
								<input type="text" class="form-control" name="mohallah"  required="" />	
							</div>
							
						</div>
						</div>
					
					
						<div class="row">
						
						<div class="col-xl-4">
							<div class="form-group">
								<label>Latitude</label>
								<input type="text" class="form-control" name="lat"  required="" />
							</div>
							
						</div>
						<div class="col-xl-4">
							<div class="form-group">
								<label>Longitude</label>
								<input type="text" class="form-control" name="lng"  required="" />
							</div>
							
						</div>
						<div class="col-xl-4">
							<div class="form-group">
								<label>Land Mark</label>
								<input type="text" class="form-control" name="land_mark"  required="" />
							</div>
							
						</div>
					</div>
					<div class="row">
						
						<div class="col-xl-4">
							<div class="form-group">
								<label>Level</label>
								<select class="form-control" name="level_id">
									@foreach($sLevels as $sLevel)
									<option value="{{$sLevel->id}}">{{$sLevel->name}}</option>
									@endforeach
								</select>
							</div>
							
						</div>

						<div class="col-xl-4">
							<div class="form-group">
								<label>Transport Required</label>
								<select class="form-control" name="transport_id">
									@foreach($transports as $transport)
									<option value="{{$transport->id}}">{{$transport->name}}</option>
									@endforeach
								</select>
							</div>
							
						</div>
						<!-- <div class="col-xl-6">
							<div class="form-group">
								<label>Address</label>
								<input type="text" class="form-control" name="address"  required="" />
							</div>
							
						</div> -->
					</div>
					<div class="row">

					<div class="col-xl-2"><b>Area</b></div>
						<div class="col-xl-2">
							<label class="">
								<input type="radio" class="" name="area" checked value="urban"> Urban
							</label>
						</div>
						
						<div class="col-xl-2">
							<label class="">
								<input type="radio" class="" name="area" value="semi_urban"> Semi Urban
							</label>
						</div>


						<div class="col-xl-2">
							<label class="">
								<input type="radio" class="" name="area" value="rular_plain"> Rular Plain
							</label>
						</div>


						<div class="col-xl-2">
							<label class="">
								<input type="radio" class="" name="area" value="rular_hilly"> Rular Hilly
							</label>
						</div>
 

						
				</div>

					<div class="row">

					<div class="col-xl-2"><b>CS Type</b></div>
						<div class="col-xl-2">
							<label class="">
								<input type="radio" class="" name="school_type" checked value="GCS"> GCS
							</label>
						</div>
						
						<div class="col-xl-2">
							<label class="">
								<input type="radio" class="" name="school_type" value="CFS"> CFS
							</label>
						</div>


						<div class="col-xl-2">
							<label class="">
								<input type="radio" class="" name="school_type" value="CBEC"> CBEC
							</label>
						</div>


						<div class="col-xl-2">
							<label class="">
								<input type="radio" class="" name="school_type" value="BECS"> BECS
							</label>
						</div>
 

						<div class="col-xl-2">
							<label class="">
								<input type="radio" class="" name="school_type" value="Other"> Other
							</label>
						</div>
				</div>

				<div class="row mt-2">

				<div class="col-xl-2"><b>Status</b></div>
					<div class="col-xl-2">
						<label class="">
							<input type="radio" class="" name="status" checked value="1"> Functional
						</label>
					</div>
					
					<div class="col-xl-2">
						<label class="">
							<input type="radio" class="" name="status" value="0"> Non-functional
						</label>
					</div>
				</div>


				<div class="row mt-2">

					<div class="col-xl-2"><b>Building Ownership</b></div>
						<div class="col-xl-2">
							<label class="">
								<input type="radio" class="" name="building_ownership" checked value="Govt"> Govt
							</label>
						</div>
						
						<div class="col-xl-2">
							<label class="">
								<input type="radio" class="" name="building_ownership" value="VEC"> VEC
							</label>
						</div>


						<div class="col-xl-2">
							<label class="">
								<input type="radio" class="" name="building_ownership" value="Communal"> Communal
							</label>
						</div>


						<div class="col-xl-2">
							<label class="">
								<input type="radio" class="" name="building_ownership" value="Personal"> Personal
							</label>
						</div>
				</div>

				<div class="row mt-2">
					<div class="col-xl-2"><b>Gender</b></div>
					<div class="col-xl-2">
						<label class="">
							<input type="radio" class="" name="gender" checked value="0"> Boys
						</label>
					</div>
					<div class="col-xl-2">
						<label class="">
							<input type="radio" class="" name="gender" value="1"> Girls
						</label>
					</div>
					<div class="col-xl-2">
						<label class="">
							<input type="radio" class="" name="gender" value="2"> Co-education
						</label>
					</div>
				</div>

				<div class="row mt-2">
					<div class="col-xl-2"><b>Building Structure</b></div>
					<div class="col-xl-2">
						<label class="">
							<input type="radio" class="" name="building_structure" checked value="Pakka"> Pakka
						</label>
					</div>
					<div class="col-xl-2">
						<label class="">
							<input type="radio" class="" name="building_structure" value="Kacha"> Kacha
						</label>
					</div>
					<div class="col-xl-2">
						<label class="">
							<input type="radio" class="" name="building_structure" value="Mixed"> Mixed
						</label>
					</div>
					<div class="col-xl-2">
						<label class="">
							<input type="radio" class="" name="building_structure" value="Open-air-partial"> Open air (Partial)
						</label>
					</div>

					<div class="col-xl-2">
						<label class="">
							<input type="radio" class="" name="building_structure" value="Open-air-complete"> Open air (Complete)
						</label>
					</div>
				</div>
				<div class="d-flex justify-content-between border-top mt-5 mb-5"></div>

				<div class="row mb-2 mt-2">


<div class="col-md-4 col-12">
	<div class="form-group">
		<p><b>Email address *</b></p>
		<label for="GCS" class="sr-only">GCS</label>
		<input type="text" class="form-control" required="" name="email">
	</div>
</div>


<div class="col-md-4 col-12">
	<div class="form-group">
		<p><b>Responsible Persosn</b></p>
		<input type="text" class="form-control" required="" name="responsible_person">
	</div>
</div>

<div class="col-md-4 col-12">
	<div class="form-group">
		<p><b>Contact #</b></p>
		<input type="number" class="form-control" required="" name="contact_number">
	</div>
</div>

<div class="col-md-4 col-12">
	<div class="form-group">
		<p><b>Password</b></p>
		<input type="password" class="form-control" required="" name="password">
	</div>
</div>
<div class="col-md-4 col-12">
	<div class="form-group">
		<p><b>Confirm Password</b></p>
		<input type="password" class="form-control" required="" name="password_confirmation">
	</div>
</div>

</div>

					
				</div>
					<div class="d-flex justify-content-between border-top mt-0 pt-10 pb-10">

						<div>
							<button type="submit" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4">submit</button>
							
						</div>
					</div>

				</form>
											

										</div>

									</div>
									
								</div>

							</div>

						
@endsection
@push('script')
<script type="text/javascript">
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