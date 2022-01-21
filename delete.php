<?php
include("connectie.php");
include("Crud.php");
$query = $db->prepare("SELECT * FROM Snacks");
$query->execute();

while ($row = $query->fetch()) {
  echo 'ID: ' . $row['ID'] . '</br>' . 'Naam: ' . $row['Naam'] . '</br>' . 'Beschrijving: ' . $row['Beschrijving'] . '</br>' . 'Prijs: ' . $row['Prijs'] . '</br>' . '<a href="delete_master.php?ID=' . $row['ID'] . '">Verwijderen</a></br></br>';
}

try {
  if (ISSET($_REQUEST["ID"]))
  {
  Crud->DELETE("snacks", $_REQUEST["ID"]);
  }

/*  if (ISSET($_REQUEST["ID"]))
  {
    $parameters = array(':ID'=>$_REQUEST["ID"]);
    $query = $db->prepare('DELETE FROM snacks WHERE snacks.ID = :ID');
    $query->execute($parameters); */
  }
  catch(PDOException $e)  {
  die("Error!: " . $e->getMessage());
  }
?>
<html>
Terug naar <a href="../Fastfood/Homepagina.php">Homepagina</a>
</html>
