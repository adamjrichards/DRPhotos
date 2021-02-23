<?php
	function ptf_parser( $photo_folder ) {
		
		$ptf_text_file = file_get_contents( "../resources/images/$photo_folder/$photo_folder.ptf" );
		//$photo_set_meta = substr( $ptf_text_file, 0, strstr( $ptf_text_file, "END META", TRUE ) );
		$ptf_text_string = preg_filter( "#[/\^(\{\#\})()]#", "", $ptf_text_file );
		$ptf_text_array = preg_split( "#[/\^(\{\#\})()]#", $ptf_text_file ); //strstr( , "BEGIN CONTENT", FALSE ) );
		$ptf_data_array = array();
							    
		foreach( $ptf_text_array as $parse_me )  {
			if ( preg_match( "/view options/", $parse_me ) === 1 ) { continue; }
			if ( preg_match("/next /", $parse_me ) === 1 ) { continue; }
			if ( preg_match("/previous /", $parse_me ) === 1 ) { continue; }
			if ( preg_match("/find bookmark/", $parse_me ) === 1 ) { continue; }
			if ( preg_match("/\{#\}/", $parse_me ) === 1 ) { continue; }
			if ( preg_match("/!Camera/", $parse_me ) === 1 ) { continue; }
			if ( preg_match("/del/", $parse_me )=== 1 ) { continue; }
			if ( preg_match("/DEL/", $parse_me )=== 1 ) { continue; }
			if ( preg_match("/ret/", $parse_me )=== 1 ) { continue; }
			if ( preg_match("/This tag/", $parse_me ) === 1 ) { continue; }

			switch( trim( $parse_me ) ) {
				case "ptf"	:
				case "gra"	:
				case "{#}"	:
				case ""		:
				case "**"		: break;
				default	: array_push( $ptf_data_array, ltrim($parse_me,"!" ));				
			} // switch		
		} // foreach

		$photo_folder = "";
		$photo_date = "";
		$photo_caption = "";
		$photo_meta = "";
		$photo_figure_array = array();
		//$photo_meta_array = array( "photo_set_folder" => $photo_set_folder, "photo_set_date" => $photo_set_date, "photo_set_caption" => $photo_set_caption, "photo_set_meta" => $photo_set_meta );
		
		function parse( $parse_this ) {
			if( preg_match( "/\d\d/\-", $parse_this ) == 1 ) {
				return "date";
			} elseif ( preg_match( "/[Dd\d]\d\d\d/", $parse_this ) == 1 ) {
				return "folder";
			} elseif ( preg_match( "/[A-Z][a-z\d]]/", $parse_this ) == 1 ) {
				return "caption";
			} else {
				return "meta";
			} // if else... 
		} //parse()
		
			
		$photo = array( "folder" => "", "date" => "", "caption" => "", "meta" => "" );		
		for( $i = 1; $i <= count($ptf_data_array); $i++ ) { 		
			if ( parse( $ptf_data_array[$i] ) == "folder" ) {
				$photo[ "folder"] = $ptf_data_array[$i++];
				if ( parse( $ptf_data_array[$i] ) == "date" ) {
					$photo[ "date"] = $ptf_data_array[$i++];
					if (parse( $ptf_data_array[$i] ) == "caption" ) {
						$photo[ "caption"] = $ptf_data_array[$i++];						
						if (parse( $ptf_data_array[$i] ) == "meta" ) {
							$photo[ "meta"] = $ptf_data_array[$i];
						} //if
					} //if
				} //if
			} //if
			array_push( $photo_figure_array, $photo );
		} //for
		return $photo_figure_array;
	} // ptf_parser()
	