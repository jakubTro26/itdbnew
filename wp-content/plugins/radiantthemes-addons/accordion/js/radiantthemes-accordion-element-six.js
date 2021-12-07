jQuery(document).ready(function () {
	jQuery(".radiantthemes-accordion-set > a").on("click", function (e) {
		e.preventDefault();
		if (jQuery(this).hasClass("rt-active")) {
			jQuery(this).removeClass("rt-active");
			jQuery(this)
				.siblings(".radiantthemes-accordion-content")
				.slideUp(200);
			jQuery(".radiantthemes-accordion-set > a i")
				.removeClass("lnr-chevron-up-circle")
				.addClass("lnr-chevron-down-circle");
		} else {
			jQuery(".radiantthemes-accordion-set > a i")
				.removeClass("lnr-chevron-up-circle")
				.addClass("lnr-chevron-down-circle");
			jQuery(this)
				.find("i")
				.removeClass("lnr-chevron-down-circle")
				.addClass("lnr-chevron-up-circle");
			jQuery(".radiantthemes-accordion-set > a").removeClass("rt-active");
			jQuery(this).addClass("rt-active");
			jQuery(".radiantthemes-accordion-content").slideUp(200);
			jQuery(this)
				.siblings(".radiantthemes-accordion-content")
				.slideDown(200);
		}
	});
	jQuery('.radiantthemes-accordion-set > a').eq(0).trigger('click');
});