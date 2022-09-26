<?php

echo "Cara Pertama <br>";
for($i = 1; $i <=10; $i++){

    echo "Nilai ke : $i<br>";
}

echo "Cara kedua <br>";

for($i=1;;$i++){
    if($i>10){
        break;
    }

    echo "Nilai Ke : $i<br>";
}

echo "Cara Ketiga <br>";
$i=1;
for(;;){
    if($i>10){
        break;
    }
    echo "Nilai Ke : $i<br>";
    $i++;
}
?>