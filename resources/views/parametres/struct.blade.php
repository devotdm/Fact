<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>{{ $title }}</title>

        <link href="{{ asset('fontawesome-free/css/all.css') }}" rel="stylesheet" type="text/css">

        <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap/css/bootstrap-tagsinput.css') }}" rel="stylesheet">

        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/tagsinput.css') }}" rel="stylesheet">

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            @include($path.'parametres.includes.menu')

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <nav class="navbar navbar-expand navbar-dark bg-dark topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link text-dark d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                        
                        <h3 class="text-light ml-2">{{ $title }}</h3>
                        
                    </nav>

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        @yield('content')

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->



            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
        <script src="{{ asset('bootstrap/js/bootstrap-tagsinput.js') }}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{ asset('jquery-easing/jquery.easing.min.js') }}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{ asset('js/sidebar.js') }}"></script>

        @yield('scripts')


    </body>

</html>
