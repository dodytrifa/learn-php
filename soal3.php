<?php

$biaya_toko1 = 10000;
$total_cabang = 100;

/*
toko ke-1  : 10.000
toko ke-68 : 30.100

selisih keduanya : 20.100
selisih 1 dan 68 : 67

maka : 20.100 / 67 = 300
*/

$biaya_per_cabang = 300;
$dicari = 81;

for($i = 1; $i <= 100; $i++){
    if($i != 1) $biaya = $biaya_toko1 += $biaya_per_cabang;
    if($i == $dicari) $hasil = $biaya;
}

echo "Biaya pengeluaran untuk toko kelontong ke-$dicari adalah Rp " . number_format($hasil, 0, ',', '.');

?>