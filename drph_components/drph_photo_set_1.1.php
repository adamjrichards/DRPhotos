<?php
	$photo_set_folder = $_GET[ "tf" ];
	include("ptf_parser_1.1.php");
	include( "photo_set_loader_1.1.php" );
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo( "Photo-set $target_folder" );?></title>
</head>

<body>
	<?php
		include( "photo_set_header_1.1.php" );
		$photo_set_ptf = ptf_parser( $photo_set_folder );
		load_photo_set( $photo_set_ptf, 100, 25, 5 );	
		include( "photo_set_footer_1.1.php" );
	?>
</body>
</html>