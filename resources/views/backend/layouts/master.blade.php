<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Rohan Kumar | Shrestha</title>
  <link rel="shortcut icon"  href="{{URL::Asset('Backend_asset/Custom/logo_icon.png')}}" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


     

      <!-- jQuery 2.2.3 -->
    <script src="{{URL::asset('Backend_asset/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>

    <!---ANGULAR MIN .js-->
   {{--  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script> --}}

     <!--CUstom css-->
    <script src="{{URL::Asset('Backend_asset/Custom/angular.min.js')}}" type="text/javascript"></script>
   
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{URL::asset('Backend_asset/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{URL::asset('Backend_asset/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{URL::asset('Backend_asset/plugins/datepicker/datepicker3.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{URL::asset('Backend_asset/plugins/datatables/dataTables.bootstrap.css')}}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{URL::asset('Backend_asset/plugins/iCheck/all.css')}}">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="{{URL::asset('Backend_asset/plugins/colorpicker/bootstrap-colorpicker.min.css')}}">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="{{URL::asset('Backend_asset/plugins/timepicker/bootstrap-timepicker.min.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{URL::asset('Backend_asset/plugins/select2/select2.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{URL::asset('Backend_asset/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{URL::asset('Backend_asset/dist/css/skins/_all-skins.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{URL::asset('Backend_asset/plugins/iCheck/flat/blue.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{URL::asset('Backend_asset/plugins/morris/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{URL::asset('Backend_asset/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">

    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{URL::asset('Backend_asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

      <!--CUstom css-->
    <link rel="stylesheet" href="{{URL::Asset('Backend_asset/Custom/custom.css')}}">

   
<!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

   
</head>
<body class="hold-transition skin-blue sidebar-mini">

@section('header')
{!! view('backend/layouts/header') !!}
@stop

@section('sidebar')
{!! view('backend/layouts/sidebar') !!}
@stop

@section('preview')
{!! view('backend/layouts/preview') !!}
@stop



@section('footer')
{!! view('backend/layouts/footer') !!}
@stop



        @yield('header')


    @yield('sidebar')

    <div class="wrapper">

 @yield('preview')



   
    <div class="content-wrapper">
           
        <section class="content-header">
            <h1>
                @yield('title')
                
            </h1>
            <ol class="breadcrumb">
                <li><a href="#">@yield('site_map') </a></li>
                
            </ol>
        </section>
        
        <hr>


        @yield('content')



      </div>
      </div>
      
  @yield('footer')
      

      




<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{URL::asset('Backend_asset/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{URL::asset('Backend_asset/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Select2 -->
<script src="{{URL::asset('Backend_asset/plugins/select2/select2.full.min.js')}}"></script>
<!-- InputMask -->
<script src="{{URL::asset('Backend_asset/plugins/input-mask/jquery.inputmask.js')}}"></script>

<script src="{{URL::asset('Backend_asset/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>

<script src="{{URL::asset('Backend_asset/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<!-- daterangepicker -->
<script src="{{URL::asset('Backend_asset/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{URL::asset('Backend_asset/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<!-- bootstrap color picker -->
<script src="{{URL::asset('Backend_asset/plugins/colorpicker/bootstrap-colorpicker.min.js')}}"></script>
<!-- bootstrap time picker -->
<script src="{{URL::asset('Backend_asset/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{URL::asset('Backend_asset/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{URL::asset('Backend_asset/plugins/iCheck/icheck.min.js')}}"></script>
<!-- FastClick -->
<script src="{{URL::asset('Backend_asset/plugins/fastclick/fastclick.js')}}"></script>
<!-- DataTables -->
<script src="{{URL::asset('Backend_asset/plugins/datatables/jquery.dataTables.min.js')}}"></script>

<script src="{{URL::asset('Backend_asset/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{URL::asset('Backend_asset/dist/js/app.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{URL::asset('Backend_asset/dist/js/demo.js')}}"></script>

<!-- Page script -->
<script>
    $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("yyyy/mm/dd", {"placeholder": "yyyy/mm/dd"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
                {
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function (start, end) {
                    $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                }
        );

        //Date picker------suman-------------------------------------------------------------------------
        $('.datepicker').datepicker({
             format: 'yyyy-mm-dd',
            autoclose: true
        });

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
            showInputs: false
        });
    });
</script>
<script>
    $(function () {
        
        $('#example1').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "pageLength":25,
        });
    });
</script>



<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
    //Date picker
    $('#datepicker').datepicker({
        autoclose: true
    });
</script>


<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>

<script src="{{URL::asset('Backend_asset/plugins/morris/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{URL::asset('Backend_asset/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{URL::asset('Backend_asset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{URL::asset('Backend_asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

<!-- jQuery Knob Chart -->
<script src="{{URL::asset('Backend_asset/plugins/knob/jquery.knob.js')}}"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{URL::asset('Backend_asset/dist/js/pages/dashboard.js')}}"></script>

<!-- CK editor full 4.6.1-->
<script src="{{URL::asset('Backend_asset/plugins/ckeditor/ckeditor.js')}}"></script>


<!-- Bootstrap WYSIHTML5 -->
<script src="{{URL::asset('Backend_asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1',{
            
        });
        //bootstrap WYSIHTML5 - text editor
        $(".editor1").wysihtml5();
    });
</script>
<script>
$(".alert1").fadeTo(2000, 500).slideUp(500, function(){
    $(".alert1").slideUp(500);
});
</script>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>

</body>
</html>