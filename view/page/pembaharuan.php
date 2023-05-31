<!-- ini gadipake ya -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- link css -->
  <link rel="stylesheet" href="assets/css/pembaharuan.css">

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

<body>

  <div class="container-fluid" id="isi">
    <!-- {{-- isi konten disini ya --}} -->


    <!-- {{-- carousel --}} -->
    <div class="owl-carousel owl-theme" id="one">
      <?php while ($row = mysqli_fetch_assoc($result)) { //berfungsi untuk melakukan perulangan yang akan menampilkan data di table ?>
        <div class="container"> <img class="responsive-image" src="../../assets/storage/cover/"></div>
      <?php } mysqli_close($koneksi); //untuk mematikan queary atau memutuskan sinyal dari mysql?>
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
                <div class="card__background" style="background-image: u"></div>
                <div class="card__content">
                  <p class="card__category">Category</p>
                  <h3 class="card__heading">Example Card Heading</h3>
                </div>
              </a>
              <a class="card" href="#">
                <div class="card__background"></div>
                <div class="card__content">
                  <p class="card__category">Category</p>
                  <h3 class="card__heading">Example Card Heading</h3>
                </div>
              </a>
              <a class="card" href="#">
                <div class="card__background"></div>
                <div class="card__content">
                  <p class="card__category">Category</p>
                  <h3 class="card__heading">Example Card Heading</h3>
                </div>
              </a>
              <a class="card" href="#">
                <div class="card__background" style="background-image: u"></div>
                <div class="card__content">
                  <p class="card__category">Category</p>
                  <h3 class="card__heading">Example Card Heading</h3>
                </div>
              </a>
              <a class="card" href="#">
                <div class="card__background"></div>
                <div class="card__content">
                  <p class="card__category">Category</p>
                  <h3 class="card__heading">Example Card Heading</h3>
                </div>
              </a>
              <a class="card" href="#">
                <div class="card__background"></div>
                <div class="card__content">
                  <p class="card__category">Category</p>
                  <h3 class="card__heading">Example Card Heading</h3>
                </div>
              </a>
              <a class="card" href="#">
                <div class="card__background" style="background-image: u"></div>
                <div class="card__content">
                  <p class="card__category">Category</p>
                  <h3 class="card__heading">Example Card Heading</h3>
                </div>
              </a>
              <a class="card" href="#">
                <div class="card__background"></div>
                <div class="card__content">
                  <p class="card__category">Category</p>
                  <h3 class="card__heading">Example Card Heading</h3>
                </div>
              </a>
              <a class="card" href="#">
                <div class="card__background"></div>
                <div class="card__content">
                  <p class="card__category">Category</p>
                  <h3 class="card__heading">Example Card Heading</h3>
                </div>
              </a>
              <a class="card" href="#">
                <div class="card__background" style="background-image: u"></div>
                <div class="card__content">
                  <p class="card__category">Category</p>
                  <h3 class="card__heading">Example Card Heading</h3>
                </div>
              </a>
              <a class="card" href="#">
                <div class="card__background"></div>
                <div class="card__content">
                  <p class="card__category">Category</p>
                  <h3 class="card__heading">Example Card Heading</h3>
                </div>
              </a>
              <a class="card" href="#">
                <div class="card__background"></div>
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
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>

            </div>

            <br>

            <div class="container-fluid" style="background-color: rgba(165, 42, 42, 0.89)">
              <p id="title">JUMP PLUS</p>
            </div>

            <br>

            <div class="owl-carousel owl-theme" id="three">
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
            </div>

            <br>

            <div class="container-fluid" style="background-color: rgba(165, 42, 42, 0.89)">
              <p id="title">OTHERS</p>
            </div>

            <br>

            <div class="owl-carousel owl-theme" id="four">
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
              <div class="item"> <img src="{{ asset('img/skyfamilyposter.jpg') }}"></div>
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
                <img src="{{ asset('img/creators.jpg') }}" alt="">
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
                  <img alt="" class="RankingTitle-module_titleImg_18ZMt" src="{{ asset('img/chainsaw.jpg') }}" lazy="loaded">
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
                  <img alt="" class="RankingTitle-module_titleImg_18ZMt" src="{{ asset('img/chainsaw.jpg') }}" lazy="loaded">
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
                  <img alt="" class="RankingTitle-module_titleImg_18ZMt" src="{{ asset('img/chainsaw.jpg') }}" lazy="loaded">
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
</body>

</html>




</div>



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