<?php
function teilschulabfrage($Teilschule){
  $sql    = 'SELECT * FROM `Export2` WHERE `id` LIKE "'.$Teilschule.'%"'; //.$Teilschule."'"
  $erg = mysql_query($sql); //sql übergeben (Wichtig sonst funzt SQL nicht)
  $gezählt = mysql_num_rows($erg);
  //echo $gezählt;
    if($gezählt !== 0){
      echo '<input type="checkbox" disabled="disabled" checked="checked">';
    }
    else{
      echo '<input type="checkbox" disabled="disabled">';
    }
    return $gezählt;
}
?>
