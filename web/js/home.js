(function($) {

	var $event = $.event, $special, resizeTimeout;

	$special = $event.special.debouncedresize = {
		setup : function() {
			$(this).on("resize", $special.handler);
		},
		teardown : function() {
			$(this).off("resize", $special.handler);
		},
		handler : function(event, execAsap) {
			// Save the context
			var context = this, args = arguments, dispatch = function() {
				// set correct event type
				event.type = "debouncedresize";
				$event.dispatch.apply(context, args);
			};

			if (resizeTimeout) {
				clearTimeout(resizeTimeout);
			}

			execAsap ? dispatch() : resizeTimeout = setTimeout(dispatch,
					$special.threshold);
		},
		threshold : 150
	};

})(jQuery);

$(".headerCasesFilters button").on("click", function() {
	$(".headerCasesFilters").find(".active").removeClass("active");
	$(this).addClass("active");
});

$(document).ready(function() {
	$(".fancybox").fancybox();
});

(function($) {
	var $container = $('#container');
	var colWidth = function() {
		var w = $container.width(), columnNum = 1, columnWidth = w;
		if (w > 1100) {
			columnNum = 3;
			columnWidth = (w - 33) / columnNum;
		} else if (w > 500) {
			columnNum = 2;
			columnWidth = (w - 17) / columnNum;
		}
		$container.find('.pin').each(function() {
			var $item = $(this);
			$item.css({
				width : columnWidth
			});
		});
		return columnWidth;
	}, isotope = function() {
		$container.isotope({
			itemSelector : '.pin',
			masonry : {
				columnWidth : colWidth(),
				gutter : 15
			}
		});
	};
	$(window).on('debouncedresize', isotope);
	$('#container').imagesLoaded(isotope);
}(jQuery));
