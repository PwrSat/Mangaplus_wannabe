<?php
require_once "function.php";

$query = "SELECT DISTINCT b.title, b.id, b.banner, b.cover FROM chapters a INNER JOIN mangas b ON a.manga = b.id ORDER BY a.created_at DESC";
// Mengambil data dari tabel 'chapters' dan 'mangas' dengan menggunakan INNER JOIN berdasarkan kolom 'manga' yang sama. Data diurutkan berdasarkan kolom 'created_at' secara menurun (DESC).

$result = mysqli_query($koneksi, $query);

$queryCount = "SELECT * FROM mangas ORDER BY count DESC";
// Mengambil semua data dari tabel 'mangas' dan mengurutkannya berdasarkan kolom 'count' secara menurun (DESC).

$resultCount = mysqli_query($koneksi, $queryCount);

$queryWeekly = "SELECT DISTINCT * FROM mangas WHERE type ='weekly'";
// Mengambil data dari tabel 'mangas' yang memiliki nilai 'type' sama dengan 'weekly'. Data yang diambil tidak akan ganda (duplikat).

$resultWeekly = mysqli_query($koneksi, $queryWeekly);

$queryJump = "SELECT DISTINCT * FROM mangas WHERE type ='jump'";
// Mengambil data dari tabel 'mangas' yang memiliki nilai 'type' sama dengan 'jump'. Data yang diambil tidak akan ganda (duplikat).

$resultJump = mysqli_query($koneksi, $queryJump);

$queryOther = "SELECT * FROM mangas";
// Mengambil data dari tabel 'mangas'.

$resultOther = mysqli_query($koneksi, $queryOther);

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
    <link rel="stylesheet" href="assets/css/layout.css">
    <link rel="stylesheet" href="assets/css/pembaharuan.css">
    <link rel="stylesheet" href="assets/css/mangaplus.css">
    <link rel="stylesheet" href="assets/css/zaoslider.css">

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
    include_once "layout/navbar_page.php";
    ?>



    <div class="container-fluid" id="isi">
        <!-- {{-- isi konten disini ya --}} -->

        <!-- {{-- carousel --}} -->
        <div class="owl-carousel owl-theme" id="one">
            <?php

            $counter = 0; // variabel counter untuk menghitung perulangan
            foreach ($result as $row) {
                if ($counter < 3) { // batasan perulangan hanya 3 kali
            ?>
                    <div class="item"> <img src="assets/storage/banner/<?php echo $row['banner']; ?>"></div>
            <?php
                    $counter++; // mengupdate counter setelah perulangan
                } else {
                    break; // keluar dari perulangan setelah 3 kali
                }
            }
            ?>
        </div>

        <!-- {{-- pembaharuan harian --}} -->
        <div class="pembaharuan">
            <div class="wrapper">
                <div class="row">
                    <div class="col-md-8">
                        <div class="container-fluid">
                            <p class="nested col-sm-7 col-lg-8" id="title">Pembaharuan Harian</p>

                            <a class="nested col-sm-5 col-lg-4" href="#">
                                <button class="btn-pemb">Semua Pembaharuan</button>
                            </a>
                        </div>

                        <br>

                        <!-- {{-- card pembaharuan --}} -->
                        <div class="card-grid">
                            <?php

                            $counterr = 0;
                            foreach ($result as $row_2) {
                                if ($counterr < 13) {
                            ?>
                                    <a class="card" href="view/page/viewer/titles.php?id=<?php echo $row_2['id']; ?>">
                                        <div class="card__background" style="background-image: url('assets/storage/cover/<?php echo $row_2['cover']; ?>')"></div>
                                        <div class="card__content">
                                            <h3 class="card__heading"><?php echo $row_2['title']; ?></h3>
                                        </div>
                                    </a>
                            <?php
                                    $counterr++;
                                } else {
                                    break; // keluar dari perulangan setelah 3 kali
                                }
                            }
                            ?>
                        </div>

                        <br>

                        <div class="container-fluid" style="background-color: rgba(165, 42, 42, 0.89)">
                            <p id="title">WEEKLY SHONEN JUMP</p>
                        </div>

                        <br>

                        <!-- {{-- card weekly --}} -->

                        <div class="owl-carousel owl-theme" id="two">
                            <?php
                            $counterrr = 0;

                            foreach ($resultWeekly as $row_3) {
                                if ($counterr < 13) {
                            ?>
                                    <a class="card" href="view/page/viewer/titles.php?id=<?php echo $row_3['id']; ?>">
                                        <div class="card__background" style="background-image: url('assets/storage/cover/<?php echo $row_3['cover']; ?>')"></div>
                                        <div class="card__content">
                                            <h3 class="card__heading"><?php echo $row_3['title']; ?></h3>
                                        </div>
                                    </a>
                            <?php
                                }
                            }
                            ?>
                        </div>

                        <br>

                        <div class="container-fluid" style="background-color: rgba(165, 42, 42, 0.89)">
                            <p id="title">JUMP PLUS</p>
                        </div>

                        <br>

                        <div class="owl-carousel owl-theme" id="three">
                            <?php
                            $counterrrr = 0;

                            foreach ($resultJump as $row_4) {
                                if ($counterrrr < 13) {
                            ?>
                                    <a class="card" href="view/page/viewer/titles.php?id=<?php echo $row_4['id']; ?>">
                                        <div class="card__background" style="background-image: url('assets/storage/cover/<?php echo $row_4['cover']; ?>')"></div>
                                        <div class="card__content">
                                            <h3 class="card__heading"><?php echo $row_4['title']; ?></h3>
                                        </div>
                                    </a>
                            <?php
                                }
                            }
                            ?>
                        </div>

                        <br>

                        <div class="container-fluid" style="background-color: rgba(165, 42, 42, 0.89)">
                            <p id="title">OTHERS</p>
                        </div>

                        <br>

                        <div class="owl-carousel owl-theme" id="four">
                        <?php
                            $counterrrrr = 0;

                            foreach ($resultOther as $row_5) {
                                if ($counterrrrr < 13) {
                            ?>
                                    <a class="card" href="view/page/viewer/titles.php?id=<?php echo $row_5['id']; ?>">
                                        <div class="card__background" style="background-image: url('assets/storage/cover/<?php echo $row_5['cover']; ?>')"></div>
                                        <div class="card__content">
                                            <h3 class="card__heading"><?php echo $row_5['title']; ?></h3>
                                        </div>
                                    </a>
                            <?php
                                }
                            }
                            ?>
                        </div>

                        <br>
                        <br>

                    </div>
                    <!-- {{-- akhir dari grid pertama --}} -->

                    <div class="col-md-4">



                        <br>

                        <a class="images" href="">
                            <div class="banner">
                                <img src="assets/img/creators.jpg" alt="">
                            </div>
                        </a>

                        <br>
                        <br>

                        <div class="container-fluid">
                            <p class="nested col-sm-7 col-lg-6" id="title">Paling dilihat</p>

                            <a class="nested col-sm-5 col-lg-6" href="view/page/hot_list.php">
                                <button class="btn-pemb">Lihat Semua</button>
                            </a>
                        </div>

                        <br>

                        <div class="Updates-module_rankingTitle_Ky0uL">
                            <?php
                            $count = 0;
                            if ($resultCount && mysqli_num_rows($resultCount) > 0) {
                                foreach ($resultCount as $roww) {
                                    if ($count >= 8) {
                                        break; // Keluar dari perulangan setelah 4 kali perulangan
                                    }
                                    $count++;
                            ?>
                                    <a href="/titles/100140">
                                        <div class="RankingTitle-module_rankingTitle_2E0E-">
                                            <img alt="" class="RankingTitle-module_titleImg_18ZMt" src="assets/storage/cover/<?php echo $roww['cover']; ?>" lazy="loaded">
                                            <div class="RankingTitle-module_titleDetail_35zr8">
                                                <a href="view/page/viewer/titles.php?id=<?php echo $roww['id']; ?>" class="all-title">
                                                    <p class="RankingTitle-module_title_2rg5n"><?php echo $roww['title']; ?></p>
                                                    <p class="RankingTitle-module_author_2DBfa"><?php echo $roww['author']; ?></p>
                                                    <p class="RankingTitle-module_viewCount_1E3Re">
                                                        <i class="fa-solid fa-eye"></i> <?php echo $roww['count']; ?>
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </a>

                                    <br><br>
                            <?php
                                }
                            } else {
                                echo "Tidak ada data yang tersedia."; // Pesan jika tidak ada hasil query
                            }
                            ?>
                        </div>


                    </div>
                </div>
            </div>

        </div>

        <?php
        include "layout/footer_page.php";
        ?>



        <!-- </div> -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        </script>
        <script src="https://kit.fontawesome.com/d8ca2bfebc.js" crossorigin="anonymous"></script>




        <script>
            $(document).ready(function() {
                $('#one').owlCarousel({
                    loop: true,
                    margin: 14,
                    autoplay: true,
                    autoplayTimeout: 10000,
                    nav: false,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 1
                        },
                        1000: {
                            items: 2
                        }
                    }
                });

                $('#two').owlCarousel({
                    loop: false,
                    margin: 14,
                    autoplay: true,
                    autoplayTimeout: 10000,
                    nav: true,
                    dots: false,
                    responsive: {
                        0: {
                            items: 2
                        },
                        600: {
                            items: 3
                        },
                        1000: {
                            items: 5
                        }
                    }
                });

                $('#three').owlCarousel({
                    loop: false,
                    margin: 14,
                    autoplay: true,
                    autoplayTimeout: 10000,
                    nav: true,
                    dots: false,
                    responsive: {
                        0: {
                            items: 2
                        },
                        600: {
                            items: 3
                        },
                        1000: {
                            items: 5
                        }
                    }
                });

                $('#four').owlCarousel({
                    loop: false,
                    margin: 14,
                    autoplay: true,
                    autoplayTimeout: 10000,
                    nav: true,
                    dots: false,
                    responsive: {
                        0: {
                            items: 2
                        },
                        600: {
                            items: 3
                        },
                        1000: {
                            items: 5
                        }
                    }
                });

                $(function() {
                    var taeb = $(".taeb-switch");
                    taeb.find(".taeb").on("click", function() {
                        var $this = $(this);

                        if ($this.hasClass("active")) return;

                        var direction = $this.attr("taeb-direction");

                        taeb.removeClass("left right").addClass(direction);
                        taeb.find(".taeb.active").removeClass("active");
                        $this.addClass("active");
                    });
                });


            })
        </script>



</body>

</html>