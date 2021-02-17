<?php
define('ROOT_JS',str_replace("\\",'/',dirname(__FILE__)));
define('PATH_JS', ROOT_JS == $_SERVER['DOCUMENT_ROOT']
    ?'' :substr(ROOT_JS,strlen($_SERVER['DOCUMENT_ROOT']))
);
?>

<!-- jQuery -->
<script src="<?php echo PATH_JS; ?>//AdminLTE-3.0.5/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo PATH_JS; ?>//AdminLTE-3.0.5/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo PATH_JS; ?>//AdminLTE-3.0.5/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo PATH_JS; ?>//AdminLTE-3.0.5/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo PATH_JS; ?>//AdminLTE-3.0.5/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<!-- <script src="/AdminLTE-3.0.5/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/AdminLTE-3.0.5/plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
<!-- jQuery Knob Chart -->
<script src="<?php echo PATH_JS; ?>//AdminLTE-3.0.5/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo PATH_JS; ?>//AdminLTE-3.0.5/plugins/moment/moment.min.js"></script>
<script src="<?php echo PATH_JS; ?>//AdminLTE-3.0.5/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo PATH_JS; ?>//AdminLTE-3.0.5/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo PATH_JS; ?>//AdminLTE-3.0.5/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo PATH_JS; ?>//AdminLTE-3.0.5/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo PATH_JS; ?>//AdminLTE-3.0.5/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo PATH_JS; ?>//AdminLTE-3.0.5/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo PATH_JS; ?>//AdminLTE-3.0.5/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?php echo PATH_JS; ?>//AdminLTE-3.0.5/plugins/datatables/jquery.dataTables.min.js">
</script>
<script src="<?php echo PATH_JS; ?>//AdminLTE-3.0.5/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js">
</script>


<script>
// $("#btnLogout").click(function() {

//     location.replace("../");

// });


</script>