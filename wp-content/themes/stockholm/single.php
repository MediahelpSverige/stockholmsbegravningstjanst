<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
 	<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>     

<?php if(!empty($image[0])){?>
<section class="bannerout">

    <div class="banout">

                    				
            <img src="<?php echo $image[0]; ?>" alt="" />
              
        </div>

</section>
<?php } ?>
<div class="body-detail">
    <div class="container">
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10">
            	<h3 class="all_page_title"><?php the_title(); ?></h3>
            	<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
		the_content();
               endwhile;
		?>
           
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
