/* eslint-disable no-mixed-spaces-and-tabs */
/* eslint-disable no-irregular-whitespace */
/* eslint-disable no-undef */
( function( $ ) {


	// your standard jquery code goes here with $ prefix
	// best used inside a page with inline code,
	// or outside the document ready, enter code here
	// eslint-disable-next-line no-irregular-whitespace

	// Search Box
	$( '.openBtn' ).click( function() {
		$( '.search-box' ).toggle();
		$( 'input[type=\'text\']' ).focus();
	});

	// Image Slider
	$( '.fade' ).slick({
		dots: true,
		infinite: true,
		arrows: true,
		autoplay: true,
		speed: 500,
		fade: true,
		cssEase: 'linear'
	});

	// Customer Review Slider
	$( '.customer-slide' ).slick({
		dots: false,
		infinite: true,
		arrows: true,
		autoplay: true,
		speed: 500,
		fade: true,
		cssEase: 'linear'
	});


	// Portfolio Lightbox Effect
	$( '#lightbox' ).magnificPopup({
		delegate: '.view',
		type: 'image',
		mainClass: 'mfp-img-mobile',
		gallery: {
	  enabled: true,
	  navigateByImgClick: true
		}
	});

	// Filter in Portfolio Section

	// eslint-disable-next-line vars-on-top
	var $portfoliocontainer = $( '.portfolio-container' ).isotope({
		itemSelector: '.portfoliobox'
	});

	$( '#filter' ).on( 'click', 'a', function() {
		var filterValue = $( this ).attr( 'data-filter' );
		$portfoliocontainer.isotope({filter: filterValue});

	});

	$( '#filter' ).each( function( i, buttonGroup ) {
		var $buttonGroup = $( buttonGroup );
		$buttonGroup.on( 'click', 'a', function() {
	  $buttonGroup.find( '.active' ).removeClass( 'active' );
	  $( this ).addClass( 'active' );
		});
	});

	// Call in Video Action  Popup
	$( '.popup-video' ).magnificPopup({
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});


	// // Count in Statistic Section
	// $( '.count' ).counterUp({
	// 	delay: 10,
	// 	time: 1000
	// });


// eslint-disable-next-line no-trailing-spaces
}( jQuery ) ); 
