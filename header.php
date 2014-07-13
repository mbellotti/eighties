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
	<meta name="google-site-verification" content="lEk4X4Q3oDyzz_vJXCyhjy590muEs0jWirFue5pBmro" />
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
					<li><a href="http://www.mskft.com/">Home</a></li> 
					<li><a href="http://shop.mskft.com/bestsellers.php">Best Sellers</a></li>
					<li><a href="http://shop.mskft.com/featured.php">Featured</a></li>
					<li><a href="http://shop.mskft.com/new_releases.php">New Products</a></li>
		            <li><a href="http://www.mskft.com/?p=12">About</a></li>
		            <li><a href="http://www.mskft.com/category/blog/">Blog</a></li>
		            <li><a href="http://shop.mskft.com/contact.php">Contact Us</a></li>
					<li><a href="http://shop.mskft.com/cart.php"><i class="fa fa-shopping-cart fa-lg"></i> Cart</a></li>
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
					<a href="http://www.mskft.com"><h1>MS.KFT</h1></a>
					<a href="http://www.mskft.com/?page_id=16" id="frontend" class="menu_item"></a>
					<a href="http://www.mskft.com/?page_id=17" id="backend" class="menu_item"></a>
					<a href="http://www.mskft.com/?page_id=35" id="bath" class="menu_item"></a>
					<a href="http://www.mskft.com/?page_id=39" id="bondage" class="menu_item"></a>
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
				        <div class="lined"><a href="http://www.mskft.com/?page_id=17"><img src="<?php bloginfo('template_directory'); ?>/img/images/mskft_backend.png"></a></div>
				      </div>
				      <div class="col-sm-4">
				        <div class="lined" style="width:360px; height:124px; padding-top:15px; padding-left:75px; background: url(<?php bloginfo('template_directory'); ?>/img/images/mskft_bath.png); margin-bottom:28px;"><a href="http://www.mskft.com/?page_id=35"><h2>BATH</h2></a></div>
				        <div class="lined" style="width:360px; height:124px; padding-top:35px; padding-right:35px; background: url(<?php bloginfo('template_directory'); ?>/img/images/mskft_bondage.png)"><a href="http://www.mskft.com/?page_id=39"><h3>BONDAGE</h3></a></div>
				      </div>
				      <div class="col-sm-4">
				        <div class="lined"><a href="http://www.mskft.com/?page_id=16"><img src="<?php bloginfo('template_directory'); ?>/img/images/mskft_frontend.png"></a></div>
				      </div>
				    </div>

				    <div class="products-carousel products-small products">

				      <!--<div class="banner">
				        <img src="<?php bloginfo('template_directory'); ?>/img/images/30-off.png" alt="">
				      </div>-->

				      <div id="second-carousel" class="carousel">
				        <div>
				          <div class="product">
				            <div class="thumbnail">
				              <a href="http://www.mskft.com/?tag=cribfromthegays"><img src="<?php bloginfo('template_directory'); ?>/images/cribfromgays.png" alt=""></a>
				            </div>
				            <hr>
				            <div class="title">
				              <h3><a href="http://www.mskft.com/?tag=cribfromthegays">Crib from the Gays</a></h3>
				              <p>by various</p>
				            </div>
				          </div>
				        </div>
				        <div>
				          <div class="product">
				            <div class="thumbnail">
				              <a href="http://www.mskft.com/?p=12"><img src="<?php bloginfo('template_directory'); ?>/images/orgasmforscience.png" alt=""></a>
				            </div>
				            <hr>
				            <div class="title">
				              <h3><a href="http://www.mskft.com/?p=12">Orgasms for Science</a></h3>
				              <p>by IsaKFT</p>
				            </div>
				          </div>
				        </div>
				        <div>
				          <div class="product">
				            <div class="thumbnail">
				              <a href="http://www.mskft.com/?p=12"><img src="<?php bloginfo('template_directory'); ?>/images/about.png" alt=""></a>
				            </div>
				            <hr>
				            <div class="title">
				              <h3><a href="http://www.mskft.com/?p=12">Sex Toys -vs- Stilettos</a></h3>
				              <p>by IsaKFT</p>
				            </div>
				          </div>
				        </div>
				        <div>
				          <div class="product">
				            <div class="thumbnail">
				              <a href="http://www.mskft.com/tag/strangetoys/"><img src="<?php bloginfo('template_directory'); ?>/images/kinkeverywhere.png" alt=""></a>
				            </div>
				            <hr>
				            <div class="title">
				              <h3><a href="http://www.mskft.com/tag/strangetoys/">Strange Toys of the Week</a></h3>
				              <p>by various</p>
				            </div>
				          </div>
				        </div>
				        <div>
				          <div class="product">
				            <div class="thumbnail">
				              <a href="http://www.mskft.com/tag/sexy-prep/"><img src="<?php bloginfo('template_directory'); ?>/images/pamper.png" alt=""></a>
				            </div>
				            <hr>
				            <div class="title">
				              <h3><a href="http://www.mskft.com/tag/sexy-prep/">Sexy Prepwork</a></h3>
				              <p>by various</p>
				            </div>
				          </div>
				        </div>
				        <div>
				          <div class="product">
				            <div class="thumbnail">
				              <a href="http://www.mskft.com/red-hot-summer-lube-selection/"><img src="<?php bloginfo('template_directory'); ?>/images/lube-sale.png" alt=""></a>
				            </div>
				            <hr>
				            <div class="title">
				              <h3><a href="http://www.mskft.com/red-hot-summer-lube-selection/">Wet Hot Summer Lube Selection</a></h3>
				              <p>by IsaKFT</p>
				            </div>
				          </div>
				        </div>
				        <div>
				          
				    </div>
				</section>
			<?php } ?>
