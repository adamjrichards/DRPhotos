/*
	Class XHR_JSON_Reader	
	Listener_Group adds or removes the dynamic listeners from an object, such as a menu or a floating panel.
*/

class XHR_JSON_Reader {
	
     constructor( the_JSON_source, callback ) {
          this.my_JSON_source = the_JSON_source;
          this.my_JSON_request = new XMLHttpRequest();
          this.my_JSON_request.overrideMimeType( "application/json" );
          this.my_JSON_request.onreadystatechange = function() {
			if ( this.readyState === 4 && this.status === 200 ) {
                    callback( this.response );
               }
          }
		this.my_JSON_request.open( "GET", this.my_JSON_source, true );
		this.my_JSON_request.setRequestHeader( "Content-Type", "application/x-www-form-urlencoded" );
          this.my_JSON_request.send();
     }
}