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
                    <h4 class="page-title">Property Detail</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- .row -->
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div id="carousel-example-captions" data-ride="carousel" class="carousel slide">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-captions" data-slide-to="1" class=""></li>
                                    <li data-target="#carousel-example-captions" data-slide-to="2" class=""></li>
                                </ol>
                                <div role="listbox" class="carousel-inner">
                                    <div class="item active"> <img src="../plugins/images/property/prop6.jpg" alt="First slide image"> </div>
                                    <div class="item"> <img src="../plugins/images/property/prop8.jpg" alt="Second slide image"> </div>
                                    <div class="item"> <img src="../plugins/images/property/prop7.jpg" alt="Third slide image"> </div>
                                </div>
                                <a href="#carousel-example-captions" role="button" data-slide="prev" class="left carousel-control"> <span aria-hidden="true" class="fa fa-angle-left"></span> <span class="sr-only">Previous</span> </a>
                                <a href="#carousel-example-captions" role="button" data-slide="next" class="right carousel-control"> <span aria-hidden="true" class="fa fa-angle-right"></span> <span class="sr-only">Next</span> </a>
                            </div>
                            <h4 class="p-t-20 fw-500">Florida 5, Pinecrest, FL</h4>
                            <h5><span class="text-muted"><i class="fa fa-map-marker text-danger m-r-10" aria-hidden="true"></i>New York City / Brooklyn</span></h5>
                            <hr class="m-0">
                            <p class="text-dark p-t-20 pro-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue. Rorem psum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                                <br>
                                <br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere.</p>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="white-box">
                                    <h5 class="box-title fw-500">Amenities</h5>
                                    <hr class="m-0">
                                    <ul class="pro-amenities text-dark m-b-0">
                                        <li> <span><i class="fa fa-check-circle text-success" aria-hidden="true"></i></span> <span>Private Space</span></li>
                                        <li> <span><i class="fa fa-check-circle text-success" aria-hidden="true"></i></span> <span>WiFi</span></li>
                                        <li> <span><i class="fa fa-check-circle text-success" aria-hidden="true"></i></span> <span>Basketball Court</span></li>
                                        <li> <span><i class="fa fa-check-circle text-success" aria-hidden="true"></i></span> <span>Fireplace</span></li>
                                        <li> <span><i class="fa fa-check-circle text-success" aria-hidden="true"></i></span> <span>Doorman</span></li>
                                        <li> <span><i class="fa fa-check-circle text-success" aria-hidden="true"></i></span> <span>Swimming Pool</span></li>
                                        <li> <span><i class="fa fa-check-circle text-success" aria-hidden="true"></i></span> <span>Gym</span></li>
                                        <li> <span><i class="fa fa-check-circle text-success" aria-hidden="true"></i></span> <span>Parking</span></li>
                                        <li> <span><i class="fa fa-check-circle text-success" aria-hidden="true"></i></span> <span>Laundry</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="white-box">
                                    <h5 class="box-title fw-500">Room Dimensions</h5>
                                    <hr class="m-0">
                                    <div class="table-responsive pro-rd p-t-10">
                                        <table class="table">
                                            <tbody class="text-dark">
                                                <tr>
                                                    <td>Dining Room</td>
                                                    <td>8x8</td>
                                                </tr>
                                                <tr>
                                                    <td>Kitchen</td>
                                                    <td>10x12</td>
                                                </tr>
                                                <tr>
                                                    <td>Living Room</td>
                                                    <td>12x15</td>
                                                </tr>
                                                <tr>
                                                    <td>Master Bedroom</td>
                                                    <td>12x10.2</td>
                                                </tr>
                                                <tr>
                                                    <td>Bedroom 2</td>
                                                    <td>11x9</td>
                                                </tr>
                                                <tr>
                                                    <td>Bedroom 3</td>
                                                    <td>10x12.3</td>
                                                </tr>
                                                <tr>
                                                    <td>Bedroom 4</td>
                                                    <td>12x12</td>
                                                </tr>
                                                <tr>
                                                    <td>Other Room 1</td>
                                                    <td>8x8</td>
                                                </tr>
                                                <tr>
                                                    <td>Other Room 2</td>
                                                    <td>12x10</td>
                                                </tr>
                                                <tr>
                                                    <td>Other Room 3</td>
                                                    <td>12x11</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-12">
                                <div class="white-box p-l-0 p-r-0 p-b-10">
                                    <h5 class="box-title fw-500 p-l-20">Location</h5>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d117506.98606137399!2d72.5797426!3d23.020345749999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1476988114677" width="100%" height="244" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h5 class="box-title fw-500">Essential Information</h5>
                            <hr class="m-0">
                            <div class="table-responsive pro-rd p-t-10">
                                <table class="table">
                                    <tbody class="text-dark">
                                        <tr>
                                            <td>MLS</td>
                                            <td>V254680</td>
                                        </tr>
                                        <tr>
                                            <td>Price</td>
                                            <td>&#36; 220,000</td>
                                        </tr>
                                        <tr>
                                            <td>Bedrooms</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>Bathrooms</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>Full Baths</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>Half Baths</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>Square Footage</td>
                                            <td>2,123</td>
                                        </tr>
                                        <tr>
                                            <td>Lot SQFT</td>
                                            <td>256</td>
                                        </tr>
                                        <tr>
                                            <td>Year Built</td>
                                            <td>2012</td>
                                        </tr>
                                        <tr>
                                            <td>Type</td>
                                            <td>Single Family</td>
                                        </tr>
                                        <tr>
                                            <td>Style</td>
                                            <td>Bi-Level</td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td>Active</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="white-box p-0">
                            <div class="pd-agent-info text-center p-t-30">
                                <a href="javascript:void(0)"><img alt="img" class="thumb-lg img-circle" src="../plugins/images/users/agent.jpg"></a>
                                <h4>Jon Doe</h4>
                                <h6>Agent of Property</h6> </div>
                            <hr class="m-0">
                            <div class="pd-agent-contact text-center"> <i class="fa fa-phone text-danger p-r-10" aria-hidden="true"></i> 800-1800-24657
                                <br> <i class="fa fa-envelope-o text-danger p-r-10 m-t-10" aria-hidden="true"></i> jon@realestate.com </div>
                            <hr class="m-0">
                            <div class="pd-agent-inq">
                                <h4 class="box-title">Request Inquiry</h4>
                                <form class="form-horizontal form-agent-inq">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" placeholder="Name"> </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" placeholder="Phone"> </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input type="email" class="form-control" placeholder="E-Mail"> </div>
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
                         <div class="white-box">
                                    <h5 class="box-title fw-500">Community Information</h5>
                                    <hr class="m-0">
                                    <div class="table-responsive pro-rd p-t-10">
                                        <table class="table">
                                            <tbody class="text-dark">
                                                <tr>
                                                    <td>Address</td>
                                                    <td>Florida 5,
                                                        <br> Pinecrest, FL</td>
                                                </tr>
                                                <tr>
                                                    <td>Price</td>
                                                    <td>&#36; 220,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Subdivision</td>
                                                    <td>Matindale</td>
                                                </tr>
                                                <tr>
                                                    <td>City</td>
                                                    <td>New York</td>
                                                </tr>
                                                <tr>
                                                    <td>Full Bath</td>
                                                    <td>AV</td>
                                                </tr>
                                                <tr>
                                                    <td>Half Baths</td>
                                                    <td>NAV</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                    </div>
                </div>
                <!-- .row -->
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