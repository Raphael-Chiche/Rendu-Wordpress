<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ping-Passion
 */

get_header();
?>

	<main id="primary" class="site-main">

    <header class="page-header">
			<h1>NOS BOIS</h1>
			<p>A assembler avec nos revêtements</p>
		</header><!-- .page-header -->
		<section class="bois-wrapper">


			<?php
			/* Start the Loop */
			while (have_posts()):
				the_post(); ?>

				<div class="bois-card">
					<?php the_post_thumbnail('medium'); ?>
					<div class="bois-card_content">
						<h2><?php the_title(); ?></h2>
						<p><?php the_excerpt(); ?></p>
						<a href="<?php the_permalink(); ?>">En savoir plus</a>
					</div>
				</div>

			<?php endwhile; ?>
		</section> 

	</main><!-- #main -->

<?php
get_footer();
