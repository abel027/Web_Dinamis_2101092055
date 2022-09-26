<?php

$ipk= 4.00;
$status_kategori ="";

if(($ipk > 3.51) && ($ipk <= 4.00)) {
    $status_kategori = "Dengan Pujian";

}else if(($ipk > 2.76) && ($ipk <= 3.50)){
    $status_kategori = "Sangat Memuaskan";

}if(($ipk > 2.00) && ($ipk <= 2.75)){
    $status_kategori ="Memuaskan";
}

echo "Predikat IPK : $ipk <br>";
echo "Kategori : $status_kategori";
?>