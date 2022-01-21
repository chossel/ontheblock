<?php
include("connectie.php");
$parameters = array(':ID'=>$_REQUEST['ID']);
$query = $db->prepare('DELETE FROM snacks WHERE snacks.ID = :ID');
$query->execute($parameters);


//Redirect
header("Location: http://localhost/Fastfood/delete.php");
exit();

?>
