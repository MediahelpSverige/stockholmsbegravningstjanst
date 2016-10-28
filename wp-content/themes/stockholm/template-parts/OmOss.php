<?php
/**
 * Template Name: Om Oss
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

	<div class="contact topgap-inner priser-content">
		<div class="container">
			<div class="row omouter">
				<h2><?php the_title(); ?></h2>
           <div class="col-sm-12 ommoss">
               <div class="row project-addrss">
            <?php $query_partner = new WP_Query('page_id=63');
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
                               <p><a href="mailto:jacob@mediahelp.se"><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo get_sub_field('email_id'); ?></a></p>
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
               
               
               
            
            </div>
       </div>
    </div>
</div>


<?php get_footer(); ?>
