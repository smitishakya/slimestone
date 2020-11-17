jQuery( function( $ ) {

	$( document ).on( 'mousemove', 'body', function( e ) {
		$( this ).removeClass( 'keyboard-tab-on' );
	});
	$( document ).on( 'keydown', 'body', function( e ) {
		if ( 9 == e.which ) {
			$( this ).addClass( 'keyboard-tab-on' );
		}
	});
});
