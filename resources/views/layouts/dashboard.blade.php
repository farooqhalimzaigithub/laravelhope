@extends('layouts.main')
@section('content')
<style >
.highcharts-figure,
.highcharts-data-table table {
  min-width: 310px;
  max-width: 800px;
  margin: 1em auto;
}

#container {
  height: 400px;
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
<div class="content d-flex flex-column flex-column-fluid bg-white" id="kt_content" style="">
  <!--begin::Entry-->
  <div class="d-flex flex-column-fluid">
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
        <!--begin::Row-->


        <div class="row">
                      <div class="col-xl-6">
                        <!--begin::Tiles Widget 13-->
                         <div class="row">
                          <div class="col-xl-6">
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
                                <div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3">790</div>
                                <a href="#" class="text-inverse-primary font-weight-bold font-size-lg mt-1"> fee</a>
                              </div>
                            </div>
                            <!--end::Tiles Widget 11-->
                          </div>
                          <div class="col-xl-6">
                            <!--begin::Tiles Widget 12-->
                            <div class="card card-custom gutter-b" style="height: 150px">
                              <div class="card-body">
                                <span class="svg-icon svg-icon-3x svg-icon-success">
                                  <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                                  <a href=""> <i class="fa fa-users"></i></a>
                                  <!--end::Svg Icon-->
                                </span>
                                <div class="text-dark font-weight-bolder font-size-h2 mt-3">8,600</div>
                                <a href="#" class="text-muted text-hover-primary font-weight-bold font-size-lg mt-1">New Users</a>
                              </div>
                            </div>
                            <!--end::Tiles Widget 12-->
                          </div>
                        </div>
                        <!--end::Tiles Widget 13-->
                        <div class="row">
                          <div class="col-xl-6">
                            <!--begin::Tiles Widget 11-->
                            <div class="card card-custom bg-primary gutter-b" style="height: 150px">
                              <div class="card-body">
                                <span class="svg-icon svg-icon-3x svg-icon-white ml-n2">
                                  <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                  <i class="fa fa-school"></i>
                                  <!--end::Svg Icon-->
                                </span>
                                <div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3">790</div>
                                <a href="#" class="text-inverse-primary font-weight-bold font-size-lg mt-1">New Teachers</a>
                              </div>
                            </div>
                            <!--end::Tiles Widget 11-->
                          </div>
                          <div class="col-xl-6">
                            <!--begin::Tiles Widget 12-->
                            <div class="card card-custom gutter-b" style="height: 150px">
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
                                <div class="text-dark font-weight-bolder font-size-h2 mt-3">8,600</div>
                                <a href="#" class="text-muted text-hover-primary font-weight-bold font-size-lg mt-1">New Students</a>
                              </div>
                            </div>
                            <!--end::Tiles Widget 12-->
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-6">
                        <!--begin::Mixed Widget 14-->
                        <div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b card-stretch" style="background-image: url(assets/media/stock-600x600/img-16.jpg)">
                          <!--begin::Body-->
                          <div class="card-body d-flex flex-column align-items-start justify-content-start">
                            <div class="p-1 flex-grow-1">
                              <h3 class="text-white font-weight-bolder line-height-lg mb-5">Create Reports
                              <br />With App</h3>
                            </div>
                            <a href='#' class="btn btn-link btn-link-warning font-weight-bold">Create Report
                            <span class="svg-icon svg-icon-lg svg-icon-warning">
                              <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                  <polygon points="0 0 24 0 24 24 0 24" />
                                  <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                  <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                </g>
                              </svg>
                              <!--end::Svg Icon-->
                            </span></a>
                          </div>
                          <!--end::Body-->
                        </div>
                        <!--end::Mixed Widget 14-->
                      </div>
                    </div>
        <div class="row">
  <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@ high Chart Area@@@@@@@@@@@@@@@@@@@@@@@ -->



  <figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
      Chart showing browser market shares. Clicking on individual columns
      brings up more detailed data. This chart makes use of the drilldown
      feature in Highcharts to easily switch between datasets.
    </p>
  </figure>
  <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@ high Chart Area@@@@@@@@@@@@@@@@@@@@@@@ -->

  <div class="col-lg-12 col-xxl-4 order-1 order-xxl-2">
    <!--begin::List Widget 8-->
    <div class="card card-custom card-stretch gutter-b">
     <!--begin::Header-->
     <div class="card-header border-0">
      <h3 class="card-title font-weight-bolder text-dark">Over All Details</h3>

    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body pt-0">
      <div class="row">
        <div class="col-4">
          <div style="    margin-bottom: 1.27rem" class=" height display std-title">
            Total Teachers  
          </div>
                                <!-- <div class="stdAttn height rounded-button">
                                <span class="bg-info">2</span> <span class="bg-primary">80%</span>
                              </div> -->
                              <div class="display stdAttn mt-3 bg-primary"
                              style="height: 35px; border-radius: 20px; text-align: center; color: white;">
                              {{$staff_count_att_all}}
                            </div>
                          </div>

                          <div class="col-4">
                           <div style="    margin-bottom: 1.27rem" class=" height display std-title">
                             Present Teachers  
                           </div>
                                <!-- <div class="stdAttn height rounded-button">
                                <span class="bg-primary">1</span> <span class="bg-primary">50%</span>
                              </div> -->
                              <div class="ml-auto display stdAttn mt-3 bg-primary"
                              style="height: 35px; border-radius: 20px; text-align: center; color: white;">
                              {{$staff_count_att_p}}
                            </div>
                          </div>

                          <div class="col-4">
                           <div style="    margin-bottom: 1.27rem"  class=" height display std-title">
                             Absent Teachers 
                           </div>
                           <div class="ml-auto display stdAttn mt-3 bg-primary"
                           style="height: 35px; border-radius: 20px; text-align: center; color: white;">
                           {{$staff_count_att_a}}
                         </div>
                       </div>

                     </div>


                     <!-- border vertical -->
                     <div class="vertical-line mx-auto"></div>

                     <div class="school_detail mt-5">

                      <div class="row mx-0 mb-1 ">
                        <div class="std-title height display border-0">
                          Total Childrens
                        </div>
                        <div class="ml-auto stdAttn height rounded-button display mt-3"  style="height: 35px;  border-radius: 20px; text-align: center; width: 250px;">
                          <button class="bg-primary form-control">{{$student_count_att_all}}</button>
                        </div>

                      </div>



                      <div class="row mx-0 mb-1">
                       <div class="std-title height display border-0">
                         Total Girls
                       </div>
                       <div class="ml-auto stdAttn height rounded-button display mt-3"  style="height: 35px;  border-radius: 20px; text-align: center; width: 250px;">
                        <button class="bg-primary form-control">{{$female}}</button>
                        <!-- <span class="bg-primary">{{$female}}</span> -->
                      </div>
                    </div>

                    <div class="row mx-0 mb-1">
                      <div class="std-title height display border-0">
                        Total Boys
                      </div>
                      <div class="ml-auto stdAttn height rounded-button display mt-3" style="height: 35px;  border-radius: 20px; text-align: center; width: 250px;">

                       <button class="bg-primary form-control">{{$male}}</button>
                     </div>
                   </div>

                   <div class="row mx-0 mb-3">
                     <div class="std-title height display border-0">
                       Special Children
                     </div>
                     <div class="ml-auto stdAttn height rounded-button display mt-3" style="height: 35px;  border-radius: 20px; text-align: center; width: 250px;">
                       <button class="bg-primary form-control">{{$health_yes}}</button>

                     </div>
                   </div>

                 </div>
               </div>

             </div>
           </div>
         </div>
         <!--end::Row-->
         <!--begin::Row-->
         <!--end::Row-->
         <!--end::Dashboard-->
       </div>
       <!--end::Container-->
     </div>
     <!--end::Entry-->
   </div>
   <!--end::Content-->

   @endsection
   @push('script')

   <script src="https://code.highcharts.com/highcharts.js"></script>
   <script src="https://code.highcharts.com/modules/data.js"></script>
   <script src="https://code.highcharts.com/modules/drilldown.js"></script>
   <script src="https://code.highcharts.com/modules/exporting.js"></script>
   <script src="https://code.highcharts.com/modules/export-data.js"></script>
   <script src="https://code.highcharts.com/modules/accessibility.js"></script>
   <script >
  /**
 * Create a constructor for sparklines that takes some sensible defaults and merges in the individual
 * chart options. This function is also available from the jQuery plugin as $(element).highcharts('SparkLine').
 */
// Create the chart
Highcharts.chart('container', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'School Result . January, 2022'
  },
  subtitle: {
    text: 'Click the columns to view versions. Source: <a href="http://statcounter.com" target="_blank">statcounter.com</a>'
  },
  accessibility: {
    announceNewData: {
      enabled: true
    }
  },
  xAxis: {
    type: 'category'
  },
  yAxis: {
    title: {
      text: 'Total percent market share'
    }

  },
  legend: {
    enabled: false
  },
  plotOptions: {
    series: {
      borderWidth: 0,
      dataLabels: {
        enabled: true,
        format: '{point.y:.1f}%'
      }
    }
  },

  tooltip: {
    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
  },

  series: [
  {
    name: "Browsers",
    colorByPoint: true,
    data: [
    {
      name: "Chrome",
      y: 62.74,
      drilldown: "Chrome"
    },
    {
      name: "Firefox",
      y: 10.57,
      drilldown: "Firefox"
    },
    {
      name: "Internet Explorer",
      y: 7.23,
      drilldown: "Internet Explorer"
    },
    {
      name: "Safari",
      y: 5.58,
      drilldown: "Safari"
    },
    {
      name: "Edge",
      y: 4.02,
      drilldown: "Edge"
    },
    {
      name: "Opera",
      y: 1.92,
      drilldown: "Opera"
    },
    {
      name: "Other",
      y: 7.62,
      drilldown: null
    }
    ]
  }
  ],
  drilldown: {
    breadcrumbs: {
      position: {
        align: 'right'
      }
    },
    series: [
    {
      name: "Chrome",
      id: "Chrome",
      data: [
      [
      "v65.0",
      0.1
      ],
      [
      "v64.0",
      1.3
      ],
      [
      "v63.0",
      53.02
      ],
      [
      "v62.0",
      1.4
      ],
      [
      "v61.0",
      0.88
      ],
      [
      "v60.0",
      0.56
      ],
      [
      "v59.0",
      0.45
      ],
      [
      "v58.0",
      0.49
      ],
      [
      "v57.0",
      0.32
      ],
      [
      "v56.0",
      0.29
      ],
      [
      "v55.0",
      0.79
      ],
      [
      "v54.0",
      0.18
      ],
      [
      "v51.0",
      0.13
      ],
      [
      "v49.0",
      2.16
      ],
      [
      "v48.0",
      0.13
      ],
      [
      "v47.0",
      0.11
      ],
      [
      "v43.0",
      0.17
      ],
      [
      "v29.0",
      0.26
      ]
      ]
    },
    {
      name: "Firefox",
      id: "Firefox",
      data: [
      [
      "v58.0",
      1.02
      ],
      [
      "v57.0",
      7.36
      ],
      [
      "v56.0",
      0.35
      ],
      [
      "v55.0",
      0.11
      ],
      [
      "v54.0",
      0.1
      ],
      [
      "v52.0",
      0.95
      ],
      [
      "v51.0",
      0.15
      ],
      [
      "v50.0",
      0.1
      ],
      [
      "v48.0",
      0.31
      ],
      [
      "v47.0",
      0.12
      ]
      ]
    },
    {
      name: "Internet Explorer",
      id: "Internet Explorer",
      data: [
      [
      "v11.0",
      6.2
      ],
      [
      "v10.0",
      0.29
      ],
      [
      "v9.0",
      0.27
      ],
      [
      "v8.0",
      0.47
      ]
      ]
    },
    {
      name: "Safari",
      id: "Safari",
      data: [
      [
      "v11.0",
      3.39
      ],
      [
      "v10.1",
      0.96
      ],
      [
      "v10.0",
      0.36
      ],
      [
      "v9.1",
      0.54
      ],
      [
      "v9.0",
      0.13
      ],
      [
      "v5.1",
      0.2
      ]
      ]
    },
    {
      name: "Edge",
      id: "Edge",
      data: [
      [
      "v16",
      2.6
      ],
      [
      "v15",
      0.92
      ],
      [
      "v14",
      0.4
      ],
      [
      "v13",
      0.1
      ]
      ]
    },
    {
      name: "Opera",
      id: "Opera",
      data: [
      [
      "v50.0",
      0.96
      ],
      [
      "v49.0",
      0.82
      ],
      [
      "v12.1",
      0.14
      ]
      ]
    }
    ]
  }
});
</script>
@endpush

