<!DOCTYPE html>
<html lang="nl"> 
<head>
	 <meta charset="UTF-8">
	 <title>Type Toevoegen</title>
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
		<p>
      <h2>Voeg Type toe in de Database</h2>
			<section class="zoekfuncties">
    	<main id="zoekfuncties">
    	<form class="searchbar2" method="post" action="typeaddscript.php">
      	<input type="text" placeholder="Typenaam" name="typeadd">
      	<button type="submit" value="typeadd" name="addtype">add</button>
   		</form>
		</p>
	</main>
	
</body>
</html>
	
