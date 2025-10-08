<?php
// Membuat array 3x3 dengan angka acak 1–9
$matriks = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matriks[$i][$j] = rand(1, 9);
    }
}

// Cetak matriks dan hitung total
$total = 0;
echo "<b>Matriks 3x3:</b><br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $matriks[$i][$j] . " ";
        $total += $matriks[$i][$j];
    }
    echo "<br>";
}

echo "<br><b>Total semua elemen: $total</b>";
?>
