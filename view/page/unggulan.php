<?php

require_once "../../function.php";

$queryCount = "SELECT DISTINCT * FROM mangas ORDER BY count DESC";
// Mengambil semua data dari tabel 'mangas' dan mengurutkannya berdasarkan kolom 'count' secara menurun (DESC).

$resultCount = mysqli_query($koneksi, $queryCount);

$queryWeekly = "SELECT DISTINCT * FROM mangas WHERE type ='weekly'";
// Mengambil data dari tabel 'mangas' yang memiliki nilai 'type' sama dengan 'weekly'. Data yang diambil tidak akan ganda (duplikat).

$resultWeekly = mysqli_query($koneksi, $queryWeekly);

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


    <div class="styles-maincontainer">
        <div class="featured-module">
            <div class="featured-banner">
                <div class="featured-banner-container">
                    <?php
                    $counter = 0;

                    foreach ($resultCount as $row) {
                        if ($counter < 3) {
                    ?>
                            <a href="viewer/titles.php?id=<?php echo $row['id']; ?>">
                                <img src="../../assets/storage/banner/<?php echo $row['banner']; ?>" class="featured-large-banner featured-theme" cursorshover="true">
                            </a>
                    <?php
                            $counter++;
                        } else {
                            break; // keluar dari perulangan setelah 3 kali
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="featured-content">
                <img dataid="497" class="featured-module-content featured-theme" src="../../assets/img/bannerunggulan1.jpg" lazy="loaded" cursorshover="true">
            </div>
            <div class="featured-content">
                <img dataid="276" class="featured-module-content featured-theme" src="../../assets/img/bannerunggulan2.jpg" lazy="loaded">
            </div>
            <div class="featured-content">
                <div>
                    <h1 class="module-title horizontal-titlelist">WEEKLY SHONEN JUMP</h1>
                    <div class="horizontal-module-titlelist">
                        <?php
                        $counterr = 0;
                        while ($row_2 = mysqli_fetch_assoc($resultWeekly)) {
                            if ($counterr < 13) {
                        ?>
                                <a class="card" href="viewer/titles.php?id=<?php echo $row_2['id']; ?>">
                                    <div class="card__background" style="background-image: url('../../assets/storage/cover/<?php echo $row_2['cover']; ?>')"></div>
                                    <div class="card__content">
                                        <h3 class="card__heading"><?php echo $row_2['title']; ?></h3>
                                    </div>
                                </a>
                        <?php
                                $counterr++;
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>


        </div>
        <div class="featured-content">
            <div>
                <h1 class="module-title horizontal-titlelist">OTHER</h1>
                <div class="horizontal-module-titlelist">

                    <?php
                    $counterrr = 0;
                    while ($row_3 = mysqli_fetch_assoc($resultOther)) {
                        if ($counterrr < 13) {
                    ?>
                            <a class="card" href="viewer/titles.php?id=<?php echo $row_3['id']; ?>">
                                <div class="card__background" style="background-image: url('../../assets/storage/cover/<?php echo $row_3['cover']; ?>')"></div>
                                <div class="card__content">
                                    <h3 class="card__heading"><?php echo $row_3['title']; ?></h3>
                                </div>
                            </a>
                    <?php
                            $counterrr++;
                        }
                    }
                    ?>


                </div>
            </div>
        </div>
        <div class="featured-content">
            <img dataid="387" class="featured-module-content featured-theme" src="../../assets/img/bannerfooter.jpg" lazy="loaded" cursorshover="true">
        </div>
        <div class="featured-content">
            <img dataid="66" class="featured-module-content featured-theme" src="../../assets/img/bannerfooter1.jpg" lazy="loaded" cursorshover="true">
        </div>
        <div class="featured-content">
            <img dataid="34" class="featured-module-content featured-theme" src="../../assets/img/bannerfooter2.jpg" lazy="loaded" cursorshover="true">
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



    <script>
        $(document).ready(function() {

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

            $('#five').owlCarousel({
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


        })
    </script>


</body>

</html>