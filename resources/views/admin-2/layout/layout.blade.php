
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('admin-2/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin-2/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('admin-2/bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin-2/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('admin-2/css/skins/_all-skins.min.css') }}">

      {{-- custom css --}}
      <link rel="stylesheet" href="{{ url('admin-2/css/custom.css') }}">

      <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js') }}"></script>
  <script src="https://unpkg.com/leaflet-fullscreen/dist/leaflet.fullscreen.min.js') }}"></script>

  <style>
     #map {
            height: 670px;
        }
  </style>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 @include('admin-2.layout.header')

  @include('admin-2.layout.sidebar')

  @yield('content')

  @include('admin-2.layout.footer')

<!-- jQuery 3 -->
<script src="{{ asset('admin-2/bower_components/jquery/dist/jquery.min.js' ) }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('admin-2/bower_components/jquery-ui/jquery-ui.min.js' ) }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('admin-2/bower_components/bootstrap/dist/js/bootstrap.min.js' ) }}"></script>
<!-- Sparkline -->
<script src="{{ asset('admin-2/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js' ) }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('admin-2/bower_components/jquery-slimscroll/jquery.slimscroll.min.js' ) }}"></script>
<!-- FastClick -->
<script src="{{ asset('admin-2/bower_components/fastclick/lib/fastclick.js' ) }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin-2/js/adminlte.min.js' ) }}"></script>
{{-- <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('admin-2/js/pages/dashboard.js' ) }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin-2/js/demo.js' ) }}"></script> --}}
</body>
</html>
