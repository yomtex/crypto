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
    <title> Bitcoin & Cryptocurrency trading Dashboard</title>
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
                            <h2 class="title pull-left">Direction Of Use</h2>
                            <div class="actions panel_actions pull-right">
                                <a class="box_toggle fa fa-chevron-down"></a>
                                <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                <a class="box_close fa fa-times"></a>
                            </div>
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <div class="well col-xs-12" style="background-color: ;">
                                    <b>
                                        How often is each account used? How long does it take to upgrade the account limit authorization?
                                    </b><br>
                                    <p style="font-size: 12px;">A: Except for vip1 which lasts for one month, the usage time of
                                    other accounts is permanent, and the quota permissions are also
                                     permanent.</p>
                                     <hr>
                                    <b>
                                        What information can be modified?
                                    </b><br>
                                    <p style="font-size: 12px;">A: (login password) and (withdrawal address) can be modified by key. (key) and (Secret email address) cannot be modified and are the final proof of ownership of your account.</p>
                                     <hr>
                                    <b>
                                        The newly registered account level is 0, what rights do I have?
                                    </b><br>
                                    <p style="font-size: 12px;">A: The platform opens tourist registration. Anyone can register their own account. The level of the newly 
                                    registered account is 0 (you can recharge, transfer money to others, 
                                    withdraw cash, and generate checks). These are free and you don't need to 
                                    upgrade your account to operate.</p>
                                     <hr>
                                    <b>
                                        What does the account upgrade level do and what are the benefits? ?
                                    </b><br>
                                    <p style="font-size: 12px;">A: If your account needs to receive transfers from others and exchange e-checks from others, you need to use the payment limit (at this time, the 0-level account will not be able to receive money.) You need to upgrade your account to at least one-star membership to use the payment function ; The higher the level, the different daily and monthly allowances, please upgrade as needed.</p>
                                     <hr>
                                    <b>
                                        I want to upgrade my account The money I topped up is still in the balance, can I withdraw it?
                                    </b><br>
                                    <p style="font-size: 12px;">A: Upgrade to VIP level. The deposit needs to be deducted from the corresponding balance, and the account has been upgraded for 60 days. If you don't want to continue to use it, you can apply for cancellation, refund 70% of the registered capital, and the account will be reset to zero</p>
                                     <hr>
                                    <b>
                                        Are assets transferable?
                                    </b><br>
                                    <p style="font-size: 12px;">Answer: Yes, if you are the owner of two accounts and have a lot of funds, you can apply for account asset transfer, so you are not limited by the quota; only applicable to accounts above vip3</p>
                                     <hr>
                                    <b>
                                        Is there a limit for withdrawing coins, can I use the payment limit, and can I withdraw other wallet addresses?
                                    </b><br>
                                    <p style="font-size: 12px;">A: Withdrawal requires VIP1 level or above. Except for VIP1, other levels have no upper limit. When you reach 10 Tether, you can refer to your withdrawal address; level limits will not be used; withdrawals can only be withdrawn to the time of registration. Withdrawal address.</p>
                                     <hr>
                                    <b>
                                        Why hasn't the withdrawal arrived yet?
                                    </b><br>
                                    <p style="font-size: 12px;">A: Due to the large number of withdrawals made by members every day, the system will take a certain amount of time to settle. Stick to the queuing model and pay by the time. Therefore, during the peak period, when the number of users is relatively large, it will naturally feel slower than usual, usually 24 hours. The process is completed within the time limit; another reason is that the withdrawal address you filled in is incorrect, which will cause the withdrawal to fail.</p>
                                     <hr>
                                    <b>
                                        I made a wrong transfer, can I get it back?
                                    </b><br>
                                    <p style="font-size: 12px;">A: This is the same as transferring the wrong money to your bank card. It is an irreversible operation; if the transfer is wrong, you can contact the customer service, and the customer service will send an email to the other party. If the other party agrees, you can take it back. If the other party does not reply, we have no right to interfere; including the loss of funds caused by the disclosure of your own account password. Please keep your private information safe!</p>
                                     <hr>
                                    <b>
                                        How often is each account used? How long does it take to upgrade the account limit authorization?
                                    </b><br>
                                    <p style="font-size: 12px;">A: Except for vip1 which lasts for one month, the usage time of other accounts is permanent, and the quota permissions are also permanent.</p>
                                     <hr>
                                    <b>
                                        The newly registered account level is 0, what rights do I have?
                                    </b><br>
                                    <p style="font-size: 12px;">A: The platform opens tourist registration. Anyone can register their own account. The level of the newly registered account is 0 (you can recharge, transfer money to others, withdraw cash, and generate checks). These are free and you don't need to upgrade your account to operate.</p>
                                </div>
                            </div>
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