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
								<span class="card-label font-weight-bolder text-dark"> contact Details</span>
								<!-- <span class="text-muted mt-1 font-weight-bold font-size-sm">Manage over 1600 Fee Tarrif</span> -->
							</h3>
							<div class="card-toolbar">
								<div class="dropdown dropdown-inline" >
									<!--begin::Trigger Modal-->
									<a class="nav-link py-2 px-4 btn btn-primary"  href="{{route('contact_forms.create')}}"><i class="ki ki-plus text-light"></i>  Add New</a>

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
										<th> From</th>
										<th>To</th>
										<th>Subject</th>
										<th>Description</th>
										<th>Contact</th>
										<th>Image</th>
										<th>Action</th>

									</tr>
								</thead>
								<tbody>
									@foreach($contacts as $contact)
									<tr data-id="{{$contact->id}}">
										<td>{{$loop->iteration}}</td>
										<td>{{$contact->from}}</td>
										<td>{{$contact->to}}</td>
										<td>{{$contact->subject}}
										<td>{{$contact->description}}</td>
										<td>{{$contact->contact}}</td>
										<td><img src="{{asset('public/images/'.$contact->image)}} " class="rounded-circle avatar-xs" alt="profile" width="100" height="100" /></td>
										</td>
										<td>
										  <a type="button" class="btn btn-icon btn-light btn-hover-primary btn-sm detail_view_button" data-toggle="modal" data-target="#exampleModalCenter"  data-contact_id="{{$contact->id}}" data-contact="{{$contact->contact}}" data-subject="{{$contact->subject}}" data-description="{{$contact->description}}" data-to="{{$contact->to}}"
                                             	data-from="{{$contact->from}}" 
                                             	data-image="{{$contact->image}}">
										        <i class="fa fa-eye text-success"></i>
									      </a>
									      
									<a href="{{route('contact_forms.edit',$contact->id)}}" class="btn btn-icon btn-light btn-hover-primary btn-sm" >
										<i class="fa fa-edit text-success" aria-hidden="true"></i>
									</a>
									
									<form method="post" action='{{route("contact_forms.destroy",$contact->id) }}' class="">
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
                    <table cellpadding="5" cellmargin="5">
                         <tr> 
                        	<th> From</th><td> : <span class="m_from"> </span>   </td>
                        </tr>
                        <tr> 
                        	<th>To</th><td> : <span class="m_to"> </span>   </td>
                        </tr>
                        <tr> 
                        	<th> contact  </th><td> : <span class="m_contact"> </span>     </td>
                          </tr>
                        <tr> 
                        	<th>Subject </th><td> : <span class="m_subject"> </span>   </td>
                        </tr>
                        <tr> 
                        	<th> Description </th><td> : <span class="m_description"> </span>   </td>
                        </tr>
                       
                        <tr> <th> Image</th><td> : <span class="m_image"> </span>     </td>  </tr>
                        
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
              
               $('.m_contact').text($(this).data('contact'));
               $('.m_image').text($(this).data('image'));
               $('.m_description').text($(this).data('description'));
               $('.m_subject').text($(this).data('subject'));
               $('.m_to').text($(this).data('to'));
               $('.m_from').text($(this).data('from'));
               // var row_status=$(this).data('company_status');
               
            });
        });
     </script>


									@endpush



