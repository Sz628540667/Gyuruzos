<?php
$connect = mysql_connect("localhost","root","");// or die ("Nem lehet csatlakozni");
mysql_select_db("madargyuruzesproj");//or die ("Nem talalhato az adatbazis");
$felhasznalonev = $_GET["felhasznalonev"];
$jelszo = $_GET["jelszo"];
$nev="";
$f="";
$j="";
$v="";
$u="";
$query=mysql_query("SELECT felhasznalonev,jelszo,vezeteknev,utonev FROM felhasznalo");
$belepes=false;
    while($row=mysql_fetch_assoc($query))
    {
        $f=$row["felhasznalonev"];
        $j=$row["jelszo"];
        $v=$row["vezeteknev"];
        $u=$row["utonev"];
        if($felhasznalonev == $f && $jelszo == $j)
        {
            $belepes=true;
            $nev=$v." ".$u;
            break;
        }
    }
    if (!$belepes)
    {
        $felhasznalonev="";
        $nev="";
    }
echo json_encode($felhasznalonev.";".$nev);
?>