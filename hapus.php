<?php

$mysqli = new mysqli('localhost', 'root', '', 'tedc2');

if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];

    $stmt = $mysqli->prepare("DELETE FROM students WHERE nim = ?");
    $stmt->bind_param('s', $nim);

} else {
    echo "<script>alert('NIM tidak ditemukan!'); window.location.href='mahasiswa.php';</script>";
}
?>