<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 6/2/2018
 * Time: 4:47 PM
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/navigation.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/singUp.css">
</head>
<body>

<?php
include 'navbar.php';
?>


<!--Intro Section-->
<section class="view intro-2">
    <div class="mask rgba-stylish-strong h-100 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-lg-5">

                    <!--Form with header-->
                    <div class="card wow fadeIn" data-wow-delay=".4s">
                        <div class="card-body">

                            <!--Header-->
                            <div class="form-header purple-gradient">
                                <h3><i class="fa fa-user mt-2 mb-2"></i> Login</h3>
                            </div>


                            <?php
                            if (isset($_GET['error']))
                            {

                                echo '<legend class="hidden-xs">';
                                echo '<h3 style="color:#ff4444; text-align: center;">' . $_GET['error'] . '</h3>';
                                echo '</legend>';

                            }

                            if (isset($_GET['ok']))
                            {

                                echo '<legend class="hidden-xs">';

                                echo '<p style="font-size: 18px;
                                font-weight: bold; text-align: center;
                                color:  #00C851;; " class="waves-effect">You are successfully Registered.</p>';
                                echo '</legend>';
                            }

                            ?>

                            <form method="post" action="processLogin.php" enctype="multipart/form-data">
                                <!--Body-->
                                <div class="md-form">
                                    <i class="fa fa-envelope prefix white-text"></i>
                                    <input type="text" id="orangeForm-email" class="form-control" name="email">
                                    <label for="orangeForm-email">Your email</label>
                                </div>

                                <div class="md-form">
                                    <i class="fa fa-lock prefix white-text"></i>
                                    <input type="password" id="orangeForm-pass" class="form-control" name="password">
                                    <label for="orangeForm-pass">Your password</label>
                                </div>

                                <div class="text-center">
                                    <p style="color:white;">don't have an account? <a class="light-green-text" href="signUp.php">Register</a> </p>
                                </div>

                                <div class="text-center">
                                    <button class="btn purple-gradient btn-lg">Login</button>
                                    <hr>
                                    <div class="inline-ul text-center d-flex justify-content-center">
                                        <a class="p-2 m-2 fa-lg tw-ic"><i class="fa fa-twitter white-text"></i></a>
                                        <a class="p-2 m-2 fa-lg li-ic"><i class="fa fa-linkedin white-text"> </i></a>
                                        <a class="p-2 m-2 fa-lg ins-ic"><i class="fa fa-instagram white-text"> </i></a>
                                    </div>
                                </div>


                            </form>



                        </div>
                    </div>
                    <!--/Form with header-->

                </div>
            </div>
        </div>
    </div>
</section>


<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>

<script>
    new WOW().init();
</script>

</body>
</html>



