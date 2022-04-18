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
					<h3 class="card-title">User Form</h3>
				</div>
				<div class="container">
					<form class="form" method="POST" action="{{ route('users.store') }}" >
					@if( auth()->user()->role_id === 3)
						<!-- role_id for dmo  -->
						<input type="hidden" name="role_id" value="2" />
					@endif
						@csrf
					<div class="row" >
						<div class="col-lg-6">
							<label> Name</label>
							<input type="text" class="form-control" name="name" placeholder="Name" />
							<span class="form-text text-muted">Please enter  Name</span>
						</div>
						<div class="col-lg-6">
							<label> Email</label>
							<input type="email" class="form-control" name="email" placeholder="Email" />
							<span class="form-text text-muted">Please enter Email</span>
						</div>
						<div class="col-lg-6">
							<label>Password</label>
							<input type="password" class="form-control" name="password" placeholder="password" />
							<span class="form-text text-muted">Please enter Password</span>
						</div>
						<div class="col-lg-6">
							<label>Retype password</label>
							<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
							<span class="form-text text-muted">Please enter Confirm Password</span>
						</div>

						<div class="col-lg-6">
							<label> Contact number</label>
							<input type="number" class="form-control" name="contact_number" placeholder="Contact number" />
							<span class="form-text text-muted">Please enter contact number</span>
						</div>
						@if( auth()->user()->role_id !== 3 && auth()->user()->role_id !== 2)
						<div class="col-lg-6">
							<label>Role</label>
							<select name="role_id" required="true" class="form-control">
								<option value=""> Select Role </option>
								@foreach($roles as $role)
								<option value="{{$role->id}}">{{$role->name}}</option>
								@endforeach
							</select>
						</div>
						@endif

						@if(auth()->user()->role_id === 3)
						<!-- show only to hq user role id 3 -->
						<div class="col-lg-6">
							<label>District</label>
							<select name="district_id" required="true" class="form-control">
								<option value=""> Select District </option>
								@foreach($districts as $district)
								<option value="{{$district->districtId}}">{{$district->districtTitle}}</option>
								@endforeach
							</select>
						</div>
						@endif

					</div>
					
						<div class="d-flex justify-content-between border-top mt-5 pt-10 pb-10">
							<!-- <div class="mr-2">
								<button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Previous</button>
							</div> -->
							<div>
								<button type="submit" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4">Submit</button>
								
							</div>
						</div>
						<!--end::Wizard Actions-->
					</form>
			</div>
				
				<!--end::Body-->
			
										<!--end::Mixed Widget 17-->
		
									
								</div>
								</div>
								</div>
								</div>
								<!--end::Row-->
								
								<!--end::Row-->
								<!--end::Dashboard-->

							<!--end::Container-->
						<!--end::Entry-->
					<!-- </div> -->
@endsection