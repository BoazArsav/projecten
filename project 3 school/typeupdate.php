<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <title>Type Update</title>
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
        // Verbinding maken met de database 
        require_once("dbconnect.php");

        // Geselecteerde gegevens ophalen uit de tabel types
        $query = $db->prepare("SELECT * FROM types");
        $query->execute();
        $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

        echo "<table>";
        echo "<thead><th>idtype</th><th>Naam</th>
                <th>Aanpassen</th></thead>";
        echo "<tbody>";

        // Alle gegevens uit types op het scherm tonen
        foreach ($resultq as $data) {
            echo "<form method='POST' action='typeupdatepage.php'>";
            echo "<tr>";
            echo "<td>".$data["idtype"]."<input type='hidden' name='idtype' value =".$data["idtype"]."></td>";
            echo "<td>".$data["name"]."<input type='hidden' name='name' value =".$data["name"]."></td>";
            echo "<td><input type='submit' name='updatetype' value='Update'></td>";
            echo "</tr></form>";
        }
        echo "</tbody>";
        echo "</table>";
    ?>
    </section>




  </main>


</body>

</html>
<!--Gemaakt door Boaz Maxim Arsav-->