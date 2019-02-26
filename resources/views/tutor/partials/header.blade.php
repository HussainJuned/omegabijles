<!-- header.blade.php -->
<link rel="stylesheet" href="{{ asset('public/adminn/style.css') }}">
 <header class="main-header">
    <!-- Logo -->
    <a style="background-color: #4391F2;" href="{{ url('/') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b style="font-size: 40px;">O</b></span>
      <!-- logo for regular state and mobile devices -->
      <span style="width:200px;" class="logo-lg"><img class="logo-mini-admin" style="width:200px;" src="{{asset('public/frontEnd/img/icons/logo_w@3x.svg')}}"></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav style="background-color: #4391F2;" class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ URL::to('public/uploads') }}/{{ $tutor->image }}" class="user-image" alt="User Image">
              <span class="hidden-xs">Omegabijles</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ URL::to('public/uploads') }}/{{ $tutor->image }}" class="img-circle" alt="User Image">
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{ url('/tutor/changepassword') }}" class="btn btn-default btn-flat">Wijzig wachtwoord</a>
                </div>
                <div class="pull-right">
                  <a href="{{ url('/tutor/logout') }}" class="btn btn-default btn-flat">Afmelden</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>