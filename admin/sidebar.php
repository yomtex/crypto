<?php

  $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
  if ($curPageName == "welcome.php") {
    ?>

<div class="page-sidebar fixedscroll">

            <!-- MAIN MENU - START -->
            <div class="page-sidebar-wrapper" id="main-menu-wrapper">


                <ul class='wraplist'>
                    <li class='menusection'>Main</li>
                    <li class="open">
                        <a href="welcome.php">
                            <i class="fa fa-th-large"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="deposit.php">
                            <i class="fa fa-bullseye"></i>
                            <span class="title">Deposit</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="index-ico-admin-2.html">
                            <i class="fa fa-sitemap"></i>
                            <span class="title">Withdraw</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="affailite-program.html">
                            <i class="fa fa-crosshairs"></i>
                            <span class="title">Logout</span>
                        </a>
                    </li>
               
                    
                </ul>

            </div>
            <!-- MAIN MENU - END -->

        </div>
    <?php

  }elseif ($curPageName =="deposit.php") {
      ?>

<div class="page-sidebar fixedscroll">

            <!-- MAIN MENU - START -->
            <div class="page-sidebar-wrapper" id="main-menu-wrapper">


                <ul class='wraplist'>
                    <li class='menusection'>Main</li>
                    <li class="">
                        <a href="welcome.php">
                            <i class="fa fa-th-large"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li class="open">
                        <a href="deposit.php">
                            <i class="fa fa-bullseye"></i>
                            <span class="title">Deposit</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="index-ico-admin-2.html">
                            <i class="fa fa-sitemap"></i>
                            <span class="title">Withdraw</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="affailite-program.html">
                            <i class="fa fa-crosshairs"></i>
                            <span class="title">Logout</span>
                        </a>
                    </li>
               
                    
                </ul>

            </div>
            <!-- MAIN MENU - END -->

        </div>
      <?php
  }elseif($curPageName == "withdraw.php"){
    //withdraw
    ?>

    <?php
  }
?>
