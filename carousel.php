<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 6/2/2018
 * Time: 4:05 PM
 */

?>


<!--Carousel Wrapper-->
<div id="carousel-example-1" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">

    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1" data-slide-to="1"></li>
        <li data-target="#carousel-example-1" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">
            <!--Mask-->
            <div class="view">
                <!--Video source-->
                <video class="video-fluid" autoplay controls muted loop  style="width: 100%;">
                    <source src="images/video.MP4" type="video/mp4" />
                </video>
                <div class="full-bg-img flex-center mask rgba-indigo-light white-text">

                    <ul class="animated fadeInUp col-md-12 list-unstyled list-inline">
                        <li>
                            <h1 class="font-weight-bold text-uppercase">Smart Germination Assistance</h1>
                        </li>
                        <li>
                            <p class="font-weight-bold text-uppercase py-4">A Unique and powerful way to grow your seeds.</p>
                        </li>
                        <?php
                        if (isset($_SESSION['status']))
                        {
                            echo '
                             <li class="list-inline-item">
                                <a href="logout.php"
                                   class="btn btn-unique btn-lg btn-rounded mr-0">Logout!</a>
                            </li>
                            ';
                        }
                        else{
                            echo '
                             <li class="list-inline-item">
                                <a href="signUp.php"
                               class="btn btn-unique btn-lg btn-rounded mr-0">Sign up!</a>
                            </li>
                            
                            ';
                        }
                        ?>

                        <li class="list-inline-item">
                            <a target="_blank" href="features.php" class="btn btn-cyan btn-lg btn-rounded ml-0">Learn more</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--/.Mask-->
        </div>
        <!--/.First slide-->

        <!--Second slide -->
        <div class="carousel-item">
            <!--Mask-->
            <div class="view">
                <div class="full-bg-img flex-center mask rgba-purple-light white-text">
                    <ul class="animated fadeInUp col-md-12 list-unstyled">
                        <li>
                            <h1 class="font-weight-bold text-uppercase">Lots of feature for a germination system</h1>
                        </li>
                        <li>
                            <p class="font-weight-bold text-uppercase py-4">And all of them are QUITE USEFUL!</p>
                        </li>
                        <li>
                            <a target="_blank" href="features.php" class="btn btn-primary btn-rounded btn-lg">See our features</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--/.Mask-->
        </div>
        <!--/.Second slide -->

        <!--Third slide-->
        <div class="carousel-item">
            <!--Mask-->
            <div class="view">
                <div class="full-bg-img flex-center mask rgba-blue-light white-text">
                    <ul class="animated fadeInUp col-md-12 list-unstyled">
                        <li>
                            <h1 class="font-weight-bold text-uppercase">Visit our support forum</h1></li>
                        <li>
                            <p class="font-weight-bold text-uppercase py-4">Our community can help you with any question</p>
                        </li>
                        <li>
                            <a target="_blank" href="aboutUs.php" class="btn btn-lg btn-indigo btn-rounded">Support forum</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--/.Mask-->
        </div>
        <!--/.Third slide-->

    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
