@extends('layouts.main')
@section('content')


					<!-- for datatables -->
					<!-- <link href="{{asset('assets/data-table-libs/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
						<link href="{{asset('assets/data-table-libs/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" /> -->
						<!--begin::Content-->
						<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
							<!-- The Modal -->
							<div class="modal fade bd-example-modal-lg" tabindex="-1"  id="myModal" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Staff Details</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body">

        <form>
        	<div class="form-row">
    
    <div class="form-group col-md-2">
      <label for="inputState">Name</label>
      <input class="form-control" id="Teacher_Name">
    </div>
    <div class="form-group col-md-2">
      <label for="inputCity">Cnic#</label>
      <input type="text" class="form-control" id="CNIC">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">DOB</label>
      <input type="text" class="form-control" id="DOB">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Father Name</label>
      <input type="text" class="form-control" id="Father_Name">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Degree</label>
      <input type="text" class="form-control" id="Degree">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Account</label>
      <input type="text" class="form-control" id="Account">
    </div>
  </div>
  <div class="form-row">
    
    <div class="form-group col-md-2">
      <label for="inputState">Subject</label>
      <input type="text" class="form-control" id="Subject">
    </div>
   
   
    <div class="form-group col-md-2">
      <label for="inputZip">Contact</label>
      <input type="text" class="form-control" id="Contact">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Disability</label>
      <input type="text" class="form-control" id="Disability">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip"> Experience</label>
      <input type="text" class="form-control" id="Experience">
    </div>
    <div class="form-group col-md-2">
      <label for="inputState">Whatsapp</label>
      <input type="text" class="form-control" id="Whatsapp">
    </div>
    <div class="form-group col-md-2">
      <label for="inputCity">marital_status</label>
      <input type="text" class="form-control" id="marital_status">
    </div>
  </div>
   <div class="form-row">
    
    
    
  </div>
   
        </form>

      </div>
      <!--Footer-->
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
        <!-- <button class="btn btn-primary">Checkout</button> -->
      </div>
    </div>
  </div>
  </div>
							<!--begin::Subheader-->
							<div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
								<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
									<!--begin::Info-->

									<!--end::Info-->
									<!--begin::Toolbar-->
									<div class="d-flex align-items-center">
										<!--begin::Actions-->

										<!--end::Dropdown-->
									</div>
									<!--end::Toolbar-->
								</div>
							</div>
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
												<div class="card-header flex-wrap border-0 pt-6 pb-0">
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label font-weight-bolder text-dark">staffs</span>
														<!-- <span class="text-muted mt-1 font-weight-bold font-size-sm">Manage over 1600 staff</span> -->
													</h3>
													<div class="card-toolbar">
														<div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left">
															<!--begin::Trigger Modal-->
															<a class="nav-link py-2 px-4 btn btn-primary"  href="{{route('staffs.create')}}"><i class="ki ki-plus text-light"></i>  Add New</a>

															<!--end::Trigger Modal-->
															<!--begin::Modal Content-->

															<!--end::Modal Content-->
														</div>
													</div>
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body">
													<!--begin: Search Form-->
													<!--begin::Search Form-->

													<table id="example" class="table table-striped table-bordered" style="width:100%">
														<thead>
															<tr>
																<th>S.NO</th>
																
																<th> Name</th>
																<th> F/Name</th>
																<th> Gender</th>
																<th> Date Of Birth</th>
																<th> Degree</th>
																<th> Subject</th>
																<th> Qualification</th>
																<!-- <th>CNIC</th> -->
																<!-- <th>Staff Category</th> -->
																<!-- <th>Designation</th>
																<th>Appointment Date</th> -->
								<th>Action</th>

							</tr>
						</thead>
					 	<tbody>
							@foreach($staffs as $staff)
							<tr data-id="{{$staff->id}}" >
								<input type="hidden" name="id" id="id" value="{{$staff->id}}">
								<td>{{$loop->iteration}}</td>
								<!-- <td>{{$staff->registration_no}}</td> -->
							
								<td>{{$staff->Teacher_Name}}</td>
								<td>{{$staff->Father_Name}}</td>
								@if($staff->Gender==1)
								<td>Male</td>
								@else
								<td>FeMale</td>
								@endif
								<td>{{$staff->DOB}}</td>
								<td>{{$staff->Degree}}</td>
								<td>{{$staff->Subject}}</td>
								<td>{{$staff->Qualification}}</td>
								 <!-- you can get all detail through relation -->
								<td >
									<a type="button" class="btn btn-icon btn-light btn-hover-primary btn-sm show_detail" data-toggle="modal" data-target="#myModal">
										<i class="fa fa-eye text-success"></i>
									</a>
									<a href="{{route('staffs.edit',$staff->id)}}" class="btn btn-icon btn-light btn-hover-primary btn-sm" >
										<i class="fa fa-edit text-success" aria-hidden="true"></i>
									</a>
										<form method="post" action='{{route("staffs.destroy",$staff->id) }}' class="" style=" display: inline;">
												{{csrf_field()}}
												{{method_field('DELETE')}}
												<button type="submit" class="btn btn-icon btn-light btn-hover-danger btn-sm " style=" border:none; text-align: center; "><i class="fa fa-trash text-danger  "></i></button>
											</form>
									</td>
										</tr>
										@endforeach
									</tbody>

								</table>
								<!--begin: Datatable-->
								<div class="datatable datatable-bordered " id="">

								</div>
								<!--end: Datatable-->
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
	<!-- <div class="modal-dialog modal-lg" id="myModal">...</div> -->
	@endsection

	@push('script')
					
<script > 
	$(document).on('click', 'a#btnDelete',function(e){   
	e.preventDefault();
    var id = $(this).data('id');
    var token = $("meta[name='csrf-token']").attr("content");
    console.log(id);
    var url = e.href;

    $.ajax({
            
          url: url, //or you can use url: "company/"+id,
          method: 'DELETE',
          data: {
            _token: token,
                id: id
        },
        success:function(response)
        {
            console.log(response)
        }
    });
});
</script>
<script >
	var counter=0;
    $(document).on('click', '.show_detail', function () {
             var tr=$(this).closest("tr"); 
             $('#myModal').modal('show');
	         var staff_id = $(this).closest("tr").find("#id").val();
              console.log(staff_id);
  $.ajax({
         type:'get',
         url: 'show_detail_of_staff',
         data:{'staff_id':staff_id},
        success:function(data){
        	console.log(data);
               $('#Teacher_Name').val(data.Teacher_Name);
               $('#DOB').val(data.DOB);
               $('#Father_Name').val(data.Father_Name);
               $('#Degree').val(data.Degree);
             $('#Contact').val(data.Contact);
              $('#Whatsapp').val(data.Whatsapp);
              $('#Experience').val(data.Experience);
                $('#Subject').val(data.Subject);
               $('#Disability').val(data.Disability);
               $('#Account').val(data.Account);
              $('#CNIC').val(data.CNIC);
                $('#marital_status').val(data.marital_status);
               
                
        },
         error:function(){
        }
   });
  });  
</script>
@endpush



