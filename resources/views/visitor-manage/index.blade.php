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
								<span class="card-label font-weight-bolder text-dark"> Visitor Details</span>
								<!-- <span class="text-muted mt-1 font-weight-bold font-size-sm">Manage over 1600 Fee Tarrif</span> -->
							</h3>
							<div class="card-toolbar">
								<div class="dropdown dropdown-inline" >
									<!--begin::Trigger Modal-->
									<a class="nav-link py-2 px-4 btn btn-primary"  href="{{route('visitors.create')}}"><i class="ki ki-plus text-light"></i>  Add New</a>

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
										<!-- <th> Date</th> -->
										<th>Name</th>
										<th>Visit Date</th>
										<th>Organization</th>
										<th>designation</th>
										<th>Contact Number</th>
										<th>Purpose Of Visit</th>
										<th>Remarks</th>
										<th>Action</th>

									</tr>
								</thead>
								<tbody>
									@foreach($visitors as $visitor)
									<tr data-id="{{$visitor->id}}">
										<td>{{$loop->iteration}}</td>
										<td>{{$visitor->name}}</td>
										<td>{{$visitor->visit_date}}</td>
										<td>{{$visitor->organization}}</td>
										<td>{{$visitor->designation}}</td>
										<td>{{$visitor->contact_number}}</td>
										<td>{{$visitor->purpose_of_visit}}</td>
										<td>{{$visitor->remark}}</td>
										</td>
										<td>
										  <a type="button" class="btn btn-icon btn-light btn-hover-primary btn-sm detail_view_button" data-toggle="modal" data-target="#exampleModalCenter"  data-visitor_id="{{$visitor->id}}" data-visitor_name="{{$visitor->name}}" data-designation="{{$visitor->designation}}" data-organization="{{$visitor->organization}}" data-contact_number="{{$visitor->contact_number}}"
                                             	data-purpose_of_visit="{{$visitor->purpose_of_visit}}" 
                                             	data-remark="{{$visitor->remark}}">
										        <i class="fa fa-eye text-success"></i>
									      </a>
									      
									<a href="{{route('visitors.edit',$visitor->id)}}" class="btn btn-icon btn-light btn-hover-primary btn-sm" >
										<i class="fa fa-edit text-success" aria-hidden="true"></i>
									</a>
									
									<form method="post" action='{{route("visitors.destroy",$visitor->id) }}' class="">
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
					<h5 class="modal-title">Assesment Details</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i aria-hidden="true" class="ki ki-close"></i>
					</button>
				</div>
                <div class="modal-body">
                    <table cellpadding="5" cellmargin="5">
                        
                        <tr> 
                        	<th>  Title </th><td> : <span class="m_visitor_name"> </span>     </td>
                          </tr>
                        <tr> 
                        	<th>  Designation </th><td> : <span class="m_designation"> </span>   </td>
                        </tr>
                        <tr> 
                        	<th> Organization </th><td> : <span class="m_organization"> </span>   </td>
                        </tr>
                        <tr> 
                        	<th> Contact Number</th><td> : <span class="m_contact_number"> </span>   </td>
                        </tr>
                        <tr> 
                        	<th>Purpose Of Visit</th><td> : <span class="m_purpose_of_visit"> </span>   </td>
                        </tr>
                        <tr> <th> Remark</th><td> : <span class="m_remark"> </span>     </td>  </tr>
                        
                    </table>
                    <br>
                    <br>
                    <br>
                    <br>

                </div>
            </div>
    </div>
</div>
									@endsection

									@push('script')
									 <script>
        $(document).ready(function(){
           
            $(document).on('click','.detail_view_button',function(){
              
               $('.m_visitor_name').text($(this).data('visitor_name'));
               $('.m_designation').text($(this).data('designation'));
               $('.m_organization').text($(this).data('organization'));
               $('.m_contact_number').text($(this).data('contact_number'));
               $('.m_purpose_of_visit').text($(this).data('purpose_of_visit'));
               $('.m_remark').text($(this).data('remark'));
               // var row_status=$(this).data('company_status');
               
            });
        });
     </script>


									@endpush



