<!DOCTYPE html>

<?php if ( strtolower( get_bloginfo( 'language' ) ) === 'nl-nl' ) {  ?>
	<html lang="nl">
<?php   } else {  ?>
	<html <?php language_attributes(); ?>>
<?php   }  ?>


	<!-- head-sectie //////////////////////////////////////////////// -->
	<head>

		<!-- Meta info -->
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0">

		<!-- Favicon normaal -->
		<link href="<?php the_field('favicon', 'option'); ?>" rel="icon" type="image/png" >

		<!-- Favicon Apple iOS -->
		<link href="<?php the_field('favicon_apple', 'option'); ?>" rel="apple-touch-icon" />
		<link href="<?php the_field('favicon_apple', 'option'); ?>" rel="apple-touch-icon" sizes="152x152" />
		<link href="<?php the_field('favicon_apple', 'option'); ?>" rel="apple-touch-icon" sizes="167x167" />
		<link href="<?php the_field('favicon_apple', 'option'); ?>" rel="apple-touch-icon" sizes="180x180" />

		<!-- Titel -->
		<title><?php wp_title(); ?></title>

		<!-- Inladen van plugins -->
		<?php wp_head(); ?>

		<!-- Eventuele tracking codes -->


	</head>


<!-- begin body-sectie (einde staat in footer.php) //////////////////////////// -->
<body <?php body_class(); ?> >

<!-- Eventuele meldingen -->
<?php get_template_part('template-parts/parts/melding-boven'); ?>
<?php get_template_part('template-parts/parts/melding-popup'); ?>

<div id="site-wrapper" class="position-relative overflow-hidden">