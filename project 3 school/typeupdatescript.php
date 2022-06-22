<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="company.css">  
    <title>Type Update Script</title>
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
       
    
        if(isset($_POST["updatetype"]))

        require_once("dbconnect.php");

        $name = filter_var($_POST["typeupdate"], FILTER_SANITIZE_SPECIAL_CHARS);
        $query = $db->prepare("UPDATE types SET name = :dwars WHERE idtype = :idupdate" );
        $query->bindValue(":dwars", $name);
        $query->bindValue(":idupdate", $_POST['idupdate']);
        $query->execute();
        $resultq = $query->fetch(PDO::FETCH_ASSOC);

        {
            echo "<h2>Naam Aangepast!</h2>";
            echo "<div class='panel-body'>U gaat over 3 seconden naar de startpagina</div>";
            header('Refresh: 3; url=index.php');
        }

        ?>
    
    </main>
</body>
</html>
<!--Gemaakt door Boaz Maxim Arsav-->