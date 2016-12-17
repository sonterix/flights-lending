<DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link href="styles/style.css" rel="stylesheet">
	<title>Sky Flight</title>
</head>
<body>
	<head>
		<div id="headBlock">
			<a href="/"><div id="logo"></div></a>
			<div id="menu">
				<a href="#whyWe">Why we?</a>
				<a href="#aboutFutureFlight">About future flight</a>
				<a href="#howWeWork">How we work?</a>
				<a href="#getStart">Get started!</a>
			</div>
		</div>
	</head>
		<div id="firstBlock">
			<div id="firstBlockCenter">
				<p class="firstBlockCenterText">You want to fly? <br>
					<span class="moon">Free tickets to the moon. Hurry up man. Flying to the moon with an instructor and free snacks. Become pioneer of space with us.</span></p>
				<a class="firstBlockCenterButton" href="#getStart">CLIK TO FLY UP</a>

			</div>
		</div>
		<p><a name="whyWe"></a></p>
		<div id="secondBlock">
			<?php
				require('php/arrays.php');
				require('php/auto.php');
			?>
		</div>
		<p><a name="aboutFutureFlight"></a></p>
		<div id="thirdBlock">
			<div id="thirdBlockText">
				<h2>ABOUT FUTURE FLIGHT</h2>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text.
				It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. <br><br>
				Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. <br><br>
				The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
			</div>
			<div id="video">
				<video  src="video/VideoSpace.mp4"  autoplay muted loop></video>
			</div>
		</div>
		<p><a name="howWeWork"></a></p>
		<div id="fourthBlock">
			<div id="fourthBlockText">
				<h2>HOW WE WORCK?</h2>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text.<br>
				It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. <br><br>
				Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
			</div>
			<div id="fourthBlockImg"></div>
		</div>
		<p><a name="getStart"></a></p>
		<div id="fifthBlock">
			<h2>START TO TRAVEL WITH US</h2>
			<div id="register">
				<input type="email" placeholder="Enter E-mail" placeholder-size="30">
				<a href="mailto:sonterixo@gmail.com">REGISTER</a>
			</div>
			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
		</div>
	<footer>
		<div id="footerBlock">
			<div id="footerBlocImage"></div>
		</div>
	</footer>
</body>
</html>