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
 
	<!-- op deze pagina de informatie overzichten van de tabel product -->
 	<main>
        <p></p><a href="infcategorie.php">Overzicht Categorie</a>
        <p></p><a href="typeadd.php">INSERT NEW TYPE</a>
        <p></p><a href="typeupdate.php">UPDATE TYPE (WijZIGEN)</a>
        <p></p><a href="typedelete.php">DELETE TYPE</a>
    </main>
	
</body>
</html>