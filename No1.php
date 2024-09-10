<?php

$teks = "Selamat ulang tahun yang ke-17!";
if (preg_match_all('/[\'^£$%&*!()}{@#~?><>,|=_+¬-]/', $teks, $srt)) {
    echo "Teks : $teks";
    echo "<br>";
    echo "Simbol yang terdapat pada kalimat: " . implode(', ', $srt[0]);
} else {
    echo "Teks : $teks";
    echo "<br>";
    echo "Tidak terdapat simbol pada kalimat";
}
?>