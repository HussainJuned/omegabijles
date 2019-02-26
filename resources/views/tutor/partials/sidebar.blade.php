 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    <div class="user-panel">
        <div style="margin-left: 32px;"; class="pull-left image">
          <img src="{{ URL::to('public/uploads') }}/{{ $tutor->image }}" class="img-circle" style="width:50px;height:50px;" alt="User Image">
        </div>

      </div>
      <ul class="sidebar-menu">
        <li class="header">Menu</li>
        <li class="{{ (Request::is('tutor/home') ? 'active' : '') }} treeview">
          <a href="{{ url('/tutor/home') }}">
           <i style="color: #4391F2;" class="fa fa-dashboard"></i><span style="color: #4391F2;">Dashboard</span>
          </a>
        </li>
        <li class="{{ (Request::is('tutor/mijnprofiel') ? 'active' : '') }} treeview">
          <a href="{{ url('/tutor/mijnprofiel') }}">
            <i style="color: #4391F2;" class="fa fa-pencil-square-o"></i>
            <span style="color: #4391F2;">Mijn profiel</span>
          </a>
         </li>
        <li class="{{ (Request::is('tutor/persoonlijkeinfo') ? 'active' : '') }} treeview">
          <a href="{{ url('/tutor/persoonlijkeinfo') }}">
           <i style="color: #4391F2;" class="fa fa-user"></i><span style="color: #4391F2;">Persoonlijke info</span>
          </a>
        </li>
         <li class="{{ (Request::is('tutor/mijnvakken') ? 'active' : '') }} treeview">
          <a href="{{ url('/tutor/mijnvakken') }}">
            <i style="color: #4391F2;" class="fa fa-graduation-cap"></i>
            <span style="color: #4391F2;">Mijn vakken</span>
          </a>
         </li>
         <li class="{{ (Request::is('tutor/email') ? 'active' : '') }} treeview">
          <a href="http://vps371315.ovh.net/roundcube/" target="_blank">
            <i style="color: #4391F2;" class="fa fa-envelope"></i>
            <span style="color: #4391F2;">Email</span>
          </a>
         </li>
         <li class="{{ (Request::is('tutor/videos') ? 'active' : '') }} treeview">
          <a href="http://www.youtube.com/playlist?list=PLgYhy0oikCTdBayIpXh9ADT8O6oPl2tLn" target="_blank">
            <i style="color: #4391F2;" class="fa fa-video-camera"></i>
            <span style="color: #4391F2;">Video's</span>
          </a>
         </li>
         <li class="{{ (Request::is('tutor/uren') ? 'active' : '') }} treeview">
          <a href="http://goo.gl/forms/Gi0nLmJpXzTOhQ5S2" target="_blank">
            <i style="color: #4391F2;" class="fa fa-clock-o"></i>
            <span style="color: #4391F2;">Uren</span>
          </a>
         </li>
         <li class="{{ (Request::is('tutor/evaluatie') ? 'active' : '') }} treeview">
          <a href="http://drive.google.com/open?id=1MUIV3Rdms3a89GVZ7HQkohPYXZBzE7jq" target="_blank">
            <i style="color: #4391F2;" class="fa fa-check"></i>
            <span style="color: #4391F2;">Evaluatie</span>
          </a>
         </li>
         <li class="{{ (Request::is('tutor/maandevaluatie') ? 'active' : '') }} treeview">
          <a href="http://goo.gl/forms/2DJgEiWBq7RDBSgH3" target="_blank">
            <i style="color: #4391F2;" class="fa fa-check"></i>
            <i style="color: #4391F2;margin-left:-16px;" class="fa fa-check"></i>
            <span style="color: #4391F2;">Maandevaluatie</span>
          </a>
         </li>
         <li class="{{ (Request::is('tutor/documenten') ? 'active' : '') }} treeview">
          <a href="http://drive.google.com/drive/folders/1iNG7dWLO6bv5wW5uthX4Elzv06EiZ0Td?usp=sharing" target="_blank">
            <i style="color: #4391F2;" class="fa fa-file"></i>
            <span style="color: #4391F2;">Documenten</span>
          </a>
         </li>
         <li class="{{ (Request::is('tutor/changepassword') ? 'active' : '') }} treeview">
          <a href="{{ url('/tutor/changepassword') }}">
            <i style="color: #4391F2;" class="fa fa-key"></i>
            <span style="color: #4391F2;">Wijzig wachtwoord</span>
          </a>
         </li>
         <li class="{{ (Request::is('tutor/logout') ? 'active' : '') }} treeview">
          <a href="{{ url('/tutor/logout') }}">
            <i style="color: #4391F2;" class="fa fa-sign-out"></i>
            <span style="color: #4391F2;">Afmelden</span>
          </a>
         </li>
         
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  