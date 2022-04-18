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
								<span class="card-label font-weight-bolder text-dark"> Assesment Details</span>
								<!-- <span class="text-muted mt-1 font-weight-bold font-size-sm">Manage over 1600 Fee Tarrif</span> -->
							</h3>
							<div class="card-toolbar">
								<div class="dropdown dropdown-inline" >
									<!--begin::Trigger Modal-->
									<a class="nav-link py-2 px-4 btn btn-primary"  href="{{route('assesments.create')}}"><i class="ki ki-plus text-light"></i>  Add New</a>

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
										<th> Date</th>
										<th>Assesment</th>
										<th>Organization</th>
										<th>From</th>
										<th>For</th>
										<th>Due Date</th>
										<th>Action</th>

									</tr>
								</thead>
								<tbody>
									@foreach($assesments as $assesment)
									<tr data-id="{{$assesment->id}}">
										<td>{{$loop->iteration}}</td>
										<td>{{$assesment->assesment_date}}</td>
										<td>{{$assesment->assesment_title}}</td>
										<td>{{$assesment->organization}}</td>
										<td>{{$assesment->from}}</td>
										<td>{{$assesment->for}}</td>
										<td>{{$assesment->due_date}}
										</td>
										<td>
										  <a type="button" class="btn btn-icon btn-light btn-hover-primary btn-sm detail_view_button" data-toggle="modal" data-target="#exampleModalCenter"  data-assesment_id="{{$assesment->id}}" data-assesment_name="{{$assesment->assesment_title}}" data-due_date="{{$assesment->due_date}}" data-organization="{{$assesment->organization}}" data-for="{{$assesment->for}}"
                                             	data-from="{{$assesment->from}}" 
                                             	data-assesment_date="{{$assesment->assesment_date}}">
										        <i class="fa fa-eye text-success"></i>
									      </a>
									      
									<a href="{{route('assesments.edit',$assesment->id)}}" class="btn btn-icon btn-light btn-hover-primary btn-sm" >
										<i class="fa fa-edit text-success" aria-hidden="true"></i>
									</a>
									
									<form method="post" action='{{route("assesments.destroy",$assesment->id) }}' class="">
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
                        	<th> Assesment Title </th><td> : <span class="m_assesment_name"> </span>     </td>
                          </tr>
                        <tr> 
                        	<th> Assesment Date </th><td> : <span class="m_assesment_date"> </span>   </td>
                        </tr>
                        <tr> 
                        	<th> Organization </th><td> : <span class="m_organization"> </span>   </td>
                        </tr>
                        <tr> 
                        	<th> From</th><td> : <span class="m_from"> </span>   </td>
                        </tr>
                        <tr> 
                        	<th>For</th><td> : <span class="m_for"> </span>   </td>
                        </tr>
                        <tr> <th> Due Date </th><td> : <span class="m_due_date"> </span>     </td>  </tr>
                        
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
              
               $('.m_assesment_name').text($(this).data('assesment_name'));
               $('.m_assesment_date').text($(this).data('assesment_date'));
               $('.m_organization').text($(this).data('organization'));
               $('.m_due_date').text($(this).data('due_date'));
               $('.m_for').text($(this).data('for'));
               $('.m_from').text($(this).data('from'));
               // var row_status=$(this).data('company_status');
               
            });
        });
     </script>


									@endpush



