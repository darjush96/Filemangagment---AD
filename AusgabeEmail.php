<?php
  include_once("libs/dbconnect.php");
  include_once("libs/csvspaltennamen.php");
  $link = dbconn();
  selectdb($link, 'Adexport');
  $sql    = "SELECT DISTINCT * FROM NeueMail WHERE NOT EXISTS(SELECT NULL FROM AdMail WHERE AdMail.mail = NeueMail.mail)";
  //NOT Für die MAils wo nicht doppelt sind und Ohne Not für Mails die Doppelt vorhanden sind
//$sql    = "SELECT * FROM Export2 WHERE NOT EXISTS(SELECT NULL FROM Export1 WHERE Export1.verg_id = Export2.verg_id)"
    $resu = mysql_query($sql);
    // output headers so that the file is downloaded rather than displayed
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=EmailAdresseInADnichtvorhanden.csv');
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
      $line = array("","",$row["givenName"],$row["initials"],$row["sn"],$row["displayName"],$row["cn"],$row["sAMAccountName"],"2wsx","Schueler",$row["employeeID"],$row["department"],$row["company"],$row["streetAdress"],"",$row["postalCode"],$row["l"],"","Schweiz","CH",$row["telephoneNumber"],"","","",$row["mobile"],"","","","","","","","",$row['mail'],$row['userPrincipalName'],$row["info"],"www.bbzolten.so.ch",$row["description"],"","1","1","1","240","","","1","0","","","1","1","1",$row["Gruppe1"],$row["Gruppe2"],$row["Gruppe3"],$row["Gruppe4"],$row["Gruppe5"],$row["department"],"","","","","","","","","","","","","","","","","","","","","","","","");
      fputcsv($output, $line, ";");
      }

    fclose($output);
  //  header('Location: ../funktionwahl.php'); //weiterleiten zur Kaschuso upload seite
?>
