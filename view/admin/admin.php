<section id="content" style="margin-bottom: 28vh;">
    <div class="container" style="margin-bottom: 9vh;">
        <span class="text h1" >Selamat Datang <?= $_SESSION["username"] ?></span><hr><br>
        <span class="text h4" >Mau Ngapain Nih?</span><br>
    </div>
    <div class="container text-center">
        <a href="index.php?p=keluser" class="btn btn-outline-warning btn-lg">kelola user</a>&nbsp;&nbsp;&nbsp;
        <a href="index.php?p=kelkategori" class="btn btn-outline-warning btn-lg">kelola kategori</a>&nbsp;&nbsp;&nbsp;
        <a href="index.php?p=kelberita" class="btn btn-outline-warning btn-lg">kelola berita</a>&nbsp;&nbsp;&nbsp;
        <a href="index.php?p=kelkomentar" class="btn btn-outline-warning btn-lg">kelola komentar</a>
    </div>
</section>