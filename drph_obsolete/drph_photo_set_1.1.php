<?php
	$target_folder = $_GET["tf"];	
echo( $target_folder );
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo( "Photo-set $target_folder" );?></title>
</head>

<body>
	<?php require( "photo_set_loader_1.1.php" ); load_image_set( $target_folder, 100, 25, 5 ); ?>
</body>
</html>