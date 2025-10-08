<?php
$siswa = [
    ["Andi", 85, 90],
    ["Budi", 78, 88],
    ["Citra", 92, 80]
];

// Cetak nilai Bahasa dari siswa ke-2
echo "Nilai Bahasa siswa ke-2 (" . $siswa[1][0] . "): " . $siswa[1][2] . "<br><br>";

// Cetak semua data menggunakan looping
echo "<b>Data Nilai Siswa:</b><br>";
foreach ($siswa as $data) {
    echo "Nama: $data[0] | Matematika: $data[1] | Bahasa: $data[2]<br>";
}
?>
