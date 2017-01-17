<!DOCTYPE html>  
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Elite Admin - is a responsive admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-19175540-9', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<?php
    include 'php/header.php';
    include 'php/left-sidebar.php'; include 'php/breadcrumbs.php';
?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Reak Estate Dashboard</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!--.row -->
                <div class="row re">
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">All Properties</h3>
                            <ul class="list-inline two-part">
                                <li><i class="ti-home text-info"></i></li>
                                <li class="text-right"><span class="counter">480</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Properties for Sale</h3>
                            <ul class="list-inline two-part">
                                <li><i class="icon-tag text-purple"></i></li>
                                <li class="text-right"><span class="counter">169</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Properties for Rent</h3>
                            <ul class="list-inline two-part">
                                <li><i class="icon-basket text-danger"></i></li>
                                <li class="text-right"><span class="counter">311</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Total Ernings</h3>
                            <ul class="list-inline two-part">
                                <li><i class="ti-wallet text-success"></i></li>
                                <li class="text-right"><span class="counter">$8170</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Properties stats</h3>
                            <ul class="list-inline text-right">
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #00bfc7;"></i>For Sale</h5> </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #fb9678;"></i>For Rent</h5> </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #9675ce;"></i>All Properties</h5> </li>
                            </ul>
                            <div id="morris-bar-chart" style="height:372px;"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box m-b-15">
                            <h3 class="box-title">Property sales income</h3>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6  m-t-30">
                                    <h1 class="text-info">$64057</h1>
                                    <p class="text-muted">APRIL 2016</p> <b>(150 Sales)</b> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div id="sparkline2dash" class="text-center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box bg-purple m-b-15">
                            <h3 class="text-white box-title">Property on Rent income</h3>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6  m-t-30">
                                    <h1 class="text-white">$30447</h1>
                                    <p class="light_op_text">APRIL 2016</p> <b class="text-white">(110 Sales)</b> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div id="sales1" class="text-center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- row -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Property Overview</h3>
                            <div class="table-responsive">
                                <table class="table product-overview">
                                    <thead>
                                        <tr>
                                            <th>Customer</th>
                                            <th>Order ID</th>
                                            <th>Photo</th>
                                            <th>Property</th>
                                            <th>Type</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Steave Jobs</td>
                                            <td>#85457898</td>
                                            <td> <img src="../plugins/images/property/prop1.jpeg" alt="iMac" width="80"> </td>
                                            <td>Swanim villa</td>
                                            <td>Sold</td>
                                            <td>10-7-2016</td>
                                            <td> <span class="label label-success font-weight-100">Paid</span> </td>
                                            <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="ti-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Varun Dhavan</td>
                                            <td>#95457898</td>
                                            <td> <img src="../plugins/images/property/prop2.jpeg" alt="iPhone" width="80"> </td>
                                            <td>River view home</td>
                                            <td>On Rent</td>
                                            <td>09-7-2016</td>
                                            <td> <span class="label label-warning font-weight-100">Pending</span> </td>
                                            <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="ti-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Ritesh Desh</td>
                                            <td>#68457898</td>
                                            <td> <img src="../plugins/images/property/prop3.jpeg" alt="apple_watch" width="80"> </td>
                                            <td>Gray Chair</td>
                                            <td>12</td>
                                            <td>08-7-2016</td>
                                            <td> <span class="label label-success font-weight-100">Paid</span> </td>
                                            <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="ti-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Hrithik</td>
                                            <td>#45457898</td>
                                            <td> <img src="../plugins/images/property/prop3.jpeg" alt="mac_mouse" width="80"> </td>
                                            <td>Pure Wooden chair</td>
                                            <td>18</td>
                                            <td>02-7-2016</td>
                                            <td> <span class="label label-danger font-weight-100">Failed</span> </td>
                                            <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="ti-trash"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row  -->
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 agent-info">
                            <div class="m-t-30 text-center">
                                <a href="javascript:void(0)"><img alt="img" class="thumb-lg img-circle" src="../plugins/images/users/agent.jpg"></a>
                                <h4>Jon Doe</h4>
                                <h6>Agent of Property</h6>
                            </div>
                            <div class="agent-contact text-center m-t-40">
                                <i class="fa fa-phone text-danger p-r-10" aria-hidden="true"></i> 800-1800-24657
                                <br>
                                <i class="fa fa-envelope-o text-danger p-r-10 m-t-10" aria-hidden="true"></i> jon@realestate.com
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 p-l-0 p-r-0">
                        <div class="white-box">
                            <h4 class="box-title">Request Inquiry</h4>
                            <form class="form-horizontal form-agent-inq">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="email" class="form-control" placeholder="E-Mail">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-danger btn-rounded pull-right">Submit Request</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h4 class="box-title">Recent Properties</h4>
                            <div class="pro-list">
                                <div class="pro-img p-r-10">
                                    <a href="javascript:void(0)">
                                        <img src="../plugins/images/property/prop1.jpeg" alt="property" style="width: 100px; height: 66px;">
                                    </a>
                                </div>
                                <div class="pro-detail">
                                    <h5 class="m-t-0 m-b-5">
                                        <a href="javascript:void(0)">4 BHK Avenue Street, Mountain View</a>
                                    </h5>
                                    <p class="text-muted font-12">Oct 07, 2015 | Jon Doe</p>
                                </div>
                            </div>
                            <div class="pro-list">
                                <div class="pro-img p-r-10">
                                    <a href="javascript:void(0)">
                                        <img src="../plugins/images/property/prop2.jpeg" alt="property" style="width: 100px; height: 66px;">
                                    </a>
                                </div>
                                <div class="pro-detail">
                                    <h5 class="m-t-0 m-b-5">
                                        <a href="javascript:void(0)">3 BHK 221B Baker Street, London</a>
                                    </h5>
                                    <p class="text-muted font-12">Jun 21, 2016 | Jon Doe</p>
                                </div>
                            </div>
                            <div class="pro-list">
                                <div class="pro-img p-r-10">
                                    <a href="javascript:void(0)">
                                        <img src="../plugins/images/property/prop3.jpeg" alt="property" style="width: 100px; height: 66px;">
                                    </a>
                                </div>
                                <div class="pro-detail">
                                    <h5 class="m-t-0 m-b-5">
                                        <a href="javascript:void(0)">5 BHK Manhattan, New York</a>
                                    </h5>
                                    <p class="text-muted font-12">Jan 11, 2016 | Jon Doe</p>
                                </div>
                            </div>
                            
                            <div class="text-right">
                                <a href="javascript:void(0);" class="btn btn-sm btn-rounded btn-info m-t-10">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row  -->
            <?php include 'php/right-sidebar.php';?>
        </div>
        <!-- /.container-fluid -->
        <?php include 'php/footer.php';?>
    </div>
    <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <!--Morris JavaScript -->
    <script src="../plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="../plugins/bower_components/morrisjs/morris.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="../plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="../plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
    <!-- Real estate dashboard JavaScript -->
    <script src="js/real-estate.js"></script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
<!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>