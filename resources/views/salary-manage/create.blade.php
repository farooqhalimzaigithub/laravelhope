@extends('layouts.main')
@section('content')
<!-- for datatables -->

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
  <!--begin::Subheader-->
  <div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
    <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
      
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
                          <span class="card-label font-weight-bolder text-dark">All Details</span>
                          <!-- <span class="text-muted mt-1 font-weight-bold font-size-sm">Manage over 1600 staff</span> -->
                        </h3>
                        <div class="card-toolbar">
                          <div class="dropdown dropdown-inline">
                            <!--begin::Trigger Modal-->
                            <!-- <a class="nav-link py-2 px-4 btn btn-primary"  href="{{route('staffs.create')}}"><i class="ki ki-plus text-light"></i>  Add New</a> -->
                            
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
                              <th>staff Name</th>
                              <th>Salary</th>
                              <th>Balance</th>
                              <th>Action</th>
                              
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($staffs as $staff)
                            <tr data-id="{{$staff->id}}">
                              <td>{{$loop->iteration}}</td>
                              <td>{{$staff->first_name}}</td>
                              <td>{{$staff->basic_salery}}</td>
                              <td>{{$staff->balance}}</td>
                              <td><a type="button" class="btn btn-icon btn-light btn-hover-primary btn-sm showSalaryDetail" data-toggle="modal" data-target="#myModal"  data-basic_salery="{{$staff->basic_salery}}" data-balance="{{$staff->balance}}" data-staff_name="{{$staff->first_name}}" data-staff_id="{{$staff->id}}">
                    <i class="fa fa-eye text-success"></i>
                  </a>
                  <a href="{{route('staffs.edit',$staff->id)}}" class="btn btn-icon btn-light btn-hover-primary btn-sm" >
                    <i class="fa fa-edit text-success" aria-hidden="true"></i>
                  </a>
                  <form method="post" action='{{route("staffs.destroy",$staff->id) }}' class="">
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


          <div class="modal fade"   id="salaryFormSubmit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="salaryFormSubmitLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body ">
                <form method="post" action="javascript:void(0)" id="add_form">
                    <input type="hidden" name="staff_id" class="m_staff_id">
                <div class="d-flex justify-content-between align-items-center"> <span class="text-uppercase">Pay Now</span> <i class="fa fa-close close" data-dismiss="modal"></i> </div>
                <div class="row mt-3">
                    <div class="col-md-6">

                        <div class="d-flex flex-column"> <small>Staff Name</small> <span class="font-weight-bold m_staff_name" ></span> </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex flex-column"> <small>Payment Date</small> <span class="font-weight-bolder"><?php echo date('Y-m-d'); ?></span> 
                            <input type="hidden" name="att_date" value="<?php echo date('Y-m-d'); ?>">
                        </div>
                    </div>
                </div>
                
                <div class="mt-3"> <small> Salary </small>
                    <div class="row mt-1">
                        <div class="col-md-12 text-center">
                            <div class="form-check"> <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked> <label class="form-check-label" for="flexRadioDefault1"> Monthly </label> </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="mt-3"> <label class="radio"> <input type="radio" name="week" value="1" checked> <span>1st Week</span> </label> <label class="radio"> <input type="radio" name="week" value="2"> <span>2nd Week</span> </label> <label class="radio"> <input type="radio" name="week" value="3"> <span>3rd Week</span> </label> <label class="radio"> <input type="radio" name="week" value="4"> <span>4th Week</span> </label> </div> -->
                <div class="mt-3 text-center fee align-items-center">
                    <h3 class="mb-0 font-weight-light total"></h3>
                </div>
                <!-- <div class="mt-3"> <small>Payment Method</small>
                    <div class="d-flex flex-row"> <label class="radio1"> <input type="radio" name="payment" value="bank"> <span><i class="fa fa-bank"></i> BANK TRANSFER</span> </label> <label class="radio1"> <input type="radio" name="payment" value="card"> <span><i class="fa fa-credit-card-alt"></i> CREDIT CARD</span> </label> </div>
                </div> -->
                <div class="mt-3 mr-2">
                    <div class="row g-2">
                        <div class="col-md-6">
                             <input type="hidden" class="m_id" name="id" id="id">
                            <div class="inputbox"> <small>Balance</small> <input type="text" class="form-control m_balance" name="balance" id="model_balance"  readonly="" > </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputbox"> <small>Total</small> <input type="text" class="form-control m_basic_salery" name="basic_salery" id="model_basic_salery" readonly=""> </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 mr-2">
                    <div class="row g-2">
                        <div class="col-md-6">
                            <div class="inputbox"> <small>Received Amount</small> <input type="text" class="form-control m_received_amount" id="model_received_amount" name="received_amount" autofocus=""> </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputbox"> <small>Remaining Amount</small> <input type="text" class="form-control m_remaining_amount" name="remaining_amount" id="model_remaining_amount" readonly=""> </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputbox"> <small>Amount Total</small> <input type="text" id="model_amount" class="form-control model_amount" name="amount"  readonly=""> </div>
                        </div>
                        </div>
                        <div class="row g-2">
                        
                       </div>
                    
                </div>
                <!-- <div class="mt-3 mr-2">
                    <div class="row g-2">
                        <div class="col-md-6">
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <div class="inputbox"> <small>Date</small> <input type="text" class="form-control" name=""> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="inputbox"> <small>Month</small> <input type="text" class="form-control" name=""> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputbox"> <small>CVV</small> <input type="text" class="form-control" name=""> </div>
                        </div>
                    </div>
                </div> -->
                <hr class="mr-2 mt-4">
                <div class="mt-3 mr-2 d-flex justify-content-end align-items-center"> <a href="#" class="button btn btn-danger" data-dismiss="modal" aria-label="Close">Cancel</a> <button class=" ml-2 btn btn-primary btn_paid" id="send_form">PAY NOW</button> </div>
                   </form>
            </div>
        </div>
    </div>
</div>
          @endsection
          @push('script')
          <script >
             $(document).ready(function(){
            $(document).on('click','.showSalaryDetail',function(e){
              e.preventDefault();
               var basic_salery=$(this).data('basic_salery');
               var balance= $(this).data('balance');
               // alert(balance);
               $('.m_balance').val($(this).data('balance'));
               $('.m_basic_salery').val($(this).data('basic_salery'));
               $('.m_staff_name').val($(this).data('staff_name'));
               $('.m_staff_id').val($(this).data('staff_id'));
              $("#salaryFormSubmit").modal('show');
               


              
            });
        });
$(document).ready(function(){
$('.btn_paid').click(function(e){
   e.preventDefault();
   /*Ajax Request Header setup*/
   $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
   // Get form
        var form = $('#add_form')[0];
       // Create an FormData object 
        var data = new FormData(form);
   // $('#send_form').html('Sending..');
   // var data = new data(document.getElementById("add_form"));
    console.log(data);
   /* Submit form data using ajax*/
   $.ajax({
      url: "{{ url('paidSalaryPayment')}}",
      type: 'post',
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      success: function(response){
        console.log(response);
        $('#salaryFormSubmit').modal('hide');
      }
  });
   });
}); 

 $(document).on('keyup', '#model_received_amount', function () 
        {
                 var  received_amount=$(this).val();
                var  model_basic_salery=parseInt($('#model_basic_salery').val());
                  var remaining_amount=(model_basic_salery - received_amount);
                 // alert(remaining_amount);
                  $('#model_remaining_amount').val(remaining_amount);
                  // var remaining_amount=(model_basic_salery - received_amount);
                  $('#model_amount').val(model_basic_salery);
                // var  total_amount=parseInt(total_amount1);
            if (received_amount <= model_basic_salery){
            }else{
              alert('Paid Amount Must Be Less Then Total');
               $('#model_remaining_amount').val('');
               $('#model_received_amount').val('')
               // $('#model_balance').val('')
            }
         
        });
          </script>
      
          @endpush



