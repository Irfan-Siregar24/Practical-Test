<?php
function hitungJumlahPecahan($totalUang) {
    $pecahan = array(100000, 50000, 20000, 5000, 100, 50);
    $jumlahPecahan = array(0, 0, 0, 0, 0, 0);

    for ($i = 0; $i < count($pecahan); $i++) {  // Loop melalui setiap jenis pecahan
        $jumlahPecahan[$i] = floor($totalUang / $pecahan[$i]);  // Menghitung berapa banyak lembar pecahan saat ini
        $totalUang = $totalUang % $pecahan[$i];  // Hitung sisa total uang setelah mengeluarkan pecahan saat ini
    }

    return $jumlahPecahan;  // Mengembalikan array yang berisi jumlah masing-masing pecahan setelah perhitungan selesai
}

$totalUang = 1575250;
$jumlahPecahan = hitungJumlahPecahan($totalUang);  // untuk menghitung jumlah pecahan berdasarkan total uang

$pecahan = array(100000, 50000, 20000, 5000, 100, 50);
$totalKeseluruhan = array_sum($jumlahPecahan);  // Menghitung jumlah keseluruhan lembar pecahan

for ($i = 0; $i < count($pecahan); $i++) {  // Loop untuk menampilkan jumlah masing-masing pecahan
    echo "Jumlah pecahan " . $pecahan[$i] . ": " . $jumlahPecahan[$i] . " lembar\n";  // Menampilkan jumlah masing-masing pecahan
}

echo "Total Keseluruhan Jumlah Pecahan: " . $totalKeseluruhan . " lembar\n";  // Menampilkan jumlah keseluruhan dari semua pecahan
?>
