<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <title>Login-Klant</title>
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

  <form method="post" action="script.php">
  <table class="loginTable">
     <tr>
      <th>KLANT PANEL LOGIN</th>
     </tr>
     <tr>
      <td>
        <label class="firstLabel">Username:</label>
        <input type="text" name="username" id="username" value="" autocomplete="off" />
      </td>
     </tr>
     <tr>
      <td><label>Password:</label>
        <input type="password" name="pass" id="password" value="" autocomplete="off" /></td>
     </tr>
     <tr>
      <td>
         <input type="submit" name="submitBtnLogin" id="submitBtnLogin" value="Login" />
      </td>
     </tr>
  </table>
</form>

  </main>


</body>

</html>
<!--Gemaakt door Boaz Maxim Arsav-->