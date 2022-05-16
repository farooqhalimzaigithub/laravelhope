@extends('layouts.main')
@section('content')
<div class="d-flex flex-column-fluid">
  <!--begin::Container-->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 card-header">
        <!--begin::Card-->
        <!-- <div class="card card-custom gutter-b example example-compact" style="border : 1px solid yellow;"> -->
          <div class="">
            <h2 class="card-title col-lg-12" style="color: white; background: #3b96eb; height: 50px; text-align: center; padding-top: 10px;">School Info</h2>
            <!-- <div class="card-toolbar"> -->
            <!--   <div class="example-tools justify-content-center">
                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
              </div> -->
            <!-- </div> -->
          </div>
         
            <form action="{{url('schoolUpdateMethod')}}" method="post">
            @csrf
              <!-- <h4 class="mb-8 font-weight-bold text-dark">Module Details</h4> -->
               <!-- <input type="hidden" name="school_id" value="{{ isset($school) ? $school->id : '' }}"> -->
                  <input type="hidden" name="school_id" value="{{$school->id}}">
                <div class="row">

               
               <div class="form-group col-lg-3">
                <label for="inputState">District <span class="text-danger">*</span></label>
                <select class="form-control" name="district_id">
                  @foreach($districts as  $district )
                  @if($district->id==$school->district_id )
                   <option value="{{$district->id}}" selected="">{{$district->district_name}}</option>
                  @endif
                  @endforeach
                </select>
              </div>


               <div class="form-group col-lg-3">
                <label for="inputState">NA <span class="text-danger">*</span></label>
                <select class="form-control" name="na_id">
                  @foreach($nas as  $na )
                  @if($na->id==$school->na_id )
                   <option value="{{$na->id}}" selected="">{{$na->na_name}}</option>
                   @else
                     <option value="{{$na->id}}" >{{$na->na_name}}</option>
                  @endif
                  @endforeach
                </select>
              </div>

               <div class="form-group col-lg-3">
                <label for="inputState">PK <span class="text-danger">*</span></label>
                <select class="form-control" name="pk_id">
                  @foreach($pks as  $pk )
                  @if($pk->id==$school->pk_id )
                   <option value="{{$pk->id}}" selected="">{{$pk->pk_name}}</option>
                   @else
                    <option value="{{$pk->id}}" >{{$pk->pk_name}}</option>
                  @endif
                  @endforeach
                </select>
              </div>
               <div class="form-group col-lg-3">
                <label for="inputState">Tehsil  <span class="text-danger">*</span></label>
                <select class="form-control tehsil_id" id="tehsil_id" name="tehsil_id">
                  @foreach($tehsils as  $tehsil )
                  @if($tehsil->id==$school->tehsil_id )
                   <option value="{{$tehsil->id}}" selected="">{{$tehsil->tehsil_name}}</option>
                   @else
                    <option value="{{$tehsil->id}}" >{{$tehsil->tehsil_name}}</option>
                  @endif
                  @endforeach
                </select>
              </div>
              
            </div>
          

            <div class="row">
               <div class="form-group col-lg-3">
                <label for="inputState">UC <span class="text-danger">*</span></label>
                <select class="form-control uc_id" name="uc_id" id="uc_id" >
                  @foreach($ucs as  $uc )
                  @if($uc->id==$school->uc_id )
                   <option value="{{$uc->id}}" selected="">{{$uc->uc_name}}</option>
                   @else
                     <option value="{{$uc->id}}" >{{$uc->uc_name}}</option>
                  @endif
                  @endforeach
                </select>
              </div>
                <div class="form-group col-lg-3">
              <label for="inputState">Village Council <span class="text-danger">*</span></label>
               <select class="form-control  vc_id"    name="vc_id" id="vc_id">
                   @foreach($vcs as  $vc )
                  @if($vc->id==$school->vc_id )
                   <option value="{{$vc->id}}" selected="">{{$vc->vc_name}}</option>
                   @else
                     <option value="{{$vc->id}}" >{{$vc->vc_name}}</option>
                  @endif
                  @endforeach
                    
                      </select>
              </div>
              <div class="form-group col-lg-3">
              <label for="inputState">Village <span class="text-danger">*</span></label>
                <input type="text" name="village" class="form-control" value="{{ isset($school) ? $school->village : '' }}" >
              </div>
               <div class="form-group col-lg-3">
              <label for="inputState">Mohallah <span class="text-danger">*</span></label>
                <input type="text" name="mohallah" class="form-control" value="{{ isset($school) ? $school->mohallah : '' }}" >
              </div>
              </div>
               <div class="row">
              
              <div class="form-group col-lg-3">
              <label for="inputState">latitude <span class="text-danger">*</span></label>
                <input type="text" name="lat" class="form-control" value="{{ isset($school) ? $school->lat : '' }}" >
              </div>
               <div class="form-group col-lg-3">
              <label for="inputState">langitude <span class="text-danger">*</span></label>
                <input type="text" name="lng" class="form-control" value="{{ isset($school) ? $school->lng : '' }}" >
              </div>
              <div class="form-group col-lg-3">
                <label for="inputState">Level  <span class="text-danger">*</span></label>
                <select class="form-control" name="level_id">
                  @foreach($sLevels as  $level )
                  @if($level->id==$school->level_id )
                   <option value="{{$level->id}}" selected="level_id">{{$level->name}}</option>
                  @endif
                  @endforeach
                </select>
              </div>
              <div class="form-group col-lg-3">
                <label for="inputState">Transport Required  <span class="text-danger">*</span></label>
                <select class="form-control" name="transport_id">
                  @foreach($transports as  $transport )
                  @if($transport->id==$school->transport_id )
                   <option value="{{$transport->id}}" selected="">{{$transport->name}}</option>
                  @endif
                  @endforeach
                </select>
              </div>
              </div>
               <div class="row">
               <div class="form-group col-lg-3">
              <label for="inputState">School Name <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control" value="{{ isset($school) ? $school->name : '' }}" >
              </div>
              <div class="form-group col-lg-3">
              <label for="inputState">School Code <span class="text-danger">*</span></label>
                <input type="text" name="school_code" class="form-control" value="{{ isset($school) ? $school->school_code : '' }}" >
              </div>
               <div class="form-group col-lg-3">
              <label for="inputState">Land Makr <span class="text-danger">*</span></label>
                <input type="text" name="land_mark" class="form-control" value="{{ isset($school) ? $school->land_mark : '' }}" >
              </div>
              </div>
              <div class="row">

          <div class="col-xl-2"><b>CS Type <span class="text-danger">*</span></b></div>
            <div class="col-xl-2">
              <label class="">
                <input type="radio" class="" name="school_type" value="GCS" {{ ($school->school_type=="GCS")? "checked" : "" }}> GCS
              </label>
            </div>
            
            <div class="col-xl-2">
              <label class="">
                <input type="radio" class="" name="school_type"  value="CFS" {{ ($school->school_type=="CFS")? "checked" : "" }}> CFS
              </label>
            </div>


            <div class="col-xl-2">
              <label class="">
                <input type="radio" class="" name="school_type" value="CBEC" {{ ($school->school_type=="CBEC")? "checked" : "" }}> CBEC
              </label>
            </div>


            <div class="col-xl-2">
              <label class="">
                <input type="radio" class="" name="school_type" value="BECS" {{ ($school->school_type=="BECS")? "checked" : "" }}> BECS
              </label>
            </div>
 

            <div class="col-xl-2">
              <label class="">
                <input type="radio" class="" name="school_type" {{ ($school->school_type=="Other")? "checked" : "" }}> Other
              </label>
            </div>
        </div>
              <div class="row">

          <div class="col-xl-2"><b>Area</b> <span class="text-danger">*</span></div>
            <div class="col-xl-2">
              <label class="">
                <input type="radio" class="" name="area" checked value="urban" {{ ($school->area=="urban")? "checked" : "" }}> Urban
              </label>
            </div>
            
            <div class="col-xl-2">
              <label class="">
                <input type="radio" class="" name="area" value="semi_urban" {{ ($school->area=="semi_urban")? "checked" : "" }}> Semi Urban
              </label>
            </div>


            <div class="col-xl-2">
              <label class="">
                <input type="radio" class="" name="area" value="rular_plain" {{ ($school->area=="rular_plain")? "checked" : "" }}> Rular Plain
              </label>
            </div>


            <div class="col-xl-2">
              <label class="">
                <input type="radio" class="" name="area" value="rular_hilly" {{ ($school->area=="rular_hilly")? "checked" : "" }}> Rular Hilly
              </label>
            </div>
 

            
        </div>
          <div class="row mt-2">

        <div class="col-xl-2"><b>Status</b> <span class="text-danger">*</span></div>
          <div class="col-xl-2">
            <label class="">
              <input type="radio" class="" name="status"  value="1" {{ ($school->status==1)? "checked" : "" }}> Functional
            </label>
          </div>
          
          <div class="col-xl-2">
            <label class="">
              <input type="radio" class="" name="status" value="0" {{ ($school->status==0)? "checked" : "" }}> Non-functional
            </label>
          </div>
        </div>
        <div class="row mt-2">

          <div class="col-xl-2"><b>Building Ownership</b> <span class="text-danger">*</span></div>
            <div class="col-xl-2">
              <label class="">
                <input type="radio" class="" name="building_ownership" checked value="0" {{ ($school->building_ownership==0)? "checked" : "" }}> Govt
              </label>
            </div>
            
            <div class="col-xl-2">
              <label class="">
                <input type="radio" class="" name="building_ownership" value="1" {{ ($school->building_ownership==1)? "checked" : "" }}> VEC
              </label>
            </div>


            <div class="col-xl-2">
              <label class="">
                <input type="radio" class="" name="building_ownership" value="2" {{ ($school->building_ownership==2)? "checked" : "" }}> Communal
              </label>
            </div>


            <div class="col-xl-2">
              <label class="">
                <input type="radio" class="" name="building_ownership" value="3" {{ ($school->building_ownership==3)? "checked" : "" }}> Personal
              </label>
            </div>
        </div>

        <div class="row mt-2">
          <div class="col-xl-2"><b>Gender</b> <span class="text-danger">*</span></div>
          <div class="col-xl-2">
            <label class="">
              <input type="radio" class="" name="gender"  value="0" {{ ($school->gender==0)? "checked" : "" }}> Boys
            </label>
          </div>
          <div class="col-xl-2">
            <label class="">
              <input type="radio" class="" name="gender" value="1" {{ ($school->gender==1)? "checked" : "" }}> Girls
            </label>
          </div>
          <div class="col-xl-2">
            <label class="">
              <input type="radio" class="" name="gender" value="2" {{ ($school->gender==2)? "checked" : "" }} > Co-education
            </label>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-xl-2"><b>Building Structure</b> <span class="text-danger">*</span></div>
          <div class="col-xl-2">
            <label class="">
              <input type="radio" class="" name="building_structure"  value="Pakka" {{ ($school->building_structure=="Pakka")? "checked" : "" }}> Pakka
            </label>
          </div>
          <div class="col-xl-2">
            <label class="">
              <input type="radio" class="" name="building_structure" value="Kacha" {{ ($school->building_structure=="Kacha")? "checked" : "" }}> Kacha
            </label>
          </div>
          <div class="col-xl-2">
            <label class="">
              <input type="radio" class="" name="building_structure" value="Mixed" {{ ($school->building_structure=="Mixed")? "checked" : "" }}> Mixed
            </label>
          </div>
          <div class="col-xl-2">
            <label class="">
              <input type="radio" class="" name="building_structure" value="Open-air-partial" {{ ($school->building_structure=="Open-air-partial")? "checked" : "" }}> Open air (Partial)
            </label>
          </div>

          <div class="col-xl-2">
            <label class="">
              <input type="radio" class="" name="building_structure" value="Open-air-complete" {{ ($school->building_structure=="Open-air-complete")? "checked" : "" }}> Open air (Complete)
            </label>
          </div>
        </div>

             
                        
          
            
            <!-- </div> -->

            <div class="d-flex justify-content-between  mt-0 pt-10 pb-10">
            <!-- <div class="mr-3">
              <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Previous</button>
            </div> -->
            <div>
                       @if(isset($school))
                            <button class="btn btn-primary mg-r-5">Update</button>
                            <!-- <a href="{{ url()->previous() }}" class="btn btn-danger">Go Back</a> -->
                        @else
                            <button class="btn btn-primary mg-r-5">Submit</button>
                        @endif

             <!--  <button type="submit" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4">Submit</button> -->
              
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
  // ======================for uc=======================
$(document).on('change', '.tehsil_id', function (){
            var tehsil_id=$(this).val();
  // alert(tehsil_id);
  console.log(tehsil_id);
  
  $.ajax({
    type:'get',
    url: "{{ route('ucFind')}}",
    data:{'tehsil_id':tehsil_id},
    datatype:'json',
    success:function(data)
    {
      console.log(data);
        var tr=$(this).parent().parent();
          var op = "<option value=''>Choose</option>";
          $.each(data, function(k,val)
            {
             if (val.id!=null && val.id!="") {
                op +="<option value='"+val.id+"'>"+val.uc_name+"</option>";
            }  
            });  
             $('#uc_id').html(" ");
             $('#uc_id').append(op);
    },
         });
}); 

  // ======================for VC=======================
$(document).on('change', '.uc_id', function (){
            var uc_id=$(this).val();
  // alert(tehsil_id);
  console.log(uc_id);
  
  $.ajax({
    type:'get',
    url: "{{ route('vcFind')}}",
    data:{'uc_id':uc_id},
    datatype:'json',
    success:function(data)
    {
      console.log(data);
        var tr=$(this).parent().parent();
          var op = "<option value=''>Choose</option>";
          $.each(data, function(k,val)
            {
             if (val.id!=null && val.id!="") {
                op +="<option value='"+val.id+"'>"+val.vc_name+"</option>";
            }  
            });  
             $('#vc_id').html(" ");
             $('#vc_id').append(op);
    },
         });
});  
</script>
@endpush
