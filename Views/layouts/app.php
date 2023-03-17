<!-- File: /app/Views/master.php -->
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Medico</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= assets('plugins/css/all.min.css') ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= assets('/css/tempusdominus-bootstrap-4.min.css') ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= assets('/css/icheck-bootstrap.min.css') ?>">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= assets('/css/jqvmap.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= assets('/css/adminlte.min.css') ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= assets('/css/OverlayScrollbars.min.css') ?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= assets('/css/daterangepicker.css') ?>">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= assets('/css/summernote-bs4.min.css') ?>">
    <link rel="stylesheet" href="<?= assets('/css/Login.css') ?>">
    <script>
        window.path_url = 'http://api.uptos.edu.ve/1.7.7';
    </script>
</head>

<body>
    <div class="wrapper">

        <section class="content">
            <div class="container-fluid">
                <?= $this->section('content') ?>
            </div>
        </section>
    </div>
</body>
<!-- jQuery -->
<script src="<?= assets('js/jquery.min.js') ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= assets('jquery-ui.min.js') ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= assets('/js/bootstrap.bundle.min.js') ?>"></script>
<!-- ChartJS -->
<script src="<?= assets('/js/Chart.min.js') ?>"></script>
<!-- Sparkline -->
<script src="<?= assets('/js/sparkline.js') ?>"></script>
<!-- JQVMap -->
<script src="<?= assets('/js/vmap.min.js') ?>"></script>
<script src="<?= assets('/js/jquery.vmap.usa.js') ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?= assets('/js/jquery.knob.min.js') ?>"></script>
<!-- daterangepicker -->
<script src="<?= assets('/js/moment.min.js') ?>"></script>
<script src="<?= assets('/js/daterangepicker.js') ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= assets('/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
<!-- Summernote -->
<script src="<?= assets('/js/summernote-bs4.min.js') ?>"></script>
<!-- overlayScrollbars -->
<script src="<?= assets('/js/jquery.overlayScrollbars.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= assets('js/adminlte.js') ?>"></script>

</html>