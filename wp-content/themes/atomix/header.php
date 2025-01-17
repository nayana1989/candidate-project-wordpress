<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" id="main-css" href="<?= get_template_directory_uri(); ?>/dist/main.css" media="all">
    <script src="<?= get_template_directory_uri(); ?>/dist/main.js" type="text/javascript"></script>

	<link
      rel="stylesheet"
      href="<?= get_template_directory_uri(); ?>/node_modules/flickity/dist/flickity.min.css"
    />
	<link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v6.1.2/css/all.css?ver=6.1.2"
    />


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>

	<?php get_template_part( 'template-parts/header/site-header' ); ?>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
