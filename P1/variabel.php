<?php

$nim = "2101092055";
$nama = 'Muhammad Abbel prasetya';
$umur = 19;
$nilai = 3.75;
$status = true;

echo "Nim : " .$nim."<br>";
echo "Nama : ".$nama."<br>";
print "Umur : ".$umur."<br>";
printf("Nilai : %.1f<br>",$nilai);
echo "status : ".$status."<br>";

if($status){
    echo "True";
}else{
    echo "False";
}
?>