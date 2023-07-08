
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
            <div id="layout-wrapper">
             <!-- ========== header ========== -->
                @include('header')
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

        
          @stack('add_script')
        </body>
</html>