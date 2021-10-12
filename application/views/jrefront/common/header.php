<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="author" content="vasimlook" />

<!-- Page Title -->
<title><?php echo $title; ?></title>


<!--<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">-->

<!-- Stylesheet -->
<link href="<?php echo FRONT_ASSETS_FOLDER;  ?>funpro/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo FRONT_ASSETS_FOLDER;  ?>funpro/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo FRONT_ASSETS_FOLDER;  ?>funpro/css/animate.css" rel="stylesheet" type="text/css">
<link href="<?php echo FRONT_ASSETS_FOLDER;  ?>funpro/css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="<?php echo FRONT_ASSETS_FOLDER;  ?>funpro/css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="<?php echo FRONT_ASSETS_FOLDER;  ?>funpro/css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="<?php echo FRONT_ASSETS_FOLDER;  ?>funpro/css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="<?php echo FRONT_ASSETS_FOLDER;  ?>funpro/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="<?php echo FRONT_ASSETS_FOLDER;  ?>funpro/css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="<?php echo FRONT_ASSETS_FOLDER;  ?>funpro/css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="<?php echo FRONT_ASSETS_FOLDER;  ?>funpro/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="<?php echo FRONT_ASSETS_FOLDER;  ?>funpro/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="<?php echo FRONT_ASSETS_FOLDER;  ?>funpro/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="<?php echo FRONT_ASSETS_FOLDER;  ?>funpro/css/colors/theme-skin-orange.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="<?php echo FRONT_ASSETS_FOLDER;  ?>funpro/js/jquery-2.2.4.min.js"></script>
<script src="<?php echo FRONT_ASSETS_FOLDER;  ?>funpro/js/jquery-ui.min.js"></script>
<script src="<?php echo FRONT_ASSETS_FOLDER;  ?>funpro/js/bootstrap.min.js"></script>

<!-- why this is not load on view?   -->
<script src="<?php echo FRONT_ASSETS_FOLDER;  ?>funpro/js/bootstrapValidator.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="<?php echo FRONT_ASSETS_FOLDER;  ?>funpro/js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="<?php echo FRONT_ASSETS_FOLDER;  ?>funpro/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo FRONT_ASSETS_FOLDER;  ?>funpro/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<link href="<?php echo EMPLOYEE_ASSETS_FOLDER; ?>css/toastr.min.css" rel="stylesheet" type="text/css"/>


<!-- datatable start css  -->
        <link href="<?php echo ADMIN_ASSETS_FOLDER; ?>datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo ADMIN_ASSETS_FOLDER; ?>datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo ADMIN_ASSETS_FOLDER; ?>datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo ADMIN_ASSETS_FOLDER; ?>datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo ADMIN_ASSETS_FOLDER; ?>datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo BASE_URL; ?>/assets/front/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo BASE_URL; ?>/assets/front/css/dataTables.responsive.css" rel="stylesheet" type="text/css">

<!--        why this is not loaded on view?-->
        <link href="<?php echo BASE_URL; ?>/assets/front/css/bootstrapValidator.min.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!--    custom front css start-->
    <link href="<?php echo FRONT_ASSETS_FOLDER;?>css/custom/custom.css" rel="stylesheet" type="text/css">
<!--    custom front css end-->


</head>
<body class="">
<div id="wrapper" class="clearfix ">
    
    <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div> 
<!-- Header -->
  <header class="header">
    <div class="header-nav">
      <div class="header-nav-wrapper bg-silver-light">
            <div class="container"> 
                    <nav id="menuzord-right" class="menuzord default no-bg menuzord-responsive"> 
<!--                        <center><a class="pull-center flip" href="--><?php //echo BASE_URL; ?><!--"><h1>--><?php //echo APPNAME; ?><!--</h1></a></center>-->
            <ul class="menuzord-menu">                       
              <!--<li><a href="<?php //echo FRONT_INQUIRY_REGISTRATION_LINK; ?>">&nbsp;&nbsp;Home&nbsp;</a></li>-->                             
              <!--<li><a href="<?php //echo FRONT_CONTACT_LINK; ?>">&nbsp;Contact Us&nbsp;</a></li>-->              
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>