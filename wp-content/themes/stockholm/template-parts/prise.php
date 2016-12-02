<?php
/**
 * Template Name: Prise
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

<section class="inner-page no-header">

	<div class="contact topgap-inner priser-content">
		<div class="container page-top">
			<div class="row" id="top-row">
				<div class="col-sm-9">
			<div id="top-text">
			<?php echo apply_filters( 'the_content', $post->post_content );  ?>
			</div>

				<?php $query_partner = new WP_Query('page_id=10');
			 if( $query_partner->have_posts() ) : $query_partner->the_post(); ?>
			 <?php

			 if( have_rows('kontakt') ): while ( have_rows('kontakt') ) : the_row(); ?>

			 <?php if( get_row_layout() == 'kontaktperson_layout' ): ?>
	 </div>
	 <div class="col-sm-3">
				 <div class="right_contact_field">
					 <div class="border-wrap">

				 <img src="<?php echo get_sub_field('kontaktperson'); ?>">
				 <h3 id="kont_titel"><?php echo get_sub_field('titel'); ?></h3>
				 <h2 id="kont_tel"><?php echo get_sub_field('telefon'); ?></h2>
				 <p id="kont_text"><?php echo get_sub_field('text'); ?></p>
			 </div>
		 </div>
</div>
</div>
			 <?php endif;

 endwhile;

 endif;

			  ?>
				<div class="outer-loop">
				<?php
				$count = 0;
								if( have_rows('prise_description_area') ): while ( have_rows('prise_description_area') ) : the_row();
								$count++;

								if( get_row_layout() == 'prise_description_area_sub' ):
									 $form_code=get_sub_field('form_code');
							?>
						<div class="section-border">

			<div class="row" id="row-<?php echo $count; ?>">
				<div class="col-sm-8 priser-txt">

					<div class="priser-text-each">
						<h3 id="heading-<?php echo $count; ?>" class="subheding"><?php echo get_sub_field('prise_title'); ?></h3>
						<p><?php echo get_sub_field('prise_description'); ?></p>
						<div class="tyotalblog-wrap">
							<div class="tyotalblog">
								  <?php
								if( have_rows('prise_listing') ): while ( have_rows('prise_listing') ) : the_row();
								if( get_row_layout() == 'prise_listing_sub' ):


							?>
								<div class="tyotalblog-row">
									<div class="tyotalblog-cell"><?php echo get_sub_field('name'); ?></div>
									<div class="tyotalblog-cell"><?php echo get_sub_field('sub_name'); ?></div>
									<div class="tyotalblog-cell"><?php echo get_sub_field('amount'); ?></div>
								</div>
								 <?php
					       endif;
					   endwhile;
					endif;
					?>
							</div>
						</div>
					</div>


				</div>
				<div class="col-sm-4 priser-right">
					<div class="priser-right-block">
						<div class="contactForm">
							<?php echo do_shortcode($form_code); ?>
	                        <!-- <div class="fromRow">
	                            <input type="text" class="form-control" placeholder="Namn">
	                        </div>
	                        <div class="fromRow">
	                            <input type="text" class="form-control" placeholder="E-post">
	                        </div>
	                        <div class="fromRow">
	                            <input type="text" class="form-control" placeholder="Ämne">
	                        </div>
	                        <div class="fromRow">
	                           <textarea class="form-control" placeholder="Meddelande"></textarea>
	                        </div>
	                        <div class="fromRow">
	                          <input type="submit" class="btn btn-submit" value="Skicka">
	                        </div> -->
	                    </div>
	                </div>

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
</section>

<?php get_footer(); ?>



<script>
	$(document).ready(function(){

		$('.section-border').each(function(){

$(this).find('input[name="sub"]').attr('type','hidden');
				$(this).find('input[name="sub"]').val($(this).find('.subheding').text());

		});




	});
</script>
