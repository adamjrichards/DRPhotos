<?php
	include_once( "Slide_Show.php" );
	include( "Player_Control_Menu.php" );
	include( "Folder_Menu.php" );
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8"> 
		<title>Slide Show</title>

		<script type="text/javascript" src="../js/functions/utility_functions.js"></script>
		<script type="text/javascript" src="../js/classes/ME_1.1.js"></script>
		<script type="text/javascript" src="../js/classes/DOM_Cargo.js"></script>
		<script type="text/javascript" src="../js/classes/data_requests/Data_Request_With_MY_CARGO.js"></script>
		<script type="text/javascript" src="../js/classes/components/Slide_Show.js"></script>
		<script type="text/javascript" src="../js/classes/DOM_classes/DOM_Stack_1.1.js"></script>
		<script type="text/javascript" src="../js/classes/DOM_classes/DOM_Listener_JSON_Reader.js"></script>
		<script type="text/javascript" src="../js/classes/DOM_classes/DOM_Button.js"></script>
		<script type="text/javascript" src="../js/classes/DOM_classes/DOM_Menu.js"></script>
		<script type="text/javascript" src="../js/classes/media_player/Player_Menu.js"></script>
		<script type="text/javascript" src="../js/classes/media_player/Player_Menu_Buttons.js"></script>
		<script type="text/javascript" src="../js/classes/folder_menu/Folder_Menu.js"></script>
		<script type="text/javascript" src="../js/classes/folder_menu/Folder_Menu_Buttons.js"></script>
		<link rel="stylesheet" href="../css/Slide_Show.css">
		<link rel="stylesheet" href="../css/Folder_Menu.css">
		<link rel="stylesheet" href="../css/Player_Menu.css">
		<script type="text/javascript" src="../js/constants.js"></script>
		<script type="text/javascript">
			function add_my_listeners( me, my_this = globalThis ) { // acts on each button individually
				me.removeAttribute( "onmouseenter" );
				ME.set_my_new_self( me, "save the cargo" );
				ME.get_the_object_for_the_element( me ).activate_my_listeners();
			}
			const THE_SLIDE_SHOW = new Slide_Show( "the_slide_show", "images", "the_slide_show_section" );
		</script>
		
	</head>	

	<body id="the_body" class="slide_show">
		
		<header id="the_header" class="slide_show"></header>
		<aside id="the_left_sidebar" class="slide_show content">		
		<?php 
			$the_folder_menu = new Folder_Menu( [
				"the_button_folder" => "../assets/buttons/svg/folders",
				"the_button_extension" => "svg",
				"the_button_height" => "2em",
				"folder up" => true,
				"folder next" => true,
				"folder previous" => true,
				"folder open" => true,
				"folder close" => true
			] );
			$the_folder_menu -> make_me_a_new_folder_menu();
		?>
		</aside>
		<section id="the_slide_show_section" class="slide_show">
			<main class="slide_show content" id="the_main">
				
				<?php set_up_the_slide_show(); ?>
			
			</main>
		</section>
		<aside class="slide_show content" id="the_right_sidebar"></aside>
		<footer class="slide_show" id="the_footer">		
			<?php 
				$the_player_menu = new Player_Control_Menu( [
					"the_button_folder" => "../assets/buttons/svg/media_player",
					"the_button_extension" => "svg",
					"the_button_height" => "64px",
					"rewind" => false,
					"play" => true,
					"record" => false,
					"stop" => true,
					"fast forward" => false,
					"pause" => true,
					"skip ahead" => true,
					"skip back" => true,
					"skip to the end" => true,
					"skip to the beginning" => true,
					"now playing" => false
				] );
				$the_player_menu -> make_me_a_new_player_menu();
			?>
		</footer>
	</body>
</html>