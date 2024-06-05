jQuery(document).ready(function($) {

   // custom inview trigger

	// Function to check if an element is in view
	function isInView($elem, offset) {
		var docViewTop = $(window).scrollTop();
		var docViewBottom = docViewTop + $(window).height();
	
		var elemTop = $elem.offset().top;
		var elemBottom = elemTop + $elem.height();
	
		// Use the offset to adjust when the class is added
		return ((elemTop <= docViewBottom - offset));
	}
	
	// Function to toggle the inview class
	function toggleInViewClass() {
		$('.anim').each(function() {
			var $this = $(this);
	
			// You can adjust the offset here (positive or negative)
			var offset = 50; // for example, 100 pixels offset
	
			// Add 'inview' class if in view, and optionally remove it if not in view
			if (isInView($this, offset)) {
			$this.addClass('anim-start');
			} else if ($this.data('reset-inview')) { // Check if reset option is enabled
			$this.removeClass('anim-start');
			}
		});
	}
	
	// Document ready
	$(function() {
		// Initial check if elements are in view
		toggleInViewClass();
	
		// Check on scroll and resize
		$(window).on('scroll resize', toggleInViewClass);
	});
	
	// Option to enable/disable class reset on scroll out of view
	$.fn.enableResetInView = function() {
		return this.data('reset-inview', true);
	};
	$.fn.disableResetInView = function() {
		return this.data('reset-inview', false);
	};

});