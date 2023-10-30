<?php
$servername = "127.0.0.1"; //localhost
$username = "root";
$password = "irfan";
$dbname = "kain";

// Step 1: Membuat Tabel dengan nama kain
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

$sql_create_kain = "CREATE TABLE kain (
    id INT AUTO_INCREMENT PRIMARY KEY,
    jenis_kain VARCHAR(255),
    nama_kain VARCHAR(255),
    kualitas INT,
    nama_kualitas VARCHAR(255),
    harga INT
)";

if ($conn->query($sql_create_kain) === TRUE) {
    echo "Tabel berhasil dibuat.";
} else {
    echo "Error: " . $conn->error;
}

// Step 2: Mengisi Data Tabel
$sql_insert_kain = "INSERT INTO kain (jenis_kain, nama_kain, kualitas, nama_kualitas, harga)
                  VALUES
                  ('STB', 'Sutra', 1, 'Sangat Bagus', 10000000),
                  ('STB', 'Sutra', 2, 'Bagus', 9000000),
                  ('STB', 'Sutra', 3, 'Cukup Bagus', 8000000),
                  ('NTB', 'Katun', 1, 'Sangat Bagus', 10000000),
                  ('NTB', 'Katun', 2, 'Bagus', 10000000),
                  ('NTB', 'Katun', 3, 'Cukup Bagus', 10000000)";

if ($conn->multi_query($sql_insert_kain) === TRUE) {
    echo "Data berhasil dimasukkan.";
} else {
    echo "Error: " . $conn->error;
}

// Step 3: Menampilkan Data
$sql_select_kain = "SELECT jenis_kain, nama_kain, kualitas, nama_kualitas, harga FROM kain";

$result = $conn->query($sql_select_kain);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Jenis Kain</th><th>Nama Kain</th><th>Kualitas</th><th>Nama Kualitas</th><th>Harga</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["jenis_kain"] . "</td><td>" . $row["nama_kain"] . "</td><td>" . $row["kualitas"] . "</td><td>" . $row["nama_kualitas"] . "</td><td>Rp " . $row["harga"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data.";
}

$conn->close();
?>