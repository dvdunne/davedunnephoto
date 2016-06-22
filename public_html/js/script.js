function displayDescr(evt) {
	var newDesc = (this).title;
	$("#linkDesc").text(" - " + newDesc).fadeIn("fast");
}
function hideDescr(evt) {
	$("#linkDesc").fadeOut("fast");
}

$(function() {
		//$("#linkSection a").hover(displayDescr, hideDescr);
});

