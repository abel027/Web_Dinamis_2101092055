<?php

$arrNilai = array("Eko" => 90,"Dani"=>79,"Budi"=>60);
echo "<b>Array Sebelum di urutkan </b><br>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

sort($arrNilai);
reset($arrNilai);
echo "<b> Array Setelah diurutkan dengan sort</b><br>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

rsort ($arrNilai);
reset($arrNilai);
echo "<b> Array Setelah diurutkan dengan rsort</b><br>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

asort ($arrNilai);
reset($arrNilai);
echo "<b> Array Setelah diurutkan dengan Asort</b><br>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

asort ($arrNilai);
reset($arrNilai);
echo "<b> Array Setelah diurutkan dengan Asort</b><br>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
?>