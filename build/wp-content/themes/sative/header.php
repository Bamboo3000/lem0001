<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<link href="https://fonts.googleapis.com/css?family=Barlow:200,300,400,500,600,700|Roboto:400,400i,500,500i,700&subset=latin-ext" rel="stylesheet"> 
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/prototype.css">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108874065-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-108874065-1');
	</script> -->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper">
		<?php get_template_part( 'partials/navigation', 'none' ); ?>