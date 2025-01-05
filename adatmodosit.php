<?php
$ujgyuru = true;
$connect = mysql_connect("localhost","root","") or die ("Nem lehet csatlakozni");
mysql_select_db("madargyuruzesproj")or die ("Nem talalhato az adatbazis");
$hely = $_GET["helykpbox"];
$gyuru = $_GET["gyurutbox"];
$gyuruzo = $_GET["gyuruzobox"];
$faj = $_GET["fajbox"];
$nem= $_GET["nembox"];
$kor= $_GET["korbox"];
$tomeg= $_GET["tomegbox"];
$elsoevezo = $_GET["elsoevezobox"];
$zsir = $_GET["zsirbox"];
$izom = $_GET["izombox"];
$vedles = $_GET["vedlesbox"];
$megjegyzes = $_GET["megjegyzesbox"];
if($gyuru==""||$faj==""||$kor==""||$nem==""||$hely=="")
{
    $probabevinni=false;
}
else if($ujgyuru){
    $probabevinni = mysql_query("UPDATE gyuru SET hely='$hely',faj='$faj',nem='$nem',kor='$kor',tomeg='$tomeg',elsoevezo='$elsoevezo',zsir='$zsir',izom='$izom',vedles='$vedles',megjegyzes='$megjegyzes',gyuruzo='$gyuruzo' WHERE gyuru='$gyuru'");
}
echo $probabevinni;
?>