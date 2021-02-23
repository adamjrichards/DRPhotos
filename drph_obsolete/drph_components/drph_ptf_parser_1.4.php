<?php
	
	function e($stuff){ echo( "$stuff<br>" ); }

	function ptf_parser( $photo_folder ) {
		//e("<pre>");
		$ptf_photoset_portfolio = null;
		$ptf_photoset_meta = null;
		$ptf_photoset_date = null;
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
			$photo_id = null;
			$photo_date = null;
			$photo_caption = null;
			$group_heading = null;
			$group_caption = null;
			$group_meta = null;
			
			if( preg_match( "/\||delete|edit|display|ptf|duplicate/", $figure ) == 1 ) { continue;	}
			
			if( preg_match( "/\b[Dd0][0-9]{3}-[0-9]{3}\w*\b/", $figure, $matches_array ) == 1 ) { 
				$photo_id = $matches_array[0];
				if( preg_match( "/\b\d{2,4}-\d{2}-\d{2}\b/", $figure, $matches_array ) == 1 ) {
					$photo_date = $matches_array[0];
					if( preg_match ( "/\b[A-Z][a-z]*\b[\W\s]*.*$/", $figure, $matches_array, PREG_OFFSET_CAPTURE, 20 ) == 1 ) {
						$photo_caption = preg_filter( "/[\t\*\{\}\^\\#\[\]\<\>]/", "", $matches_array[0] );
						//var_dump( $photo_caption );
					} // if
				} // if
				array_push( $photoset_figure_array, [ "photo_id" => trim( $photo_id, "*^\t" ), "photo_date" => trim( $photo_date, "*^\t" ), "photo_caption" => 		$photo_caption ] );
			} else {  
				if( preg_match( "/\W{3,}\w/", $figure, $matches_array ) === 1 ) {
					$group_heading = trim( $figure, " *^\\/\t" );
				} else if( preg_match( "/[\A^]\w[\w\s\.\,/", $figure ) === 0 ) {
					$group_caption = $figure;
				} else {
					$group_meta = $figure;
				}
				array_push( $photoset_figure_array, [ "group_heading" => trim( $group_heading, "*^\t" ), "group_caption" => trim( $group_caption, "*^\t" ), "group_meta" => trim( $group_meta, "*^\t" ) ] );
			} // if else if
		} // foreach
		//foreach( $photoset_figure_array as $figure ){
			//var_dump($figure);
		//}
		//e("</pre>");
		return $photoset_figure_array;
	} // ptf_parser()
	