<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<?php get_template_part('template-parts/global/nav/nav'); ?>

<main id="site-main">

<!-- BEGIN INHOUD ////////////////// -->

<?php get_template_part('template-parts/sections/heroe-home'); ?>
<?php get_template_part('template-parts/sections/section-producten-uitgelicht'); ?>
<?php get_template_part('template-parts/sections/section-over-home'); ?>
<?php get_template_part('template-parts/sections/section-brustor-home'); ?>
<?php get_template_part('template-parts/sections/section-brands'); ?>
<?php get_template_part('template-parts/sections/section-brochure'); ?>
<?php get_template_part('template-parts/sections/section-nieuws-laatste'); ?>
<?php get_template_part('template-parts/sections/section-map'); ?>
<?php get_template_part('template-parts/sections/section-cta-global'); ?>

<!-- EINDE INHOUD ////////////////// -->

</main>

<?php get_template_part('template-parts/global/footer'); ?>
<?php get_footer(); ?>
