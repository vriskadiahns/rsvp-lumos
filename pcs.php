<?php
$servername = "127.0.0.11:3306";
$username = "u918041034_PSDM";
$password = "Setulus1";
$dbname = "u918041034_rsvp";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengecek apakah tabel 'data23' sudah ada atau belum
$table_check_query = "SHOW TABLES LIKE 'data23'";
$table_check_result = $conn->query($table_check_query);

if ($table_check_result->num_rows == 0) {
    // Jika tabel belum ada, buat tabel 'data23'
    $create_table_query = "CREATE TABLE data23 (
                            id INT AUTO_INCREMENT PRIMARY KEY,
                            nama VARCHAR(255) NOT NULL,
                            nim VARCHAR(20) NOT NULL,
                            prodi VARCHAR(50) NOT NULL,
                            angkatan VARCHAR(4) NOT NULL,
                            kehadiran VARCHAR(20) NOT NULL
                        )";

    if ($conn->query($create_table_query) !== TRUE) {
        $conn->close();
        die();
    }
}

// Mendapatkan data dari formulir HTML
$nama = $_POST['nama'];
$nim = $_POST['NIM'];
$prodi = $_POST['Prodi'];
$angkatan = $_POST['Angkatan'];
$kehadiran = $_POST['kehadiran'];

// Menyiapkan query SQL untuk memasukkan data ke dalam tabel 'data23'
$sql = "INSERT INTO data23 (nama, nim, prodi, angkatan, kehadiran) VALUES ('$nama', '$nim', '$prodi', '$angkatan', '$kehadiran')";

// Menjalankan query
$conn->query($sql);

// Menutup koneksi
$conn->close();
?>
