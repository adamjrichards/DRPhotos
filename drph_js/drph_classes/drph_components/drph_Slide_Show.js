class Show {
	constructor( me = "a_show", the_daddy = "the_main" ) {
		this.myself = _elementize( me, "section" );
		this.my_daddy = _elementize( the_daddy, "main" );
		this.my_daddy.appendChild( this.myself );			
	}
}

class Slide_Show extends Show {

	constructor( me, the_folder, the_daddy ) {
		super( me, the_daddy );
		this.my_folder = the_folder;
		this.my_slide_show_player = new Slide_Show_Player( this.myself, this.my_folder, this.my_daddy );
		let the_callback = function( the_response_text, the_new_cargos_label ) {
			Object.defineProperty( MY_CARGO, the_new_cargos_label, { writable: true, configurable: true, value: the_response_text } );
		}
		new Data_Request_With_MY_CARGO( `../components/Slide_Show.php?exe=true&the_folder=${the_folder}`, "my_slide_show_content", "the_slide_show_screen", the_callback );
	}
}
class Player {
	constructor( me, the_mimetype, the_source, the_daddy ) {
		this.myself = _elementize( me );
		this.my_mimetype = the_mimetype;
		this.my_source = the_source;
		this.my_screen = {};
	}
}

class Slide_Show_Player extends Player {
	constructor( me, the_folder, the_daddy ) {
		super( me, "image/jpg", the_folder, the_daddy );
		this.my_slide_show_folder_menu = new Folder_Menu( "the_slide_show_folder_menu", "slide_show folder menu", "the_left_sidebar" );
		Object.defineProperty( MY_CARGO, "my_slide_show_folder", { writable: true, configurable: true, value: this.my_slide_show_folder_menu } );
		this.my_slide_show_player_menu = new Player_Menu( "the_slide_show_player_menu", "slide_show player menu", "the_footer", "slide show" );
		Object.defineProperty( MY_CARGO, "my_slide_show_player", { writable: true, configurable: true, value: this.my_slide_show_player_menu } );
	}	
}