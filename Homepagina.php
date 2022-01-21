<?php
session_start();
if (!ISSET($_SESSION["ID"])) {
  header('Location: loginpage.php');
  exit;
}
echo("gebruiker: " . $_SESSION["Email"] . "</br>level: " . $_SESSION["Level"] . "</br>ID: " . $_SESSION["ID"]);

if ($_SESSION["Level"] >= 5)
{
  ?>
  <html>
  </br>
  <a href="insert.php">Toevoegen</a></br>
  <a href="read.php">Aflezen</a></br>
  <a href="update.php">Updaten</a></br>
  <a href="delete.php">Verwijderen</a></br>
  <a href="bestelling.php">Bestellen</a></br>
  </br>
  </br>
  <a href="logout_master.php">Loguit</a>
  <html>
  <?php
}
elseif($_SESSION["Level"] < 4)
{
    ?>
    <html>
    </br>
    <a href="read.php">Aflezen</a></br>
    <a href="bestelling.php">Bestellen</a></br>
    </br>
    </br>
    <a href="logout_master.php">Loguit</a>
    <html>
    <?php
}
?>
