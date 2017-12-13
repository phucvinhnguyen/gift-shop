(function($) {
    $(function(){
    	//Dropdown cart in header
		$('.cart-holder > h3').click(function(){
			if($(this).hasClass('cart-opened')) {
				$(this).removeClass('cart-opened').next().slideUp(300);
			} else {
				$(this).addClass('cart-opened').next().slideDown(300);
			}
		});

		//Disable cart selection
		(function ($) {
            $.fn.disableSelection = function () {
                return this
                    .attr('unselectable', 'on')
                    .css('user-select', 'none')
                    .on('selectstart', false);
            };
            $('.cart-holder h3').disableSelection();
        })(jQuery);

        (function() {

            function addAnimation(selector, start, diff, classToAdd, duration) {
                var elements = jQuery(selector);
                elements.each(function() {
                    if (classToAdd) {
                        jQuery(this).addClass(classToAdd);
                    }
                    if (duration) {
                        jQuery(this).attr('data-wow-duration', duration + 's');
                    }
                    jQuery(this).attr('data-wow-delay', (start += diff) + 's');
                });
            }


            if (jQuery('body').hasClass('home') && jQuery('html').hasClass('desktop')) {
                //Content
                addAnimation('.banners_wrapper .banner-wrap', 0, 0.2, 'wow fadeIn', 1);
                addAnimation('.services_wrapper1 .service-box', 0, 0.2, 'wow fadeIn', 1);
                addAnimation('.featured-products_wrapper .product', 0, 0.15, 'wow fadeIn', 1);
                addAnimation('.newsletter_wrapper', 0, 0.2, 'wow fadeIn', 1);
                addAnimation('.onsale-products_wrapper .owl-item', 0, 0.2, 'wow fadeIn', 1);
                addAnimation('.services_wrapper2 .service-box', 0, 0.2, 'wow fadeIn', 1);

            }
        })();

        $('.products .product').each(function(){
            _this = $(this);
            _this.find('.price > ins').after(_this.find('.price > del'));
            _this.find('.onsale').insertAfter(_this.find('.cherry-thumb-wrap > img'));
            _this.find('.star-rating').insertAfter(_this.find('.product-list-buttons'));
        });
    });
})(jQuery);