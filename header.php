<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Eighties
 * @author Justin Kopepasah
 * @since 1.0.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <!-- Bootstrap -->
  <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.css" rel="stylesheet">
  <link href="<?php bloginfo('template_directory'); ?>/css/owl.theme.css" rel="stylesheet">
  <link href="<?php bloginfo('template_directory'); ?>/css/owl.transitions.css" rel="stylesheet">
  
  <link href="<?php bloginfo('template_directory'); ?>/css/config.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="header">

		  <!-- ========== TOP BAR START ========== -->

		  <div id="top-bar">
		    <div class="container">

		      <nav id="top-nav" role="navigation" class="navbar">
		        <div class="navbar-header">
		          <button data-target=".top-nav" data-toggle="collapse" class="navbar-toggle" type="button">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		        </div>
		        <div class="collapse navbar-collapse top-nav">
		          <ul class="nav navbar-nav">
		            <li><a href="about-us.html">About</a></li>
		            <li><a href="blog.html">Blog</a></li>
		            <li><a href="contact.html">Contact</a></li>
		          </ul>
		        </div><!-- /.navbar-collapse -->
		      </nav>

		    </div>
		  </div><!-- / #top-bar -->
<?php if (is_front_page()) { ?>
	</header>
	<!-- ========== MENU END ========== -->

	<!-- ========== SLIDER START ========== -->

	<section id="slider">
	  <div id="bs-carousel" class="carousel slide" data-ride="carousel">
	    <!-- Indicators -->
		<h1 class="logo">MS.KFT</h1>
	    <ol class="carousel-indicators">
	      <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
	      <li data-target="#bs-carousel" data-slide-to="1"></li>
	      <li data-target="#bs-carousel" data-slide-to="2"></li>
	    </ol>
	    <!-- Wrapper for slides -->
	    <div id="container" class="carousel-inner">
	      <div class="item active"><div class="main-carousel"><p class="main-carousel-large">You supply your own Ooos, Ahhhs and Eeeeees</p></div></div>
	      <div class="item"><div class="main-carousel">
			  <p class="main-carousel-large">Orgasm for Science!</p>
			  <p class="main-carousel-mini">portion of profits go to benefit STEM education</p></div></div>
	      <div class="item"><div class="main-carousel"><p class="main-carousel-large">Dirty Advice, Clean People</p><p class="main-carousel-mini">Read our blog</p></div></div>
	    </div>

	    <!-- Controls -->
	     </div>
	</section>
	
<?php }else{ ?>
		  <!-- ========== TOP BAR START ========== -->

		  <!-- ========== MENU START ========== -->

		  <nav id="main-nav">
		    <div class="navbar subpage_menu">
		      <div class="container">
		        <div class="navbar-header">
					<a href=""><h1>MS.KFT</h1></a>
					<a href="" id="frontend" class="menu_item"></a>
					<a href="" id="backend" class="menu_item"></a>
					<a href="" id="bath" class="menu_item"></a>
					<a href="" id="bondage" class="menu_item"></a>
		          </div>
		      </div>
		    </div>
		  </nav>

		</header>
<?php } ?>
		
		<div id="content" class="site-content">
			<?php if (is_front_page()) { ?>
				<section id="content">
				  <div class="container">

				    <div class="row ad-banners">  
				      <div class="col-sm-4">
				        <div class="lined"><a href="#"><img src="img/images/mskft_backend.png"></a></div>
				      </div>
				      <div class="col-sm-4">
				        <div class="lined" style="width:360px; height:124px; padding-top:15px; padding-left:75px; background: url(img/images/mskft_bath.png); margin-bottom:28px;"><a href="#"><h2>BATH</h2></a></div>
				        <div class="lined" style="width:360px; height:124px; padding-top:35px; padding-right:35px; background: url(img/images/mskft_bondage.png)"><a href="#"><h3>BONDAGE</h3></a></div>
				      </div>
				      <div class="col-sm-4">
				        <div class="lined"><a href="#"><img src="img/images/mskft_frontend.png"></a></div>
				      </div>
				    </div>

				    <div class="products-carousel products-small products">

				      <div class="banner">
				        <img src="img/images/30-off.png" alt="">
				      </div>

				      <div class="carousel">
				        <div>
				          <div class="product">
				            <div class="thumbnail">
				              <a href="#"><img src="http://placehold.it/204x204" alt=""></a>
				            </div>
				            <hr>
				            <div class="title">
				              <h3><a href="#">Reshape Panties</a></h3>
				              <p>by Jack &amp; Jones</p>
				            </div>
				          </div>
				        </div>
				        <div>
				          <div class="product">
				            <div class="thumbnail">
				              <a href="#"><img src="http://placehold.it/204x204" alt=""></a>
				            </div>
				            <hr>
				            <div class="title">
				              <h3><a href="#">Reshape Panties</a></h3>
				              <p>by Jack &amp; Jones</p>
				            </div>
				          </div>
				        </div>
				        <div>
				          <div class="product">
				            <div class="thumbnail">
				              <a href="#"><img src="http://placehold.it/204x204" alt=""></a>
				            </div>
				            <hr>
				            <div class="title">
				              <h3><a href="#">Reshape Panties</a></h3>
				              <p>by Jack &amp; Jones</p>
				            </div>
				          </div>
				        </div>
				        <div>
				          <div class="product">
				            <div class="thumbnail">
				              <a href="#"><img src="http://placehold.it/204x204" alt=""></a>
				            </div>
				            <hr>
				            <div class="title">
				              <h3><a href="#">Reshape Panties</a></h3>
				              <p>by Jack &amp; Jones</p>
				            </div>
				          </div>
				        </div>
				        <div>
				          <div class="product">
				            <div class="thumbnail">
				              <a href="#"><img src="http://placehold.it/204x204" alt=""></a>
				            </div>
				            <hr>
				            <div class="title">
				              <h3><a href="#">Reshape Panties</a></h3>
				              <p>by Jack &amp; Jones</p>
				            </div>
				          </div>
				        </div>
				        <div>
				          <div class="product">
				            <div class="thumbnail">
				              <a href="#"><img src="http://placehold.it/204x204" alt=""></a>
				            </div>
				            <hr>
				            <div class="title">
				              <h3><a href="#">Reshape Panties</a></h3>
				              <p>by Jack &amp; Jones</p>
				            </div>
				          </div>
				        </div>
				        <div>
				          <div class="product">
				            <div class="thumbnail">
				              <a href="#"><img src="http://placehold.it/204x204" alt=""></a>
				            </div>
				            <hr>
				            <div class="title">
				              <h3><a href="#">Reshape Panties</a></h3>
				              <p>by Jack &amp; Jones</p>
				            </div>
				          </div>
				        </div>
				        <div>
				          <div class="product">
				            <div class="thumbnail">
				              <a href="#"><img src="http://placehold.it/204x204" alt=""></a>
				            </div>
				            <hr>
				            <div class="title">
				              <h3><a href="#">Reshape Panties</a></h3>
				              <p>by Jack &amp; Jones</p>
				            </div>
				          </div>
				        </div>
				      </div>

				    </div>
				</section>
			<?php } ?>
