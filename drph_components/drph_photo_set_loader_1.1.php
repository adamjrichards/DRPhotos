<?php
	
	function load_photo_set( $photo_set_array, $max_images_per_load, $images_per_section, $images_per_page ) {
		$folder_meta = $photo_set_array[0]
		$html = "\t<section class='photo_section' id='photo_section_1'>\n\t\t<page class='photo_page' id='photo_page_1'>";
		$images_root = "../resources/images";
		$image_file_ext = "jpeg";
		$file_count = count(scandir("$image_root_folder/$target_folder"));

		if ( $file_count < $max_images_per_load ) {
			$max_images_per_load = $file_count;
		} // if
		$section_number = 1;
		$page_number = 1;

		$file_count_string = str_pad( $i, 3, "0", STR_PAD_LEFT );
		$file_path = "$image_root_folder/$target_folder/$target_folder-$file_count_string.$image_file_ext";
		if ( file_exists( $file_path )) {
		for ( $i = 1; $i <= $max_images_per_load; $i++ ){	
				$html .= "\t\t\t<figure class='photo_figure' id='photo_figure_$file_count_string'>\n\t\t\t\t<img class='photo_image' id='photo_image_$file_count_string' src='$file_path'>\n\t\t\t\t<figcaption class='photo_caption' id='photo_caption_$file_count_string'>$photo_caption</figcaption>\n\t\t\t\t<figcaption class='photo_caption_2' id='photo_meta_$file_count_string'>$photo_set_array$photo_meta</figcaption>\n\t\t\t</figure>\n";
				if ( $i == $max_images_per_load | $i == $file_count ) {break;};	
				if ( $i % $images_per_page == 0 ) {
					$html .= "\t\t</page>\n";
					if ( $i % $images_per_section == 0 ) {
						$section_number++;
						$html .= "\t</section>\n";			
						$html .= "\t<section class='photo_section' id='photo_section_$section_number'>\n";
					}
					$page_number++;
					$html .= "\t\t<page class='photo_page' id='photo_page_$page_number'>\n";
				}
			} //if		
		} // for
		echo( $html .= '\t\t</page>\n\t</section>\n' );
	} // load_image_set()
	