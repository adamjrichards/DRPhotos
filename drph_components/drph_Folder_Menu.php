<?php

class Folder_Menu {
	
	public $my_buttons = [];
	public $my_button_files;
	public $my_button_folder = "../assets/buttons/svg/folders/";
	public $my_button_extension = "svg";
	public $my_button_height = "2em";
	public $my_folder_up_button = "folder_up";
	public $my_folder_next_button = "folder_next";
	public $my_folder_previous_button = "folder_previous";
	public $my_folder_close_button = "folder_close";
	public $my_folder_open_button = "folder_open";
	public $my_html = "\n\t<!-- The folder menu starts here. -->\n
						\t<nav class='folder' id='the_folder_navmenu'>\n
							\t\t<ul class='folder' id='the_folder_navlist'>\n";
	
	function __construct( $the_parameter_array ) {
		@$parms = $the_parameter_array;
		$this->my_folder = @$parms[ "the_button_folder" ];
		$this->my_extension = @$parms[ "the_button_extension" ];
		$this->my_height = @$parms[ "the_button_height" ];
		
		if ( @$parms[ "folder up" ] ) { $this->my_buttons[] = $this->my_folder_up_button; }
		if ( @$parms[ "folder next" ] ) { $this->my_buttons[] = $this->my_folder_next_button; }
		if ( @$parms[ "folder previous" ] ) { $this->my_buttons[] = $this->my_folder_previous_button; }
		if ( @$parms[ "folder open" ] ) { $this->my_buttons[] = $this->my_folder_open_button; }
		if ( @$parms[ "folder close" ] ) { $this->my_buttons[] = $this->my_folder_close_button; }
	}
	
	public function make_me_a_new_folder_menu() {
		foreach ( $this->my_buttons as $this_button ) {
			$this->my_html .= "
					\t\t\t<li class='folder' id='the_$this_button"."_list_item'>\n
						\t\t\t\t<img class='folder' id='the_$this_button"."_button' src='$this->my_folder/$this_button.$this->my_extension' height='$this->my_button_height' onmouseenter='add_my_listeners( this );'>\n</li>\n";		
		}
		$this->my_html .= "\t\t</ul>\n
					\t</nav>\n
					\t<!-- The folder menu ends here -->\n";
		echo $this->my_html;
	}
}