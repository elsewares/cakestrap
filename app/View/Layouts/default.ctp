<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cakestrap :: CakePHP + Bootstrap</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="<?php $this->Html->css('bootstrap/bootstrap.css'); ?>" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" href="<?php $this->Html->css('bootstrap/container-app.css'); ?>" />
    <?php //Style overrides from the container-app.html example are in css/bootstrap/container-app.css ?>
    </style>
    <!-- Le fav and touch icons -->
    <?php $this->element('Core/favicons.ctp'); ?>
  </head>
  <body>
    <div class="navbar navbar-fixed-top">
      <?php echo $this->element('Nav/navbar.ctp'); ?>
    </div>
    <div class="container">
      <div class="content">
        <?php echo $this->fetch('content'); ?>
      </div>
      <footer>
        <?php echo $this->element('Core/footer.ctp'); ?>
      </footer>
    </div> <!-- /container -->
  </body>
</html>
