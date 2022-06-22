<!DOCTYPE html>
<html lang="nl"> 
<head>
	 <meta charset="UTF-8">
	 <title>Type Aanpassen</title>
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
 
	<!-- Hier Pas je de naam van de Type toe -->
 	<main>	
     <?php 
	 
        if(isset($_POST["updatetype"])){
        require_once("dbconnect.php");
        $query = $db->prepare("SELECT * FROM types WHERE idtype = :idtype");
        $query->bindValue(":idtype", $_POST['idtype']);
        $query->execute();
        $resultq = $query->fetch(PDO::FETCH_ASSOC);

        

		echo "<p>";
        echo "<h2>Pas Type aan in de Database</h2>";
		echo "<section class='zoekfuncties'>";
    	echo "<main id='zoekfuncties'>";
    	echo "<form class='searchbar2' method='post' action='typeupdatescript.php'>";
		echo "<input type='text' placeholder='Typenaam' value='".$resultq["idtype"]."' name='idupdate' readonly>";
      	echo "<input type='text' placeholder='Typenaam' value='".$resultq["name"]."' name='typeupdate'>";
      	echo "<button type='submit' value=updatetype name='updatetype'>Update</button>";
   		echo "</form>";
		echo "</p>";

        }

        ?>
	</main>
	
</body>
</html>