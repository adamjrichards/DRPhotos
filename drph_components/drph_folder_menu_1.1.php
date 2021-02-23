<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		chdir( "../resources/images" );
		$resource_list = scandir( "." );
		echo( "<ul>" );
		foreach ( $resource_list as $resource_name ) {
			if( is_dir( $resource_name )) {
				echo ( "<li><a href='photo_set_1.1.php?tf=$resource_name'>$resource_name</a></li>\n");
			} //if						
		}
		echo( "</ul>");
	
	
	
	
	?>
	
</body>
</html>