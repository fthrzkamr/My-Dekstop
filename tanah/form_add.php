                                <form action="tanah_bangunan_insert.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <!-- Kategori (dropdown dari master data) -->
                                        <!-- <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Kategori Asset</label>
                                                <select name="id_kategori" class="form-control" required>
                                                    <option value="">-- Pilih Kategori --</option>
                                                    <?php
                                                    include '../dist/config/config.php';

                                                    $query = "SELECT * FROM kategori_asset";
                                                    $kategori = mysqli_query($conn, $query) or die(mysqli_error($conn));

                                                    while ($row = mysqli_fetch_assoc($kategori)) {
                                                        echo "<option value='" . $row['id_kategori'] . "'>" . $row['kategori_asset'] . " - (" . $row['kode_kategori'] . ")</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div> -->

                                        <!-- Nama Aset -->
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Nama Aset</label>
                                                <input type="text" name="nama_aset" class="form-control" required />
                                            </div>
                                        </div>

                                        <!-- Lokasi -->
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Lokasi Asset</label>
                                                <select name="id_lokasi" class="form-control" required>
                                                    <option value="">-- Pilih Lokasi --</option>
                                                    <?php
                                                    include '../dist/config/config.php';

                                                    $query = "SELECT * FROM lokasi_asset";
                                                    $kategori = mysqli_query($conn, $query) or die(mysqli_error($conn));

                                                    while ($row = mysqli_fetch_assoc($kategori)) {
                                                        echo "<option value='" . $row['id_lokasi'] . "'>" . $row['lokasi_asset'] . " - (" . $row['kode_lokasi'] . ")</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Luas -->
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Luas (m²)</label>
                                                <input type="number" step="0.01" name="luas" class="form-control" />
                                            </div>
                                        </div>

                                        <!-- Jumlah Lantai -->
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Jumlah Lantai</label>
                                                <input type="number" name="jumlah_lantai" class="form-control" />
                                            </div>
                                        </div>

                                        <!-- Jenis Hak -->
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Jenis Hak</label>
                                                <select name="jenis_hak" id="jenis_hak" class="form-control" required>
                                                    <option value="<?php echo $data['jenis_hak'] ?>" selected>--- Pilih Jenis ---</option>
                                                    <option value="SHM">SHM</option>
                                                    <option value="HGB">HGB</option>
                                                    <option value="Sewa">Sewa</option>
                                                </select>

                                            </div>
                                        </div>


                                        <!-- Nomor Sertifikat -->
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Nomor Sertifikat</label>
                                                <input type="text" name="nomor_sertifikat" class="form-control" />
                                            </div>
                                        </div>

                                        <!-- Nomor IMB -->
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Nomor IMB</label>
                                                <input type="text" name="nomor_imb" class="form-control" />
                                            </div>
                                        </div>

                                        <!-- Tanggal Perolehan -->
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Tanggal Perolehan</label>
                                                <input type="date" name="tanggal_perolehan" class="form-control" />
                                            </div>
                                        </div>

                                        <!-- Harga Perolehan -->
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Harga Perolehan</label>
                                                <input type="number" step="0.01" name="harga_perolehan" class="form-control" />
                                            </div>
                                        </div>

                                        <!-- Fungsi -->
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Fungsi</label>
                                                <input type="text" name="fungsi" class="form-control" />
                                            </div>
                                        </div>

                                        <!-- Status Kepemilikan -->
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Status Kepemilikan</label>
                                                <select name="status_kepemilikan" id="status_kepemilikan" class="form-control" required>
                                                    <option value="<?php echo $data['status_kepemilikan'] ?>" selected>--- Pilih Jenis ---</option>
                                                    <option value="Milik Sendiri">Milik Sendiri</option>
                                                    <option value="Sewa">Sewa</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Keterangan -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <textarea name="keterangan" class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>

                                        <!-- Submit -->
                                        <div class="col-12">
                                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>