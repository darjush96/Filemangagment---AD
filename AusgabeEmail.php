<?php
  include_once("libs/dbconnect.php");
  include_once("libs/csvspaltennamen.php");
  $link = dbconn();
  selectdb($link, 'Adexport');
  $sql    = "SELECT DISTINCT * FROM NeueMail WHERE EXISTS(SELECT NULL FROM AdMail WHERE AdMail.mail = NeueMail.mail)";
  //
//$sql    = "SELECT * FROM Export2 WHERE NOT EXISTS(SELECT NULL FROM Export1 WHERE Export1.verg_id = Export2.verg_id)"
    $resu = mysql_query($sql);
    // output headers so that the file is downloaded rather than displayed
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=EmailAdresseInADvorhanden.csv');
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
      $line = array("","",$row["givenName"],$row["initials"],$row["sn"],$row["displayName"],$row["cn"],$row["sAMAccountName"],"2wsx","Schueler",$row["employeeID"],$row["department"],$row["company"],$row["streetAdress"],"Aarauerstrasse 30","4600","Olten","","Schweiz","CH","","","","","","","","","","","","","",$row['mail'],"","","www.bbzolten.so.ch","","","1","1","1","240","","","1","0","","","1","1","1","Users","G_netDomain","G_Win7Office16","Schueler","G_WLanBBZO","","","","","","","","","","","","","","","","","","","","","","","","","");
      fputcsv($output, $line, ";");
      }

    fclose($output);
  //  header('Location: ../funktionwahl.php'); //weiterleiten zur Kaschuso upload seite
?>
