<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PerformEdge Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        if (
            localStorage.getItem('color-theme') === 'dark' ||
            (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)
        ) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-white">
<div class="antialiased">
    <!-- Navbar -->
    @include('partial.navbar')

    <!-- Sidebar -->
    @include('partial.sidebar')

    <!-- Main content -->
    <main class="p-4 pt-20 md:ml-64 min-h-screen">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-semibold">@yield('page')</h1>
            <nav class="text-sm text-gray-500 dark:text-gray-300">
                <ol class="list-reset flex">
                    <li><a href="/home" class="hover:underline">Home</a></li>
                    <li><span class="mx-2">/</span></li>
                    <li>@yield('page')</li>
                </ol>
            </nav>
        </div>

        <!-- Card Wrapper -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md mb-6">
            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 flex justify-between items-center">
                <h3 class="font-bold text-lg">@yield('title')</h3>
                <button type="button" class="text-gray-500 hover:text-gray-800 dark:hover:text-gray-300">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
            <div class="p-6">
                @yield('content')
            </div>
            <div class="px-6 py-4 border-t border-gray-200 dark:border-gray-700">
                @yield('footer')
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="text-center text-sm py-4 border-t border-gray-200 dark:border-gray-700">
        <p>
            <strong>&copy; 2025 <a href="https://ult.kemdikbud.go.id/" class="hover:underline">ULT Kemendikdasmen</a>.</strong>
            All rights reserved.
        </p>
    </footer>
</div>
@stack('scripts')
</body>
</html>


{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <title>Document</title>--}}
{{--    @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
{{--    <script>--}}
{{--        // On page load or when changing themes, best to add inline in `head` to avoid FOUC--}}
{{--        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {--}}
{{--            document.documentElement.classList.add('dark');--}}
{{--        } else {--}}
{{--            document.documentElement.classList.remove('dark')--}}
{{--        }--}}
{{--    </script>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="antialiased bg-gray-50 dark:bg-gray-900">--}}
{{--    <!-- Navbar -->--}}
{{--    @include('partial.navbar');--}}

{{--    <!-- Sidebar -->--}}
{{--    @include('partial.sidebar');--}}

{{--    <main class="p-4 md:ml-64 h-auto pt-20">--}}
{{--        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">--}}
{{--            <div--}}
{{--                class="border-2 border-dashed border-gray-300 rounded-lg dark:border-gray-600 h-32 md:h-64"--}}
{{--            ></div>--}}
{{--            <div--}}
{{--                class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"--}}
{{--            ></div>--}}
{{--            <div--}}
{{--                class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"--}}
{{--            ></div>--}}
{{--            <div--}}
{{--                class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"--}}
{{--            ></div>--}}
{{--        </div>--}}
{{--        <div--}}
{{--            class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4"--}}
{{--        ></div>--}}
{{--        <div class="grid grid-cols-2 gap-4 mb-4">--}}
{{--            <div--}}
{{--                class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"--}}
{{--            ></div>--}}
{{--            <div--}}
{{--                class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"--}}
{{--            ></div>--}}
{{--            <div--}}
{{--                class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"--}}
{{--            ></div>--}}
{{--            <div--}}
{{--                class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"--}}
{{--            ></div>--}}
{{--        </div>--}}
{{--        <div--}}
{{--            class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4"--}}
{{--        ></div>--}}
{{--        <div class="grid grid-cols-2 gap-4">--}}
{{--            <div--}}
{{--                class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"--}}
{{--            ></div>--}}
{{--            <div--}}
{{--                class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"--}}
{{--            ></div>--}}
{{--            <div--}}
{{--                class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"--}}
{{--            ></div>--}}
{{--            <div--}}
{{--                class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"--}}
{{--            ></div>--}}
{{--        </div>--}}
{{--    </main>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}


{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <title>AdminLTE 3 | Dashboard</title>--}}

{{--    <!-- Google Font: Source Sans Pro -->--}}
{{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">--}}
{{--    <!-- Font Awesome -->--}}
{{--    <link rel="stylesheet" href="{{asset('dashboardtemplate/plugins/fontawesome-free/css/all.min.css')}}">--}}
{{--    <!-- Ionicons -->--}}
{{--    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">--}}
{{--    <!-- Tempusdominus Bootstrap 4 -->--}}
{{--    <link rel="stylesheet" href="{{asset('dashboardtemplate/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">--}}
{{--    <!-- iCheck -->--}}
{{--    <link rel="stylesheet" href="{{asset('dashboardtemplate/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">--}}
{{--    <!-- JQVMap -->--}}
{{--    <link rel="stylesheet" href="{{asset('dashboardtemplate/plugins/jqvmap/jqvmap.min.css')}}">--}}
{{--    <!-- Theme style -->--}}
{{--    <link rel="stylesheet" href="{{asset('dashboardtemplate/dist/css/adminlte.min.css')}}">--}}
{{--    <!-- overlayScrollbars -->--}}
{{--    <link rel="stylesheet" href="{{asset('dashboardtemplate/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">--}}
{{--    <!-- Daterange picker -->--}}
{{--    <link rel="stylesheet" href="{{asset('dashboardtemplate/plugins/daterangepicker/daterangepicker.css')}}">--}}
{{--    <!-- summernote -->--}}
{{--    <link rel="stylesheet" href="{{asset('dashboardtemplate/plugins/summernote/summernote-bs4.min.css')}}">--}}
{{--</head>--}}
{{--<body class="hold-transition sidebar-mini layout-fixed">--}}
{{--<div class="wrapper">--}}

{{--    <!-- Preloader -->--}}
{{--    <div class="preloader flex-column justify-content-center align-items-center">--}}
{{--        <img class="animation__shake" src="{{asset('logo.png')}}" alt="AdminLTELogo" height="60" width="60">--}}
{{--    </div>--}}

{{--    <!-- Navbar -->--}}
{{--    @include('partial.navbar')--}}
{{--    <!-- /.navbar -->--}}

{{--    <!-- Main Sidebar Container -->--}}
{{--    <aside class="main-sidebar sidebar-dark-primary elevation-4">--}}
{{--        <!-- Brand Logo -->--}}
{{--        <a href="/home" class="brand-link">--}}
{{--            <img src="{{ asset('images/logo.png') }}" alt="Logo PE" class="brand-image img elevation-3" style="opacity: .8">--}}
{{--            <span class="brand-text font-weight-bold">PerformEdge</span>--}}
{{--        </a>--}}

{{--        <!-- Sidebar -->--}}
{{--        @include('partial.sidebar')--}}
{{--        <!-- /.sidebar -->--}}
{{--    </aside>--}}

{{--    <!-- Content Wrapper. Contains page content -->--}}
{{--    <div class="content-wrapper">--}}
{{--        <!-- Content Header (Page header) -->--}}
{{--        <section class="content-header">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="row mb-2">--}}
{{--                    <div class="col-sm-6">--}}
{{--                        <h1>@yield('page')</h1>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-6">--}}
{{--                        <ol class="breadcrumb float-sm-right">--}}
{{--                            <li class="breadcrumb-item"><a href="/home">Home</a></li>--}}
{{--                            <li class="breadcrumb-item active">@yield('page')</li>--}}
{{--                        </ol>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div><!-- /.container-fluid -->--}}
{{--        </section>--}}

{{--        <!-- Main content -->--}}
{{--        <section class="content">--}}

{{--            <!-- Default box -->--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">--}}
{{--                    <h3 class="card-title">@yield('title')</h3>--}}

{{--                    <div class="card-tools">--}}
{{--                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">--}}
{{--                            <i class="fas fa-minus"></i>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-body">--}}
{{--                    @yield('content')--}}
{{--                </div>--}}
{{--                <!-- /.card-body -->--}}
{{--                <div class="card-footer">--}}
{{--                    @yield('footer')--}}
{{--                </div>--}}
{{--                <!-- /.card-footer-->--}}
{{--            </div>--}}
{{--            <!-- /.card -->--}}

{{--        </section>--}}
{{--        <!-- /.content -->--}}
{{--    </div>--}}
{{--    <!-- /.content-wrapper -->--}}

{{--    <footer class="main-footer">--}}
{{--        <strong>Copyright &copy; 2025 <a href="https://ult.kemdikbud.go.id/">ULT Kemendikdasmen</a>.</strong> All rights reserved.--}}
{{--    </footer>--}}

{{--    <!-- Control Sidebar -->--}}
{{--    <aside class="control-sidebar control-sidebar-dark">--}}
{{--        <!-- Control sidebar content goes here -->--}}
{{--    </aside>--}}
{{--    <!-- /.control-sidebar -->--}}
{{--</div>--}}
{{--<!-- ./wrapper -->--}}

{{--<!-- jQuery -->--}}
{{--<script src="{{asset('dashboardtemplate/plugins/jquery/jquery.min.js')}}"></script>--}}
{{--<!-- jQuery UI 1.11.4 -->--}}
{{--<script src="{{asset('dashboardtemplate/plugins/jquery-ui/jquery-ui.min.js')}}"></script>--}}
{{--<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->--}}
{{--<script>--}}
{{--    $.widget.bridge('uibutton', $.ui.button)--}}
{{--</script>--}}
{{--<!-- Bootstrap 4 -->--}}
{{--<script src="{{asset('dashboardtemplate/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>--}}
{{--<!-- ChartJS -->--}}
{{--<script src="{{asset('dashboardtemplate/plugins/chart.js/Chart.min.js')}}"></script>--}}
{{--<!-- Sparkline -->--}}
{{--<script src="{{asset('dashboardtemplate/plugins/sparklines/sparkline.js')}}"></script>--}}
{{--<!-- JQVMap -->--}}
{{--<script src="{{asset('pdashboardtemplate/lugins/jqvmap/jquery.vmap.min.js')}}"></script>--}}
{{--<script src="{{asset('dashboardtemplate/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>--}}
{{--<!-- jQuery Knob Chart -->--}}
{{--<script src="{{asset('dashboardtemplate/plugins/jquery-knob/jquery.knob.min.js')}}"></script>--}}
{{--<!-- daterangepicker -->--}}
{{--<script src="{{asset('dashboardtemplate/plugins/moment/moment.min.js')}}"></script>--}}
{{--<script src="{{asset('dashboardtemplate/plugins/daterangepicker/daterangepicker.js')}}"></script>--}}
{{--<!-- Tempusdominus Bootstrap 4 -->--}}
{{--<script src="{{asset('dashboardtemplate/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>--}}
{{--<!-- Summernote -->--}}
{{--<script src="{{asset('dashboardtemplate/plugins/summernote/summernote-bs4.min.js')}}"></script>--}}
{{--<!-- overlayScrollbars -->--}}
{{--<script src="{{asset('dashboardtemplate/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>--}}
{{--<!-- AdminLTE App -->--}}
{{--<script src="{{asset('dashboardtemplate/dist/js/adminlte.js')}}"></script>--}}
{{--<!-- AdminLTE for demo purposes -->--}}
{{--<script src="{{asset('dashboardtemplate/dist/js/demo.js')}}"></script>--}}
{{--<!-- AdminLTE dashboard demo (This is only for demo purposes) -->--}}
{{--<script src="{{asset('dashboardtemplate/dist/js/pages/dashboard.js')}}"></script>--}}
{{--</body>--}}
{{--</html>--}}
