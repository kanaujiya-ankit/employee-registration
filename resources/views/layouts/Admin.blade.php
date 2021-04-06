<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rubio Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Rubio Admin" />
    <meta name="keywords" content="Rubio Admin"/>
    <meta name="author" content="Arovez"/>

    <!-- Favicon icon -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/fontawesome-all.min.css') }}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/animation/css/animate.min.css') }}">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    
</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    @include('admin.layouts.sideBar')
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    @include('admin.layouts.headerBar')
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    @yield('content')
    <!-- Required Js -->

    <script src="{{ asset('assets/js/vendor-all.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/pcoded.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" ></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js" ></script>
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
</body>
</html>
