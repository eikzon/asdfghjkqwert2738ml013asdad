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
    <link href="../plugins/bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
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
                    <h4 class="page-title">Property 3 Column</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Search</h3>
                            <form role="form" class="row">
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <select class="selectpicker show-tick" data-style="form-control">
                                            <option value="0" disabled selected>Status</option>
                                            <option value="1">Rent</option>
                                            <option value="2">Sale</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <select class="selectpicker show-tick" data-style="form-control">
                                            <option value="">Country</option>
                                            <option value="1">India</option>
                                            <option value="2">Germany</option>
                                            <option value="3">Spain</option>
                                            <option value="4">Russia</option>
                                            <option value="5">United States</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <select class="selectpicker show-tick" data-style="form-control">
                                            <option value="">City</option>
                                            <option value="1">Moscow</option>
                                            <option value="2">Barcelona</option>
                                            <option value="3">Mumbai</option>
                                            <option value="4">Houston</option>
                                            <option value="5">Sokovia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <select class="selectpicker show-tick" data-style="form-control">
                                            <option value="">Property Type</option>
                                            <option value="1">Apartment</option>
                                            <option value="2">Villa/Mansion</option>
                                            <option value="3">Cottage</option>
                                            <option value="4">Flat</option>
                                            <option value="5">House</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-1">
                                    <button type="submit" class="btn btn-inverse btn-block form-control"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                    <!-- .row -->
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="white-box pro-box p-0">
                                <div class="pro-list-img" style="background: url('../plugins/images/property/prop5.jpg') center center / cover no-repeat;"> <span class="pro-label-img"><img src="../plugins/images/property/heart.png" alt="heart"></span> </div>
                                <div class="pro-content-3-col">
                                    <div class="pro-list-details">
                                        <h4>
                                    <a class="text-dark" href="javascript:void(0)">Florida 5, Pinecrest, FL</a>
                                </h4>
                                        <h4 class="text-danger"><small>&#36;</small> 220,000</h4> </div>
                                </div>
                                <hr class="m-0"> <span class="label pro-col-label label-white text-dark">For Rent</span>
                                <div class="pro-list-info-3-col">
                                    <ul class="pro-info text-muted m-b-0">
                                        <li> <span><img src="../plugins/images/property/pro-bath.png"></span> <span>Bathrooms</span><span class="label label-default pull-right text-inverse">2</span></li>
                                        <li> <span><img src="../plugins/images/property/pro-bed.png"></span> <span>Beds</span><span class="label label-default pull-right text-inverse">2</span></li>
                                        <li> <span><img src="../plugins/images/property/pro-garage.png"></span> <span>Garages</span><span class="label label-default pull-right text-inverse">1</span></li>
                                    </ul>
                                </div>
                                <hr class="m-0">
                                <div class="pro-agent-col-3">
                                    <div class="agent-img">
                                        <a href="javascript:void(0)"><img alt="img" class="thumb-md img-circle" src="../plugins/images/users/agent2.jpg"></a>
                                    </div>
                                    <div class="agent-name">
                                        <h5 class="m-b-0">Janet Richmond</h5> <small class="text-muted">5 Properties</small> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="white-box pro-box p-0">
                                <div class="pro-list-img" style="background: url('../plugins/images/property/prop5.jpg') center center / cover no-repeat;"> <span class="pro-label-img"><img src="../plugins/images/property/heart.png" alt="heart"></span> </div>
                                <div class="pro-content-3-col">
                                    <div class="pro-list-details">
                                        <h4>
                                    <a class="text-dark" href="javascript:void(0)">Florida 5, Pinecrest, FL</a>
                                </h4>
                                        <h4 class="text-danger"><small>&#36;</small> 220,000</h4> </div>
                                </div>
                                <hr class="m-0"> <span class="label pro-col-label label-white text-dark">For Rent</span>
                                <div class="pro-list-info-3-col">
                                    <ul class="pro-info text-muted m-b-0">
                                        <li> <span><img src="../plugins/images/property/pro-bath.png"></span> <span>Bathrooms</span><span class="label label-default pull-right text-inverse">2</span></li>
                                        <li> <span><img src="../plugins/images/property/pro-bed.png"></span> <span>Beds</span><span class="label label-default pull-right text-inverse">2</span></li>
                                        <li> <span><img src="../plugins/images/property/pro-garage.png"></span> <span>Garages</span><span class="label label-default pull-right text-inverse">1</span></li>
                                    </ul>
                                </div>
                                <hr class="m-0">
                                <div class="pro-agent-col-3">
                                    <div class="agent-img">
                                        <a href="javascript:void(0)"><img alt="img" class="thumb-md img-circle" src="../plugins/images/users/agent2.jpg"></a>
                                    </div>
                                    <div class="agent-name">
                                        <h5 class="m-b-0">Janet Richmond</h5> <small class="text-muted">5 Properties</small> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="white-box pro-box p-0">
                                <div class="pro-list-img" style="background: url('../plugins/images/property/prop5.jpg') center center / cover no-repeat;"> <span class="pro-label-img"><img src="../plugins/images/property/heart.png" alt="heart"></span> </div>
                                <div class="pro-content-3-col">
                                    <div class="pro-list-details">
                                        <h4>
                                    <a class="text-dark" href="javascript:void(0)">Florida 5, Pinecrest, FL</a>
                                </h4>
                                        <h4 class="text-danger"><small>&#36;</small> 220,000</h4> </div>
                                </div>
                                <hr class="m-0"> <span class="label pro-col-label label-white text-dark">For Rent</span>
                                <div class="pro-list-info-3-col">
                                    <ul class="pro-info text-muted m-b-0">
                                        <li> <span><img src="../plugins/images/property/pro-bath.png"></span> <span>Bathrooms</span><span class="label label-default pull-right text-inverse">2</span></li>
                                        <li> <span><img src="../plugins/images/property/pro-bed.png"></span> <span>Beds</span><span class="label label-default pull-right text-inverse">2</span></li>
                                        <li> <span><img src="../plugins/images/property/pro-garage.png"></span> <span>Garages</span><span class="label label-default pull-right text-inverse">1</span></li>
                                    </ul>
                                </div>
                                <hr class="m-0">
                                <div class="pro-agent-col-3">
                                    <div class="agent-img">
                                        <a href="javascript:void(0)"><img alt="img" class="thumb-md img-circle" src="../plugins/images/users/agent2.jpg"></a>
                                    </div>
                                    <div class="agent-name">
                                        <h5 class="m-b-0">Janet Richmond</h5> <small class="text-muted">5 Properties</small> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="white-box pro-box p-0">
                                <div class="pro-list-img" style="background: url('../plugins/images/property/prop5.jpg') center center / cover no-repeat;"> <span class="pro-label-img"><img src="../plugins/images/property/heart.png" alt="heart"></span> </div>
                                <div class="pro-content-3-col">
                                    <div class="pro-list-details">
                                        <h4>
                                    <a class="text-dark" href="javascript:void(0)">Florida 5, Pinecrest, FL</a>
                                </h4>
                                        <h4 class="text-danger"><small>&#36;</small> 220,000</h4> </div>
                                </div>
                                <hr class="m-0"> <span class="label pro-col-label label-white text-dark">For Rent</span>
                                <div class="pro-list-info-3-col">
                                    <ul class="pro-info text-muted m-b-0">
                                        <li> <span><img src="../plugins/images/property/pro-bath.png"></span> <span>Bathrooms</span><span class="label label-default pull-right text-inverse">2</span></li>
                                        <li> <span><img src="../plugins/images/property/pro-bed.png"></span> <span>Beds</span><span class="label label-default pull-right text-inverse">2</span></li>
                                        <li> <span><img src="../plugins/images/property/pro-garage.png"></span> <span>Garages</span><span class="label label-default pull-right text-inverse">1</span></li>
                                    </ul>
                                </div>
                                <hr class="m-0">
                                <div class="pro-agent-col-3">
                                    <div class="agent-img">
                                        <a href="javascript:void(0)"><img alt="img" class="thumb-md img-circle" src="../plugins/images/users/agent2.jpg"></a>
                                    </div>
                                    <div class="agent-name">
                                        <h5 class="m-b-0">Janet Richmond</h5> <small class="text-muted">5 Properties</small> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="white-box pro-box p-0">
                                <div class="pro-list-img" style="background: url('../plugins/images/property/prop5.jpg') center center / cover no-repeat;"> <span class="pro-label-img"><img src="../plugins/images/property/heart.png" alt="heart"></span> </div>
                                <div class="pro-content-3-col">
                                    <div class="pro-list-details">
                                        <h4>
                                    <a class="text-dark" href="javascript:void(0)">Florida 5, Pinecrest, FL</a>
                                </h4>
                                        <h4 class="text-danger"><small>&#36;</small> 220,000</h4> </div>
                                </div>
                                <hr class="m-0"> <span class="label pro-col-label label-white text-dark">For Rent</span>
                                <div class="pro-list-info-3-col">
                                    <ul class="pro-info text-muted m-b-0">
                                        <li> <span><img src="../plugins/images/property/pro-bath.png"></span> <span>Bathrooms</span><span class="label label-default pull-right text-inverse">2</span></li>
                                        <li> <span><img src="../plugins/images/property/pro-bed.png"></span> <span>Beds</span><span class="label label-default pull-right text-inverse">2</span></li>
                                        <li> <span><img src="../plugins/images/property/pro-garage.png"></span> <span>Garages</span><span class="label label-default pull-right text-inverse">1</span></li>
                                    </ul>
                                </div>
                                <hr class="m-0">
                                <div class="pro-agent-col-3">
                                    <div class="agent-img">
                                        <a href="javascript:void(0)"><img alt="img" class="thumb-md img-circle" src="../plugins/images/users/agent2.jpg"></a>
                                    </div>
                                    <div class="agent-name">
                                        <h5 class="m-b-0">Janet Richmond</h5> <small class="text-muted">5 Properties</small> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="white-box pro-box p-0">
                                <div class="pro-list-img" style="background: url('../plugins/images/property/prop5.jpg') center center / cover no-repeat;"> <span class="pro-label-img"><img src="../plugins/images/property/heart.png" alt="heart"></span> </div>
                                <div class="pro-content-3-col">
                                    <div class="pro-list-details">
                                        <h4>
                                    <a class="text-dark" href="javascript:void(0)">Florida 5, Pinecrest, FL</a>
                                </h4>
                                        <h4 class="text-danger"><small>&#36;</small> 220,000</h4> </div>
                                </div>
                                <hr class="m-0"> <span class="label pro-col-label label-white text-dark">For Rent</span>
                                <div class="pro-list-info-3-col">
                                    <ul class="pro-info text-muted m-b-0">
                                        <li> <span><img src="../plugins/images/property/pro-bath.png"></span> <span>Bathrooms</span><span class="label label-default pull-right text-inverse">2</span></li>
                                        <li> <span><img src="../plugins/images/property/pro-bed.png"></span> <span>Beds</span><span class="label label-default pull-right text-inverse">2</span></li>
                                        <li> <span><img src="../plugins/images/property/pro-garage.png"></span> <span>Garages</span><span class="label label-default pull-right text-inverse">1</span></li>
                                    </ul>
                                </div>
                                <hr class="m-0">
                                <div class="pro-agent-col-3">
                                    <div class="agent-img">
                                        <a href="javascript:void(0)"><img alt="img" class="thumb-md img-circle" src="../plugins/images/users/agent2.jpg"></a>
                                    </div>
                                    <div class="agent-name">
                                        <h5 class="m-b-0">Janet Richmond</h5> <small class="text-muted">5 Properties</small> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <!-- .row -->
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <ul class="pagination pagination-split">
                                <li class="disabled"> <a href="#"><i class="fa fa-angle-left"></i></a> </li>
                                <li class="active"> <a href="#">1</a> </li>
                                <li> <a href="#">2</a> </li>
                                <li> <a href="#">3</a> </li>
                                <li> <a href="#">4</a> </li>
                                <li> <a href="#">5</a> </li>
                                <li> <a href="#"><i class="fa fa-angle-right"></i></a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
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
        <!-- Sidebar menu plugin JavaScript -->
        <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
        <!-- bootstrap-select javascript -->
        <script src="../plugins/bower_components/bootstrap-select/bootstrap-select.min.js"></script>
        <!--Slimscroll JavaScript For custom scroll-->
        <script src="js/jquery.slimscroll.js"></script>
        <!--Wave Effects -->
        <script src="js/waves.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="js/custom.min.js"></script>
        <!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
<!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>