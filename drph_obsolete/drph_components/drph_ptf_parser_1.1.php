<?php
	
	function e($stuff){ echo( "$stuff\n" ); }

	function remove_line_breaks( $text_in, $terminator ) {
		if( is_null( $terminator ) ) {
			return preg_split( "/\n/", $text_in );
		} else {
			return preg_filter( "/\n/", $terminator, $text_in );
		}	  // if else	
	} // break_lines

	function ptf_parser( $photo_folder ) {
		$ptf_photoset_portfolio = null;
		$ptf_photoset_meta = null;
		$ptf_photoset_date = null;
		$group_heading = null;
		$group_meta = null;
		$photoset_figure_array = array();
		$ptf_input_text = file_get_contents( "../resources/images/$photo_folder/$photo_folder.ptf" );
		//e($ptf_input_text);
		$ptf_photoset_title = strstr( $ptf_input_text, "\n", TRUE );
		$ptf_input_text = strstr( $ptf_input_text, "/**//" );
		$ptf_photoset_portfolio = strstr( $ptf_input_text, "\n", TRUE );
		$ptf_photoset_list = strstr( $ptf_input_text, "**///^" );
		//e("TITLE: $ptf_photoset_title");
		//e("PORTFOLIO: $ptf_photoset_portfolio");
		$ptf_photoset_list = preg_filter( "#gra|exec|cmd|tag|ESC|exit|ret|DEL|{\#}#", "", $ptf_photoset_list );
		$ptf_photoset_list = preg_filter( "#\n\s*/+\s*#", "", $ptf_photoset_list );
		$ptf_photoset_list = preg_replace( "#/+#", "\t", $ptf_photoset_list );
		$ptf_photoset_list = preg_replace( "#  #", " ", $ptf_photoset_list );
		//e("LIST: $ptf_photoset_list");
		$ptf_photoset_array = preg_split( "/[\n\r]/", $ptf_photoset_list );
		//var_dump( $ptf_photoset_array );
		foreach( $ptf_photoset_array as $figure ) {
			$figure = trim( $figure );
			if( preg_match( "/\^/", $figure ) ) {
				$group_heading = trim( $figure );
			} else if( preg_match( "/\*\s/", $figure ) ) {
				$group_meta = trim( $figure );
			} else {
				$photo_folder = substr( trim( $figure ), 0, 8 );
				$photo_date = substr( trim( $figure ), 9, 9 );
				try {
					$photo_caption = substr( trim( $figure ), 18, strpos( $figure, "." ) + 1 );
				} catch( Exception $e ) {
					$photo_caption = null;
				}
				try {
					$photo_meta = strstr( $figure, $photo_caption, FALSE );
				} catch( Exception $e ) {
					$photo_meta = null;
				}
				array_push( $photoset_figure_array, [ "folder" => $photo_folder, "date" => $photo_date, "caption" => $photo_caption, "meta" => $photo_meta ] );
			}
		} // foreach
		//var_dump( $photoset_figure_array );
		return $photoset_figure_array;
	} // ptf_parser()
	