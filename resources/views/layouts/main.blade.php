<!DOCTYPE html>

<html lang="en">
   <!--begin::Head-->
   <head>
      <base href="">
      <meta charset="utf-8" />
      <title>Hope 87|Dashboard</title>
      <meta name="description" content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <link rel="canonical" href="https://keenthemes.com/metronic" />
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <!--begin::Fonts-->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
      <link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/custom-styles.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/themes/layout/header/base/light.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/themes/layout/header/menu/light.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/themes/layout/brand/dark.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/themes/layout/aside/dark.css')}}" rel="stylesheet" type="text/css" />
      <!-- for data tables -->
      <link href="{{asset('assets/data-table-libs/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
      <!--end::Layout Themes-->
      <link rel="shortcut icon" href="{{asset('assets/media/logos/favicon.ico')}}" />

      <style>
         .kt_aside-cs {
            top: 100px !important;
         }
         .menu-header-cs{
            height: 100%;
            padding: 0;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
         }
         .kt-header-cs {
            left: 0px !important;
            background-color: #0e1726 !important;
            height:100px !important;
         }
         .logo-img-cs {
            width: 80px;
            height: 80px;
         }
         .brand-cs {
            flex-direction: row-reverse !important;
         }
         
      </style>
   </head>
   <body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
      
      <div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
         <!--begin::Toolbar-->
         <div class="d-flex align-items-center">
            <!--begin::Aside Mobile Toggle-->
            <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
            <span></span>
            </button>
            
            <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
            <span></span>
            </button>
            <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
               <span class="svg-icon svg-icon-xl">
                  <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                     <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                     </g>
                  </svg>
                  <!--end::Svg Icon-->
               </span>
            </button>
            <!--end::Topbar Mobile Toggle-->
         </div>
         <!--end::Toolbar-->
      </div>
      <!--end::Header Mobile-->
      <div class="d-flex flex-column flex-root">
         <!--begin::Page-->
         <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Aside-->
            <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto kt_aside-cs" id="kt_aside">
               <!--begin::Brand-->
               <div class="brand brand-cs" id="kt_brand">
                  <!--begin::Toggle-->
                  <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                     <span class="svg-icon svg-icon svg-icon-xl">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                           <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <polygon points="0 0 24 0 24 24 0 24" />
                              <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
                              <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
                           </g>
                        </svg>
                        <!--end::Svg Icon-->
                     </span>
                  </button>
                  <!--end::Toolbar-->
               </div>
               <!--end::Brand-->
               <!--begin::Aside Menu-->
               <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
                  <!--begin::Menu Container-->
                  <div id="kt_aside_menu" class="aside-menu" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
                     <!--begin::Menu Nav-->
                     <ul class="menu-nav pt-0">
                       
                       @if(Auth::user()->role_id==1)
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">                             
                              <a href="{{url('/')}}" class="menu-link">
                                 <i class="menu-bullet menu-bullet-dot">
                                 <span></span>
                                 </i>
                                 <span class="menu-text">School Dashboard</span>
                              </a>
                        </li>

                        
                       
                        
                         <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                           <a href="javascript:;" class="menu-link menu-toggle">
                              <span class="svg-icon menu-icon">
                                 <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                       <rect x="0" y="0" width="24" height="24" />
                                       <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
                                       <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                 </svg>
                                 <!--end::Svg Icon-->
                              </span>
                              <span class="menu-text">Students</span>
                              <i class="menu-arrow"></i>
                           </a>
                           <div class="menu-submenu">
                              <i class="menu-arrow"></i>
                              <ul class="menu-subnav">
                                 <li class="menu-item menu-item-parent" aria-haspopup="true">
                                    <!-- <span class="menu-link">
                                    <span class="menu-text">Bootstrap</span>
                                    </span> -->
                                 </li>
                                 <li class="menu-item" aria-haspopup="true">
                                    <a href="{{route('students.create')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                    </i>
                                    <span class="menu-text">Add Student</span>
                                    </a>
                                 </li>
                                  <li class="menu-item" aria-haspopup="true">
                                    <a href="{{route('students.index')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                    </i>
                                    <span class="menu-text">Students Profile</span>
                                    </a>
                                 </li>
                                 <!-- =========================att==================== -->
                                 <li class="menu-item" aria-haspopup="true">
                                    <a href="{{route('att_list')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                    </i>
                                      <span class="menu-text">Student  Attendance</span>
                                    </a>
                                 </li>
                                  <li class="menu-item" aria-haspopup="true">
                                    <a href="{{route('att_list_show')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                    </i>
                                    <span class="menu-text"> Print Attendance</span>
                                    </a>
                                 </li>
                                 
                              </ul>
                           </div>
                        </li>
                         <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                           <a href="javascript:;" class="menu-link menu-toggle">
                              <span class="svg-icon menu-icon">
                                 <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                       <rect x="0" y="0" width="24" height="24" />
                                       <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
                                       <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                 </svg>
                                 <!--end::Svg Icon-->
                              </span>
                              <span class="menu-text"> Teachers</span>
                              <i class="menu-arrow"></i>
                           </a>
                           <div class="menu-submenu">
                              <i class="menu-arrow"></i>
                              <ul class="menu-subnav">
                                 <li class="menu-item menu-item-parent" aria-haspopup="true">
                                    <!-- <span class="menu-link">
                                    <span class="menu-text">Bootstrap</span>
                                    </span> -->
                                 </li>
                                 <li class="menu-item" aria-haspopup="true">
                                    <a href="{{route('staffs.create')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                    </i>
                                    <span class="menu-text">Add Teacher</span>
                                    </a>
                                 </li>
                                  <li class="menu-item" aria-haspopup="true">
                                    <a href="{{route('staffs.index')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                    </i>
                                    <span class="menu-text">Teachers List</span>
                                    </a>
                                 </li>
                                  <li class="menu-item" aria-haspopup="true">
                                    <a href="{{route('add_attendance')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                    </i>
                                    <span class="menu-text">Teacher Attendance</span>
                                    </a>
                                 </li>
                                  <li class="menu-item" aria-haspopup="true">
                                    <a href="{{route('staff_attendance_list')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                    </i>
                                    <span class="menu-text">Print Attendance</span>
                                    </a>
                                 </li>
                                 
                              </ul>
                           </div>
                        </li>
                         <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                           <a href="javascript:;" class="menu-link menu-toggle">
                              <span class="svg-icon menu-icon">
                                 <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                       <rect x="0" y="0" width="24" height="24" />
                                       <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
                                       <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                 </svg>
                                 <!--end::Svg Icon-->
                              </span>
                              <span class="menu-text">Schools</span>
                              <i class="menu-arrow"></i>
                           </a>
                           <div class="menu-submenu">
                              <i class="menu-arrow"></i>
                              <ul class="menu-subnav">
                                 <li class="menu-item menu-item-parent" aria-haspopup="true">
                                    <!-- <span class="menu-link">
                                    <span class="menu-text">Bootstrap</span>
                                    </span> -->
                                 </li>
                                 <li class="menu-item" aria-haspopup="true">
                                    <a href="{{url('school_update')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                    </i>
                                    <span class="menu-text">Basic Profile</span>
                                    </a>
                                 </li>
                                  <li class="menu-item" aria-haspopup="true">
                                    <a href="{{route('nearest_institutions.index')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                    </i>
                                    <span class="menu-text">Nearest Instituts</span>
                                    </a>
                                 </li>
                                 
                                   <li class="menu-item" aria-haspopup="true">
                                    <a href="{{route('enrollments.create')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                    </i>
                                    <span class="menu-text">Enrollment</span>
                                    </a>
                                 </li>
                                 <li class="menu-item" aria-haspopup="true">
                                    <a href="{{route('facilities.create')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                    </i>
                                    <span class="menu-text">Facilities</span>
                                    </a>
                                 </li>
                                 
                              </ul>
                           </div>
                        </li>
                         <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                           <a href="javascript:;" class="menu-link menu-toggle">
                              <span class="svg-icon menu-icon">
                                 <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                       <rect x="0" y="0" width="24" height="24" />
                                       <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
                                       <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                 </svg>
                                 <!--end::Svg Icon-->
                              </span>
                              <span class="menu-text">Contact Form</span>
                              <i class="menu-arrow"></i>
                           </a>
                           <div class="menu-submenu">
                              <i class="menu-arrow"></i>
                              <ul class="menu-subnav">
                                 <li class="menu-item menu-item-parent" aria-haspopup="true">
                                    <!-- <span class="menu-link">
                                    <span class="menu-text">Bootstrap</span>
                                    </span> -->
                                 </li>
                                 <li class="menu-item" aria-haspopup="true">
                                    <a href="{{route('contact_forms.create')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                    </i>
                                    <span class="menu-text">Add</span>
                                    </a>
                                 </li>
                                  <li class="menu-item" aria-haspopup="true">
                                    <a href="{{route('contact_forms.index')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                    </i>
                                    <span class="menu-text">List</span>
                                    </a>
                                 </li>
                                 
                              </ul>
                           </div>
                        </li>
                         <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                           <span class="svg-icon menu-icon">
                              <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
                                    <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
                                 </g>
                              </svg>
                              <!--end::Svg Icon-->
                           </span>
                           <span class="menu-text">Assesment</span>
                           <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                           <i class="menu-arrow"></i>
                           <ul class="menu-subnav">
                              <li class="menu-item menu-item-parent" aria-haspopup="true">
                                    <!-- <span class="menu-link">
                                    <span class="menu-text">Bootstrap</span>
                                 </span> -->
                              </li>
                              <li class="menu-item" aria-haspopup="true">
                                 <a href="{{route('assesments.create')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                       <span></span>
                                    </i>
                                    <span class="menu-text">Add</span>
                                 </a>
                              </li>
                              <li class="menu-item" aria-haspopup="true">
                                 <a href="{{route('assesments.index')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                       <span></span>
                                    </i>
                                    <span class="menu-text">List</span>
                                 </a>
                              </li>

                           </ul>
                        </div>
                     </li>
                      <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                           <span class="svg-icon menu-icon">
                              <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
                                    <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
                                 </g>
                              </svg>
                              <!--end::Svg Icon-->
                           </span>
                           <span class="menu-text">Visitors</span>
                           <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                           <i class="menu-arrow"></i>
                           <ul class="menu-subnav">
                              <li class="menu-item menu-item-parent" aria-haspopup="true">
                                    <!-- <span class="menu-link">
                                    <span class="menu-text">Bootstrap</span>
                                 </span> -->
                              </li>
                              <li class="menu-item" aria-haspopup="true">
                                 <a href="{{route('visitors.create')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                       <span></span>
                                    </i>
                                    <span class="menu-text">Add</span>
                                 </a>
                              </li>
                              <li class="menu-item" aria-haspopup="true">
                                 <a href="{{route('visitors.index')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                       <span></span>
                                    </i>
                                    <span class="menu-text">List</span>
                                 </a>
                              </li>

                           </ul>
                        </div>
                     </li>
                         <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                           <a href="javascript:;" class="menu-link menu-toggle">
                              <span class="svg-icon menu-icon">
                                 <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                       <rect x="0" y="0" width="24" height="24" />
                                       <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
                                       <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                 </svg>
                                 <!--end::Svg Icon-->
                              </span>
                              <span class="menu-text">VECES</span>
                              <i class="menu-arrow"></i>
                           </a>
                           <div class="menu-submenu">
                              <i class="menu-arrow"></i>
                              <ul class="menu-subnav">
                                 <li class="menu-item menu-item-parent" aria-haspopup="true">
                                    <!-- <span class="menu-link">
                                    <span class="menu-text">Bootstrap</span>
                                    </span> -->
                                 </li>
                                 <li class="menu-item" aria-haspopup="true">
                                    <a href="{{route('vecs.create')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                    </i>
                                    <span class="menu-text">Add</span>
                                    </a>
                                 </li>
                                  <li class="menu-item" aria-haspopup="true">
                                    <a href="{{route('vecs.index')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                    </i>
                                    <span class="menu-text">List</span>
                                    </a>
                                 </li>
                                 
                              </ul>
                           </div>
                        </li>

                           
                       

                       

           



                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                           <a href="javascript:;" class="menu-link menu-toggle">
                              <span class="svg-icon menu-icon">
                                 <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                       <rect x="0" y="0" width="24" height="24" />
                                       <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
                                       <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                 </svg>
                                 <!--end::Svg Icon-->
                              </span>
                              <span class="menu-text"> Fees</span>
                              <i class="menu-arrow"></i>
                           </a>
                           <div class="menu-submenu">
                              <i class="menu-arrow"></i>
                              <ul class="menu-subnav">
                                 <li class="menu-item menu-item-parent" aria-haspopup="true">
                                    <!-- <span class="menu-link">
                                    <span class="menu-text">Bootstrap</span>
                                    </span> -->
                                 </li>
                                 <li class="menu-item" aria-haspopup="true">
                                    <a href="{{route('paymentFee')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                    </i>
                                    <span class="menu-text">Fee Payment </span>
                                    </a>
                                 </li>
                                  <li class="menu-item" aria-haspopup="true">
                                    <a href="{{route('paymentFee')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                    </i>
                                    <span class="menu-text">List</span>
                                    </a>
                                 </li>
                                 
                              </ul>
                           </div>
                        </li>
                       
                       
                        
                        
                       <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                           <a href="javascript:;" class="menu-link menu-toggle">
                              <span class="svg-icon menu-icon">
                                 <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                       <rect x="0" y="0" width="24" height="24" />
                                       <rect fill="#000000" opacity="0.3" x="4" y="4" width="8" height="16" />
                                       <path d="M6,18 L9,18 C9.66666667,18.1143819 10,18.4477153 10,19 C10,19.5522847 9.66666667,19.8856181 9,20 L4,20 L4,15 C4,14.3333333 4.33333333,14 5,14 C5.66666667,14 6,14.3333333 6,15 L6,18 Z M18,18 L18,15 C18.1143819,14.3333333 18.4477153,14 19,14 C19.5522847,14 19.8856181,14.3333333 20,15 L20,20 L15,20 C14.3333333,20 14,19.6666667 14,19 C14,18.3333333 14.3333333,18 15,18 L18,18 Z M18,6 L15,6 C14.3333333,5.88561808 14,5.55228475 14,5 C14,4.44771525 14.3333333,4.11438192 15,4 L20,4 L20,9 C20,9.66666667 19.6666667,10 19,10 C18.3333333,10 18,9.66666667 18,9 L18,6 Z M6,6 L6,9 C5.88561808,9.66666667 5.55228475,10 5,10 C4.44771525,10 4.11438192,9.66666667 4,9 L4,4 L9,4 C9.66666667,4 10,4.33333333 10,5 C10,5.66666667 9.66666667,6 9,6 L6,6 Z" fill="#000000" fill-rule="nonzero" />
                                    </g>
                                 </svg>
                                 <!--end::Svg Icon-->
                              </span>
                              <span class="menu-text">Free Configuration</span>
                              <i class="menu-arrow"></i>
                           </a>
                           <div class="menu-submenu">
                              <i class="menu-arrow"></i>
                              <ul class="menu-subnav">
                                 <li class="menu-item menu-item-parent" aria-haspopup="true">
                                    <span class="menu-link">
                                       <span class="menu-text">Free Configuration</span>
                                    </span>
                                 </li>
                                 <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                       <i class="menu-bullet menu-bullet-dot">
                                          <span></span>
                                       </i>
                                       <span class="menu-text"> Sessions</span>
                                       <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu">
                                       <i class="menu-arrow"></i>
                                       <ul class="menu-subnav">
                                          <li class="menu-item" aria-haspopup="true">
                                             <a href="{{route('sessions.create')}}" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                   <span></span>
                                                </i>
                                                <span class="menu-text">Add</span>
                                             </a>
                                          </li>
                                          <li class="menu-item" aria-haspopup="true">
                                             <a href="{{route('sessions.index')}}" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                   <span></span>
                                                </i>
                                                <span class="menu-text">List</span>
                                             </a>
                                          </li>
                                         
                                       </ul>
                                    </div>
                                 </li>

                                 <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                       <i class="menu-bullet menu-bullet-dot">
                                          <span></span>
                                       </i>
                                       <span class="menu-text"> Sections</span>
                                       <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu">
                                       <i class="menu-arrow"></i>
                                       <ul class="menu-subnav">
                                          <li class="menu-item" aria-haspopup="true">
                                             <a href="{{route('sections.create')}}" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                   <span></span>
                                                </i>
                                                <span class="menu-text">Add</span>
                                             </a>
                                          </li>
                                          <li class="menu-item" aria-haspopup="true">
                                             <a href="{{route('sections.index')}}" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                   <span></span>
                                                </i>
                                                <span class="menu-text">List</span>
                                             </a>
                                          </li>
                                         
                                       </ul>
                                    </div>
                                 </li>
                                 <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                       <i class="menu-bullet menu-bullet-dot">
                                          <span></span>
                                       </i>
                                       <span class="menu-text">Pre Classes</span>
                                       <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu">
                                       <i class="menu-arrow"></i>
                                       <ul class="menu-subnav">
                                          <li class="menu-item" aria-haspopup="true">
                                             <a href="{{route('free_classes.create')}}" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                   <span></span>
                                                </i>
                                                <span class="menu-text">Add</span>
                                             </a>
                                          </li>
                                          <li class="menu-item" aria-haspopup="true">
                                             <a href="{{route('free_classes.index')}}" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                   <span></span>
                                                </i>
                                                <span class="menu-text">List</span>
                                             </a>
                                          </li>
                                         
                                       </ul>
                                    </div>
                                 </li>
                                 <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                       <i class="menu-bullet menu-bullet-dot">
                                          <span></span>
                                       </i>
                                       <span class="menu-text">Fee Category</span>
                                       <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu">
                                       <i class="menu-arrow"></i>
                                       <ul class="menu-subnav">
                                          <li class="menu-item" aria-haspopup="true">
                                             <a href="{{route('fee_categories.create')}}" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                   <span></span>
                                                </i>
                                                <span class="menu-text">Add</span>
                                             </a>
                                          </li>
                                          <li class="menu-item" aria-haspopup="true">
                                             <a href="{{route('fee_categories.index')}}" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                   <span></span>
                                                </i>
                                                <span class="menu-text">List</span>
                                             </a>
                                          </li>

                                         
                                       </ul>
                                    </div>
                                 </li>
                                 <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                       <i class="menu-bullet menu-bullet-dot">
                                          <span></span>
                                       </i>
                                       <span class="menu-text">Fee Structure</span>
                                       <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu">
                                       <i class="menu-arrow"></i>
                                       <ul class="menu-subnav">
                                          <li class="menu-item" aria-haspopup="true">
                                             <a href="{{route('fee_structures.create')}}" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                   <span></span>
                                                </i>
                                                <span class="menu-text">Add</span>
                                             </a>
                                          </li>
                                          <li class="menu-item" aria-haspopup="true">
                                             <a href="{{route('fee_structures.index')}}" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                   <span></span>
                                                </i>
                                                <span class="menu-text">List</span>
                                             </a>
                                          </li>

                                         
                                       </ul>
                                    </div>
                                 </li>
                                  
                              </ul>
                           </div>
                        </li>
                        
                        
                        <li class="menu-section">

                           <!-- <h4 class="menu-text">Layout</h4> -->
                           <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                        </li> 
                          @endif
                          @if(Auth::user()->role_id==2)
                         <li class="menu-item menu-item-active" aria-haspopup="true">
                           <a href="{{url('/')}}" class="menu-link">
                             <!--  <span class="svg-icon menu-icon">
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                       <polygon points="0 0 24 0 24 24 0 24" />
                                       <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                                       <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                 </svg>
                              </span> -->
                              <a href="{{url('/')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                    </i>
                                    <span class="menu-text">DMO Dashboard</span>
                                    </a>
                              <!-- <span class="menu-text">DMO Dashboard</span> -->
                           </a>
                        </li>
                         <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                       <i class="menu-bullet menu-bullet-dot">
                                          <span></span>
                                       </i>
                                       <span class="menu-text">Manage School</span>
                                       <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu">
                                       <i class="menu-arrow"></i>
                                       <ul class="menu-subnav">
                                          <li class="menu-item" aria-haspopup="true">
                                             <a href="{{route('schools.create')}}" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                   <span></span>
                                                </i>
                                                <span class="menu-text">Add</span>
                                             </a>
                                          </li>
                                          <li class="menu-item" aria-haspopup="true">
                                             <a href="{{route('schools.index')}}" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                   <span></span>
                                                </i>
                                                <span class="menu-text">List</span>
                                             </a>
                                          </li>

                                         
                                       </ul>
                                    </div>
                                 </li>
                                
                          @endif
                          @if(Auth::user()->role_id==3)
                         <li class="menu-item menu-item-active" aria-haspopup="true">
                           <a href="{{url('/')}}" class="menu-link">
                              <span class="svg-icon menu-icon">
                                <!--  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                       <polygon points="0 0 24 0 24 24 0 24" />
                                       <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                                       <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                 </svg> -->
                                 <a href="{{url('/')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                    </i>
                                    <span class="menu-text">HQ Dashboard</span>
                                    </a>
                              <!-- </span>HQ Dashboard</span> -->
                           </a>
                        </li>
                         <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                       <i class="menu-bullet menu-bullet-dot">
                                          <span></span>
                                       </i>
                                       <span class="menu-text">Manage DMO User</span>
                                       <i class="menu-arrow"></i>
                                    </a>
                                    <div class="menu-submenu">
                                       <i class="menu-arrow"></i>
                                       <ul class="menu-subnav">
                                          <li class="menu-item" aria-haspopup="true">
                                             <a href="{{route('users.create')}}" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                   <span></span>
                                                </i>
                                                <span class="menu-text">Add</span>
                                             </a>
                                          </li>
                                          <li class="menu-item" aria-haspopup="true">
                                             <a href="{{route('users.index')}}" class="menu-link">
                                                <i class="menu-bullet menu-bullet-dot">
                                                   <span></span>
                                                </i>
                                                <span class="menu-text">List</span>
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </li>

                          @endif

                     </ul>
                     <!--end::Menu Nav-->
                  </div>
                  <!--end::Menu Container-->
               </div>
               <!--end::Aside Menu-->
            </div>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
               <!--begin::Header-->
               <div id="kt_header" class="header header-fixed kt-header-cs">
                  <!--begin::Container-->
                  <div class="container-fluid d-flex align-items-stretch justify-content-between">
                     <!--begin::Header Menu Wrapper-->
                     <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">

                        <!--begin::Header Menu-->
                        <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                           <div class="menu-header-cs">
                              <a href="{{ url('/') }}" class="brand-logo m-4">
                                 <img alt="Logo" class="logo-img-cs" src="{{asset('images/logo.png')}}" />
                              </a>
                              <div class="menu-item m-4 text-white pt-4">
                                 <h2>ELEMENTARY & SECONDARY EDUCATION FOUNDATION</h2>
                                 <p>
                                    Government of Khyber Pakhtunkhwa Pakistan
                                 </p>
                              </div>
                           </div>
                        </div>
                        <!--end::Header Menu-->
                     </div>
                     <!--end::Header Menu Wrapper-->
                     <!--begin::Topbar-->
                     <div class="topbar">
                        <!--begin::Search-->  
                        <!--end::Chat-->
                        <!--begin::Languages-->
                        <div class="dropdown p-0 m-0 dropdown-menu-anim-up  dropdown-menu-sm dropdown-menu-right ">
                           <!--begin::Toggle-->
                           
                           <!--end::Toggle-->
                           <!--begin::Dropdown-->
                          <!--  <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right"> -->
                              <!--begin::Nav-->
                              <ul class="navi navi-hover py-4">

                                 <!--begin::Item-->
                                 
                                 @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <span>
                                   {{Auth::user()->name}}
                                   </span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                                
                                 <!--end::Item-->
                              </ul>
                              <!--end::Nav-->
                           <!-- </div> -->
                           <!--end::Dropdown-->
                        </div>
                        <!--end::Languages-->
                        <!--begin::User-->
                        <!-- <div class="topbar-item">
                           <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                              <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                              <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">Sean</span>
                              <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                              <span class="symbol-label font-size-h5 font-weight-bold">S</span>
                              </span>
                           </div>
                        </div> -->
                        <!--end::User-->
                     </div>
                     <!--end::Topbar-->
                  </div>
                  <!--end::Container-->
               </div>
               <!--end::Header-->
               <!--begin::Content-->
               <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                  <!--begin::Entry-->
                  <div class="d-flex flex-column-fluid">
                     <!--begin::Container-->
                     <div class="container">
                        <!--begin::Dashboard-->
                        @yield('content')
                        <!--end::Dashboard-->
                     </div>
                     <!--end::Container-->
                  </div>
                  <!--end::Entry-->
               </div>
               <!--end::Content-->
               <!--begin::Footer-->
              <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
                  <!--begin::Container-->
                  <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
                     <!--begin::Copyright-->
                     <div class="text-dark order-2 order-md-1">
                        <span class="text-muted font-weight-bold mr-2"><?php echo date("Y") ?></span>
                        <a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">Hope 87</a>
                     </div>
                     <!--end::Copyright-->
                     <!--begin::Nav-->
                     <div class="nav nav-dark order-1 order-md-2">
                        <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pr-3 pl-0">About</a>
                        <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link px-3">Team</a>
                        <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-3 pr-0">Contact</a>
                     </div>
                     <!--end::Nav-->
                  </div>
                  <!--end::Container-->
               </div>
               <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
         </div>
         <!--end::Page-->
      </div>  
      <div id="kt_scrolltop" class="scrolltop">
         <span class="svg-icon">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
               <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <polygon points="0 0 24 0 24 24 0 24" />
                  <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                  <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
               </g>
            </svg>
            <!--end::Svg Icon-->
         </span>
      </div>      
      <!--end::Demo Panel-->
      <!-- <script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script> -->
      <!--begin::Global Config(global config for global JS scripts)-->
      <!-- <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script> -->
      <!--end::Global Config-->
      <!--begin::Global Theme Bundle(used by all pages)-->
      <script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
      <script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
      <script src="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
      <!--end::Global Theme Bundle-->

       @stack('script')
      <!--begin::Page Vendors(used by this page)-->
      <!-- <script src="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script> -->
      <!--end::Page Vendors-->
      <!--begin::Page Scripts(used by this page)-->
      <!-- <script src="{{asset('assets/js/pages/widgets.js')}}"></script> -->
      <!--end::Page Scripts-->
      <!--begin::Page Scripts(used by this page)-->
      <script src="{{asset('assets/js/pages/features/miscellaneous/toastr.js')}}"></script>
      <!--end::Page Scripts-->
     <!-- for datatables -->
      <!-- <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script> -->
      <!--end::Page Vendors-->
      <!--begin::Page Scripts(used by this page)-->
      <!-- <script src="{{asset('assets/js/pages/crud/datatables/advanced/column-rendering.js')}}"></script> -->
       <!-- End for datatables -->
      <!--end::Page Scripts-->
      <!--begin::Page Scripts(used by this select 2)-->
      <script src="{{asset('assets/js/pages/crud/forms/validation/form-widgets.js')}}"></script>
      <!--end::Page Scripts select 2-->
                          <!-- for data tables -->
     <script src="{{asset('assets/data-table-libs/js/jquery.dataTables.min.js')}}"></script>
 <script>
   $(document).ready(function() {
               $('#example').DataTable();
            });
         @if(Session::has('error'))
  toastr.options =
  {
   "closeButton" : true,
   "progressBar" : true
  }
      toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
   "closeButton" : true,
   "progressBar" : true
  }
      toastr.info("{{ session('info') }}");
  @endif
  @if(Session::has('success'))
  toastr.options =
  {
   "closeButton" : true,
   "progressBar" : true
  }
      toastr.success("{{ session('success') }}");
  @endif
   </script>
     
   </body>
   <!--end::Body-->
</html>