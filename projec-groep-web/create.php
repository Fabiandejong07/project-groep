<?php

include("./connect_db.php");
$voornaam = ($_POST["voornaam"]);
$achternaam =  ($_POST["achternaam"]);
$email =  ($_POST["email"]);
$woonplaats =  ($_POST["woonplaats"]);
$geboortedatum =  ($_POST["geboortedatum"]);



$sql = "INSERT INTO `leerlingen` (`id`, `voornaam`, `achternaam`, `email`, `woonplaats`, `geboortedatem`) VALUES ( NULL, '$voornaam', '$achternaam', '$email', '$woonplaats', '$geboortedatum');";
mysqli_query($conn, $sql);
header("Location: ./index.html");
?>