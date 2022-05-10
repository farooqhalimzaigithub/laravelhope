@extends('layouts.main')
@section('content')
<!-- for datatables -->
<!-- <link href="{{asset('assets/data-table-libs/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" /> -->

<!-- <link href="{{asset('assets/data-table-libs/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" /> -->
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
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
								<span class="card-label font-weight-bolder text-dark"> Nearest Instution Details</span>
								<!-- <span class="text-muted mt-1 font-weight-bold font-size-sm">Manage over 1600 Fee Tarrif</span> -->
							</h3>
							<div class="card-toolbar">
								<div class="dropdown dropdown-inline" >
									<!--begin::Trigger Modal-->
									<a class="nav-link py-2 px-4 btn btn-primary"  href="{{route('nearest_institutions.create')}}" data-toggle="modal" data-target="#exampleModalCenter"><i class="ki ki-plus text-light"></i>  Add New</a>

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
										<th>#</th>
										<th>School</th>
										<th>Level</th>
										<th>Gender</th>
										<th>EMIS CODE#</th>
										<th>Distance</th>
										
										<th>Action</th>

									</tr>
								</thead>
								<tbody>
									@foreach($nearestInstitutions as $nearestInstitution)
									<tr data-id="{{$nearestInstitution->id}}">
										<td>{{$loop->iteration}}</td>
										<td>{{$nearestInstitution->name}}</td>
										<td>{{$nearestInstitution->level}}</td>
										<td>{{$nearestInstitution->gender}}
										<td>{{$nearestInstitution->emis_code}}</td>
										<td>{{$nearestInstitution->distance}}</td>	
										<td>
										  <!-- <a type="button" class="btn btn-icon btn-light btn-hover-primary btn-sm detail_view_button" data-toggle="modal" data-target="#exampleModalCenter"  data-nearestInstitution_id="{{$nearestInstitution->id}}" data-name="{{$nearestInstitution->name}}" data-level="{{$nearestInstitution->level}}" data-gender="{{$nearestInstitution->gender}}" data-emis_code="{{$nearestInstitution->emis_code}}"
                                             	data-distance="{{$nearestInstitution->distance}}" >
										        <i class="fa fa-eye text-success"></i>
									      </a> -->
									      
									<a type="button" class="btn btn-icon btn-light btn-hover-primary btn-sm edit_btn" data-toggle="modal" data-target="#exampleModalCenterEdit"  data-nearest_institution_id="{{$nearestInstitution->id}}" data-name="{{$nearestInstitution->name}}" data-level="{{$nearestInstitution->level}}" data-gender="{{$nearestInstitution->gender}}" data-emis_code="{{$nearestInstitution->emis_code}}"
                                             	data-distance="{{$nearestInstitution->distance}}">
										<i class="fa fa-edit text-success" aria-hidden="true"></i>
									</a>
									
									<form method="post" action='{{route("nearest_institutions.destroy",$nearestInstitution->id) }}' class="">
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

    <!-- ============================ppppp==================== -->
    <!-- Button trigger modal-->
<!-- Modal-->
<div class="modal fade" id="exampleModalCenter" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">contact Details</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i aria-hidden="true" class="ki ki-close"></i>
					</button>
				</div>
                <div class="modal-body">
                	<form action="{{route('nearest_institutions.store')}}" method="post">
                		
                             @csrf
                    <table cellpadding="5" cellmargin="5" class="col-lg-12">
                         <tr> 
                        	<th><label> School</label></th><td> <input type="text" name="name" class="form-control"></td>
                        </tr>
                        <tr> 
                        	<th><label>Level</label></th><td>
                        	 <select class="form-control" name="level">
                        		<option selected=""  disabled="">Choose</option>
                        		<option value="primary">Primary</option>
                        		<option  value="middle">Middle</option>
                        		<option  value="high">High</option>
                        		<option  value="higher_secondary">Higher Secondary</option>
                        	</select></td>
                        </tr>
                        <tr> 
                        	<th><label> Gender  </label></th><td> <select class="form-control" name="gender">
                        		<option selected=""  disabled="">Choose</option>
                        		<option value="boy">Boys</option>
                        		<option  value="girl">Girls</option>
                        		<option  value="co_education">Co Education</option>
                        	</select></td>
                          </tr>
                        <tr> 
                        	<th><label>EMIS CODE# </label></th><td> <input type="number" name="emis_code" class="form-control">  </td>
                        </tr>
                        <tr> 
                        	<th><label> Distance</label> </th><td>  <input type="number" name="distance" class="form-control"> </td>
                        </tr>
                       
                        
                        
                    </table>
                     <div class="d-flex justify-content-between  mt-0 pt-10 pb-10">
            <!-- <div class="mr-2">
              <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Previous</button>
            </div> -->
             <div>
              <button type="submit" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4">Submit</button>
             </div>
          </div>
         </form>
	    </div>
	  </div>
	 </div>
  </div>
  <!-- ===================Edit Modaal================== -->
  <div class="modal fade" id="exampleModalCenterEdit" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">contact Details Edit</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i aria-hidden="true" class="ki ki-close"></i>
					</button>
				</div>
                <div class="modal-body">
                	@if(isset($nearestInstitution))
                	<form action="{{route('nearest_institutions.update',$nearestInstitution->id)}}" method="post">
                             @csrf
                             @method('PUT')
                             <input type="hidden" name="nearest_institution_id" class="_nearest_institution_id"  >
                    <table cellpadding="5" cellmargin="5" class="col-lg-12">
                         <tr> 
                        	<th><label> School</label></th><td> <input type="text" name="name" class="form-control _m_name"></td>
                        </tr>
                        <tr> 
                        	<th><label>Level</label></th><td>
                        	 <select class="form-control" name="level" required="true" class="_m_level">
                        		<option selected=""  disabled="" value="">Choose</option>
                        		<option value="primary">Primary</option>
                        		<option  value="middle">Middle</option>
                        		<option  value="high">High</option>
                        		<option  value="higher_secondary">Higher Secondary</option>
                        	</select></td>
                        </tr>
                        <tr> 
                        	<th><label> Gender  </label></th><td> <select class="form-control _m_gender" name="gender" required="true">
                        		<option selected=""  disabled="" value="">Choose</option>
                        		<option value="boy">Boys</option>
                        		<option  value="girl">Girls</option>
                        		<option  value="co_education">Co Education</option>
                        	</select></td>
                          </tr>
                        <tr> 
                        	<th><label>EMIS CODE# </label></th><td> <input type="text" name="emis_code" class="form-control _m_emis_code">  </td>
                        </tr>
                        <tr> 
                        	<th><label> Distance</label> </th><td>  <input type="text" name="distance" class="form-control _m_distance"> </td>
                        </tr>
                       
                        
                        
                    </table>
                     <div class="d-flex justify-content-between  mt-0 pt-10 pb-10">
            <!-- <div class="mr-2">
              <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Previous</button>
            </div> -->
             <div>
              <button type="submit" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4">Update</button>
             </div>
          </div>
         </form>
         @endif
	    </div>
	  </div>
	 </div>
  </div>
@endsection
@push('script')
<script>
$(document).ready(function(){

    $(document).on('click','.edit_btn',function(){

       // $('._m_name').text($(this).data('name'));
       $('._nearest_institution_id').val($(this).data('nearest_institution_id'));
       $('._m_name').val($(this).data('name'));
       $('._m_emis_code').val($(this).data('emis_code'));
       $('._m_distance').val($(this).data('distance'));
       
    });
});
</script>
@endpush



