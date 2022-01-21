<?php
class Crud
{

  function READ($dbname)
  {
    //variable geven aan meegegeven database naam
    $current_dbname = this->dbname;

    //read query prepare en execute
    $query = $db->prepare("SELECT * FROM :current_dbname");
    $query->execute($current_dbname);

    //alle gegevens fetche
    while ($row = $query->fetch()) {
      echo 'Naam: ' . $row['Naam'] . '</br>' . 'Beschrijving: ' . $row['Beschrijving'] . '</br>' . 'Prijs: ' . $row['Prijs'] . '</br>' . '</br>' . '</br>';
    }
  }


  function DELETE($dbname, $ID)
  {
    //variable geven voor meegegeven variable
    $current_dbname = this->dbname;
    $current_ID = this->ID;

    //gevenens die gebruikt moeten worden bij de query in een array zetten
    $parameters = array(':ID'=>$current_ID,
                        ':dbname'=>$current_dbname);

    //delete query prepare en execute
    $query = $db->prepare('DELETE FROM :current_dbname WHERE :current_dbname.ID = :ID');
    $query->execute($parameters);

  }

  function UPDATE($dbname, $ID, $Naam, $Beschrijving, $Prijs)
  {
    $current_dbname = this->dbname;
    $current_ID = this->ID;
    $current_naam = this->Naam;
    $current_beschrijving = this->Beschrijving;
    $current_prijs = this->Prijs;

    $parameters = array(':dbname'=>$current_dbname,
                        ':ID'=>$current_ID,
                        ':Naam'=>$current_naam,
                        ':Beschrijving'=>$current_beschrijving,
                        ':Prijs'=>$current_prijs);

    $query = $db->prepare('UPDATE :dbname SET Naam = :Naam, Beschrijving = :Beschrijving, Prijs = :Prijs WHERE snacks.ID = :ID;');

    $query->execute($parameters);
  }
}


?>
