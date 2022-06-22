<!DOCTYPE html>
<html lang="nl"> 
<head>
	 <meta charset="UTF-8">
	 <title>Company</title>
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
            <h2>Zoek klanten op woonplaats</h2>
            <form action="zkklantwpl.php"></form>
        </p> 
		<p>
            <h2>Zoek klanten op postcode</h2>
            <form action="zkklantpcd.php"></form>

        </p>
		<p>
            <h2>Zoek producten op type</h2>
            <form action="zkproducttype.php"></form>

		</p>
		<p>
            <h2>Zoek producten op naam</h2>
            <form action="zkproductnaam.php"></form>
			<section class="zoekfuncties">
    	<main id="zoekfuncties">
    	<form class="searchbar2" method="post" action="zkproductnaam.php">
      	<input type="text" placeholder="Product Naam" name="search2">
      	<button type="submit" value="search2">search</button>
   		</form>
		</p>
	</main>
	
</body>
</html>
	
