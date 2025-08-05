<?php
include('../dist/config/config.php');

?>

<body>
    <div class="main-wrapper">
        <?php include '../layouts/navbar.php'; ?>

        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">

                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Dashboard Tanah & Bangunan</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Tanah & Bangunan</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Kategori -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">Tanah & Bangunan</h5>
                            </div>
                            <div class="card-body">
                                <div class=" text-right float-left ml-auto mb-2">
                                    <a href="tanah_bangunan_add.php" class="btn btn-info px-4"><i class="fas fa-plus"></i></a>
                                    <a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</a>
                                </div>
                                <?php if (isset($_GET['status']) && $_GET['status'] === 'deleted'): ?>
                                    <div id="delete-alert" class="alert alert-success fade show" role="alert">
                                        Data berhasil dihapus!
                                    </div>

                                    <script>
                                        setTimeout(function() {
                                            const alertBox = document.getElementById('delete-alert');
                                            if (alertBox) {
                                                // Tambahkan efek fade out pelan
                                                alertBox.classList.remove('show');
                                                alertBox.classList.add('fade');
                                                // Hapus elemen setelah animasi
                                                setTimeout(() => alertBox.remove(), 500);
                                            }
                                        }, 3000); // 3000 ms = 3 detik
                                    </script>
                                <?php endif; ?>
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0 datatable">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nomor Aset</th>
                                                <th>Nama Aset</th>
                                                <th>Luas</th>
                                                <th>Jumlah Lantai</th>
                                                <th>Tanggal Perolehan</th>
                                                <th>Harga</th>
                                                <th class="text-right">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php include '../layouts/footer.php'; ?>
            </div>
        </div>
    </div>
</body>

<script>
    function loadKategori(page = 1) {
        $.get("load_kategori_asset.php?page=" + page, function(data) {
            $("#kategori-content").html(data);
        });
    }

    function loadLokasi(page = 1) {
        $.get("load_lokasi_asset.php?page=" + page, function(data) {
            $("#lokasi-content").html(data);
        });
    }

    $(document).ready(function() {
        loadKategori();
        loadLokasi();

        $(document).on('click', '.pagination-kategori a', function(e) {
            e.preventDefault();
            const page = $(this).data('page');
            loadKategori(page);
        });

        $(document).on('click', '.pagination-lokasi a', function(e) {
            e.preventDefault();
            const page = $(this).data('page');
            loadLokasi(page);
        });
    });
</script>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->