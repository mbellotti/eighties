<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Eighties
 * @author Justin Kopepasah
 * @since 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="page-header-sub">
		<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content" style="max-width:1200px !important;">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'eighties' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

<script>
//surprise me script
var links =[];
<?php if  (is_page(16)){ ?>
	links = ["http://shop.mskft.com/category/10880/Bendable", "http://shop.mskft.com/category/10887/Celebrity", "http://shop.mskft.com/category/10886/G-Spot","http://shop.mskft.com/category/11569/Grip-Handle-Dildos","http://shop.mskft.com/category/10873/Inflatable","http://shop.mskft.com/category/10885/Make-Your-Own", "http://shop.mskft.com/category/10876/Sleeves", "http://shop.mskft.com/category/10875/Suction-Mounted"];
<?php } ?>

<?php if  (is_page(17)){ ?>
	links = ["http://shop.mskft.com/category/10781/Prostate-Toys","http://shop.mskft.com/category/10783/Anal-Kits","http://shop.mskft.com/category/10791/Anal-Lubricants","http://shop.mskft.com/category/10782/Anal-Probes","http://shop.mskft.com/category/10788/Suction-Mounted-Plugs"];
<?php } ?>

<?php if  (is_page(35)){ ?>
	links = ["http://shop.mskft.com/category/10895/Edibles",
"http://shop.mskft.com/category/10797/Body-Paints"];
<?php } ?>

var a = document.getElementById('surprise-me');
a.href = links[Math.floor(Math.random() * links.length)];
</script>

