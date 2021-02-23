<?php
	
	function load_photoset( $photoset_folder, $photoset_array, $max_pages_per_load ) {
		$images_root = "../resources/images";
		$image_file_ext = "jpeg";
		$serial_number = 0;
		$page_number = 0;
		$page_html = "";
		foreach( $photoset_array as $pf ) {
			if( $group_page_html != "" ) {
				$group_page_html = "</page>";
			}
			if( $pf[ "group_heading" ] ) {
				$group_page_html = "";
				if( $page_number++ % $max_pages_per_load === 0 ) {
					// call next section here
					$group_page_html = "\t<section class='photoset_section' id='photoset_section_" . ++$serial_number . "'>\n";
					$group_page_html .= "\t\t<page class='photo_group' id='photo_group_" . ++$serial_number . "'>\n";
				} else {
					$group_page_html .= "\t\t</page>\n\t\t<page class='photo_group' id='photo_group_" . ++$serial_number . "'>\n";
				} // if else
				$group_page_html .= "\t\t\t<h1 class='group_heading' id='group_heading_" . ++$serial_number . "'>" . $pf[ "group_heading" ] . "</h1>\n";
				$group_page_html .= "\t\t\t<p class='group_caption' id=group_caption_" . ++$serial_number . "'>" . $pf[ 'group_caption' ] . "</p>\n";
				$group_page_html .= "\t\t\t<data value='" . $pf[ "group_meta" ] . "'>Folder: $photoset_folder; Group item number: " . ++$serial_number . "</data>\n";
				if( $page_number++ % $max_pages_per_load === 2 ) {
					$group_page_html .= "\t\t</page>\n\t</section>\n";
				} // if
				$page_html .= $group_page_html;
			} else if ( $pf[ "photo_id"] ) {
				$photo_figure_html = "\t\t\t<figure class='photo_figure' id='photo_figure_" . ++$serial_number . "'>\n";
				$photo_figure_html .= "\t\t\t\t<img class='photo_image' id='photo_image_" . ++$serial_number . "' src='../resources/images/$photoset_folder/" . $pf[ "photo_id" ] . ".jpeg' ]'>\n";
				$photo_figure_html .= "\t\t\t\t<data value='" . $pf[ "photo_id" ] . " " . $pf[ "photo_date" ] . "'>" . $pf[ "photo_date" ] . "</data>\n";
				if( intval( substr( $pf[ "photo_date" ], 0, 2 ) ) <= 30 ) {
					$photo_long_date = str_pad( $pf[ "photo_date" ], 2, "20", STR_PAD_LEFT );
				} else {
					$photo_long_date = str_pad( $pf[ "photo_date" ], 2, "19", STR_PAD_LEFT );
				} // if else
				$photo_figure_html .= "\t\t\t\t<time datetime='$photo_long_date'>$photo_long_date</time>\n";	
				if( ! is_null( $pf[ "photo_caption" ] ) ) {
					$photo_figure_html .= "\t\t\t\t<figcaption class='photo_caption' id='photo_caption_" . ++$serial_number . "'>" . $pf[ 'photo_caption' ] . "</figcaption>\n";
				} // if
				$photo_figure_html .= "\t\t\t</figure>\n";
				$page_html .= $photo_figure_html;
			} // if
		} // if
		e($page_html);
	} // load_image_set()
	