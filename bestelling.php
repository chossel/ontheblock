<?php
session_start();
include("connectie.php");

// snacks namen array(ID van snack in db, Snacknaam, Aantal);
  $snack0 = array(1, "Frikandelviandel", 5);
  $snack1 = array(2, "kroket", 4);
  $snack2 = array(3, "Viandel", 4);

  $snacks = array($snack0, $snack1, $snack2);
// Bestel lijst aanmaken

  $parameters = array(':Datum' => date("Y-m-d"),
                      ':Gebruikersid'=>$_SESSION["ID"]);

  $query = $db->prepare('INSERT INTO bestellingen (datum, gebruikersid) VALUES (:Datum, :Gebruikersid)');
  $query->execute($parameters);

// laatst toegevoegde id van bestellijst ophalen
  $bestelid = $db->lastInsertId();

// dingen toevoegen aan bestel lijst
  for ($i=0; $i < count($snacks); $i++) {
    $parameters_bestelling = array(':bestelid' => $bestelid,
                        ':snacksid' => $snacks[$i][0],
                        ':aantal' => $snacks[$i][2]);
    $query = $db->prepare('INSERT INTO bestellingen_snacks (bestelid, snacksid, aantal) VALUES (:bestelid, :snacksid, :aantal)');
    $query->execute($parameters_bestelling);
  }


?>
