<?php
  $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
  if ($curPageName == "dashboard.php") {

    ?>

<div class="page-sidebar fixedscroll">

            <!-- MAIN MENU - START -->
            <div class="page-sidebar-wrapper" id="main-menu-wrapper">


                <ul class='wraplist'>
                    <li class='menusection'>Main</li>
                    <li class="open">
                        <a href="dashboard.php">
                            <i class="fa fa-th-large"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="walletaddress.php">
                            <i class="fa fa-bullseye"></i>
                            <span class="title">Wallet Address</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="history.php">
                            <i class="fa fa-history"></i>
                            <span class="title">History</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="directionOfUse.php">
                            <i class="fa fa-sitemap"></i>
                            <span class="title">Direction for use</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="commonProble.php">
                            <i class="fa fa-user"></i>
                            <span class="title">Common Problem</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="question.php">
                            <i class="img">
                                <img src="../data/icons/coins.png" style="width:16px" alt="">
                            </i>
                            <span class="title">Question Feedbank</span>
                        </a>
                    </li>
                    <!--<li class="">-->
                    <!--    <a href="mailto:support@coincrapstore.com">-->
                    <!--        <i class="img">-->
                    <!--            <img src="../data/icons/coins.png" style="width:16px" alt="">-->
                    <!--        </i>-->
                    <!--        <span class="title">Support</span>-->
                    <!--    </a>-->
                    <!--</li>-->
                    <li class="">
                        <a href="logout.php">
                            <i class="fa fa-crosshairs"></i>
                            <span class="title">Logout</span>
                        </a>
                    </li>
               
                    
                </ul>

            </div>
            <!-- MAIN MENU - END -->

        </div>
    <?php
  }elseif ($curPageName == "walletaddress.php") {
      ?>
<div class="page-sidebar fixedscroll">

            <!-- MAIN MENU - START -->
            <div class="page-sidebar-wrapper" id="main-menu-wrapper">


                <ul class='wraplist'>
                    <li class='menusection'>Main</li>
                    <li class="">
                        <a href="dashboard.php">
                            <i class="fa fa-th-large"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li class="open">
                        <a href="walletaddress.php">
                            <i class="fa fa-bullseye"></i>
                            <span class="title">Wallet Address</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="history.php">
                            <i class="fa fa-history"></i>
                            <span class="title">History</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="directionOfUse.php">
                            <i class="fa fa-sitemap"></i>
                            <span class="title">Direction for use</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="commonProble.php">
                            <i class="fa fa-user"></i>
                            <span class="title">Common Problem</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="question.php">
                            <i class="img">
                                <img src="../data/icons/coins.png" style="width:16px" alt="">
                            </i>
                            <span class="title">Question Feedbank</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="logout.php">
                            <i class="fa fa-crosshairs"></i>
                            <span class="title">Logout</span>
                        </a>
                    </li>
               
                    
                </ul>

            </div>
            <!-- MAIN MENU - END -->

        </div>
      <?php
  }elseif($curPageName == "directionOfUse.php"){
    ?>
    <div class="page-sidebar fixedscroll">

            <!-- MAIN MENU - START -->
            <div class="page-sidebar-wrapper" id="main-menu-wrapper">


                <ul class='wraplist'>
                    <li class='menusection'>Main</li>
                    <li class="">
                        <a href="dashboard.php">
                            <i class="fa fa-th-large"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="walletaddress.php">
                            <i class="fa fa-bullseye"></i>
                            <span class="title">Wallet Address</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="history.php">
                            <i class="fa fa-history"></i>
                            <span class="title">History</span>
                        </a>
                    </li>
                    <li class="open">
                        <a href="directionOfUse.php">
                            <i class="fa fa-sitemap"></i>
                            <span class="title">Direction for use</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="commonProble.php">
                            <i class="fa fa-user"></i>
                            <span class="title">Common Problem</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="question.php">
                            <i class="img">
                                <img src="../data/icons/coins.png" style="width:16px" alt="">
                            </i>
                            <span class="title">Question Feedbank</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="logout.php">
                            <i class="fa fa-crosshairs"></i>
                            <span class="title">Logout</span>
                        </a>
                    </li>
               
                    
                </ul>

            </div>
            <!-- MAIN MENU - END -->

        </div>
    <?php
  }elseif ($curPageName == "commonProble.php") {
      ?>
<div class="page-sidebar fixedscroll">

            <!-- MAIN MENU - START -->
            <div class="page-sidebar-wrapper" id="main-menu-wrapper">


                <ul class='wraplist'>
                    <li class='menusection'>Main</li>
                    <li class="">
                        <a href="dashboard.php">
                            <i class="fa fa-th-large"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="walletaddress.php">
                            <i class="fa fa-bullseye"></i>
                            <span class="title">Wallet Address</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="history.php">
                            <i class="fa fa-history"></i>
                            <span class="title">History</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="directionOfUse.php">
                            <i class="fa fa-sitemap"></i>
                            <span class="title">Direction for use</span>
                        </a>
                    </li>
                    <li class="open">
                        <a href="commonProble.php">
                            <i class="fa fa-user"></i>
                            <span class="title">Common Problem</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="question.php">
                            <i class="img">
                                <img src="../data/icons/coins.png" style="width:16px" alt="">
                            </i>
                            <span class="title">Question Feedbank</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="logout.php">
                            <i class="fa fa-crosshairs"></i>
                            <span class="title">Logout</span>
                        </a>
                    </li>
               
                    
                </ul>

            </div>
            <!-- MAIN MENU - END -->

        </div>
      <?php
  }elseif ($curPageName == "upgrade.php") {
      ?>
      <div class="page-sidebar fixedscroll">

            <!-- MAIN MENU - START -->
            <div class="page-sidebar-wrapper" id="main-menu-wrapper">


                <ul class='wraplist'>
                    <li class='menusection'>Main</li>
                    <li class="">
                        <a href="dashboard.php">
                            <i class="fa fa-th-large"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="walletaddress.php">
                            <i class="fa fa-bullseye"></i>
                            <span class="title">Wallet Address</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="history.php">
                            <i class="fa fa-history"></i>
                            <span class="title">History</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="directionOfUse.php">
                            <i class="fa fa-sitemap"></i>
                            <span class="title">Direction for use</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="commonProble.php">
                            <i class="fa fa-user"></i>
                            <span class="title">Common Problem</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="question.php">
                            <i class="img">
                                <img src="../data/icons/coins.png" style="width:16px" alt="">
                            </i>
                            <span class="title">Question Feedbank</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="logout.php">
                            <i class="fa fa-crosshairs"></i>
                            <span class="title">Logout</span>
                        </a>
                    </li>
               
                    
                </ul>

            </div>
            <!-- MAIN MENU - END -->

        </div>
      <?php
  }elseif ($curPageName == "transfer.php") {
    ?>
<div class="page-sidebar fixedscroll">

            <!-- MAIN MENU - START -->
            <div class="page-sidebar-wrapper" id="main-menu-wrapper">


                <ul class='wraplist'>
                    <li class='menusection'>Main</li>
                    <li class="">
                        <a href="dashboard.php">
                            <i class="fa fa-th-large"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="walletaddress.php">
                            <i class="fa fa-bullseye"></i>
                            <span class="title">Wallet Address</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="history.php">
                            <i class="fa fa-history"></i>
                            <span class="title">History</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="directionOfUse.php">
                            <i class="fa fa-sitemap"></i>
                            <span class="title">Direction for use</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="commonProble.php">
                            <i class="fa fa-user"></i>
                            <span class="title">Common Problem</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="question.php">
                            <i class="img">
                                <img src="../data/icons/coins.png" style="width:16px" alt="">
                            </i>
                            <span class="title">Question Feedbank</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="logout.php">
                            <i class="fa fa-crosshairs"></i>
                            <span class="title">Logout</span>
                        </a>
                    </li>
               
                    
                </ul>

            </div>
            <!-- MAIN MENU - END -->

        </div>
    <?php
  }elseif($curPageName == "question.php") {
      
      ?>
      
<div class="page-sidebar fixedscroll">

            <!-- MAIN MENU - START -->
            <div class="page-sidebar-wrapper" id="main-menu-wrapper">


                <ul class='wraplist'>
                    <li class='menusection'>Main</li>
                    <li class="">
                        <a href="dashboard.php">
                            <i class="fa fa-th-large"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="walletaddress.php">
                            <i class="fa fa-bullseye"></i>
                            <span class="title">Wallet Address</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="history.php">
                            <i class="fa fa-history"></i>
                            <span class="title">History</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="directionOfUse.php">
                            <i class="fa fa-sitemap"></i>
                            <span class="title">Direction for use</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="commonProble.php">
                            <i class="fa fa-user"></i>
                            <span class="title">Common Problem</span>
                        </a>
                    </li>
                    <li class="open">
                        <a href="question.php">
                            <i class="img">
                                <img src="../data/icons/coins.png" style="width:16px" alt="">
                            </i>
                            <span class="title">Question Feedbank</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="logout.php">
                            <i class="fa fa-crosshairs"></i>
                            <span class="title">Logout</span>
                        </a>
                    </li>
               
                    
                </ul>

            </div>
            <!-- MAIN MENU - END -->

        </div>
      <?php
  }elseif($curPageName == "history.php"){
      ?>
      <div class="page-sidebar fixedscroll">

            <!-- MAIN MENU - START -->
            <div class="page-sidebar-wrapper" id="main-menu-wrapper">


                <ul class='wraplist'>
                    <li class='menusection'>Main</li>
                    <li class="">
                        <a href="dashboard.php">
                            <i class="fa fa-th-large"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="walletaddress.php">
                            <i class="fa fa-bullseye"></i>
                            <span class="title">Wallet Address</span>
                        </a>
                    </li>
                    <li class="open">
                        <a href="history.php">
                            <i class="fa fa-history"></i>
                            <span class="title">History</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="directionOfUse.php">
                            <i class="fa fa-sitemap"></i>
                            <span class="title">Direction for use</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="commonProble.php">
                            <i class="fa fa-user"></i>
                            <span class="title">Common Problem</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="question.php">
                            <i class="img">
                                <img src="../data/icons/coins.png" style="width:16px" alt="">
                            </i>
                            <span class="title">Question Feedbank</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="logout.php">
                            <i class="fa fa-crosshairs"></i>
                            <span class="title">Logout</span>
                        </a>
                    </li>
               
                    
                </ul>

            </div>
            <!-- MAIN MENU - END -->

        </div>
      <?php
  }
  
  else{
           ?>
      
<div class="page-sidebar fixedscroll">

            <!-- MAIN MENU - START -->
            <div class="page-sidebar-wrapper" id="main-menu-wrapper">


                <ul class='wraplist'>
                    <li class='menusection'>Main</li>
                    <li class="">
                        <a href="dashboard.php">
                            <i class="fa fa-th-large"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="">
                            <i class="fa fa-bullseye"></i>
                            <span class="title">Wallet Address</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="history.php">
                            <i class="fa fa-history"></i>
                            <span class="title">History</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="directionOfUse.php">
                            <i class="fa fa-sitemap"></i>
                            <span class="title">Direction for use</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="commonProble.php">
                            <i class="fa fa-user"></i>
                            <span class="title">Common Problem</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="question.php">
                            <i class="img">
                                <img src="../data/icons/coins.png" style="width:16px" alt="">
                            </i>
                            <span class="title">Question Feedbank</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="logout.php">
                            <i class="fa fa-crosshairs"></i>
                            <span class="title">Logout</span>
                        </a>
                    </li>
               
                    
                </ul>

            </div>
            <!-- MAIN MENU - END -->

        </div>
        <?php
  }
?>
