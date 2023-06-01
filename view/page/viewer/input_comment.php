<?php
require_once "../../../function.php";

if (empty($_SESSION['id_user'])) {
    header("Location:../../../login/login.php");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $comment = $_POST['comment'];
    $chapterId = $_GET['id'];

    // Insert the comment into the comments table
    $queryInsertComment = "INSERT INTO comments (chapter, user, comment_text) VALUES ('$chapterId', '{$_SESSION['id_user']}', '$comment')";
    mysqli_query($koneksi, $queryInsertComment);
    // Redirect back to the current page after inserting the comment
    header("Location: comment.php?id=$chapterId");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head section code -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- css library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="../../../assets/css/titles.css">
    <link rel="stylesheet" href="../../../assets/css/layout.css">

    <style>
        /* Custom styles for the textarea, h1 tag, and input */
        textarea {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
            display: block;
            padding: 10px;
            box-sizing: border-box;
            resize: vertical;
        }

        h1 {
            text-align: center;
        }

        input[type="submit"] {
            display: block;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <?php
    include_once 'layout_page/navbar_page.php';
    ?>

    <div class="styles-module_mainContainer_2tQWW">
        <h1>Comment</h1>
        <br>
        <form action="" method="POST">
            <textarea rows="4" cols="50" name="comment" id="comment" placeholder="Enter text here..."></textarea>
            <br>
            <input type="submit">
        </form>
    </div>

    <?php
    include_once 'layout_page/footer_page.php';
    ?>
</body>

</html>
