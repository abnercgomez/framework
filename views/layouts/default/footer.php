<a href="#header" name="Regresar" label="Regresar al inicios"class="scrollup"><i class="fa fa-chevron-up"></i></a>

	<script src="<?php echo $_layoutParams["ruta_js"]; ?>modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script src="<?php echo $_layoutParams["ruta_js"]; ?>jquery.js"></script>
	<script src="<?php echo $_layoutParams["ruta_js"]; ?>jquery.easing.1.3.js"></script>
    <script src="<?php echo $_layoutParams["ruta_js"]; ?>bootstrap.min.js"></script>
	<!--Api de google maps<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>-->
	<script src="<?php echo $_layoutParams["ruta_js"]; ?>jquery.isotope.min.js"></script>
	<script src="<?php echo $_layoutParams["ruta_js"]; ?>jquery.nicescroll.min.js"></script>
	<script src="<?php echo $_layoutParams["ruta_js"]; ?>fancybox/jquery.fancybox.pack.js"></script>
	<script src="<?php echo $_layoutParams["ruta_js"]; ?>jquery.parallax-1.1.3.js" type="text/javascript" ></script>
	<script src="<?php echo $_layoutParams["ruta_js"]; ?>skrollr.min.js"></script>
	<script src="<?php echo $_layoutParams["ruta_js"]; ?>jquery.scrollTo-1.4.3.1-min.js"></script>
	<script src="<?php echo $_layoutParams["ruta_js"]; ?>jquery.localscroll-1.2.7-min.js"></script>
	<script src="<?php echo $_layoutParams["ruta_js"]; ?>stellar.js"></script>
	<script src="<?php echo $_layoutParams["ruta_js"]; ?>responsive-slider.js"></script>
	<script src="<?php echo $_layoutParams["ruta_js"]; ?>jquery.appear.js"></script>
	<script src="<?php echo $_layoutParams["ruta_js"]; ?>validate.js"></script>
	<script src="<?php echo $_layoutParams["ruta_js"]; ?>grid.js"></script>
    <script src="<?php echo $_layoutParams["ruta_js"]; ?>main.js"></script>
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);

            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(40.6700, -73.9400), // New York

                    // How you would like to style the map.
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [	{		featureType:"all",		elementType:"all",		stylers:[		{			invert_lightness:true		},		{			saturation:10		},		{			lightness:30		},		{			gamma:0.5		},		{			hue:"#1C705B"		}		]	}	]
                };

                // Get the HTML DOM element that will contain your map
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using out element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);
            }
        </script>
		 <script src="<?php echo $_layoutParams["ruta_js"]; ?>wow.min.js"></script>
	 <script>
	 wow = new WOW(
	 {

		}	)
		.init();
	</script>
    <section id="footer" class="section footer">
        <div class="container">
            <div class="row animated opacity mar-bot0" data-andown="fadeIn" data-animation="animation">
                <div class="col-sm-12 align-center">
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="row align-center copyright">
                    <div class="col-sm-12"><p>Mercado de servicios libre - by <a href="">Equipo de alto rendimiento</a></p></div>
            </div>
        </div>

    </section>
    
</body>
</html>