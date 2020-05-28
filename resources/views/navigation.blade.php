<header>
  <div id="slide-out" class="side-nav sn-bg-4">
    <ul class="custom-scrollbar">
      {{-- Logo --}}
      <li>
        <div class="logo-wrapper waves-light" style="height:232px">
          <a href="#"><img src="{{url('/upload/profile/'.$auth->image)}}" class="rounded-circle img-fluid flex-center"></a>
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
