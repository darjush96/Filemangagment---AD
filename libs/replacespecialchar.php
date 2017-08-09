<?php
function sonderzeichen($string)
{
$search = array("Ä", "Ö", "Ü", "ä", "ö", "ü", "ß", "´","À","à","Â","â");
$replace = array("Ae", "Oe", "Ue", "ae", "oe", "ue", "ss", "A","a","A","a");
return str_replace($search, $replace, $string);
}
?>
