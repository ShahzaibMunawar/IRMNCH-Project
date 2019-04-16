<?php require_once("inc/config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>IRMNCH</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo URL; ?>assets/plugins/bootstrap/css/bootstrap.min.css" type='text/css' />
    <link rel="stylesheet" href="<?php echo URL; ?>assets/css/style.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo URL; ?>assets/plugins/hover/hover-min.css">
    <!-- Animate.CSS -->
    <link rel="stylesheet" href="<?php echo URL; ?>assets/plugins/Animation/animate.css">
    <!--    jquery-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="<?php echo URL; ?>assets/plugins/counter-up/jquery.counterup.min.js"></script>
    <script src="<?php echo URL; ?>assets/plugins/waypoints/waypoints.min.js"></script>
    <script src="<?php echo URL; ?>assets/plugins/WOW-master/dist/wow.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="<?php echo URL; ?>assets/js/html5shiv.min.js"></script>
          <script src="<?php echo URL; ?>assets/js/respond.min.js"></script>
        <![endif]-->
    <!--        counterup.js-->
    <script>
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 20 ,
                time: 1000
            });
        });

    </script>
    <!--       wow.js-->
    <script>
        new WOW().init();

    </script>

</head>

<body>
    <a href="#" id="log-control" class="btn log-control">Login</a>
    <aside id="sidebar">
        <div id="dismiss">
            <i class="glyphicon glyphicon-arrow-left"></i>
        </div>
        <div class="dashboard-panel dashboard-circular">
            <div class="big-circle">
                <div class="donut">
                    <div class="layer-1"></div>
                    <div class="layer-2"></div>
                    <div class="layer-3"></div>
                    <div class="layer-4"></div>
                    <div class="layer-5"></div>
                    <div class="layer-6"></div>
                    <div class="inner-space"> <a href="#" class="btn">Login</a></div>
                </div>
            </div>
            <div class="panel panel-1">
                <div class="media">
                    <div class="media-left"> <a href="http://www.phispb.com/lhw/" target="_blank"> <img class="media-object" src="assets/images/lhw.jpg" alt="LHW"> </a> </div>
                    <div class="media-body single-text text-left">
                        <h4 class="media-heading"><a href="http://www.phispb.com/lhw/" target="_blank">LHW-MIS  <i class="fa fa-external-link"></i> </a></h4>
                    </div>
                </div>
            </div>
            <div class="panel panel-2">
                <div class="media">
                    <div class="media-left"> <a href="http://www.phispb.com/nutrition/" target="_blank"> <img class="media-object" src="assets/images/nutrition.jpg" alt="nutrition"> </a> </div>
                    <div class="media-body single-text text-left">
                        <h4 class="media-heading"><a href="http://www.phispb.com/nutrition/" target="_blank">Nutrition-MIS  <i class="fa fa-external-link"></i> </a></h4>
                    </div>
                </div>
            </div>
            <div class="panel panel-3">
                <div class="media">
                    <div class="media-left"> <a href="#"> <img class="media-object" src="assets/images/mnch.jpg" alt="LHW"> </a> </div>
                    <div class="media-body single-text text-left">
                        <h4 class="media-heading"><a href="#">MNCH-MIS  <i class="fa fa-external-link"></i> </a></h4>
                    </div>
                </div>
            </div>
            <div class="panel panel-4">
                <div class="media">
                    <div class="media-left"> <a href="#"> <img class="media-object" src="assets/images/payroll.jpg" alt="Autopsy"> </a> </div>
                    <div class="media-body single-text text-left">
                        <h4 class="media-heading"><a href="#">24/7 &amp; Verbal Autopsy <i class="fa fa-external-link"></i> </a></h4>
                    </div>
                </div>
            </div>
            <div class="panel panel-5">
                <div class="media">
                    <div class="media-left"> <a href="#"> <img class="media-object" src="assets/images/fp.jpg" alt="PayRoll"> </a> </div>
                    <div class="media-body single-text text-left">
                        <h4 class="media-heading"><a href="#">FP Referral <i class="fa fa-external-link"></i> </a></h4>
                    </div>
                </div>
            </div>
            
            <div class="panel panel-6">
                <div class="media">
                    <div class="media-left"> <a href="http://c.lmis.gov.pk/" target="_blank"> <img class="media-object" src="assets/images/clmis.jpg" alt="CLMIS"> </a> </div>
                    <div class="media-body single-text text-left">
                        <h4 class="media-heading"><a href="http://c.lmis.gov.pk/" target="_blank"><small>C</small>LMIS <i class="fa fa-external-link"></i> </a></h4>
                    </div>
                </div>
            </div>
        </div>

    </aside>
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="#"> <img src="assets/images/logo.png" alt="IRMNCH" /> <strong>Integrated Reproductive Maternal <span>Newborn Child Health & Nutrition Program</span></strong> </a> </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="filter-panel">
                    <form class="form-inline navbar-form navbar-right">


                        <div class="form-group">
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default active">
				<input type="radio" name="options" id="option1" autocomplete="off" checked=""> Annual
			  </label>
                                <label class="btn btn-default">
				<input type="radio" name="options" id="option2" autocomplete="off"> Quarter
			  </label>
                                <label class="btn btn-default">
				<input type="radio" name="options" id="option3" autocomplete="off"> Monthly
			  </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <select id="year" class="form-control" name="date">
                <option value="2017" selected >2017</option>
                <option value="2016"  >2016</option>
                <option value="2015"  >2015</option>
                <option value="2014"  >2014</option>
                <option value="2013"  >2013</option>
              </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="quarter" name="quarter">
                <option value="">Quarter</option>
                <option value="1" >QTR-1</option>
                <option value="2" >QTR-2</option>
                <option value="3" >QTR-3</option>
                <option value="4" >QTR-4</option>
              </select>
                        </div>
                        <div class="form-group">
                            <select id="month" class="form-control" name="month">
                <option value="">Month</option>
                <option value="01" >January</option>
                <option value="02" >February</option>
                <option value="03" >March</option>
                <option value="04" >April</option>
                <option value="05" >May</option>
                <option value="06" >June</option>
                <option value="07" >July</option>
                <option value="08" >August</option>
                <option value="09" >September</option>
                <option value="10" >October</option>
                <option value="11" >November</option>
                <option value="12" >December</option>
              </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="submit" value="submit" class="btn btn-success btn-flat btn-md btn-block ">Filter</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <section class="content">
        <div class="container">
            <!--          icons data-->
            <div class="flex">
            <div class="col-md-8 b-r col-sm-12 col-lg-8 col-xs-12 md-b-r-0">
                <div class="row member-box-grid">
                    <div class="col-md-20 p-r-0 p-l-0">
                        <div class="member-box wow zoomIn">
                            <div class="member-icon member-icon-1">
                                <i class="flaticon flaticon-black "></i>
                                <label>LHS</label>
                            </div>
                            <strong class="count">
							  <span class="counter">34,567</span>
						    </strong>
                        </div>
                    </div>
                    <div class="col-md-20 p-r-0 p-l-0">
                        <div class="member-box wow zoomIn">
                            <div class="member-icon member-icon-2">
                                <i class="flaticon flaticon-black"></i>
                                <label>LHW</label>
                            </div>
                            <strong class="count">
						<span class="counter">34,567</span>
						</strong>
                        </div>
                    </div>
                    <div class="col-md-20 p-r-0 p-l-0">
                        <div class="member-box wow zoomIn">
                            <div class="member-icon member-icon-3">
                                <i class="flaticon flaticon-black"></i>
                                <label>CMW</label>
                            </div>
                            <strong class="count">
							<span class="counter">24,567</span>
						</strong>
                        </div>
                    </div>
                    <div class="col-md-20 p-r-0 p-l-0">
                        <div class="member-box wow zoomIn">
                            <div class="member-icon member-icon-4">
                                <i class="flaticon flaticon-black"></i>
                                <label>LHW</label>
                            </div>
                            <strong class="count">
					            <span class="counter">24,567</span>
						</strong>
                        </div>
                    </div>
                    <div class="col-md-20 p-r-0 p-l-0">
                        <div class="member-box wow zoomIn">
                            <div class="member-icon member-icon-5">
                                <i class="flaticon flaticon-black "></i>
                                <label>WMO</label>
                            </div>
                            <strong class="count">
							<span class="counter b-r-0">34,567</span>
						</strong>
                        </div>
                    </div>

                </div>
            </div>
          
            <!--           table data-->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                <div class="row">
                   <div class="col-md-12 col-sm-12 col-xs-12 text-center"><h2>Ambulances </h2></div>
                    <div class="col-md-6  col-sm-6 col-xs-6 wow bounceIn">
                        <div class="single-icon-widget">
                            
                            <label>  <span class="counter">200</span></label>
                            <div class="widget-icon">
                                <!--<i class="flaticon flaticon-transport blue-color"></i>-->
                                <a class="flaticon flaticon-ambulance color-red hvr-grow" href=""></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-6 text-center">
                        <br/>
                        <div class="row wow bounceIn">
                            <div class="col-md-12">
                                <h4 class="font-30"><i class="flaticon flaticon-pregnant-woman font-50 blue-color hvr-grow"></i> <span class="counter p-l-15">567</span></h4>
                                <h5>Pragnant Women Transfer</h5>
                            </div>
                        </div>
                        <div class="row wow bounceIn">
                            <div class="col-md-12">
                                <h4 class="font-30"><i class="flaticon flaticon-crawling-baby-silhouette font-45 blue-color hvr-grow"></i> <span class="counter p-l-15">300</span></h4>
                                <h5>Children Transfer</h5>
                            </div>
                        </div>
                    </div>
                </div>
  </div>
            </div>

            <div class="clearfix"></div>

            <hr/>
            <div class="clearfix"></div>
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12  ">
                    <div class="pop-box ">
                        <h3 class="section-heading text-center">Population</h3>
                        <div class="row wow fadeInLeft">
                            <div class="col-md-6 col-sm-3 col-xs-3">
                                <div class="row">
                                    <div class="pops-box">

                                        <div class="col-md-5 p-l-5 p-r-5">
                                            <div class="infographics-grid-people">
                                                <ul class="list-inline">
                                                    <li><i class="fa fa-female color-red"></i></li>
                                                    <li><i class="fa fa-female color-red"></i></li>
                                                    <li><i class="fa fa-child color-red"></i></li>
                                                    <li><i class="fa fa-male color-red"></i></li>
                                                    <li><i class="fa fa-child"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-7 p-l-5 p-r-5">
                                            <div class="col-md-12 p-l-5 p-r-5">
                                                <dl class="chart-statistic">
                                                    <dt> Registered Population with LHW</dt>
                                                    <dd>4,062,142</dd>
                                                </dl>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-3 col-xs-3">
                                <div class="row">
                                    <div class="pops-box">

                                        <div class="space">
                                            <div class="col-md-5 p-l-5 p-r-5">
                                                <div class="infographics-grid-people">
                                                    <ul class="list-inline">
                                                        <li><i class="fa fa-female color-green"></i></li>
                                                        <li><i class="fa fa-female color-green"></i></li>
                                                        <li><i class="fa fa-child color-green"></i></li>
                                                        <li><i class="fa fa-male color-green"></i></li>
                                                        <li><i class="fa fa-child"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-7 p-l-5 p-r-5">
                                                <div class="col-md-12 p-l-5 p-r-5">
                                                    <dl class="chart-statistic">
                                                        <dt>Registered Population with CMW</dt>
                                                        <dd>4,062,142</dd>
                                                    </dl>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-3 col-xs-3">
                                <div class="row">
                                    <div class="pops-box">
                                        <div class="col-md-5 p-l-5 p-r-5">
                                            <div class="infographics-grid-people">
                                                <ul class="list-inline">
                                                    <li><i class="fa fa-female color-red"></i></li>
                                                    <li><i class="fa fa-female color-red"></i></li>
                                                    <li><i class="fa fa-child color-red"></i></li>
                                                    <li><i class="fa fa-male color-red"></i></li>
                                                    <li><i class="fa fa-child color-red"></i></li>
                                                </ul>

                                            </div>
                                        </div>
                                        <div class="col-md-7 ">
                                            <div class="row">
                                                <div class="col-md-12 ">
                                                    <dl class="chart-statistic">
                                                        <dt>Registered Urban Population  with LHW</dt>
                                                        <dd>4,062,142</dd>
                                                    </dl>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-3 col-xs-3">
                                <div class="row">
                                    <div class="pops-box b-r-0">
                                        <div class="col-md-5 p-l-5 p-r-5">
                                            <div class="infographics-grid-people">
                                                <ul class="list-inline">
                                                    <li><i class="fa fa-female color-green"></i></li>
                                                    <li><i class="fa fa-female color-green"></i></li>
                                                    <li><i class="fa fa-child color-green"></i></li>
                                                    <li><i class="fa fa-male"></i></li>
                                                    <li><i class="fa fa-child"></i></li>
                                                </ul>

                                            </div>
                                        </div>
                                        <div class="col-md-7 ">
                                            <div class="row">
                                                <div class="col-md-12 ">
                                                    <dl class="chart-statistic">
                                                        <dt>Registered Rural Population with LHW</dt>
                                                        <dd>4,062,142</dd>
                                                    </dl>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12  ">
                    <h3 class="section-heading text-center">Service Points</h3>
                    <div class="stat-box wow fadeInRight">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="points-box">
                                    <div class="points-icon">
                                        <i class="flaticon blue-color flaticon-hospital-buildings hvr-grow"></i>
                                    </div>
                                    <h4>HF covered by LHW <br /><br /><span>2677</span></h4>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="points-box">
                                    <div class="points-icon">
                                        <i class="flaticon blue-color flaticon-medical hvr-pulse"></i>
                                    </div>
                                    <h4>HF Covered by Nutrition <span>1677</span></h4>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="points-box">
                                    <div class="points-icon">
                                        <i class="flaticon blue-color flaticon-hospital-buildings hvr-grow"></i>
                                    </div>
                                    <h4>HF Covered by CMW <br /><br /><span>2677</span></h4>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="points-box">
                                    <div class="points-icon">
                                        <i class="flaticon blue-color flaticon-ambulance hvr-grow"></i>
                                    </div>
                                    <h4>HF Covered by Ambulances <span>3922</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-11 sm-b-r  xs-p-l-0">
                                <dl class="chart-statistic small">
                                    <dt><i class="fa fa-circle color-green"></i> BHU </dt>
                                    <dd>1,769</dd>
                                </dl>
                            </div>
                            <div class="col-md-16 sm-b-r xs-p-r-5 xs-p-l-0">
                                <dl class="chart-statistic small">
                                    <dt><i class="fa fa-circle color-green"></i> BHU 24/7</dt>
                                    <dd>850</dd>
                                </dl>
                            </div>
                            <div class="col-md-11 sm-b-r xs-p-r-5 xs-p-l-0">
                                <dl class="chart-statistic small">
                                    <dt><i class="fa fa-circle color-green"></i> BHU+</dt>
                                    <dd>945</dd>
                                </dl>
                            </div>
                            <div class="col-md-11 sm-b-r xs-p-r-5 xs-p-l-0">
                                <dl class="chart-statistic small">
                                    <dt><i class="fa fa-circle color-green"></i> RSC</dt>
                                    <dd>495</dd>
                                </dl>
                            </div>
                            <div class="col-md-11 sm-b-r xs-p-r-5 xs-p-l-0">
                                <dl class="chart-statistic small">
                                    <dt><i class="fa fa-circle color-green"></i> THQ</dt>
                                    <dd>400</dd>
                                </dl>
                            </div>
                            <div class="col-md-11 sm-b-r xs-p-r-5 xs-p-l-0">
                                <dl class="chart-statistic small">
                                    <dt><i class="fa fa-circle color-green"></i> DHQ</dt>
                                    <dd>400</dd>
                                </dl>
                            </div>
                            <div class="col-md-11 sm-b-r xs-p-r-5 xs-p-l-0">
                                <dl class="chart-statistic small">
                                    <dt><i class="fa fa-circle color-green"></i> OTP</dt>
                                    <dd>400</dd>
                                </dl>
                            </div>
                            <div class="col-md-11 xs-p-r-5 xs-p-l-0">
                                <dl class="chart-statistic small">
                                    <dt><i class="fa fa-circle color-green"></i> SC</dt>
                                    <dd>400</dd>
                                </dl>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="clearfix"></div>

                <hr/>
                <div class="row">
                    <div class="col-md-8">
                        <div class="stat-box1">
                            <h3 class="section-heading">Services Provided</h3>
                            <div class="row">
                                <!--                           number 1-->
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="service-box wow flash">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="service-icon">
                                                    <i class="flaticon flaticon-pregnant-woman hvr-bounce-in"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h4>Pregnent women</h4>
                                                <span class="service-color">45,000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--                            number 2-->
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="service-box wow flash">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="service-icon">
                                                    <i class="flaticon flaticon-patient-in-hospital-bed hvr-bounce-in "></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h4>Deliveries conducted</h4>
                                                <span class="service-color">45,000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--                            number 3-->
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="service-box wow flash">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="service-icon">
                                                    <i class="flaticon flaticon-pregnant-woman-and-fetus hvr-bounce-in"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h4>ANC Visits</h4>
                                                <span class="service-color">45,000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--                            number 4-->
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="service-box wow flash">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="service-icon">
                                                    <i class="flaticon flaticon-mother-with-baby-in-arms hvr-bounce-in"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h4>PNC Visits</h4>
                                                <span class="service-color">45,000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!--                           number 5-->
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="service-box wow flash">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="service-icon">
                                                    <i class="flaticon flaticon-pills  hvr-bounce-in"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h4>FP Clients</h4>
                                                <span class="service-color">45,000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--                            number 6-->
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="service-box wow flash">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="service-icon">
                                                    <i class="flaticon flaticon-kids-couple hvr-bounce-in"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h4>SAM Cured</h4>
                                                <span class="service-color">45,000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--                            number 7-->
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="service-box wow flash">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="service-icon">
                                                    <i class="flaticon flaticon-kids-couple hvr-bounce-in"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h4>MAM Cured</h4>
                                                <span class="service-color">45,000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--                            number 8-->
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="service-box wow flash">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="service-icon">
                                                    <i class="flaticon flaticon-transport hvr-bounce-in"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h4>Patient Shifted</h4>
                                                <span class="service-color">45,000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-1 col-xs-1"></div>
                    <div class="col-md-4 col-sm-10 col-xs-10">
                        <h3 class="section-heading1">&nbsp;</h3>
                        <div class="panel panel-default i-panel">
                            <div class="panel-body">
                                <ul class="list-unstyled progress-listing wow fadeInUp">
                                    <li>
                                        <p class="m-0">% of deliveries by SBA <span class="pull-right">99%</span></p>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width: 99%;">
                                                <span class="sr-only">99% Complete</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <p class="m-0">% of exclusive breast feeding<span class="pull-right">84%</span></p>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100" style="width: 84%;">
                                                <span class="sr-only">84% Complete</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <p class="m-0">%No. of deliveries by SBA <span class="pull-right">22,734</span></p>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                                <span class="sr-only">90% Complete</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <p class="m-0">% of cured children from OTP <span class="pull-right"> 78%</span></p>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;">
                                                <span class="sr-only">78% Complete</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <p class="m-0">% of cured children from SC <span class="pull-right"> 92%</span></p>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 92%;">
                                                <span class="sr-only">92% Complete</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--                    table end-->

                    </div>
                     <div class="col-sm-1 col-xs-1"></div>
                </div>
                <div class="clearfix"></div>

                <hr/>
                <div class="row stat-boxs">
                    <!--               box 1-->
                    <div class="col-md-6 col-sm-6 col-xs-12 colour-box stat-boxs1">
                        <h3 class="text-center">Family Planning Mathods</h3>
                        <div class="main-data">
                            <div class="stats-box1">
                                <div class="stats-icon">
                                    <i class="flaticon flaticon-female-and-male-silhouettes-with-a-vertical-line-in-the-middle wow slideInRight "></i>
                                </div>
                            </div>
                            <div class="main-data-text">
                                <h3> <span class="counter">4,567</span></h3>
                                <h6>Services Provided</h6>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-md-20 wow fadeInUp">
                                <h6>Condom</h6>
                                <h5>46%</h5>
                                <p>121,183</p>
                            </div>
                            <div class="col-md-20 wow fadeInUp">
                                <h6>Surgical Methods</h6>
                                <h5>23%</h5>
                                <p>60,940</p>
                            </div>
                            <div class="col-md-20 wow fadeInUp">
                                <h6>ICUD</h6>
                                <h5>13%</h5>
                                <p>33,409</p>
                            </div>
                            <div class="col-md-20 wow fadeInUp">
                                <h6>Injectable</h6>
                                <h5>9%</h5>
                                <p>22,831</p>
                            </div>
                            <div class="col-md-20 wow fadeInUp b-r-0">
                                <h6>oral-pills</h6>
                                <h5>46%</h5>
                                <p>121,183</p>
                            </div>
                        </div>
                    </div>
                    <!--                box2-->
                    <div class="col-md-6 col-sm-6 col-xs-12 stat-boxs2">
                        <h3 class="text-center">No Of Deliveries</h3>
                        <div class="main-data">
                            <div class="stats-box2">
                                <div class="stats-icon">
                                    <i class="flaticon flaticon-ambulance wow slideInRight "></i>
                                </div>
                            </div>
                            <div class="main-data-text">
                                <h3> <span class="counter">3,000</span></h3>
                                <h6>Services Provided</h6>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-md-3 col-sm-3 col-xs-3 wow fadeInUp">
                                <h6>At Govt Hospital</h6>
                                <h5>46%</h5>
                                <p>121,183</p>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 wow fadeInUp">
                                <h6>At Private Hospital</h6>
                                <h5>23%</h5>
                                <p>60,940</p>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 wow fadeInUp">
                                <h6>At Home</h6>
                                <h5>13%</h5>
                                <p>33,409</p>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 wow fadeInUp b-r-0">
                                <h6>By CMW</h6>
                                <h5>9%</h5>
                                <p>22,831</p>
                            </div>

                        </div>
                    </div> 
                    
                    <!--                box3-->
                    <div class="clearfix"></div>
                    <div class="col-md-6 col-sm-6 col-sm-12 stat-boxs3">
                        <h3 class="text-center">OTP Exit</h3>
                        <div class="main-data">
                            <div class="stats-box3">
                                <div class="stats-icon">
                                    <i class="flaticon flaticon-hospital-buildings wow zoomIn "></i>
                                </div>
                            </div>
                            <div class="main-data-text">
                                <h3> <span class="counter">4,567</span></h3>
                                <h6>Services Provided</h6>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-md-16 wow jello">
                                <h6>Cured</h6>
                                <h5>92.4%</h5>
                                <p>234</p>
                            </div>
                            <div class="col-md-16 wow jello">
                                <h6>Non Cured</h6>
                                <h5>46%</h5>
                                <p>121,183</p>
                            </div>

                            <div class="col-md-16 xs-p-l-5 wow jello">
                                <h6>Defaulter</h6>
                                <h5>23%</h5>
                                <p>60,940</p>
                            </div>
                            <div class="col-md-16 wow jello">
                                <h6>Death</h6>
                                <h5>13%</h5>
                                <p>33,409</p>
                            </div>
                            <div class="col-md-16 wow jello">
                                <h6>Medical Transfer</h6>
                                <h5>9%</h5>
                                <p>22,831</p>
                            </div>
                            <div class="col-md-16 wow jello b-r-0">
                                <h6>Other Transfer</h6>
                                <h5>46%</h5>
                                <p>121,183</p>
                            </div>
                        </div>
                    </div>
                    <!--                box4-->
                    <div class="col-md-6 colour-box col-sm-6 stat-boxs4">
                        <h3 class="text-center">SC Exit</h3>
                        <div class="main-data">
                            <div class="stats-box4">
                                <div class="stats-icon">
                                    <i class="flaticon flaticon-elementary-school wow zoomIn "></i>
                                </div>
                            </div>
                            <div class="main-data-text">
                                <h3> <span class="counter">567</span></h3>
                                <h6>Services Provided</h6>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-md-16 wow jello">
                                <h6>Cured</h6>
                                <h5>92.4%</h5>
                                <p>234</p>
                            </div>
                            <div class="col-md-16 wow jello">
                                <h6>Non Cured</h6>
                                <h5>46%</h5>
                                <p>121,183</p>
                            </div>

                            <div class="col-md-16 xs-p-l-5 wow jello">
                                <h6>Defaulter</h6>
                                <h6>23%</h6>
                                <p>60,940</p>
                            </div>
                            <div class="col-md-16 wow jello">
                                <h6>Death</h6>
                                <h5>13%</h5>
                                <p>33,409</p>
                            </div>
                            <div class="col-md-16 wow jello">
                                <h6>Medical Transfer</h6>
                                <h5>9%</h5>
                                <p>22,831</p>
                            </div>
                            <div class="col-md-16 wow jello b-r-0">
                                <h6>Other Transfer</h6>
                                <h5>46%</h5>
                                <p>121,183</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <footer class="main-footer">

        <!--Footer Upper-->
        <div class="footer-upper">
            <div class="container">
                <div class="row clearfix">

                    <!--Two 4th column-->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-sm-6 col-xs-12 column">
                                <div class="footer-widget about-widget">
                                    <h3 class="m-b-10">About IRMNCH</h3>
                                    <div class="text margin-bott-30 ">
                                        <p>This program is to reduce maternal, newborn and child morbidity and mortality, promote family planning services and improve nutritional status of women and children.</p>
                                    </div>

                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="col-lg-6 col-sm-6 col-xs-12 column">
                                <div class="footer-widget links-widget">
                                    <h3 class="m-b-10 m-t-10">Our Programs</h3>
                                    <ul >
                                        <li><a href="#">National Program for FP & PHC</a></li>
                                        <li><a href="#">National MNCH Program</a></li>
                                        <li><a href="#">Nutrition Program</a></li>
                                    </ul>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!--Two 4th column End-->

                    <!--Two 4th column-->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">

                            <!--Footer Column-->
                            <div class="col-lg-6 col-sm-6 col-xs-12 column">
                                <div class="footer-widget popular-project">
                                    <h3 class=" m-b-10">RECENT PROJECTS</h3>
                                    <ul class="row-10 ">
                                        <li class="col-4"><a href="#"><img src="http://irmnch.gop.pk/images/mnh_week1.jpg" alt=""></a></li>
                                        <li class="col-4"><a href="#"><img src="http://irmnch.gop.pk/images/mnh_week2.jpg" alt=""></a></li>
                                        <li class="col-4"><a href="#"><img src="http://irmnch.gop.pk/images/mnh_week3.jpg" alt=""></a></li>
                                        <li class="col-4"><a href="#"><img src="http://irmnch.gop.pk/images/mnh_week4.jpg" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="col-lg-6 col-sm-6 col-xs-12 column">
                                <div class="footer-widget newsletter-widget">
                                    <h3 class="m-b-10">Social Us</h3>

                                    <div class="newsletter-form text-center">
                                        <div class="social-links ">
                                            <a href="#"><span class="fa fa-facebook-f"></span></a>
                                            <a href="#"><span class="fa fa-twitter"></span></a>
                                            <a href="#"><span class="fa fa-google-plus"></span></a>
                                            <a href="#"><span class="fa fa-skype"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Two 4th column End-->

                </div>

            </div>
        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="copyright-text">© 2017 | Privacy Policy | All rights reserved by IRMNCH & NP, Govt Of Punjab, Pakistan</div>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo URL; ?>assets/js/jquery-1.11.2.min.js"></script>
    <script src="<?php echo URL; ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo URL; ?>assets/js/modernizr.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <!-- custom -->
    <script src="<?php echo URL; ?>assets/js/app.js"></script>
    <script>
        $(function() {
            Highcharts.setOptions({
                chart: {
                    style: {
                        fontFamily: "'Roboto', sans-serif"
                    }
                }
            });

            $('#donut-chart-1').highcharts({
                colors: ['#2196f3', '#42a5f5', '#64b5f6', '#90caf9', '#bbdefb', '#e3f2fd', '#92A8CD', '#A47D7C', '#B5CA92'],
                chart: {
                    type: 'pie'
                },

                plotOptions: {
                    pie: {
                        innerSize: '70%',
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: false
                        },
                        showInLegend: true
                    }
                },

                title: {
                    text: 'Service Providers',
                    verticalAlign: 'middle',
                    floating: true,
                    y: 0
                },
                credits: {
                    enabled: false
                },

                exporting: {
                    enabled: false
                },
                legend: {
                    enabled: false
                },
                tooltip: {
                    valueSuffix: '%'
                },
                series: [{
                    name: "Service Providers",
                    data: [
                        ['LHW', 42],
                        ['LHS', 10],
                        ['LHV', 8],
                        ['CMW', 20],
                        ['WMD', 20]
                    ]
                }]
            });
        });

        //        population

    </script>
    <script type="text/javascript">
        $(document).ready(function() {


            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').fadeOut();
            });

            $('#log-control').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').fadeIn();
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });

    </script>

    <!--         waypoint-->





</body>

</html>
