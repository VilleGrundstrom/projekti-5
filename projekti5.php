<?php
//haemme tiedot tietokannasta muuttujiin etunimi, sukunimi, syntymaaika ja puhelinnumero
$enimi = $_GET["etunimi"];
$snimi = $_GET["sukunimi"];
$saika = $_GET["syntymaaika"];
$puh = $_GET["puhelinnro"];

//otamme yhteyden Tietokantaan
$palvelin = "localhost";
$kayttaja = "root";
$salasana = "";
$tietokanta = "lomakex";

$link = mysqli_connect($palvelin, $kayttaja, $salasana, $tietokanta);

if(mysqli_connect_error()){
  die("tietokantaan ei saatu yhteyttä");
}
$kysely = "INSERT INTO `lomakex`(`etunimi`, `sukunimi`, `syntymaaika`, `puhelinnro`)
VALUES ('$enimi', '$snimi', '$saika', '$puh')";
if(mysqli_query($link, $kysely)) {
  echo "uudet tiedosto paivitetty";
} else{
  echo"Virhe: " . $kysely . "<br>" . mysqli_error($link);
}
mysqli_close($link);
?>
