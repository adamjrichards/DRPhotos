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
		e("<pre>");
		$ptf_photoset_portfolio = null;
		$ptf_photoset_meta = null;
		$ptf_photoset_date = null;
		$group_caption = null;
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
		$ptf_photoset_list = preg_replace( "#[\n\r]\s*/+\s*#", "FLAG_NEWLINE", $ptf_photoset_list );
		$ptf_photoset_list = preg_replace( "#/+#", "\t", $ptf_photoset_list );
		$ptf_photoset_list = preg_replace( "#  #", " ", $ptf_photoset_list );
		//e("LIST: $ptf_photoset_list");
		$ptf_photoset_array = preg_split( "/FLAG_NEWLINE/", $ptf_photoset_list );
		//var_dump( $ptf_photoset_array );
		foreach( $ptf_photoset_array as $figure ) {
			$figure = trim( $figure, " /\n" );
			//e($figure);
			$photo_folder = $last_photo_folder;
			$group_meta = $last_group_meta;
			$photo_date = null;
			$photo_caption = null;
			//$group_caption = null;
			$group_heading = null;
			if( preg_match( "/\W/", $figure ) == 0 ) {
				continue;
			}
			if( preg_match( "/delete|edit|display|ptf|duplicate/", $figure ) == 1 ) { continue;	}
			if( preg_match( "/[Dd0][0-9]{3}-[0-9]{3}/", $figure, $matches_array ) == 1 ) { $photo_folder = $matches_array[0]; }
			if( preg_match( "/(\d{2}-\d{2}-\d{2})/", $figure, $matches_array ) == 1 ) { $photo_date = $matches_array[0]; }
			if( preg_match ( "/\A\w+.+\z/" ), $figure, $matches_array, PREG_OFFSET_CAPTURE, 20 ) ) == 1 ) { $photo_caption = $matches_array[0]; } 

						try {
							$photo_caption = substr( $figure, 18, strpos( $figure, "\n" ) + 1 );
							try {
								$photo_meta .= substr( $figure, strrpos( $photo_caption ) + 1, FALSE );
							} catch( Exception $e ) {
								$photo_meta = $last_photo_meta;
							} // try catch
						} catch( Exception $e ) {
							$photo_meta .= $figure;
							continue;
						} // try catch
					} catch( Exception $e ) {
						$photo_meta .= $figure;
						continue;
					} // try catch
					array_push( $photoset_figure_array, [ "photo_folder" => trim( $photo_folder, "*^\t" ), "photo_date" => trim( $photo_date, "*^\t" ), "photo_caption" => trim( $photo_caption, "*^\t" ), "photo_meta" => trim( $photo_meta, "*^\t" ) ] );
					$photo_caption = null;
					$photo_meta = null;
					$last_photo_folder = null;
				} catch( Exception $e ) {				
					$photo_folder = $last_photo_folder;
					$photo_caption = null;
					$photo_date = null;
					$photo_meta = $last_photo_meta;
				} // try catch				
			} else {
				try {
					if( preg_match( "/\*\*\s+\^/", $figure ) === 1 ) { // Headings follow **  ^
						$group_heading = strstr( $figure, "^", TRUE );
					} else if( preg_match( "/(\d{2}-\d{2}-\d{2})$/", $figure ) === 1 ) {
						$group_caption = $figure;
						//$group_meta 
					}  // if else if
					array_push( $photoset_figure_array, [ "group_heading" => trim( $group_heading, "*^\t" ), "group_caption" => trim( $group_caption, "*^\t" ), "group_meta" => trim( $group_meta, "*^\t" ) ] );
					$group_meta = null;
					$group_heading = null;
					$group_caption = null;
					$last_group_meta = null;
				} catch( Exception $e ) {
					$group_heading = null;
					$group_caption = null;
					$group_meta = $last_group_meta;
				} // try catch
			} // if else
		} // foreach
		//var_dump( $photoset_figure_array );
		foreach( $photoset_figure_array as $figure ){
			var_dump($figure);
		}
		e("</pre>");
		return $photoset_figure_array;
	} // ptf_parser()
	