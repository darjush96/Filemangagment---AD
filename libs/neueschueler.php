<?php
function neueschuelerabfrage(){
  include("libs/dbconnect.php");
  include("libs/csvspaltennamen.php");
  $link = dbconn();
  selectdb($link, 'Adexport');
  $sql    = "SELECT * FROM Export2 WHERE NOT EXISTS(SELECT NULL FROM Export1 WHERE Export1.verg_id = Export2.verg_id)AND Export2.benutzerstatus = 'Ja'";
  //
//$sql    = "SELECT * FROM Export2 WHERE NOT EXISTS(SELECT NULL FROM Export1 WHERE Export1.verg_id = Export2.verg_id)"
    $resu = mysql_query($sql);
    // output headers so that the file is downloaded rather than displayed
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=NeueschuelerExport.csv');
    // create a file pointer connected to the output stream
    $output = fopen('php://output', 'w');
/*    $spaltnam = $spaltenname;
    foreach($spaltnam as $splnm){
      echo $splnm.";";
    }*/
    fputcsv($output,$spaltenname, ";");

    while ($row = mysql_fetch_array($resu))
    {
      //$row["benutzerstatus"]
      $line = array("","",$row["name"],"",$row["vorname"],$row["name"]." ".$row["vorname"],$row["name"]." ".$row["vorname"],$row['name'][0].$row['vorname'][0].$row['verg_ID'],"2wsx","Schueler",$row["verg_ID"],$row["regelklasse"],"","Aarauerstrasse 30","4600","Olten","","Schweiz","CH",$row["telefon"],"","","",$row["mobile"],"","","","","","","","",$row["emailadresse"],$row['name'][0].$row['vorname'][0].$row['verg_ID']."@bbzolten.ch","","www.bbzolten.so.ch","","","1","1","1","240","","","1","0","","","1","1","1","Users","G_netDomain","G_Win7Office13","Schueler","G_WLanLuS","G_WLanBBZO","","","","","","","","","","","","","","","","","","","","","","","","");
      fputcsv($output, $line, ";");
      }

    fclose($output);
}
?>
