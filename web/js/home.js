$(".headerCasesFilters button").on("click", function() {
	$(".headerCasesFilters").find(".active").removeClass("active");
	$(this).addClass("active");
});

$(document).ready(function() {
  $(".fancybox").fancybox();
});