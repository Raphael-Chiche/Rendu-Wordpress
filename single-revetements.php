<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ping-Passion
 */

$dataRevetement = get_fields();
$dataEpaisseur = get_option('epaisseur');

get_header();
?>

<main id="primary" class="site-main">

	<?php
	while (have_posts()):
		the_post(); ?>
		<div class="revetement-single_product">
			<div class="revetement-single_img">
				<p class="img-revetement">
					<?php the_post_thumbnail(); ?>
				</p>
			</div>
			<div class="revetement-single_content">
				<h2>
					<?php the_title() ?>
				</h2>


				<p>Informations du revêtement :</p>
				<ul>
					<li>Rapidité :
						<?= $dataRevetement['rapidite'] ?>
					</li>
					<li>Contrôle :
						<?= $dataRevetement['controle'] ?>
					</li>
					<li>Adhérence :
						<?= $dataRevetement['adherence'] ?>
					</li>
					<li>Epaisseur :
				<?php foreach ($dataRevetement['epaisseur'] as $eppaiseur): ?>
						<?= $eppaiseur ?>
						<?php endforeach; ?>
					</li>
				</ul>
			</div>
			<div class="revetement-single_description">
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
