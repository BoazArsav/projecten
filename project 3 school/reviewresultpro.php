<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Producten Review Resultaat</title>
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


    <?php

  if(isset($_POST["submit"])) {
  echo "Review received!";
  echo "<br>";

  if(isset($_POST["fname"])) {
      echo "<br>";
      $message = $_POST['fname'];
      echo "Full Name = " . $message;
  }

  if(isset($_POST["mail"])) {
    echo "<br>";
    $message = $_POST['mail'];
    echo "E-mail = " . $message;
  }

  if(isset($_POST["purchasedate"])) {
      echo "<br>";
      $message = $_POST['purchasedate'];
      echo "Date of Purchase = " . $message;
  }

  if(isset($_POST["feedradio"])) {
      echo "<br>";
      $message = $_POST['feedradio'];
      echo "Review Score = " . $message;
  }
  if(isset($_POST["comment"])) {
    echo "<br>";
    $message = $_POST['comment'];
    echo "Review Score = " . $message;
}

 

}

?>

  <p><a href="index.php">Klik hier om terug naar de homepage te gaan!</a></p>

  </main>


</body>

</html>