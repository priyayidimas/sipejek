@extends('t_index')
@section('title')
    Login
@endsection
@section('head')

@endsection
@section('content')
<body class="hidden-sn grey-skin">
        <header>
          <!-- Sidebar navigation -->
          <div id="slide-out" class="side-nav sn-bg-4">
            <ul class="custom-scrollbar">
              <!-- Logo -->
              <li>
                <div class="waves-light" style="height:90px">
                  <a href="#"><img src="{{url('/assets/img/Capture.png')}}" class="img-fluid flex-center"></a>
                </div>
              </li>
              <!--/. Logo -->
              <!-- Side navigation links -->
              <li>
                <ul class="collapsible collapsible-accordion">
                  <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-chevron-right"></i> Submit
                      blog<i class="fas fa-angle-down rotate-icon"></i></a>
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
                      Instruction<i class="fas fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                      <ul>
                        <li><a href="#" class="waves-effect">For bloggers</a>
                        </li>
                        <li><a href="#" class="waves-effect">For authors</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li><a class="collapsible-header waves-effect arrow-r"><i class="far fa-eye"></i> About<i class="fas fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                      <ul>
                        <li><a href="#" class="waves-effect">Introduction</a>
                        </li>
                        <li><a href="#" class="waves-effect">Monthly meetings</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li><a class="collapsible-header waves-effect arrow-r"><i class="far fa-envelope"></i> Contact me<i
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
                  <li><a class="collapsible-header waves-effect" href="#"><i class="fas fa-pencil-alt"></i>Blog</a></li>
                  <li><a class="collapsible-header waves-effect" href="#"><i class="fas fa-newspaper"></i>News</a></li>
                  <li><a class="collapsible-header waves-effect" href="#"><i class="fas fa-desktop"></i>Magazine</a></li>
                </ul>
              </li>
              <!--/. Side navigation links -->
            </ul>
            <div class="sidenav-bg mask-strong"></div>
          </div>
          <!--/. Sidebar navigation -->
          <!-- Navbar -->
          <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg double-nav">
            <!-- SideNav slide-out button -->
            <div class="float-left">
              <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
            </div>
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto">
              <p>Material Design for Bootstrap</p>
            </div>
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
              <li class="nav-item">
                <a class="nav-link"><i class="fa fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link"><i class="fa fa-comments-o"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link"><i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Account</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- /.Navbar -->
        </header>
        <!--/.Double navigation-->
      
        <!--Main Layout-->
        <main>
          <div class="container-fluid mt-5">
            <h2>Advanced Double Navigation with a hidden SideNav under fixed Navbar:</h2>
            <br>
            <h5>1. Hidden side menu. Click "hamburger" icon in the top left corner to open it</h5>
            <h5>2. Fixed Navbar. It will always stay visible on the top, even when you scroll down.</h5>
            <div style="height: 2000px"></div>
          </div>
        </main>
        <!--Main Layout-->
      
  </body>
@endsection
@section('script')
    <script>
    $(document).ready(function () {
        // SideNav Button Initialization
        $(".button-collapse").sideNav();
        // SideNav Scrollbar Initialization
        var sideNavScrollbar = document.querySelector('.custom-scrollbar');
        var ps = new PerfectScrollbar(sideNavScrollbar);

        // $('.button-collapse').sideNav({
        //     edge: 'left', // Choose the horizontal origin
        //     closeOnClick: false, // Closes side-nav on &lt;a&gt; clicks, useful for Angular/Meteor
        //     breakpoint: 1440, // Breakpoint for button collapse
        //     MENU_WIDTH: 240, // Width for sidenav
        //     timeDurationOpen: 300, // Time duration open menu
        //     timeDurationClose: 200, // Time duration open menu
        //     timeDurationOverlayOpen: 50, // Time duration open overlay
        //     timeDurationOverlayClose: 200, // Time duration close overlay
        //     easingOpen: 'easeOutQuad', // Open animation
        //     easingClose: 'easeOutCubic', // Close animation
        //     showOverlay: true, // Display overflay
        //     showCloseButton: false // Append close button into siednav
        // });
    });
    </script>
@endsection