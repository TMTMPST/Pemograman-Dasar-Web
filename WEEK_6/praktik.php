<?php
function hitungUmur($thnLhr, $thnSkrg){
    $umur = $thnLhr - $thnSkrg;
    return $umur;
}
function perkenalan ($nama, $salam="Assalamualaikum"){
    echo $salam.",";
    echo "Perkenalkan, nama saya ".$nama."<br/>";

    echo "Saya berusia ".hitungUmur(1988, 2023) . "tahun <br/>";
    echo "Senang berkenalan dengan anda <br/>";
    
}

perkenalan("Vidi");
?>