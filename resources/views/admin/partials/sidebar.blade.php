 <aside  class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('public/adminn/dist/img/user2-160x160.jpg' ) }}" class="img-circle" alt="User Image">
        </div>
        <div  class="pull-left info">
          <p style="color: #4391F2;margin-top: 10px;">Omegabijles</p>
        </div>
      </div>
      <ul class="sidebar-menu">
        <li class="header">Menu</li>
        <li class="active treeview">
          <a href="{{ url('/admin') }}">
           <i style="color: #4391F2;" class="fa fa-dashboard"></i><span style="color: #4391F2;">Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="http://vps371315.ovh.net/roundcube/" target="_blank">
            <i style="color: #4391F2;" class="fa fa-envelope"></i>
            <span style="color: #4391F2;">Email</span>
          </a>
         </li>
         <li class="treeview">
          <a href="http://drive.google.com/drive/u/1/folders/1AJyiJXRim_vv3fQdb2aTsbHATgM9_w1F" target="_blank">
            <i style="color: #4391F2;" class="fa fa-file"></i>
            <span style="color: #4391F2;">Documenten</span>
          </a>
         </li>
         <li class="treeview">
          <a href="https://docs.google.com/spreadsheets/u/0/?tgif=d" target="_blank">
            <i style="color: #4391F2;" class="fa fa-file"></i>
            <span style="color: #4391F2;">Spreadsheets</span>
          </a>
         </li>
         <li class="treeview">
          <a href="{{ url('/admin/changepassword') }}">
            <i style="color: #4391F2;" class="fa fa-key"></i>
            <span style="color: #4391F2;">Wijzig wachtwoord</span>
          </a>
         </li>
         <li class="treeview">
          <a href="{{ url('/admin/logout') }}">
            <i style="color: #4391F2;" class="fa fa-sign-out"></i>
            <span style="color: #4391F2;">Afmelden</span>
          </a>
         </li>
         
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>