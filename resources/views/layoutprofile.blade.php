
<!doctype html>
<html lang="en"> 
    <head>           
        <meta charset="utf-8" />
        <title>Dashboard| BBCar</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href=" {{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href=" {{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        @stack('pone')

    </head>

        <body data-sidebar="dark">
            {{-- 
                <x-app-layout>
                <x-slot name="header">
                    @include('master')
                </x-slot>
            </x-app-layout> --}}
            
            <div id="layout-wrapper">
                    

                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="ie=edge">
                    <link rel="stylesheet" href="{{asset('boot/css/bootstrap.min.css')}}">
                </head>
                <body>
                    <header id="page-topbar">
                
                        <div class="navbar-header">
                            <div class="d-flex">
                                <!-- LOGO -->
                                <div class="navbar-brand-box">
                                    <br>
                                    <div class="titl h3 text-white ">
                                       BroomBroomCar
                                     
                                    </div>
                                </div> 
                    
                                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                                    <i class="fa fa-fw fa-bars"></i>
                                </button>
                    
                                <!-- App Search-->
                                <form class="app-search d-none d-lg-block">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <span class="bx bx-search-alt"></span>
                                    </div>
                                </form>
                    
                                <div class="dropdown dropdown-mega d-none d-lg-block ms-2">
                                    <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                    
                    
                                        <span key="t-megamenu"></span>
                    
                    
                                       <!-- <i class="mdi mdi-chevron-down"></i> -->
                    
                                    </button>
                                    
                                </div>
                            </div>
                    
                            <div class="d-flex">
                    
                                <div class="dropdown d-inline-block d-lg-none ms-2">
                                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-magnify"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                        aria-labelledby="page-header-search-dropdown">
                    
                                        <form class="p-3">
                                            <div class="form-group m-0">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                    
                              
                    
                                <div class="dropdown d-none d-lg-inline-block ms-1">
                                    <button type="button" class="btn header-item noti-icon waves-effect"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       <!-- <i class="bx bx-customize"></i>  -->
                                    </button>
                                   
                                </div>
                    
                                <div class="dropdown d-none d-lg-inline-block ms-1">
                                    <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                                        <i class="bx bx-fullscreen"></i>
                                    </button>
                                </div>
                    
                                <div class="dropdown d-inline-block">
                                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       <!-- <i class="bx bx-bell bx-tada"></i> -->
                                        <span class="badge bg-danger rounded-pill"></span>
                                    </button>
                                    
                                </div>
                  
                            </div>
                        </div>
                    </header>
                </body>
                </html>
                <!-- ========== Left Sidebar Start ========== -->
                @include('sidebar')
                <!-- Left Sidebar End -->
            </div>
    
            <div class="main-content">

                @yield('content')


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © BBCar.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block text-primary h6">
                                    BroomBroomCar
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

            <!-- JAVASCRIPT -->
            <script src=" {{asset('assets/libs/jquery/jquery.min.js')}}"></script>
            <script src="  {{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
            <script src="  {{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
            <script src=" {{asset('assets/libs/simplebar/simplebar.min.js')}} "></script>
            <script src="{{asset('assets/libs/node-waves/waves.min.js')}}  "></script>

            <!-- apexcharts -->
            <script src=" {{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

            <!-- dashboard init -->
            <script src="{{asset('assets/js/pages/dashboard.init.js')}} "></script>

            <!-- App js -->
            <script src="{{asset('assets/js/app.js')}}"></script>

        
          @stack('java')
        </body>
</html>