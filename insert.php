<html>
<form>
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
  $parameters = array(':Naam'=>$_REQUEST['Naam'],
                      ':Beschrijving'=>$_REQUEST['Beschrijving'],
                      ':Prijs'=>$_REQUEST['Prijs']);

  $query = $db->prepare('INSERT INTO snacks (ID, Naam, Beschrijving, Prijs) VALUES (NULL, :Naam, :Beschrijving, :Prijs)');

  $query->execute($parameters);
}
?>
<html>
Terug naar <a href="../Fastfood/Homepagina.php">Homepagina</a>
</html>
