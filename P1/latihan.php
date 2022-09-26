<?php
$P_web = 85;
$P_mobile = 87;
$P_GIS = 88;

echo "list mata kuliah :"."<br>";
echo "Nilai.web dinamis = 85"."<br>";
echo "Nilai.web dinamis = 87"."<br>";
echo "Nilai.web dinamis = 88"."<br>";
$rata = ($P_web+$P_mobile+$P_GIS)/3;
printf("rata-rata : %.2f<br>",$rata);


if(($rata>=85)&&($rata<=100)){
    $nilai="A";
}else if(($rata>=70)&&($rata<=84)){
    $nilai="B+";
}else if(($rata>=60)&&($rata<=69)){
    $nilai="B-";
}else if(($rata>=40)&&($rata<=59)){
    $nilai="B";
}else if(($rata>=30)&&($rata<=39)){
    $nilai="C+";
}else{
    $nilai="E";
}

echo "nilai :".$nilai;


?>