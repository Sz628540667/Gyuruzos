<?php
$host = "mysql.railway.internal"; // Az adatbázis hosztja
$port = "3306"; // Az adatbázis portja
$username = "root"; // Az adatbázis felhasználóneve
$password = "qqAsRqSprGNFDLeWsjAOULHeeHanWqNi"; // Az adatbázis jelszava
$dbname = "gyuruzosdb"; // Az adatbázis neve

// Kapcsolódás az adatbázishoz
$conn = new mysqli($host, $username, $password, $dbname, $port);

// Ellenőrizzük, hogy van-e hiba a kapcsolódás során
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>