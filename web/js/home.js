$(".headerCasesFilters button").on("click", function() {
	$(".headerCasesFilters").find(".active").removeClass("active");
	$(this).addClass("active");
});

$(document).ready(set_top_hero);
$(window).resize(set_top_hero);

function set_top_hero() {
	h = $(".header").height();
	i = $(".caseSlider img").height();
	$(".wrap .caseHero").css("top", h + i);
}