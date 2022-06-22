<!DOCTYPE html>
<html lang="nl">

<head>
	<meta charset="UTF-8">
	<title>Contactinformatie</title>
	<link rel="stylesheet" type="text/css" href="company.css">
</head>


<body>
	<header>
		<h1>Plaatboef</h1>
		<!-- hieronder wordt het menu opgehaald. -->
		<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

    echo "Logged in as " . $_SESSION['username'] . ".";
    include "navklant.html";

} else {
    include "nav.html";
}
?>
	</header>


	<!-- Hier komt alle contactinformatie te staan -->
	<main>
		<img class="centreer" src="images/plaatboef.jpg" alt="main page image" width="1500px" height="250px">
		<section>
			<article>
				<p> Welkom op de Contactpagina van de Plaatboef, wij helpen u met vragen over wat voor media wij
					verkopen en
					bijvoorbeeld onze vooraad.<br>
					U kunt ons vinden op deze locatie op deze tijden.</p>
			</article>
		</section>

		<section>
			<article>
				<p> Openingstijden<br>
					U kunt ons vinden op deze locatie op deze tijden.<br>
				</p>
				<table class="tijd">
					<tr class="tijd">
						<th>Dag</th>
						<th>Tijden</th>
					</tr>
					<tr class="tijd">
						<td>Maandag</td>
						<td>12:00–18:00</td>
					</tr>
					<tr class="tijd">
						<td>Dinsdag</td>
						<td>10:00–18:00</td>
					</tr>
					<tr class="tijd">
						<td>Woensdag</td>
						<td>10:00–18:00</td>
					</tr>
					<tr class="tijd">
						<td>Donderdag</td>
						<td>10:00–18:00</td>
					</tr>
					<tr class="tijd">
						<td>Vrijdag</td>
						<td>10:00–21:00</td>
					</tr>
					<tr class="tijd">
						<td>Zaterdag</td>
						<td>10:00–18:00</td>
					</tr>
					<tr class="tijd">
						<td>Zondag</td>
						<td>12:00–17:00</td>
					</tr>
				</table>
			</article>
		</section>

		<section>
			<article>
				<table class="tijd">
  					<tr class="tijd">
    				<th>Email</th>
    				<th>Telefoon</th>
  					</tr>
  					<tr class="tijd">
    				<td>info@plaatboef.nl</td>
    				<td>010-4365873</td>
  					</tr>
				</table>
				<iframe class="maps"
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2460.969027972434!2d4.4667216157850556!3d51.91627617970444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c434a20d0deaef%3A0x4a88d226244042ae!2sDe%20Plaatboef!5e0!3m2!1snl!2snl!4v1648034274815!5m2!1snl!2snl"
					width="1600" height="300" style="border: 0;" allowfullscreen="" loading="lazy"></iframe>
			</article>
		</section>

	</main>

</body>

</html>