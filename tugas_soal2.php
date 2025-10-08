<?php
$buah = [
    ["Apel", 15000, 10],
    ["Jeruk", 12000, 8],
    ["Mangga", 20000, 5]
];

// Cetak nama buah pertama
echo "Nama buah pertama: " . $buah[0][0] . "<br><br>";

// Hitung total nilai stok * harga
$total = 0;
foreach ($buah as $b) {
    $subtotal = $b[1] * $b[2];
    $total += $subtotal;
    echo "Buah: $b[0] | Harga: $b[1] | Stok: $b[2] | Total: $subtotal <br>";
}

echo "<br><b>Total nilai semua buah: Rp " . number_format($total, 0, ',', '.') . "</b>";
?>
