<?php

/**
 * The template for displaying the header.
 *
 * @package TenUpTheme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body id="top" <?php body_class( 'relative' ); ?>>
	<?php wp_body_open(); ?>

	<?php get_template_part( 'template-parts/content', 'header' ); ?>
	<?php get_template_part( 'template-parts/content', 'backtotop' ); ?>

	<main id="main" role="main" tabindex="-1">
		<div id="overlay" class="absolute w-screen h-screen right-0 left-0 top-0 bottom-0 bg-[#000] opacity-0 transition-opacity pointer-events-none"></div>
