<?php
require_once "./function.php";
if (($_SESSION["level"]) != 1) {
    echo "
        <script>
            alert('anda bukan admin');
            document.location.href = 'index.php';
        </script>";
}
if (isset($_POST["submit"])) {
    tambahberita($_POST);
}
?>
<section id="content">
    <div class="container">
    <h3>Tambah Berita</h3>
        <hr>
        <form method="POST" class="my-login-validation mt-3 ml-3" enctype="multipart/form-data">
            <div class="form-group">
                <label for="username">Judul Berita</label>
                <input type="hidden" name="id">
                <input id="judul" type="text" class="form-control" name="judul" required autofocus>
            </div>

            <div class="form-group">
                <label for="kategori">pilih kategori</label>
                <select id="kategori" class="form-control" name="kategori" required>
                    <option value="">pilih kategori</option>
                    <?php
                    $kategori = "SELECT * FROM kategori";
                    $sql = mysqli_query($koneksi, $kategori);
                    while ($hasil = mysqli_fetch_array($sql)) {
                        ?>
                        <option value="<?= htmlentities($hasil['id']); ?>">
                            <?= htmlentities($hasil['kategori']); ?>
                        </option>
                        <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="isi">Konten</label>
                <textarea id="isi" name="isi" rows="10" cols="150"></textarea>
            </div>

            <div class="form-group">
                <label for="gambar">pilih gambar</label>
                <input id="gambar" type="file" class="form-control" name="gambar" required>
            </div><br>

            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary">
                    Simpan
                </button>
                <a href="./?p=kelberita" class="btn btn-warning">Kembali</a>
            </div>
            <script>
                CKEDITOR.replace('isi');
            </script>
        </form>
    </div>
</section>