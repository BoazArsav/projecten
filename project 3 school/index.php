<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<title>Plaatboef</title>
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


	<!-- op de home pagina wat enthousiaste tekst over het bedrijf en de producten -->
	<main>
		<img class="centreer" src="images/plaatboef.jpg" alt="main page image" width="1500px" height="250px">
		<p> Welkom op de website van company. Wij vormen een jong en enthousiast bedrijf,
			waarmee wij u graag van dienst willen zijn met fantastische producten.</p>
		<p>
			Om producten te kunnen bestellen, moet u zich registreren als klant. Dat kunt u
			via het menu doen. Wanneer u inlogt, krijgt u de mogelijkheid om producten te
			bestellen. Daardoor hoeft u ook niet steeds uw adresinformatie in te voeren.
		</p>
		<p>
			Om u een indruk te geven van onze producten, ziet u hieronder een overzicht van
			de eerste zes van onze producten.
		</p>
		<p>
			<?php
			  // in onderstaande php source worden 6 producten op scherm getoond
			  include "zesproducten.php";
			  ?>
		</p>
	</main>

</body>

</html>