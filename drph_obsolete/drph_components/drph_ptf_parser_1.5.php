<?php
	
	function e($stuff){ echo( "$stuff<br>\n" ); }
	function p(){ echo( "</pre><pre>\n" ); }
	function v( $stuff ){ 
		//echo( "<b>$label</b>" );
		var_dump( $stuff );
		echo( "<hr>");
	}

	function ptf_parser( $photo_folder ) {
		//p();
		$ptf_photoset_portfolio = null;
		$ptf_photoset_meta = null;
		$ptf_photoset_date = null;
		$photoset_figure_array = array();
		$ptf_input_text = file_get_contents( "../resources/images/$photo_folder/$photo_folder.ptf" );
		//e($ptf_input_text);
		$ptf_photoset_title = strstr( $ptf_input_text, "\n", TRUE );
		$ptf_photoset_list = strstr( $ptf_input_text, "\n/gra/ " );
		$ptf_photoset_list = preg_filter( "#(\.psd|gra|p4|{\#})#", "", $ptf_photoset_list );
		$ptf_photoset_list = preg_replace( "#[\n\r]\s*/+\s*#", "FLAG_NEWLINE", $ptf_photoset_list );
		$ptf_photoset_list = preg_replace( "#/+#", "\t", $ptf_photoset_list );
		$ptf_photoset_list = preg_replace( "#  #", " ", $ptf_photoset_list );
		$ptf_photoset_array = preg_split( "/FLAG_NEWLINE/", $ptf_photoset_list );
		foreach( $ptf_photoset_array as $figure ) {
			//v($figure);
			$figure = trim( $figure, " /\n" );
			if( $figure == "" ) { continue; }
			if ( preg_match( "/(exec|cmd|tag|ESC|exit|ret|DEL|delete|edit|display|ptf|duplicate|layer)/", $figure ) === 1 ){ continue; }
			$photo_id = null;
			$photo_date = null;
			$photo_caption = null;
			$group_heading = null;
			$group_caption = null;
			$group_meta = null;
			if ($counter++ > 50 ) {
				break;
			}

		// photos
			if( preg_match( "/^([Dd0][0-9]{3}-[0-9]{2,3}\b).*$/", $figure ) === 1 ){
				preg_match( "/^([Dd0][0-9]{3}-[0-9]{2,3}\b)/", $figure, $matches_1 );
				$photo_id = $matches_1[0];
		// date
				if (preg_match( "/(\b([\d]{8,10}.*)\b|([-\d]{8}(\sto\s)[-\d]{5})|(\d{2}-\d{2}-\d{2}))/", $figure, $matches_2 ) === 1 ) {
					$photo_date = $matches_2[0];
					//v($photo_date);
			 	} 
				//e($photo_date);
				$photo_caption = substr( $figure, 19 );
				//v($photo_caption);
				array_push( $photoset_figure_array, [ "photo_id" => trim( $photo_id, "*^\t" ), "photo_date" => trim( $photo_date, "*^\t" ), "photo_caption" => 		$photo_caption ] );
				//v( $photoset_figure_array );
			} else {
				if( preg_match( "/!\d{2,4}\W\d\d-\d\d.+/", $figure, $matches_3 ) ){
					$group_meta = trim( $matches_3[0], " !\t" );
				} else if( preg_match( "/\W*\b([A-Z][a-z]*)\W*[A-Za-z0-9]*.*\W/", $figure, $matches_4 ) === 1 ) {
					$group_heading = trim( $matches_4[0], " *^\\/\t" );
				} else if( preg_match( "/(\b[A-Z][a-z]*\b)\W*[A-Za-z0-9]*.*\W/", $figure, $matches_5 ) === 1 ) {
					$group_caption = trim( $matches_5[0], " *^\\/\t" );
				}
				array_push( $photoset_figure_array, [ "group_heading" => trim( $group_heading, "*^\t" ), "group_caption" => trim( $group_caption, "*^\t" ), "group_meta" => trim( $group_meta, "*^\t" ) ] );
				//v($photoset_figure_array);
			} // if else if
		} // foreach
		//v( $photoset_figure_array );
		//p();
		return $photoset_figure_array;
	} // ptf_parser()
	