<?php
if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id']) && empty($_SESSION['id'])) {
    header('Location:../Modules/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard </title>

    <!-- Bootstrap -->
    <link href="Content/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="Content/css/font-awesome.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="Content/css/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="Content/css/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="Content/css/bootstrap-progressbar-3.3.4.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="Content/css/jqvmap.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="Content/css/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="Content/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Ministry Of Ayush</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>ABC</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a href="index.html"><i class="fa fa-home"></i> Dashboard <span class="fa fa-chevron"></span></a>

                            </li>
                            <li><a><i class="fa fa-edit"></i> Drugs Types <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="php-mysql-crud-operations-hack/Ayurveda.php"> Ayurveda </a></li>
                                    <li><a href="php-mysql-crud-operations-hack/Siddha.php"> Siddha </a></li>
                                    <li><a href="php-mysql-crud-operations-hack/Homeopathy.php"> homeopathy</a></li>
                                    <li><a href="php-mysql-crud-operations-hack/Unani.php"> Unani </a></li>
                                </ul>
                            </li>
                            <li><a href="faq.html"><i class="fa fa-home"></i> FAQ's<span class="fa fa-chevron"></span></a>

                            </li>
                            <li><a href="contactform.php"><i class="fa fa-home"></i> Contact us <span class="fa fa-chevron"></span></a>

                            </li>

                        </ul>
                    </div>


                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle"></div>
                    <div class="navbar-nav">
                        <h1> <i class="fa fa-paw"></i> <span>ABC COMPANY</span></a></h1>
                    </div>


                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="images/img.jpg" alt="">ABC
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> Profile</a></li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">Help</a></li>
                                <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a>
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->

            <!-- /top tiles -->
            <br />
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="well well-sm">
                            <form class="form-horizontal" method="post">
                                <fieldset>
                                    <legend class="text-center header">Contact us</legend>

                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                        <div class="col-md-8">
                                            <input id="fname" name="name" type="text" placeholder="First Name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                        <div class="col-md-8">
                                            <input id="lname" name="name" type="text" placeholder="Last Name" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                        <div class="col-md-8">
                                            <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                                        <div class="col-md-8">
                                            <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                                        <div class="col-md-8">
                                            <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                .header {
                    color: #36A0FF;
                    font-size: 27px;
                    padding: 10px;
                }

                .bigicon {
                    font-size: 35px;
                    color: #36A0FF;
                }
            </style>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Ministry of Ayush-drug monitoring
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="Content/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="Content/js/bootstrap.js"></script>
<!-- FastClick -->
<script src="Content/js/fastclick.js"></script>
<!-- NProgress -->
<script src="Content/js/nprogress.js"></script>
<!-- Chart.js -->
<script src="Content/js/chart.js"></script>
<!-- gauge.js -->
<script src="Content/js/gauge.js"></script>
<!-- bootstrap-progressbar -->
<script src="Content/js/bootstrap-progressbar.js"></script>
<!-- iCheck -->
<script src="Content/js/icheck.js"></script>
<!-- Skycons -->
<script src="Content/js/skycons.js"></script>
<!-- Flot -->
<script src="Content/js/jquery.flot.js"></script>
<script src="Content/js/jquery.flot.pie.js"></script>
<script src="Content/js/jquery.flot.time.js"></script>
<script src="Content/js/jquery.flot.stack.js"></script>
<script src="Content/js/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="Content/js/jquery.flot.orderBars.js"></script>
<script src="Content/js/jquery.flot.spline.js"></script>
<script src="Content/js/curvedLines.js"></script>
<!-- DateJS -->
<script src="Content/js/date.js"></script>
<!-- JQVMap -->
<script src="Content/js/jquery.vmap.js"></script>
<script src="Content/js/jquery.vmap.world.js"></script>
<script src="Content/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="Content/js/moment.min.js"></script>
<script src="Content/js/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="Content/js/custom.js"></script>

</body>
</html>
