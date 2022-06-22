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
  <main>

  <?php
	require 'dbconnect.php'; 
?>

<div class="container">
	<div class="row">
		<?php 
		try 
		{  
			$query = $db->prepare("INSERT INTO types (name) VALUES (:name)"); 
            $query->bindValue("name", $_POST['typeadd']);
			$query->execute();	
			if($query->rowCount()>0) 
			{
                ?>
				<div class="container">
					<div class="card bg-secondary text-white">
						<div class="card-body">
							Type Toegevoegd!
						</div>
					</div>
				</div>

			<?php
            
			}
			else 
			{
			?>
				<div class="container">
					<div class="card bg-secondary text-white">
						<div class="card-body">
							Niks Toegevoegd!
						</div>
					</div>
				</div>

			<?php
			}
		} 
		catch(PDOException $e) 
		{ 
			$sMsg = '<p> 
					Regelnummer: '.$e->getLine().'<br /> 
					Bestand: '.$e->getFile().'<br /> 
					Foutmelding: '.$e->getMessage().' 
				</p>'; 
			 
			trigger_error($sMsg); 
		} 
		$db = null;
	?>
	
	</div>

</div>



  </main>


</body>

</html>
<!--Gemaakt door Boaz Maxim Arsav-->