<?php
include("connectie.php");
$query = $db->prepare("SELECT * FROM Snacks");
$query->execute();

while ($row = $query->fetch()) {
  echo $row['ID'] . " " . $row['Naam'] . '</br>';
}
?>

<html>
<form>
  <label for="ID">ID:</label>
  <input type="text" id="ID" name="ID"><br>
  <label for="Naam">Naam:</label>
  <input type="text" id="Naam" name="Naam"><br>
  <label for="Beschrijving">Beschrijving:</label>
  <input type="text" id="Beschrijving" name="Beschrijving"><br>
  <label for="Prijs">Prijs:</label>
  <input type="Interger" id="Prijs" name="Prijs"><br>
  <input type="submit" value="Submit">
</form>
<html>
<?php
include("connectie.php");
if (ISSET($_REQUEST['Naam'], $_REQUEST['Beschrijving'], $_REQUEST['Prijs'])) {

}
?>
<html>
Terug naar <a href="../Fastfood/Homepagina.php">Homepagina</a>
</html>
