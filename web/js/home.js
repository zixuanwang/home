$(".headerCasesFilters button").on("click", function() {
	$(".headerCasesFilters").find(".active").removeClass("active");
	$(this).addClass("active");
});

$(document).ready(set_header_offset);
$(window).resize(set_header_offset);

function set_header_offset() {
	// hard coding header height
	var t = $(".headerCases").position().top;
	var header_height = $(".header").height();
	var slider_height = $("#builder-carousel").height();
	if (t == 0){
		// desktop mode
		$(".builderSlider").css("top", header_height + "px");
		$(".builderContent").css("top", header_height + slider_height + "px" );
	}else{
		// tablet mode
		var case_height = $(".headerCases").height();
		$(".builderSlider").css("top", header_height + case_height + "px");
		$(".builderContent").css("top", header_height + case_height + slider_height + "px" );
	}
}