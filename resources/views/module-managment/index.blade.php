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
								<span class="card-label font-weight-bolder text-dark">Module</span>
								<span class="text-muted mt-1 font-weight-bold font-size-sm">Manage over 1600 Module</span>
							</h3>
							<div class="card-toolbar">
								<div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
									<!--begin::Trigger Modal-->
									<a class="nav-link py-2 px-4 btn btn-primary"  href="{{route('modules.create')}}"><i class="ki ki-plus text-light"></i>  Add New</a>
									
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
										<th>Menu Name</th>
										<th>Route Name</th>
										<th>Url</th>
										<th>Action</th>
										
									</tr>
								</thead>
								<tbody>
									@foreach($modules as $module)
									<tr data-id={{$module->id}}>
										<td>{{$loop->iteration}}</td>
										<td>{{$module->name}}</td>
										<td>{{$module->route_name}}</td>
										<td>{{$module->route_url}}</td>
										<td><a type="button" class="btn btn-icon btn-light btn-hover-primary btn-sm" data-toggle="modal" data-target="#myModal">
										<i class="fa fa-eye text-success"></i>
									</a>
									<a href="{{route('modules.edit',$module->id)}}" class="btn btn-icon btn-light btn-hover-primary btn-sm" >
										<i class="fa fa-edit text-success" aria-hidden="true"></i>
									</a>
									<form method="post" action='{{route("modules.destroy",$module->id) }}' class="">
										{{csrf_field()}}
										{{method_field('DELETE')}}
										<button type="submit" class="btn btn-icon btn-light btn-hover-danger btn-sm " style=" border:none; text-align: center; "><i class="fa fa-trash text-danger  "></i></button>
									</form></td>
																	</tr>
																	@endforeach
																</tbody>
																<tfoot>
																	<tr>
																		<th>#</th>
																		<th>Menu Name</th>
																		<th>Route Name</th>
																		<th>Url</th>
																		<th>Action</th>
																	</tr>
																</tfoot>
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
								@endsection
								@push('script')
								<!-- <script src="{{asset('assets/data-table-libs/js/bootstrap.min.js')}}"></script> -->
								<!-- <script src="{{asset('assets/data-table-libs/js/jquery.min.js')}}"></script> -->
								<!-- <script src="{{asset('assets/data-table-libs/js/jquery.dataTables.min.js')}}"></script> -->
								<!-- <script src="{{asset('assets/data-table-libs/js/popper.min.js')}}"></script> -->
								<!-- <script >
									
								</script> -->


								@endpush



