$( document ).ready(function() {

	// Image Zoom Starts Here
    $('.strainGallery').elevateZoom({
      zoomType:"lens",
      lensShape : "round",
      lensSize : 250
    });
    // Image Zoom Ends Here

    // Ratings Hover Starts Here
    $('#rate1').on('mouseenter', function() {
		$('#rate1').css("background-color", "rgb(44,48,52)");
	});
	$('#rate2').on('mouseenter', function() {
		$('#rate1,#rate2').css("background-color", "rgb(44,48,52)");
	});
	$('#rate3').on('mouseenter', function() {
		$('#rate1,#rate2,#rate3').css("background-color", "rgb(44,48,52)");
	});
	$('#rate4').on('mouseenter', function() {
		$('#rate1,#rate2,#rate3,#rate4').css("background-color", "rgb(44,48,52)");
	});
	$('#rate5').on('mouseenter', function() {
		$('#rate1,#rate2,#rate3,#rate4,#rate5').css("background-color", "rgb(44,48,52)");
	});
	$('#rate1').on('mouseleave', function() {
		$('#rate1').css("background-color", "rgba(44,48,52,.1)");
	});
	$('#rate2').on('mouseleave', function() {
		$('#rate1,#rate2').css("background-color", "rgba(44,48,52,.1)");
	});
	$('#rate3').on('mouseleave', function() {
		$('#rate1,#rate2,#rate3').css("background-color", "rgba(44,48,52,.1)");
	});
	$('#rate4').on('mouseleave', function() {
		$('#rate1,#rate2,#rate3,#rate4').css("background-color", "rgba(44,48,52,.1)");
	});
	$('#rate5').on('mouseleave', function() {
		$('#rate1,#rate2,#rate3,#rate4,#rate5').css("background-color", "rgba(44,48,52,.1)");
	});
    // Ratings Hover Ends Here

    // Mobile Menu Drawer Open / Close Starts Here
    $("#menuMobile-toggler").click(function(){
		$('#menuMobile').css("left","0"); 
	});
	$("#close-menuMobile").click(function(){
		$('#menuMobile').css("left","-50%"); 
	});
	// Mobile Menu Drawer Open / Close Ends Here

});