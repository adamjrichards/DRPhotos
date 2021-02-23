<?php
	
	echo ( "drphotos<br>");
	$image_root_folder = "/resources/images";
	
	$target_folder = "d173";
	$file_count = count(scandir("$image_root_folder/$target_folder"));
	echo ( $file_count );
	$page_title = "";
	$page_index = "";
	$image_file_ext = "jpeg";
	$source_file_ext = "ptf";
	
	for ( $i = 1; $i < $file_count; $i++ ){
		$file_count_string = str_pad( $i, 3, "0", STR_PAD_LEFT );
		$photo_figure_html = "
			<!--figure class='photo_figure' id='photo_figure_$file_count_string'>
				<img class='photo_image' id='photo_image_$file_count_string' src=$image_root_folder/$target_folder/$target_folder-$file_count_string.$image_file_ext'>
				<figcaption='photo_caption_1' id='photo_caption_1_$file_count_string'>$photo_caption_1</figcaption>	
				<figcaption='photo_caption_1' id='photo_caption_1_$file_count_string'>$photo_caption_2</figcaption>
			</figure-->
		";
		echo( $photo_figure_html );
	}
?>