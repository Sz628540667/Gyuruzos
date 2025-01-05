<?php
$ujgyuru = true;
$connectserver = mysql_connect("localhost","root","");
$selectDB = mysql_select_db("Gyuruzos2");
$feladat = $_GET["task"];
$ellenorzes=true;
$sql="";
$query=false;
$dataerror=false;
if($connectserver&&$selectDB)
{
    switch($feladat){
        case "AB" :
            $gyuruzo = $_GET["gyuruzobox"];
            $gyuruzohely = $_GET["gyuruzohelybox"];
            $befogas = $_GET["befogasbox"];
            $csali = $_GET["csalibox"];
            $megjegyzesBCS = $_GET["megjegyzesBCSbox"];
            $datum = $_GET["datumbox"];
            $szedes = $_GET["szedesbox"];
            $halo = $_GET["halobox"];
            $adat = $_GET["adatbox"];
            $gyuru = $_GET["gyurubox"];
            $faj = $_GET["fajbox"];
            $kor = $_GET["korbox"];
            $ivar = $_GET["ivarbox"];
            $zsir = $_GET["zsirbox"];
            $izom = $_GET["izombox"];
            $vedles = $_GET["vedlesbox"];
            $kopas = $_GET["kopasbox"];
            $folt = $_GET["foltbox"];
            $kotlofolt = $_GET["kotlofoltbox"];
            $harmadikevezo = $_GET["harmadikevezobox"];
            $szarny = $_GET["szarnybox"];
            $farok = $_GET["farokbox"];
            $talp = $_GET["talpbox"];
            $tomeg = $_GET["tomegbox"];
            $szarnyformula = $_GET["szarnyformulabox"];
            $megjegyzes = $_GET["megjegyzesbox"];
            $madarallapota = $_GET["madarallapotabox"];
            $gyuruzesutan = $_GET["gyuruzesutanbox"];
            $gyuruzokozpont = $_GET["gyuruzokozpontbox"];
            $orszag = $_GET["orszagbox"];
            if(strlen($kor)>1){if($kor[1]==" "){$kor[1]="+";}}
            if($adat=="ujgyuru") {$index="gyuruzes";} else {$index=$gyuruzohely."_".$datum;}
            if($gyuru!=""&&$faj!=""&&$gyuruzohely!=""&&$gyuruzo!=""&&$adat!=""){
                $sql = "INSERT INTO gyuru VALUES('$szedes','$halo','$gyuru','$faj','$kor','$ivar','$zsir','$izom','$vedles','$kopas','$kotlofolt','$harmadikevezo','$szarny','$farok','$tomeg','$szarnyformula','$folt','$talp','','','','','','$gyuruzesutan','$madarallapota','$megjegyzes','$gyuruzo','$gyuruzohely','$datum','$befogas','$csali','$megjegyzesBCS', '$adat', '$index', '$gyuruzokozpont', '$orszag')";
            } else { echo json_encode("PHPerror-data"); $dataerror=true;}
            break;
        case "HB" :
            $elnevezes = $_GET["elnevezes"];
            $gyuruzokp = $_GET["gyuruzokp"];
            $orszag = $_GET["orszag"];
            $telepules = $_GET["telepules"];
            $Nk = $_GET["Nkoordinata"];
            $Sk = $_GET["Skoordinata"];
            $elohely = $_GET["elohely"];
            $letrehozas = $_GET["letrehozas"];
            $letrehozta = $_GET["letrehozta"];
            $leiras = $_GET["leiras"];
            if($elnevezes != "" && $gyuruzokp != "" && $orszag != "" && $telepules != "" && $Nk != "" && $Sk !="" && $elohely != "" && $letrehozas !="" && $letrehozta !=""){
                $sql="INSERT INTO gyuruzohely VALUES('$elnevezes', '$gyuruzokp', '$orszag', '$telepules', '$Nk', '$Sk', '$elohely', '$letrehozas', '$letrehozta', '$leiras')";
            }else{ echo json_encode("PHPerror-data"); $dataerror=true;}
            break;
            case "MFKB" :
                $MFKazonosito = $_GET["MFKazonosito"];
                $MFKelnevezes = $_GET["MFKelnevezes"];
                $MFKorszag = $_GET["MFKorszag"];
                $MFKtelepules = $_GET["MFKtelepules"];
                $MFKkoordinatak = $_GET["MFKkoordinatak"];
                $MFKdatum = $_GET["MFKdatum"];
                $MFKelohely = $_GET["MFKelohely"];
                $MFKfeszektipus = $_GET["MFKfeszektipus"];
                $MFKfeszekleiras = $_GET["MFKfeszekleiras"];
                $MFKfeszketkeszitette = $_GET["MFKfeszketkeszitette"];
                $MFKcelfaj = $_GET["MFKcelfaj"];
                $MFKkirakva = $_GET["MFKkirakva"];
                $MFKmagassag = $_GET["MFKmagassag"];
                $MFKirany = $_GET["MFKirany"];
                $MFKmegjegyzes = $_GET["MFKmegjegyzes"];
                $MFKtermmest = $_GET["MFKtermmest"];
                $MFKfelhasznalonev = $_GET["MFKfelhasznalonev"];
                $MFKallapot = $_GET["MFKallapot"];
                if($MFKazonosito != "" && $MFKfelhasznalonev != "" && $MFKorszag != "" && $MFKtelepules != "" && $MFKkoordinatak != "" && $MFKdatum !="" && $MFKelohely != "" && $MFKfeszektipus !="" && $MFKtermmest !=""){
                    $sql="INSERT INTO feszek VALUES('$MFKazonosito', '$MFKelnevezes', '$MFKfelhasznalonev', '$MFKorszag', '$MFKtelepules','$MFKkoordinatak', '$MFKtermmest', '$MFKfeszektipus', '$MFKfeszekleiras', '$MFKfeszketkeszitette', '$MFKcelfaj', '$MFKkirakva', '$MFKmagassag', '$MFKirany', '$MFKelohely', '$MFKdatum', '$MFKallapot', '$MFKmegjegyzes')";
                }else{ echo json_encode("PHPerror-data"); $dataerror=true;}
                break;



                case "KMB" :
                    $KMBazonosito = $_GET["KMBazonosito"];
                    $KMBmadarasz = $_GET["KMBmadarasz"];
                    $KMBdatum = $_GET["KMBdatum"];
                    $KMBfaj = $_GET["KMBfaj"];
                    $KMBeszrevetel = $_GET["KMBeszrevetel"];
                    $KMBtechnika = $_GET["KMBtechnika"];
                    $KMBtojasok = $_GET["KMBtojasok"];
                    $KMBfiokak = $_GET["KMBfiokak"];
                    $KMBkoltesfazisa = $_GET["KMBkoltesfazisa"];
                    $KMBleiras = $_GET["KMBleiras"];
                    if($KMBazonosito != "" && $KMBmadarasz != "" && $KMBdatum != "" && $KMBfaj != "" && $KMBeszrevetel != "" && $KMBtechnika != ""){
                        $sql="INSERT INTO feszekaktivitas VALUES('$KMBazonosito', '$KMBmadarasz', '$KMBdatum', '$KMBfaj', '$KMBeszrevetel', '$KMBtechnika', '$KMBleiras', '$KMBtojasok', '$KMBfiokak', '$KMBkoltesfazisa')";
                    }else{
                        echo json_encode("PHPerror-data");
                        $dataerror = true;
                    }
                    break;
                


                case "MFKmaxIDL":
                    $felhasznalonev = $_GET["felhasznalonev"];
                    $sql="SELECT MAX(azonosito) AS maxID FROM feszek WHERE madarasz = '$felhasznalonev'";
                break;
            case "JH" :
                $gyuruzo = $_GET["gyuruzo"];
                $gyuruzohely = $_GET["gyuruzohely"];
                $hozzaadvamint = $_GET["hozzaadvamint"];
                $hozzaadta = $_GET["hozzaadta"];
                $megjegyzes = $_GET["megjegyzes"];
                $datum=date("Y-m-d");
                if($gyuruzo != "" && $gyuruzohely != "" && $hozzaadvamint != "" && $hozzaadta != ""){
                    $sql="INSERT INTO helyjogosultsagok VALUES('$gyuruzo', '$gyuruzohely', '$hozzaadvamint', '$datum', '$hozzaadta', '$megjegyzes')";
                }else{ echo json_encode("PHPerror-data");$dataerror=true; }
                break;

        case "HeL" : 
            $sql="SELECT elnevezes FROM gyuruzohely";
            break;

        case "MB" :
            $kod = $_GET["kod"];
            $latin = $_GET["latin"];
            $magyar = $_GET["magyar"];
            $statusz = $_GET["statusz"];
            $index = $_GET["index"];
            if(strlen($kod)==7&&$latin!=""){
                $sql="INSERT INTO madar VALUES('$kod','$latin','$magyar','$statusz','$index')";
            }else{ echo json_encode("PHPerror-data"); $dataerror=true;}
            break;

        case "MkL":
                $sql="SELECT kod FROM madar";
            break;

        case "mAL":
            $datum=date("Y-m-d");
            $sql = "SELECT * FROM gyuru WHERE datum='$datum' ORDER BY szedes";
            break;
        case "L":
            $sql = "SELECT * FROM gyuru ORDER BY datum, szedes DESC";
            break;
        case "EA":
            $dattol = $_GET["dattol"];
            $datig = $_GET["datig"];
            $gyuruzohely = $_GET["gyuruzohely"];
            if($gyuruzohely=="")
            {
                $sql = "SELECT * FROM gyuru INNER JOIN gyuruzohely ON gyuru.gyuruzohely=gyuruzohely.elnevezes WHERE datum BETWEEN '$dattol' AND '$datig' ORDER BY datum, szedes DESC";
            }
            else
            {
                $sql = "SELECT * FROM gyuru INNER JOIN gyuruzohely ON gyuru.gyuruzohely=gyuruzohely.elnevezes WHERE datum BETWEEN '$dattol' AND '$datig' AND gyuruzohely='$gyuruzohely' ORDER BY datum, szedes DESC";
            }
            break;
        case "VFM":
                $datum = $_GET["datum"];
                $gyuruzohely = $_GET["gyuruzohely"];
                $gyuruzokozpont = $_GET["gyuruzokozpont"];
                $gyuru = $_GET["gyuru"];
                $index=$gyuruzohely."_".$datum;
                $sql = "SELECT * FROM gyuru INNER JOIN gyuruzohely ON gyuru.gyuruzohely=gyuruzohely.elnevezes WHERE gyuru='$gyuru' AND gyuru.gyuruzokozpont='$gyuruzokozpont' AND ( gyuru.index = '$index' OR gyuru.index = 'gyuruzes' ) ORDER BY datum DESC";
          // $sql = "SELECT * FROM gyuru WHERE gyuru = '$gyuru' AND gyuruzokozpont = '$gyuruzokozpont' AND gyuru.index='$index'";
   
            break;
        default:  echo json_encode("PHPerror-invalidtask");
            break;
    }
}else{
    if(!$connectserver) { echo json_encode("PHPerror-serverconnection");}
    if(!$selectDB) { echo json_encode("PHPerror-selectDB");}
}
if($sql!="") {$query = mysql_query($sql);}
if(($feladat=="mAL"||$feladat=="HeL"||$feladat=="MkL"||$feladat=="L"||$feladat=="EA"||$feladat=="VFM"||$feladat=="MFKmaxIDL") && $query)
{
    $adatok = array();
    while($row=mysql_fetch_assoc($query)) {$adatok[]=$row;}
    echo json_encode($adatok);
}
else if($query) {echo json_encode("OK"); 
}else if (!$dataerror){ echo json_encode("PHPerror-query"); }
?>