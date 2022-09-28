<?php
$arrIp = array("Dani"=>2.77, "Sari"=>3.2, "Tari"=>3.1, "Andre"=> 2.75);

echo "$<b>Berikut Peringkat IP Mahasiswa</b> <br>";

asort($arrIp);

foreach($arrIp as $nama => $ip){
    echo " $nama : $ip"."<br>";
}

echo "<b>Berikut Peringkat IP Mahasiswa </b> <br>";
$no = 0;
foreach($arrIp as $nama => $ip){
    $no++;
    echo " $no. $nama : $ip"."<br>";
}



arsort($arrIp);
reset($arrIp);
echo "<b>Berikut Peringkat IP Mahasiswa diatas 3</b> <br>";
echo "<b>-----------------------------------------------</b> <br>";

$no= 0;
$total = 0;
foreach($arrIp as $nama => $ip){
    if($ip>=3){
    
    $no++;
    $total = $total + $ip;
    echo " $no. $nama : $ip.<br>";
    }
}

echo "<b>----------------------------------------------</b> <br>";
$rata = $total/$no;
echo "Total =$no. <br>";
echo "<br><b> Jumlah Rata - rata Nilai Mahasiswa</b><br>";

printf("rata-rata = %.2f",$rata);