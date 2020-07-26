<?php
//proses
$filecounter=("frontend/counter.txt");
$kunjungan=file($filecounter);
$kunjungan[0]++;
$file=fopen($filecounter,"W");
fputs($file,"$kunjungan[0]");
fclose($file);
// echo "$kunjungan[0]";
?>