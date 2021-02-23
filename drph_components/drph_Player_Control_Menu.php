<?php

class Player_Control_Menu {
	
	public $my_buttons = [];
	public $my_button_files;
	public $my_button_folder = "../assets/buttons/svg/player/";
	public $my_button_extension = "svg";
	public $my_button_height = "64px";
	public $my_play_button = "player_play";
	public $my_record_button = "player_record";
	public $my_stop_button = "player_stop";
	public $my_rewind_button = "player_rewind";
	public $my_fast_forward_button = "player_fast_forward";
	public $my_pause_button = "player_pause";
	public $my_skip_ahead_button = "player_skip_ahead";
	public $my_skip_back_button = "player_skip_back";
	public $my_skip_to_the_end_button = "player_skip_to_the_end";
	public $my_skip_to_the_beginning_button = "player_skip_to_the_beginning";
	public $my_now_playing_button = "player_now_playing";
	public $my_html = "\n\t<!-- The player menu starts here. -->\n
						\t<nav class='player menu' id='the_slide_show_player_menu'>\n
							\t\t<ul class='player menu' id='the_player_menu_list'>\n";
	
	function __construct( $the_parameter_array ) {
		@$parms = $the_parameter_array;
		$this->my_folder = @$parms[ "the_button_folder" ];
		$this->my_extension = @$parms[ "the_button_extension" ];
		$this->my_height = @$parms[ "the_button_height" ];
		if ( @$parms[ "skip to the beginning" ] ) { $this->my_buttons[] = $this->my_skip_to_the_beginning_button; }
		if ( @$parms[ "skip back" ] ) { $this->my_buttons[] = $this->my_skip_back_button; }
		if ( @$parms[ "rewind" ] ) { $this->my_buttons[] = $this->my_rewind_button; }
		if ( @$parms[ "record" ] ) { $this->my_buttons[] = $this->my_record_button; }
		if ( @$parms[ "play" ] ) { $this->my_buttons[] = $this->my_play_button; }
		if ( @$parms[ "pause" ] ) { $this->my_buttons[] = $this->my_pause_button; }
		if ( @$parms[ "stop" ] ) { $this->my_buttons[] = $this->my_stop_button; }
		if ( @$parms[ "fast forward" ] ) { $this->my_buttons[] = $this->my_fast_forward_button; }
		if ( @$parms[ "skip ahead" ] ) { $this->my_buttons[] = $this->my_skip_ahead_button; }
		if ( @$parms[ "skip to the end" ] ) { $this->my_buttons[] = $this->my_skip_to_the_end_button; }
		if ( @$parms[ "now playing" ] ) { $this->my_buttons[] = $this->my_now_playing_button; }
	}
	
	public function make_me_a_new_player_menu() {
		foreach ( $this->my_buttons as $this_button ) {
			$this->my_html .= "
					\t\t\t<li class='player menu' id='the_$this_button"."_list_item'>\n
						\t\t\t\t<img class='player menu' id='the_$this_button"."_button' src='$this->my_folder/$this_button.$this->my_extension' height='$this->my_button_height' onmouseenter='add_my_listeners( this );'>\n</li>\n";		
		}
		$this->my_html .= "\t\t</ul>\n
					\t</nav>\n
					\t<!-- The player menu ends here -->\n";
		echo $this->my_html;
	}
}