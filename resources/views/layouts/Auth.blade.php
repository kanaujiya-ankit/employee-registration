<!DOCTYPE html>
<html lang="en">

<head>
    <title>Employee Registration Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Rubio Admin" />
    <meta name="keywords" content="Rubio Admin"/>
    <meta name="author" content="Arovez"/>

    <!-- Favicon icon -->
    <!-- <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon"> -->
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/fontawesome-all.min.css') }}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/animation/css/animate.min.css') }}">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>
    @yield('content')

    <!-- Required Js -->
<script src="{{ asset('assets/js/vendor-all.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
</body>