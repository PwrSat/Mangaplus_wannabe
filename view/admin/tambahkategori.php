<?php
require_once "./function.php";
if (($_SESSION["level"]) !== "1") {
    echo "
        <script>
            alert('anda bukan admin');
            document.location.href = 'index.php';
        </script>";
}
if (isset($_POST["submit"])) {
    tambahkategori($_POST);
}
?>
<section id="content" style="margin-top: 25vh;">
    <div class="container" style="margin-bottom: 13vh;">
        <h3>Tambah Kategori</h3>
        <hr>
        <form method="POST" class="my-login-validation mt-3 ml-3" enctype="multipart/form-data">
            <div class="form-group">
                <label for="kategori">Nama kategori</label>
                <input type="hidden" name="id">
                <input id="kategori" type="text" class="form-control" name="kategori" required autofocus>
            </div>

            <div class="form-group">
                <label for="deskripsi">deskripsi</label>
                <input type="text" id="deskripsi" name="deskripsi" class="form-control" required>
            </div><br>

            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary">
                    Simpan
                </button>
                <a href="./?p=kelkategori" class="btn btn-warning">Kembali</a>
            </div>
        </form>
    </div>
</section>