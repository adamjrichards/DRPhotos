<div id='extensible_page'>
	<?php
		function upload_photoset( $photoset_folder, $max_pages_per_section, $max_images_per_set ){
			$target_folder = "../resources/images/$target_folder";
			if ( is_dir( $target_folder ) ) {
				$file_count = count( scandir( $target_folder ) );
				while( $file_count > 0 ) {
					$file_count -= $max_images_per_set;
					echo( load_photoset( ptf_parser( $photoset_folder ), $photoset_array, 3, 50 ) );		
				}
			}			
		}
	?>
</div><!-- Content ends -->