<?php
try {
  $db = new PDO("mysql:host=localhost;dbname=Fastfood" , "root", "");

} catch(PDOException $e)  {
  die("Error!: " . $e->getMessage());
}
?>
