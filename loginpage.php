<html>
<form method="post">
  <label for="Email">Email:</label>
  <input type="text" id="Email" name="Email"><br>
  <label for="Wachtwoord">Wachtwoord:</label>
  <input type="password" id="Wachtwoord" name="Wachtwoord"><br>
  <input type="submit" value="Submit" name="Send">
</form>
</br>
</br>
<a href="gebruiker_registreren.php">Account aanmaken</a>
<html>


<?php
  session_start();
  $parameters = null;
  $_SESSION['ID'] = NULL;
  $_SESSION['Gebruikersnaam'] = NULL;
  $_SESSION['Email'] = NULL;
  $_SESSION['Level'] = NULL;

  if (ISSET($_POST["Send"]))
  {
    //gegevens van gebruiker fetchen
    include("connectie.php");
    $parameters = array(':Email'=>$_REQUEST['Email']);
    $query = $db->prepare('SELECT * FROM gebruikers_gegevens WHERE Email = :Email');
    $query->execute($parameters);
    $row = $query->fetch();

    //encrypted salt maken die ook in database komt
    $Password = hash('sha512', $_REQUEST['Wachtwoord'] . $row['Salt']);

    //kijken of het gehashde wachtwoord hetzelfde is als de salt in de database && het email overheen komt
    if ($Password == $row['Wachtwoord'] && $row['Email'] == $_REQUEST['Email'])
    {
      $_SESSION["ID"] = $row["ID"];
      $_SESSION["Email"] = $row["Email"];
      $_SESSION["Level"] = $row["Level"];
      header("Location: http://localhost/Fastfood/Homepagina.php");
      exit();
    }
  }
  else
  {

  }


?>
