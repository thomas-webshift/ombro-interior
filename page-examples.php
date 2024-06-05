<?php get_header(); ?>
<?php get_template_part('template-parts/global/nav/nav'); ?>
      
<main id="site-main">

<!-- BEGIN ////////////////// -->

<?php $data = [
'titel'     =>      get_field('titel'),
'tekst'     =>      get_field('tekst'),
'foto'     =>      get_field('foto'),
'video'     =>      get_field('video', false, false),
'btns'     =>      get_field('acties_btns'),
'link'     =>      get_field('link'),
]; ?>

<div class="position-fixed" style="z-index:999; bottom:0" id="yourContainerId"></div>

<section>
	<div class="container">
		<div class="row"><div class="col"><h2 class="h-5 mb-16 sectitle d-inline-block bg-gray-200 px-16 py-8">Content & Image (gap)</h2></div></div>
		<div class="row gy-32">
			<div class="col col-lg-6">
				<div class="d-grid gap-24">
					<h2 class="h-2"><?php echo $data['titel']; ?></h2>
					<div class="text"><?php echo $data['tekst']; ?></div>
					<div class="actions hstack flex-wrap gap-16">
						<?php foreach($data['btns'] as $i=>$btn): ?>
							<a class="<?php echo $btn['type']; ?>" href="<?php echo $btn['btn']['url']; ?>" class="btn"><?php echo $btn['btn']['title']; ?></a>
						<?php endforeach; ?>
					</div>
					<a class="btn btn-primary" href="<?php echo $data['link']['url']; ?>" class="btn"><?php echo $data['link']['title']; ?></a>
				</div>
			</div>
			<div class="col col-lg-6 ">
				<img src="<?php echo esc_url($data['foto']['url']); ?>" alt="<?php echo $data['foto']['alt']; ?>" class="media fullbg d-flex h-100 rounded-4">
            </img>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row"><div class="col"><h2 class="h-5 mb-16 sectitle d-inline-block bg-gray-200 px-16 py-8">Content & Video (margin)</h2></div></div>
		<div class="row align-items-stretch gy-32">
			<div class="col col-lg-6">
				<h2 class="h-2"><?php echo $data['titel']; ?></h2>
				<div class="text my-24"><?php echo $data['tekst']; ?></div>
				<div class="actions hstack d-flex gap-16">
					<?php foreach($data['btns'] as $i=>$btn): ?>
						<a class="<?php echo $btn['type']; ?>" href="<?php echo $btn['btn']['url']; ?>" class="btn"><?php echo $btn['btn']['title']; ?></a>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="col col-lg-6">
				<a href="<?php echo $data['video'] ?>" data-fancybox="gallery" class="anif op rounded-3 overflow-hidden position-relative overlay bg-image h-100 d-block vh-mobile" style="background-image:url('<?php echo esc_url($data['foto']['url']); ?>');">
					<i class="fa fa-play-circle h-2 text-white position-absolute top-50 start-50 translate-middle" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row"><div class="col"><h2 class="h-5 mb-16 sectitle d-inline-block bg-gray-200 px-16 py-8">Popup</h2></div></div>
		<div class="row">
			<div class="col">

				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
				Launch demo modal
				</button>

				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
							<h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							...
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								<button type="button" class="btn btn-tertiary">Save changes</button>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row"><div class="col"><h2 class="h-5 mb-16 sectitle d-inline-block bg-gray-200 px-16 py-8">Form</h2></div></div>
		<div class="row">
			<div class="col">
				<?php gravity_form(1, false, false, false, '', true); ?>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row"><div class="col"><h2 class="h-5 mb-16 sectitle d-inline-block bg-gray-200 px-16 py-8">Swiper</h2></div></div>
		<div class="row">
			<div class="col">
				<!-- Swiper -->
				<div class="swiper-container swiper-voorbeeld">
					<div class="swiper-wrapper">
						<div class="swiper-slide p-32 rounded-3" style="background-color: #eee;height: 300px;">Slide 1</div>
						<div class="swiper-slide p-32 rounded-3" style="background-color: #ddd;height: 300px;">Slide 2</div>
						<div class="swiper-slide p-32 rounded-3" style="background-color: #eee;height: 300px;">Slide 3</div>
						<div class="swiper-slide p-32 rounded-3" style="background-color: #ddd;height: 300px;">Slide 4</div>
					</div>
				</div>
				<!-- Arrows -->
				<div class="swiper-arrows d-flex align-items-center gap-16">
					<div class="voorbeeld-prev"><i class="fal fa-arrow-left"></i></div>
					<div class="voorbeeld-next"><i class="fal fa-arrow-right"></i></div>
				</div>
				<!-- Pagination -->
				<div class="swiper-pagination"></div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row"><div class="col"><h2 class="h-5 mb-16 sectitle d-inline-block bg-gray-200 px-16 py-8">Sticky</h2></div></div>
		<div class="row">
			<div class="col">
				<div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
					<div class="col">
						<div style="width:300px; height: 300px;" class="bg-gray-200" data-sticky-container>
							<div style="width:100px; height: 100px;" class="bg-primary sticky" data-margin-top="20" data-sticky-for="1023" data-sticky-class="is-sticky"></div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script src="<?php echo get_template_directory_uri() ?>/source/js/extern/sticky.min.js"></script>
<script>
  var sticky = new Sticky('.sticky');
</script>

<section>
	<div class="container">
		<div class="row"><div class="col"><h2 class="h-5 mb-16 sectitle d-inline-block bg-gray-200 px-16 py-8">Social & share</h2></div></div>
		<div class="row">
			<div class="col">
				<?php get_template_part('template-parts/parts/social'); ?>
				<?php get_template_part('template-parts/parts/share'); ?>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row"><div class="col"><h2 class="h-5 mb-16 sectitle d-inline-block bg-gray-200 px-16 py-8">Query</h2></div></div>
		<div class="row justify-content-between align-items-end mb-48">
			<div class="col col-auto">
				<h2 class="h-2">Ontdek de laatste posts</h2>
			</div>
			<div class="col col-auto">
				<a class="btn-primary" href="<?php echo get_post_type_archive_link('posttype'); ?>"><?php _e( 'Link to archive', 'theme' ); ?><i class="ms-16 fa fa-long-arrow-right" aria-hidden="true"></i></a>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<?php get_template_part('template-parts/grids/nieuws/grid-nieuws-laatste'); ?>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row"><div class="col"><h2 class="h-5 mb-16 sectitle d-inline-block bg-gray-200 px-16 py-8">Accordion</h2></div></div>
		<div class="row">
			<div class="col">
					<?php if ( have_rows('repeater') ) : ?>
					<div class="accordion" id="accordionExample">
						<?php 
						$first = true; // Change this to false if you don't want the first item to be open
						while( have_rows('repeater') ) : the_row();
							$itemId = 'collapse-' . get_row_index(); // Dynamic ID for each accordion item
						?>
							<div class="accordion-item">
									<h3 class="accordion-header" id="heading-<?php echo get_row_index(); ?>">
										<button class="accordion-button <?php if ($first) { echo ''; } else { echo 'collapsed'; } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $itemId; ?>" aria-expanded="<?php echo $first ? 'true' : 'false'; ?>" aria-controls="<?php echo $itemId; ?>">
											<?php the_sub_field('titel'); ?>
										</button>
									</h3>
									<div id="<?php echo $itemId; ?>" class="accordion-collapse collapse <?php if ($first) { echo 'show'; } ?>" aria-labelledby="heading-<?php echo get_row_index(); ?>" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<?php the_sub_field('content'); ?>
										</div>
									</div>
							</div>
						<?php 
						$first = false; // Ensure that the rest of the items are collapsed
						endwhile; ?>
					</div>
					<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row"><div class="col"><h2 class="h-5 mb-16 sectitle d-inline-block bg-gray-200 px-16 py-8">Tabs</h2></div></div>
		<div class="row">
			<div class="col">
			<?php if ( have_rows('repeater') ) : ?>
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<?php $first = true; // Flag to mark the first item ?>
					<?php while( have_rows('repeater') ) : the_row(); ?>
							<li class="nav-item" role="presentation">
								<button class="nav-link <?php if ($first) echo 'active'; ?>" id="tab-<?php echo get_row_index(); ?>-tab" data-bs-toggle="tab" data-bs-target="#tab-<?php echo get_row_index(); ?>" type="button" role="tab" aria-controls="tab-<?php echo get_row_index(); ?>" aria-selected="<?php echo $first ? 'true' : 'false'; ?>">
									<?php the_sub_field('titel'); ?>
								</button>
							</li>
					<?php $first = false; ?>
					<?php endwhile; ?>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<?php $first = true; // Reset flag for the content panes ?>
					<?php while( have_rows('repeater') ) : the_row(); ?>
							<div class="tab-pane <?php if ($first) echo 'active'; ?>" id="tab-<?php echo get_row_index(); ?>" role="tabpanel" aria-labelledby="tab-<?php echo get_row_index(); ?>-tab">
								<?php the_sub_field('content'); ?>
							</div>
					<?php $first = false; ?>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row"><div class="col"><h2 class="h-5 mb-16 sectitle d-inline-block bg-gray-200 px-16 py-8">Off canvas</h2></div></div>
		<div class="row">
			<div class="col">
				<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#Id1" aria-controls="Id1">Enable both scrolling & backdrop</button>
				
				<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="Id1" aria-labelledby="Enable both scrolling & backdrop">
				  <div class="offcanvas-header">
					 <h5 class="offcanvas-title" id="Enable both scrolling & backdrop">Backdrop with scrolling</h5>
					 <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				  </div>
				  <div class="offcanvas-body">
					 <p>Try scrolling the rest of the page to see this option in action.</p>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row"><div class="col"><h2 class="h-5 mb-16 sectitle d-inline-block bg-gray-200 px-16 py-8">Color Variables</h2></div></div>
		<div class="row">
			<div class="col">
				<div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
					<div class="col">
						<div class="p-16 border text-primary">text-primary</div>
					</div>
					<div class="col">
						<div class="p-16 border text-secondary">text-secondary</div>
					</div>
					<div class="col">
						<div class="p-16 border text-tertiary">text-tertiary</div>
					</div>

					<div class="col">
						<div class="p-16 border text-white bg-gray-500">text-white</div>
					</div>
					<div class="col">
						<div class="p-16 border text-gray-200 bg-gray-500">text-gray-200</div>
					</div>
					<div class="col">
						<div class="p-16 border text-gray-500">text-gray-500</div>
					</div>
					<div class="col">
						<div class="p-16 border text-gray-800">text-gray-800</div>
					</div>
					<div class="col">
						<div class="p-16 border text-black">text-black</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row"><div class="col"><h2 class="h-5 mb-16 sectitle d-inline-block bg-gray-200 px-16 py-8">Background Variables</h2></div></div>
		<div class="row">
			<div class="col">
				<div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
					<div class="col">
						<div class="p-16 border bg-primary text-white">bg-primary</div>
					</div>
					<div class="col">
						<div class="p-16 border bg-secondary">bg-secondary</div>
					</div>
					<div class="col">
						<div class="p-16 border bg-tertiary">bg-tertiary</div>
					</div>
					<div class="col">
						<div class="p-16 border bg-white">bg-white</div>
					</div>
					<div class="col">
						<div class="p-16 border bg-gray-200">bg-gray-200</div>
					</div>
					<div class="col">
						<div class="p-16 border bg-gray-500">bg-gray-500</div>
					</div>
					<div class="col">
						<div class="p-16 border bg-gray-800 text-white">bg-gray-800</div>
					</div>
					<div class="col">
						<div class="p-16 border bg-black text-white">bg-black</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row"><div class="col"><h2 class="h-5 mb-16 sectitle d-inline-block bg-gray-200 px-16 py-8">Animations</h2></div></div>
		<div class="row">
			<div class="col">
				<div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
					<div class="col">
						<div class="p-16 border bg-black text-white ani anim on">ani/anim</div>
					</div>
					<div class="col">
						<div class="p-16 border bg-black text-white ani anim left">ani/anim left</div>
					</div>
					<div class="col">
						<div class="p-16 border bg-black text-white ani anim right">ani/anim right</div>
					</div>
					<div class="col">
						<div class="p-16 border bg-black text-white ani anim up op">ani/anim up + op</div>
					</div>
					<div class="col">
						<div class="p-16 border bg-black text-white ani anim down">ani/anim down</div>
					</div>
					<div class="col">
						<div class="p-16 border bg-black text-white ani anim zo">ani/anim zo</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section>
	<div class="container">
		<div class="row"><div class="col"><h2 class="h-5 mb-16 sectitle d-inline-block bg-gray-200 px-16 py-8">Search</h2></div></div>
		<div class="row">
			<div class="col">
				<?php get_search_form( ) ?>
			</div>
		</div>
	</div>
</section>

<section class="mb-0">
	<div class="container">
		<div class="row"><div class="col"><h2 class="h-5 mb-16 sectitle d-inline-block bg-gray-200 px-16 py-8">Builder</h2></div></div>
	</div>
</section>
<?php get_template_part('template-parts/parts/builder'); ?>

<!-- EINDE ////////////////// -->

</div>

<?php get_template_part('template-parts/global/footer'); ?>
<?php get_footer(); ?>

<script>
	jQuery(document).ready(function($) {


	 var modalHtml = '<div id="navigationModal" style="background-color:white;padding:20px;border:1px solid #ccc;max-height:100%;overflow:auto;"><ul id="navList"></ul></div>';
    $('#yourContainerId').append(modalHtml);

    // Assign IDs to H2s and add links to the modal
    $('.sectitle').each(function(index) {
        var id = $(this).attr('id');
        if (!id) {
            id = 'h2-' + index;
            $(this).attr('id', id);
        }
        var listItem = $('<li><a style="color:#333;margin-bottom:5px;display:block;" href="#' + id + '">' + $(this).text() + '</a></li>');

        // Handle click event on the anchor
        listItem.find('a').click(function() {
            // Remove 'active' class from all list items
            $('#navList li').removeAttr('style');

            // Add 'active' class to the clicked list item
            listItem.attr('style', 'background-color: #ddd;');
        });

        $('#navList').append(listItem);
    });

});
</script>