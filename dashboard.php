<?php
include('./dist/config/config.php');

?>

<!DOCTYPE html>
<html lang="en">


<body>
   <div class="main-wrapper">
      <?php include 'layouts/navbar.php'; ?>

      <div class="page-wrapper">
         <div class="content container-fluid">
            <div class="page-header">
               <div class="row">
                  <div class="col-sm-12">
                     <h3 class="page-title">Welcome <?= htmlspecialchars($_SESSION['nama_user']) ?>!</h3>
                     <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Dashboard</li>
                     </ul>
                  </div>
                  <select id="kategoriForm" class="form-control">
                     <option value="">-- Pilih Kategori --</option>
                     <?php
                     $kategori = mysqli_query($conn, "SELECT * FROM kategori_asset");
                     while ($row = mysqli_fetch_assoc($kategori)) {
                        $folder = strtolower(str_replace(' ', '_', $row['kategori_asset'])); // contoh: Tanah Bangunan → tanah_bangunan
                        echo "<option value='{$row['id_kategori']}' data-folder='{$folder}'>{$row['kategori_asset']} - ({$row['kode_kategori']})</option>";
                     }
                     ?>
                  </select>

               </div>
            </div>

            <div id="formContainer"></div>

            <?php include 'layouts/footer.php'; ?>
         </div>
      </div>
   </div>
</body>


<script>
   $(document).ready(function() {
      $('#kategoriForm').change(function() {
         let selectedOption = $(this).find('option:selected');
         let folder = selectedOption.data('folder');

         if (folder) {
            $('#formContainer').html('<p>Loading form...</p>');
            $.ajax({
               url: folder + '/form_add.php',
               type: 'GET',
               success: function(formContent) {
                  $('#formContainer').html(formContent);
               },
               error: function() {
                  $('#formContainer').html('<div class="alert alert-danger">Form tidak ditemukan.</div>');
               }
            });
         } else {
            $('#formContainer').html('');
         }
      });
   });
</script>






</html>