@extends('layouts.main')
@section('content')
<div class="d-flex flex-column-fluid">
  <!--begin::Container-->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 card-header">
        <!--begin::Card-->
          <div class="">
            <h2 class="card-title">Enrollment Info</h2>
          </div>

            <form action="{{route('enrollments.store')}}" method="post">
            @csrf
                <div class="row">
              <div class="form-group col-lg-3">
                <label for="inputCity " style="margin-top: 10px; font-size: 16px;" class="font-weight-bold"> Class </label>    
            </div>
                <div class="form-group col-lg-3">
                  <label for="inputState" class="font-weight-bold" style="margin-top: 10px; font-size: 16px;" > Boy</label>
                </div>
               <div class="form-group col-lg-3">
                <label for="inputState" class="font-weight-bold" style="margin-top: 10px; font-size: 16px;"> Girl</label>
              </div>
              <div class="form-group col-lg-3">
                <label for="inputState" class="font-weight-bold" style="margin-top: 10px; font-size: 16px;"> Total</label>
              </div>
            </div>
              
            @foreach($classes as $key => $class)
            <div class="row">
              <div class="form-group col-lg-3">
                <label for="class_name_{{$class->id}}"  style="margin-top: 10px; font-size: 16px;"  class="font-weight-bold">{{$class->name}}<input placeholder="0" type="hidden" name="class_id[]" value="{{$class->id}}" id="class_name_{{$class->id}}"></label>
                
              </div>
              <div class="form-group col-lg-3">
                <input type="hidden" name="id[{{$key}}]" value="{{ $enrollment[$key]->id ?? '' }}">
                <input placeholder="0" type="number"  name="boy[{{$key}}]" value="{{ $enrollment[$key]->boy ?? '0' }}" id="boy_{{$class->id}}" class="form-control" onkeyup="calculate_total('boy_{{$class->id}}', 'girl_{{$class->id}}', 'total_{{$class->id}}')">
              </div>
               <div class="form-group col-lg-3">
               
                <input placeholder="0" type="number"  name="girl[{{$key}}]" id="girl_{{$class->id}}" value="{{ $enrollment[$key]->girl ?? '0' }}" class="form-control" onkeyup="calculate_total('boy_{{$class->id}}', 'girl_{{$class->id}}', 'total_{{$class->id}}')">
              </div>
               <div class="form-group col-lg-3">
                
                <input placeholder="0" type="text"  name="total[{{$key}}]" value="{{ $enrollment[$key]->total ?? '0' }}" id="total_{{$class->id}}"  class="form-control" readonly>
              </div>
            </div>
            @endforeach
              <div class="row">
              <div class="form-group col-lg-3">
                <label for="inputCity"  style="margin-top: 10px; font-size: 16px;" class="font-weight-bold" > AFGHAN </label>
                
            </div>

              <div class="form-group col-lg-3">
             
                <input type="hidden" name="afghan_id" value="{{ isset($enrollment_summary_meta) ? $enrollment_summary_meta->id : '' }}">
                <input placeholder="0" type="number"  name="afghan_boys"  value="{{ ($enrollment_summary_meta !== null) ? $enrollment_summary_meta->afghan_boys : '' }}"  id="afghan_boys" class="form-control" onkeyup="calculate_total('afghan_boys', 'afghan_girls', 'afghan_total')">
              </div>
               <div class="form-group col-lg-3">
                <input placeholder="0" type="number"  name="afghan_girls" value="{{ ($enrollment_summary_meta !== null) ? $enrollment_summary_meta->afghan_girls : '' }}" id="afghan_girls"  class="form-control" onkeyup="calculate_total('afghan_boys', 'afghan_girls', 'afghan_total')">
              </div>
               <div class="form-group col-lg-3">
                <input placeholder="0" type="number" name="afghan_total" value="{{ ($enrollment_summary_meta !== null) ? $enrollment_summary_meta->afghan_total : '' }}" id="afghan_total"  class="form-control" readonly>
              </div>
              
            </div>
            
              <div class="row">
              <div class="form-group col-lg-3">
                <label for="inputCity"  style="margin-top: 10px; font-size: 16px;" class="font-weight-bold" > DISABLE </label>
                
            </div>

              <div class="form-group col-lg-3">
                
                <input placeholder="0"  type="number"  name="disable_boys"  value="{{ ($enrollment_summary_meta !== null) ? $enrollment_summary_meta->disable_boys : '' }}" id="disable_boy" class="form-control" onkeyup="calculate_total('disable_boy', 'disable_girl', 'disable_total')">
              </div>
               <div class="form-group col-lg-3">
               
                <input placeholder="0" type="number"  name="disable_girls" value="{{ ($enrollment_summary_meta !== null) ? $enrollment_summary_meta->disable_girls : '' }}" id="disable_girl"  class="form-control" onkeyup="calculate_total('disable_boy', 'disable_girl', 'disable_total')">
              </div>
               <div class="form-group col-lg-3">
               
                <input placeholder="0" type="number" name="disable_total" value="{{ ($enrollment_summary_meta !== null) ? $enrollment_summary_meta->disable_total : '' }}" id="disable_total"  class="form-control" readonly>
              </div>
              
            </div>
            
            <div class="row">
              <div class="form-group col-lg-3">
                <label for="inputCity"  style="margin-top: 10px; font-size: 16px;" class="font-weight-bold" > TOTAL <input placeholder="0" type="hidden" name="total[]"  ></label>
                
            </div>
              <div class="form-group col-lg-3">
                @php
                  $total_boys = isset($enrollment_summary_meta) ? $enrollment_summary_meta->total_boys : 0;
                  $total_girls = isset($enrollment_summary_meta) ? $enrollment_summary_meta->total_girls : 0;
                  
                  @endphp
                <input readonly type="number"   name="total_boys" value="{{ $total_boys }}"  id="total_boy" class="form-control ">
              </div>
               <div class="form-group col-lg-3">
               
                <input readonly type="number"  name="total_girls" value="{{ $total_girls }}" id="total_girls"  class="form-control ">
              </div>
               <div class="form-group col-lg-3">
                
                <input readonly type="text" name="grand_total" id="grand_total" value="{{ isset($enrollment_summary_meta) ? $enrollment_summary_meta->grand_total : 0 }}"  class="form-control ">
              </div>
              
            </div>
          
           <div class="d-flex justify-content-between  mt-0 pt-10 pb-10">
            <div>
                       @if(isset($enrollment))
                            <button class="btn btn-success mg-r-5">Update</button>
                            <a href="{{ url()->previous() }}" class="btn btn-danger">Go Back</a>
                        @else
                            <button class="btn btn-primary mg-r-5">Submit</button>
                        @endif
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
@push('script')
<script >
  function calculate_total(boys_id, girls_id, total_id) {
    var boys = $(`#${boys_id}`).val().trim();
    var girls = $(`#${girls_id}`).val().trim();
    $(`#${total_id}`).val('');
    if(boys !== ''){
      $(`#${total_id}`).val(parseInt(boys));
    }
    if(girls !== ''){
      $(`#${total_id}`).val(parseInt(girls));
    }
    if(boys !== '' && girls !== ''){
      var total = parseInt(boys) + parseInt(girls);
      $(`#${total_id}`).val(total);
    }
    grand_total();
  }

  function grand_total() {
    var boys_total = girls_total = 0;
    for (let index = 1; index < 16; index++) {
      var boys = $(`#boy_${index}`).val().trim();
      var girls = $(`#girl_${index}`).val().trim();
      if(boys !== ''){
        boys_total = parseInt(boys) + boys_total;
      }
      if(girls !== ''){
        girls_total = parseInt(girls) + girls_total;
      }
    }

    var afghan_boys = $("#afghan_boys").val().trim();
    var afghan_girls = $("#afghan_girls").val().trim();
    if(afghan_boys !== ''){
        boys_total = parseInt(afghan_boys) + boys_total;
    }
    if(afghan_girls !== ''){
        girls_total = parseInt(afghan_girls) + girls_total;
    }

    var disable_boy = $("#disable_boy").val().trim();
    var disable_girl = $("#disable_girl").val().trim();

    if(disable_boy !== ''){
        boys_total = parseInt(disable_boy) + boys_total;
    }
    if(disable_girl !== ''){
        girls_total = parseInt(disable_girl) + girls_total;
    }


    if(boys_total !== '' || boys_total !== NAN){
      $("#total_boy").val(boys_total);
      $("#grand_total").val(boys_total)
    }
    if(girls_total !== '' || girls_total !== NAN){
      $("#total_girls").val(girls_total);
      $("#grand_total").val(girls_total)
    }
    if( (boys_total !== '' || boys_total !== NAN) && (girls_total !== '' || girls_total !== NAN) ){
      var total = parseInt(boys_total) + parseInt(girls_total);
      $(`#grand_total`).val(total);
    }
    
    
  }

</script>
@endpush
