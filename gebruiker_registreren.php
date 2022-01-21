<html>
<form method="post">
  <label for="Naam">Naam:</label>
  <input type="text" id="Naam" name="Naam"><br>
  <label for="Wachtwoord">Wachtwoord:</label>
  <input type="password" id="Wachtwoord" name="Wachtwoord"><br>
  <label for="Email">Email:</label>
  <input type="text" id="Email" name="Email"><br>
  <input type="submit" value="Submit">
</form>
<html>
<?php

  if (ISSET($_REQUEST['Wachtwoord']))
  {
    $parameters_email = NULL;
    $parameters_form = NULL;

    //Maak unieke Salt
    $Salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));

    //Hash het password met de Salt
    $Password = hash('sha512', $_POST['Wachtwoord'] . $Salt);

    try
    {
      include('connectie.php');
      if (ISSET($_REQUEST['Naam'], $_REQUEST['Wachtwoord'], $_REQUEST['Email']))
      {

        //check of de email dr al is
        $parameters_email = array(':Email'=>$_REQUEST["Email"]);
        $query = $db->prepare('SELECT * FROM gebruikers_gegevens WHERE Email LIKE :Email ');
        $query->execute($parameters_email);
          if ($query->rowCount() == 0)
          {

            //gebruiker in database zetten
            $parameters_form = array(':Gebruikersnaam'=>$_REQUEST["Naam"],
                                     ':Wachtwoord'=>$Password,
                                     ':Email'=>$_REQUEST["Email"],
                                     ':Salt'=>$Salt);
            $query = $db->prepare('INSERT INTO `gebruikers_gegevens` (ID, Gebruikersnaam, Wachtwoord, Email, Salt, Level) VALUES (NULL, :Gebruikersnaam, :Wachtwoord, :Email, :Salt, 1)');
            $query->execute($parameters_form);
          }
          else
          {
            echo "Email is al in gebruik.";
          }
      }
    } catch(PDOException $e)
    {
    die("Error!: " . $e->getMessage());
    }
  }
  else {
    $_REQUEST['Wachtwoord'] = null;
  }
      //('INSERT INTO `gebruikers_gegevens` (`ID`, `Gebruikersnaam`, `Wachtwoord`, `Email`, `Salt`) VALUES (NULL, :Gebruikersnaam, :Wachtwoord, :Email, :Salt)');
?>
