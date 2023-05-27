<?php 
require_once("./function.php")
?>
<header>
    <nav id="mynav" class="fixed-top">
        <div class="container">
            <div id="top-navbar">
                <div class="logo nav-left">
                    <a style="text-decoration:none" href="index.php" class="logo d-flex align-items-center">
                        <img src="assets/image/logo.png" alt="">
                        <h3 style="font-family: 'IM Fell English SC', serif; color: black;">KINI.COM</h3>
                    </a>
                </div>
                <div class="nav-right">
                    <?php if (empty($_SESSION["username"])) {
                    echo "<a href='login/login.php' class='btn btn-primary'>Login</a>";
                } else { ?>
                        Selamat Datang <?= $_SESSION['username'] ?></b>
                        <?php } ?>
                    <button class="btn p-0" onclick="toggleSearch()"><i class="bi bi-search fw-bold"
                            style="font-size: 22px;"></i></button>
                    <button id="btn-sidebar" onclick="toggleSidenav();" class="btn p-0"><i
                            class="bi bi-filter-right fw-bold" style="font-size: 32px;"></i></button>
                </div>
            </div>
            <!-- tombol search -->

            <div id="bottom-navbar">
                <div class="search-layout">
                    <form method="post" class="d-flex justify-content-between">
                        <input type="text" class="form-control me-2" placeholder="Search news ...." name="keyword">
                        <button class="btn p-0" type="submit" name="cari"><i class="bi bi-search fw-bold"
                                style="font-size: 22px;"></i></button>
                    </form>
                    <script>
                        if (window.history.replaceState) {
                            window.history.replaceState(null, null, window.location.href);
                        }
                    </script>
                </div>

            </div>
            <!-- sidebar -->
            <?php
            require_once "function.php";
            if (empty($_SESSION["username"])) { ?>
                <ul class="mynavbar-list">
                    <button onclick="toggleSidenav();" class="btn p-0 position-absolute top-0 "><i class="bi bi-x fw-bold"
                            style="font-size: 32px;"></i></button>
                    <a style="text-decoration:none" href="index.php" class="logo d-flex align-items-center">
                        <img src="assets/image/logo.png" alt="">
                        <h3 style="font-family: 'IM Fell English SC', serif; color: black;">KINI.COM</h3>
                    </a>
                    </h3>
                    <hr class="m-0">
                    <li class="mynav-item">
                        <a href="index.php" class="mynav-link">Home</a>
                    </li>
                    <li class="mynav-item">
                        <a href="index.php?p=tentang" class="mynav-link">Tentang Kami</a>
                    </li>
                    <?php $sql = mysqli_query($koneksi, "select id,kategori from kategori");
                    while ($row = mysqli_fetch_array($sql)) { ?>
                        <li class="mynav-item">
                            <a href="index.php?p=kategori&id=<?= $row['id'] ?>" class="mynav-link">
                                <?php echo $row['kategori']; ?>
                            </a>
                        </li>
                        <?php } ?>
                    <li class="mynav-item">
                        <a href="login/login.php" class="mynav-link">Login</a>
                    </li>
                </ul>
                <?php } else {
                if ($_SESSION["level"] == 1) { ?>
                    <ul class="mynavbar-list">
                        <button onclick="toggleSidenav();" class="btn p-0 position-absolute top-0 "><i class="bi bi-x fw-bold"
                                style="font-size: 32px;"></i></button>
                        <a style="text-decoration:none" href="index.php" class="logo d-flex align-items-center">
                            <img src="assets/image/logo.png" alt="">
                            <h3 style="font-family: 'IM Fell English SC', serif; color: black;">KINI.COM</h3>
                        </a>
                        </h3>
                        <hr class="m-0">
                        <li class="mynav-item">
                            <a href="index.php?p=admin" class="mynav-link">Home</a>
                        </li>
                        <li class="mynav-item">
                            <a href="index.php?p=profiladmin" class="mynav-link">Profil</a>
                        </li>
                        <li class="mynav-item">
                            <a href="index.php?p=keluser" class="mynav-link">Kelola akun</a>
                        </li>

                        <li class="mynav-item">
                            <a href="index.php?p=kelberita" class="mynav-link">kelola berita</a>
                        </li>
                        <li class="mynav-item">
                            <a href="index.php?p=kelkomentar" class="mynav-link">kelola komentar</a>
                        </li>
                        <li class="mynav-item">
                            <a href="index.php?p=kelkategori" class="mynav-link">kelola kategori</a>
                        </li>
                        <li class="mynav-item">
                            <a href="page/logout.php" class="mynav-link">Logout</a>
                        </li>
                    </ul>
                    <?php } else { ?>
                    <ul class="mynavbar-list">
                        <button onclick="toggleSidenav();" class="btn p-0 position-absolute top-0 "><i class="bi bi-x fw-bold"
                                style="font-size: 32px;"></i></button>
                        <a style="text-decoration:none" href="index.php" class="logo d-flex align-items-center">
                            <img src="assets/image/logo.png" alt="">
                            <h3 style="font-family: 'IM Fell English SC', serif; color: black;">KINI.COM</h3>
                        </a>
                        </h3>
                        <hr class="m-0">
                        <li class="mynav-item">
                            <a href="index.php" class="mynav-link">Home</a>
                        </li>
                        <li class="mynav-item">
                            <a href="./?p=tentang" class="mynav-link">Tentang Kami</a>
                        </li>
                        <?php $sql = mysqli_query($koneksi, "select id,kategori from kategori");
                        while ($row = mysqli_fetch_array($sql)) { ?>
                            <li class="mynav-item">
                                <a href="index.php?p=kategori&id=<?= $row['id'] ?>" class="mynav-link">
                                    <?php echo $row['kategori']; ?>
                                </a>
                            </li>
                            <?php } ?>
                        <li class="mynav-item">
                            <a href="./?p=profiluser" class="mynav-link">profil</a>
                        </li>
                        <li class="mynav-item">
                            <a href="page/logout.php" class="mynav-link">Logout</a>
                        </li>
                    </ul>
                    <?php }
            } ?>

        </div>
    </nav>
</header>