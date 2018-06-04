<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/navigation.css">
    <link rel="stylesheet" href="css/carousel.css">
</head>
<body>


<!-- Rotating card -->
<div class="card-wrapper">
    <div id="card-2" class="card-rotating effect__click h-100 w-100">

        <!--Front Side-->
        <div class="face front card">

            <!-- Image-->
            <div class="view overlay">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/photo5.jpg" alt="Example photo">
                <a>
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            <!--Content-->
            <div class="card-body">

                <a class="rotate-btn float-right" data-card="card-2"><i class="fa fa-share-alt fa-lg"></i></a>
                <h4 class="">Card title</h4>
                <hr>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat tenetur odio suscipit non commodi vel eius veniam maxime.</p>
                <a class="link-text">
                    <h5>Read more <i class="fa fa-angle-double-right"></i></h5>
                </a>

            </div>

        </div>
        <!--Front Side-->

        <!--Back Side-->
        <div class="face back">

            <!-- Content -->
            <div class="content text-center">

                <h4 class="card-title font-weight-bold my-4">Social shares <i class="fa fa-close rotate-btn text-muted" data-card="card-2"></i></h4>
                <hr>
                <!-- Social Icons -->
                <ul class="list-unstyled list-inline d-flex justify-content-center flex-wrap">
                    <li class="list-inline-item"><a class="btn-floating btn-dribbble"><i class="fa fa-dribbble"> </i></a></li>
                    <li class="list-inline-item"><a class="btn-floating btn-slack"><i class="fa fa-slack"> </i></a></li>
                    <li class="list-inline-item"><a class="btn-floating btn-ins"><i class="fa fa-instagram"> </i></a></li>
                    <li class="list-inline-item"><a class="btn-floating btn-pin"><i class="fa fa-pinterest"> </i></a></li>
                    <li class="list-inline-item"><a class="btn-floating btn-tw"><i class="fa fa-twitter"> </i></a></li>
                    <li class="list-inline-item"><a class="btn-floating btn-gplus"><i class="fa fa-google-plus"> </i></a></li>
                    <li class="list-inline-item"><a class="btn-floating btn-git"><i class="fa fa-github"> </i></a></li>
                </ul>
                <h5 class="font-weight-bold my-4">Join our community</h5>
                <hr>
                <!-- Social Icons -->
                <ul class="list-unstyled list-inline d-flex justify-content-center flex-wrap mt-4">
                    <li class="list-inline-item"><a class="btn btn-fb px-4"><i class="fa fa-facebook"> </i></a></li>
                    <li class="list-inline-item"><a class="btn btn-tw px-4"><i class="fa fa-twitter"> </i></a></li>
                    <li class="list-inline-item"><a class="btn btn-li px-4"><i class="fa fa-linkedin"> </i></a></li>
                    <li class="list-inline-item"><a class="btn btn-ins px-4"><i class="fa fa-instagram"> </i></a></li>
                </ul>

            </div>

        </div>
        <!--Back Side-->

    </div>
</div>
<!-- Rotating card -->


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