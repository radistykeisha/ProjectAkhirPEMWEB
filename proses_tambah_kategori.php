<?php
include 'koneksi.php';

$nama = $_POST['nama_kategori'];
$deskripsi = $_POST['deskripsi'];

$sql = "INSERT INTO kategori (nama_kategori, deskripsi) VALUES ('$nama', '$deskripsi')";

if (mysqli_query($conn, $sql)) {
    
    header("Location: admin_kategori.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>