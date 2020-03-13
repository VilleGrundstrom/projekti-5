<?php

$palvelin = "localhost";
$kayttaja = "root";
$salasana = "";
$tietokanta ="lomake";

$link = mysqli_connect($palvelin, $kayttaja, $salasana, $tietokanta);

if(mysqli_connect_error()){
  die("tietokantaan ei saatu yhteyttä");
}
$kysely ="SELECT * FROM lomakex";
$vastaus = mysqli_query($link, $kysely);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tiedon hakeminen</title>
  </head>
  <body>
    <table>
      <tr>
        <th colspan="6"><h2>Osoitetiedot</h2></th>
      </tr>
      <tr>
        <th>etunimi</th>
        <th>sukunimi</th>
        <th>syntymaaika</th>
        <th>puhelinnro</th>
  </tr>
<?php
while($rivit = $vastaus->fetch_assoc())
{
 ?>
 <tr>
   <td><?php echo $rivit ["etunimi"]?></td>
   <td><?php echo $rivit ["sukunimi"]?></td>
   <td><?php echo $rivit ["syntymaaika"]?></td>
   <td><?php echo $rivit ["puhelinnro"]?></td>
</tr>
<?php
}
?>
</table>
</body>
<?php mysqli_close($link);
 ?>
</html>
