<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <title>ProductenLijst</title>
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
			$query = $db->prepare("SELECT prodname, proddesc, imageref, price 
			FROM product"); 
			$query->execute();	
			if($query->rowCount()>0) 
			{
					$result=$query->fetchAll(PDO::FETCH_ASSOC);
					echo '<table class="table table-bordered table-hover tkop">';
					echo '<thead>';
					echo '<th>Product</th>'; 
					echo '<th>Omschrijving</th>'; 
					echo '<th>Prijs</th>';
					echo '<th>Afbeelding</th>'; 
					echo '<th>Kopen?</th>';
					echo '</thead>';	
					foreach($result as $rij) 
				{ 
					echo '<tr>';
					echo '<td>'.$rij['prodname'].'</td>'; 
					echo '<td>'.$rij['proddesc'].'</td>'; 
					echo '<td>'.$rij['price'].'</td>';					
					?>
					<td><img src="<?php echo $rij['imageref']?>" class="cover" width="150"></td>		
					<?php
					echo '</tr>';	
				} 
				echo '</table>';
			}
			else 
			{
			?>
				<div class="container">
					<div class="card bg-secondary text-white">
						<div class="card-body">
							Geen producten geselecteerd 
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