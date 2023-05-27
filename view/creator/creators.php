<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://medibang.com/resources/css.min/mpc/page/genre.min.css?_=20230511112910">
  <link rel="stylesheet" type="text/css" href="https://medibang.com/resources/css.min/mpc/page/dashboard.min.css?_=20230511112910">
  <link rel="stylesheet" type="text/css" href="https://medibang.com/resources/css.min/mpc/page/announces.min.css?_=20230511112910">
  <link rel="stylesheet" type="text/css" href="https://medibang.com/resources/css.min/mpc/page/detail.min.css?_=20230511112910">
  <link rel="stylesheet" type="text/css" href="https://medibang.com/resources/css.min/mpc/page/author.min.css?_=20230511112910">

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js">

  <!-- link css -->
  <link rel="stylesheet" href="../../assets/css/creators.min.css">
  <link rel="stylesheet" href="../../assets/css/module.min.css">
  <link rel="stylesheet" href="../../assets/css/modal.min.css">
  <link rel="stylesheet" href="../../assets/css/mpc.css">
  <link rel="stylesheet" href="../../assets/css/pembaharuan.css">

  <script type="text/javascript">
    var sitePath = '';
    var IS_WEBVIEW = false;
    var CLIENT_LOCALE = '';
  </script>

</head>

<body class="pagelang-en">
  <div id="wrap" class="wrapper_contents" ontouchstart="">

    <header id="as-header-vue" class="mpc-header">

      <div class="header_above">
        <div class="header_inner">
          <button class="header_mobile_menu" data-mpc-mobile-side-menu="">
            <span class="hidden">Menu</span>
            <span class="header_badge" style="display:none;" data-mpc-notification>New</span>
          </button>
          <h1 class="header_logo">
            <a href="https://medibang.com/mpc/">
              <img src="https://medibang.com/resources/images/mpc/logo_mpc_header.svg" alt="MANGA Plus Creators by SHUEISHA">
            </a>
          </h1>

          <div class="header_main">
            <nav class="header_gnav">
              <div class="header_gnav_inner">
                <ul class="header_gnav_list">
                  <li>
                    <a class="{{request()->is('creator/aboutus') ? 'active': ''}}" href="/creator/aboutus">
                      About Us
                    </a>
                  </li>
                  <li>
                    <a class="{{request()->is('creator/notices') ? 'active': ''}}" href="/creator/notices">
                      Notices
                      <!-- {{-- <span class="header_badge" style="display:none;" data-mpc-notification>New</span> --}}
                      {{-- ini fungsi kalo ada nontifikasi  --}} -->
                    </a>
                  </li>
                  <li class="">
                    <a class="{{request()->is('creator/montly') ? 'active': ''}}" href="/creator/montly">
                      Monthly Awards
                    </a>
                    <!-- {{-- ini aing bikin ga aktif, bingung soale --}} -->
                  </li>
                  <li class="">
                    <a class="{{request()->is('creator/genres') ? 'active': ''}}" href="/creator/genres">
                      Genres
                    </a>
                  </li>
                  <li class="">
                    <a class="{{request()->is('creator/dashboard') ? 'active': ''}}" href="/creator/dashboard">
                      Dashboard
                    </a>
                  </li>
                </ul>
              </div>
            </nav>


            <div class="header_input">
              <div class="header_input_inner">
                <input type="search" placeholder="Keyword" value="" autocomplete="off" maxlength="127">
              </div>
              <button type="submit" class="header_search" data-common-search-btn="pc"></button>
            </div>
            {{-- <div class="input-group">
          <div class="form-outline">
            <input type="search" id="form1" class="form-control" />
            <label class="form-label" for="form1">Search</label>
          </div>
          <button type="button" class="btn btn-primary">
            <i class="fas fa-search"></i>
          </button>
        </div> --}}
          </div><!--  .header_main -->

          <div class="header_nav">
            <div class="header_nav_submit">
              <a href="https://medibang.com/mpc/dashboard/titles/new/" data-loginitem="true">
                Submit
              </a>
              <a href="javascript:void(0);" data-need-login="submit" data-loginitem="false" style="display:none;">
                Submit
              </a>
            </div>

            <div class="header_nav_lang" data-mpc-select>
              <div class="header_nav_pulldown">

                <span class="placeholder" data-select-placeholder></span>
                <ul class="pulldown" data-header-select-list="locale">


                  <li>
                    <label>

                      <input type="radio" name="locale2" title="English" value="en" checked="checked" autocomplete="off">
                      <span data-value="English">
                        English
                      </span>
                    </label>
                  </li>

                  <li>
                    <label>

                      <input type="radio" name="locale2" title="Español" value="es" autocomplete="off">
                      <span data-value="Español">
                        Español
                      </span>
                    </label>
                  </li>

                </ul>
              </div>
            </div>

            <div class="header_nav_menu login" data-loginitem="true">
              <div class="header_nav_avatar">

                <a href="/creator/profile">


                  <img src="https://medibang.com/resources/images/no_icon.png" alt="aiyaya_">

                </a>


              </div>
            </div>
          </div>
          <!-- .header_nav -->
        </div>
      </div>
    </header>


    <div class="mobile_sidebar" data-mpc-mobile-sidebar="">
      <span class="mobile_sidebar_overlay" data-menu-overlay="mobile_sidebar_overlay"></span>
      <nav class="mobile_sidebar_nav">

        <button class="mobile_sidebar_menu" data-mpc-mobile-side-menu="">
          <span class="hidden">https://medibang.com/faq/">Menu</span>
        </button>

        <h1 class="mobile_sidebar_logo">
          <a href="https://medibang.com/mpc/">
            <img class="lazyload" data-src="https://medibang.com/resources/images/mpc/logo_mpc.svg" alt="MANGA Plus Creator by SHUEISHA">
          </a>
        </h1>

        <div class="mobile_sidebar_input">
          <div class="mobile_sidebar_input_inner">
            <input type="search" data-common-search-keywords="sp" placeholder="Keyword" value="" autocomplete="off" maxlength="127">
          </div>
          <button type="submit" data-common-search-btn="sp" class="mobile_sidebar_search">Search</button>
        </div>

        <div class="mobile_sidebar_nav_inner">
          <ul class="mobile_sidebar_nav_above">
            <li class="">
              <a href="https://medibang.com/mpc/about/">
                About Us
              </a>
            </li>
            <li class="">
              <a href="https://medibang.com/mpc/announces">
                Notices
                <span class="header_badge" style="display:none;" data-mpc-notification>New</span>
              </a>
            </li>
            <li class="">
              <a href="https://medibang.com/mpc/mom/">
                Monthly Awards
              </a>
            </li>
            <li class="">
              <a href="https://medibang.com/mpc/genres/">
                Genres
              </a>
            </li>
            <li class="">
              <a href="https://medibang.com/mpc/dashboard/" data-loginitem="true">
                Dashboard
              </a>
              <a href="javascript:void(0);" data-need-login="dashboard" data-loginitem="false" style="display:none;">
                Dashboard
              </a>
            </li>
          </ul>
          <a href="https://medibang.com/mpc/dashboard/titles/new/" class="mobile_sidebar_submit" data-loginitem="true">
            Submit
          </a>
          <a href="javascript:void(0);" data-need-login="submit" class="mobile_sidebar_submit" data-loginitem="false" style="display:none;">
            Submit
          </a>

          <div class="mobile_sidebar_lang" data-mpc-select>
            <div class="label">Language</div>


            <div class="mobile_sidebar_pulldown" tabindex="0">
              <span class="placeholder" data-select-placeholder></span>
              <ul class="pulldown" data-header-select-list="locale">


                <li>
                  <label>

                    <input type="radio" name="locale" title="English" value="en" checked="checked" autocomplete="off">
                    <span data-value="English">
                      English
                    </span>
                  </label>
                </li>

                <li>
                  <label>

                    <input type="radio" name="locale" title="Español" value="es" autocomplete="off">
                    <span data-value="Español">
                      Español
                    </span>
                  </label>
                </li>

              </ul>
            </div>
          </div>

          <ul class="mobile_sidebar_nav_below">
            <li><a href="https://medibang.com/terms/terms/">Terms of Service</a></li>
            <li><a href="https://medibang.com/terms/privacy/">Privacy Policy</a></li>
            <li><a href="https://medibang.com/terms/guideline/">Submission Guidelines</a></li>
            <li><a href="https://medibang.com/mpc/help/">FAQ</a></li>
            <li><a href="https://medibang.com/contact/contactForm/?app=20">Contact</a></li>
            <li><a href="https://medibang.com/about/company/">Company</a></li>
          </ul>

          <ul class="mobile_sidebar_link">
            <li>
              <a href="https://mangaplus.shueisha.co.jp/" target="_blank">
                <img class="img-mangaplus lazyload" data-src="https://medibang.com/resources/images/mpc/logo-mangaplus.png" alt="MANGA Plus Creators by SHUEISHA">
              </a>
            </li>
            <li>
              <a href="https://medibang.com/">
                <img class="img-artstreet lazyload" data-src="https://medibang.com/resources/images/mpc/logo-ARTstreet.svg" alt="ART street">
              </a>
            </li>
          </ul>

          <p class="mobile_sidebar_copyright">© MediBang Inc.</p>
        </div>
      </nav>
      <span class="mobile_sidebar_close"></span>
      <!-- /mobile_sidebar -->
    </div>

    <br>

    @yield('creators')

  </div>
  {{-- wrapper end --}}

  <footer class="mpc-footer">
    <div class="footer-nav">
      <ul class="footer-nav1">
        <li><a href="https://mangaplus.shueisha.co.jp/updates"><img class="img-mangaplus lazyload" data-src="https://medibang.com/resources/images/mpc/logo-mangaplus.png" alt="MANGA Plus by SHUEISYA"></a></li>
        <li><a href="https://medibang.com/mpc/"><img class="img-mpc lazyload" data-src="https://medibang.com/resources/images/mpc/logo_mpc.svg" alt="MANGA Plus Creators by SHUEISHA"></a></li>
        <li><a href="https://medibang.com/"><img class="img-as lazyload" data-src="https://medibang.com/resources/images/mpc/logo-ARTstreet.svg" alt="ART street"></a></li>
      </ul>
      <ul class="footer-nav2">
        <li><a href="https://medibang.com/terms/terms/">Terms of Service</a></li>
        <li><a href="https://medibang.com/terms/privacy/">Privacy Policy</a></li>
        <li><a href="https://medibang.com/terms/guideline/">Submission Guidelines</a></li>
        <li><a href="https://medibang.com/mpc/help/">FAQ</a></li>
        <li><a href="https://medibang.com/contact/contactForm/?app=20">Contact</a></li>
        <li><a href="https://medibang.com/about/company/">Company</a></li>
      </ul>
    </div>
    <p class="footer-copy">© MediBang Inc.</p>
  </footer>



  </div>

  <script type="text/javascript" src="https://medibang.com/resources/js.min/vendor.min.js?_=20230420112428" charset="utf-8"></script>
  <script type="text/javascript" src="https://medibang.com/resources/js.min/pc/mpc/index.min.js?_=20230420112428"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/d8ca2bfebc.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://medibang.com/resources/js.min/pc/mpc/genres/list.min.js?_=20230511112910"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  @yield('script')

</body>

</html>