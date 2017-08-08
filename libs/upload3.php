<?php
function upload3(){
  include_once("inserttodb.php");
  move_uploaded_file($_FILES['datei']['tmp_name'], '../uploads/'.$_FILES['datei']['name']);
  insertADMailtoDB();
  header('Location: ..//funktionwahl.php'); //weiterleiten zur Kaschuso upload seite
  exit;
}
upload3();
?>
