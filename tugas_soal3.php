<?php
$produk = [
    ["nama" => "Laptop", "kategori" => "Elektronik", "harga" => 8500000, "rating" => 4.8],
    ["nama" => "Headset", "kategori" => "Aksesoris", "harga" => 350000, "rating" => 4.5],
    ["nama" => "Smartphone", "kategori" => "Elektronik", "harga" => 6500000, "rating" => 4.7]
];

// Cari produk dengan harga tertinggi
$tertinggi = $produk[0];
foreach ($produk as $p) {
    if ($p["harga"] > $tertinggi["harga"]) {
        $tertinggi = $p;
    }
}

echo "<b>Produk dengan harga tertinggi:</b><br>";
echo "Nama: " . $tertinggi["nama"] . "<br>";
echo "Kategori: " . $tertinggi["kategori"] . "<br>";
echo "Harga: Rp " . number_format($tertinggi["harga"], 0, ',', '.') . "<br>";
echo "Rating: " . $tertinggi["rating"];
?>
