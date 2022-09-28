<?php

$arrWarna = array ("Merah","Hijau","Biru");

echo count ($arrWarna);
for($i = 0; $i < count($arrWarna); $i++){
    echo "Warna".$arrWarna[$i]."<br>"; 
}

foreach($arrWarna as $warna){
    echo "Warna $warna <br>";
}

?>