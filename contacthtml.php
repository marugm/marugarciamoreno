<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Contact · Maru García Moreno</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="marugarciamoreno.css">
		<link rel="shortcut icon" type="text/css" href="images/favicon.png">
		<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Dancing+Script|Lobster|Merriweather|Pacifico|Open+Sans+Condensed:300|Playfair+Display+SC" rel="stylesheet"> 
	</head>

	<body class="pagcontact">
			
			<div class="botonera">
					<div class="logo">
						<a href="index.html">
							<img src="images/marulogo.png" alt="Home">
						</a>
					</div> <!-- cierra logo -->
					<div class="boton">
						<ul>
						<li><a href="index.html">Photography</a></li>
						<li><a href="videos.html">Videos</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="contacthtml.php">Contact</a></li>
						</ul>
					</div> <!-- cierra boton -->
				
			</div> <!-- cierra botonera -->

		<h2>Contact</h2>
		
			
			<?php
				$hayerror = isset($_GET['error']) ? $_GET['error'] : null;
			
				if($hayerror == 'yes') {
				echo "<span class='mes1' id='notificacion'>" . 'Sorry! Your message couldnt be sent.' . "</span>";
				} else if($hayerror == 'no') {
				echo "<span class='mes2' id='notificacion'>" . 'Your message was sent.' . "</span>";
				}
			?>
			
			<script type="text/javascript">
				setTimeout(function(){ document.getElementById('notificacion').style.display='none' }, 5000);
			</script>

		<div class="contact">

			<div class="formulario">
				<form method="post" action="contact.php">
					Name: <input type="text" name="name" cols="50" required=""><br>
					Email: <input type="email" name="email" cols="50" required=""><br>
					Subject: <input type="text" name="subject" cols="50" required=""><br>
					Message: <textarea name="message" cols="50" rows="10" required=""></textarea><br>
					<input type="submit" name="submit" value="Submit" class="botonform">
				</form>
			</div> <!-- cierra formulario -->
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96715.26618098015!2d-58.48878681185883!3d-34.61826276015934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca3b4ef90cbd%3A0xa0b3812e88e88e87!2sBuenos+Aires%2C+CABA%2C+Argentina!5e0!3m2!1ses!2sus!4v1508719516840" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div> <!-- cierra map -->

		</div> <!-- cierra contact -->

		<div class="footer">
			
			<div class="facebook">
				<a href="https://www.facebook.com/marugarciamorenophotography" target="_blank">
					<img src="images/footer/facebook.png">
				</a>
			</div>
			
			<div class="instagram">
				<a href="https://www.instagram.com/marugarciamoreno" target="_blank">
					<img src="images/footer/instagram.png">
				</a>
			</div>

			<div class="pinterest">
				<a href="https://www.pinterest.com/rainbowarri0r" target="_blank">
					<img src="images/footer/pinterest.png">
				</a>
			</div>

			<div class="copy">
				<p>&copy; 2017 Copyright <span>Maru García Moreno</span></p>
			</div>

		</div> <!-- cierra footer -->
	
	</body>

</html>