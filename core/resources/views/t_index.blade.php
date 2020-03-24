<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SIPEJEK &middot; @yield('title')</title>
    <link rel="shortcut icon" href="{{{ asset('/assets/img/Capture.png') }}}">
    <link href="{{url('/assets/fontawesome/css/all.css')}}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{url('/assets/css/all.css')}}"> --}}
    <link href="{{url('/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('/assets/css/mdb.min.css')}}" rel="stylesheet">
    {{-- <link href="{{url('/assets/css/style.css')}}" rel="stylesheet"> --}}
    <style>
        .navbar {
            z-index: 1040;
        }
        .side-nav {
            margin-top: 49px !important;
        }
        .double-nav .breadcrumb-dn p {
            color: #fff;
        }
        html, body{
          background: #f0f0f0;
        }
    </style>
    @yield('head')
</head>
<body class="hidden-sn black-skin">
        <header>
          <div id="slide-out" class="side-nav sn-bg-4">
            <ul class="custom-scrollbar">
              {{-- Logo --}}
              <li>
                <div class="logo-wrapper waves-light" style="height:175px">
                  <a href="#"><img src="{{url('/upload/profile/'.Auth::user()->image)}}" class="rounded-circle img-fluid flex-center"></a>
                </div>
              </li>
              {{-- Accordion --}}
              <li>
                <ul class="collapsible collapsible-accordion">
                  <li><a class="collapsible-header waves-effect" href="{{url('dashboard')}}"><i class="fas fa-desktop"></i> Dashboard </a></li>
                  <li><a class="collapsible-header waves-effect" href="{{url('users')}}"><i class="fas fa-user "></i> Users </a></li>
                  <li><a class="collapsible-header waves-effect" href="{{url('projects')}}"><i class="fas fa-code"></i> Projects </a></li>
                  <li><a class="collapsible-header waves-effect" href="{{url('messages')}}"><i class="fas fa-envelope"></i> Message </a></li>
                  <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-chevron-right"></i> Menu <i class="fas fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                      <ul>
                        <li><a href="#" class="waves-effect">Submit listing</a>
                        </li>
                        <li><a href="#" class="waves-effect">Registration form</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li><a class="collapsible-header waves-effect arrow-r"><i class="far fa-hand-pointer"></i>
                      Another Menu<i class="fas fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                      <ul>
                        <li><a href="#" class="waves-effect">For bloggers</a>
                        </li>
                        <li><a href="#" class="waves-effect">For authors</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li><a class="collapsible-header waves-effect arrow-r"><i class="far fa-eye"></i> Other Menu<i class="fas fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                      <ul>
                        <li><a href="#" class="waves-effect">Introduction</a>
                        </li>
                        <li><a href="#" class="waves-effect">Monthly meetings</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li><a class="collapsible-header waves-effect arrow-r"><i class="far fa-envelope"></i> Long Menu<i
                        class="fas fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                      <ul>
                        <li><a href="#" class="waves-effect">FAQ</a>
                        </li>
                        <li><a href="#" class="waves-effect">Write a message</a>
                        </li>
                        <li><a href="#" class="waves-effect">FAQ</a>
                        </li>
                        <li><a href="#" class="waves-effect">Write a message</a>
                        </li>
                        <li><a href="#" class="waves-effect">FAQ</a>
                        </li>
                        <li><a href="#" class="waves-effect">Write a message</a>
                        </li>
                        <li><a href="#" class="waves-effect">FAQ</a>
                        </li>
                        <li><a href="#" class="waves-effect">Write a message</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  
                </ul>
              </li>
              <!--/. Side navigation links -->
            </ul>
            <div class="sidenav-bg mask-strong"></div>
          </div>

          <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg double-nav">
            <div class="float-left">
              <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
            </div>

            <div class="breadcrumb-dn mr-auto">
              <p>Sistem Pengelola Projek</p>
            </div>

            <ul class="nav navbar-nav nav-flex-icons ml-auto">
              <li class="nav-item">
                <a class="nav-link"><i class="fa fa-bell"></i> <span class="clearfix d-none d-sm-inline-block">Notification</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block">{{Auth::user()->fullname}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="{{url('myProfile')}}">Change Profile</a>
                  <a class="dropdown-item" href="{{url('logout')}}">Logout</a>
                </div>
              </li>
            </ul>
          </nav>
        </header>
        <main>
          <div class="container-fluid">
            @yield('content')
            {{-- <div style="height: 2000px"></div> --}}
          </div>
        </main>
        <!--Main Layout-->
      
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