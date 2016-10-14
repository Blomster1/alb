<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

$notreclub = get_post(16);
$decouvrir = get_post(4);
$activite = get_post(19);


get_header(); ?>

	<!-- particles.js container -->
<section id="slider">
</section>
<section id="items-container">
	<div class="container">
		<div class="col-sm-offset-1 col-sm-3 text-center item">
			<img class="col-sm-12 no-padding " src="<?= get_the_post_thumbnail_url($notreclub->ID) ?>" alt="">
			<h1><a href="<?= get_permalink($notreclub->ID) ?>"><?= $notreclub->post_title ?></a></h1>
			<p><?= get_field('excerpt',$notreclub->ID) ?></p>
			<a class="btn btn-primary" href="<?= get_permalink($notreclub->ID) ?>">En savoir plus</a>
		</div>
		<div class="col-sm-3 text-center item">
			<img class="col-sm-12 no-padding " src="<?= get_the_post_thumbnail_url($decouvrir->ID) ?>" alt="">
			<h1><a href="<?= get_permalink($decouvrir->ID) ?>"><?= $decouvrir->post_title ?></a></h1>
			<p><?= get_field('excerpt',$decouvrir->ID) ?></p>
			<a class="btn btn-primary" href="<?= get_permalink($decouvrir->ID) ?>">En savoir plus</a>
		</div>
		<div class="col-sm-3 text-center item">
			<img class="col-sm-12 no-padding " src="<?= get_the_post_thumbnail_url($activite->ID) ?>" alt="">
			<h1><a href="<?= get_permalink($activite->ID) ?>"><?= $activite->post_title ?></a></h1>
			<p><?= get_field('excerpt',$activite->ID) ?></p>
			<a class="btn btn-primary" href="<?= get_permalink($activite->ID) ?>">En savoir plus</a>
		</div>
	</div>
</section>
<section id="map">
	<?= do_shortcode('[Google_Maps_WD id=1 map=1]') ?>
</section>
<section id="inscription"></section>
<?php get_footer(); ?>
