<!DOCTYPE html>
<html lang="nl">

<head>
	<meta charset="UTF-8">
	<title>Profielpagina</title>
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


	<!-- Hier komt alle informatie van de klant te staan -->
	<main>



	

	
	</main>

</body>

</html>