@extends('layouts.main')
@section('content')
<style type="text/css">
  input{
    border: none;
  }
</style>
<div class="modal fade bd-example-modal-lg" tabindex="-1"  id="myModal" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Student Details</h4>
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
      <input class="form-control" id="name">
    </div>
    <div class="form-group col-md-2">
      <label for="inputCity">Cnic#</label>
      <input type="text" class="form-control" id="form_b">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">DOB</label>
      <input type="text" class="form-control" id="dob">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Father Name</label>
      <input type="text" class="form-control" id="father_name">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">F/Occupation</label>
      <input type="text" class="form-control" id="father_occupation">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Father CNIC#</label>
      <input type="text" class="form-control" id="father_cnic_no">
    </div>
  </div>
  <div class="form-row">
    
    <div class="form-group col-md-2">
      <label for="inputState">Class</label>
      <input type="text" class="form-control" id="current_class_id">
    </div>
    <div class="form-group col-md-2">
      <label for="inputCity">Address</label>
      <input type="text" class="form-control" id="address">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Blood</label>
      <input type="text" class="form-control" id="blood_id">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Contact</label>
      <input type="text" class="form-control" id="contact_no">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Admission Date</label>
      <input type="text" class="form-control" id="date_of_admission">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip"> Father Alive</label>
      <input type="text" class="form-control" id="father_alive">
    </div>
  </div>
   <div class="form-row">
    
    <div class="form-group col-md-2">
      <label for="inputState">Gender</label>
      <input type="text" class="form-control" id="gender">
    </div>
    <div class="form-group col-md-2">
      <label for="inputCity">Guardian Cnic#</label>
      <input type="text" class="form-control" id="guardian_cnic_no">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Guardian Name</label>
      <input type="text" class="form-control" id="guardian_name">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Village</label>
      <input type="text" class="form-control" id="village">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Previous School</label>
      <input type="text" class="form-control" id="previous_school">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip"> Remark</label>
      <input type="text" class="form-control" id="remark">
    </div>
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


<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
<!-- The Modal -->

<!--begin::Subheader-->
<div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
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
    <!--begin::Content-->
    <div class="flex-row-fluid ml-lg-8">
      <!--begin::Card-->
      <div class="card card-custom">
        <!--begin::Header-->
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
          <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">Students</span>
            <!-- <span class="text-muted mt-1 font-weight-bold font-size-sm">Manage over 1600 Student</span> -->
          </h3>
          <div class="card-toolbar">
            <div class="dropdown dropdown-inline"  >
              <!--begin::Trigger Modal-->
              <a class="nav-link py-2 px-4 btn btn-primary"  href="{{route('students.create')}}"><i class="ki ki-plus text-light"></i>  Add New</a>
            <!--end::Trigger Modal--> 
            </div>
          </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body">
          <!--begin: Search Form-->
          <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>#</th>
                <th>Profile Picture</th>
                <th> Name</th>
                <th> Date Of Birth</th>
                <th>CNIC</th>
                <th>Father Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($students as $student)
              <tr data-id='{{$student->id}}'>
                <input type="hidden" name="id" id="id" value="{{$student->id}}">
                <td>{{$loop->iteration}}</td>
                <td><img src="{{asset('public/images/'.$student->image)}} " class="rounded-circle avatar-xs" alt="profile" width="100" height="100" /></td>
                <td>{{$student->name}}</td>
                <td>{{$student->dob}}</td>
                <td>{{$student->form_b}}</td>
                <td>{{$student->father_name}}</td>
                <td>
                  <a type="button" class="btn btn-icon btn-light btn-hover-primary btn-sm show_detail" >
                    <i class="fa fa-eye text-success"></i>
                  </a>
                  <a href="{{route('students.edit',$student->id)}}" class="btn btn-icon btn-light btn-hover-primary btn-sm" >
                    <i class="fa fa-edit text-success" aria-hidden="true"></i>
                  </a>
                  <form method="post" action='{{route("students.destroy",$student->id) }}' class="">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-icon btn-light btn-hover-danger btn-sm " style=" border:none; text-align: center; "><i class="fa fa-trash text-danger  "></i></button>
                  </form></td>
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

<script >
  var counter=0;
    $(document).on('click', '.show_detail', function () {
             var tr=$(this).closest("tr"); 
             $('#myModal').modal('show');
           var student_id = $(this).closest("tr").find("#id").val();
              console.log(student_id);
  $.ajax({
         type:'get',
         url: 'show_detail_of_student',
         data:{'student_id':student_id},
        success:function(data){
          console.log(data);
               $('#name').val(data.name);
               $('#form_b').val(data.form_b);
               $('#dob').val(data.dob);
               $('#father_name').val(data.father_name);
               $('#father_occupation').val(data.father_occupation);
               $('#father_cnic_no').val(data.father_cnic_no);
               $('#registration_no').val(data.registration_no);
               $('#religion').val(data.religion);
               $('#current_class_id').val(data.current_class_id);

               $('#address').val(data.address);
               $('#contact_no').val(data.contact_no);
               $('#father_alive').val(data.father_alive);
               $('#gender').val(data.gender);
               $('#guardian_cnic_no').val(data.guardian_cnic_no);
               $('#guardian_name').val(data.guardian_name);
               $('#remark').val(data.remark);
               $('#village').val(data.village);
               $('#blood_id').val(data.blood_id);
               $('#date_of_admission').val(data.date_of_admission);
               $('#gender').val(data.gender);
               $('#previous_school').val(data.previous_school);
                
        },
         error:function(){
        }
   });
  });  
</script>
@endpush



