<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield("title")</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{URL::to('Staticfiles/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{URL::to('Staticfiles/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{URL::to('Staticfiles/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{URL::to('Staticfiles/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('Staticfiles/dist/css/skins/_all-skins.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('Staticfiles/dist/css/style.css')}}">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body class="hold-transition skin-blue layout-top-nav">


    @yield('content')






<script src="{{URL::to('Staticfiles/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{URL::to('Staticfiles/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{URL::to('Staticfiles/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{URL::to('Staticfiles/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::to('Staticfiles/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{URL::to('Staticfiles/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{URL::to('Staticfiles/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{URL::to('Staticfiles/dist/js/demo.js')}}"></script>
<script>
    $('#example1').DataTable({
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : true,
        "bInfo": false
    });
    $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : true,
        "bInfo": false
     });
</script>
</body>
</html>
