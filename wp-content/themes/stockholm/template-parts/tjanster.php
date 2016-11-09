<?php
/**
 * Template Name: Våra tjänster
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
$imgCount = 0;
$imgMaxCount = 9;
 $data = damiu_query_by_id($post->ID);

 if(have_damiu() >1){
  ?>
        <div class="row vara-btm scrl-2" id="p-Blommor">
        <div class="col-sm-7 vara-glry">

          <div id="flowers-slider">

            <ul class="vara-list vara-row clearfix">

             <?php while(have_damiu()): the_damiu();


             	?>

                <li <?php if($cntimg >= $imgMaxCount){ echo 'class="hidden"'; } ?>>
                    <div class="vara-box">
                        <div class="vara-box-pic">

                            <a class="fancyboxgroup" href="<?php  damiu_image(); ?>" rel="group1" data-id="" title=" <?php echo damiu_text(); ?>
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
            <div class="product-pagination">
              <div id="next" class="nav-arrow">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </div>
              <div id="prev" class="nav-arrow">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
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

          <?php if( get_field('right_text_area2',191) ){ ?>
          <div class="col-sm-5 begra">
             <?php echo get_field('right_text_area2',191); ?>
          </div>
          <?php } ?>

          <?php $paginationv = 0; ?>



        <div class="col-sm-7 vara-glry">
          <div id="kistor-slider">
            <ul class="vara-list vara-row clearfix">

             <?php while(have_damiu()): the_damiu();
             	?>

                <li <?php if($paginationv >= 9){ echo 'class="hidden"'; } ?>>
                    <div class="vara-box vara2">
                        <div class="vara-box-pic">
                            <a href="<?php  damiu_image(); ?>" rel="group2" data-id="" title=" <?php echo damiu_text(); ?> ">
                            		<img src="<?php  damiu_image(); ?>" alt="" /></a>
                        </div>
                        <span><a href="javascript:void();"><?php echo damiu_title() ?></a></span>
                    </div>
                </li>



                 <?php $paginationv++; $cntimg++;  endwhile; ?>
				<?php wp_reset_postdata(); ?>

            </ul>
            <div class="product-pagination">
              <div id="nextkistor" class="nav-arrow">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </div>
              <div id="prevkistor" class="nav-arrow">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>

           <?php echo get_field('below_section',191); ?>
        </div>

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

    //vara2 kistor

    // our variable holding starting index of this "page"
var index2 = 0;

    // display our initial list
    //displayNext();

    //slideshow for the flower
    var maxKistorCount = 9;
    var kistorarray = []
    $('#kistor-slider li').each( function( index ) {
      kistorarray.push(this);
    });

    //Pagination nect
    $('#nextkistor').click(function(){
      displayNext2();

    });

    $('#prevkistor').click(function(){
      displayPrev2();

    });



    //pagination for
  function displayNext2() {
    var list2 = $("#kistor-slider ul");
    var index2 = list2.data('index') % kistorarray.length || 0;



    // save next index - for next call
    list2.data('index', index2 + maxKistorCount);

    list2.html($.map(kistorarray.slice(index2, index2 + maxKistorCount), function(val){
      return '<li>' + val.innerHTML + '</li>';
    }).join(''));
  }

  function displayPrev2(){
    var list2 = $("#kistor-slider ul");
    var index2 = list2.data('index') % kistorarray.length || 0;



    // save prev index - for prev call
    list2.data('index', index2 - maxKistorCount);

    list2.html($.map(kistorarray.slice(index2, index2 - maxKistorCount), function(val){
      console.log(val);
      return '<li>' + val.innerHTML + '</li>';
    }).join(''));
  }





    // our variable holding starting index of this "page"
var index = 0;

    // display our initial list
    //displayNext();

    //slideshow for the flower
    var maxFlowerCount = 9;
    var flowersarray = []
    console.log($('#p-Blommor .vara-glry ul')[0]);
    $('#p-Blommor .vara-glry li').each( function( index ) {
      flowersarray.push(this);
    });

    //Pagination nect
    $('#next').click(function(){
      console.log('next');
      displayNext();

    });

    $('#prev').click(function(){
      console.log('prev');
      displayPrev();

    });



    //pagination for
  function displayNext() {
    var list = $("#p-Blommor .vara-glry ul");
    var index = list.data('index') % flowersarray.length || 0;



    console.log(index);

    // save next index - for next call
    list.data('index', index + maxFlowerCount);

    list.html($.map(flowersarray.slice(index, index + maxFlowerCount), function(val){
      console.log(val);
      return '<li>' + val.innerHTML + '</li>';
    }).join(''));
  }

  function displayPrev(){
    var list = $("#p-Blommor .vara-glry ul");
    var index = list.data('index') % flowersarray.length || 0;



    console.log(index);

    // save prev index - for prev call
    list.data('index', index - maxFlowerCount);

    list.html($.map(flowersarray.slice(index, index - maxFlowerCount), function(val){
      console.log(val);
      return '<li>' + val.innerHTML + '</li>';
    }).join(''));
  }



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
