<header>
  <div id="slide-out" class="side-nav sn-bg-4">
    <ul class="custom-scrollbar">
      {{-- Logo --}}
      <li>
        {{-- <div class="logo-wrapper waves-light" style="height:232px"> --}}
        <div class="logo-wrapper waves-light" style="height:175px">
          <a href="#"><img src="{{url($auth->image)}}" class="rounded-circle img-fluid flex-center"></a>
        </div>
      </li>
      {{-- Accordion --}}
      <li>
        <ul class="collapsible collapsible-accordion">
          <li><a class="collapsible-header waves-effect" href="{{url('dashboard')}}"><i class="fas fa-desktop"></i> Dashboard </a></li>
          <li><a class="collapsible-header waves-effect" href="{{url('projects')}}"><i class="fas fa-code"></i> Projects </a></li>
          <li><a class="collapsible-header waves-effect" href="{{url('users')}}"><i class="fas fa-user "></i> Users </a></li>
          {{-- <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-chevron-right"></i> Menu <i class="fas fa-angle-down rotate-icon"></i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="#" class="waves-effect">Submit listing</a>
                </li>
                <li><a href="#" class="waves-effect">Registration form</a>
                </li>
              </ul>
            </div>
          </li> --}}

        </ul>
      </li>
    </ul>
    <div class="sidenav-bg mask-strong"></div>
  </div>

  <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg double-nav">
    <div class="float-left">
      <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
    </div>

    <div class="breadcrumb-dn mr-auto">
      <p><a href="{{url('')}}">Sistem Pengelola Projek</a></p>
    </div>

    <ul class="nav navbar-nav nav-flex-icons ml-auto">
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light" data-toggle="modal" href="#notificationModal">
          @if ($auth->unreadNotifications->count() > 0)
            <span class="notifCount badge badge-danger ml-2">{{$auth->unreadNotifications->count()}}</span>
          @endif
          <i class="fas fa-bell"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block">{{$auth->nama}}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{url('myProfile')}}">Change Profile</a>
          <a class="dropdown-item" href="{{url('logout')}}">Logout</a>
        </div>
      </li>
    </ul>
  </nav>
</header>
