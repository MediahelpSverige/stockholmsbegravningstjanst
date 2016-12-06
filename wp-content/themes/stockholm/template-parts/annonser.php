<?php
/**
 * Template Name: Annonser
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

	<div class="contact topgap-inner priser-content">
		<div class="container">
			<div class="row omouter">
           <div class="col-sm-12 ommoss">
               <div class="row">
                 <?php the_content(); ?>
               </div>
               <!-- css -->
<link rel="stylesheet" href="http://client.memoriz.se/current/css/style.css"/>
<!-- js -->
<script src="http://client.memoriz.se/current/js/main.js"></script>
<script>angular.module('config').value('AGENCY_GROUP_TOKEN', '01Y7T7g');</script>
<!-- container of application -->
<div class="frontend-client-container minnesrummet-se-client" data-ng-app="minnesrummetClientApp"><div class="ui-view-content" data-ui-view="content"></div></div>

            </div>
       </div>
    </div>
</div>


<?php get_footer(); ?>
