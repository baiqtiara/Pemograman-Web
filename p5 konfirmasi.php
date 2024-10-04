<?php
session_start();

// Pastikan data ada sebelum mencoba mengakses
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan data dari form
    $hobbies = isset($_POST['hobby']) ? $_POST['hobby'] : [];
    $tgl_lahir = $_POST['tgl_lahir'];

    // Menghitung umur
    $birthDate = new DateTime($tgl_lahir);
    $today = new DateTime();
    $age = $today->diff($birthDate)->y;

    // Menyimpan data di session
    $_SESSION['hobby'] = $hobbies;
    $_SESSION['tgl_lahir'] = $tgl_lahir;

    // Menampilkan data
    echo "<h1>Konfirmasi Data</h1>";
    echo "<h3>Hobi:</h3>";
    echo !empty($hobbies) ? implode(", ", $hobbies) : "Tidak ada hobi yang dipilih." . "<br>";

    echo "<h3>Tanggal Lahir:</h3>";
    echo date("d F Y", strtotime($tgl_lahir)) . "<br>";

    echo "<h3>Berarti umur Anda sudah: $age tahun.</h3>";
} else {
    echo "Data tidak ditemukan.";
}
?>
