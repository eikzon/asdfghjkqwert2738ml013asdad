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
    <link rel="stylesheet" href="../plugins/bower_components/dropify/dist/css/dropify.min.css">
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
                    <h4 class="page-title">Add Property</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- .row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <form class="pro-add-form">
                                <div class="form-group">
                                    <label for="pname">Property Name</label>
                                    <input type="text" class="form-control" id="pname" placeholder="Enter Name"> </div>
                                <div class="form-group">
                                    <label for="plocation">Property Location</label>
                                    <input type="email" class="form-control" id="plocation" placeholder="Enter Location"> </div>
                                <div class="form-group">
                                    <label for="pdesc">Property Description</label>
                                    <textarea class="form-control" rows="5" id="pdesc" placeholder="Enter Description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="m-b-10">Property For</label>
                                    <br>
                                    <div class="radio radio-info radio-inline">
                                        <input type="radio" id="radio1" value="option1" name="ptype" checked="">
                                        <label for="radio1"> For Rent </label>
                                    </div>
                                    <div class="radio radio-info radio-inline">
                                        <input type="radio" id="radio2" value="option2" name="ptype">
                                        <label for="radio2"> For Sale </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="plocation">Price / Rent</label>
                                    <input type="email" class="form-control" id="plocation" placeholder="Enter Number"> </div>
                                <div class="form-group">
                                    <label for="paddress">Property Address</label>
                                    <textarea class="form-control" rows="3" id="paddress"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="tch1">Bedrooms</label>
                                            <input id="tch1" type="text" value="" name="tch1" data-bts-button-down-class="btn btn-default btn-outline" data-bts-button-up-class="btn btn-default btn-outline"></div>
                                        <div class="col-sm-4">
                                            <label for="tch2">Garages</label>
                                            <input id="tch2" type="text" value="" name="tch2" data-bts-button-down-class="btn btn-default btn-outline" data-bts-button-up-class="btn btn-default btn-outline"> </div>
                                        <div class="col-sm-4">
                                            <label for="tch3">Bathrooms</label>
                                            <input id="tch3" type="text" value="" name="tch3" data-bts-button-down-class="btn btn-default btn-outline" data-bts-button-up-class="btn btn-default btn-outline"> </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="tch4">Full Bath</label>
                                            <input id="tch4" type="text" value="" name="tch4" data-bts-button-down-class="btn btn-default btn-outline" data-bts-button-up-class="btn btn-default btn-outline"></div>
                                        <div class="col-sm-4">
                                            <label for="tch5">Half Bath</label>
                                            <input id="tch5" type="text" value="" name="tch5" data-bts-button-down-class="btn btn-default btn-outline" data-bts-button-up-class="btn btn-default btn-outline"> </div>
                                        <div class="col-sm-4">
                                            <label for="psqft">Square Ft</label>
                                            <input type="text" class="form-control" id="psqft"> </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="pyear">Year Built</label>
                                            <select class="selectpicker" data-style="form-control" id="pyear">
                                                <option value="0" disabled selected>Year</option>
                                                <option value="1">2015</option>
                                                <option value="2">2016</option>
                                            </select> </div>
                                        <div class="col-sm-4">
                                            <label for="style">Style</label>
                                            <select class="selectpicker" data-style="form-control" id="style">
                                                <option value="0" disabled selected>Style</option>
                                                <option value="1">Bi-level</option>
                                                <option value="2">Tri-level</option>
                                            </select> </div>
                                        <div class="col-sm-4">
                                            <label for="status">Status</label>
                                            <select class="selectpicker" data-style="form-control" id="status">
                                                <option value="0" disabled selected>Status</option>
                                                <option value="1">Active</option>
                                                <option value="2">Inactive</option>
                                            </select> </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="type">Type</label>
                                            <select class="selectpicker" data-style="form-control" id="type">
                                                <option value="0" disabled selected>Type</option>
                                                <option value="1">Single</option>
                                                <option value="2">Double</option>
                                            </select> </div>
                                        <div class="col-sm-4">
                                            <label for="subdiv">Subdivision</label>
                                            <select class="selectpicker" data-style="form-control" id="subdiv">
                                                <option value="0" disabled selected>Subdivision</option>
                                                <option value="1">Matindale</option>
                                                <option value="2">citadel</option>
                                            </select> </div>
                                        <div class="col-sm-4">
                                            <label for="city">City</label>
                                            <select class="selectpicker" data-style="form-control" id="city">
                                                <option value="0" disabled selected>City</option>
                                                <option value="1">Ahmedabad</option>
                                                <option value="2">Mountain View</option>
                                            </select> </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Amenities</label>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox1" type="checkbox" checked>
                                                <label for="checkbox1"> Private Space </label>
                                            </div>
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox2" type="checkbox" checked>
                                                <label for="checkbox2"> Wifi </label>
                                            </div>
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox3" type="checkbox">
                                                <label for="checkbox3"> Basketball Court </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox4" type="checkbox">
                                                <label for="checkbox4"> Fireplace </label>
                                            </div>
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox5" type="checkbox" checked>
                                                <label for="checkbox5"> Doorman </label>
                                            </div>
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox6" type="checkbox">
                                                <label for="checkbox6"> Swimming Pool </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox7" type="checkbox">
                                                <label for="checkbox7"> Gym </label>
                                            </div>
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox8" type="checkbox">
                                                <label for="checkbox8"> Parking </label>
                                            </div>
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox9" type="checkbox" checked>
                                                <label for="checkbox9"> laundry </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="box-title">Dimensions</h3>
                                <hr>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="diningroom">Dining Room</label>
                                            <input type="text" class="form-control" id="diningroom" data-mask="99x99"> </div>
                                        <div class="col-sm-4">
                                            <label for="kitchen">Kitchen</label>
                                            <input type="text" class="form-control" id="kitchen" data-mask="99x99"> </div>
                                        <div class="col-sm-4">
                                            <label for="livingroom">Living Room</label>
                                            <input type="text" class="form-control" id="livingroom" data-mask="99x99"> </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="mbedroom">Master Bedroom</label>
                                            <input type="text" class="form-control" id="mbedroom" data-mask="99x99"> </div>
                                        <div class="col-sm-4">
                                            <label for="bed2">Bedroom 2</label>
                                            <input type="text" class="form-control" id="bed2" data-mask="99x99"> </div>
                                        <div class="col-sm-4">
                                            <label for="otherroom">Other Room</label>
                                            <input type="text" class="form-control" id="otherroom" data-mask="99x99"> </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-file-now">Upload Files</label>
                                    <input type="file" id="input-file-now" class="dropify" />
                                </div>
                                
                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Add Property</button>
                                <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                            </form>
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
    <script src="js/mask.js"></script>
    <script src="../plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="../plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
    <!-- jQuery file upload -->
    <script src="../plugins/bower_components/dropify/dist/js/dropify.min.js"></script>
    <script>
        $("input[name='tch1']").TouchSpin();
        $("input[name='tch2']").TouchSpin();
        $("input[name='tch3']").TouchSpin();
        $("input[name='tch4']").TouchSpin();
        $("input[name='tch5']").TouchSpin();
        $('.dropify').dropify();
    </script>
    <!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>