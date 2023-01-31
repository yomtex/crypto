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
    <title>Dashboard</title>
    <meta content="" name="description" />
    <meta content="" name="author" />

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

<body class=" ">
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

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h3 class="title">Dashboard</h3>

                            <!-- PAGE HEADING TAG - END -->
                        </div>

                    </div>
                </div>
                <div class="col-lg-12">
                    <section class="box nobox marginBottom0">
                        <div class="content-body">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-xs-12">
                                    <div class="r4_counter db_box has-gradient-to-right-bottom">
                                        <div class="icon-after cc BTC-alt"></div>
                                        <!-- <i class='pull-left cc BTC-alt icon-md icon-white mt-10'></i> -->
                                        <span class="color-white mb-5 "><b>Hi, </b><?php print_r($user->user()->username);?></span>
                                        <span class="color-white mb-5 pull-right">Vip <?php print_r($user->user()->isVip);?></span>
                                        <div class="stats text-center">
                                            <h4 class="color-white mb-5 "><?php print_r(number_format($user->user()->wallet_bal,2));?> <span style="font-size: 12px;">USDT</span></h4>
                                            <span>Wallet balance</span>
                                        </div>
                                    </div>
                                </div>
<!--                                 <div class="col-lg-12 col-sm-6 col-xs-12">
                                    <div class="r4_counter db_box">
                                        <div class="icon-after cc DASH-alt"></div>
                                        <i class='pull-left cc DASH-alt icon-md icon-primary mt-10'></i>
                                        <div class="stats">
                                            <h3 class="mb-5">5.19034 DASH</h3>
                                            <span>Wallet DASH balance</span>
                                        </div>
                                    </div>
                                </div> -->
                            <!--     <div class="col-lg-4 col-sm-6 col-xs-12">
                                    <div class="r4_counter db_box">
                                        <div class="icon-after cc LTC-alt"></div>
                                        <i class='pull-left cc LTC-alt icon-md icon-primary mt-10'></i>
                                        <div class="stats">
                                            <h3 class="mb-5">12.60349 LTC</h3>
                                            <span>Unconfiremed balance</span>
                                        </div>
                                    </div>
                                </div> -->

                            </div>
                            <!-- End .row -->
                        </div>
                    </section>
                </div>

                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <!-- Quick Links -->
                <div class="col-xs-12">
                    <div class="col-xs-3">
                        <center>
                            <a href="recharge.php">
                                <img src="../assets/images/option1.png" style="width:60px">
                                <p>Deposit</p>
                            </a>
                        </center>
                    </div>
                    <div class="col-xs-3">
                        <center>
                            <a href="withdraw.php">
                                <img src="../assets/images/option2.png" style="width:60px">
                                <p>Withdraw</p>
                            </a>
                        </center>
                    </div>
                    <div class="col-xs-3">
                        <center>
                            <a href="transfer.php">
                                <img src="../assets/images/option3.png" style="width:60px">
                                <p>Member transfer</p>
                            </a>
                        </center>
                    </div>
                    <div class="col-xs-3">
                        <center>
                            <a href="upgrade.php">
                                <img src="../assets/images/option4.png" style="width:60px">
                                <p>Membership upgrade</p>
                            </a>
                        </center>
                    </div>
                </div>

                <div class="col-xs-12 col-lg-12">
                    <section class="box" style="border-left: 3px solid #e77512;">
                        <header class="panel_header">
                            <h2 class="title pull-left">Platform Records</h2>
                            <div class="actions panel_actions pull-right">
                                <a class="box_toggle fa fa-chevron-down"></a>
                                <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                <a class="box_close fa fa-times"></a>
                            </div>
                        </header>
                        <div class="content-body col-xs-12">
                            
                                    <div class="well" style="color:#000; border-left:3px solid orange;"> If you have any questions, please use your secure email address to contact the support .<br></uni-view><uni-view data-v-24a88262="">Email: support@coincrapstore.com</div>
                            <div class="row" id="row">
                                <div class="col-xs-12">
                                    <div class="table-responsive" data-pattern="priority-columns">
                                        <div class="col-xs-12">
                                            <?php ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>


                <div class="clearfix"></div>


             

                <div class="clearfix"></div>

                <!-- MAIN CONTENT AREA ENDS -->
            </div>
        </section>
        <!-- END CONTENT -->

        <div class="chatapi-windows ">

        </div>
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
    $(document).ready(function(){
        $("#row").load("../config/history.php");
        setInterval('location.reload()', 20000); 
    });
</script>