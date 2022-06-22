<?php
session_start();
session_unset();
header('Location: inlogklant.php');
exit();
?>
