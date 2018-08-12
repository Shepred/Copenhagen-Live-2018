@extends('layout.master')
    @section('content')        <!-- begin #home -->
        <div id="home" class="content has-bg home">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="{{ asset('assets/img/bg/bg-apron1.jpg') }}" alt="Home" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container home-content">
                <h1>{{ env('APP_NAME') }}</h1>
                <h3>Welcome to the annual gathering at Copenhagen, Kastrup</h3>
                <h4>
                    Saturday the 8th of September, 2018<br />
                    16 hours of controlling from 06:00 Z to 22:00 Z
                </h4>
                <a href="#briefing" class="btn btn-theme">Pilot Briefing</a> <a href="#competitions" class="btn btn-outline">Event Competitions</a><br />
                            </div>
            <!-- end container -->
        </div>
        <!-- end #home -->

        <!-- begin #about -->
        <div id="about" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInDown">
                <h2 class="content-title">About the Event</h2>
                <p class="content-desc">
                    The annual instalment of Copenhagen Live first appeared in 2017.<br>Based upon the popularity of the first iteration, it was decided to repeat the event annually.
                </p>
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-6 col-sm-12">
                        <!-- begin about -->
                        <div class="about">
                            <h3>Here's what to expect for <b>2018</b>..</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Vestibulum posuere augue eget ante porttitor fringilla.
                                Aliquam laoreet, sem eu dapibus congue, velit justo ullamcorper urna,
                                non rutrum dolor risus non sapien. Vivamus vel tincidunt quam.
                                Donec ultrices nisl ipsum, sed elementum ex dictum nec.
                            </p>
                            <p>
                                In non libero at orci rutrum viverra at ac felis.
                                Curabitur a efficitur libero, eu finibus quam.
                                Pellentesque pretium ante vitae est molestie, ut faucibus tortor commodo.
                                Donec gravida, eros ac pretium cursus, est erat dapibus quam,
                                sit amet dapibus nisl magna sit amet orci.
                            </p>
                        </div>
                        <!-- end about -->
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-6 col-sm-12">
                       	<img class="img-responsive img-rounded" src="{{ asset('assets/img/bg/cphlive.png') }}">
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #about -->

        <!-- begin #milestone -->

        <div class="content bg-black-darker has-bg" data-scrollview="true">

            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="../assets/img/bg/bg-stats.jpg" alt="Milestone" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container">
                <!-- begin row -->
                <div class="row">
                	<h2 class="content-header text-center">In 2017 we had..</h2>

                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-3 milestone-col">
                        <div class="milestone">
                            <div class="number" data-animation="true" data-animation-type="number" data-final-number="1">1</div>
                            <div class="title">Airport</div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-3 milestone-col">
                        <div class="milestone">
                            <div class="number" data-animation="true" data-animation-type="number" data-final-number="530">530</div>
                            <div class="title">Flights</div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-3 milestone-col">
                        <div class="milestone">
                            <div class="number" data-animation="true" data-animation-type="number" data-final-number="11">11</div>
                            <div class="title">Controllers</div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-3 milestone-col">
                        <div class="milestone">
                            <div class="number" data-animation="true" data-animation-type="number" data-final-number="16">16</div>
                            <div class="title">Hours of coverage</div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                </div>
                <div class="row">
                	<div class="col-md-12 col-sm-12">
                		<h2 class="text-center content-footer">Will you be a part of 2018?</h2>
                	</div>
                </div>
            </div>
            <!-- end container -->
        </div>
        <!-- end #milestone -->
<!-- beign #service -->
        <div id="competitions" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                <h2 class="content-title">Competitions</h2>
                <p class="content-desc">
                    Just like last year, we've teamed up with numerous well known flight simulator developers, to give away some wonderful prizes.
                    <br>
                    Below you'll find a brief overview. To learn more or to take part in the competitions, <a href="{{ url('/competitions') }}">head on over to the dedicated site</a>.
                </p>
                    <div class="row content-header">
                    	<div class="col-md-3 col-sm-3">
                    		<a href="https://www.aerosoft.com/en/" target="_blank"><img src="{{ asset('/assets/img/sponsors/aerosoft.png') }}" alt="Aerosoft" class="img-responsive"/></a>
                    	</div>
                    	<div class="col-md-3 col-sm-3">
                    		<a href="https://www.fs2crew.com/" target="_blank"><img src="{{ asset('/assets/img/sponsors/fs2crew.png') }}" alt="FS2Crew" class="img-responsive"/></a>
                    	</div>
                    	<div class="col-md-3 col-sm-3">
                    		<a href="https://orbxdirect.com/" target="_blank"><img src="{{ asset('/assets/img/sponsors/orbx.png') }}" alt="Orbx" class="img-responsive"/></a>
                    	</div>
                    	<div class="col-md-3 col-sm-3">
                    		<a href="http://www.vidandesign.com/" target="_blank"><img src="{{ asset('/assets/img/sponsors/vidandesign.png') }}" alt="Vidan Design" class="img-responsive"/></a>
                    	</div>
                    </div>
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">

                            <div class="info">
                                <h4 class="title">Morning Rush</h4>
                                <p class="desc">No sleep for the wicked! Arrive into Copenhagen between 06:00 & 08:00 Z.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">

                            <div class="info">
                                <h4 class="title">Domestic Madness</h4>
                                <p class="desc">Short on time? Complete a domestic two sector flight, originating in Copenhagen to any commercial airfield in Denmark & return to participate.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">

                            <div class="info">
                                <h4 class="title">Afternoon Turnaround</h4>
                                <p class="desc">Fly to Copenhagen & work in close co-operation with your ground crew to get your aircraft ready for departure - you've only got one hour!</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">

                            <div class="info">
                                <h4 class="title">6 Sector Challenge</h4>
                                <p class="desc">Got the whole day set aside? Complete at least 6 sectors during the day. Every sector has to either arrive or depart at Copenhagen.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">

                            <div class="info">
                                <h4 class="title">Back Before Curfew</h4>
                                <p class="desc">A long day of flying is slowly coming to an end, and it's time to head home once more. Touchdown in Copenhagen between 20:00 & 22:00 Z.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">

                            <div class="info">
                                <h4 class="title">Virtual Airline Showdown</h4>
                                <p class="desc">Integer consectetur, massa id mattis tincidunt, sapien erat malesuada turpis, nec vehicula lacus felis nec libero. Fusce non lorem nisl.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #about -->

        <!-- begin #quote -->
        <div class="content bg-black-darker has-bg" data-scrollview="true">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="../assets/img/bg/bg-apron.jpg" alt="Quote" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInLeft">
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-12 -->
                    <div class="col-md-12 quote">
                        <i class="fa fa-quote-left"></i> It was a great event.<br><br>I departed from CPH with my Cessna Citation X towards BIEG. And it was great service you delivered. Although the airport was busy, everything was fully under control.<br><br>You did an extraordinary job! <i class="fa fa-quote-right"></i>
                        <a href="http://forum.vatsim-scandinavia.org/topic/283-feedback-from-pilots-feedbackvatsim-scandinaviaorg/?do=findComment&comment=13296" target="_blank"><small>- Reinhard Brantner (879395), pilot during Copenhagen Live 2017</small></a>
                    </div>
                    <!-- end col-12 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #quote -->





        <!-- begin #briefing -->
        <div id="briefing" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInDown">
                <h2 class="content-title">Pilot Briefing</h2>
                <p class="content-desc">
                    Not quite sure how it all works in Denmark? We've got you covered!
                </p>
                <div class="row">
                    <div class="col-md-2">&nbsp;</div>
                    <div class="col-md-4">
                        <h4 class="title">Copenhagen, Kastrup - EKCH</h4>
                        <p>
                            We hope that you'll want to be best prepared, when you visit us at Copenhagen. We've got a full, comprehensive briefing prepared for you! You can find it right <a href="http://vatsim-scandinavia.org/wp-content/uploads/2013/12/Briefing-Copenhagen-Kastrup-V2.pdf">here</a>.<br>It contains some information about routes in and out of Copenhagen as well, so if you're looking for inspiration, this is your guide!
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h4 class="title">Regional airports</h4>
                        <p>
                            If you want information about our local airports, you can find so for Billund, Aalborg and Aarhus right <a href="http://vatsim-scandinavia.org/pilots/airports/denmark/">here</a>.
                        </p>
                    </div>
                    <div class="col-md-2">&nbsp;</div>
                </div>

            </div>
            <!-- end container -->
        </div>
        <!-- end #briefing -->



    @endsection
