<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
  <?php include_title() ?>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta name="MobileOptimized" content="320">

  <!-- BEGIN GLOBAL MANDATORY STYLES -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <?= stylesheet_tag('/template/plugins/bootstrap/css/bootstrap.min.css') ?>
  <?= stylesheet_tag('/template/plugins/uniform/css/uniform.default.css') ?>
  <!-- END GLOBAL MANDATORY STYLES -->
  <!-- BEGIN THEME STYLES -->
  <?= stylesheet_tag('/template/css/style-conquer.css') ?>
  <?= stylesheet_tag('/template/css/style.css') ?>
  <?= stylesheet_tag('/template/css/style-responsive.css') ?>
  <?= stylesheet_tag('/template/css/plugins.css') ?>
  
  <?= stylesheet_tag('/template/css/pages/login.css') ?>
  <!-- END THEME STYLES -->

  <?= stylesheet_tag('app.css') ?>
  <?php
  $skin = $sf_request->getCookie('skin', sfConfig::get('app_default_skin', 'default'));
  echo (is_file('css/skins/' . $skin . '/' . $skin . '.css') ? stylesheet_tag('skins/' . $skin . '/' . $skin . '.css') : stylesheet_tag('skins/default/default.css'))
  ?>

  <?= javascript_include_tag('/template/plugins/jquery-1.10.2.min.js') ?>


  <link rel="shortcut icon" href="<?= public_path('favicon.ico') ?>" />
  <link rel="apple-touch-icon" href="<?= public_path('favicon.png') ?>" />
  <style>
    .login {
      background: url(<?= app::public_path('uploads/')// . sfConfig::get('app_login_background')) ?>) no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }

    .login-fade-in {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background-color: #333;
      opacity: 0.2;
      z-index: -1;
    }

    .copyright {
      color: white !important;
    }
  </style>
</head>

<body class="login">

  <div class="login-fade-in"></div>

  <div class="login-page-logo">
    Web Design
  </div>
  <!-- BEGIN LOGIN -->
  <div class="content">

    <?= $sf_content ?>
  </div>

  <div class="copyright">
    <a href="#" target="_blank">qdPM <?= sfConfig::get('app_qdpm_version') ?> modification by Kelompok 2</a> <br> Copyright &copy; <?= date('Y') ?> <a href="#" target="_blank">qdpm.net</a>
  </div>

  <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
  <!-- BEGIN CORE PLUGINS -->
  <!--[if lt IE 9]>
<?= javascript_include_tag('/template/plugins/respond.min.js') ?>
<?= javascript_include_tag('/template/plugins/excanvas.min.js') ?>
<![endif]-->

  <?= javascript_include_tag('/template/plugins/jquery-migrate-1.2.1.min.js') ?>
  <?= javascript_include_tag('/template/plugins/bootstrap/js/bootstrap.min.js') ?>
  <?= javascript_include_tag('/template/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js') ?>
  <?= javascript_include_tag('/template/plugins/jquery-slimscroll/jquery.slimscroll.min.js') ?>
  <?= javascript_include_tag('/template/plugins/jquery.blockui.min.js') ?>
  <?= javascript_include_tag('/template/plugins/jquery.cokie.min.js') ?>
  <?= javascript_include_tag('/template/plugins/uniform/jquery.uniform.min.js') ?>
  <!-- END CORE PLUGINS -->

  <?= javascript_include_tag('/template/plugins/jquery-validation/dist/jquery.validate.min.js') ?>
  <?= javascript_include_tag('/template/plugins/jquery-validation/dist/additional-methods.min.js') ?>

  <?= javascript_include_tag('/template/scripts/app.js') ?>

  <script>
    jQuery(document).ready(function() {
      App.init();

    });
  </script>

  <?= javascript_include_tag('app.js') ?>
  <!-- END JAVASCRIPTS -->

</body>

</html>