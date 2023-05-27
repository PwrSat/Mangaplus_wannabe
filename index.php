<?php 
    require_once "function.php";
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
            <div class="item"> <img src="assets/img/img1.jpg"></div>
            <div class="item"> <img src="assets/img/img2.jpg"></div>
            <div class="item"> <img src="assets/img/img3.jpg"></div>
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
                            <a class="card" href="#">
                                <div class="card__background" style="background-image: url('assets/img/skyfamilyposter.jpg')"></div>
                                <div class="card__content">
                                    <p class="card__category">Category</p>
                                    <h3 class="card__heading">Example Card Heading</h3>
                                </div>
                            </a>
                            <a class="card" href="#">
                                <div class="card__background" style="background-image: url('assets/img/skyfamilyposter.jpg')"></div>
                                <div class="card__content">
                                    <p class="card__category">Category</p>
                                    <h3 class="card__heading">Example Card Heading</h3>
                                </div>
                            </a>
                            <a class="card" href="#">
                                <div class="card__background" style="background-image: url('assets/img/skyfamilyposter.jpg')"></div>
                                <div class="card__content">
                                    <p class="card__category">Category</p>
                                    <h3 class="card__heading">Example Card Heading</h3>
                                </div>
                            </a>
                            <a class="card" href="#">
                                <div class="card__background" style="background-image: url('assets/img/skyfamilyposter.jpg')"></div>
                                <div class="card__content">
                                    <p class="card__category">Category</p>
                                    <h3 class="card__heading">Example Card Heading</h3>
                                </div>
                            </a>
                            <a class="card" href="#">
                                <div class="card__background" style="background-image: url('assets/img/skyfamilyposter.jpg')"></div>
                                <div class="card__content">
                                    <p class="card__category">Category</p>
                                    <h3 class="card__heading">Example Card Heading</h3>
                                </div>
                            </a>
                            <a class="card" href="#">
                            <div class="card__background" style="background-image: url('assets/img/skyfamilyposter.jpg')"></div>
                                <div class="card__content">
                                    <p class="card__category">Category</p>
                                    <h3 class="card__heading">Example Card Heading</h3>
                                </div>
                            </a>
                            <a class="card" href="#">
                                <div class="card__background" style="background-image: url('assets/img/skyfamilyposter.jpg')"></div>
                                <div class="card__content">
                                    <p class="card__category">Category</p>
                                    <h3 class="card__heading">Example Card Heading</h3>
                                </div>
                            </a>
                            <a class="card" href="#">
                                <div class="card__background" style="background-image: url('assets/img/skyfamilyposter.jpg')"></div>
                                <div class="card__content">
                                    <p class="card__category">Category</p>
                                    <h3 class="card__heading">Example Card Heading</h3>
                                </div>
                            </a>
                            <a class="card" href="#">
                                <div class="card__background" style="background-image: url('assets/img/skyfamilyposter.jpg')"></div>
                                <div class="card__content">
                                    <p class="card__category">Category</p>
                                    <h3 class="card__heading">Example Card Heading</h3>
                                </div>
                            </a>
                            <a class="card" href="#">
                                <div class="card__background" style="background-image: url('assets/img/skyfamilyposter.jpg')"></div>
                                <div class="card__content">
                                    <p class="card__category">Category</p>
                                    <h3 class="card__heading">Example Card Heading</h3>
                                </div>
                            </a>
                            <a class="card" href="#">
                                <div class="card__background" style="background-image: url('assets/img/skyfamilyposter.jpg')"></div>
                                <div class="card__content">
                                    <p class="card__category">Category</p>
                                    <h3 class="card__heading">Example Card Heading</h3>
                                </div>
                            </a>
                            <a class="card" href="#">
                                <div class="card__background" style="background-image: url('assets/img/skyfamilyposter.jpg')"></div>
                                <div class="card__content">
                                    <p class="card__category">Category</p>
                                    <h3 class="card__heading">Example Card Heading</h3>
                                </div>
                            </a>

                        </div>

                        <br>

                        <div class="container-fluid" style="background-color: rgba(165, 42, 42, 0.89)">
                            <p id="title">WEEKLY SHONEN JUMP</p>
                        </div>

                        <br>

                        <!-- {{-- card weekly --}} -->

                        <div class="owl-carousel owl-theme" id="two">
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>

                        </div>

                        <br>

                        <div class="container-fluid" style="background-color: rgba(165, 42, 42, 0.89)">
                            <p id="title">JUMP PLUS</p>
                        </div>

                        <br>

                        <div class="owl-carousel owl-theme" id="three">
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                        </div>

                        <br>

                        <div class="container-fluid" style="background-color: rgba(165, 42, 42, 0.89)">
                            <p id="title">OTHERS</p>
                        </div>

                        <br>

                        <div class="owl-carousel owl-theme" id="four">
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                            <div class="item"> <img src="assets/img/skyfamilyposter.jpg"></div>
                        </div>

                        <br>
                        <br>

                    </div>
                    <!-- {{-- akhir dari grid pertama --}} -->

                    <div class="col-md-4">

                        <div class="choice">
                            <div class="wrapper">
                                <div class="taeb-switch left text-center">
                                    <a class="taeb active" taeb-direction="left" style="text-decoration:none" href="#">List</a><!--
            --><a class="taeb" taeb-direction="right" style="text-decoration:none" href="#">Map</a>
                                </div>
                            </div>
                        </div>

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

                            <a class="nested col-sm-5 col-lg-6" href="#">
                                <button class="btn-pemb">Lihat Semua</button>
                            </a>
                        </div>

                        <div class="Updates-module_rankingTitle_Ky0uL">
                            <a href="/titles/100140">
                                <div class="RankingTitle-module_rankingTitle_2E0E-">
                                    <img alt="" class="RankingTitle-module_titleImg_18ZMt" src="assets/img/chainsaw.jpg" lazy="loaded">
                                    <div class="RankingTitle-module_titleDetail_35zr8">
                                        <p class="RankingTitle-module_title_2rg5n">One Piece</p>
                                        <p class="RankingTitle-module_author_2DBfa">Eiichiro Oda</p>
                                        <p class="RankingTitle-module_viewCount_1E3Re">
                                            <i class="fa-solid fa-eye"></i> 180,508
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="Updates-module_rankingTitle_Ky0uL">
                            <a href="/titles/100140">
                                <div class="RankingTitle-module_rankingTitle_2E0E-">
                                    <img alt="" class="RankingTitle-module_titleImg_18ZMt" src="assets/img/chainsaw.jpg" lazy="loaded">
                                    <div class="RankingTitle-module_titleDetail_35zr8">
                                        <p class="RankingTitle-module_title_2rg5n">One Piece</p>
                                        <p class="RankingTitle-module_author_2DBfa">Eiichiro Oda</p>
                                        <p class="RankingTitle-module_viewCount_1E3Re">
                                            <i class="fa-solid fa-eye"></i> 180,508
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="Updates-module_rankingTitle_Ky0uL">
                            <a href="/titles/100140">
                                <div class="RankingTitle-module_rankingTitle_2E0E-">
                                    <img alt="" class="RankingTitle-module_titleImg_18ZMt" src="assets/img/chainsaw.jpg" lazy="loaded">
                                    <div class="RankingTitle-module_titleDetail_35zr8">
                                        <p class="RankingTitle-module_title_2rg5n">One Piece</p>
                                        <p class="RankingTitle-module_author_2DBfa">Eiichiro Oda</p>
                                        <p class="RankingTitle-module_viewCount_1E3Re">
                                            <i class="fa-solid fa-eye"></i> 180,508
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>


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