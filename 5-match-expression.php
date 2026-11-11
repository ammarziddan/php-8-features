<?php

/* $value = "A"; */
/* $result = ""; */

// match expression (equals)
/* $result = match($value) { */
/*   "A", "B", "C" => "Anda lulus", */
/*   "D" => "Anda tidak lulus", */
/*   "E" => "Sepertinya anda salah jurusan", */
/*   default => "Nilai apa itu?" */
/* }; */

// match expression (not equal)
/* $value = 85; */
/* $result = match(true) { */
/*   $value >= 80 => "A", */
/*   $value >= 70 => "B", */
/*   $value >= 60 => "C", */
/*   $value >= 50 => "D", */
/*   default => "E" */
/* }; */

// match expression (condition)
$name = "Mrs. Michelle";

$result = match(true) {
  str_contains($name, "Mr.") => "Hello Sir",
  str_contains($name, "Mrs.") => "Hello Mam",
  default => "Hello"
};

/* switch($value) { */
/*   case "A": */
/*   case "B": */
/*   case "C": */
/*     $result = "Anda lulus"; */
/*     break; */
/*   case "D": */
/*     $result = "Anda tidak lulus"; */
/*     break; */
/*   case "E": */
/*     $result = "Sepertinya anda salah jurusan"; */
/*     break; */
/*   default: */
/*     $result = "Nilai apa itu?"; */
/* } */

echo $result . PHP_EOL;
