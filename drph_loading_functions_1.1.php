<?php

	function load_large_image_set ( $file_count, $number_of_images, $section_size, $page_size ) {
		// when the browser says "loaded", it loads the next set	
		for ( $i = 1; $i < $file_count; $i++ ){
			for ( $j = 1; $j < $section_size; $j++ ){
				for ( $k = $1; $k < $page_size; $k++ ){
					$file_count_string = str_pad( $i, 3, "0", STR_PAD_LEFT );
					$file_path = "$image_root_folder/$target_folder/$target_folder-$file_count_string.$image_file_ext";
					if ( file_exists( $file_path )) {
						if ( $i % 5 == 0 ) {
							echo ( "\t\t</page>\n" );
							if ( $i % 25 == 0 ) {
								$section_number++;
								echo ( "\t</section>\n" );
									
									load_next_image_set($i, 50 );// get the next fifty
								echo( "\t<section class='photo_section' id='photo_section_$section_number'>\n" );
							}
							$page_number++;
							echo ( "\t\t<page class='photo_page' id='photo_page_$page_number'>\n" );
						}
						$photo_figure_html ="\t\t\t<figure class='photo_figure' id='photo_figure_$file_count_string'>\n\t\t\t\t<img class='photo_image' id='photo_image_$file_count_string' src='$file_path'>\n\t\t\t\t<figcaption class='photo_caption_1' id='photo_caption_1_$file_count_string'>photo_caption_1</figcaption>\n\t\t\t\t<figcaption class='photo_caption_2' id='photo_caption_2_$file_count_string'>photo_caption_2</figcaption>\n\t\t\t</figure>\n";
						echo( $photo_figure_html );			
					} //if		
				} // for
			} // for
		} // for		
	}