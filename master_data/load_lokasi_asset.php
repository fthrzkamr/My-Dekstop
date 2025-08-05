<?php
include('../dist/config/config.php');

$limit = 5;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $limit;

$totalData = mysqli_query($conn, "SELECT COUNT(*) AS total FROM lokasi_asset");
$rowTotal = mysqli_fetch_assoc($totalData);
$total = $rowTotal['total'];
$pages = ceil($total / $limit);

$query = mysqli_query($conn, "SELECT * FROM lokasi_asset ORDER BY kode_lokasi ASC LIMIT $start, $limit");
$no = $start + 1;

?>

<div class="table-responsive">
    <table class="table table-hover table-center mb-0">
        <thead class="thead-light">
            <tr>
                <th style="width: 1%;">No</th>
                <th class="text-center">Kategori</th>
                <th class="text-center">Kode</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($query)) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td class="text-center"><?= htmlspecialchars($row['lokasi_asset']); ?></td>
                    <td class="text-center"><?= htmlspecialchars($row['kode_lokasi']); ?></td>
                    <td class="text-center">
                        <a href="lokasi_edit.php?id=<?= $row['id_lokasi']; ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                        <a href="lokasi_delete.php?id=<?= $row['id_lokasi']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<!-- Pagination -->
<nav class="py-1">
    <ul class="pagination justify-content-start pagination-lokasi">
        <!-- <?php if ($page > 1): ?>
            <li class="page-item"><a class="page-link" href="#" data-page="<?= $page - 1 ?>">Previous</a></li>
        <?php endif; ?> -->
        <?php for ($i = 1; $i <= $pages; $i++): ?>
            <li class="page-item <?= ($i == $page) ? 'active' : '' ?>">
                <a class="page-link" href="#" data-page="<?= $i ?>"><?= $i ?></a>
            </li>
        <?php endfor; ?>
        <!-- <?php if ($page < $pages): ?>
            <li class="page-item"><a class="page-link" href="#" data-page="<?= $page + 1 ?>">Next</a></li>
        <?php endif; ?> -->
    </ul>
</nav>
