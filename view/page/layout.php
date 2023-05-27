<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    {{-- css online/library --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- css file --}}

    <link rel="stylesheet" href="{{ asset('pembaharuan.css') }}">
    <link rel="stylesheet" href="{{ asset('mangaplus.css') }}">
    <link rel="stylesheet" href="{{ asset('zaoslider.css') }}">

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
    <div class="superNav border-bottom py-2 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 centerOnMobile">
                    <span class="d-none d-lg-inline-block d-md-inline-block d-sm-inline-block d-xs-none me-3" style="color: black"><strong>info@somedomain.com</strong></span>
                    <span class="me-3"><i class="fa-solid fa-phone me-1 text-warning"></i> <strong style="color: black">1-800-123-1234</strong></span>
                </div>

                {{-- fitur bahasa --}}
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-none d-lg-block d-md-block-d-sm-block d-xs-none text-end">
                    <select class="me-3 border-0 bg-light">
                        <option value="english">English</option>
                        <option value="indo">Indonesia</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark p-3 bg-dark" id="neubar">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{ asset('img/logomanga.png') }}" height="70">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="mx-auto my-3 d-lg-none d-sm-block d-xs-block">
                <div class="input-group">
                    <span class="border-warning input-group-text bg-warning text-white"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="text" class="form-control border-warning" style="color:#7a7a7a">
                    <button class="btn btn-warning text-white">Search</button>
                </div>
            </div>
            <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase {{ request()->is('page/pembaharuan') ? 'active' : '' }}" href="/page/pembaharuan">Pembaharuan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase {{ request()->is('page/unggulan') ? 'active' : '' }}" href="/page/unggulan">unggulan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase {{ request()->is('page/daftar') ? 'active' : '' }}" href="/page/daftar">Daftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase {{ request()->is('creator/maincreators') ? 'active' : '' }}" href="/creator/maincreators">Creators</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase {{ request()->is('page/favorite') ? 'active' : '' }}" href="/page/favorite">Favorite</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase {{ request()->is('tentang') ? 'active' : '' }}" href="/tentang">Tentang</a>
                    </li>
                </ul>
                <div class="ms-auto d-none d-lg-block">
                    <div class="input-group">
                        <span class="border-warning input-group-text bg-warning text-white"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" class="form-control border-warning" style="color:#7a7a7a">
                        <button class="btn btn-warning text-white">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <br>

    @yield('content')


    </div>

    <br>
    <footer class="footer-section">
        <div class="container">
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="{{ asset('img/logomanga.png') }}" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor
                                    incididuntut consec tetur adipisicing
                                    elit,Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="#">Bantuan</a></li>
                                <li><a href="#">Berita dan Acara</a></li>
                                <li><a href="#">Masukan</a></li>
                                <li><a href="#">Kebijakan Pribadi</a></li>
                                <li><a href="#">Syarat Layanan</a></li>
                                <li><a href="#">Hak Cipta</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class="fab fa-telegram-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/carousel.js') }}"></script>
    <script src="{{ asset('js/mangaplus.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/d8ca2bfebc.js" crossorigin="anonymous"></script>

    @yield('script')

</body>

</html>