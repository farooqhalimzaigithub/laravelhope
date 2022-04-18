@extends('layouts.main')
@section('content')
<!-- for datatables -->

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
													<span class="card-label font-weight-bolder text-dark">Details</span>
													<!-- <span class="text-muted mt-1 font-weight-bold font-size-sm">Manage over 1600 expense_category</span> -->
												</h3>
												<div class="card-toolbar">
													<div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
														<!--begin::Trigger Modal-->
														<a class="nav-link py-2 px-4 btn btn-primary"  href="{{route('expense_categories.create')}}"><i class="ki ki-plus text-light"></i>  Add New</a>
														
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
															<th>expense_category Title</th>
															<!-- <th>Route Name</th>
															<th>Url</th> -->
															<th>Action</th>
															
														</tr>
													</thead>
													<tbody>
														@foreach($expense_categories as $expense_category)
														<tr data-id={{$expense_category->id}}>
															<td>{{$loop->iteration}}</td>
															<td>{{$expense_category->name}}</td>
															<!-- <td>{{$expense_category->route_name}}</td>
															<td>{{$expense_category->route_url}}</td> -->
															<td><a href="{{route('expense_categories.create')}}" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																				<i class="ki ki-plus text-success"></i>
																			</a>
																			<form method="post" action='{{route("expense_categories.destroy",$expense_category->id) }}' class="">
												{{csrf_field()}}
												{{method_field('DELETE')}}
												<button type="submit" class="btn btn-icon btn-light btn-hover-danger btn-sm " style=" border:none; text-align: center; "><i class="fa fa-trash text-danger  "></i></button>
											</form>
																			<a href="{{route('expense_categories.edit',$expense_category->id)}}" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
																				<span class="svg-icon svg-icon-md svg-icon-primary">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="16px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<rect x="0" y="0" width="24" height="24" />
																							<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																							<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opaexpense_category="0.3" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																			
																			<!-- <form method="post" action='{{route("expense_categories.destroy",$expense_category->id) }}'>
																				{{csrf_field()}}
																				{{method_field('DELETE')}}
																				<button type="submit" class=" btn-primary"><i class="fa fa-trash text-danger mr-5"></i></button>
																			</form> --></td>
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
					@endsection
					@push('script')
					






					@endpush



