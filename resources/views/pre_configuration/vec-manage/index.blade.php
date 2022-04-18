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
								<span class="card-label font-weight-bolder text-dark">Village Education Council Details</span>
								<!-- <span class="text-muted mt-1 font-weight-bold font-size-sm">Manage over 1600 vec</span> -->
							</h3>
							<div class="card-toolbar">
								<div class="dropdown dropdown-inline" >
									<!--begin::Trigger Modal-->
									<a class="nav-link py-2 px-4 btn btn-primary"  href="{{route('vecs.create')}}"><i class="ki ki-plus text-light"></i>  Add New</a>

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
										<th> Meeting Place</th>
										<th> Meeting </th>
										<th> Meeting Date </th>
										<th>Proceeding</th>
										<th>Present</th>
										<th>Absent</th>
										<th>Attendance Sheet Image</th>
										<th>Group Image</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($vecs as $vec)
									<tr data-id={{$vec->id}}>
										<td>{{$loop->iteration}}</td>
										<td>{{$vec->meeting_place}}</td>
										<td>{{$vec->meeting}}</td>
										<td>{{$vec->meeting_date}}</td>
										<td>{{$vec->proceeding}}</td>
										<td>{{$vec->present_member}}</td>
										<td>{{$vec->absent_member}}</td>
										<td>
										<img src="{{asset('public/images/'.$vec->att_sheet_image)}} " class="rounded-circle avatar-xs" alt="profile" width="100" height="100" /></td>
										<td>
											<img src="{{asset('public/images/'.$vec->group_image)}} " class="rounded-circle avatar-xs" alt="profile" width="100" height="100" />
										</td>
										<td>
											<a type="button" class="btn btn-icon btn-light btn-hover-primary btn-sm detail_view_button" data-toggle="modal" data-target="#exampleModalCenter"  data-vec_id="{{$vec->id}}" data-meeting="{{$vec->meeting}}" data-meeting_place="{{$vec->meeting_place}}" data-meeting_date="{{$vec->meeting_date}}" data-proceeding="{{$vec->proceeding}}" data-present_member="{{$vec->present_member}}" data-absent_member="{{$vec->absent_member}}"	data-att_sheet_image="{{$vec->att_sheet_image}}" data-group_image="{{$vec->group_image}}">
										        <i class="fa fa-eye text-success"></i>
									      </a>

											<a href="{{route('vecs.edit',$vec->id)}}" class="btn btn-icon btn-light btn-hover-primary btn-sm" >
												<i class="fa fa-edit text-success" aria-hidden="true"></i>
											</a>
											<form method="post" action='{{route("vecs.destroy",$vec->id) }}' class="">
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

<!-- Modal-->
<div class="modal fade" id="exampleModalCenter" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Village Education Council Details</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i aria-hidden="true" class="ki ki-close"></i>
					</button>
				</div>
                <div class="modal-body">
                    <table cellpadding="5" cellmargin="5">
                        
                        <tr> 
                        	<th> Assesment Title </th><td> : <span class="m_meeting"> </span>     </td>
                          </tr>
                        <tr> 
                        	<th> Meeting Date </th><td> : <span class="m_meeting_date"> </span>   </td>
                        </tr>
                        <tr> 
                        	<th> Meeting Place </th><td> : <span class="m_meeting_place"> </span>   </td>
                        </tr>
                        <tr> 
                        	<th> Present Member</th><td> : <span class="m_absent_member"> </span>   </td>
                        </tr>
                        <tr> 
                        	<th>present Member</th><td> : <span class="m_present_member"> </span>   </td>
                        </tr>
                        <tr> <th> Att Sheet Image </th><td> : <span class="m_att_sheet_image"> </span>     </td>  </tr>
                        <tr> <th>Group Image</th><td> : <span class="m_group_image"> </span>
                             </td>  </tr>
                        <!-- <tr> <th> Due Date </th><td> : <span class="m_due_date"> </span>     </td>  </tr> -->
                        
                    </table>
                    <br>
                    <br>
                    <br>
                    <br>

                </div>
            </div>
    </div>
</div>
@stop

@push('script')


<script >
	
	$(document).ready(function(){
           
              // alert('okk');
            $(document).on('click','.detail_view_button',function(){

               var ss=$('.m_meeting').text($(this).data('meeting'));
               // console.log(ss);
               $('.m_meeting_date').text($(this).data('meeting_date'));
               $('.m_meeting_place').text($(this).data('meeting_place'));
               $('.m_absent_member').text($(this).data('absent_member'));
               $('.m_present_member').text($(this).data('present_member'));
               $('.m_att_sheet_image').text($(this).data('att_sheet_image'));
               $('.m_group_image').text($(this).data('group_image'));
               // var row_status=$(this).data('company_status');
               
            });
        });


	var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>




@endpush



