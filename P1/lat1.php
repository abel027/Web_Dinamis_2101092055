<?php
$n_pweb = 85;
$n_pmobile = 87;
$n_pgis = 88;
$total = $n_pweb + $n_pmobile + $n_pgis;
$rata2 = $total / 3;


echo "List Matakuliah :<br>";
echo "Nilai P.Web Dinamis:" .$n_pweb."<br>";
echo "Nilai P.Mobile:" .$n_pmobile."<br>";
echo "Nilai P.GIS:" .$n_pgis."<br>";
printf("Nilai Rata-rata : %.1f <br>", $rata2);

if (($rata2 >= 85) && ($rata2<=100))
    echo "Nilai Huruf : A";
else if (($rata2 >= 70) && ($rata2<=84))
    echo "Nilai Huruf : B+";
else if (($rata2 >= 76) && ($rata2<=69))
    echo "Nilai Huruf : B-";
else if (($rata2 >= 40) && ($rata2<=59))
    echo "Nilai Huruf : B";
else if (($rata2 >= 30) && ($rata2<=39))
    echo "Nilai Huruf : C+";
else if ($rata2 < 30 )
    echo "Nilai Huruf : B";


echo "<br>";

if ($rata2 <= 70)
    echo "Nilai Status : Tidak Lulus";
else
    echo "Nilai Status : Lulus";

?>