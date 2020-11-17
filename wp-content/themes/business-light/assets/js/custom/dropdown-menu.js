/* eslint-disable eol-last */
/* eslint-disable no-trailing-spaces */
/* eslint-disable no-mixed-spaces-and-tabs */
/* eslint-disable no-undef */
/* eslint-disable no-irregular-whitespace */
/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function( $ ) {
	$( '.menu' )
		.find( 'li.menu-item-has-children ul.sub-menu' )
		.before( '<button class="dropdown-btn"><i class="fas fa-chevron-down"></i></button>' );

	/* submenu toggle */
	$( document ).on( 'click ', '.dropdown-btn', function() {
		$( this ).toggleClass( 'active' );
		$( this ).parent().find( '.sub-menu' ).first().slideToggle();
	});
	
}( jQuery ) );