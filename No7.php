<?php

function potongKalimat($kalimat)
{

    if (strlen($kalimat) > 50) {
        return substr($kalimat, 0, 50) . "...";
    } else {
        return $kalimat;
    }
}

$kalimatAwal = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos quidem voluptas quibusdam tempora ullam animi praesentium, explicabo a aliquam neque, velit totam.";
$kalimatDiproses = potongKalimat($kalimatAwal);

echo "Kalimat awal: $kalimatAwal";
echo "<br>";
echo "Kalimat setelah diproses: $kalimatDiproses";