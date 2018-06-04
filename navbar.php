<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 6/2/2018
 * Time: 3:53 PM
 */
?>



<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar fixed-top">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">
        <img src="images/logo.png" height="40" class="d-inline-block align-top" alt="">
    </a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="features.php">Features</a>
            </li>

            <?php
            if (isset($_SESSION['status']))
            {
                echo '
                <li class="nav-item">
                <a class="nav-link" href="manageSeed.php">Manage germination</a>
                </li>
                ';
            }
            ?>

            <li class="nav-item">
                <a class="nav-link" href="aboutUs.php">About us</a>
            </li>

        </ul>
        <!-- Links -->



        <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
                <a class="nav-link"><i class="fa fa-facebook"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link"><i class="fa fa-twitter"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link"><i class="fa fa-instagram"></i></a>
            </li>
        </ul>
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->
