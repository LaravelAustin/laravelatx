@extends('layouts.main')

@section('content')
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
                <a href="http://capitalfactory.com"><img src="img/capfac.png" class="" alt="Capital Factory"></a><br>
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
            <div class="col-lg-10 col-lg-offset-1 text-center">
                @foreach($meetups as $meetup)
                <h3><a href="{{ $meetup['url'] }}">{{ $meetup['date'] }}</a></h3>
                <div class="row">
                    <div class="col-lg-2">&nbsp;</div>
                <div class="col-lg-2">
                    <a href="{{ $meetup['url'] }}" class="btn btn-lg btn-outline">
                        <i class="fa fa-calendar"></i> RSVP
                    </a>
                </div>
                <div class="col-lg-6 text-left">
                    {{ $meetup['description'] }}
                    <strong>RSVPs:</strong> {{ $meetup['rsvps'] }}
                </div>
                </div>


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
@stop
