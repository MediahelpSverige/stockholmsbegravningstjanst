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
<link href="<?php bloginfo('template_url'); ?>/js/lightbox2/dist/css/lightbox.min.css" rel="stylesheet" type="text/css"/>
<script src="<?php bloginfo('template_url'); ?>/src/js/katalog.js"> </script>

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

  ?>
        <div class="row vara-btm scrl-2" id="p-Blommor">
        <div class="col-sm-7 vara-glry">

          <div id="flowers-slider">

            <ul id="flowers-list" class="vara-list vara-row clearfix">

             <?php
             $blommor = get_post_meta( $post->ID, 'blommor', true );
                 foreach( $blommor as $blomma){


             	?>

                <li <?php if($cntimg >= $imgMaxCount){ echo 'class="hidden"'; } ?>>
                    <div class="vara-box">
                        <div class="vara-box-pic">

                          <?php
                            $src = wp_get_attachment_image_src($blomma['blommor-bild'], 'full');


                          ?>

                            <a class="fancyboxgroup" href="<?php echo $src[0]; ?>" rel="group1" data-id="" data-lightbox="blommor" data-title="<?php echo $blomma['blommor-titel']; ?>
                              <form action='<?php echo get_the_permalink(131); ?>#tab2' id='order' class='galform' method='POST' >
                            	<p class='pricea'>
                            		<button class='bestimg btn-default-small' onclick='submit();'>Beställ nu</button></p>
                            		<input type='hidden' name='imgcnt' value='<?php echo $cntimg ;?>' />
                            		  </form>">
                            		<img src="<?php echo  $src[0]; ?>" alt="" /></a>

                        </div>
                        <span><a href="javascript:void();"><?php echo $blomma['blommor-text']; ?></a></span>
                    </div>
                </li>



                 <?php $cntimg++ ;
               } ?>
				<?php wp_reset_postdata(); ?>



            </ul>
            <div class="product-pagination">
              <div id="next" class="nav-arrow">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </div>
              <div id="previous" class="nav-arrow">
                <span class="glyphicon glyphicon-chevron-left"></span>
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
    </div>
     <?php } ?>

     <!-- ///kistore
    -->
    <?php
     // $kistorepage = new WP_Query(array( 'pagename' => 'kistor' ));
//
	  // while ( $kistorepage->have_posts() ) : $kistorepage->the_post();

	  global $post;
    $query = get_posts(
    array(
        'name'      => 'kistor',
        'post_type' => 'page'
    )
);


    setup_postdata( $query[0]->ID );




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
            <ul id="kistor-list" class="vara-list vara-row clearfix">

             <?php

          $kistor = get_post_meta( $query[0]->ID, 'kistor1', true );
              foreach( $kistor as $kista){


             	?>

                <li <?php if($paginationv >= 9){ echo 'class="hidden"'; } ?>>
                    <div class="vara-box vara2">
                        <div class="vara-box-pic">
                          <?php
                            $src = wp_get_attachment_image_src($kista['kistor-bild'], 'full');
                          ?>
                            <a class="fancyboxgroup" href="<?php echo $src[0]; ?>" rel="group1" data-lightbox="kistor" data-title="<?php echo $kista['kistor-text']; ?>">
                            		<img src="<?php echo  $src[0]; ?>" alt="" /></a>
                        </div>
                        <span><a href="javascript:void();"><?php echo $kista['kistor-text']; ?></a></span>
                    </div>
                </li>



                 <?php $paginationv++; $cntimg++;  } ?>
				<?php wp_reset_postdata(); ?>

            </ul>
            <div class="product-pagination">
              <div id="nextkistor" class="nav-arrow">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </div>
              <div id="prevkistor" class="nav-arrow">
                <span class="glyphicon glyphicon-chevron-left"></span>
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



  function submit() {
     $('#order').submit()
     console.log('submit');
    }



	jQuery(document).ready(function($){





var blommorElem = $('#kistor-slider li');
var blommorArray = [];
var blommorDisplayElement = document.getElementById("flowers-list");

    //var blommorKatalog = new katalog(blommorElem, blommorArray, blommorDisplayElement);
    //var kistorKatalog = new katalog();
    //vara2 kistor

    // our variable holding starting index of this "page"
var index2 = 0;

    // display our initial list
    //displayNext();

    //slideshow for the flower
    var maxKistorCount = 9;
    var kistorarray = []

    console.log();



    $('#kistor-slider li').each( function( index ) {
      kistorarray.push(this);
    });

    //Pagination nect
    $('#nextkistor').click(function(){
      console.log(currentPageKistor);

      if(currentPageKistor == numberOfPagesKistor){

    }else{
      displayNextKistor();
    }

    });

    $('#prevkistor').click(function(){

      console.log(currentPageKistor);

      if(currentPageKistor == 1){

    }else{
      displayPrevKistor();

    }

    });
    // our variable holding starting index of this "page"
var index = 0;

//Pagination nect
$('#next').click(function(e){
  console.log(currentPage);
  if(currentPage == numberOfPages){

}else{
  nextPage();
}

});

$('#previous').click(function(e){

  console.log(currentPage);

  if(currentPage == 1){

}else{
  previousPage();

}

});

    var maxFlowerCount = 9;
    var flowersarray = []
    console.log($('#p-Blommor .vara-glry ul')[0]);
    $('#p-Blommor .vara-glry li').each( function( i ) {
      flowersarray.push(this);
    });

    var list = flowersarray;
    var pageList = new Array();
    var currentPage = 1;
    var numberPerPage = 9;
    var numberOfPages = 0;


var numberOfPages = getNumberOfPages();

console.log(numberOfPages);

function nextPage() {
    currentPage += 1;
    loadList();
}

function previousPage() {
    currentPage -= 1;
    loadList();
}

function loadList() {
    var begin = ((currentPage - 1) * numberPerPage);
    var end = begin + numberPerPage;

    pageList = list.slice(begin, end);
    console.log(pageList);
    drawList();
}

function getNumberOfPages() {
  return Math.ceil(list.length / numberPerPage);
}

function displayNext() {

    currentPage += 1;
    loadList();
  }

function displayPrev() {
    currentPage -= 1;
    loadList();
}

function drawList() {
    document.getElementById("flowers-list").innerHTML = "";
    for (r = 0; r < pageList.length; r++) {
        document.getElementById("flowers-list").innerHTML += "<li>" + pageList[r].innerHTML + "</li>";
    }
}



///functions for kistor
var listKistor = kistorarray;
var pageListKistor = new Array();
var currentPageKistor = 1;
var numberPerPageKistor = 6;
var numberOfPagesKistor = 0;

var numberOfPagesKistor = getNumberOfPagesKistor();


function loadKistor() {
    var begin = ((currentPageKistor - 1) * numberPerPageKistor);
    var end = begin + numberPerPageKistor;

    pageListKistor = listKistor.slice(begin, end);
    console.log(pageListKistor);
    drawListKistor();
}

function getNumberOfPagesKistor() {
  return Math.ceil(listKistor.length / numberPerPageKistor);
}

function displayNextKistor() {
    currentPageKistor += 1;
    loadKistor();
  }

function displayPrevKistor() {
    currentPageKistor -= 1;
    loadKistor();
}

function drawListKistor() {
    document.getElementById("kistor-list").innerHTML = "";
    for (i = 0; i < pageListKistor.length; i++) {
        document.getElementById("kistor-list").innerHTML += "<li>" + pageListKistor[i].innerHTML + "</li>";
    }
}


function load() {
loadList();
loadKistor()
}

load();


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
