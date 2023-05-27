<?php
require_once "./function.php";
if (($_SESSION["level"]) !== "1") {
    echo "
        <script>
            alert('anda bukan admin');
            document.location.href = 'index.php';
        </script>";
}
$id = $_GET["id"];

if (isset($_POST["btnedit"])) {
    editkategori($_POST, $id);
}

$query = "SELECT * FROM kategori WHERE id = '$id'";
$data = tampilkan($query)[0];
?>
<section id="content" style="margin-top: 25vh;">
    <div class="container" style="margin-bottom: 22vh;">
        <h3>Edit Kategori</h3>
        <hr>
        <form method="POST" class="my-login-validation mt-3 ml-3">
            <div class="form-group">
                <label for="kategori">Nama kategori</label>
                <input type="hidden" name="id">
                <input id="kategori" type="text" class="form-control" name="kategori" value="<?= $data["kategori"] ?>"
                    required autofocus>
            </div>

            <div class="form-group">
                <label for="deskripsi">deskripsi</label>
                <input type="text" id="deskripsi" name="deskripsi" class="form-control"
                    value="<?= $data["deskripsi"] ?>" required>
            </div><br>

            <div class="form-group">
                <button type="submit" name="btnedit" class="btn btn-primary">
                    edit
                </button>
                <a href="./?p=kelkategori" class="btn btn-warning">Kembali</a>
            </div>
        </form>
    </div>
</section>