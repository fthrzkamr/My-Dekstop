<?php
include('../dist/config/config.php');

if (isset($_POST['submit'])) {
    // Ambil data dari form
    $kategori_asset = trim($_POST['kategori_asset']);
    $kode_kategori = trim($_POST['kode_kategori']);

    // Validasi sederhana
    if ($kategori_asset == "" || $kode_kategori == "") {
        echo "<script>alert('Semua field wajib diisi!'); window.history.back();</script>";
        exit;
    }

    // Cek apakah kode sudah ada
    $cek = mysqli_query($conn, "SELECT * FROM kategori_asset WHERE kode_kategori = '$kode_kategori'");
    if (mysqli_num_rows($cek) > 0) {
        echo "<script>alert('Kode kategori sudah terdaftar!'); window.history.back();</script>";
        exit;
    }

    // Simpan ke database
    $query = "INSERT INTO kategori_asset (kategori_asset, kode_kategori) VALUES ('$kategori_asset', '$kode_kategori')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Data berhasil disimpan!'); window.location.href='dashboard.php';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan data!'); window.history.back();</script>";
    }
}
?>
