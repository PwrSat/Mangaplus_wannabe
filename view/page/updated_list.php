<?php

require_once "../../function.php";

$queryCount = "SELECT DISTINCT b.title, b.id, b.cover, b.bahasa, b.author FROM chapters a INNER JOIN mangas b ON a.manga = b.id ORDER BY a.created_at DESC";
// Mengambil data dari tabel 'chapters' dan 'mangas' dengan menggunakan INNER JOIN berdasarkan kolom 'manga' yang sama. Data diurutkan berdasarkan kolom 'created_at' secara menurun (DESC).

$resultCount = mysqli_query($koneksi, $queryCount);

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
                            <li class="listbar mx-3" style="display: inline-block; font-size: 20px; color: var(--color-yellow); opacity: 1; ">
                                <a href="daftar.php" class="">Semua</a>
                            </li>
                            <li class="listbar mx-3" style="display: inline-block; font-size: 20px; color: var(--color-yellow); opacity: 1;">
                                <a href="hot_list.php" aria-current="page" class="">Paling Dilihat</a>
                            </li>
                            <li class="listbar mx-3" style="display: inline-block; font-size: 20px; color: var(--color-yellow); opacity: 1;">
                                <a href="updated_list.php" class="">Baru</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <?php
                $no = 1;

                // Menyimpan pilihan bahasa yang dipilih
                $selectedLanguage = isset($_GET['filter-language']) ? $_GET['filter-language'] : '';

                // Menyiapkan query SQL dengan filter bahasa
                
                if ($selectedLanguage === 'indonesia') {
                    $queryCount = "SELECT * FROM mangas";
                    $queryCount .= " WHERE bahasa = 'indonesia'";
                } elseif ($selectedLanguage === 'inggris') {
                    $queryCount = "SELECT * FROM mangas";
                    $queryCount .= " WHERE bahasa = 'inggris'";
                }

                // Menjalankan query SQL
                $resultCount = mysqli_query($koneksi, $queryCount);

                if (isset($_GET['cari'])) {
                    $resultCount = mysqli_query($koneksi, "SELECT * FROM mangas WHERE title LIKE '%" .
                        $_GET['cari'] . "%'");
                }
                ?>

                <?php while ($row = mysqli_fetch_assoc($resultCount)) : ?>
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
                <?php endwhile; ?>


                <?php
                mysqli_close($koneksi); // Close the database connection
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