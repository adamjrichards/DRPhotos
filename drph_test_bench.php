<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style>
		.hide_me {
			display: none;
		}
		div {
			top: 5vh;
			left: 5vw;
			width: 100%;
			height: 5em;
			background: blue;
			clip-path: polygon( 5em 0, calc( 100% - 5em ) 0, 100% 100%, 0% 100% );
		}
		section {
			position: absolute;
			top: 15vh;
			left: 15vw;
			width: 65vw;
			height: 65vh;
			background: yellow;
			perspective: 300px;
		}
			
			
	</style>
</head>

<body>
	<section>
	<div></div>
		</section>
</body>
</html>