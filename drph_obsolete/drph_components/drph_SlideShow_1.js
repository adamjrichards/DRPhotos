/*****************************************************
	DRPhotos slide show
*****************************************************/
function getEl( $item ) {
	"use strict";
	return document.getElementById( $item );
}

function slideShow( source, showType ) {
	"use strict";
	var thisEl;
	try {
		thisEl = ( getEl( source ));
	} catch( e ){
		thisEl = document.createElement( "div" );
	}
	var parentEl;
	try {
		parentEl = thisEl.parentElement;
	} catch( e ){
		parentEl = document.body.appendChild( document.createElement( "div" ) );
	}
	
}

slideShow( "d250", "fade" );