<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('template/user/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/user/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('template/user/plugins/pace-progress/themes/black/pace-theme-flat-top.css') }}"> --}}
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('template/user/css/adminlte.min.css') }}">
    <script src="{{ mix('/js/app.js') }}" defer></script>
    @routes
    @inertiaHead
    </head>
    <body class="sidebar-mini layout-fixed pace-primary">
        @inertia
        <!-- jQuery -->
        <script src="{{ asset('template/user/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('template/user/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('template/user/js/adminlte.min.js') }}"></script>
        {{-- <script src="{{ asset('template/user/plugins/pace-progress/pace.min.js') }}"></script> --}}
    </body>
</html>