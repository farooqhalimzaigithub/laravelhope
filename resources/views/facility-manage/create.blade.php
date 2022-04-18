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
            <h2 class="card-title col-lg-12" style="color: white; background: #3b96eb; height: 50px; text-align: center; padding-top: 10px;">Facility Info</h2>
            <!-- <div class="card-toolbar"> -->
            <!--   <div class="example-tools justify-content-center">
                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
              </div> -->
            <!-- </div> -->
          </div>
         
            <form action="{{route('facilities.store')}}" method="post">
            @csrf
              <!-- <h4 class="mb-8 font-weight-bold text-dark">Module Details</h4> -->
               <input type="hidden" name="facility_id" value="{{ isset($facility) ? $facility->id : '' }}">
                <div class="row">
              <div class="form-group col-lg-3">
                <label for="inputState">Date Of Establishment</label>
                <input class="form-control" type="date" name="date_of_establishment" value="{{ isset($facility) ? $facility->date_of_establishment : '' }}" >
              </div>
               <div class="form-group col-lg-3">
               <label for="inputState">No Of Room</label>
                <input placeholder="0" type="number"  name="no_of_room" id="no_of_room"  value="{{ isset($facility) ? $facility->no_of_room : '' }}"  class="form-control ">
              </div>
               <div class="form-group col-lg-3">
                <label for="inputState">Physical Status</label>
                <select class="form-control" name="physical_status">
                  @if(isset($facility))
                  @if($facility->physical_status=='seperate')
                  <option value="seperate" selected=""> Seperate</option>
                  <option value="within_home_permises">Within Home Permises</option>
                 
                  @elseif($facility->physical_status=='within_home_permises')
                  <option value="seperate" > Seperate</option>
                  <option value="within_home_permises" selected="">Within Home Permises</option>
                  @endif
                   @else
                    <option value="seperate" > Seperate</option>
                  <option value="within_home_permises" >Within Home Permises</option>
                  @endif
                </select>
              </div>
               <div class="form-group col-lg-3">
                <label for="inputState">Rooms Other Use</label>
                <select class="form-control" name="room_other_use">
                   @if(isset($facility))
                   @if($facility->room_other_use=='yes')
                  <option value="yes" selected=""> Yes</option>
                  <option value="no">No</option>
                  @elseif($facility->room_other_use=='no')
                  <option value="yes" > Yes</option>
                  <option value="no" selected="">No</option>
                  @endif
                  @else
                   <option value="yes" > Yes</option>
                  <option value="no" >No</option>
                  @endif

                </select>
              </div>
            </div>
           <div class="row">
               <div class="form-group col-lg-3">
                <label for="inputState">Boundary Wall</label>
                <select class="form-control" name="boundary_wall">
                   @if(isset($facility))
                   @if($facility->boundary_wall=='yes')
                  <option value="yes" selected=""> Yes</option>
                  <option value="no">No</option>
                  @elseif($facility->boundary_wall=='no')
                  <option value="yes" > Yes</option>
                  <option value="no" selected="">No</option>
                  @endif
                  @else
                   <option value="yes" > Yes</option>
                  <option value="no" >No</option>
                  @endif
                </select>
              </div>
                <div class="form-group col-lg-3">
                <label for="inputState">Extra Space</label>
                <select class="form-control" name="extra_space">
                   @if(isset($facility))
                   @if($facility->extra_space=='yes')
                  <option value="yes" selected=""> Yes</option>
                  <option value="no">No</option>
                  @elseif($facility->extra_space=='no')
                  <option value="yes" > Yes</option>
                  <option value="no" selected="">No</option>
                  @endif
                    @else
                    <option value="yes" > Yes</option>
                  <option value="no" >No</option>
                  @endif
                </select>
              </div>
              
              <div class="form-group col-lg-3">
                <label for="inputState">Ventilation</label>
                <select class="form-control" name="ventilation">
                   @if(isset($facility))
                 @if($facility->ventilation=='yes')
                  <option value="yes" selected=""> Yes</option>
                  <option value="no">No</option>
                  @elseif($facility->ventilation=='no')
                  <option value="yes" > Yes</option>
                  <option value="no" selected="">No</option>
                  @endif
                   @else
                    <option value="yes" > Yes</option>
                  <option value="no" >No</option>
                  @endif
                </select>
              </div> 
              <div class="form-group col-lg-3">
                <label for="inputState">Electricity</label>
                <select class="form-control" name="electricity">
                   @if(isset($facility))
                 @if($facility->electricity=='yes')
                  <option value="yes" selected=""> Yes</option>
                  <option value="no">No</option>
                  @elseif($facility->electricity=='no')
                  <option value="yes" > Yes</option>
                  <option value="no" selected="">No</option>
                  @endif
                   @else
                    <option value="yes" > Yes</option>
                  <option value="no" >No</option>
                  @endif
                </select>
              </div>
             
            </div>

            <div class="row">
               
                <div class="form-group col-lg-3">
                <label for="inputState">Solar</label>
                <select class="form-control" name="solar">

                  @if(isset($facility))
                 @if($facility->solar=='yes')
                  <option value="yes" selected=""> Yes</option>
                  <option value="no">No</option>
                  @elseif($facility->solar=='no')
                  <option value="yes" > Yes</option>
                  <option value="no" selected="">No</option>
                  @endif
                   @else
                    <option value="yes" > Yes</option>
                  <option value="no" >No</option>
                  @endif
                </select>
              </div>
               <div class="form-group col-lg-3">
                <label for="inputState">Light/Bulbs</label>
                <select class="form-control" name="light">
                   @if(isset($facility))
                 @if($facility->light=='yes')
                  <option value="yes" selected=""> Yes</option>
                  <option value="no">No</option>
                  @elseif($facility->light=='no')
                  <option value="yes" > Yes</option>
                  <option value="no" selected="">No</option>
                  @endif
                   @else
                    <option value="yes" > Yes</option>
                  <option value="no" >No</option>
                  @endif
                </select>
              </div> 
              <div class="form-group col-lg-3">
                <label for="inputState">Toilet</label>
                <select class="form-control" name="toilet">
                  @if(isset($facility))
                 @if($facility->toilet=='yes')
                  <option value="yes" selected=""> Yes</option>
                  <option value="no">No</option>
                  @elseif($facility->toilet=='no')
                  <option value="yes" > Yes</option>
                  <option value="no" selected="">No</option>
                  @endif
                   @else
                    <option value="yes" > Yes</option>
                  <option value="no" >No</option>
                  @endif
                </select>
              </div>
              <div class="form-group col-lg-3">
                <label for="inputState">Fans</label>
                <select class="form-control" name="fan">
                  @if(isset($facility))
                 @if($facility->fan=='yes')
                  <option value="yes" selected=""> Yes</option>
                  <option value="no">No</option>
                  @elseif($facility->fan=='no')
                  <option value="yes" > Yes</option>
                  <option value="no" selected="">No</option>
                  @endif
                   @else
                    <option value="yes" > Yes</option>
                  <option value="no" >No</option>
                  @endif
                </select>
              </div>
            </div> 

            <div class="row">
               
                <div class="form-group col-lg-3">
                <label for="inputState">Water Supply</label>
                <select class="form-control" name="water_supply">
                   @if(isset($facility))
                  @if($facility->water_supply=='pipe_scheem')
                   <option value="pipe_scheem" selected=""> Pipe Scheem</option>
                  <option value="dug_well">Dug Well</option>
                  <option value="hand_pump">Hand Pump</option>
                  @elseif($facility->water_supply=='dug_well')
                  <option value="pipe_scheem"> Pipe Scheem</option>
                  <option value="dug_well" selected="">Dug Well</option>
                  <option value="hand_pump">Hand Pump</option>
                     @elseif($facility->water_supply=='hand_pump')
                   <option value="pipe_scheem"> Pipe Scheem</option>
                  <option value="dug_well">Dug Well</option>
                  <option value="hand_pump" selected="">Hand Pump</option>
                 
                  @endif
                   @else
                   <option value="pipe_scheem"> Pipe Scheem</option>
                  <option value="dug_well">Dug Well</option>
                  <option value="hand_pump" >Hand Pump</option>
                  @endif

                </select>
              </div>
               <div class="form-group col-lg-3">
                <label for="inputState">Veranda</label>
                <select class="form-control" name="veranda">
                  @if(isset($facility))
                 @if($facility->veranda=='yes')
                  <option value="yes" selected=""> Yes</option>
                  <option value="no">No</option>
                  @elseif($facility->veranda=='no')
                  <option value="yes" > Yes</option>
                  <option value="no" selected="">No</option>
                  @endif
                   @else
                    <option value="yes" > Yes</option>
                  <option value="no" >No</option>
                  @endif
                </select>
              </div> 
              <div class="form-group col-lg-3">
                <label for="inputState">Playground</label>
                <select class="form-control" name="play_ground">
                   @if(isset($facility))
                 @if($facility->play_ground=='yes')
                  <option value="yes" selected=""> Yes</option>
                  <option value="no">No</option>
                  @elseif($facility->play_ground=='no')
                  <option value="yes" > Yes</option>
                  <option value="no" selected="">No</option>
                  @endif
                   @else
                    <option value="yes" > Yes</option>
                  <option value="no" >No</option>
                  @endif
                </select>
              </div>
              <div class="form-group col-lg-3">
               <label for="inputState">Teacher Chairs</label>
                <input placeholder="0" type="number"  name="teacher_chair" id="no_of_room"  value="{{ isset($facility) ? $facility->teacher_chair : '' }}"    class="form-control ">
              </div>

            </div>    
            <div class="row">
                             <div class="form-group col-lg-3">
               <label for="inputState">Teacher Tables</label>
                <input placeholder="0" type="number" value="{{ isset($facility) ? $facility->teacher_table : '' }}"  name="teacher_table" id="teacher_table"    class="form-control ">
              </div>
              <div class="form-group col-lg-3">
               <label for="inputState">Cupboard</label>
                <input placeholder="0" type="number"  name="cupboard" value="{{ isset($facility) ? $facility->cupboard : '' }}" id="Cupboard"   class="form-control ">
              </div>
              <div class="form-group col-lg-3">
               <label for="inputState">Black Board</label>
                <input placeholder="0" type="number"  name="black_board" id="black_board"   value="{{ isset($facility) ? $facility->black_board : '' }}" class="form-control ">
              </div>
               <div class="form-group col-lg-3">
               <label for="inputState">Students Chairs</label>
                <input placeholder="0" type="number"  name="student_chair" id="student_chair"   value="{{ isset($facility) ? $facility->student_chair : '' }}"  class="form-control ">
              </div>

               
              </div>  
              <div class="row">
               
               <div class="form-group col-lg-3">
               <label for="inputState">Water Cooler</label>
                <input placeholder="0" type="number"  value="{{ isset($facility) ? $facility->water_cooler : '' }}"  name="water_cooler" id="water_cooler"   class="form-control ">
              </div>
              <div class="form-group col-lg-3">
               <label for="inputState">Mats</label>
                <input placeholder="0" type="number" value="{{ isset($facility) ? $facility->mat : '' }}"   name="mat" id="mat" class="form-control ">
              </div>
              <div class="form-group col-lg-3">
               <label for="inputState">School Bell</label>
                <input placeholder="0" type="number"  name="school_bell" id="school_bell"   value="{{ isset($facility) ? $facility->school_bell : '' }}"  class="form-control ">
              </div>
              <div class="form-group col-lg-3">
               <label for="inputState">TLM/Charts</label>
                <input placeholder="0" type="number" value="{{ isset($facility) ? $facility->tlm_chart : '' }}"  name="tlm_chart" id="tlm_chart"    class="form-control ">
              </div>
               
              </div>           
          
            
            <!-- </div> -->

            <div class="d-flex justify-content-between  mt-0 pt-10 pb-10">
            <!-- <div class="mr-3">
              <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Previous</button>
            </div> -->
            <div>
                       @if(isset($facilty))
                            <button class="btn btn-success mg-r-5">Update</button>
                            <a href="{{ url()->previous() }}" class="btn btn-danger">Go Back</a>
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
<!-- <script >
  $(document).on('keyup', '#boy', function () {

 var  boy=$(this).val();
 var  girl=$('#girl').val();
  var total=(+boy+ +girl);
  $('#total').val(total);
    });
  $(document).on('keyup', '#girl', function () {

 var  boy=$(this).val();
 var  girl=$('#boy').val();
  var total=(+boy+ +girl);
  $('#total').val(total);
    });
</script> -->
@endpush
