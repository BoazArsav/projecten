<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Omzet Producten</title>
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
    <main>

        <section class="phonephp">

            <?php
     // leg verbinding met database
     require_once("dbconnect.php");

     $query = $db->prepare("SELECT SUM(paidamount) AS 'totaalbedrag' FROM purchase");
     $query->execute();
     if($query->rowCount()>0) {
       $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

      echo "<table>";
      echo "<thead><th>Totaal bedrag ontvangen bedragen</th></thead>";
      echo "<tbody>";

      foreach ($resultq as $data) {

         echo "<tr>";         
         echo "<td>".$data["totaalbedrag"]."</td>";
         echo "</tr>";
      }

      echo "</tbody>";
      echo "</table>";
    } else {
     ?>
            <div class="container">
                <div class="card bg-secondary text-white">
                    <div class="card-body">
                        "Geen producten geselecteerd"
                    </div>
                </div>
            </div>
            <?php
      } 
    ?>

        </section>




    </main>


</body>

</html>
<!--Gemaakt door Boaz Maxim Arsav-->