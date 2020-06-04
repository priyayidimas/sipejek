@php
    $auth = App\model\User::find(Auth::id());
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
    <link href="{{url('/assets/css/mdb.min.4810.css')}}" rel="stylesheet">
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
<div class="just-modal">
    <div class="modal fade" id="notificationModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-info" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <p id="modalTitle" class="heading lead"></p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="row notificationLoader">
                        <div class="col-md-12" style="text-align: center">
                            <div class="preloader-wrapper active">
                                <div class="spinner-layer spinner-blue-only ">
                                    <div class="circle-clipper left">
                                        <div class="circle"></div>
                                    </div>
                                    <div class="gap-patch">
                                        <div class="circle"></div>
                                    </div>
                                    <div class="circle-clipper right">
                                        <div class="circle"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="notificationContent" style="max-height: 70vh; overflow-y: scroll"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{url('/assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{url('/assets/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{url('/assets/fontawesome/js/all.min.js')}}"></script>
<script type="text/javascript" src="{{url('/assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('/assets/js/mdb.min.4810.js')}}"></script>
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
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr['error']("{{$error}}");
                // alert("{{$error}}");
            @endforeach
        @endif

        $('.mdb-select').materialSelect();
        $("#mdb-lightbox-ui").load("assets/css/mdb-addons/mdb-lightbox-ui.html");

        $("#notificationModal").on('show.bs.modal', function () {
            var modal = $(this);
            modal.find('#modalTitle').html('Latest Notification');
            setTimeout(function () { 
                modal.find('.notificationLoader').css('display','none');
                modal.find('.notificationContent').css('display','block');
            },400);
            setTimeout(function () { 
                modal.find('.notificationContent').load('/showNotification');
            },300);
        });
        $("#notificationModal").on('hide.bs.modal', function () {
            var modal = $(this);
            modal.find('.deleteLoader').css('display','block');
            modal.find('.deleteContent').css('display','none');
            $('.notifCount').css('display','none');
        });
    });
</script>
@yield('script')
</html>
