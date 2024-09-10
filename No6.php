<?php
$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => 18000,
        'jumlah_beli' => 2,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 4,
    ],
];

$total_harga = 0;

echo "Daftar Belanjaan : <br>";
echo "<ol>";
foreach ($barang as $total) {
    $harga_total = $total['harga_barang'] * $total['jumlah_beli'];
    $total_harga = $total_harga + $harga_total;
    echo "<li>" . $total['nama_barang'] . "(" . $total['jumlah_beli'] . ") : " . number_format($harga_total, 0, ',', '.') . "</li>" ;
}
echo "</ol>" ;
echo "Total Harga yang harus di bayar adalah  " . "<b> Rp." . number_format($total_harga, 0, ',', '.') . "";
?>