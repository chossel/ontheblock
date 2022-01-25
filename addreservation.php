<?php

include("model.php");
$model = new Model();
$model->connection();

$name = $_GET["name"];
$email = $_GET["email"];
$mobile = $_GET["mobile"];
$datum = $_GET["datum"];
$personen = $_GET["personen"];

$model->search("klant", "telefoonnummer", $mobile);
echo $idForNumber;



?>