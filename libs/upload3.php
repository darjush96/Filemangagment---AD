<?php
function upload3(){
  echo "hello";
  include_once("inserttodb.php");
  move_uploaded_file($_FILES['datei']['tmp_name'], '..//uploads/'.$_FILES['datei']['name']);
  echo "test";
  insertADMailtoDB();
  echo "sql done";
  header('Location: funktionwahl.php'); //weiterleiten zur Kaschuso upload seite
  exit;
}
?>
