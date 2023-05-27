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
    register($_POST);
}
?>
<section id="content">
    <div class="container" style="margin-bottom: 12vh;">
        <h3>Tambah user</h3><hr>
        <form method="POST" class="my-login-validation mt-3 ml-3" enctype="multipart/form-data">
            <div class="form-group">
                <label for="username">username</label>
                <input type="hidden" name="id">
                <input id="username" type="text" class="form-control" name="username" required autofocus>
            </div>
            <div class="form-group">
                <label for="nama">nama</label>
                <input id="nama" type="text" class="form-control" name="nama" required>
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input id="password" type="password" class="form-control" name="password" required>
            </div>
            <div class="form-group">
                <label for="konpassword">konfirmasi password</label>
                <input id="konpas" type="password" class="form-control" name="konpas" required>
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input id="email" type="email" class="form-control" name="email" required>
            </div><br>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary">
                    Tambah
                </button>
                <a href="./?p=keluser" class="btn btn-warning">Kembali</a>
            </div>
        </form>
    </div>
</section>