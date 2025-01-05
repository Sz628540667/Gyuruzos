<?php
$connect = mysql_connect("localhost","root","") or die ("Nem lehet csatlakozni");
mysql_select_db("madargyuruzesproj")or die ("Nem talalhato az adatbazis");

$vezeteknev= $_GET["vezeteknev"];
$utonev = $_GET["utonev"];
$emailcim = $_GET["emailcim"];
$telefonszam= $_GET["telefonszam"];
$felhsznalonev= $_GET["felhasznalonev"];
$jelszo= $_GET["jelszo"];
$jelszomegint= $_GET["jelszomegint"];
$engedely= $_GET['engedely'];
if ($vezeteknev!="" && $utonev!="" && $emailcim!="" && $telefonszam!="" && $felhsznalonev!="" && $jelszo!="" && $jelszomegint!="" && $jelszo==$jelszomegint && $engedely) {
    $probabevinni = mysql_query("INSERT INTO felhasznalo VALUES('$felhsznalonev','$jelszo','$vezeteknev','$utonev','$telefonszam','$emailcim')");
}
else{
    $probabevinni = false;
}
echo json_encode($probabevinni);
?>