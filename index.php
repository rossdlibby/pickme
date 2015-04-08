<?php
  require_once 'process.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Flat UI - Free Bootstrap Framework and Theme</title>
    <meta name="description" content="Flat UI Kit Free is a Twitter Bootstrap Framework design and Theme, this responsive framework includes a PSD and HTML version."/>

    <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="dist/css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="dist/css/flat-ui.css" rel="stylesheet">
    <link href="docs/assets/css/demo.css" rel="stylesheet">

    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="dist/js/vendor/html5shiv.js"></script>
    <script src="dist/js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <br>
      <br>
      <br>
      <?php if(!$auth) {
      ?>
      <div class="row">
        <div class="col-xs-6 col-xs-offset-3 text-center">
          <div class="row">
            <div class="col-xs-12 text-center">
              <p class="h3">You've got a present. <i class="fa fa-gift"></i></p>
            </div>
          </div>
          <hr>
          <a class="btn btn-primary btn-lg btn-block" href="https://api.instagram.com/oauth/authorize/?client_id=c4eccd0640f64b55a1e608e50edbc0c9&redirect_uri=http://pickme.us&response_type=code"><strong><span class="h3">Claim Your Present</span></strong></a>
        </div>
      </div>
      <?php } else {
      ?>
      <div class="row">
        <div class="col-xs-6 col-xs-offset-3 text-center">
          <img src="img/icons/png/Gift-Box.png" />
        </div>
      </div>
      <?php } ?>

    </div> <!-- /container -->

    <script src="dist/js/vendor/jquery.min.js"></script>
    <script src="dist/js/vendor/video.js"></script>
    <script src="dist/js/flat-ui.min.js"></script>
    <script src="docs/assets/js/application.js"></script>

    <script>
    videojs.options.flash.swf = "dist/js/vendors/video-js.swf"
    </script>
  </body>
</html>