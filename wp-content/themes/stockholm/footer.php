<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<!--footer start-->
<script src="http://localhost:35729/livereload.js"></script>
<footer class="footer">

     <div class="container">
         <div class="footerTop clearfix">
             <div class="footerData">
                 <div class="footerDesc">
                  <?php $om_oss = get_page(425); ?>
                     <!-- <h4><?php echo $om_oss->post_title;  ?></h4> -->
                     <?php echo $om_oss->post_content; ?>
                 </div>
             </div>

             <div class="footerMenu">
                     <h4>Våra tjänster</h4>
                     <?php
                            wp_nav_menu( array(
                                'theme_location' => 'footer',
                                'menu_class'     => '',
                                'container' => 'none',
                             ) );
                        ?>

             </div>

             <div class="footerContact">
                 <h4>Kontakta oss</h4>

                 <address>
                    <?php echo get_field('address',16); ?>

                     <!-- <a href="callto:08270370">Telefon - <?php ///echo get_field('telefon',16); ?></a> -->
                 </address>

                 <!-- <a href="javascript:void(0)">Fax -  <?php //echo get_field('fax',16); ?></a> -->
             </div>
         </div>

         <div class="footerBottom">
             <p class="copyTxt"><?php echo get_theme_mod( 'copyright_textbox', 'No copyright information has been saved yet.' ); ?>
</p>
             <div class="socialFooter">
                 <a target="_blank" href="<?php echo get_theme_mod( 'facebook_url', 'No copyright information has been saved yet.' ); ?>" class="fbIcon"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                 <a target="_blank" href="<?php echo get_theme_mod( 'linkdIN_URL', 'No copyright information has been saved yet.' ); ?>" class="linkdIcon"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
             </div>
         </div>
     </div>

</footer>
<?php wp_footer(); ?>
<!--footer end-->

<!--page script goes here-->

<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.11.1.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/js/custom.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAFCJUiH4RVlSpYZWVtNyHu6GLEull_9E"></script>



<script>
	jQuery(document).ready(function($){
    console.log($('.bannerSlide'));
    $('.bannerSlide').owlCarousel({
         loop:true,
         nav:false,
         autoplayTimeout:5000,
         autoplay:true,
         //dots: true,
         items: 1,
         responsive:{
              991:{
                 dots: true
             },
              0:{
                 dots: false
             }
         }
     });
		var has;
		has=window.location.hash;
			var n=window.location.pathname;
			history.pushState('', '', n);
			var redr='';
			var topofset;
			if(has=='#blommer')
			{
				redr='.scrl-2';

				topofset=150;
			}
			if(has=='#begravning')
			{
				redr='.scrl-1';

				topofset=200;
			}

				if(has=='#kontakta')
			{
				redr='.info-area';
				topofset=70;
			}

			if(redr !='')
			{


			 jQuery('html, body').animate({
	        scrollTop: jQuery(redr).offset().top-topofset
	    }, 500);

	    		}


	    		jQuery('.footer-link').click(function(){
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






	});
</script>


<script>
    $(document).ready(function() {


        //        fancybox
                $(".vara-box a").fancybox({
                    fitToView: false,
                    beforeShow: function(){

                      $(".fancybox-image").css({
                      "width": 500,
                      "height": 500,
                      });

                      this.width = 500,
                      this.height = 500

              }
    });

    $(".vara2 a").fancybox({
        fitToView: false,
        beforeShow: function(){

          $(".fancybox-image").css({
          "width": 500,
          "height": "auto",
          });

          this.width = 500,
          this.height = 250

  }
});

  });
</script>


</body>
</html>
