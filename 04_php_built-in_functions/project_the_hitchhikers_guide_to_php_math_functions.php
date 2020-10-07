<?php

$initial = '555'; // octal value
echo $initial . "\n";

$a = octdec($initial); // transform octal value to decimal
echo $a . "\n";

$b = deg2rad($a); // convert degree to radian
echo $b . "\n";

$c = cos($b); // calculate cosine
echo $c . "\n";

$d = round($c, 3); // round to 3 decimal places
echo $d . "\n";

$e = log($d); // natural log
echo $e . "\n";

$f = abs($e); // absolute (positive) value
echo $f . "\n";

$g = acos($f);  // arc cosinus
echo $g . "\n";

$h = rad2deg($g); // convert radians to degree
echo $h . ".\n";

$i = floor($h); // floor / round down
echo $i . "\n";

$j = $i - 47;
echo $j;