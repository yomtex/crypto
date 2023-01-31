<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Register</title>
    <meta content="" name="description" />
    <meta content="" name="author" />
        <link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/css/intlTelInput.css"/>
        <script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

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
    <link href="../assets/css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <!-- CORE CSS FRAMEWORK - END -->

    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - START -->

    <link href="../assets/plugins/icheck/skins/all.css" rel="stylesheet" type="text/css" media="screen" />

    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE CSS TEMPLATE - START -->
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- CORE CSS TEMPLATE - END -->

</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class=" login_page">

    <div class="container-fluid">
        <div class="login-wrapper row">
            <div id="login" class="login loginpage col-lg-offset-2 col-md-offset-3 col-sm-offset-3 col-xs-offset-0 col-xs-12 col-sm-6 col-lg-8">    
                <div class="login-form-header">
                     <img src="../data/icons/signup.png" alt="login-icon" style="max-width:64px">
                     <div class="login-header">
                         <h4 class="bold color-white">Signup Now!</h4>
                         <h4><small>Please enter your data to register.</small></h4>
                     </div>
                </div>
               
                <div class="box login">

                    <div class="content-body" style="padding-top:30px">
                        <form id="" action="" method="post" class="no-mb no-mt">
                        <?php
                            include_once('../config/index.php');
                            $obj = new Btc();
                            echo $obj->signup();
                        ?>
                            <div class="row">
                                <div class="col-xs-12">

                                    <div class="col-lg-6 no-pl">
                                        <div class="form-group">
                                            <div class="controls">
                                                <input type="text" required class="form-control" name="username" placeholder="Username">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 no-pr">
                                        <div class="form-group">
                                            <div class="controls">
                                                <input type="text" required class="form-control" name="email" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 no-pr">
                                        <div class="form-group">
                                            <div class="controls">
                                                   <input name="phone" type="text" class="form-control" id="phone"/> 

        <script>
            var input = document.querySelector("#phone");
            window.intlTelInput(input, {
                separateDialCode: true,
                excludeCountries: ["in", "il"],
                preferredCountries: ["us", "jp", "pk", "no"]
            });
        </script>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-lg-6 no-pl">
                                        <div class="form-group">
                                            <div class="controls">
                                                <input type="password" required class="form-control" name="pass1" placeholder="enter password">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 no-pr">
                                        <div class="form-group">
                                            <div class="controls">
                                                <input type="password" required class="form-control" name="pass2" placeholder="repeat password">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 no-pl">
                                        <div class="form-group">
                                            <div class="controls">
                                                <input type="password" required class="form-control" name="secret1" placeholder="Security Key">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 no-pr">
                                        <div class="form-group">
                                            <div class="controls">
                                                <input type="password" required class="form-control" name="secret2" placeholder="Confirm Security Key">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="pull-left">
                                        <button type="submit" class="btn btn-primary mt-10 btn-corner right-15" class="submet" name="submit">Sign up</button>
                                        <a href="index.php" class="btn mt-10 btn-corner signup">Login</a>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <p id="nav">
                    <a class="pull-left" href="#" title="Password Lost and Found">Forgot password?</a>
                    <a class="pull-right" href="index.php" title="Sign Up">Login</a>
                </p>

            </div>
        </div>
    </div>

    <!-- MAIN CONTENT AREA ENDS -->
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

    <script src="../assets/plugins/icheck/icheck.min.js"></script>
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE TEMPLATE JS - START -->
    <script src="../assets/js/scripts.js"></script>
    <!-- END CORE TEMPLATE JS - END -->

</body>


<!-- Mirrored from tokrix.netlify.app/html-dashboard/ui-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Dec 2022 07:08:26 GMT -->
</html>