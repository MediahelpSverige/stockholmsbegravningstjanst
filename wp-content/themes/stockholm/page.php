<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<section class="page_all_outer">
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
</section>
<?php get_footer(); ?>
