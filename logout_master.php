<?php
session_start();
$_SESSION["Email"] = NULL;
header('Location: loginpage.php');
exit;
?>
