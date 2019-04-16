<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>IRMNCH</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" type='text/css' />
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
    <!--    <link rel="stylesheet" href="assets/css/colour1.css" type="text/css" />-->
    <link rel="stylesheet" href="assets/css/map.css" type="text/css" />
    <link rel="stylesheet" href="assets/plugins/hover/hover-min.css">
    <!-- Animate.CSS -->
    <link rel="stylesheet" href="assets/plugins/Animation/animate.css">
    <!--    jquery ,js-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="assets/plugins/counter-up/jquery.counterup.min.js"></script>
    <script src="assets/plugins/waypoints/waypoints.min.js"></script>
    <script src="assets/plugins/WOW-master/dist/wow.min.js"></script>
    <script src="assets/js/progressbar.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        function myMap() {
            var mapProp = {
                center: new google.maps.LatLng(30.297859, 73.058235),
                zoom: 5,
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
        }

    </script>
    <script>
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 20,
                time: 100
            });
        });

    </script>

    <!--       wow.js-->
    <script>
        new WOW().init();

    </script>
</head>

<body>

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
    <div class="container-fluid">

        <!--       sidebar-->

        <!--       sidebar end-->
        <!--        main content-->
        <section class="content">
            <div class="container">
                <div class="row row-offcanvas row-offcanvas-right">
                    <div class="col-xs-12  col-sm-9 col-md-9">
                        <div id="map" style=""></div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-sm-3 sidebar-offcanvas" id="sidebarm">
                        <div class="container-fluid p-l-0 p-r-0">
                            <div class="row">
                                <div class="col-md-12 heading">
                                    <div class="text-center">
                                        <h4><span class="BHU">BHU 18</span>,<span class="dist">gulbarg</span>,<span class="city">Rawalpindi</span></h4>
                                        <h5>Registered Population with LHW</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-5">
                                <!--                       LHW fig1-->
                                <div class="col-md-20 p-r-0 p-l-0 b-r">
                                    <div class="text-center">
                                        <p><label for="">LHS</label></p>
                                        <label class="font-25 color-green counter lhs">2</label>
                                    </div>
                                </div>
                                <!--                       LHW fig2-->
                                <div class="col-md-20 p-r-0 p-l-0 b-r">
                                    <div class="text-center">
                                        <p><label for="">LHW</label></p>
                                        <label class="font-25 color-green counter lhw">34</label>
                                    </div>
                                </div>
                                <!--                       LHW fig3-->
                                <div class="col-md-20 p-r-0 p-l-0 b-r">
                                    <div class="text-center">
                                        <p><label for="CMW">CMW</label></p>
                                        <label class="font-25 color-green counter cmw">6</label>
                                    </div>
                                </div>
                                <!--                       HW fig4-->
                                <div class="col-md-20 p-r-0 p-l-0 b-r">
                                    <div class="text-center">
                                        <p><label for="LHV">LHV</label></p>
                                        <label class="font-25 color-green counter lhv">34</label>
                                    </div>
                                </div>
                                <!--                       LHW fig5-->
                                <div class="col-md-20 p-r-0 p-l-0">
                                    <div class="text-center">
                                        <p><label for="CMW">CMW</label></p>
                                        <label class="font-25 color-green counter cmw2">34</label>
                                    </div>
                                </div>
                            </div>
                            <!--end row-->
                            <div class="row m-t-10">
                                <!--                       number 1-->
                                <div class="stat-box1">
                                    <div class="col-md-6 col-xs-6">
                                        <div class="service-box wow pusle">
                                            <div class="row">
                                                <div class="col-md-4 col-xs-4">
                                                    <div class="service-icon">
                                                        <i class="flaticon flaticon-pregnant-woman hvr-bounce-in"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-xs-8">
                                                    <h4>Pregnent women</h4>
                                                    <span class="service-color counter pw">45,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--                        number 2-->
                                    <div class="col-md-6 col-xs-6">
                                        <div class="service-box wow pusle">
                                            <div class="row">
                                                <div class="col-md-4 col-xs-4 p-l-0">
                                                    <div class="service-icon">
                                                        <i class="flaticon flaticon-patient-in-hospital-bed hvr-bounce-in "></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-xs-8 p-l-5">
                                                    <h4>Deliveries conducted</h4>
                                                    <span class="service-color counter dc">45,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--                        number 3-->
                                    <div class="col-md-6 col-xs-6">
                                        <div class="service-box wow pusle">
                                            <div class="row">
                                                <div class="col-md-4 col-xs-4">
                                                    <div class="service-icon">
                                                        <i class="flaticon flaticon-pills  hvr-bounce-in"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-xs-8">
                                                    <h4>FP Clients</h4>
                                                    <span class="service-color counter fp">45,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--                        number 4-->
                                    <div class="col-md-6 col-xs-6">
                                        <div class="service-box wow pusle">
                                            <div class="row">
                                                <div class="col-md-4 col-xs-4 p-l-0">
                                                    <div class="service-icon">
                                                        <i class="flaticon flaticon-transport hvr-bounce-in"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-xs-8 p-l-5">
                                                    <h4>Patient Shifted</h4>
                                                    <span class="service-color counter ps">45,000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row progressbar text-center">
                                <div class="col-md-12 ">
                                    <div class="col-md-6 col-xs-6">
                                        <div id="container1"></div>
                                        <h5 class="">Early initiative</h5>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <div id="container2"></div>
                                        <h5 class=" ">Exclusive Breast Feeding</h5>
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="col-md-6 col-xs-6">
                                        <div id="container3"></div>
                                        <h5 class=" ">Deliveries by SBA</h5>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <div id="container4"></div>
                                        <h5 class=" ">CPR</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!--    map script-->
    <script>
        var map;

        function toggleBounce() {
            var htmls = this.html;
            console.log(htmls);
            $('.cmw').html(htmls.cmw);
            $('.dc').html(htmls.dc);
            $('.fp').html(htmls.fp);
            $('.lhs').html(htmls.lhs);
            $('.lhw').html(htmls.lhw);
            $('.ps').html(htmls.ps);
            $('.pw').html(htmls.pw);
            $('.city').html(htmls.city);
            $('.dist').html(htmls.dist);
            $('.BHU').html(htmls.BHU);
        }

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: 31.1704,
                    lng: 72.7097
                },
                zoom: 7
            });
            //Google Marker Points Start
            khushab = new google.maps.Marker({
                map: map,
                draggable: false,
                icon: 'assets/icon/hospital-building.png',
                animation: google.maps.Animation.DROP,
                html: {
                    lhw: 300,
                    lhs: 200,
                    cmw: 120,
                    cmw: 300,
                    pw: 120,
                    dc: 4500,
                    fp: 453,
                    ps: 3424,
                    city: 'Khushab',
                    dist: 'shab dist',
                    BHU: 'BHU 18'

                },
                position: {
                    lat: 32.294445,
                    lng: 72.349724
                }
            });
            khushab.addListener('click', toggleBounce);

            lahore = new google.maps.Marker({
                map: map,
                icon: 'assets/icon/hospital-building.png',
                draggable: false,
                animation: google.maps.Animation.DROP,
                html: {
                    lhw: 500,
                    lhs: 10,
                    cmw: 900,
                    cmw: 30,
                    pw: 120,
                    dc: 500,
                    fp: 53,
                    ps: 344,
                    city: 'Lahore',
                    dist: 'Model Town',
                    BHU: 'BHU 30'
                },
                position: {
                    lat: 31.5837,
                    lng: 74.3118
                }
            });
            lahore.addListener('click', toggleBounce);

            Islamabad = new google.maps.Marker({
                map: map,
                icon: 'assets/icon/hospital-building.png',
                draggable: false,
                animation: google.maps.Animation.DROP,
                html: {
                    lhw: 200,
                    lhs: 100,
                    cmw: 100,
                    cmw: 300,
                    pw: 120,
                    dc: 500,
                    fp: 53,
                    ps: 344,
                    city: 'Islamabad',
                    dist: 'Sectors',
                    BHU: 'BHU 30'

                },
                position: {
                    lat: 33.6518,
                    lng: 73.1566
                }
            });
            Islamabad.addListener('click', toggleBounce);

            Sialkot = new google.maps.Marker({
                map: map,
                icon: 'assets/icon/hospital-building.png',
                draggable: false,
                animation: google.maps.Animation.DROP,
                html: {
                    lhw: 5,
                    lhs: 10,
                    cmw: 40,
                    cmw: 50,
                    pw: 70,
                    dc: 48,
                    fp: 53,
                    ps: 40,
                    city: 'Sialkot',
                    dist: 'Peerochaq',
                    BHU: 'BHU 40'

                },
                position: {
                    lat: 32.49268,
                    lng: 74.53134
                }
            });
            Sialkot.addListener('click', toggleBounce);

            Gujrat = new google.maps.Marker({
                map: map,
                icon: 'assets/icon/hospital-building.png',
                draggable: false,
                animation: google.maps.Animation.DROP,
                html: {
                    lhw: 5,
                    lhs: 10,
                    cmw: 40,
                    cmw: 50,
                    pw: 70,
                    dc: 48,
                    fp: 53,
                    ps: 40,
                    city: 'Gujrat',
                    dist: 'Lala Musa',
                    BHU: 'BHU 20'

                },
                position: {
                    lat: 32.5711,
                    lng: 74.0750
                }
            });
            Gujrat.addListener('click', toggleBounce);

            Faislabad = new google.maps.Marker({
                map: map,
                icon: 'assets/icon/hospital-building.png',
                draggable: false,
                animation: google.maps.Animation.DROP,
                html: {
                    lhw: 547,
                    lhs: 130,
                    cmw: 40,
                    cmw: 50,
                    pw: 700,
                    dc: 481,
                    fp: 583,
                    ps: 430,
                    city: 'Faislabad',
                    dist: 'Fsb Dist',
                    BHU: 'BHU 90'

                },
                position: {
                    lat: 31.4187,
                    lng: 73.0791
                }
            });
            Faislabad.addListener('click', toggleBounce);

        }

    </script>
    <script>
        // progressbar.js@1.0.0 version is used
        // Docs: http://progressbarjs.readthedocs.org/en/1.0.0/

        // progressbar.js@1.0.0 version is used
        // Docs: http://progressbarjs.readthedocs.org/en/1.0.0/

        var bar = new ProgressBar.SemiCircle(container1, {
            strokeWidth: 6,
            color: '#FFEA82',
            trailColor: '#eee',
            trailWidth: 1,
            easing: 'easeInOut',
            duration: 2000,
            svgStyle: null,
            text: {
                value: '',
                alignToBottom: true
            },
            from: {
                color: '#C92221'
            },
            to: {
                color: '#00A642'
            },
            // Set default step function for all animate calls
            step: (state, bar) => {
                bar.path.setAttribute('stroke', state.color);
                var value = "70%";
                if (value === 0) {
                    bar.setText('');
                } else {
                    bar.setText(value);
                }

                bar.text.style.color = state.color;
            }
        });
        bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
        bar.text.style.fontSize = '2rem';

        bar.animate(0.7); // Number from 0.0 to 1.0

        //            =====================================================
        var bar = new ProgressBar.SemiCircle(container2, {
            strokeWidth: 6,
            color: '#FFEA82',
            trailColor: '#eee',
            trailWidth: 1,
            easing: 'easeInOut',
            duration: 2000,
            svgStyle: null,
            text: {
                value: '',
                alignToBottom: true
            },
            from: {
                color: '#C92221'
            },
            to: {
                color: '#00A642'
            },
            // Set default step function for all animate calls
            step: (state, bar) => {
                bar.path.setAttribute('stroke', state.color);
                var value = "30%"; //change this value to change value of text
                if (value === 0) {
                    bar.setText('');
                } else {
                    bar.setText(value);
                }

                bar.text.style.color = state.color;
            }
        });
        bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
        bar.text.style.fontSize = '2rem';

        bar.animate(0.3); // Number from 0.0 to 1.0    >>>>>change this value to change the animation 
        //            =====================================================
        var bar = new ProgressBar.SemiCircle(container3, {
            strokeWidth: 6,
            color: '#FFEA82',
            trailColor: '#eee',
            trailWidth: 1,
            easing: 'easeInOut',
            duration: 2000,
            svgStyle: null,
            text: {
                value: '',
                alignToBottom: true
            },
            from: {
                color: '#C92221'
            },
            to: {
                color: '#00A642'
            },
            // Set default step function for all animate calls
            step: (state, bar) => {
                bar.path.setAttribute('stroke', state.color);
                var value = "56%";
                if (value === 0) {
                    bar.setText('');
                } else {
                    bar.setText(value);
                }

                bar.text.style.color = state.color;
            }
        });
        bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
        bar.text.style.fontSize = '2rem';

        bar.animate(0.45); // Number from 0.0 to 1.0
        //            =====================================================
        var bar = new ProgressBar.SemiCircle(container4, {
            strokeWidth: 6,
            color: '#FFEA82',
            trailColor: '#eee',
            trailWidth: 1,
            easing: 'easeInOut',
            duration: 2000,
            svgStyle: null,
            text: {
                value: '',
                alignToBottom: true
            },
            from: {
                color: '#C92221'
            },
            to: {
                color: '#00A642'
            },
            // Set default step function for all animate calls
            step: (state, bar) => {
                bar.path.setAttribute('stroke', state.color);
                var value = "88%";
                if (value === 0) {
                    bar.setText('');
                } else {
                    bar.setText(value);
                }

                bar.text.style.color = state.color;
            }
        });
        bar.text.style.fontSize = '2rem';

        bar.animate(0.88); // Number from 0.0 to 1.0

    </script>
    <script>
        function copyToClipboard(element) {
            var $temp = $("<input>");
            $("p").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            $temp.remove();
        }

    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzWV78FvsClO8kQFaUqOhp_PoOOynN8Xo&callback=initMap" async defer></script>
</body>

</html>
