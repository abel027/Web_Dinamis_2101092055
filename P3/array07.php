<?php

$arrNilai = array ("Eko" => 87,"Tono" => 98,"Sari" => 88);
echo "<b>Array sebelum di urutkan</b><br>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

ksort ($arrNilai);
reset($arrNilai);
echo "<b> Array Setelah diurutkan dengan ksort</b><br>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

krsort ($arrNilai);
reset($arrNilai);
echo "<b> Array Setelah diurutkan dengan ksort</b><br>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
?>