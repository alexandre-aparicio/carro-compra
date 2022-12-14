<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
      <!-- Favicon icon -->
      <link rel="icon" type="{{ asset('dash-assets/image/png') }}" sizes="16x16" href="images/favicon.png">
      <!-- Pignose Calender -->
      <link href="{{ asset('dash-assets/plugins/pg-calendar/css/pignose.calendar.min.css') }}" rel="stylesheet">
      <!-- Chartist -->
      <link rel="stylesheet" href="{{ asset('dash-assets/plugins/chartist/css/chartist.min.css') }}">
      <link rel="stylesheet" href="{{ asset('dash-assets/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css') }}">
      <!-- Custom Stylesheet -->
      <link href="{{ asset('dash-assets/css/style.css') }}" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
   </head>
   <body>
      
      <div id="main-wrapper">
         
         <div class="nav-header">
            <div class="brand-logo">
               <a href="index.html">
               <b class="logo-abbr"><img src="{{ asset('dash-assets/images/logo.png') }}" alt=""> </b>
               <span class="logo-compact"><img src="{{ asset('dash-assets/images/logo-compact.png') }}" alt=""></span>
               <span class="brand-title">
               <img src="images/logo-text.png" alt="">
               </span>
               </a>
            </div>
         </div>
         <div class="header">
            <div class="header-content clearfix">
               <div class="nav-control">
                  <div class="hamburger">
                     <span class="toggle-icon"><i class="icon-menu"></i></span>
                  </div>
               </div>
               <div class="header-left">
                  <div class="input-group icons">
                     <div class="input-group-prepend">
                        <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                     </div>
                     <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                     <div class="drop-down animated flipInX d-md-none">
                        <form action="#">
                           <input type="text" class="form-control" placeholder="Search">
                        </form>
                     </div>
                  </div>
               </div>
               <div class="header-right">
                  <ul class="clearfix">
                     <li class="icons dropdown">
                        <a href="#" class="dropdown" data-bs-toggle="dropdown">
                        <i class="mdi mdi-email-outline"></i>
                        <span class="badge badge-pill gradient-1">3</span>
                        </a>
                        <div class="drop-down animated fadeIn dropdown-menu">
                           <div class="dropdown-content-heading d-flex justify-content-between">
                              <span class="">3 New Messages</span>  
                              <a href="javascript:void()" class="d-inline-block">
                              <span class="badge badge-pill gradient-1">3</span>
                              </a>
                           </div>
                           <div class="dropdown-content-body">
                              <ul>
                                 <li class="notification-unread">
                                    <a href="javascript:void()">
                                       <img class="float-left mr-3 avatar-img" src="images/avatar/1.jpg" alt="">
                                       <div class="notification-content">
                                          <div class="notification-heading">Saiful Islam</div>
                                          <div class="notification-timestamp">08 Hours ago</div>
                                          <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                       </div>
                                    </a>
                                 </li>
                                 <li class="notification-unread">
                                    <a href="javascript:void()">
                                       <img class="float-left mr-3 avatar-img" src="images/avatar/2.jpg" alt="">
                                       <div class="notification-content">
                                          <div class="notification-heading">Adam Smith</div>
                                          <div class="notification-timestamp">08 Hours ago</div>
                                          <div class="notification-text">Can you do me a favour?</div>
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="javascript:void()">
                                       <img class="float-left mr-3 avatar-img" src="images/avatar/3.jpg" alt="">
                                       <div class="notification-content">
                                          <div class="notification-heading">Barak Obama</div>
                                          <div class="notification-timestamp">08 Hours ago</div>
                                          <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="javascript:void()">
                                       <img class="float-left mr-3 avatar-img" src="images/avatar/4.jpg" alt="">
                                       <div class="notification-content">
                                          <div class="notification-heading">Hilari Clinton</div>
                                          <div class="notification-timestamp">08 Hours ago</div>
                                          <div class="notification-text">Hello</div>
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </li>
                     <li class="icons dropdown">
                        <a href="#" class="dropdown" data-bs-toggle="dropdown">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class="badge badge-pill gradient-2">3</span>
                        </a>
                        <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                           <div class="dropdown-content-body">
                              <ul>
                                 <li>
                                    <a href="javascript:void()">
                                       <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                       <div class="notification-content">
                                          <h6 class="notification-heading">Events near you</h6>
                                          <span class="notification-text">Within next 5 days</span> 
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="javascript:void()">
                                       <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                       <div class="notification-content">
                                          <h6 class="notification-heading">Event Started</h6>
                                          <span class="notification-text">One hour ago</span> 
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="javascript:void()">
                                       <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                       <div class="notification-content">
                                          <h6 class="notification-heading">Event Ended Successfully</h6>
                                          <span class="notification-text">One hour ago</span>
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="javascript:void()">
                                       <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                       <div class="notification-content">
                                          <h6 class="notification-heading">Events to Join</h6>
                                          <span class="notification-text">After two days</span> 
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </li>
                     <li class="icons dropdown d-none d-md-flex">
                        <a href="#" class="dropdown" data-bs-toggle="dropdown">
                        <span>English</span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                        </a>
                        <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                           <div class="dropdown-content-body">
                              <ul>
                                 <li><a href="javascript:void()">English</a></li>
                                 <li><a href="javascript:void()">Dutch</a></li>
                              </ul>
                           </div>
                        </div>
                     </li>
                     <li class="icons dropdown">
                        <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                           <span class="activity active"></span>
                           <img src="{{ asset('dash-assets/images/user/1.png') }}" height="40" width="40" alt="">
                        </div>
                        <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                           <div class="dropdown-content-body">
                              <ul>
                                 <li>
                                    <a href="app-profile.html"><i class="icon-user"></i> <span>Profile</span></a>
                                 </li>
                                 <li>
                                    <a href="javascript:void()">
                                       <i class="icon-envelope-open"></i> <span>Inbox</span> 
                                       <div class="badge gradient-3 badge-pill gradient-1">3</div>
                                    </a>
                                 </li>
                                 <hr class="my-2">
                                 <li>
                                    <a href="page-lock.html"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                 </li>
                                 <li><a href="page-login.html"><i class="icon-key"></i> <span>Logout</span></a></li>
                              </ul>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         
         <div class="nk-sidebar">
            <div class="nk-nav-scroll">
               <ul class="accordion" id="accordionLateral" >
                  <li class="nav-label">Dashboard</li>
                  <li class="accordion-item">
                  <div class="accordion-header">
      						<a class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapse-01" aria-expanded="true" aria-controls="collapse-01">
        			<i class="icon-chart menu-icon"></i><span class="nav-label">Estad??sticas</span>
      							</a>
    							</div>
                  <div class="collapse" id="collapse-01" style="">
                     <ul class="list-unstyled fw-normal pb-1 small">
                        <li><a href="/docs/5.0/components/accordion/" class="d-inline-flex align-items-center rounded active" aria-current="page">Accordion</a></li>
                        <li><a href="/docs/5.0/components/alerts/" class="d-inline-flex align-items-center rounded">Productos Vendidos</a></li>
                        <li><a href="/docs/5.0/components/badge/" class="d-inline-flex align-items-center rounded">Badge</a></li>
                     </ul>
                  </div>
                  </li>

                  <li class="accordion-item">
                  <div class="accordion-header">
      						<a class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapse-02" aria-expanded="true" aria-controls="collapse-02">
        			<i class="icon-layers menu-icon"></i><span class="nav-label">Art??culod</span>
      							</a>
    							</div>
                  <div class="collapse" id="collapse-02" style="">
                     <ul class="list-unstyled fw-normal pb-1 small">
                        
                        <li><a href="{{ route('dashboard.articulos') }}" class="d-inline-flex align-items-center rounded">Todos los Art??culos</a></li>
                        <li><a href="/docs/5.0/components/badge/" class="d-inline-flex align-items-center rounded">Badge</a></li>
                     </ul>
                  </div>
                  </li>

                  
               </ul>
            </div>
         </div>
         
         <div class="content-body">
            <div class="container-fluid mt-3">
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <div class="card gradient-1">
                        <div class="card-body">
                           <h3 class="card-title text-white">Products Sold</h3>
                           <div class="d-inline-block">
                              <h2 class="text-white">4565</h2>
                              <p class="text-white mb-0">Jan - March 2019</p>
                           </div>
                           <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="card gradient-2">
                        <div class="card-body">
                           <h3 class="card-title text-white">Net Profit</h3>
                           <div class="d-inline-block">
                              <h2 class="text-white">$ 8541</h2>
                              <p class="text-white mb-0">Jan - March 2019</p>
                           </div>
                           <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="card gradient-3">
                        <div class="card-body">
                           <h3 class="card-title text-white">New Customers</h3>
                           <div class="d-inline-block">
                              <h2 class="text-white">4565</h2>
                              <p class="text-white mb-0">Jan - March 2019</p>
                           </div>
                           <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="card gradient-4">
                        <div class="card-body">
                           <h3 class="card-title text-white">Customer Satisfaction</h3>
                           <div class="d-inline-block">
                              <h2 class="text-white">99%</h2>
                              <p class="text-white mb-0">Jan - March 2019</p>
                           </div>
                           <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                        </div>
                     </div>
                  </div>
               </div>
               
               
               
               
            <!-- #/ container -->
         </div>
         <!--**********************************
            Content body end
            ***********************************-->
         <!--**********************************
            Footer start
            ***********************************-->
         <div class="footer">
            <div class="copyright">
               <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
         </div>
         <!--**********************************
            Footer end
            ***********************************-->
      </div>
   </body>
</html>