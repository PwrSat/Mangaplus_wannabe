<?php

require_once "../../function.php";

$query = "SELECT * FROM mangas"; //memanggil file yang ada di table mangas

$result = mysqli_query($koneksi, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- {{-- css online/library --}} -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- {{-- css file --}} -->
    <link rel="stylesheet" href="../../assets/css/layout.css">
    <link rel="stylesheet" href="../../assets/css/pembaharuan.css">
    <link rel="stylesheet" href="../../assets/css/mangaplus.css">
    <link rel="stylesheet" href="../../assets/css/zaoslider.css">


    <style>
        .title-wrapper {
            display: inline-block;
            width: 200px;
            /* adjust as needed */
            margin-right: 10px;
            /* adjust as needed */
        }

        .all-title-image {
            /* set the desired width */
            height: 200px;
            /* set the desired height */
            object-fit: cover;
            /* ensure the image fills the space without distorting */
        }
    </style>
</head>



<body>

    <?php
    include "layout_page/navbar_page.php";
    ?>

    <div class="container">
        <!-- {{-- isi konten disini ya --}} -->
        <div class="styles-maincontainer">
            <div class="module-mangalist">
                <div class="module-header">
                    <h1 class="module-title module-title-2">Daftar Manga</h1>
                    <nav class="module-toggle">
                        <ul>
                            <li class="module-toggleitem">
                                <a href="www.google.com" aria-current="page" class="router-link-exact-active MangaList-module_linkActive_2FFDQ">Semua</a>
                            </li>
                            <li class="module-toggleitem">
                                <a href="/manga_list/hot" class="">Paling Dilihat</a>
                            </li>
                            <li class="module-toggleitem">
                                <a href="/manga_list/updated" class="">Baru</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <?php
                $no = 1;

                if(isset($_GET['cari'])){
                    $result = mysqli_query($koneksi, "SELECT * FROM mangas WHERE title LIKE '%".
                    $_GET['cari']."%'");
                }

                while ($row = mysqli_fetch_assoc($result)) { //berfungsi untuk melakukan perulangan yang akan   menampilkan data di table
                ?>
                    <div class="title-wrapper">
                        <div class="title-module">
                            <a href="viewer/titles.php?id=<?php echo $row['id']; ?>" class="all-title">
                                <img class="all-title-image" src="../../assets/storage/cover/<?php echo $row['cover']; ?>">
                                <div class="all-title-lang">
                                    <span title="English" class=""><?php echo $row['bahasa']; ?></span>
                                </div>
                                <p class="title-judul"><?php echo $row['title']; ?></p>
                                <p class="title-author"><?php echo $row['author']; ?></p>
                            </a>
                        </div>
                    </div>
                <?php
                }
                mysqli_close($koneksi); //untuk mematikan queary atau memutuskan sinyal dari mysql
                ?>

            </div>
        </div>
    </div>

    <?php
    include "layout_page/footer_page.php";
    ?>

    <!-- </div> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </script>
    <script src="https://kit.fontawesome.com/d8ca2bfebc.js" crossorigin="anonymous"></script>


</body>

</html>