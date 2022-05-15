@extends('layouts.main')
@section('content')

<style type="text/css">
  #container {
  height: 400px;
}

.highcharts-figure,
.highcharts-data-table table {
  min-width: 310px;
  max-width: 800px;
  margin: 1em auto;
}

.highcharts-data-table table {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #ebebeb;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
}

.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}

.highcharts-data-table th {
  font-weight: 600;
  padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
  padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}

.highcharts-data-table tr:hover {
  background: #f1f7ff;
}
</style>
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid bg-white" id="kt_content" >
   <!--begin::Entry-->
   <div class="d-flex flex-column-fluid" >
      <!--begin::Container-->
      <!-- <div class="container"> -->
         <!--begin::Dashboard-->
         <!-- @yield('content') -->
         <!--end::Dashboard-->
         <!-- </div> -->
         <!--end::Container-->
         <!--begin::Container-->
         <div class="container">
            <!--begin::Dashboard-->
            <div class="row">
                      <div class="col-xl-12">
                        <!--begin::Tiles Widget 13-->
                         <div class="row">
                          <div class="col-xl-4">
                            <!--begin::Tiles Widget 11-->
                            <div class="card card-custom bg-primary gutter-b" style="height: 150px">
                              <div class="card-body">
                                <span class="svg-icon svg-icon-3x svg-icon-white ml-n2">
                                  <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="0" y="0" width="24" height="24" />
                                      <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                      <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                  </svg>
                                  <!--end::Svg Icon-->
                                </span>
                                <div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3">{{$staff_count_att_all}}</div>
                                <a href="#" class="text-inverse-primary font-weight-bold font-size-lg mt-1"> Total Teachers</a>
                              </div>
                            </div>
                            <!--end::Tiles Widget 11-->
                          </div>
                           <div class="col-xl-4">
                            <!--begin::Tiles Widget 12-->
                            <div class="card card-custom bg-primary gutter-b" style="height: 150px">
                              <div class="card-body">
                                <span class="svg-icon svg-icon-3x svg-icon-success">
                                  <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <polygon points="0 0 24 0 24 24 0 24" />
                                      <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                      <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                    </g>
                                  </svg>
                                  <!--end::Svg Icon-->
                                </span>
                                <div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3">{{$schools}}</div>
                                <a href="#" class="text-inverse-primary text-hover-primary font-weight-bold font-size-lg mt-1">Total Schools</a>
                              </div>
                            </div>
                            <!--end::Tiles Widget 12-->
                          </div>
                          <div class="col-xl-4">
                            <!--begin::Tiles Widget 12-->
                            <div class="card card-custom bg-primary gutter-b" style="height: 150px">
                              <div class="card-body">
                                <span class="svg-icon svg-icon-3x svg-icon-success">
                                  <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                                  <a href=""> <i class="fa fa-users"></i></a>
                                  <!--end::Svg Icon-->
                                </span>
                                <div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3"></div>
                                <a href="#" class="text-inverse-primary text-hover-primary font-weight-bold font-size-lg mt-1">Present  Students</a>
                              </div>
                             </div>
                            <!--end::Tiles Widget 12-->
                          </div>
                           
                        </div>
                        <!--end::Tiles Widget 13-->
                        <div class="row">
                          <div class="col-xl-4">
                            <!--begin::Tiles Widget 11-->
                            <div class="card card-custom bg-primary gutter-b" style="height: 150px">
                              <div class="card-body">
                                <span class="svg-icon svg-icon-3x svg-icon-white ml-n2">
                                  <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                  <i class="fa fa-school"></i>
                                  <!--end::Svg Icon-->
                                </span>
                                <div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3">{{$student_count_att_all}}</div>
                                <a href="#" class="text-inverse-primary font-weight-bold font-size-lg mt-1">Total Students</a>
                              </div>
                            </div>
                            <!--end::Tiles Widget 11-->
                          </div>
                         
                            
                           <div class="col-xl-4">
                            <!--begin::Tiles Widget 11-->
                            <div class="card card-custom bg-primary gutter-b" style="height: 150px">
                              <div class="card-body">
                                <span class="svg-icon svg-icon-3x svg-icon-white ml-n2">
                                  <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                  <i class="fa fa-school"></i>
                                  <!--end::Svg Icon-->
                                </span>
                                <div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3"></div>
                                <a href="#" class="text-inverse-primary font-weight-bold font-size-lg mt-1">Absent Students</a>
                              </div>
                            </div>
                            <!--end::Tiles Widget 11-->
                          </div>
                          <div class="col-xl-4">
                            <!--begin::Tiles Widget 12-->
                            <div class="card card-custom bg-primary gutter-b" style="height: 150px">
                              <div class="card-body">
                                <span class="svg-icon svg-icon-3x svg-icon-success">
                                  <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <polygon points="0 0 24 0 24 24 0 24" />
                                      <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                      <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                    </g>
                                  </svg>
                                  <!--end::Svg Icon-->
                                </span>
                                 <div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3"></div>
                                <a href="#" class="text-inverse-primary text-hover-primary font-weight-bold font-size-lg mt-1">Absent Teachers  </a>
                              </div>
                            </div>
                            <!--end::Tiles Widget 12-->
                          </div>
                         
                        </div>

                      </div>
                     
                    </div>
            <!--begin::Row-->
            <div class="row" >
    <!-- ==================another row add============= -->

    <div class="col-lg-12 col-xxl-12 order-1 order-xxl-2">
      <!--begin::List Widget 8-->
      <div class="card card-custom card-stretch gutter-b">
         <!--begin::Header-->
         <div class="card-header border-0">
            <h3 class="card-title font-weight-bolder text-dark">Details</h3>
            <div class="card-toolbar">
               
            </div>
         </div>
         <!--end::Header-->
         <!--begin::Body-->
         <div class="card-body pt-0">

          <div class="row mb-3">
            <div class="col-4">
              <!-- <h3>Schools</h3> -->
              <div style="    margin-bottom: 1.27rem" class=" height display std-title">
                  Marked Attendance
             </div>
             <div class="stdAttn height rounded-button">
                <button class="bg-primary form-control text-white" style="border-radius: 30px;">14</button> <button class="bg-primary form-control text-white" style="border-radius: 90px;">70%</button>
             </div>
          </div>

          <div class="col-4">
           <div style="    margin-bottom: 1.27rem" class=" height display std-title">
             Present Students
          </div>
          <div class="stdAttn height rounded-button">
             <button class="bg-primary form-control text-white" style="border-radius: 30px;">10</button> <button class="bg-primary form-control text-white" style="border-radius: 30px;">40%</button>
          </div>
       </div>

       <div class="col-4">
        <div style="    margin-bottom: 1.27rem" class=" height display std-title">
          Absent Students
       </div>
       <div class="stdAttn height rounded-button">
          <button class="bg-primary form-control text-white" style="border-radius: 30px;">20</button> <button class="bg-primary  form-control text-white" style="border-radius: 30px;">90%</button>
       </div>
    </div>
 </div>

 <div class="row">
   <div class="col-4">
     <div style="    margin-bottom: 1.27rem" class=" height display std-title">
       Students – Not Marked
    </div>
    <div class="stdAttn height rounded-button">
       <button class="bg-primary form-control text-white" style="border-radius: 30px;">16</button> <button class="bg-primary form-control text-white" style="border-radius: 30px;">80%</button>
    </div>
 </div>

 <div class="col-4">
  <div style="    margin-bottom: 1.27rem" class=" height display std-title">
    Present Teachers
 </div>
 <div class="stdAttn height rounded-button">
    <button class="bg-primary form-control text-white" style="border-radius: 30px;">17</button> <button class="bg-primary form-control text-white" style="border-radius: 30px;">80%</button>
 </div>
</div>

<div class="col-4">
  <div style="    margin-bottom: 1.27rem ; " class=" height display std-title">
    Absent Teachers
 </div>
 <div class="stdAttn height rounded-button" style="border-radius:90px;">
    <button class="bg-primary form-control text-white" style="border-radius: 30px;">16</button> <button class="bg-primary form-control text-white" style="border-radius: 30px;">60%</button>
 </div>
</div>

</div>


<!-- border vertical -->
<div class="vertical-line mx-auto"></div>

</div>


<figure class="highcharts-figure">
  <div id="container"></div>
  <p class="highcharts-description">
    Chart showing use of rotated axis labels and data labels. This can be a
    way to include more labels in the chart, but note that more labels can
    sometimes make charts harder to read.
  </p>
</figure>
</div>
</div>



</div>
<!--end::Row-->
</div>
<!--end::Container-->
</div>
<!--end::Entry-->
</div>
<!--end::Content-->

@endsection
@push('script')

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script >
  Highcharts.chart('container', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'District All cities  per 2022'
  },
  subtitle: {
    text: 'Source: <a href="http://en.wikipedia.org/wiki/List_of_cities_proper_by_population">Wikipedia</a>'
  },
  xAxis: {
    type: 'category',
    labels: {
      rotation: -45,
      style: {
        fontSize: '13px',
        fontFamily: 'Verdana, sans-serif'
      }
    }
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Population (millions)'
    }
  },
  legend: {
    enabled: false
  },
  tooltip: {
    pointFormat: 'Population in 2017: <b>{point.y:.1f} millions</b>'
  },
  series: [{
    name: 'Population',
    data: [
      ['Shanghai', 24.2],
      ['Beijing', 20.8],
      ['Karachi', 14.9],
      ['Shenzhen', 13.7],
      ['Guangzhou', 13.1],
      ['Istanbul', 12.7],
      ['Mumbai', 12.4],
      ['Moscow', 12.2],
      ['São Paulo', 12.0],
      ['Delhi', 11.7],
      ['Kinshasa', 11.5],
      ['Tianjin', 11.2],
      ['Lahore', 11.1],
      ['Jakarta', 10.6],
      ['Dongguan', 10.6],
      ['Lagos', 10.6],
      ['Bengaluru', 10.3],
      ['Seoul', 9.8],
      ['Foshan', 9.3],
      ['Tokyo', 9.3]
    ],
    dataLabels: {
      enabled: true,
      rotation: -90,
      color: '#FFFFFF',
      align: 'right',
      format: '{point.y:.1f}', // one decimal
      y: 10, // 10 pixels down from the top
      style: {
        fontSize: '13px',
        fontFamily: 'Verdana, sans-serif'
      }
    }
  }]
});
</script>
@endpush