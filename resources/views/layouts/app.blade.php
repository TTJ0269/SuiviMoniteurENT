<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{config('app.name', 'AED-IFAD')}}</title>

 <!-- statistique -->
 <!--<link rel="stylesheet" type="text/css" href="{{ asset('css/mystyle.css') }}">-->
  <link rel="stylesheet" href="{{ asset('statistiquechart.css') }}" 
 integrity="sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==" 
 crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('vendors/plugins/fontawesome-free/css/all.min.css') }}">

  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="{{ asset('vendors/plugins/ekko-lightbox/ekko-lightbox.css') }}">

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('vendors/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('vendors/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('vendors/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('vendors/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('vendors/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('vendors/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
   <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('vendors/plugins/summernote/summernote-bs4.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('vendors/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('vendors/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
</head>
<!-- <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed"> -->
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<!-- Preloader -->
 <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('storage/imageifad/aedsuivi.png') }}" alt="" height="200" width="400">
  </div> -->

<!--  1.  Top Menu-->
@include('layouts.menu.topmenu')
<!--  2.  Left Menu-->
@include('layouts.menu.leftmenu')
<!--  3.  Main Content (Body) -->

  <div class="content-wrapper">
    <!-- Main content -->
                          @if (session()->has('message')) 
                          <div class="btn btn-success btn-block" role="alert">
                          {{ session()->get('message') }}
                          </div>
                          @endif

                          @if (session()->has('messagealert'))
                          <div class="alert alert-danger" role="alert">
                          {{ session()->get('messagealert') }}
                          </div>
                          @endif
    <section class="content">
        @yield('content')
    </section>
  </div>

<!--  4.  Right Menu-->
@include('layouts.menu.rightmenu')
<!--  5.  Footer Menu-->
@include('layouts.menu.footermenu')

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.6.0.js"> </script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('vendors/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- statistique -->
<script src="{{ asset('js/statistiquechart.js') }}" 
integrity="sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==" 
crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Ekko Lightbox -->
<script src="{{ asset('vendors/plugins/ekko-lightbox/ekko-lightbox.min.js') }}"></script>
<!-- jQuery -->
<script src="{{ asset('vendors/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('vendors/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('vendors/dist/js/adminlte.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('vendors/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('vendors/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('vendors/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('vendors/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

<!-- jQuery Knob Chart -->
<script src="{{ asset('vendors/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('vendors/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('vendors/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('vendors/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<script src="{{ asset('vendors/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('vendors/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<!-- CodeMirror -->
<script src="{{ asset('vendors/plugins/codemirror/codemirror.js') }}"></script>
<script src="{{ asset('vendors/plugins/codemirror/mode/css/css.js') }}"></script>
<script src="{{ asset('vendors/plugins/codemirror/mode/xml/xml.js') }}"></script>
<script src="{{ asset('vendors/plugins/codemirror/mode/htmlmixed/htmlmixed.js') }}"></script>

<!-- DataTables  & Plugins -->
<script src="{{ asset('vendors/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendors/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendors/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('vendors/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendors/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('vendors/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendors/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('vendors/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('vendors/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('vendors/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('vendors/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('vendors/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

<script type="text/javascript"> 
const currentLocation = location.href;
const menuItem = document.querySelectorAll('a')
const menuLength = menuItem.length
for (let i = 0; i<menuLength; i++){
  if(menuItem[i].href === currentLocation){
    menuItem[i].className = "nav-link active"
  } 
} /**"copy", "csv" , "colvis" */
</script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- Afficher l'image quand elle est selectionnee-->
<script>
  $('input[type="file"][name="image"]').val('');

  $('input[type="file"][name="image"]').on('change',function(){
    var img_path = $(this)[0].value;
    var img_holder = $('.img-holder');
    var extension = img_path.substring(img_path.lastIndexOf('.')+1).toLowerCase();

    if(extension == 'jpg' || extension == 'jpeg' || extension == 'png' || extension =='jfif')
    {
      if(typeof(FileReader) != 'undefined')
      {
        img_holder.empty();
        var reader = new FileReader();
        reader.onload = function(e)
        {
          $('<img/>',{'src':e.target.result,'class':'img-fluid','style':'max-width:100px;margin-bottom:10px;'}).
          appendTo(img_holder);
        }
        img_holder.show();
        reader.readAsDataURL($(this)[0].files[0]);
      }
      else
      {
        $(img_holder).html('Image pas support??e');
      }
    }
    else
    {
      $(img_holder).empty();
    }
  })
</script>
<!-- fin affichage-->
<!-- Debut form commentaire-->
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
<!-- Fin form commentaire-->
<!-- Afficher l'image quand elle est selectionnee-->
<script>
  $('input[type="file"][name="urlficher"]').val('');

  $('input[type="file"][name="urlficher"]').on('change',function(){
    var img_path = $(this)[0].value;
    var img_holder = $('.img-holder');
    var extension = img_path.substring(img_path.lastIndexOf('.')+1).toLowerCase();

    if(extension == 'jpg' || extension == 'jpeg' || extension == 'png' || extension =='jfif')
    {
      if(typeof(FileReader) != 'undefined')
      {
        img_holder.empty();
        var reader = new FileReader();
        reader.onload = function(e)
        {
          $('<img/>',{'src':e.target.result,'class':'img-fluid','style':'max-width:100px;margin-bottom:10px;'}).
          appendTo(img_holder);
        }
        img_holder.show();
        reader.readAsDataURL($(this)[0].files[0]);
      }
      else
      {
        $(img_holder).html('');
      }
    }
    else
    {
      $(img_holder).empty();
    }
  })
</script>
<!-- fin affichage-->

</body>
</html>
