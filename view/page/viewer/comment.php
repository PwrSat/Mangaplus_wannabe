<?php
$id = $_GET['id']; // Mendapatkan ID chapter dari URL

require_once "../../../function.php";


// Mengambil data komentar berdasarkan ID chapter
$queryGetComments = "SELECT c.comment_text, u.username FROM comments c
                    INNER JOIN users u ON c.user = u.id
                    WHERE c.chapter = '$id'";
$resultGetComments = mysqli_query($koneksi, $queryGetComments);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- CSS dan library lainnya -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="../../../assets/css/titles.css">
    <link rel="stylesheet" href="../../../assets/css/layout.css">

</head>

<body>
    <?php
    include_once 'layout_page/navbar_page.php';
    ?>

    <!-- isi konten -->
    <div class="styles-module_mainContainer_2tQWW">
        <div class="TitleDetail-module_mainContainer_1niDR">
            <div>
                <div class="module-header">
                    <nav class="module-toggle">
                        <ul>
                            <li class="listbar mx-3" style="display: inline-block; font-size: 20px; color: var(--color-yellow); opacity: 1; ">
                                <a href="input_comment.php?id=<?php echo $id; ?>" aria-current="page" class="">Comment</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="TitleDetailHeader-module_flexContainer_3D03N">
                    <div class="TitleDetailHeader-module_left1_3C2Fx">
                        <div class="TitleDetailHeader-module_fitImage_1-ino" style="background-image: url('https://mangaplus.shueisha.co.jp/drm/title/100037/title_thumbnail_main/233340.jpg?key=3d3844f6f4a80f3a14f06fcc402e033b&amp;duration=86400');">
                            <div></div>
                        </div>
                        <div class="TitleDetailHeader-module_right1_1o9Bj">
                            <?php
                            while ($row = mysqli_fetch_assoc($resultGetComments)) {
                            ?>
                                <div class="TitleDetailHeader-module_info_1_7BN">
                                    <h1 class="TitleDetailHeader-module_title_Iy33M"><?php echo $row['username']; ?></h1>
                                    <br>
                                    <p class="TitleDetailHeader-module_author_3Q2QN"><?php echo $row['comment_text']; ?></p>
                                </div>
                            <?php
                            }

                            if (mysqli_num_rows($resultGetComments) == 0) {
                                echo "Data tidak ada";
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include_once 'layout_page/footer_page.php';
    ?>

</body>

</html>