<!DOCTYPE>

<html>

	<head>
	
		<title>Rapport de Stage 2012</title>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Language" content="fr" />
		
		<link rel="stylesheet" type="text/css" href="assets/style.css" />
		
		<script type="text/javascript" src="assets/jquery.js"></script> 
		<script type="text/javascript" src="assets/script.js"></script> 

	</head>
	
	<body>
		
		<h1>Stage <span class="number">2012</span> - Check It</h1>
		
		<div id="header">
			<div id="nav">
				<a href="index.php?point=homepage"><img src="assets/images/home.png" /></a>
				<a href="index.php?point=mission"><img src="assets/images/mission.png" /></a>
				<a href="index.php?point=stage"><img src="assets/images/stage.png" /></a>
				<a href="index.php?point=cv"><img src="assets/images/cv.png" /></a>
			</div>
			<div style="clear:both;"> </div>
		</div>
		
		<?php
			
			if(isset ($_GET['point']))
			{
				if($_GET['point'] == '')
				{
					$_GET['point'] = 'homepage';
					$point='homepage';
				}
				else 
				{
					$point=$_GET['point'];
				}
			}
			else 
			{
				$_GET['point'] = 'homepage';	
				$point='homepage';
			}
			
			$page='views/'.$point.'.html';	
			
			include $page;
		
		?>
		
		<div id="up">
			<a href="index.php?point=homepage"><img src="assets/images/up.png" /></a>
		</div>
		<div id="footer">
			<p>Calypso Skinner - Bachelor développement et technologies du web</p>
		</div>

	</body>

</html>