$(function(){
	$(".sidebarContainer").stick_in_parent();
	$('#mixContainer').mixItUp();
});

$('.hamburger').click(function() {
  $(this).toggleClass('expanded').siblings('div').slideToggle();
});