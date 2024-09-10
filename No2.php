<?php
$hariBelanja = date('l'); 
$totalPembelian = 130000;

$diskonHariSelasa = 0.05;

$diskonPembelianBesar = 0.07;

$totalDiskon = 0;

if ($hariBelanja == 'Tuesday') {
    $totalDiskon += $diskonHariSelasa;    
}
if ($totalPembelian > 100000) {
    $totalDiskon += $diskonPembelianBesar; 
}
$totalPembayaran = $totalPembelian - ($totalPembelian * $totalDiskon);
echo "  Hari ini adalah: <b> $hariBelanja</b>";
echo "<br>";
echo "Total Pembelanjaan: <b>Rp" . number_format($totalPembelian, 0, ".", ".") . " </b>";
echo "<br>";
echo "Total yang harus dibayar: <b>Rp" . number_format($totalPembayaran, 0, ".", ".") . "</b>";
?>