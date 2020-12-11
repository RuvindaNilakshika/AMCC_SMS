<!DOCTYPE html>
<html>
<head>
<title><?= $this->siteTitle(); ?> </title> 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=PROOT?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?=PROOT?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?=PROOT?>plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?=PROOT?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=PROOT?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?=PROOT?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=PROOT?>css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=PROOT?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=PROOT?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?=PROOT?>plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

<?= $this->content('head'); ?>

</head>
<body>

<?= $this->content('body'); ?>


<!-- jQuery -->
<script src="<?=PROOT?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=PROOT?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- AdminLTE App -->
<script src="<?=PROOT?>js/adminlte.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=PROOT?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?=PROOT?>plugins/select2/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="<?=PROOT?>plugins/moment/moment.min.js"></script>
<script src="<?=PROOT?>plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?=PROOT?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?=PROOT?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?=PROOT?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?=PROOT?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=PROOT?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?=PROOT?>plugins/moment/moment.min.js"></script>
<script src="<?=PROOT?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=PROOT?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?=PROOT?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=PROOT?>js/adminlte.min.js"></script>
<!-- Custom -->
<script src="<?=PROOT?>js/custom.js"></script>
<!-- overlayScrollbars -->
<script src="<?=PROOT?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
</body>
</html>