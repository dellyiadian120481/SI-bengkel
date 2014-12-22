<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="<?php echo base_url('assets/css/bootstrap/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/font-awesome/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url('assets/css/ionicons/ionicons.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?php echo base_url('assets/css/morris/morris.css') ?>" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo base_url('assets/css/jvectormap/jquery-jvectormap-1.2.2.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="<?php echo base_url('assets/css/datepicker/datepicker3.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo base_url('assets/css/daterangepicker/daterangepicker-bs3.css') ?>" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo base_url('assets/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/jqueryui/jquery-ui.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url('assets/css/AdminLTE.css') ?>" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url('assets/js/plugins/jquery/jquery-2.1.1.min.js') ?>"></script>
        <!-- add new calendar event modal -->

        <script src="<?php echo base_url('assets/js/plugins/bootstrap/bootstrap.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/plugins/jquery-ui/jquery-ui.min.js') ?>" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="<?php echo base_url('assets/js/plugins/raphael/raphael-min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/plugins/morris/morris.min.js') ?>" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url('assets/js/plugins/sparkline/jquery.sparkline.min.js') ?>" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url('assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo base_url('assets/js/plugins/jqueryKnob/jquery.knob.js') ?>" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo base_url('assets/js/plugins/daterangepicker/daterangepicker.js') ?>" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="<?php echo base_url('assets/js/plugins/datepicker/bootstrap-datepicker.js') ?>" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url('assets/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url('assets/js/plugins/iCheck/icheck.min.js') ?>" type="text/javascript"></script>

        <script src="<?php echo base_url('assets/js/plugins/input-mask/jquery.inputmask.js') ?>" type="text/javascript"></script> 
        <script src="<?php echo base_url('assets/js/plugins/input-mask/jquery.inputmask.date.extensions.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/plugins/input-mask/jquery.inputmask.extensions.js') ?>" type="text/javascript"></script>



        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">

        <input id="base-url" type="hidden" value="<?php echo base_url(); ?>">
        <input id="site-url" type="hidden" value="<?php echo site_url('/'); ?>">

        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                AdminLTE
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?php echo base_url('') ?>assets/img/avatar3.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?php echo base_url('') ?>assets/img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?php echo base_url('') ?>assets/img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?php echo base_url('') ?>assets/img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?php echo base_url('') ?>assets/img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users warning"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-cart success"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-person danger"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Jane Doe <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="<?php echo base_url('') ?>assets/img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        Jane Doe - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas collapse-left">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo base_url('') ?>assets/img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, Jane</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="<?php echo base_url('home') ?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('user') ?>">
                                <i class="fa fa-user"></i> <span>User</span> <!-- <small class="badge pull-right bg-green">new</small> -->
                            </a>
                        </li>
                           <li class="treeview">
                            <a href="#">
                                <i class="fa fa-cubes"></i> <span>Barang</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url('barang') ?>"><i class="fa fa-list-ol"></i>List Barang</a></li>
                                <li><a href="<?php echo base_url('merek') ?>"><i class="fa fa-qrcode"></i>Merek Barang</a></li>
                                <li><a href="<?php echo base_url('kategori') ?>"><i class="fa fa-tags"></i>Kategori Barang</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url('supplier') ?>">
                                <i class="fa fa-truck"></i><span>Supplier</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-file-text"></i><span>Laporan</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-wrench"></i>Laporan Jasa</a></li>
                                <li><a href="#"><i class="fa fa-tags"></i>Laporan Keluar</a></li>
                                <li><a href="#"><i class="fa fa-flag"></i>Laporan Masuk</a></li>
                            </ul>
                        </li>
                           <li>
                            <a href="<?php echo base_url('setting') ?>">
                                <i class="fa fa-cogs"></i><span>Setting</span>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <aside class="left-side sidebar-offcanvas lil-menu" style="width: 60px;">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo base_url('') ?>assets/img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <!-- <input type="text" name="q" class="form-control" placeholder="Search..."/> -->
                            <span class="input-group-btn">
                                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="<?php echo base_url('home') ?>">
                                <i class="fa fa-dashboard"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('user') ?>">
                                <i class="fa fa-user"></i>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-cubes"></i>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url('barang') ?>"><i class="fa fa-list-ol"></i></a></li>
                                <li><a href="<?php echo base_url('merek') ?>"><i class="fa fa-qrcode"></i></a></li>
                                <li><a href="<?php echo base_url('kategori') ?>"><i class="fa fa-tags"></i></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url('supplier') ?>">
                                <i class="fa fa-truck"></i>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-file-text"></i>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url('barang') ?>"><i class="fa fa-wrench"></i></a></li>
                                <li><a href="<?php echo base_url('merk') ?>"><i class="fa fa-tags"></i></a></li>
                                <li><a href="<?php echo base_url('kategori') ?>"><i class="fa fa-flag"></i></a></li>
                            </ul>
                        </li>
                           <li>
                            <a href="<?php echo base_url('setting') ?>">
                                <i class="fa fa-cogs"></i>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side strech">
                
                <?php echo $content ?>

            </aside><!-- /.right-side -->
            <div id="SVGTool-popupImage" class="SVGTool-popupImage modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Choose your image to add</h4>
                        </div>
                        <div class="modal-body">
                            <div class="SVGTool-imageList">
                                <ul>
                                </ul>
                            </div>
                            <div class="row">
                                <div id="SVGTool-imagePreviewWrapper" class="col-xs-7 center">
                                    <span>Image will crop as your size on canvas</span>
                                    <canvas id="image-preview" class="SVGTool-imagePreview" >
                                    </canvas>
                                </div>
                                <div class="col-xs-5">
                                    <div class="form-group">
                                        <input type="file" id="SVGTool-userImage" name="user-image" class="form-control">
                                        <div id="SVGTool-userImageProgress" class="margin-top dis-none progress upload-progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="">
                                                0%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <a id="SVGTool-zoomIn" src="#" class="">
                                            <i class="fa fa-search-plus"></i> zoom in
                                        </a>
                                    </div>
                                    <div class="form-group">
                                        <a id="SVGTool-zoomOut" src="#" class="">
                                            <i class="fa fa-search-minus"></i> zoom out
                                        </a>
                                    </div>
                                    <div class="form-group">
                                        <a id="SVGTool-rotateRight" src="#" class="">
                                            <i class="fa fa-rotate-right"></i> rotate right
                                        </a>
                                    </div>
                                    <div class="form-group">
                                        <a id="SVGTool-rotateLeft" src="#" class="">
                                            <i class="fa fa-undo"></i> rotate left
                                        </a>
                                    </div>
                                    <div class="form-group">
                                        <div id="SVGTool-direction" class="button-direction">
                                            <!-- top -->
                                            <button id="SVGTool-top" type="button" class="btn btn-default btn-md">
                                                <span class="glyphicon glyphicon glyphicon-chevron-up"></span>
                                            </button>
                                            <!-- left -->
                                            <button id="SVGTool-right" type="button" class="btn btn-default btn-md">
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                            </button>
                                            <!-- bottom  -->
                                            <button id="SVGTool-bottom" type="button" class="btn btn-default btn-md">
                                                <span class="glyphicon glyphicon glyphicon-chevron-down"></span>
                                            </button>
                                            <!-- right -->
                                            <button id="SVGTool-left" type="button" class="btn btn-default btn-md">
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button id="SVGTool-applyImage" type="button" class="btn btn-primary">Save changes</button>
                            <button id="SVGTool-addImage" type="button" class="btn btn-primary">Add image</button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->

        <!-- AdminLTE App -->
        <script src="<?php echo base_url('assets/js/AdminLTE/app.js') ?>" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <!-- <script src="<?php echo base_url('assets/js/AdminLTE/dashboard.js') ?>" type="text/javascript"></script>l -->

        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url('assets/js/AdminLTE/demo.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/AdminLTE/engine.js') ?>" type="text/javascript"></script>
    </body>
</html>
