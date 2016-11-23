<?php
get_header(); ?>

<section class="banner bannerHome">
    <div class="bannerSlide">
    	<?php $event_query = new WP_Query(array('post_type'  => 'homebanner', 'posts_per_page' => '-1',)        );
             while ( $event_query->have_posts() ) : $event_query->the_post(); ?>
             <?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
       <div class="item" style="background-image:-webkit-linear-gradient(180deg, rgba(61, 61, 61, .2), rgba(61, 61, 61, .2)), url('<?php echo $image[0]; ?>')">
           <img src="" alt="" />
           <div class="container">
              <div class="banner-text">
                   <h2><?php the_title(); ?></h2>
                 <p><?php echo wp_trim_words( get_the_content(), 40 );?></p>
               </div>
            </div>

       </div>
        	 <?php endwhile; ?>
		<?php wp_reset_postdata(); ?>



    </div>
    <div class="banner-footer">
      <?php echo do_shortcode('[contact-form-7 id="40" title="Home Banner Contact"]'); ?>

    </div>
</section>
<div class="body-detail">
    <div class="container">
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10">
               <?php $homecontent = get_page(5);
               echo $homecontent->post_content;
               ?>
            </div>
        </div>
          <div class="rivew-part ">
        <!-- <div class="rivew-head ">
        	<?php $customer = get_page(55);?>
            <h3> <?php echo $customer->post_title; ?> </h3>
           <?php
           echo $customer->post_content;
           ?>
        </div> -->
       <div class="content-carousel">
        <?php

		$the_query = new WP_Query( 'post_type=customer_review&post_per_page=-1' ); $i=0;$k=0; $c=0; $s=1;
		while($the_query -> have_posts()) : $the_query-> the_post();
		if($s==1)
		{
			?>
			<div class="item">
			<?php

		}

		if($i%2==0){
		$k=0

		?>

        <div class="row customer-cont ">
        	<?php } ?>
            <div class="<?php if($c==2) { ?> col-sm-6 col-sm-offset-1 <?php } elseif($c==3){ ?> col-sm-5 <?php } else { ?> col-sm-6 <?php } ?> ">
                <div class="customer-cont-txt">
                    <h4><?php the_title();?></h4>
                    <p><?php the_content(); ?></p>
                </div>
            </div>

		        <?php if($i%2==1) {?>
		</div>
		<?php } $i++; $k++; $c++; ?>
		<?php
		  if($s==4)
		  {
		  	$s=0;
		  	?>
		  </div>
		  	<?php
		  }
		$s++;
		endwhile;
		wp_reset_query();

		if($k !=2 )
		{
		echo '</div> </div>';
		}?>
		</div>
    </div>

    </div>
</div>

<div class="info-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 info-l">
                <?php $contactpage = get_page(16);?>
                <div class="kontakt-header"><?php echo $contactpage->post_content;?> </div>
               <div class="tab-box">
                   <ul class="nav nav-tabs" role="tablist">
                   	<?php $event_query = new WP_Query(array('post_type'  => 'kotakta', 'posts_per_page' => '-1',)        ); $c=1;
             while ( $event_query->have_posts() ) : $event_query->the_post();

             ?>
                        <li  class="kontor-li" role="presentation" <?php if($c==2){?>class="active"<?php }?>><a class="kontor-btn" href="#address<?php echo $post->ID; ?>" aria-controls="address<?php echo $post->ID; ?>" role="tab" data-toggle="tab"><?php the_title(); ?></a></li>

                        	 <?php  endwhile; ?>
					<?php wp_reset_postdata(); ?>

        <?php

        //AJAX for the hemkontor
        $hemkontor = get_page(369);
        ?>

 <li class="presentation1"><a class="besok" id="<?php echo $hemkontor->ID; ?>">Boka ett kostnadsfritt hembesok</a></li>
                      </ul>
               </div>
            </div>

            <div class="col-sm-6">

                <div class="tab-content" id="kontor-tab">
                  <div id="hembesok-ajax"></div>

                	 	<?php $event_query = new WP_Query(array('post_type'  => 'kotakta', 'posts_per_page' => '-1',)        );
						// $c=1;
             while ( $event_query->have_posts() ) : $event_query->the_post();

             ?>

                  <div role="tabpanel" class="tab-pane fade <?php //if($c==2){ echo 'in active'; }?>" id="address<?php echo $post->ID; ?>">
                      <div class="info-addrss clearfix">
                        <div class="info-addrss-l info-addrss-ll">
                          <?php

							$location = get_field('map');

							if( !empty($location) ):
							?>
							<div class="acf-map">
								<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
							</div>
							<?php endif; ?>
                        </div>

                    </div>

                       <div class="info-addrss clearfix">




                        <div class="info-addrss-l innr-co-wrk">




                        	     <div class="worker-carousel co-worker-outer">
                          <?php
								if( have_rows('worker_details') ): while ( have_rows('worker_details') ) : the_row();
								if( get_row_layout() == 'worker' ):
							?>
                  <div class="item">
                  	<div class="co-worker-img">
                                   <img src="<?php echo get_sub_field('worker_image'); ?>" alt="user" />
                             </div>
                             <div class="co-worker-txt">
                               <h3><?php echo get_sub_field('worker_name'); ?></h3>
                               <h4><?php echo get_sub_field('worker_designation'); ?></h4>
                              </div>
                 </div>

  <?php
					       endif;
					   endwhile;
					endif;
					?>
                        </div>


                        </div>

                    </div>


                        <div class="info-addrss clearfix">

                        <div class="info-addrss-l add-dtl kontaktinfo">
                          <div class="co-worker-outer">
						                           <?php echo get_field('details',false); ?>
						                            <address>
						                                <p><?php echo get_field('address');?></p>
                                            <div class="btn-group" role="group" aria-label="...">
                                              <button type="button" class="btn btn-primary">
                                                 <span class="glyphicon glyphicon glyphicon-envelope" aria-hidden="true"></span>
                                              	<span class="button-text"><a href="mailto:info@email.se">Kontakta oss idag</a></span>
                                              </button>
                                              <button type="button" class="btn btn-primary">
                                                <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
                                                <span class="button-text"><a href="<?php echo get_field('telefon');?>"><?php echo get_field('telefon');?></a></span>
                                              </button>
                                            </div>

                            </address>

                        </div>
                     </div>

                   </div>
                  </div>
                  	 <?php  endwhile; ?>
					<?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="customer-product clearfix">
        <div class=" cus-text row">
            <div class="col-sm-8 col-sm-offset-2">
           <?php $persion = get_page(53);
           echo $persion->post_content;
           ?>
            </div>

        </div>
        <div class="row project-outer">


           	<?php $event_query = new WP_Query(array('post_type'  => 'personlig_begran', 'posts_per_page' => '4',)        );
             while ( $event_query->have_posts() ) : $event_query->the_post(); ?>
            <div class="col-md-3 col-xs-6">
                <div class="project-box">
                    <div class="project-pic">
                    	<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
                        <img src="<?php echo $image[0]; ?>" alt="project">
                    </div>
                    <div class="project-inner">
                        <h3><a href="<?php echo get_field('personlig_begran');  ?>"><?php the_title(); ?></a></h3>
                        <p><?php echo wp_trim_words( get_the_content(), 20 );?></p>
                        <div class="arrow-link">
                            <a href="<?php echo get_field('personlig_begran');  ?>" class="project-next"><img src="<?php bloginfo('template_directory'); ?>/images/arrow.png" alt="arrow"></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
		<?php wp_reset_postdata(); ?>

        </div>
    </div>

</div>
<div class="info-user" id="om-oss-content">
    <div class="container">
       <div class="row">
           <div class="col-sm-4">
               <div class="project-box">
                  <div class="project-inner pro-marg">

                  <p> <?php $review_details = get_page(14);
			           echo $review_details->post_content;
			           ?></p>
                  </div>
               </div>
           </div>
           <div class="col-sm-8">
               <div class="row project-addrss">
            <?php $query_partner = new WP_Query('page_id=14');
  		  	  			   if( $query_partner->have_posts() ) : $query_partner->the_post(); ?>
                            <?php
								if( have_rows('contact_persian_details') ): while ( have_rows('contact_persian_details') ) : the_row();
								if( get_row_layout() == 'contact_persian_details_sub' ):
							?>
                   <div class="col-md-4 col-xs-6">
                       <div class="project-box">
                           <div class="project-inner">
                               <div class="project-admin">
                                   <img src="<?php echo get_sub_field('image'); ?>" alt="user" />
                               </div>
                               <h3><?php echo get_sub_field('name'); ?></h3>
                               <h4><?php echo get_sub_field('designation'); ?></h4>
                               <p><i class="fa fa-mobile" aria-hidden="true"></i>  <?php echo get_sub_field('mobile_number'); ?></p>
                               <p><img src="<?php bloginfo('template_directory'); ?>/images/phone.png" alt="phone" />  <?php echo get_sub_field('phone_number'); ?></p>
                               <p><a href="mailto: <?php echo get_sub_field('email_id'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a></p>
                           </div>
                       </div>
                   </div>
  <?php
					       endif;
					   endwhile;
					endif;
					?>
                    <?php endif; wp_reset_postdata(); ?>

               </div>



              <div class="row project-addrss add-info">
              	 <?php $query_partner = new WP_Query('page_id=14');
				 $awicn=0;
  		  	  			   if( $query_partner->have_posts() ) : $query_partner->the_post(); ?>
                            <?php
								if( have_rows('award_details1') ): while ( have_rows('award_details1') ) : the_row();
								if( get_row_layout() == 'award_details1' ):
							?>

                  <div class="col-xs-6">
                      <div class="project-box">
                          <div class="project-inner">
                              <h3><?php
                              $awicn++ ;
                              	switch ($awicn) {
						    case "1":
								$cinmg= 'info-1.png';
						        //echo "Your favorite color is red!";
						        break;
						    case "2":
								$cinmg= 'info-2.png';

						        break;
						    case "3":
								$cinmg= 'info-3.png';

						        break;
								case "4":
								$cinmg= 'info-4.png';

						        break;
						    default:
						       $cinmg= 'info-4.png';
						}?>
                              	<img src="<?php bloginfo('template_directory'); ?>/images/<?php echo $cinmg ; ?>" alt="" />
                              	<?php echo get_sub_field('title'); ?> </h3>
                              <p><?php echo get_sub_field('content'); ?></p>
                          </div>
                      </div>
                  </div>

                   <?php
					       endif;
					   endwhile;
					endif;
					?>
                    <?php endif; wp_reset_postdata(); ?>

                  <!-- <div class="col-xs-6">
                      <div class="project-box">
                          <div class="project-inner">
                              <h3><img src="<?php bloginfo('template_directory'); ?>/images/info-2.png" alt="" /> Borgerlig begravning</h3>
                              <p>Nulla tempus dolor neque, ac dapibus nisl luctus ac. In hac habitasse.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-xs-6">
                      <div class="project-box">
                          <div class="project-inner">
                              <h3><img src="<?php bloginfo('template_directory'); ?>/images/info-3.png" alt="" /> Bouppteckning</h3>
                              <p>Nulla tempus dolor neque, ac dapibus nisl luctus ac. In hac habitasse.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-xs-6">
                      <div class="project-box">
                          <div class="project-inner">
                              <h3><img src="<?php bloginfo('template_directory'); ?>/images/info-4.png" alt="" /> Priser</h3>
                              <p>Nulla tempus dolor neque, ac dapibus nisl luctus ac. In hac habitasse.</p>
                          </div>
                      </div>
                  </div> -->

              </div>
            </div>
       </div>
    </div>
</div>

<style type="text/css">


</style>
<script>
	jQuery(document).ready(function($){


			jQuery('.konta-link > a,.om-oss > a').click(function(e){

				e.preventDefault();
			});


			jQuery('.konta-link').click(function(){

	    			var topofset;
	    			setTimeout(function(){

	    					var n=window.location.pathname;
			history.pushState('', '', n);

	    			},100);


			var redr='';

			if($(this).hasClass('ssr1') && $('div').hasClass('vara-glry'))
			{
				redr='.scrl-2';
				topofset=150;
			}

			if($(this).hasClass('ssr2') && $('div').hasClass('vara-glry'))
			{
				topofset=200;
			redr='.scrl-1';
			}

				if($(this).parents('.page').hasClass('home'))
			{
				topofset=70;
			redr='.info-area';
			}

			if(redr !='')
			{


			 jQuery('html, body').animate({
	        scrollTop: jQuery(redr).offset().top-topofset
	    }, 500);

	    		}

	    		});



			$(window).scroll(function(){
	    		var scrl=jQuery('.info-area').offset().top-70;
	    		var max=scrl+jQuery('.info-area').height();

	    		if($(this).scrollTop() >=scrl && max >=$(this).scrollTop())
	    		{
	    			$('.konta-link').addClass('current_page_item');


	    		}

	    		else
	    		{
	    			$('.konta-link').removeClass('current_page_item');
	    		}
	    	});



			$(window).scroll(function(){
	    		var scrl=jQuery('.info-user').offset().top-117;
	    		var max=scrl+jQuery('.info-user').height();

	    		if($(this).scrollTop() >=scrl && max >=$(this).scrollTop())
	    		{
	    			$('.om-oss').addClass('current_page_item');


	    		}

	    		else
	    		{
	    			$('.om-oss').removeClass('current_page_item');
	    		}
	    	});



function new_map( $el ) {

	// var
	var $markers = $el.find('.marker');


	// vars
	var args = {
		zoom		: 15,
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

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

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

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

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
	    map.setZoom( 15 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/
// global var

	// $('.acf-map').each(function(){
//
		// // create map
		// map = new_map( $(this) );
//
// });
//map = new_map( $('.acf-map:eq(0)') );

$('.nav-tabs > li > a').click(function(){
	var map = null;
	var idx=$(this).parent().index();

  			console.log(idx);

	setTimeout(function(){
		if( ! $('.acf-map:eq('+idx+')').find('div').hasClass('gm-style') && idx!=0 )
		{

			map = new_map( $('.acf-map:eq('+idx+')') );
		}

	},200);
});




			jQuery('.tab-box > ul > li:first > a').click();


setTimeout(function(){

	map = new_map( $('.acf-map:eq('+0+')') );

	},400);

});
</script>

<?php get_footer(); ?>
