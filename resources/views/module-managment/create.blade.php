@extends('layouts.main')
@section('content')
<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<div class="row">
									<div class="col-lg-12">
										<!--begin::Card-->
										<!-- <div class="card card-custom gutter-b example example-compact" style="border : 1px solid yellow;"> -->
											<div class="card-header">
												<h3 class="card-title">Module Form</h3>
												<div class="card-toolbar">
													<div class="example-tools justify-content-center">
														<span class="example-toggle" data-toggle="tooltip" title="View code"></span>
														<span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
													</div>
												</div>
											</div>
											<form class="form  mt-12"  method="post" action="{{route('modules.store')}}" >
			@csrf

				<!-- <h4 class="mb-8 font-weight-bold text-dark">Module Details</h4> -->
				<div class="row">
					<div class="col-lg-3">
						<!--begin::Input-->
						<div class="form-group">
							<label>Menu Name</label>
							<input type="text" class="form-control form-control-solid form-control-lg" name="name" placeholder="Name" />
							<span class="form-text text-muted">Please enter Menu Name</span>
						</div>
						<!--end::Input-->
					</div>
					<div class="col-lg-3">
						<!--begin::Input-->
						<div class="form-group">
							<label>Route Name</label>
							<input type="text" class="form-control form-control-solid form-control-lg" name="route_name" placeholder="Route Name" />
							<span class="form-text text-muted">Please enter Route Name</span>
						</div>
						<!--end::Input-->
					</div>
					<div class="col-lg-3">
						<!--begin::Input-->
						<div class="form-group">
							<label>Url</label>
							<input type="text" class="form-control form-control-solid form-control-lg" name="route_url" placeholder="Url" />
							<span class="form-text text-muted">Please enter Url</span>
						</div>
						<!--end::Input-->
					</div>
					<div class="col-lg-3">
						<!-- <div class="form-group"> -->
							<label>Parent</label>
							<select name="parent_id" class="form-control form-control-solid form-control-lg">
								<option value="0">  It Self</option>
								@foreach($modules as $module)
								<option value="{{$module->id}}">{{$module->name}}</option>
								@endforeach
							</select>
						<!-- </div> -->
					</div>
				</div>
					<div class="row">
						
						<div class="col-lg-4">
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Visibility</label>
							<div class="col-sm-9">
								<input type="radio" checked name="visibility" value="1" /> &nbsp; Yes
								<input type="radio" value="0"  id="form-field-1" name="visibility" /> &nbsp; No
							</div>
					    </div>
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