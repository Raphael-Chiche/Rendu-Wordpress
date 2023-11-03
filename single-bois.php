<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ping-Passion
 */

$databois = get_fields();
get_header();
?>

<main id="primary" class="site-main">

	<?php
	while (have_posts()):
		the_post(); ?>
		<div class="bois-single_product">
			<div class="bois-single_img">
				<p class="img-bois">
					<?php the_post_thumbnail(); ?>
				</p>
			</div>
			<div class="bois-single_content">
				<h2>
					<?php the_title() ?>
				</h2>
				<div class="bois-div_contenu">
					<button class="bois-panier">
					Ajouter au panier
				</button>
				</div>
				
			</div>
			<div class="bois-single_description">
				<h2>Description :</h2>
				<p>
					<?php the_content(); ?>
				</p>
			</div>
		</div>
		<?php

		the_post_navigation(
			array(
				'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'ping-passion') . '</span> <span class="nav-title">%title</span>',
				'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'ping-passion') . '</span> <span class="nav-title">%title</span>',
			)
		);

		// If comments are open or we have at least one comment, load up the comment template.
		if (comments_open() || get_comments_number()):
			comments_template();
		endif;


	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
get_footer();
