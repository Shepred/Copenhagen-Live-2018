        <!-- begin #footer -->
        <div id="footer" class="footer">
            <div class="container">
                <div class="footer-brand">
                    Copenhagen Live {{ date('Y') }}
                </div>
                <img class="vatsca-logo" src="{{ asset('assets/img/logo/vatsca.png') }}"/>
                <p>Copyright &copy;  <a target="_blank" href="https://twitter.com/JakobLMarker">Jakob Lindved Marker</a> {{ date("Y") }}.<br />
                All images used with permission from <a href="https://www.flickr.com/photos/99499838@N06/" target="_blank">Mikkel Johnsen</a>.</p>
            </div>
        </div>
        <!-- end #footer -->
    </div>
    <!-- end #page-container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset('assets/plugins/jquery/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/bootstrap3/js/bootstrap.min.js') }}"></script>
	<!--[if lt IE 9]>
		<script src="{{ asset('assets/crossbrowserjs/html5shiv.js') }}"></script>
		<script src="{{ asset('assets/crossbrowserjs/respond.min.js') }}"></script>
		<script src="{{ asset('assets/crossbrowserjs/excanvas.min.js') }}"></script>
	<![endif]-->
	<script src="{{ asset('assets/plugins/js-cookie/js.cookie.js') }}"></script>
	<script src="{{ asset('assets/plugins/scrollMonitor/scrollMonitor.js') }}"></script>
	<script src="{{ asset('assets/js/apps.min.js') }}"></script>
	<!-- ================== END BASE JS ================== -->
	
	<script>    
	    $(document).ready(function() {
	        App.init();
	    });
	</script>
