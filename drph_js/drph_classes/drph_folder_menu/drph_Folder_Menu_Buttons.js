class Folder_Menu_Button extends DOM_Button {	
	constructor( the_tagName, the_id_root = "", the_classname, the_daddy ) {
		super( "img", the_id_root,  `Folder menu dom_button ${the_id_root}`, `../assets/buttons/svg/media_Folder/${the_id_root}.svg`, the_daddy );
	}
	my_mouseenter_action(){}
	my_mouseleave_action(){}
	my_mouseover_action(){}
	my_mouseout_action(){}
	my_mousedown_action(){}
	my_mouseup_action(){}
	my_mousemove_action(){}
	my_click_action(){}
	my_doubleclick_action(){}
	
	attach_my_listeners( the_mouse_listener ) {
		//console.log( the_mouse_listener );
		this.my_listener_stack.push( the_mouse_listener );
	}
	
	activate_my_listeners() {
		//console.log( this.my_listener_stack );
		for( let this_line of this.my_listener_stack ) {
			eval( this_line );
		}
		this.my_mouseenter_action();
	}
}

class Folder_Up_Button extends Folder_Menu_Button {
	
	my_mouseenter_action( me ) {
		console.log( "folder up mouseenter" );	
	}
	my_mouseleave_action( me ) {
		console.log( "folder up mouseleave" );
	}
	my_mouseover_action( me ) {
		console.log( "folder up mouseover" );
	}
	my_mouseout_action( me ) {
		console.log( "folder up mouseout" );
	}
	my_mousedown_action( me ) {
		console.log( "folder up mousedown" );
	}
	my_mouseup_action( me ) {
		console.log( "folder up mouseup" );
	}
	my_mousemove_action( me ) {
		console.log( "folder up mousemove" );
	}
	my_click_action( me ) {
		console.log( "folder up click" );
	}
	my_doubleclick_action( me ) {
		console.log( "folder up doubleclick" );
	}
}

class Folder_Next_Button extends Folder_Menu_Button {
	
	my_mouseenter_action( me ) {
		console.log( "folder next mouseenter" );	
	}
	my_mouseleave_action( me ) {
		console.log( "folder next mouseleave" );
	}
	my_mouseover_action( me ) {
		console.log( "folder next mouseover" );
	}
	my_mouseout_action( me ) {
		console.log( "folder next mouseout" );
	}
	my_mousedown_action( me ) {
		console.log( "folder next mousedown" );
	}
	my_mouseup_action( me ) {
		console.log( "folder next mouseup" );
	}
	my_mousemove_action( me ) {
		console.log( "folder next mousemove" );
	}
	my_click_action( me ) {
		console.log( "folder next click" );
	}
	my_doubleclick_action( me ) {
		console.log( "folder next doubleclick" );
	}
}

class Folder_Previous_Button extends Folder_Menu_Button {
	
	my_mouseenter_action( me ) {
		console.log( "folder previous mouseenter" );	
	}
	my_mouseleave_action( me ) {
		console.log( "folder previous mouseleave" );
	}
	my_mouseover_action( me ) {
		console.log( "folder previous mouseover" );
	}
	my_mouseout_action( me ) {
		console.log( "folder previous mouseout" );
	}
	my_mousedown_action( me ) {
		console.log( "folder previous mousedown" );
	}
	my_mouseup_action( me ) {
		console.log( "folder previous mouseup" );
	}
	my_mousemove_action( me ) {
		console.log( "folder previous mousemove" );
	}
	my_click_action( me ) {
		console.log( "folder previous click" );
	}
	my_doubleclick_action( me ) {
		console.log( "folder previous doubleclick" );
	}
}

class Folder_Open_Button extends Folder_Menu_Button {
	
	my_mouseenter_action( me ) {
		console.log( "folder open mouseenter" );	
	}
	my_mouseleave_action( me ) {
		console.log( "folder open mouseleave" );
	}
	my_mouseover_action( me ) {
		console.log( "folder open mouseover" );
	}
	my_mouseout_action( me ) {
		console.log( "folder open mouseout" );
	}
	my_mousedown_action( me ) {
		console.log( "folder open mousedown" );
	}
	my_mouseup_action( me ) {
		console.log( "folder open mouseup" );
	}
	my_mousemove_action( me ) {
		console.log( "folder open mousemove" );
	}
	my_click_action( me ) {
		console.log( "folder open click" );
	}
	my_doubleclick_action( me ) {
		console.log( "folder open doubleclick" );
	}
}

class Folder_Close_Button extends Folder_Menu_Button {
	
	my_mouseenter_action( me ) {
		console.log( "folder close mouseenter" );	
	}
	my_mouseleave_action( me ) {
		console.log( "folder close mouseleave" );
	}
	my_mouseover_action( me ) {
		console.log( "folder close mouseover" );
	}
	my_mouseout_action( me ) {
		console.log( "folder close mouseout" );
	}
	my_mousedown_action( me ) {
		console.log( "folder close mousedown" );
	}
	my_mouseup_action( me ) {
		console.log( "folder close mouseup" );
	}
	my_mousemove_action( me ) {
		console.log( "folder close mousemove" );
	}
	my_click_action( me ) {
		console.log( "folder close click" );
	}
	my_doubleclick_action( me ) {
		console.log( "folder close doubleclick" );
	}
}
