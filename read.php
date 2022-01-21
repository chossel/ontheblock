<?php
include("connectie.php");
include("Crud.php");
$pdo = Crud->READ("snacks");
echo $pdo;
?>
