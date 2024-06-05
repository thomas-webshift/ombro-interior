<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<?php get_template_part('template-parts/global/nav/nav'); ?>

<main id="site-main">

<!-- BEGIN INHOUD ////////////////// -->

<?php $data = [
'titel'     =>      get_field('titel'),
'tekst'     =>      get_field('tekst'),
]; ?>
			
	<section class="">
      <div class="container">
         <div class="row">
            <div class="col col-lg-8">
               <h1 class="h-1"><?php echo $data['titel']; ?></h1>
					<div class="text mt-32 mb-48"><?php echo $data['tekst']; ?></div>
               <?php gravity_form(1, false, false, false, '', true); ?>
            </div>
         </div>
      </div>
   </section>

   <?php get_template_part('template-parts/sections/section-cta-global'); ?>

<!-- EINDE INHOUD ////////////////// -->

</main>

<?php get_template_part('template-parts/global/footer'); ?>
<?php get_footer(); ?>
