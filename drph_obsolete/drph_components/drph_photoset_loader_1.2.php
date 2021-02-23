<?php
	
	function load_photoset( $photoset_folder, $photoset_array, $max_pages_per_load ) {
		e("Load photoset");
		$images_root = "../resources/images";
		$image_file_ext = "jpeg";
		$section_number = 1;
		$page_number = 1;
		$group_item_number = 1;
		$photo_item_number = 1;
		$group_page_html = "";
		$photoset_section_html = "";
		foreach( $photoset_array as $pf ) {
			//e( "pf" );
			if( $page_number % $max_pages_per_load === $max_pages_per_load - 1 ) {
				$photoset_section_html .= "</section>";
			}
			if( $page_number % $max_pages_per_load === 0 ) {
				$photoset_section_html .= "<-section class='photoset_section' id='photoset_section_$section_number++'>";				
				//echo( "$photoset_section_html\n" );
			}
			if( $pf[ "group_heading" ] ) {
				//e("group_heading");
				if ( $group_item_number === 1 ) {
					$group_page_html .= "<-page class='photo_group' id='photo_group_$group_item_number'>\n";
				} else {
					$group_page_html .= "</page>\n<-page class='photo_group' id='photo_group_$group_item_number'>\n";					
				}
				$group_item_number++;
				if( ! is_null( $pf[ "group_heading" ] ) ) {
					$group_heading = $pf[ "group_heading" ];
					$group_heading_html = "<-h1 class='group_heading' id='group_heading_$group_item_number'>$group_heading</h1>\n";
					$group_item_number++;
					$group_page_html .= $group_heading_html;
				} // if
				if( ! is_null( $pf[ "group_caption" ] ) ) {
					$group_caption = $pf[ 'group_caption' ];
					$group_caption_html = "<-p class='group_caption' id=group_caption_$group_item_number'>$group_caption</p>\n";
					$group_item_number++;
					$group_page_html .= $group_caption_html;
				} // if
				if( ! is_null( $pf[ "group_meta" ] ) ) {
					$group_meta = $pf[ "group_meta" ];
					$group_meta_html = "<-data value='$group_meta'>Folder: $photoset_folder; Group item number: $group_item_number</data>\n";
					$group_item_number++;
					$group_page_html .= $group_meta_html;
				} // if
				//echo( "$group_page_html\n" );
			} else if ( $photo_figure[ "photo_id"] ) {
				//e("photo_figure");
				$photo_figure_html = "<-figure class='photo_figure' id='photo_figure_$photo_item_number'>";
				$photo_item_number++;
				$photo_id = $pf[ "photo_id" ];
				$photo_picture_html = "<-picture class='photo_image' id='photo_image_$photo_item_number' src='../resources/images/$photoset_folder/$photo_id.jpeg' ]'>";
				$photo_item_number++;
				$photo_date = $pf[ "photo_date" ];
				$photo_data_html = "<-data value='$photo_id $photo_date'>$photo_date</data>";
				if( intval( substr( $photo_date, 0, 2 ) ) <= 30 ) {
					$long_date = str_pad( $photo_date, 2, "20", STR_PAD_LEFT );
				} else {
					$long_date = str_pad( $photo_date, 2, "19", STR_PAD_LEFT );
				} // if else
				$photo_time_html = "<-time datetime='$photo_long_date'>$photo_long_date</time>";	
				$photo_figure_html .= "$photo_data_html\n$photo_picture_html\n$photo_time_html\n";
				if( ! is_null( $pf[ "photo_caption" ] ) ) {
					$photo_caption = $pf[ "photo_caption" ];
					$photo_figcaption_html = "<-figcaption class='photo_caption' id='photo_caption_$photo_item_number'>$photo_caption</figcaption>";
					$photo_item_number++;
					$photo_figure_html .= "$photo_figcaption_html\n";
				} // if
			} // if
			//echo( "$photo_figure_html\n" );
		} // if
		//echo( "</pre>" );
	} // load_image_set()