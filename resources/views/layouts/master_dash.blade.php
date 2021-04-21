<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="{{ asset('dash/img/favicon.ico') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>@yield('title')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('dash/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ asset('dash/css/animate.min.css') }}" rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{ asset('dash/css/light-bootstrap-dashboard.css') }}" rel="stylesheet" />


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('dash/css/demo.css') }}" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('dash/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />

     {{-- Font Awesome --}}
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    @yield('content')

</body>

<!--   Core JS Files   -->
<script src="{{ asset('dash/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
<script src="{{ asset('dash/js/bootstrap.min.js') }}" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="{{ asset('dash/js/bootstrap-checkbox-radio-switch.js') }}"></script>

<!--  Charts Plugin -->
<script src="{{ asset('dash/js/chartist.min.js') }}"></script>

<!--  Notifications Plugin    -->
<script src="{{ asset('dash/js/bootstrap-notify.js') }}"></script>


<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="{{ asset('dash/js/light-bootstrap-dashboard.js') }}"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="{{ asset('dash/js/demo.js') }}"></script>

{{-- CK Editor --}}
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

{{-- Sweet Alert --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


{{-- My JS --}}
@yield('delete')


</html>
