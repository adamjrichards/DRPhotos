<?php
function make_the_slide_show_html() {
	echo $_REQUEST[ "the_folder" ];
	if ( ! empty( $_REQUEST[ "the_folder" ] ) ) {
		$the_folder = "../assets/" . $_REQUEST['the_folder'] . "/";
		$the_files = array_slice( scandir( $the_folder ), 2 );
		$the_file_count = count( $the_files );
		$the_html = [];
		$hide_or_show = "show";
		for ( $i = 0; $i < $the_file_count ; $i++ ) {
			$this_filename = strstr( $the_files[$i], ".", true ); 
			$the_image_size = getimagesize( "$the_folder/$the_files[$i]" );
			$the_html[] = "<div class='slide_show slide viewscreen $hide_or_show' id='the_$this_filename"."_screen' style='width: $the_image_size[0]px; height: $the_image_size[1]'>\n
				<img id='the_$this_filename"."_image' class='slide_show slide viewscreen' src='$the_folder/$the_files[$i]' width='$the _image_size[0]' height='$the_image_size[1]' onclick='add_my_listeners( this, \"$the_folder/\"" . $the_files[ $i + 1 ] . " )'>\n\n
			</div>";
			$hide_or_show = "hidden";
		}
	} else {
		$the_html[] = "<div id='the_slide_show_screen' class='slide_show slide viewscreen' style='width: 100%; height: 100%'>\n
			<img id='the_slide_show_showbill' class='slide_show viewscreen showbill'  src='../assets/images/drphotos_curtain_2.1_flat_x1920y1080.png' width='1920' height='1080' onclick='add_my_listeners( this)'>\n\n
		</div>";
	}

	$the_html_string = implode( $the_html );
	echo $the_html_string;
}
function set_up_the_slide_show() {
	make_the_slide_show_html();
}

if ( $_REQUEST[ 'exe' ] ) {
	make_the_slide_show_html();
}