/*

var the_Data_Request_script_tag = document.createElement( "script" );
document.head.appendChild( the_Data_Request_script_tag );
the_Data_Request_script_tag.id = "the_Data_Request_script";
the_Data_Request_script_tag.className= "jit dynamic xhr onload";
the_Data_Request_script_tag.type = "module";
the_Data_Request_script_tag.src = "js/core/Data_Request.js";

const the_Data_Request_script = the_Data_Request_script_tag;

var the_DOM_Listener_script_tag = document.createElement( "script" );

document.head.appendChild( the_DOM_Listener_script_tag );
the_DOM_Listener_script_tag.id = "the_DOM_Listener_script";
the_DOM_Listener_script_tag.className= "jit dynamic xhr onload";
the_DOM_Listener_script_tag.type = "module";
the_DOM_Listener_script_tag.src = "js/core/DOM_Listener.js";

const the_DOM_Listener_script = the_DOM_Listener_script_tag;

*/ 

function make_sure_im_an_element( the_whatever ) {
	if ( the_whatever instanceof HTMLElement ) {
		return the_whatever;
	} else {
		return document.getElementById( the_whatever );
	}
}
