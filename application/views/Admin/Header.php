<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


	 <link rel="icon" type="image/png" sizes="16x16" href="http://puspidep.org//Assets/images/favicon.ico">
    <title>Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>Assets/Admin/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url() ?>Assets/Admin/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="<?php echo base_url() ?>Assets/Admin/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="<?php echo base_url() ?>Assets/Admin/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="<?php echo base_url() ?>Assets/Admin/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>Assets/Admin/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- animation CSS -->

  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>

  <script type="text/javascript" src="<?php echo base_url() ?>Assets/DataTables/datatables.js"></script>
    <link href="<?php echo base_url() ?>Assets/Admin/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>Assets/Admin/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo base_url() ?>Assets/Admin/css/colors/default.css" id="theme" rel="stylesheet">

  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Assets/DataTables/datatables.css">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>

</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header" style="height:40px">
                <div class="top-left-part" >
                    <!-- Logo -->
                    <a class="logo" href="index.html">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="<?php echo base_url() ?>Assets/Admin/images/admin-logos.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="<?php echo base_url() ?>Assets/Admin/images/Logo.jpg" alt="home" style="margin-top:15px" class="light-logo" />
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="<?php echo base_url() ?>Assets/Admin/images/admin-tsext.png" alt="home" class="dark-logo" /><!--This is light logo text--><h2 style="float:left; margin-left:px;"><b>PUSPIDEP</b></h2>
                     </span> </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links" >
                  <center><h3 style="color:white"></h3></center>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="<?php echo base_url() ?>Admin" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>HalamanAdmin/Posting_home" class="waves-effect"><i class="fa fa-plus-square fa-fw" aria-hidden="true"></i>Posting</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>HalamanAdmin/Setting" class="waves-effect"><i class="fa fa-gear fa-fw" aria-hidden="true"></i>Settings</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>HalamanAdmin/Log" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Log</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>HalamanAdmin/User" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>User</a>
                    </li>
                    <li>
                        
                            <a data-toggle="modal" data-target="#modaltok" class="waves-effect"><i class="fa fa-sign-out fa-fw" aria-hidden="true">
                        </i>Logout</a>
                    </li>


                </ul>

            </div>

        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
