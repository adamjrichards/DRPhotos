class Player_Menu extends DOM_Menu {
	
	constructor( the_id = "the_player_menu", the_className = "player menu", the_daddy = "body", the_medium = "default" ) {
		super( the_id, the_className, the_daddy );
		this.my_medium = the_medium;
		if (this.my_medium === "default" ) {	
				this.my_menu_items.my_player_skip_to_the_beginning_button = new Player_Skip_To_The_Beginning_Button( "img", "player_skip_to_the_beginning", this.my_className );
				this.my_menu_items.my_player_skip_back_button = new Player_Skip_Back_Button( "img", "player_skip_back", this.my_className );
				this.my_menu_items.my_player_rewind_button = new Player_Rewind_Button( "img", "player_rewind", this.my_className );
				this.my_menu_items.my_player_record_button = new Player_Record_Button( "img", "player_record", this.my_className );
				this.my_menu_items.my_player_play_button = new Player_Play_Button( "img", "player_play", this.my_className );
				this.my_menu_items.my_player_pause_button = new Player_Pause_Button( "img", "player_pause", this.my_className );
				this.my_menu_items.my_player_stop_button = new Player_Stop_Button( "img", "player_stop", this.my_className );
				this.my_menu_items.my_player_fast_forward_button = new Player_Fast_Forward_Button( "img", "player_fast_forward", this.my_className );
				this.my_menu_items.my_player_skip_ahead_button = new Player_Skip_Ahead_Button( "img", "player_skip_ahead", this.my_className );
				this.my_menu_items.my_player_skip_to_the_end_button = new Player_Skip_To_The_End_Button( "img", "player_skip_to_the_end", this.my_className );
				this.my_menu_items.my_player_now_playing_button = new Player_Play_Button( "img", "player_now_playing", this.my_className );				
		} else if ( this.my_medium === "slide show" ) {
				this.my_menu_items.my_player_skip_to_the_beginning_button = new Player_Skip_To_The_Beginning_Button( "img", "player_skip_to_the_beginning", this.my_className );
				this.my_menu_items.my_player_skip_back_button = new Player_Skip_Back_Button( "img", "player_skip_back");
				this.my_menu_items.my_player_play_button = new Player_Play_Button( "img", "player_play", this.my_className );
				this.my_menu_items.my_player_pause_button = new Player_Pause_Button( "img", "player_pause", this.my_className );
				this.my_menu_items.my_player_stop_button = new Player_Stop_Button( "img", "player_stop", this.my_className );
				this.my_menu_items.my_player_skip_ahead_button = new Player_Skip_Ahead_Button( "img", "player_skip_ahead", this.my_className );
				this.my_menu_items.my_player_skip_to_the_end_button = new Player_Skip_To_The_End_Button( "img", "player_skip_to_the_end", this.my_className );
		}
		
		new DOM_Stack( this.me, `${DEFAULT_LISTENER_STACK_LOCATION}the_player_menu_listeners.json` ).fetch_my_stack_with_callback( this, this.assign_the_stacks );
	}
	
	assign_the_stacks( the_stack ) {
		the_stack = the_stack.get_my_new_stack();
		if ( this.my_medium === "default" ) {
			for ( let this_event of the_stack ) {
				let the_label = this_event.substring( 0, this_event.indexOf( "." ) );
				//console.log( the_label );
				switch ( the_label ) {
					case "the_player_skip_to_the_beginning_button"	:	this.my_menu_items.my_player_skip_to_the_beginning_button.attach_my_listeners( this_event ); break;
					case "the_player_skip_back_button"				:	this.my_menu_items.my_player_skip_back_button.attach_my_listeners( this_event ); break;
					case "the_player_rewind_button"				:	this.my_menu_items.my_player_rewind_button.attach_my_listeners( this_event ); break;
					case "the_player_record_button"				:	this.my_menu_items.my_player_record_button.attach_my_listeners( this_event ); break;
					case "the_player_play_button"					:	this.my_menu_items.my_player_play_button.attach_my_listeners( this_event ); break;
					case "the_player_pause_button"				:	this.my_menu_items.my_player_pause_button.attach_my_listeners( this_event ); break;
					case "the_player_stop_button"					:	this.my_menu_items.my_player_stop_button.attach_my_listeners( this_event ); break;
					case "the_player_fast_forward_button"			:	this.my_menu_items.my_player_fast_forward_button.attach_my_listeners( this_event ); break;
					case "the_player_skip_ahead_button"			:	this.my_menu_items.my_player_skip_ahead_button.attach_my_listeners( this_event ); break;
					case "the_player_skip_to_the_end_button"		:	this.my_menu_items.my_player_skip_to_the_end_button.attach_my_listeners( this_event ); break;
					case "the_player_now_playing_button"			:	this.my_menu_items.my_player_now_playing_button.attach_my_listeners( this_event ); break;
				}
			} 
		} else if ( this.my_medium === "slide show" ) {
			for ( let this_event of the_stack ) {
				let the_label = this_event.substring( 0, this_event.indexOf( "." ) );
				//console.log( the_label );
				switch ( the_label ) {
					case "the_player_skip_to_the_beginning_button"	:	this.my_menu_items.my_player_skip_to_the_beginning_button.attach_my_listeners( this_event ); break;
					case "the_player_skip_back_button"				:	this.my_menu_items.my_player_skip_back_button.attach_my_listeners( this_event ); break;
					case "the_player_play_button"					:	this.my_menu_items.my_player_play_button.attach_my_listeners( this_event ); break;
					case "the_player_pause_button"				:	this.my_menu_items.my_player_pause_button.attach_my_listeners( this_event ); break;
					case "the_player_stop_button"					:	this.my_menu_items.my_player_stop_button.attach_my_listeners( this_event ); break;
					case "the_player_skip_ahead_button"			:	this.my_menu_items.my_player_skip_ahead_button.attach_my_listeners( this_event ); break;
					case "the_player_skip_to_the_end_button"		:	this.my_menu_items.my_player_skip_to_the_end_button.attach_my_listeners( this_event ); break;
				}
			}
		}
	}
}