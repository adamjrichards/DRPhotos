class Folder_Menu extends DOM_Menu {
	
	constructor( the_id = "the_folder_menu", the_className = "folder menu", the_daddy = "body" ) {
		super( the_id, the_className, the_daddy );
		this.my_menu_items.my_folder_up_button = new Folder_Up_Button( "img", "folder_up", this.my_className );
		this.my_menu_items.my_folder_next_button = new Folder_Next_Button( "img", "folder_next", this.my_className );
		this.my_menu_items.my_folder_previous_button = new Folder_Previous_Button( "img", "folder_previous", this.my_className );
		this.my_menu_items.my_folder_open_button = new Folder_Open_Button( "img", "folder_open", this.my_className );
		this.my_menu_items.my_folder_close_button = new Folder_Close_Button( "img", "folder_close", this.my_className );
		
		new DOM_Stack( this.me, `${DEFAULT_LISTENER_STACK_LOCATION}the_folder_menu_listeners.json` ).fetch_my_stack_with_callback( this, this.assign_the_stacks );
	}
	
	assign_the_stacks( the_stack ) {
		the_stack = the_stack.get_my_new_stack();
			for ( let this_event of the_stack ) {
			let the_label = this_event.substring( 0, this_event.indexOf( "." ) );
			switch ( the_label ) {
				case "the_folder_up_button"		:	this.my_menu_items.my_folder_up_button.attach_my_listeners( this_event ); break;
				case "the_folder_next_button"		:	this.my_menu_items.my_folder_next_button.attach_my_listeners( this_event ); break;
				case "the_folder_previous_button"	:	this.my_menu_items.my_folder_previous_button.attach_my_listeners( this_event ); break;
				case "the_folder_open_button"		:	this.my_menu_items.my_folder_open_button.attach_my_listeners( this_event ); break;
				case "the_folder_close_button"	:	this.my_menu_items.my_folder_close_button.attach_my_listeners( this_event ); break;
			}
		}
	}
}