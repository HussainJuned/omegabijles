<!-- master.blade.php -->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Omegabijles | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('public/adminn/bower_components/bootstrap/dist/css/bootstrap.min.css' ) }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('public/adminn/bower_components/font-awesome/css/font-awesome.min.css' ) }}">

  <link rel="stylesheet" href="{{ asset('public/adminn/bower_components/datatables.net-bs/css/dataTables.bootstrap.css' ) }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('public/adminn/bower_components/Ionicons/css/ionicons.min.css' ) }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('public/adminn/dist/css/AdminLTE.min.css' ) }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('public/adminn/dist/css/skins/_all-skins.min.css' ) }}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ asset('public/adminn/bower_components/morris.js/morris.css' ) }}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ asset('public/adminn/bower_components/jvectormap/jquery-jvectormap.css' ) }}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ asset('public/adminn/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css' ) }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('public/adminn/bower_components/bootstrap-daterangepicker/daterangepicker.css' ) }}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ asset('public/adminn/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css' ) }}">
  @yield('css')

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="sidebar-mini skin-blue-light" style="height: auto; min-height: 100%;">
<div class="wrapper">

 @include('tutor.partials.header')
  <!-- Left side column. contains the logo and sidebar -->

 @include('tutor.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="color: darkgrey;">
        Dashboard
      </h1>
      
    </section>

    <!-- Main content -->
  @yield('mainContent')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; Omegabijles <a href="#">2018</a>.</strong> Optimaal vooruit.

  </footer>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('public/adminn/bower_components/jquery/dist/jquery.min.js' ) }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('public/adminn/bower_components/jquery-ui/jquery-ui.min.js' ) }}"></script>
<script src="{{ asset('public/adminn/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js' ) }}"></script>
<script src="{{ asset('public/adminn/bower_components/datatables.net/js/jquery.dataTables.min.js' ) }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('public/adminn/bower_components/bootstrap/dist/js/bootstrap.min.js' ) }}"></script>
<!-- Morris.js charts -->
<script src="{{ asset('public/adminn/bower_components/raphael/raphael.min.js' ) }}"></script>
<script src="{{ asset('public/adminn/bower_components/morris.js/morris.min.js' ) }}"></script>
<!-- Sparkline -->
<script src="{{ asset('public/adminn/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js' ) }}"></script>
<!-- jvectormap -->
<script src="{{ asset('public/adminn/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js' ) }}"></script>
<script src="{{ asset('public/adminn/plugins/jvectormap/jquery-jvectormap-world-mill-en.js' ) }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('public/adminn/bower_components/jquery-knob/dist/jquery.knob.min.js' ) }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('public/adminn/bower_components/moment/min/moment.min.js' ) }}"></script>
<script src="{{ asset('public/adminn/bower_components/bootstrap-daterangepicker/daterangepicker.js' ) }}"></script>
<!-- datepicker -->
<script src="{{ asset('public/adminn/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js' ) }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('public/adminn/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js' ) }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('public/adminn/bower_components/jquery-slimscroll/jquery.slimscroll.min.js' ) }}"></script>
<!-- FastClick -->
<script src="{{ asset('public/adminn/bower_components/fastclick/lib/fastclick.js' ) }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('public/adminn/dist/js/adminlte.min.js' ) }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('public/adminn/dist/js/pages/dashboard.js' ) }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('public/adminn/dist/js/demo.js' ) }}"></script>

@yield('js')

</body>
</html>
