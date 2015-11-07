$(function(){
	$(".sidebarContainer").stick_in_parent();
	$('#mixContainer').mixItUp();
});

// Open navigation function
var openNavigation = function () {
	$('.navigation').slideDown();
	$('.hamburger').addClass('expanded');
};

// Close navigation function
var closeNavigation = function () {
	$('.navigation').slideUp();
	$('.hamburger').removeClass('expanded');
};

// Bind to our hamburger navigation and toggle the menu
$('.hamburger').on('click', function() {
  
  // Check to see if the navigation is open, utilizing a jQuery pseudo selector
  // ie. .is(":visible")
  if ( $('.navigation').is(':visible') ) {
  	closeNavigation();
  } else {
  	openNavigation();
  }

});

// Bind to our navigation links and close the navigation when one is clicked
$('.menu-item a').on('click', function() {
	closeNavigation();
});

