<?php
include '../dist/config/config.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id_lokasi'];
    $kategori = $_POST['lokasi_asset'];
    $kode = $_POST['kode_lokasi'];

    $query = "UPDATE lokasi_asset SET lokasi_asset = '$kategori', kode_lokasi = '$kode' WHERE id_lokasi = '$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header('Location: dashboard.php?update=success');
    } else {
        echo "Gagal update data!";
    }
}
?>
