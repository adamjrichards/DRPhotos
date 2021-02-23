<?php	
	$image_root_folder = "resources/images";	
	$target_folder = $_GET[ "tf" ];
	$file_count = count(scandir("$image_root_folder/$target_folder"));
	
	for ( $i = 1; $i < $file_count; $i++ ){
		$file_count_string = str_pad( $i, 3, "0", STR_PAD_LEFT );
		$file_path = "$image_root_folder/$target_folder/$target_folder-$file_count_string.$image_file_ext";
		if ( file_exists( $file_path )) {
			if ( $i % 50 == 1 ) {
				echo ( "</section>" );
				echo ( "<section class='photo_section' id='photo_section_$i'>" );
			}
			if ( $i % 10 == 1 ) {
				echo ( "</page>" );
				echo ( "<page class='photo_page' id='photo_page_$i'>" );
			}
			$photo_figure_html ="<figure class='photo_figure' id='photo_figure_$file_count_string'>
									<img class='photo_image' id='photo_image_$file_count_string' src='$file_path'>
									<figcaption class='photo_caption_1' id='photo_caption_1_$file_count_string'>photo_caption_1</figcaption>	
									<figcaption class='photo_caption_2' id='photo_caption_2_$file_count_string'>photo_caption_2</figcaption>
								</figure>";
			echo( $photo_figure_html );			
		} //if		
	} // for
?>
flurble