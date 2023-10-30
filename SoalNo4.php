<?php
// Menentukan angka yang akan diformat
$angka = 1225441;

// Mengonversi angka ke dalam bentuk string
$angka_str = strval($angka);

// Menghitung panjang string angka
$panjang = strlen($angka_str);

// Memulai loop untuk setiap digit dalam angka
for ($i = 0; $i < $panjang; $i++) {
    // Mengambil digit saat ini dan menyimpannya dalam variabel $output
    $output = $angka_str[$i];

    // Loop untuk menambahkan digit 0 sebanyak yang diperlukan
    for ($j = $panjang - $i - 1; $j > 0; $j--) {
        $output .= '0';
    }

    // Mencetak digit yang sudah diformat
    echo $output . "\n";

    // Mengecek apakah ini adalah digit terakhir, jika tidak, akan ditambahkan baris baru
    if ($i < $panjang - 1) {
        echo "\n";
    }
}
?>