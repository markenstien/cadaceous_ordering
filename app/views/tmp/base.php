<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Purchase: https://1.envato.market/nobleui_admin
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title><?php echo $page_title ?? COMPANY_NAME?></title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="<?php echo _path_tmp('main-tmp/assets/vendors/core/core.css')?>">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo _path_tmp('main-tmp/assets/fonts/feather-font/css/iconfont.css')?>">
    <link rel="stylesheet" href="<?php echo _path_tmp('main-tmp/assets/vendors/flag-icon-css/css/flag-icon.min.css')?>">
    <!-- endinject -->

  <!-- Layout styles -->  
    <link rel="stylesheet" href="<?php echo _path_tmp('main-tmp/assets/css/demo3/style.css')?>">
  <!-- End layout styles -->

  <!-- <link rel="shortcut icon" href="<?php echo _path_tmp('main-tmp/assets/images/favicon.png')?>" /> -->
  <?php echo produce('headers')?>
  <?php echo produce('styles')?>
</head>
<body>
    <div class="main-wrapper">
        <?php produce('content')?>
    </div>

    <!-- core:js -->
    <script src="<?php echo _path_tmp('main-tmp/assets/vendors/core/core.js')?>"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="<?php echo _path_tmp('main-tmp/assets/vendors/feather-icons/feather.min.js')?>"></script>
    <script src="<?php echo _path_tmp('main-tmp/assets/js/template.js')?>"></script>
    <!-- endinject -->
    <script type="text/javascript" src="<?php echo _path_public('js/core.js')?>"></script>
    <script type="text/javascript" src="<?php echo _path_public('js/global.js')?>"></script>
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
    <?php echo produce('scripts')?>
</body>
</html>