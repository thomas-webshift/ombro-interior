<?php $obj_id = get_queried_object_id();
$current_url = get_permalink( $obj_id ); ?>
<div class="share d-flex align-items-center gap-16">
	<button aria-label="Facebook" class="anif op button m-0 t-regular" data-sharer="facebook" data-hashtag="" data-url="<?php echo $current_url ?>">
		<i class="fa-brands fa-facebook-f"></i>
	</button>
	<button aria-label="Twitter" class="anif op button m-0 t-regular" data-sharer="twitter" data-title="<?php single_post_title(); ?>" data-hashtags="" data-url="<?php echo $current_url ?>">
		<i class="fa-brands fa-x-twitter"></i>
	</button>
   <button aria-label="Linkedin" class="anif op button m-0 t-regular" data-sharer="linkedin" data-title="<?php single_post_title(); ?>" data-hashtags="" data-url="<?php echo $current_url ?>">
		<i class="fa-brands fa-linkedin-in"></i>
	</button>
	<button aria-label="E-mail" class="anif op button m-0 t-regular" data-sharer="email" data-title="<?php single_post_title(); ?>" data-url="<?php echo $current_url ?>" data-subject="" data-to=""><i class="fa-solid fa-envelope"></i></button>
</div>

<script src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>