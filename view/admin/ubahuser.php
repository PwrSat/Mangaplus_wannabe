<?php
require_once "./function.php";

if (empty($_GET["id"])) {
    if ($_SESSION["level"] == 1) {
        echo "
    <script>
        alert('pilih akun yang mau di edit');
        document.location.href = './?p=keluser';
    </script>";
    } else {
        echo "
    <script>
        alert('terjadi kesalahan');
        document.location.href = './';
    </script>";
    }
}

$id = $_GET["id"];

if (isset($_POST["btnedit"])) {
    editakun($_POST, $id);
}

$query = "SELECT * FROM user where id = '$id'";
$data = tampilkan($query)[0];
?>
<section id="content">
    <div class="container">
        <h3>Edit Akun</h3>
        <hr>
        <div class="row">
            <div class="col">
                <img src="./gambar/<?= $data['profil'] ?>" alt="profil" class="rounded-circle" width="100" height="100">
            </div>
        </div>
        <div class="row">
            <form method="POST" class="my-login-validation mt-3 ml-3" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" name="profillama" value="<?= $data["profil"] ?>">
                    <label for="gambar">pilih foto profil</label>
                    <input type="file" id="gambar" name="gambar" class="form-control">
                </div>

                <div class="form-group">
                    <input type="hidden" name="gambarlama" value="">
                    <label for="username">username</label>
                    <input id="username" type="text" class="form-control" name="username" required autofocus
                        value="<?php echo htmlentities($data['username']); ?>">
                </div>

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input id="nama" type="text" class="form-control" name="nama" value="<?= $data["nama"]; ?>"
                        required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="form-control" name="email" value="<?= $data["email"]; ?>">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" rows="10" cols="150" class="form-control"
                        value="<?= $data["password"] ?>">
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" name="btnedit" class="btn btn-primary btn-block">
                        edit
                    </button>
                    <a href="./?p=keluser" class="btn btn-warning btn-block">
                        kembali
                    </a>
                </div><br>
            </form>
        </div>
    </div>
</section>