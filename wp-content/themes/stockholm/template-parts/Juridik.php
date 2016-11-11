<?php
/**
 * Template Name:Juridik
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(2); ?>

<div class="inner-page">
	<div class="container page-top">

  		<div class="vara-btm scrl-1 pdng0">

  			<?php
      			global $post; $post = get_post( 193 , OBJECT ); setup_postdata( $post );
      		?>
					<div class="law-image" style="background-image:url('<?php the_post_thumbnail_url('full'); ?>')"></div>
					<div class="law-content">
      		<h3><?php echo get_the_title(193); ?></h3>
	      <?php
	      	echo apply_filters( 'the_content', $post->post_content );
	      	wp_reset_postdata();
	      ?>
			</div>
			<div class="clearfix"></div>
      	</div>
   		<div class="vara-btm scrl-2 pdng0">

	  	  	<hr>
			<?php
				global $post; $post = get_post( 195 , OBJECT ); setup_postdata( $post );
			?>
			<div class="law-image" style="background-image:url('<?php the_post_thumbnail_url('full'); ?>')"></div>
			<div class="law-content">
      	<h3><?php echo get_the_title(195); ?></h3>
      	<?php
      		echo apply_filters( 'the_content', $post->post_content );
      		wp_reset_postdata();
      	?>
			</div>
			<div class="clearfix"></div>
		</div>
       	<div class="vara-btm scrl-3 pdng0">

  	  		<hr>
      		<?php
      			global $post; $post = get_post( 197 , OBJECT ); setup_postdata( $post );
      		?>
					<div class="law-image" style="background-image:url('<?php the_post_thumbnail_url('full'); ?>')"></div>
					<div class="law-content">
      		<h3><?php echo get_the_title(197); ?></h3>
      		<?php
      			echo apply_filters( 'the_content', $post->post_content );
      			wp_reset_postdata();
      		?>
      	</div>
				<div class="clearfix"></div>
			</div>
  	 	<div class="vara-btm scrl-4">

  	  		<hr>
      		<?php
      			global $post; $post = get_post( 199 , OBJECT ); setup_postdata( $post );
      		?>
					<div class="law-image" style="background-image:url('<?php the_post_thumbnail_url('full'); ?>')"></div>
					<div class="law-content">
      		<h3><?php echo get_the_title(199); ?></h3>
      		<?php
      			echo apply_filters( 'the_content', $post->post_content );
      			wp_reset_postdata();
  			?>
			</div>
						<div class="clearfix"></div>
      </div>

    </div>
</div>

<script>
	jQuery(document).ready(function($){
		$('.bouppteckning > a').click(function(){

			$('html, body').animate({
	        scrollTop: $('.scrl-1').offset().top -190
	    }, 500);

		});

		 		$('.arvskifte > a').click(function(){

			$('html, body').animate({
	         scrollTop: $('.scrl-2').offset().top -170
	    }, 500);

		});

		 $('.fastighetsförsäljning > a').click(function(){

			$('html, body').animate({
	          scrollTop: $('.scrl-3').offset().top -170
	    }, 500);

		});


		 $('.testamente > a').click(function(){

			$('html, body').animate({
	          scrollTop: $('.scrl-4').offset().top -120
	    }, 500);

		});

	});

</script>


<?php get_footer(); ?>
