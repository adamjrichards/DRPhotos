function add_my_listeners( me, my_this = globalThis ) { // acts on each button individually
	//me.removeAttribute( "onmouseenter" );
	ME.set_my_new_self( me );
	let my_button = me.id.replace( "the", "my" );
	ME.get_the_object_for_the_element( me ); 
}

self.ME = new There_Is_Only_Ever_One_ME();
self.THE_ME_STACK = new The_Past_MEs_Are_Stacked_Here();
CARGO[ "my_slide_show" ] = new Slide_Show( "the_slide_show", "../assets/images/" );