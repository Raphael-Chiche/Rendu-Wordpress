<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ping-Passion
 */
$logo = get_field('logo', 'option');
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ping-passion' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<?php echo '<img src="' . $logo['url'] . '" alt="' . $logo['alt'] . 'Logo Ping-Passion" class="logoPingpassion"/>'; ?>

				<?php
			else :
				?>
				
				<?php echo '<img src="' . $logo['url'] . '" alt="' . $logo['alt'] . 'Logo Ping-Passion" />'; ?>
				<?php
			endif;
			$ping_passion_description = get_bloginfo( 'description', 'display' );
			if ( $ping_passion_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $ping_passion_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-header',
					'menu_id'        => 'menu-header',
					'menu_class'     => 'menu-header',
					'menu-container' => 'nav',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
