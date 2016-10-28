<?php
/**
 * Template Name: Våra Begravning
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(1); ?>



<div class="inner-page">
 
    <div class="container">
         <div class="row page-top">
            <div class="col-sm-8 begra scrl-1">
           <?php //$pagecont = get_page($post->ID);
              	 echo apply_filters( 'the_content', $post->post_content ); 
              	
              	?>
            </div>
            <?php if(get_field('right_text_area1')){ ?>
            <div class="col-sm-4 begra-r">
            	<?php if(get_field('right_image')){?>
                <div class="begra-pic"><img src="<?php echo get_field('right_image'); ?>" alt="begra" /></div>
                <?php } ?>
                <?php echo get_field('right_text_area1'); ?>
            </div>
<?php } ?>
</div>
<?php
$cntimg=0; 
 $data = damiu_query_by_id($post->ID); 

 if(have_damiu() >1){
  ?>
        <div class="row vara-btm scrl-2" id="p-Blommor">
        <div class="col-sm-7 vara-glry">
        	
            <h3>Vara Blommor</h3>
            <ul class="vara-list vara-row clearfix">
            	
             <?php while(have_damiu()): the_damiu(); 
             	?>
             	 
                <li>
                    <div class="vara-box">
                        <div class="vara-box-pic">
                        	
                            <a href="<?php  damiu_image(); ?>" data-id="" title=" <?php echo damiu_text(); ?>
                            	<form action='<?php echo get_the_permalink(131); ?>#tab2' class='galform' method='POST' >
                            	<p class='pricea'>
                            		<a  class='bestimg btn-default-small' href='javascript:void(0);' >Beställ nu</a></p>
                            		<input type='hidden' name='imgcnt' value='<?php echo $cntimg ;?>' />
                            		  </form>
                            		 ">
                            		<img src="<?php  damiu_image(); ?>" alt="" /></a>
                            		
                        </div>
                        <span><a href="javascript:void();"><?php echo damiu_title() ?></a></span>
                    </div>
                </li>
               
                	
              
                 <?php $cntimg++ ;  endwhile; ?>
				<?php wp_reset_postdata(); ?>
               
            </ul>
           
           <?php echo get_field('below_section'); ?>
        </div>
        <?php if( get_field('right_text_area2') ){ ?>
        <div class="col-sm-5 begra">
           <?php echo get_field('right_text_area2'); ?>
        </div>
        <?php } ?>
    </div>
     <?php } ?>
     
     <!-- ///kistore
    -->
    <?php
     // $kistorepage = new WP_Query(array( 'pagename' => 'kistor' ));
// 	 
	  // while ( $kistorepage->have_posts() ) : $kistorepage->the_post(); 
	  
	  global $post; $post = get_post( 191 , OBJECT ); setup_postdata( $post ); 
 
 $data = damiu_query_by_id($post->ID); 

  ?><hr>
        <div class="row vara-btm scrl-3" id="p-kistor">
        	
        <div class="col-sm-7 vara-glry">
        	
            <h3><?php  //the_title() ;
             echo get_the_title(191); ?></h3>
            <ul class="vara-list vara-row clearfix">
            	
             <?php while(have_damiu()): the_damiu(); 
             	?>
             	 
                <li>
                    <div class="vara-box">
                        <div class="vara-box-pic">                        	
                            <a href="<?php  damiu_image(); ?>" data-id="" title=" <?php echo damiu_text(); ?> ">
                            		<img src="<?php  damiu_image(); ?>" alt="" /></a>                            		
                        </div>
                        <span><a href="javascript:void();"><?php echo damiu_title() ?></a></span>
                    </div>
                </li>
               
                	
              
                 <?php $cntimg++ ;  endwhile; ?>
				<?php wp_reset_postdata(); ?>
               
            </ul>
           
           <?php echo get_field('below_section',191); ?>
        </div>
        <?php if( get_field('right_text_area2',191) ){ ?>
        <div class="col-sm-5 begra">
           <?php echo get_field('right_text_area2',191); ?>
        </div>
        <?php } ?>
    </div>
     <?php 
     //endwhile;  wp_reset_query(); ?>
      <!-- <div class="row vara-btm scrl-3">
      	  <hr>
      		<?php
      	global $post; $post = get_post( 191 , OBJECT ); setup_postdata( $post ); 
      	
       
      	?>
      	<h3><?php echo get_the_title(191); ?></h3>   	
      <?php
      echo apply_filters( 'the_content', $post->post_content ); 
	  
      wp_reset_postdata();
      ?>
      </div> -->
     
    </div>
</div>


<script>
	jQuery(document).ready(function($){
		jQuery('body').on("click",".bestimg",function(){
			var obj=jQuery(this);
			
		
 obj.parents('.galform').submit();		
   //  var form = jQuery(this).parent("form");
     //form.submit();
   });
		
	
		$('.begravning > a').click(function(){
			
			$('html, body').animate({
	        scrollTop: $('.scrl-1').offset().top - 196
	    }, 500);
	    
		});
		 
		 		$('.blommor > a').click(function(){
			
			$('html, body').animate({
	         scrollTop: $('.scrl-2').offset().top - 170
	    }, 500);
	    
		});
		 
		 $('.kistore > a').click(function(){
			
			$('html, body').animate({
	          scrollTop: $('.scrl-3').offset().top - 170
	    }, 500);
	    
		});
			
	});
	
</script>
<script>
	jQuery(document).ready(function(){
		var has;
		has=window.location.hash;
			var n=window.location.pathname;
			
			var mhas=has.split('#');
			console.log('#p-'+mhas[1]);
			 jQuery('html, body').animate({
	        scrollTop: jQuery('#p-'+mhas[1]).offset().top-170
	    }, 500);
	    
	     setTimeout(function(){history.pushState('', '', n);},00);		
	});
</script>
<?php get_footer(); ?>
