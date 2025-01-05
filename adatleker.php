<?php
$connect = mysql_connect("localhost","root","") or die ("Nem lehet csatlakozni");
mysql_select_db("madargyuruzesproj")or die ("Nem talalhato az adatbazis");
$gyuru = $_GET["gyuru"];
$sql = "SELECT * FROM gyuru WHERE gyuru='$gyuru'";
$query=mysql_query($sql);
$row=mysql_fetch_assoc($query);
echo json_encode($row);
?>