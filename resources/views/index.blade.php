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
                                While the event takes place in Copenhagen, Kastrup in the virtual world, the team of controllers once more venture to the west, more specifically Vejle in Jutland. They're gathered for the entire weekend and as such some sporadic coverage during Friday or Sunday isn't unlikely.
                            </p>
                            <p>
                                Last years event was a busy one. With 530 movements over 16 hours, we are fairly confident we broke any and all records for events in Scandinavia. This year, we're counting on you to go even further. With numerous competitions during the day, prizes sponsored by generous the generous developers & publishers Aerosoft, FS2Crew, Orbx & Vidan Design and all day coverage of the entirety of Denmark, we hope that you will join us in breaking 2017's record.
                            </p>
                        </div>
                        <!-- end about -->
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-6 col-sm-12">
                       	<img class="img-responsive img-rounded" src="{{ asset('assets/img/bg/cphlive.jpg') }}">
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
                    Below you'll find a brief overview. We are not quite ready to accept signups for these competitions just yet, but will be sure to include a link here once we are.
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
                    		<a href="http://www.vidandesign.com/" target="_blank"><img src="{{ asset('/assets/img/sponsors/vidandesign.png') }}" alt="Vidan Design" class="img-responsive" style="padding-top:10%;"/></a>
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
                    <div class="col-md-2 col-sm-2">&nbsp;</div>
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
                            We hope that you'll want to be best prepared, when you visit us at Copenhagen. We've got a full, comprehensive briefing prepared for you! You can find it right <a href="http://vatsim-scandinavia.org/wp-content/uploads/2013/12/Briefing-Copenhagen-Kastrup-V2.pdf" target="_blank">here</a>.<br>It contains some information about routes in and out of Copenhagen as well, so if you're looking for inspiration, this is your guy as well!
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h4 class="title">Regional airports</h4>
                        <p>
                            While Copenhagen is the main focus of our event, we'd love to see you fly in and out of the country's regional airports. We've included short briefings with everything you need to know below.
                        </p>
                        <p>
                            <a href="#bll" data-toggle="modal" data-target="#bll">Billund</a> | <a href="#aal" data-toggle="modal" data-target="#aar">Aarhus</a> | <a href="#aal" data-toggle="modal" data-target="#aal">Aalborg</a>
                        </p>
                        <div id="bll" class="modal fade" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Billund Airport</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            Billund Airport (EKBI) is the second largest airport in Denmark located just north of the city of Billund. If you're fancying some realistic cargo-flying, Billund should be your airport of choice.
                                        </p>
                                        <p>
                                            Take a look at the charts. A quick briefing is included on the second page giving you everything you need to know in an effective and "quick to familiarize" layout.
                                        </p>
                                        <h5>AIRSPACE</h5>
                                        <p>
                                            EKBI is located in a CTZ (Class D), which spans from GND to 1500’. This is
                                            controlled by EKBI_TWR when online. 1500'-FL120 is EKBI_APP (Class C).
                                            Copenhagen Control assumes all positions when all other is offline.
                                            Max speed is 250 knots below FL60.
                                        </p>
                                        <h5>AIRLINES</h5>
                                        <p>
                                            - Ryanair (several dest)<br>
                                            - Norwegian (Oslo, Barcelona, Alicante)<br>
                                            - Lufthansa (Frankfurt)<br>
                                            - KLM (Amsterdam)<br>
                                            - British Airways (London C+H, Bergen, Oslo, Stockholm, Düsseldorf,
                                            Manchester, Munich, Stavanger)<br>
                                            - JetTime (charter)<br>
                                            - Primera (charter)<br>
                                            - Scandinavian Airlines (Copenhagen, Oslo, Stockholm, Malaga, Bergen, Split, Nice)<br>
                                            - Many Others
                                        </p>
                                        <h5>FREQUENCIES</h5>
                                        <p>
                                            Billund Tower (EKBI_TWR): 119.000<br>
                                            Billund Approach (EKBI_APP): 127.575<br>

                                            Copenhagen Control (EKDK_V_CTR): 126.050 (if not online then 121.375)<br>
                                        </p>
                                        <h5>VFR</h5>
                                        <p>
                                            VFR traffic may enter via one of the five reporting points. For circuits expect those north of
                                            the airfield (points shown below.) Overflying of the city of Billund (South and
                                            southwest of aerodrome) is PROHIBITED. See the charts for VFR points.
                                        </p>
                                        <h5>APPROACH & LANDING</h5>
                                        <p>
                                            There are no published STARs in EKBI. Expect direct to GELBA or LOKSA for
                                            straight in approach to runway 09 or 27 respectively. Vectors may also be
                                            provided by appropiate unit.<br><br>Visual approaches are also available, but may only
                                            be executed north of the airfield.
                                        </p>
                                        <h5>AIRPORT LAYOUT</h5>
                                        <p>
                                            Billund airport has a commercial apron (NORTH) and cargo ramp (SOUTH) as
                                            well as general aviation (SOUTHEAST & SOUTHWEST)<br><br>
                                            NORTH AREA: Commercial Apron. Stands 25-40 are normally used for traffic.<br><br>
                                            Stand 25, 26, 38 & 40 are normally used for non-schengen flights. Expect taxi in
                                            via TWY F or TWY N, depending on runway configuration.
                                            <br><br>
                                            SOUTH AREA: Stands 0-10 are mainly used for cargo aircrafts. VFR can park either
                                            in the most western part of the south apron (VFR Flying club) or down at the
                                            hangar area in the southeastern part of the ramp area (By taxiway G)<br><br>
                                            When taxiing to runway 27 from the south area expect to cross the runway at TWY F,
                                            and then continue on TWY K.
                                        </p>
                                        <h5>TAKEOFF & DEPARTURES</h5>
                                        <p>
                                            Call for ATC clearence with the initial call. All SIDs has a stop altitude of FL60.<br><br>
                                            Runway 27: All SIDs require an immidiate right turn after departure to avoid the
                                            city of Billund. Intersection M may be used for departure.<br><br>
                                            Runway 09: Intersection F, A, B and C may be used for departure.
                                            Expect NAPD 2 out of Billund.
                                        </p>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <div id="aar" class="modal fade" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Aarhus Airport</h4>
                                    </div>
                                    <div class="modal-body">
                                    <p>
                                        Aarhus Airport (EKAH) is the 4th largest airport in Denmark, located 40km
                                        northeast of the city of Aarhus. The airport consist of two parralel runways
                                        (28/10) as well as a ramp area with one terminal. Runway 28L/10R is the main
                                        runway and used for all commercial traffic.
                                    </p>
                                    <p>
                                        Take a look at the charts. A quick briefing is included on the second page giving you everything you need to know in an effective and "quick to familiarize" layout.
                                    </p>
                                    <p>
                                        Both runways are equipped with ILS. Runway 28L has CATII as well.<br><br>
                                        The airport is mainly served by SAS, Ryanair and British Airways. Other than that
                                        several charter airlines offer flights from Aarhus to southern destinations.
                                    </p>
                                    <h5>AIRSPACE</h5>
                                    <p>
                                        Aarhus is located in a CTZ with Tower prevailing when online.<br><br>Above is
                                        Aarhus TMA (Class D) controlled by Aarhus Approach when online. When local ATC is not online EKDK_CTR will assume control of all positions.
                                    </p>
                                    <h5>AIRLINES</h5>
                                    <p>
                                        -SAS (Copenhagen, Stockholm, Palma De Mallorca)<br>
                                        -British Airways (Stockholm Bromma, Oslo, Göteborg)<br>
                                        -Ryanair (Several destinations)<br>
                                        -Easyjet<br>
                                        -Thomas Cook Airlines Scandinavia (Charter)<br>
                                        -Primera (Charter)<br>
                                    </p>
                                    <h5>FREQUENCIES</h5>
                                    <p>

                                        Aarhus Tower (EKAH TWR): 118.525<br>
                                        Aarhus Approach (EKAH_APP): 119.275<br>

                                        Copenhagen Control (EKDK_D_CTR): 133.150 (if not online then 121.375)<br>

                                    </p>

                                    <h5>VFR TRAFFIC</h5>
                                    <p>
                                        Traffic may enter via different VFR reporting points. For circuits it's right traffic RWY
                                        10R and left traffic RWY 28L.
                                    </p>
                                    <h5>APPROACH & LANDING</h5>
                                    <p>
                                        There are no published STARs into Aarhus. Expect direct routings to ARDEK for
                                        ILS Runway 28L and GIPIN for ILS Runway 10R. Alternatively vectors
                                        may be used to final approach.<br><br>
                                        Max speed is 250 knots below FL100.<br><br>
                                        Visual approach is also available and should be executed south of the airfield.
                                    </p>
                                    <h5>RUNWAY & AIRPORT</h5>
                                    <p>
                                        The main runway (RWY 28L/10R) is used for all commercial traffic. Expect to vacate to the
                                        north for taxi to the apron.<br><br>
                                        The apron consists of four main stands. Stand 4 is normally used for flights out
                                        of schengen (Ryanair to Stansted).<br><br>All stands are selfmanouvering.<br><br>
                                        VFR parking is on the western end of the apron.
                                    </p>
                                    <h5>TAKEOFF AND DEPARTURES</h5>
                                    <p>
                                        There is no prefirential runway in EKAH. Opposite runway may be requested
                                        when conditions prevail.<br><br>
                                        RWY 10R: Intersection Y and W may be used for takeoff<br>
                                        RWY 28L: Intersection E and W may be used for takeoff<br><br>
                                        Prefered takeoff position should be stated on first contact with TWR.<br><br>
                                        Request ATC Clearence upon taxiing to the runway.<br><br>
                                        There are no published SIDs in EKAH, expect an omnidirectional departure.<br><br>
                                        All IFR aircraft must climb to a minimum of 700 feet before turning.<br><br>
                                        Expect NAPD 2 out of Aarhus.
                                    </p>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <div id="aal" class="modal fade" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Aalborg Airport</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            Aalborg (EKYT) is the third largest airport in Denmark and located west of the
                                            city Aalborg co-located with a millitary base.<br><br>
                                            It is the main airport for all people in the northern part of Denmark and it's
                                            connected to Copenhagen, several major capitals in Europe and southern
                                            destinations.
                                        </p>
                                        <p>
                                            Take a look at the charts. A quick briefing is included on the second page giving you everything you need to know in an effective and "quick to familiarize" layout.
                                        </p>


                                        <h5>AIRLINES</h5>
                                        <p>
                                            Aalborg is mainly served by charter destinations. Companies such as Primera,
                                            Norwegian Air Shuttle and Thomas Cook Airlines Scandinavia operate a lot of charter
                                            flights, especially in the summer.<br><br>
                                            All year round airlines, such as SAS, Lufthansa, KLM, Norwegian Air
                                            Shuttle and British Airways are also operating from Aalborg.<br><br>
                                            The airport has two parralel main runways, one (RWY 08L/26R) is used for all
                                            commercial traffic, where the smaller one (RWY 08R/26L) is mainly used for VFR
                                            traffic.
                                        </p>

                                        <h5>FREQUENCIES</h5>
                                        <p>
                                            Aalborg ATIS (EKYT_ATIS): 120.475<br>
                                            Aalborg Tower (EKYT_TWR): 118.300<br>
                                            Aalborg Approach (EKYT_APP) 123.975<br>
                                            Copenhagen Control (EKDK_V_CTR): 126.050 (if not online then 121.375)<br><br>
                                        </p>
                                        <h5>APPROACH & LANDING</h5>
                                        <p>
                                            Aalborg is located in Class D airspace with class C airspace above.<br><br>
                                            Max speed is 250 below FL100.<br><br>
                                            Expect vectors, or direct points on final, by EKDK_CTR or
                                            EKYT_APP if online.<br><br>
                                            Both runway are equipped with ILS, RWY 26L includes
                                            CATII.<br><br>
                                            No STARs are available in Aalborg. EKDK_CTR may clear you to direct AAL, GL,
                                            BAKIT or GIPUG for an ILS to the active runway. Alternatively radar vectors will be
                                            provided.<br><br>
                                            Visual approaches are also available, in case of visual approach IFR traffic must
                                            stay clear of the city of Aalborg.<br><br>
                                        </p>
                                        <h5>VFR</h5>
                                        <p>
                                            VFR traffic is to enter via one of the reporting points. Check the airport charts.
                                        </p>
                                        <h5>DEPARTURE</h5>
                                        <p>
                                            Request startup and pushback to appropiate ATC unit, as in all danish airports
                                            (except EKBI and EKCH), ATC clearence must be requested on taxi, not prior to
                                            startup.<br><br>
                                            There are no SIDs in EKYT. All departures are omnidirectional departures,
                                            minimum climb to 600’ is required before turning.<br><br>
                                            RWY 26R: All IFR traffic must climb to 2000 before turning.<br>
                                            RWY 08R: All IFR traffic must climb straight ahead until reaching 2 DME from AAL.<br>
                                        </p>
                                        <h5>AIRPORT LAYOUT</h5>
                                        <p>
                                            All aircrafts are expected to vacate the runway to the south, due to military
                                            activity on the north part of the aerodrome.<br><br>
                                            Taxi via RWY 26L/08R and TWY C to
                                            the apron area.<br><br>
                                            Caution TWY B is a narrow taxiways, and CANNOT be used by B737-series or
                                            larger.
                                        </p>

                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </div>
                    <div class="col-md-2">&nbsp;</div>
                </div>

            </div>
            <!-- end container -->
        </div>
        <!-- end #briefing -->



    @endsection
