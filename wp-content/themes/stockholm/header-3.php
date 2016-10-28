<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>			
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>

    <script>

var omoss;
omoss=0;
	  	if(window.location.hash=='#omoss')
{
	omoss=1;
var n=window.location.pathname;
	  history.pushState('', 'New Page Title', n);
	 
	  }
var tabe;	  
tabe=0;
	if(window.location.hash=='#tab2')
{
	tabe=1;
var n=window.location.pathname;
	  history.pushState('', 'New Page Title', n);
	 
	  }
	  
	  

	


</script>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<title>stockholmsbegravningsbyra</title>
    
    <!--favicon-->    
    <link rel="icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico" type="image/x-icon">
    <link rel="icon" type="<?php bloginfo('template_directory');?>/image/png" href="images/favicon.png">
      
    <!--meta tag-->  
    <meta name="description" content="" />
    <meta name="author" content="admin" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        
    <!--css file links-->    
	<link href="<?php bloginfo('template_directory');?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php bloginfo('template_directory');?>/css/fonts.css" rel="stylesheet" type="text/css"/>
	<link href="<?php bloginfo('template_directory');?>/css/owl.carousel.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_directory');?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php bloginfo('template_directory');?>/css/slick.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" rel="stylesheet" type="text/css"/>
        
    
	<link href="<?php bloginfo('template_directory');?>/css/custom.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_directory');?>/css/developer.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_directory');?>/css/responsive.css" rel="stylesheet" type="text/css" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--header start-->


<header class="header">
<nav class="navbar">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
          <img src="<?php header_image(); ?>" alt="" />
      </a>
    </div>
      <div class="contact-header">
         <span><?php echo get_theme_mod( 'header_txt', '' ); ?></span>
         
         <a href="callto:<?php echo get_theme_mod( 'phone', '' ); ?>">
             <span class="callIcon"><i class="fa fa-phone" aria-hidden="true"></i></span>
             <span class="hidden-xs"><?php echo get_theme_mod( 'phone', '' ); ?></span>
         </a>
     </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
      
      <div class="menu-listingHd clearfix">
      		<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'nav navbar-nav',
										'container' => 'none',
									 ) );
								?>
          <!-- <ul class="nav navbar-nav">
          
            <li><a href="#">Våra Begravning</a></li>
            <li><a href="#">Priser</a></li>
            <li><a href="#">Juridik</a></li>
            <li><a href="#">Om oss</a></li>
            <li><a href="#">Kontakta oss</a></li>
          </ul> -->
        
          <a class="goldenBtn" href="<?php echo get_the_permalink(131); ?>">Begravningsgäst</a>
    </div>
    </div><!-- /.navbar-collapse -->
      
  </div><!-- /.container-fluid -->
</nav>
    <div class="menu-top">
        <div class="container">
            <span><?php the_title(); ?></span>
           
        </div>
    </div>
</header>
<!--header end-->			
			
			
			
