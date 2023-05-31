<?php 

require_once "../../function.php";

if(empty($_SESSION['id_user'])){
  header("Location:../../login/login.php");
}

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
    <?php
                $no = 1;

                if(isset($_GET['cari'])){
                    $result = mysqli_query($koneksi, "SELECT * FROM mangas WHERE title LIKE '%".
                    $_GET['cari']."%'");
                }
                $id = $_SESSION["id_user"];

                $favorit = tampilkan("SELECT favorites.*, mangas.* from favorites join mangas on favorites.manga_id = mangas.id where favorites.user_id = $id ");
                // var_dump($favorit);
                
    
                
    ?>
    <div class="SubscribedTitles-module_gridContainer_1cbmH">
      <?php
      if(empty($favorit)){ ?>
          <p>Tidak ada favorit</p>
      <?php  
      }else{
          foreach($favorit as $favorit){
          ?>
          <div class="SubscribedTitle-module_contents_2S_dW">
            <div class="SubscribedTitle-module_lang_pivm4">
              <span title="English">en</span>
            </div>
            <div class="SubscribedTitle-module_imgWrapper_usHUo">
              <a href="/titles/100235">
                <img alt="image" class="SubscribedTitle-module_image_2U_La" src="../../assets/storage/cover/<?= $favorit["cover"] ?>">
              </a>

              <?php
                if(isset($_POST["btn-fav"])){
                    favorite($_POST);
                }
              ?>

              <?php
              // var_dump($favorit)
              ?>
            <form action="" method="post">
              <input type="hidden" name="user_id" value="<?= $_SESSION['id_user'] ?>">
              <input type="hidden" name="manga_id" value="<?= $favorit['manga_id'] ?>">
              <input type="hidden" name="status" value="2">

              <div>
                 <button name="btn-fav" type="submit" class="SubscribedTitle-module_btn_22S2b" cursorshover="true">Hapus</button>
              </div>

            </form>
            </div>
          </div>
      <?php }
    } ?>

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