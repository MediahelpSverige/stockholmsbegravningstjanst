<?php
/**
 * Template Name: Tab Page
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

<?php
$name=$_REQUEST['imgcnt'];
echo $name;
?>
<input type="hidden" name="imcn" id="imcnid" value="<?php echo $name; ?>" />
<script>
//alert();
 var cntnum = "<?php print $name; ?>";
	//alert(cntnum);
</script>

<div class="inner-page no-header">

    <div class="tab-top-section">
        <div class="container">
            <div class="tab-top-inner">
              <?php while(have_posts()): the_post();
              	    the_content();
                    endwhile;
              	?>
            </div>
        </div>
    </div>

    <div class="tab-section">
        <div class="container">
            <ul class="tab-nav">
                <li class="tab-anc active"><a href="#tab1">Anmalan till minnesstund</a></li>
                <li class="tab-anc"><a href="#tab2"><?php $sendflower = get_page(137); echo $sendflower->post_title;  ?></a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-content-each active" id="tab1">
                    <div class="tab-inner">
                        <div class="tab-form">
                            <div>
                               <?php echo do_shortcode('[contact-form-7 id="424" title="ANMALAN TILL MINNESSTUND"]
'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content-each" id="tab2">
                    <div class="tab-inner">
                        <header>
                          <p><?php echo $sendflower->post_content; ?></p>
                        </header>
                        <div class="flower-carousel">
                        	<?php

                          $blommor = get_post_meta( 18, 'blommor', true );
                              foreach( $blommor as $blomma){

                                //print_r($blomma);


                                $src = wp_get_attachment_image_src($blomma['blommor-bild'], 'medium');


                          	?>
                            <div class="item">
                                <div class="flower-car select-class">
                                    <figure><img src="<?php echo $src[0]; ?>" alt="flower" /></figure>
                                    <h3> <?php echo $blomma['blommor-text']; ?></h3>
                                </div>
                            </div>
<?php }; ?>
                        </div>
                        <div class="tab-form">
                            <div>
                                <?php echo do_shortcode('[contact-form-7 id="135" title="Skicka begravningsblommor"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<script>
	jQuery(document).ready(function($){
		$('body').on('click','.submit-controls:last',function(){
			var obj=$(this);
				var url = (document.domain+document.location.pathname).split('/tab/');
				var redi_url= 'http://'+url[0]+'/thank-you';
			setTimeout(function(){

					var non_val= obj.parents('form').find('.wpcf7-validation-errors').text();
					var val = obj.parents('form').find('.wpcf7-mail-sent-ok').text();
					if(val !=''){

						window.location.replace(redi_url);
					}
				},1000);

		});

	});


</script>

<?php get_footer(); ?>
