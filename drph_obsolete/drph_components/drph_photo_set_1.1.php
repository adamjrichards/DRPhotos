<?php
	$photoset_folder = $_GET[ "tf" ];
	include("ptf_parser_1.1.php");
	include( "photoset_loader_1.1.php" );
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo( "Photo-set $target_folder" );?></title>
</head>

<body>
	<?php
		include( "photoset_header_1.1.php" );
		$photoset = ptf_parser( $photoset_folder );
		load_photoset( $photoset_ptf, 100, 25, 5 );	
		include( "photoset_footer_1.1.php" );
	?>
</body>
</html>