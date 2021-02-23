class Player_Menu_Button extends DOM_Button {	
	constructor( the_tagName, the_id_root = "", the_classname, the_daddy ) {
		super( "img", the_id_root,  `player menu dom_button ${the_id_root}`, `../assets/buttons/svg/media_player/${the_id_root}.svg`, the_daddy );
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

class Player_Rewind_Button extends Player_Menu_Button {
	
	my_mouseenter_action( me ) {
		console.log( "rewind mouseenter" );	
	}
	my_mouseleave_action( me ) {
		console.log( "rewind mouseleave" );
	}
	my_mouseover_action( me ) {
		console.log( "rewind mouseover" );
	}
	my_mouseout_action( me ) {
		console.log( "rewind mouseout" );
	}
	my_mousedown_action( me ) {
		console.log( "rewind mousedown" );
	}
	my_mouseup_action( me ) {
		console.log( "rewind mouseup" );
	}
	my_mousemove_action( me ) {
		console.log( "rewind mousemove" );
	}
	my_click_action( me ) {
		console.log( "rewind click" );
	}
	my_doubleclick_action( me ) {
		console.log( "rewind doubleclick" );
	}
}

class Player_Record_Button extends Player_Menu_Button {
	
	my_mouseenter_action( me ) {
		console.log( "record mouseenter" );	
	}
	my_mouseleave_action( me ) {
		console.log( "record mouseleave" );
	}
	my_mouseover_action( me ) {
		console.log( "record mouseover" );
	}
	my_mouseout_action( me ) {
		console.log( "record mouseout" );
	}
	my_mousedown_action( me ) {
		console.log( "record mousedown" );
	}
	my_mouseup_action( me ) {
		console.log( "record mouseup" );
	}
	my_mousemove_action( me ) {
		console.log( "record mousemove" );
	}
	my_click_action( me ) {
		console.log( "record click" );
	}
	my_doubleclick_action( me ) {
		console.log( "record doubleclick" );
	}
}

class Player_Play_Button extends Player_Menu_Button {
	
	my_mouseenter_action( me ) {
		console.log( "play mouseenter" );	
	}
	my_mouseleave_action( me ) {
		console.log( "play mouseleave" );
	}
	my_mouseover_action( me ) {
		console.log( "play mouseover" );
	}
	my_mouseout_action( me ) {
		console.log( "play mouseout" );
	}
	my_mousedown_action( me ) {
		console.log( "play mousedown" );
	}
	my_mouseup_action( me ) {
		console.log( "play mouseup" );
	}
	my_mousemove_action( me ) {
		console.log( "play mousemove" );
	}
	my_click_action( me ) {
		console.log( "play click" );
	}
	my_doubleclick_action( me ) {
		console.log( "play doubleclick" );
	}
}

class Player_Pause_Button extends Player_Menu_Button {
	
	my_mouseenter_action( me ) {
		console.log( "pause mouseenter" );	
	}
	my_mouseleave_action( me ) {
		console.log( "pause mouseleave" );
	}
	my_mouseover_action( me ) {
		console.log( "pause mouseover" );
	}
	my_mouseout_action( me ) {
		console.log( "pause mouseout" );
	}
	my_mousedown_action( me ) {
		console.log( "pause mousedown" );
	}
	my_mouseup_action( me ) {
		console.log( "pause mouseup" );
	}
	my_mousemove_action( me ) {
		console.log( "pause mousemove" );
	}
	my_click_action( me ) {
		console.log( "pause click" );
	}
	my_doubleclick_action( me ) {
		console.log( "pause doubleclick" );
	}
}

class Player_Stop_Button extends Player_Menu_Button {
	
	my_mouseenter_action( me ) {
		console.log( "stop mouseenter" );	
	}
	my_mouseleave_action( me ) {
		console.log( "stop mouseleave" );
	}
	my_mouseover_action( me ) {
		console.log( "stop mouseover" );
	}
	my_mouseout_action( me ) {
		console.log( "stop mouseout" );
	}
	my_mousedown_action( me ) {
		console.log( "stop mousedown" );
	}
	my_mouseup_action( me ) {
		console.log( "stop mouseup" );
	}
	my_mousemove_action( me ) {
		console.log( "stop mousemove" );
	}
	my_click_action( me ) {
		console.log( "stop click" );
	}
	my_doubleclick_action( me ) {
		console.log( "stop doubleclick" );
	}
}

class Player_Fast_Forward_Button extends Player_Menu_Button {
	
	my_mouseenter_action( me ) {
		console.log( "fast forward mouseenter" );	
	}
	my_mouseleave_action( me ) {
		console.log( "fast forward mouseleave" );
	}
	my_mouseover_action( me ) {
		console.log( "fast forward mouseover" );
	}
	my_mouseout_action( me ) {
		console.log( "fast forward mouseout" );
	}
	my_mousedown_action( me ) {
		console.log( "fast forward mousedown" );
	}
	my_mouseup_action( me ) {
		console.log( "fast forward mouseup" );
	}
	my_mousemove_action( me ) {
		console.log( "fast forward mousemove" );
	}
	my_click_action( me ) {
		console.log( "fast forward click" );
	}
	my_doubleclick_action( me ) {
		console.log( "fast forward doubleclick" );
	}
}

class Player_Skip_Ahead_Button extends Player_Menu_Button {
	
	my_mouseenter_action( me ) {
		console.log( "skip ahead mouseenter" );	
	}
	my_mouseleave_action( me ) {
		console.log( "skip ahead mouseleave" );
	}
	my_mouseover_action( me ) {
		console.log( "skip ahead mouseover" );
	}
	my_mouseout_action( me ) {
		console.log( "skip ahead mouseout" );
	}
	my_mousedown_action( me ) {
		console.log( "skip ahead mousedown" );
	}
	my_mouseup_action( me ) {
		console.log( "skip ahead mouseup" );
	}
	my_mousemove_action( me ) {
		console.log( "skip ahead mousemove" );
	}
	my_click_action( me ) {
		console.log( "skip ahead click" );
	}
	my_doubleclick_action( me ) {
		console.log( "skip ahead doubleclick" );
	}
}

class Player_Skip_Back_Button extends Player_Menu_Button {
	
	my_mouseenter_action( me ) {
		console.log( "skip back mouseenter" );	
	}
	my_mouseleave_action( me ) {
		console.log( "skip back mouseleave" );
	}
	my_mouseover_action( me ) {
		console.log( "skip back mouseover" );
	}
	my_mouseout_action( me ) {
		console.log( "skip back mouseout" );
	}
	my_mousedown_action( me ) {
		console.log( "skip back mousedown" );
	}
	my_mouseup_action( me ) {
		console.log( "skip back mouseup" );
	}
	my_mousemove_action( me ) {
		console.log( "skip back mousemove" );
	}
	my_click_action( me ) {
		console.log( "skip back click" );
	}
	my_doubleclick_action( me ) {
		console.log( "skip back doubleclick" );
	}
}

class Player_Skip_To_The_End_Button extends Player_Menu_Button {
	
	my_mouseenter_action( me ) {
		console.log( "skip to the end mouseenter" );	
	}
	my_mouseleave_action( me ) {
		console.log( "skip to the end mouseleave" );
	}
	my_mouseover_action( me ) {
		console.log( "skip to the end mouseover" );
	}
	my_mouseout_action( me ) {
		console.log( "skip to the end mouseout" );
	}
	my_mousedown_action( me ) {
		console.log( "skip to the end mousedown" );
	}
	my_mouseup_action( me ) {
		console.log( "skip to the end mouseup" );
	}
	my_mousemove_action( me ) {
		console.log( "skip to the end mousemove" );
	}
	my_click_action( me ) {
		console.log( "skip to the end click" );
	}
	my_doubleclick_action( me ) {
		console.log( "skip to the end doubleclick" );
	}
}

class Player_Skip_To_The_Beginning_Button extends Player_Menu_Button {
	
	my_mouseenter_action( me ) {
		console.log( "skip to the beginning mouseenter" );	
	}
	my_mouseleave_action( me ) {
		console.log( "skip to the beginning mouseleave" );
	}
	my_mouseover_action( me ) {
		console.log( "skip to the beginning mouseover" );
	}
	my_mouseout_action( me ) {
		console.log( "skip to the beginning mouseout" );
	}
	my_mousedown_action( me ) {
		console.log( "skip to the beginning mousedown" );
	}
	my_mouseup_action( me ) {
		console.log( "skip to the beginning mouseup" );
	}
	my_mousemove_action( me ) {
		console.log( "skip to the beginning mousemove" );
	}
	my_click_action( me ) {
		console.log( "skip to the beginning click" );
	}
	my_doubleclick_action( me ) {
		console.log( "skip to the beginning doubleclick" );
	}
}

class Player_Now_Playing_Button extends Player_Menu_Button {
	
	my_mouseenter_action( me ) {
		console.log( "now playing mouseenter" );	
	}
	my_mouseleave_action( me ) {
		console.log( "now playing mouseleave" );
	}
	my_mouseover_action( me ) {
		console.log( "now playing mouseover" );
	}
	my_mouseout_action( me ) {
		console.log( "now playing mouseout" );
	}
	my_mousedown_action( me ) {
		console.log( "now playing mousedown" );
	}
	my_mouseup_action( me ) {
		console.log( "now playing mouseup" );
	}
	my_mousemove_action( me ) {
		console.log( "now playing mousemove" );
	}
	my_click_action( me ) {
		console.log( "now playing click" );
	}
	my_doubleclick_action( me ) {
		console.log( "now playing doubleclick" );
	}
}
