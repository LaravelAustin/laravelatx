<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laravel Austin Meetup</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/css/freelancer.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#page-top">Laravel Austin</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="#portfolio">Location/Time</a>
                </li>
                <li class="page-scroll">
                    <a href="#upcoming">Upcoming</a>
                </li>
                <li class="page-scroll">
                    <a href="#about">About</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <img class="img-responsive" src="img/profile.png" alt="">
                <div class="intro-text">
                    <span class="name">Laravel ATX</span>
                    <hr class="star-light">
                    <span class="skills">Welcome to the Laravel Austin Meetup page!</span>
                </div>
            </div>
        </div>
    </div>
</header>

<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Location/Time</h2>
                <hr class="star-primary">
                <h3>2nd Tuesday of the month.  7pm - 9pm.</h3>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 text-center">
                <img src="img/capfac.png" class="" alt="Capital Factory"><br>
                <p>701 Brazos Street<br>Suite 1601<br>Austin, TX  78701</p>
            </div>
            <div class="col-sm-9">
                <iframe width="100%" height="350" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Capital%20Factory%2C%20701%20Brazos%20Street%2C%20Austin%2C%20TX%2C%20United%20States&key=AIzaSyCA0UkGr4a5DsqU3O91tr_B6oExxBPucUU"></iframe>
            </div>
        </div>
    </div>
</section>

<section class="success" id="upcoming">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Upcoming</h2>
                <hr class="star-light">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
            @foreach($meetups as $meetup)
                <h3><a href="{{ $meetup['url'] }}">{{ $meetup['date'] }}</a></h3>
                <p>
                    {{ $meetup['description'] }}
                    <strong>RSVPs:</strong> {{ $meetup['rsvps'] }}
                </p>
            <br>

            @endforeach
                </div>
        </div>
    </div>
</section>

<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>About</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                Laravel Austin is a group for people in the Austin, TX area who are interested in learning, exploring, and sharing knowledge about the <a href="http://laravel.com">Laravel PHP</a> framework.
            </div>
        </div>
    </div>
</section>

<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3>Location</h3>
                    <p>701 Brazos Street, Suite 1601
                        <br>Austin, TX 78701</p>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Around the Web</h3>
                    <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/laravelaustin" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/laravelaustin" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col col-md-4">
                    <h3>About</h3>
                    <p>Laravel Austin is a group for people in the Austin, TX area who are interested in learning, exploring, and sharing knowledge about the <a href="http://laravel.com">Laravel PHP</a> framework.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; {{ date('Y') }} Laravel ATX
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="scroll-top page-scroll visible-xs visble-sm">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>



<script src="/js/jquery-1.10.2.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="/js/classie.js"></script>
<script src="/js/cbpAnimatedHeader.js"></script>
<script src="/js/freelancer.js"></script>

</body>

</html>