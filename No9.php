<?php
function cariKoin($jumlahUang) {
    $koin = [500, 200, 100];
    $hasil = [];
    // Array $hasil akan digunakan untuk menyimpan koin yang akan digunakan untuk menukar uang.
    foreach ($koin as $nilaiKoin) {
        if ($jumlahUang >= $nilaiKoin) {
            $hasil[] = $nilaiKoin;
            $jumlahUang -= intdiv($jumlahUang, $nilaiKoin) * $nilaiKoin; 
        } 
    }
    return $hasil;
}

$jumlahUang = 1750;
$koinYangDigunakan = cariKoin($jumlahUang);

echo "Jenis Koin untuk uang Rp. $jumlahUang: ";
foreach ($koinYangDigunakan as $nilaiKoin) {
    echo "<ul><li> Rp .". $nilaiKoin. "</li></ul>";
}
?>