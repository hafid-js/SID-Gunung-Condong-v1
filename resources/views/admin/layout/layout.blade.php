<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('admin/bower_components/Ionicons/css/ionicons.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('admin/bower_components/select2/dist/css/select2.min.css') }}">
    <!-- DataTables CSS -->
    <link rel="stylesheet"
        href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet"
        href="{{ asset('admin/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('admin/css/skins/_all-skins.min.css') }}">

    {{-- custom css --}}
    <link rel="stylesheet" href="{{ url('admin/css/custom.css') }}">

    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->


    <!-- JS datepicker -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- JS datepicker -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js') }}"></script>
    <script src="https://unpkg.com/leaflet-fullscreen/dist/leaflet.fullscreen.min.js') }}"></script>

    {{-- <x-head.tinymce-config /> --}}
<!-- Place the first <script> tag in your HTML's <head> -->
<script src="https://cdn.tiny.cloud/1/8mhbod4qy7z7hkyi68srd5kiu1ylu4dxjmbutvjqfspvo5t9/tinymce/7/tinymce.min.js') }}"
    referrerpolicy="origin"></script>

    <style>
        /* Menambahkan scroll pada sidebar */
        .main-sidebar {
            height: 100vh;
            /* Mengatur tinggi sidebar menjadi penuh layar */
            overflow-y: auto;
            /* Menambahkan scroll vertikal jika konten melebihi tinggi */
        }
        #map {
            height: 670px;
        }

        body {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 13px;
    line-height: 1.42857143;
    color: #333;
    background-color: #fff;
}
    </style>

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        @include('admin.layout.header')

        @include('admin.layout.sidebar')

        @yield('content')

        @include('admin.layout.footer')

        <!-- jQuery 3 -->
        <script src="{{ asset('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{ asset('admin/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.7 -->
        <script src="{{ asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <!-- Sparkline -->
        <script src="{{ asset('admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
        <!-- Select2 -->
        <script src="{{ asset('admin/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
        <!-- Slimscroll -->
        <script src="{{ asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
        <!-- FastClick -->
        <script src="{{ asset('admin/bower_components/fastclick/lib/fastclick.js') }}"></script>
        <!-- bootstrap color picker -->

        {{-- custom js --}}
        <script src="{{ asset('admin/js/custom.js') }}"></script>
        <script
            src="{{ asset('admin/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('admin/js/adminlte.min.js') }}"></script>

        <script>
            //color picker with addon
            $('.my-colorpicker2').colorpicker()
            $('.select2').select2()
        </script>

        {{-- <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{ asset('admin/js/pages/dashboard.js' ) }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('admin/js/demo.js' ) }}"></script> --}}
</body>

</html>
