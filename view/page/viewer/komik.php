<?php

$id = $_GET['id'];
require_once "../../../function.php";

// Fetch chapters for the manga
// Fetch chapters for the manga
$querypages = "SELECT * FROM pages WHERE chapter_id = '$id'";
$resultpages = mysqli_query($koneksi, $querypages);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="V0PNkQK4uDXd28cW8SMmgF5cG1Z2Ruer5PxmmMVv">

    <title>Baca Manga</title>
    <link rel="shortcut icon" type="image/png" href="http://127.0.0.1:8000/img/favicon.png" />

    <!-- Styles -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="http://127.0.0.1:8000/js/app.js" defer></script>
    <script src="https://kit.fontawesome.com/22dad4dcbd.js" crossorigin="anonymous"></script>

    <style>
        .container{
            width: 850px;
        }
        .responsive-image {
            max-width: 100%;
            height: auto;
            object-fit: cover;
        }
    </style>
</head>

<body class="bg-dark">

    <!-- Page Content -->
    <div class="container">

        <div class="bg-dark-1 text-center px-4 pt-4 pb-2 mb-3">

            <!-- <img src="../../../assets/storage/mangas/100/Chapter_01/01.jpg" alt="page-1" class="responsive-image" > -->
            <?php
            foreach ($resultpages as $page) {
            ?>
             <img src="../../../assets/<?php echo $page['path']; ?>" alt="page-1" class="responsive-image">

            <br>
            <br>
            <?php
            }
            ?>

        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>