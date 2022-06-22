<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="company.css">  
    <title>Type Delete Script</title>
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
    <?php
        // Verbinding maken met de database 
        require_once("dbconnect.php");
        
        if(isset($_POST["deletetype"]))
        $query = $db->prepare("DELETE FROM types WHERE idtype = :idtype");
        $query->bindValue(":idtype", $_POST['idtype']);
        $query->execute();
        $resultq = $query->fetch(PDO::FETCH_ASSOC);

        {

            echo "<div class='container'>";
            echo "<div class='panel panel-primary'>";
            echo "<div class='panel-heading'>Verwijderen is succesvol</div>";
            echo "<div class='panel-body'>U gaat over 3 seconden naar de startpagina</div>";
            echo "</div>";
            echo "</div>";
            header('Refresh: 3; url=index.php');
        }
    ?>
    </main>
</body>
</html>
<!--Gemaakt door Boaz Maxim Arsav-->
