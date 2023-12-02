<?php
$servername = "127.0.0.11:3306";
$username = "u918041034_PSDM";
$password = "Setulus1";
$dbname = "u918041034_rsvp";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// SQL untuk membuat tabel
$sql = "CREATE TABLE datapsdm23 (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    nim VARCHAR(20) NOT NULL,
    prodi VARCHAR(50) NOT NULL,
    angkatan VARCHAR(4) NOT NULL,
    kehadiran VARCHAR(20) NOT NULL
)";

// Menjalankan query untuk membuat tabel
if ($conn->query($sql) === TRUE) {
    echo "Tabel datapsdm23 berhasil dibuat";
} else {
    echo "Error creating table: " . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
