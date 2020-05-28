@php
    $auth = Auth::user();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SIPEJEK &middot; @yield('title')</title>
    <link rel="shortcut icon" href="{{{ asset('/assets/img/Capture.png') }}}">
    <link href="{{url('/assets/fontawesome/css/all.css')}}" rel="stylesheet">
    <link href="{{url('/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('/assets/css/mdb.min.css')}}" rel="stylesheet">
    <link href="{{url('/assets/css/style.css')}}" rel="stylesheet">
    @yield('head')
</head>
<body class="hidden-sn black-skin">
    @include('navigation')
    <main>
        <div class="container-fluid">
            @yield('content')
        </div>
    </main>
</body>
<script type="text/javascript" src="{{url('/assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{url('/assets/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{url('/assets/fontawesome/js/all.min.js')}}"></script>
<script type="text/javascript" src="{{url('/assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('/assets/js/mdb.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        new WOW().init();
        $('.datepicker').pickadate();
        $('.timepicker').pickatime({
            twelvehour: false
        });
        $(".button-collapse").sideNav();
        var sideNavScrollbar = document.querySelector('.custom-scrollbar');
        var ps = new PerfectScrollbar(sideNavScrollbar);

        @if(session('msg'))
            toastr["{{session('color')}}"]("{{session('msg')}}");
        @endif

        $('.mdb-select').materialSelect();
        $("#mdb-lightbox-ui").load("assets/css/mdb-addons/mdb-lightbox-ui.html");
    });
</script>
@yield('script')
</html>
