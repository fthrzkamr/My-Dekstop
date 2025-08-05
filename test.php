<?php

if (isset($_GET['id_kendaraan'])) {
    $sql = "SELECT * FROM employee AS A 
        LEFT JOIN koordinator AS B ON A.nama_koordinator = B.id_koordinator 
        LEFT JOIN bagian AS C ON A.nama_bagian = C.id_bagian
        LEFT JOIN manager AS D ON A.nama_manager = D.id_manager
        WHERE A.id_kendaraan='" . $_GET['id_kendaraan'] . "'";
    $ress = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($ress);
}

?>
<!DOCTYPE html>
<html lang="en">

<body>
    <div class="main-wrapper">
        <?php include '../layouts/navbar.php'; ?>

        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Service Asset</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../dashboard.php">Dashoard</a></li>
                                <li class="breadcrumb-item active">Service Asset</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="insert_kendaraan.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="form-title"><span>Informasi Kendaraan</span></h5>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>ID Kendaraan</label>
                                                <input type="text" name="id_kendaraan" class="form-control" value="<?php echo $data['id_kendaraan'] ?>" readonly>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Merek Kendaraan</label>
                                                <input type="text" name="merek" class="form-control" value="<?php echo $data['merek'] ?>"  readonly>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Tipe Kendaraan</label>
                                                <input type="text" name="tipe" class="form-control" value="<?php echo $data['tipe'] ?>"  readonly>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Plat Nomor</label>
                                                <input type="text" name="plat_nomor" class="form-control" value="<?php echo $data['plat_nomor'] ?>"  readonly>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>No Rangka</label>
                                                <input type="text" name="no_rangka" class="form-control" value="<?php echo $data['no_rangka'] ?>"  readonly>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Kategori Kendaraan</label>
                                                <select name="kategori" class="form-control" required>
                                                    <option value="<?php echo $data['kategori'] ?>" selected><?php echo $data['kategori'] ?></option>
                                                    <option value="">Pilih Kategori</option>
                                                    <option value="Mobil">Mobil</option>
                                                    <option value="Motor">Motor</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Tanggal Masuk</label>
                                                <input type="date" name="tgl_masuk" class="form-control" value="<?php echo $data['tgl_masuk'] ?>"  readonly>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Tanggal STNK</label>
                                                <input type="date" name="tgl_stnk" class="form-control" value="<?php echo $data['tgl_stnk'] ?>"  readonly>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Tanggal BPKB</label>
                                                <input type="date" name="tgl_bpkb" class="form-control" value="<?php echo $data['tgl_bpkb'] ?>"  readonly>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Penanggung Jawab / Pemakai</label>
                                                <input type="text" name="penanggung_jawab" class="form-control" value="<?php echo $data['penanggung_jawab'] ?>"  readonly>
                                            </div>
                                        </div>

                                        

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Upload Gambar Nota</label>
                                                <input type="file" name="gambar" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <?php include '../layouts/footer.php'; ?>
            </div>
        </div>
    </div>
</body>

</html>