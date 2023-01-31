<?php
    include_once("index.php");
    $user = new Btc();

    $results = $user->getHistory();
    //print_r($results);
    foreach ($results as $result) {
        $tr_type = $result->tr_type;
        if ($tr_type =="deposit") {
            echo "<div class='well' style='padding:5px; margin:4px;'>
            <img src='../assets/images/deposit.png' style='width:30px;'><span style='font-size:12px; float:right;'>
                <span style='color:orange;'>$result->amount.00 USDT</span><br>
                $result->datePosted
            </span>&nbsp;&nbsp; "." ". ($result->sender[0].$result->sender[1]."****".$result->sender[-1]) ."<br><span style='padding-left:45px; font-size:12px;'>Deposit</span><br>
            </div>";
        }elseif ($tr_type =="transfer") {
            echo "<div class='well' style='padding:5px; margin:4px;'>
            <img src='../assets/images/transfer.png' style='width:30px;'><span style='font-size:12px; float:right;'>
                <span style='color:orange;'>$result->amount.00 USDT</span><br>
                $result->datePosted
            </span>&nbsp;&nbsp; "." ". ($result->sender[0].$result->sender[1]."****".$result->sender[-1]) ."<br><span style='padding-left:45px; font-size:12px;'>Transfer</span><br>
            </div>";
        }elseif ($tr_type =="withdraw") {
            echo "<div class='well' style='padding:5px; margin:4px;'>
            <img src='../assets/images/withdraw.png' style='width:30px;'><span style='font-size:12px; float:right;'>
                <span style='color:orange;'>$result->amount.00 USDT</span><br>
                $result->datePosted
            </span>&nbsp;&nbsp; "." ". ($result->sender[0].$result->sender[1]."****".$result->sender[-1]) ."<br><span style='padding-left:45px; font-size:12px;'>Withdraw</span><br>
            </div>";
        }elseif ($tr_type =="upgrade") {
            echo "<div class='well' style='padding:5px; margin:4px;'>
            <img src='../assets/images/upgrade.png' style='width:30px;'><span style='font-size:12px; float:right;'>
                <span style='color:orange;'>$result->amount.00 USDT</span><br>
                $result->datePosted
            </span>&nbsp;&nbsp; "." ". ($result->sender[0].$result->sender[1]."****".$result->sender[-1]) ."<br><span style='padding-left:45px; font-size:12px;'>Upgrade</span><br>
            </div>";
        }
        //echo $tr_type;
    }
                                            ?>
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
    // $(document).ready(function(){
    //     $("#row").load("history.php");
    // },2000);
</script>