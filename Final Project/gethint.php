<?php
// Array with names
$a[] = "Afghanistan";
$a[] = "Albania";
$a[] = "Algeria";
$a[] = "Bahrain";
$a[] = "Bangladesh";
$a[] = "Barbados";
$a[] = "Brazil";
$a[] = "Canada";
$a[] = "Chile";
$a[] = "China";
$a[] = "Croatia";
$a[] = "Denmark";
$a[] = "Egypt";
$a[] = "Estonia";
$a[] = "France";
$a[] = "Germany";
$a[] = "Honduras";
$a[] = "Iceland";
$a[] = "Ireland";
$a[] = "Japan";
$a[] = "Korea";
$a[] = "Pakistan";
$a[] = "Peru";
$a[] = "Russia";
$a[] = "Singapore";
$a[] = "Sri Lanka";
$a[] = "Switzerland";
$a[] = "Turkey";
$a[] = "Uganda";
$a[] = "Zimbabwe";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>