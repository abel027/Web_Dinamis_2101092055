<?php

$pendidikan = "Magister";
$nilai = 3.71;
$predikat ="";

Switch($pendidikan){
    case 'D3/D4/S1':
        $pendidikan = "Program D3/D4/S1";
        if(($nilai >= 3.51) && ($nilai <= 4.00)){
            $status = "Dengan Pujian";
        }else if(($nilai >= 2.76) && ($nilai <= 3.50)){
            $status = "Sangat Memuaskan ";
        }else if (($nilai >= 2.00) && ($nilai <= 2.75)){
            $status = "Memuaskan ";
        }
        else{
            $status = "Tidak Ditemukan";
        }
        break;

    case 'profesi' :
        $pendidikan = " Program Profesi";
        if(($nilai >= 3.76) && ($nilai <= 4.00)){
            $status = "Dengan Pujian";
        }else if(($nilai >= 3.51) && ($nilai <= 3.75)){
            $status = "Sangat Memuaskan ";
        }else if (($nilai >= 3.00) && ($nilai <= 3.50)){
            $status = "Memuaskan ";
        }else {
            $status = "Tidak Ditemukan";
        }
        break;

    case 'Magister' :
        $pendidikan = " Program Magister";
        if(($nilai >= 3.71) && ($nilai <= 4.00)){
            $status = "Dengan Pujian";
        }else if(($nilai >= 3.41) && ($nilai <= 3.70)){
            $status = "Sangat Memuaskan ";
        }else if (($nilai >= 2.75) && ($nilai <= 3.40)){
            $status = "Memuaskan ";
        }else {
            $status = "Tidak Ditemukan";
        }

        break;
    default :
        $pendidikan = "Pendidikan Tidak Ditemukan";
        $status = "predikat tidak ditemukan ";
        break;

}
echo "Jenjang Pendidikan  : $pendidikan"."<br>";
echo "IPK : $nilai"."<br>";
echo "predikat : $status";
?>