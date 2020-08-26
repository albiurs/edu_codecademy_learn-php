<?php

$riel = 2103942;
$kyat = 19092;
$krones = 109;
$lek = 9094;

echo $riel . "\n";
echo $kyat . "\n";
echo $krones . "\n";
echo $lek . "\n";

$riel_er = 0.00026;
$kyat_er = 0.00066;
$krones_er = 0.11;
$lek_er = 0.0090;

$riel *= $riel_er;
$kyat *= $kyat_er;
$krones *= $krones_er;
$lek *= $lek_er;

echo $riel . "\n";
echo $kyat . "\n";
echo $krones . "\n";
echo $lek . "\n";

$final = $riel + $kyat + $krones + $lek - 4;
echo $final;