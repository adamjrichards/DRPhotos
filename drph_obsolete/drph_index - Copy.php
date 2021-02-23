<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<section class='photo_section' id="photo_section_1">
		<page class='photo_page' id="photo_page_1">
<?php
	function load_image_set( $target_folder, $max_images_per_load, $images_per_section, $images_per_page ) {		
		$html = "";
		$image_root_folder = "resources/images";
		$image_file_ext = "jpeg";
		$file_count = count(scandir("$image_root_folder/$target_folder"));

		if ( $file_count < $max_images_per_load ) {
			$max_images_per_load = $file_count;
		} // if
		$section_number = 1;
		$page_number = 1;


		for ( $i = 1; $i <= $max_images_per_load; $i++ ){
			$file_count_string = str_pad( $i, 3, "0", STR_PAD_LEFT );
			$file_path = "$image_root_folder/$target_folder/$target_folder-$file_count_string.$image_file_ext";
			if ( file_exists( $file_path )) {
				$html .= "\t\t\t<figure class='photo_figure' id='photo_figure_$file_count_string'>\n\t\t\t\t<img class='photo_image' id='photo_image_$file_count_string' src='$file_path'>\n\t\t\t\t<figcaption class='photo_caption_1' id='photo_caption_1_$file_count_string'>photo_caption_1</figcaption>\n\t\t\t\t<figcaption class='photo_caption_2' id='photo_caption_2_$file_count_string'>photo_caption_2</figcaption>\n\t\t\t</figure>\n";
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
		echo( $html );		
	} // load_image_set()
			
	load_image_set( "d211", 114, 25, 5 );
?>
		</page>
	</section>	
</body>
</html> 