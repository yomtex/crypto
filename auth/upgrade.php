<?php
session_start();
if (isset($_SESSION['uid'])) {
    include_once("../config/index.php");
    $user = new Btc();
}else{
    echo "<script>window.location.href='index.php';</script>";
}

?>
<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- 
        * @Package:  Bitcoin & Cryptocurrency trading Dashboard
        * @Version: 1.0.0
    -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Membership Upgrade</title>
    <meta content="" name="description" />
    <meta content="" name="author" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon" />
    <!-- For iPhone -->
    <link rel="apple-touch-icon-precomposed" href="../assets/images/apple-touch-icon-57-precomposed.png">
    <!-- For iPhone 4 Retina display -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/images/apple-touch-icon-114-precomposed.png">
    <!-- For iPad -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/images/apple-touch-icon-72-precomposed.png">
    <!-- For iPad Retina display -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/images/apple-touch-icon-144-precomposed.png">

    <!-- CORE CSS FRAMEWORK - START -->
    <link href="../assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="../assets/fonts/webfont/cryptocoins.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <!-- CORE CSS FRAMEWORK - END -->

    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - START -->

    <link href="../assets/plugins/jvectormap/jquery-jvectormap-2.0.1.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="../assets/plugins/morris-chart/css/morris.css" rel="stylesheet" type="text/css" media="screen" />

    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE CSS TEMPLATE - START -->
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- CORE CSS TEMPLATE - END -->

</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="">
    <!-- START TOPBAR -->
    <div class='page-topbar '>
        <div class='logo-area'>

        </div>
        <div class='quick-area'>
            <div class='pull-left'>
                <ul class="info-menu left-links list-inline list-unstyled">
                    <li class="sidebar-toggle-wrap">
                        <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <!-- END TOPBAR -->
    <!-- START CONTAINER -->
    <div class="page-container row-fluid container-fluid">

        <!-- SIDEBAR - START -->

        <?php 
            require("sidebar.php");
        ?>
        <!--  SIDEBAR - END -->

        <!-- START CONTENT -->
        <section id="main-content" class=" ">
            <div class="wrapper main-wrapper row" style=''>
                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="col-xs-12 col-lg-12">
                    <section class="box" style="border-left: 3px solid #e77512;">
                        <header class="panel_header">
                            <h2 class="title pull-left">Membership Upgrade</h2>
                            <div class="actions panel_actions pull-right">
                                <a class="box_toggle fa fa-chevron-down"></a>
                                <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                <a class="box_close fa fa-times"></a>
                            </div>
                        </header>
                        <div class="content-body">
                                <?php  echo $user->upgrade();?>
                            <div class="row">
                                <div class="col col-xs-12 col-md-6 col-sm-6">
                                    <div class="card text-center">
                                        <div class="card-header text-center border-bottom-0 bg-transparent text-success pt-4">
                                          <h5 style="margin: 0;"><strong>VIP 1 </strong></h5>
                                        </div>
                                        <div class="card-body">
                                          <img src="../assets/images/level1.png" style="width:50px;">
                                          <h5 class="text-muted">Level Rules</h5>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                          <li class="list-group-item">Deposit: 100.00 USDT</li>
                                          <li class="list-group-item">Daily Limit: 20.00 USDT</li>
                                          <li class="list-group-item">Monthly Limit: 60.00 USDT</li>
                                        </ul>
                                        <div class="card-footer border-top-0">
                                          <a href="?upgrade=1" class="btn btn-primary form-control text-uppercase">Upgrade <i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="card text-center">
                                        <div class="card-header text-center border-bottom-0 bg-transparent text-success pt-4">
                                          <h5 style="margin: 0;"><strong>VIP 2 </strong></h5>
                                        </div>
                                        <div class="card-body">
                                          <img src="../assets/images/level2.png" style="width:50px;">
                                          <h5 class="text-muted">Level Rules</h5>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                          <li class="list-group-item">Deposit: 1000.00 USDT</li>
                                          <li class="list-group-item">Daily Limit: 100.00 USDT</li>
                                          <li class="list-group-item">Monthly Limit: 3000.00 USDT</li>
                                        </ul>
                                        <div class="card-footer border-top-0">
                                          <a href="?upgrade=2" class="btn btn-primary form-control text-uppercase">Upgrade <i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="card text-center">
                                        <div class="card-header text-center border-bottom-0 bg-transparent text-success pt-4">
                                          <h5 style="margin: 0;"><strong>VIP 3 </strong></h5>
                                        </div>
                                        <div class="card-body">
                                          <img src="../assets/images/level3.png" style="width:50px;">
                                          <h5 class="text-muted">Level Rules</h5>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                          <li class="list-group-item">Deposit: 3000.00 USDT</li>
                                          <li class="list-group-item">Daily Limit: 5000.00 USDT</li>
                                          <li class="list-group-item">Monthly Limit: 150000.00 USDT</li>
                                        </ul>
                                        <div class="card-footer border-top-0">
                                          <a href="?upgrade=3" class="btn btn-primary form-control text-uppercase">Upgrade <i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="card text-center">
                                        <div class="card-header text-center border-bottom-0 bg-transparent text-success pt-4">
                                          <h5 style="margin: 0;"><strong>VIP 4 </strong></h5>
                                        </div>
                                        <div class="card-body">
                                          <img src="../assets/images/level4.png" style="width:50px;">
                                          <h5 class="text-muted">Level Rules</h5>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                          <li class="list-group-item">Deposit: 20000.00 USDT</li>
                                          <li class="list-group-item">Daily Limit: 100000.00 USDT</li>
                                          <li class="list-group-item">Monthly Limit: 30000000.00 USDT</li>
                                        </ul>
                                        <div class="card-footer border-top-0">
                                          <a href="?upgrade=4" class="btn btn-primary form-control text-uppercase">Upgrade <i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="card text-center">
                                        <div class="card-header text-center border-bottom-0 bg-transparent text-success pt-4">
                                          <h5 style="margin: 0;"><strong>VIP 5 </strong></h5>
                                        </div>
                                        <div class="card-body">
                                          <img src="../assets/images/level5.png" style="width:50px;">
                                          <h5 class="text-muted">Level Rules</h5>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                          <li class="list-group-item">Deposit: 150000.00 USDT</li>
                                          <li class="list-group-item">Daily Limit: 5000000.00 USDT</li>
                                          <li class="list-group-item">Monthly Limit: 150000000.00 USDT</li>
                                        </ul>
                                        <div class="card-footer border-top-0">
                                          <a href="?upgrade=5" class="btn btn-primary form-control text-uppercase">Upgrade <i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <!--  <div class="row">
                                <div class="col-lg-3 col-xs-4" style="margin-bottom: 10px;" id="one">  
                                    <center>
                                        <div style="width:50%; border-radius: 10px;   background-color:; border: 1px solid orange; "><img src="../assets/images/vip1.png" style="width:100%; border-radius: 10px;">
                                        </div>
                                    </center>
                                </div>
                                <div class="col-lg-3 col-xs-4" style="margin-bottom: 10px;" id="two">  
                                    <center>
                                        <div style="width:50%; border-radius: 10px;   background-color:; border: 1px solid orange; "><img src="../assets/images/vip2.png" style="width:100%; border-radius: 10px;">
                                        </div>
                                    </center>
                                </div>
                                <div class="col-lg-3 col-xs-4" style="margin-bottom: 10px;" id="third">  
                                    <center>
                                        <div style="width:50%; border-radius: 10px;   background-color:; border: 1px solid orange; "><img src="../assets/images/vip3.png" style="width:100%; border-radius: 10px;">
                                        </div>
                                    </center>
                                </div>
                                <div class="col-lg-3 col-xs-4" style="margin-bottom: 10px;" id="four">  
                                    <center>
                                        <div style="width:50%; border-radius: 10px;   background-color:; border: 1px solid orange; "><img src="../assets/images/vip4.png" style="width:100%; border-radius: 10px;">
                                        </div>
                                    </center>
                                </div>
                                <div class="col-lg-3 col-xs-4" style="margin-bottom: 10px;" id="five">  
                                    <center>
                                        <div style="width:50%; border-radius: 10px;   background-color:; border: 1px solid orange; "><img src="../assets/images/vip5.png" style="width:100%; border-radius: 10px;">
                                        </div>
                                    </center>
                                </div>
                            </div>
                            <h3 style="text-align: center;">Level Rules</h3>
                            <div class="col-lg-12"  style="background-color:#e77512 ; padding-bottom:10px; overflow: auto;">
                                <div class="col-xs-4" style="padding:0;">
                                    <div class="col-xs-12"><p style="color: #fff; ">Deposit</p></div>
                                    <div class="col-xs-12" style="padding: 0;">
                                        <img src="../assets/images/level1.png" style="width:20px;">&nbsp;&nbsp; 
                                        <span style="color: #fff;">100.00 USDT</span><br><br>
                                        <img src="../assets/images/level2.png" style="width:20px;">&nbsp;&nbsp; 
                                        <span style="color: #fff;">1000.00 USDT</span><br><br>
                                        <img src="../assets/images/level3.png" style="width:20px;">&nbsp;&nbsp; 
                                        <span style="color: #fff;">3000.00 USDT</span><br><br>
                                        <img src="../assets/images/level4.png" style="width:20px;">&nbsp;&nbsp; 
                                        <span style="color: #fff;">20000.00 USDT</span><br><br>
                                        <img src="../assets/images/level5.png" style="width:20px;">&nbsp;&nbsp; 
                                        <span style="color: #fff;">150000.00 USDT</span><br><br>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="col-xs-12"><p style="color: #fff;">Daily Limit</p></div>
                                    <div class="col-xs-12">
                                        <span style="color: #fff;">100.00 USDT</span><br><br>
                                        <span style="color: #fff;">100.00 USDT</span><br><br>
                                        <span style="color: #fff;">100.00 USDT</span><br><br>
                                        <span style="color: #fff;">100.00 USDT</span><br><br>
                                        <span style="color: #fff;">100.00 USDT</span><br><br>
                                    </div>
                                </div>
                                <div class="col-xs-4"><p style="color: #fff;">Monthly Limit</p></div>
                            </div> -->
                        </div>
                    </section><br><br>
                </div>

               <!--  <div class="fixed-bottom row" style="background-color:#e77512 ; padding: 10px;">
                    <div class="col col-xs-6">
                        <h4 style="color:#fff;"><b>USDT</b></h4>
                    </div>
                    <div class="col col-xs-6">
                        <a href="" class="pull-right" style="background-color:#e45131; color: #fff; padding: 15px; border-radius: 20px; text-decoration: none;"><b>Upgrade</b> </a>
                    </div>
                </div> -->
                <div class="clearfix"></div>

                <!-- MAIN CONTENT AREA ENDS -->
            </div>
        </section>
    </div>
    <!-- END CONTAINER -->
    <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->

    <!-- CORE JS FRAMEWORK - START -->
    <script src="../assets/js/jquery-1.11.2.min.js"></script>
    <script src="../assets/js/jquery.easing.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/pace/pace.min.js"></script>
    <script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../assets/plugins/viewport/viewportchecker.js"></script>
    <script>
        window.jQuery || document.write('<script src="../assets/js/jquery-1.11.2.min.js"><\/script>');
    </script>
    <!-- CORE JS FRAMEWORK - END -->

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

    <script src="../assets/plugins/echarts/echarts-custom-for-dashboard.js"></script>

    <script src="../assets/plugins/flot-chart/jquery.flot.js"></script>
    <script src="../assets/plugins/flot-chart/jquery.flot.time.js"></script>
    <script src="../assets/js/chart-flot.js"></script>

    <script src="../assets/plugins/morris-chart/js/raphael-min.js"></script>
    <script src="../assets/plugins/morris-chart/js/morris.min.js"></script>
    <script src="../assets/js/chart-morris.js"></script>
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE TEMPLATE JS - START -->
    <script src="../assets/js/scripts.js"></script>
    <!-- END CORE TEMPLATE JS - END -->

</body>

</html>
<script>
function myFunction() {
  // Get the text field
  var copyText = document.getElementById("myInput");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

  // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);
  
  // Alert the copied text
  alert("Copied the text: " + copyText.value);
}
</script>