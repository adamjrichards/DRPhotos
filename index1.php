<?php
	$photoset_folder = $_GET[ "tf" ];

	include( "components/ptf_parser_2.1.php" );
	include( "components/photoset_loader_2.1.php" );
	include( "components/photoset_header_2.1.php" );
	include( "components/photoset_footer_2.1.php" );

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Photography by Derek Richards</title>
		<link rel="stylesheet" href="css/drphotos_2.1.css">
		<script src="scripts/drphotos_2.1.js" defer></script>
		<script>
			document.onload = setTimeout( function(){
				"use strict";
				document.getElementById( "curtain" ).style.opacity = 1;
				document.getElementById( "curtain_left" ).style.opacity = 1;
				document.getElementById( "curtain_right" ).style.opacity = 1;
				document.getElementById( "text_dr" ).style.opacity = 1;
				document.getElementById( "text_photos" ).style.opacity = 1;
				document.getElementById( "text_start" ).style.opacity = 1;
			}, 1000, false );	
		</script>
	</head>

	<body>		
		<div class="curtain" id="curtain">
			<div class="curtain_panel" id="curtain_left"></div>
			<div class="curtain_panel" id="curtain_right"></div>
			<div class="curtain_panel" id="text_dr"></div>
			<div class="curtain_panel" id="text_photos"></div>
			<div class="curtain_panel" id="text_start"></div>		
		</div>

	</body>
</html>