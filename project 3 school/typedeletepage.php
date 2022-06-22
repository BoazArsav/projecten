<!DOCTYPE html>
<html lang="nl">

<head>
	<meta charset="UTF-8">
	<title>Weet u het Zeker?</title>
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
	<?php 
                require_once ("dbconnect.php"); 
            $query = $db->prepare("SELECT * FROM types 
            WHERE idtype = :idtype");
            $query->bindValue(':idtype', $_POST["idtype"]);
            $query->execute();
    //        var_dump($query);
            $data = $query->fetch(PDO::FETCH_ASSOC);

   /* This is checking if the user has clicked the delete button. */

   if(isset($_POST["deletetype"])){

    if($query->rowCount() == 1){
        echo "<table>";
        echo "<thead>";
        echo "<th>idtype</th><th>Naam</th>";
        echo "</thead><tbody>";
//        foreach($resultq as $data) {
            echo "<form action='typedeletescript.php' method='POST'>";
            echo "<tr>";
            echo "<td>";
           echo "" . $data['idtype']."<input type='hidden' name='idtype' value ='".$data['idtype']."'></td>";
            echo "<td>";
            echo "" . $data['name']."<input type='hidden' name='name' value ='".$data['name']."'></td>";
    
// This system will check of you really want to delete the purchase.
            echo "<div class='panel-heading'>Weet u het zeker dat u van idtype nummer "; 
            echo "<strong>".$data["idtype"]."</strong>"; 
            echo " wilt verwijderen?</div>";
            echo "<div class='panel-body'>";
            echo "<input type='submit' name='deletetype' class='admindelete' value='Ja'></input>";     
            echo "<input type='submit' name='Nee' class='admindelete' value='Nee'></input>"; 
            echo "</div>";
            echo "<br>";
            echo "</form>";
            echo "</tr>";
        
          echo "</tbody></table>";
                

            }
		}

        ?>


	

	
	</main>

</body>

</html>