<div class="card-search border border-1 border-gray-400 p-32 id-<?php the_id(); ?>">
  <a class="stretched-link" href="<?php echo get_permalink($post->ID);?>">
    <div class="content d-flex flex-column align-items-start gap-4 text-black">
      <div class="type t-tiny text-white bg-primary p-4 px-8 rounded-pill"><?php echo get_post_type_object(get_post_type())->labels->singular_name; ?></div>
      <div class="fw-bold t-large"><?php the_title(); ?></div>
    </div>
  </a>
</div>