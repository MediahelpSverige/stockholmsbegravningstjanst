<?php
/**
 * Template Name: hembesok
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(3); ?>

<div class="inner-page no-header">
    <div class="contact">
        <div class="container">
        	<div class="spl-h3" id="load_outer">

            <div class="row contact-innerl" >

                <div class="col-sm-3 contact-addrss">



                    <h3><?php echo get_field('details'); ?></h3>
                    <h4><?php echo get_field('address'); ?></h4>
                    <h4><span><i class="fa fa-phone" aria-hidden="true"></i><?php echo get_field('telefon'); ?> </span><!-- <span>Fax: <?php //echo get_field('fax'); ?></span> --></h4>
                    <a href="mailto:<?php echo get_field('email_id'); ?> "><?php echo get_field('email_id'); ?> </a>
                </div>
                <div class="col-sm-5">
                    <map>
                        <?php

							$location = get_field('map');

							if( !empty($location) ):
							?>
							<div class="acf-map">
								<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
							</div>
							<?php endif; ?>
                    </map>
                </div>
                <div class="col-sm-4 <?php  echo 'right_panel';  ?>">
                    <div class="contactForm">
                        <?php echo apply_filters( 'the_content', $post->post_content );
           ?>

                    </div>
                </div>
            </div>

           </div>

            <!-- <div class="loader"><a href="javascript:void(0); " id="testimonial_loadmore"><i class="fa fa-spinner" aria-hidden="true"></i></a></div> -->
        </div>
    </div>
</div>
<script>
	jQuery(document).ready(function(){
		var has;
		has=window.location.hash;
			var n=window.location.pathname;

			var mhas=has.split('#');
			console.log('#p-'+mhas[1]);
			 jQuery('html, body').animate({
	        scrollTop: jQuery('#p-'+mhas[1]).offset().top-110
	    }, 500);

	     setTimeout(function(){history.pushState('', '', n);},00);
	});
</script>








<style type="text/css">

.acf-map {
	width: 100%;
	height: 478px;
	border: #ccc solid 1px;
}

/* fixes potential theme css conflict */
.acf-map img {
   max-width: inherit !important;
}

</style>

<?php get_footer(); ?>


<script type="application/javascript">
        (function($) {

        function new_map( $el ) {

            // var
            var $markers = $el.find('.marker');

            // vars
            var args = {
                zoom		: 16,
                center		: new google.maps.LatLng(0, 0),
                mapTypeId	: google.maps.MapTypeId.ROADMAP
            };

            // create map
            var map = new google.maps.Map( $el[0], args);

            // add a markers reference
            map.markers = [];

            // add markers
            $markers.each(function(){

                add_marker( $(this), map );

            });

            // center map
            center_map( map );


            // return
            return map;
        }

        function add_marker( $marker, map ) {

            // var
            var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

            // create marker
            var marker = new google.maps.Marker({
                position	: latlng,
                map			: map
            });

            // add to array
            map.markers.push( marker );

            // if marker contains HTML, add it to an infoWindow
            if( $marker.html() )
            {
                // create info window
                var infowindow = new google.maps.InfoWindow({
                    content		: $marker.html()
                });

                // show info window when marker is clicked
                google.maps.event.addListener(marker, 'click', function() {

                    infowindow.open( map, marker );

                });
            }

        }

        function center_map( map ) {

            // vars
            var bounds = new google.maps.LatLngBounds();

            // loop through all markers and create bounds
            $.each( map.markers, function( i, marker ){

                var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

                bounds.extend( latlng );

            });

            // only 1 marker?
            if( map.markers.length == 1 )
            {
                // set center of map
                map.setCenter( bounds.getCenter() );
                map.setZoom( 16 );
            }
            else
            {
                // fit to bounds
                map.fitBounds( bounds );
            }

        }

        var map = null;

        $(document).ready(function(){

            $('.acf-map').each(function(){

                // create map
                map = new_map( $(this) );

            });

        });

})(jQuery);
</script>
