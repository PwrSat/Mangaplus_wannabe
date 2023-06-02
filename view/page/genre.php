<?php
require_once "../../function.php";

$query = "SELECT mangas.*, genres.name AS genres_name FROM mangas
          INNER JOIN genres ON mangas.genre_id = genres.id";

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
                <form action="" method="GET">
                    <div class="module-header">
                        <h1 class="module-title module-title-2">Genre</h1>
                        <nav class="module-toggle">
                            <ul>
                                <li class="listbar mx-3" style="display: inline-block; font-size: 20px; color: var(--color-yellow); opacity: 1; ">
                                    <select class="me-3 border-0 bg-light" name="genre">
                                        <option value="">All</option>
                                        <?php
                                        $genreQuery = "SELECT * FROM genres";
                                        $genreResult = mysqli_query($koneksi, $genreQuery);

                                        while ($genre = mysqli_fetch_assoc($genreResult)) {
                                            $selected = '';
                                            if (isset($_GET['genre']) && $_GET['genre'] == $genre['name']) {
                                                $selected = 'selected';
                                            }
                                            echo "<option value='" . $genre['name'] . "' $selected>" . $genre['name'] . "</option>";
                                        }

                                        mysqli_free_result($genreResult);
                                        ?>
                                    </select>
                                    <input type="submit" value="Filter">
                                </li>
                            </ul>
                        </nav>
                    </div>
                </form>
                <?php
                $no = 1;

                // Menyimpan pilihan genre yang dipilih
                $FilterGenre = isset($_GET['genre']) ? $_GET['genre'] : '';

                // Menyiapkan query SQL dengan filter genre
                $query = "SELECT mangas.*, genres.name AS genre_name FROM mangas
                          INNER JOIN genres ON mangas.genre_id = genres.id";

                if ($FilterGenre !== '') {
                    $query .= " WHERE genres.name = '$FilterGenre'";
                }

                $result = mysqli_query($koneksi, $query);

                while ($row = mysqli_fetch_assoc($result)) {
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
                mysqli_close($koneksi);
                ?>

            </div>
        </div>
    </div>

    <?php
    include "layout_page/footer_page.php";
    ?>

</body>

</html>
