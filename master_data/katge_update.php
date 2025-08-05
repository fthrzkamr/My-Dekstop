<?php
include '../dist/config/config.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id_kategori'];
    $kategori = $_POST['kategori_asset'];
    $kode = $_POST['kode_kategori'];

    $query = "UPDATE kategori_asset SET kategori_asset = '$kategori', kode_kategori = '$kode' WHERE id_kategori = '$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header('Location: dashboard.php?update=success');
    } else {
        echo "Gagal update data!";
    }
}
?>
