<?php
    $connect = mysql_connect("localhost","root","") or die ("Nem lehet csatlakozni");
    mysql_select_db("gyuruzos2")or die ("Nem talalhato az adatbazis");
    
        $dattol = $_GET["dattol"];
        $datig = $_GET["datig"];
        $gyurutip= ($_GET["gyurutip"]);
        // $fajfels= strip_tags($_POST["fajfels"]);
        $helyfels = $_GET["helyfels"];
        $kornincs=true;
        if($_GET['him']=="true")
        {$him=true;}
        else {$him=false;}
        if($_GET['tojo']=="true")
        {$tojo=true;}
        else {$tojo=false;}
        if($_GET['ismeretlen']=="true")
        {$ismeretlen=true;}
        else {$ismeretlen=false;}
        if($_GET['egyY']=="true")
        {$egyY=true;}
        else {$egyY=false;}
        if($_GET['egyplusz']=="true")
        {$egyplusz=true;}
        else {$egyplusz=false;}
        if($_GET['fejltt']=="true")
        {$fejlett=true;}
        else {$fejlett=false;}
        if($_GET['R']=="true")
        {$R=true;}
        else {$R=false;}
        $tomeg = $_GET["tomeg"];
        $elsoevezo = $_GET["elsoevezo"];
        $zsir = $_GET["zsir"];
        $izom = $_GET["izom"];
        $vedles = $_GET["vedles"];
        if(isset($_GET['exportalas']))
        {$adatexportalas=true;}
        else {$adatexportalas=false;}
        if(isset($_GET['modositas']))
        {$modositas=true;}
        else {$modositas=false;}
        //if ($adatexportalas)
        //{
            //$fajlnev = $_GET["fajlnev"];
            // $fajlutvonal = strip_tags($_POST["fajlutvonal"]);
        //}
        $index = $_GET["index"];
        $gyuru = $_GET["gyuru"];


        if ($dattol == "")
        {
            $dattol = "0000.00.00";
        }
        if ($datig == "")
        {
            $datig = "9999.12.31";
        }
        $seged=$dattol;
        $dattol[4]="-";
        $dattol[7]="-";
        $datig[4]="-";
        $datig[7]="-";
        // $dattol=substr($seged,8,2)."/".substr($seged,5,2)."/".substr($seged,0,4);
        $seged=$datig;
        //  $datig=substr($seged,8,2)."/".substr($seged,5,2)."/".substr($seged,0,4);
        $seged=$gyurutip;



        if ($gyurutip==""){
            $gyuruA=true;
            $gyuruB=true;
            $gyuruBB=true;
            $gyuruD=true;
            $gyuruG=true;
            $gyuruT=true;
            $gyuru3X=true;
            $gyuru4Y=true;
        } else {
            $gyuruA=false;
            $gyuruB=false;
            $gyuruBB=false;
            $gyuruD=false;
            $gyuruG=false;
            $gyuruT=false;
            $gyuru3X=false;
            $gyuru4Y=false;
            $seged=explode(';',$gyurutip);
            for ($i=0;$i<count($seged);$i++)
            {
                if ($seged[$i]=="A"){
                    $gyuruA=true;
                }
                if ($seged[$i]=="B"){
                    $gyuruB=true;
                }
                if ($seged[$i]=="BB"){
                    $gyurBB=true;
                }
                if ($seged[$i]=="D"){
                    $gyuruD=true;
                }
                if ($seged[$i]=="G"){
                    $gyuruG=true;
                }
                if ($seged[$i]=="T"){
                    $gyuruT=true;
                }
                if ($seged[$i]=="3X"){
                    $gyuru3X=true;
                }
                if ($seged[$i]=="4Y"){
                    $gyuru4Y=true;
                }
            }
        }
        $tomegtol=0;
        $tomegig=30000;
        $tomegnincs=true;
        if($tomeg!="")
        {
            $tomegnincs=false;
            $seged=explode("-", $tomeg);
            $tomegtol=intval($seged[0]);
            $tomegig=intval($seged[1]);
        }
        $elsoevezotol=0;
        $elsoevezoig=30000;
        $elsoevezonincs=true;
        if($elsoevezo!="")
        {
            $elsoevezonincs=false;
            $seged=explode("-", $elsoevezo);
            $elsoevezotol=intval($seged[0]);
            $elsoevezoig=intval($seged[1]);
        }
        if ($gyurutip==""){
            $gyuruA=true;
            $gyuruB=true;
            $gyuruBB=true;
            $gyuruD=true;
            $gyuruG=true;
            $gyuruT=true;
            $gyuru3X=true;
            $gyuru4Y=true;
        } else {
            $gyuruA=false;
            $gyuruB=false;
            $gyuruBB=false;
            $gyuruD=false;
            $gyuruG=false;
            $gyuruT=false;
            $gyuru3X=false;
            $gyuru4Y=false;
            $seged=explode(';',$gyurutip);
            for ($i=0;$i<count($seged);$i++)
            {
                if ($seged[$i]=="A"){
                    $gyuruA=true;
                }
                if ($seged[$i]=="B"){
                    $gyuruB=true;
                }
                if ($seged[$i]=="BB"){
                    $gyurBB=true;
                }
                if ($seged[$i]=="D"){
                    $gyuruD=true;
                }
                if ($seged[$i]=="G"){
                    $gyuruG=true;
                }
                if ($seged[$i]=="T"){
                    $gyuruT=true;
                }
                if ($seged[$i]=="3X"){
                    $gyuru3X=true;
                }
                if ($seged[$i]=="4Y"){
                    $gyuru4Y=true;
                }
            }
        }
        $helyfelsnincs=true;

        if($helyfels=="")
        {
            $helyfelsnincs=true;
        }
        else{
            $helyfelsnincs=false;
        }




        $zsirnincs=false;
        if ($zsir==""){
            $zsir0=true;
            $zsir1=true;
            $zsir2=true;
            $zsir3=true;
            $zsir4=true;
            $zsir5=true;
            $zsir6=true;
            $zsir7=true;
            $zsir8=true;
            $zsirnincs=true;
        } else {
            $zsir0=false;
            $zsir1=false;
            $zsir2=false;
            $zsir3=false;
            $zsir4=false;
            $zsir5=false;
            $zsir6=false;
            $zsir7=false;
            $zsir8=false;
            $seged=explode(';',$zsir);
            for ($i=0;$i<count($seged);$i++)
            {
                if ($seged[$i]=="0"){
                    $zsir0=true;
                }if ($seged[$i]=="1"){
                $zsir1=true;
            }if ($seged[$i]=="2"){
                $zsir2=true;
            }if ($seged[$i]=="3"){
                $zsir3=true;
            }if ($seged[$i]=="4"){
                $zsir4=true;
            }if ($seged[$i]=="5"){
                $zsir5=true;
            }if ($seged[$i]=="6"){
                $zsir6=true;
            }if ($seged[$i]=="7"){
                $zsir7=true;
            }if ($seged[$i]=="8"){
                $zsir8=true;
            }
            }
        }


        $izomnincs=false;
        if ($izom==""){
            $izom0=true;
            $izom1=true;
            $izom2=true;
            $izom3=true;
            $izom4=true;
            $izom5=true;
            $izomnincs=true;
        } else {
            $izom0=false;
            $izom1=false;
            $izom2=false;
            $izom3=false;
            $izom4=false;
            $izom5=false;
            $seged=explode(';',$izom);
            for ($i=0;$i<count($seged);$i++)
            {
                if ($seged[$i]=="0"){
                    $izom0=true;
                }if ($seged[$i]=="1"){
                $izom1=true;
            }if ($seged[$i]=="2"){
                $izom2=true;
            }if ($seged[$i]=="3"){
                $izom3=true;
            }if ($seged[$i]=="4"){
                $izom4=true;
            }if ($seged[$i]=="5"){
                $izom5=true;
            }
            }
        }


        $vedlesnincs=false;
        if ($vedles==""){
            $vedles0=true;
            $vedles1=true;
            $vedles2=true;
            $vedles3=true;
            $vedlesnincs=true;
        } else {
            $vedles0=false;
            $vedles1=false;
            $vedles2=false;
            $vedles3=false;
            $seged=explode(';',$vedles);
            for ($i=0;$i<count($seged);$i++)
            {
                if ($seged[$i]=="0"){
                    $vedles0=true;
                }if ($seged[$i]=="1"){
                $vedles1=true;
            }if ($seged[$i]=="2"){
                $vedles2=true;
            }if ($seged[$i]=="3"){
                $vedles3=true;
            }
            }
        }
        $sql = "SELECT * FROM gyuru WHERE 
        (datum >= '$dattol' AND datum <= '$datig') AND
        ((LEFT(gyuru,1)='A' AND '$gyuruA') OR (LEFT(gyuru,1)='B' AND LEFT(gyuru,2)!='BB' AND '$gyuruB') OR (LEFT(gyuru,2)='BB' AND '$gyuruBB') OR (LEFT(gyuru,1)='D' AND '$gyuruD') OR (LEFT(gyuru,1)='G' AND '$gyuruG') OR (LEFT(gyuru,1)='T' AND '$gyuruT') OR (LEFT(gyuru,2)='3X' AND '$gyuru3X') OR (LEFT(gyuru,1)='4Y' AND '$gyuru4Y')) AND
        (hely = '$helyfels' OR '$helyfelsnincs') AND
        ((tomeg >= '$tomegtol' AND tomeg <= '$tomegig') OR '$tomegnincs') AND
        ((elsoevezo >= '$elsoevezotol' AND elsoevezo <= '$elsoevezoig') OR '$elsoevezonincs') AND
        ((nem='hím' AND '$him') OR (nem='tojó' AND '$tojo') OR (nem='?' AND '$ismeretlen')) AND
        ((kor='1+' AND '$egyplusz') OR (kor='1Y' AND '$egyY') OR (kor='F' AND '$fejlett') OR (kor='R' AND '$R')) AND
        ((zsir='0' AND '$zsir0') OR (zsir='1' AND '$zsir1') OR (zsir='2' AND '$zsir2') OR (zsir='3' AND '$zsir3') OR (zsir='4' AND '$zsir4') OR (zsir='5' AND '$zsir5') OR (zsir='6' AND '$zsir6') OR (zsir='7' AND '$zsir7') OR (zsir='8' AND '$zsir8') OR '$zsirnincs')  AND
        ((izom='0' AND '$izom0') OR (izom='1' AND '$izom1') OR (izom='2' AND '$izom2') OR (izom='3' AND '$izom3') OR (izom='4' AND '$izom4') OR (izom='5' AND '$izom5') OR '$izomnincs')  AND
        ((vedles='0' AND '$vedles0') OR (vedles='1' AND '$vedles1') OR (vedles='2' AND '$vedles2') OR (vedles='3' AND '$vedles3') OR '$vedlesnincs')
        ORDER BY datum";

        if($index=="visszafogas") {
            if ($gyuru == "") {
                $sql = "SELECT * FROM visszafogas WHERE
                (datum >= '$dattol' AND datum <= '$datig') AND
                ((LEFT(gyuru,1)='A' AND '$gyuruA') OR (LEFT(gyuru,1)='B' AND LEFT(gyuru,2)!='BB' AND '$gyuruB') OR (LEFT(gyuru,2)='BB' AND '$gyuruBB') OR (LEFT(gyuru,1)='D' AND '$gyuruD') OR (LEFT(gyuru,1)='G' AND '$gyuruG') OR (LEFT(gyuru,1)='T' AND '$gyuruT') OR (LEFT(gyuru,2)='3X' AND '$gyuru3X') OR (LEFT(gyuru,1)='4Y' AND '$gyuru4Y')) AND
                (hely = '$helyfels' OR '$helyfelsnincs') AND
                ((tomeg >= '$tomegtol' AND tomeg <= '$tomegig') OR '$tomegnincs') AND
                ((elsoevezo >= '$elsoevezotol' AND elsoevezo <= '$elsoevezoig') OR '$elsoevezonincs') AND
                ((nem='hím' AND '$him') OR (nem='tojó' AND '$tojo') OR (nem='?' AND '$ismeretlen')) AND
                ((kor='1+' AND '$egyplusz') OR (kor='1Y' AND '$egyY') OR (kor='F' AND '$fejlett') OR (kor='R' AND '$R')) AND
                ((zsir='0' AND '$zsir0') OR (zsir='1' AND '$zsir1') OR (zsir='2' AND '$zsir2') OR (zsir='3' AND '$zsir3') OR (zsir='4' AND '$zsir4') OR (zsir='5' AND '$zsir5') OR (zsir='6' AND '$zsir6') OR (zsir='7' AND '$zsir7') OR (zsir='8' AND '$zsir8') OR '$zsirnincs')  AND
                ((izom='0' AND '$izom0') OR (izom='1' AND '$izom1') OR (izom='2' AND '$izom2') OR (izom='3' AND '$izom3') OR (izom='4' AND '$izom4') OR (izom='5' AND '$izom5') OR '$izomnincs')  AND
                ((vedles='0' AND '$vedles0') OR (vedles='1' AND '$vedles1') OR (vedles='2' AND '$vedles2') OR (vedles='3' AND '$vedles3') OR '$vedlesnincs')
                ORDER BY datum";
            }
            else {
                $sql = "SELECT * FROM gyuru WHERE gyuru='$gyuru' UNION SElECT * FROM visszafogas WHERE gyuru='$gyuru'";
            }
        }
$query=mysql_query($sql);
$adatok = array();
while($row=mysql_fetch_assoc($query))
{
    $adatok[]=$row;
}
echo json_encode($adatok);
?>