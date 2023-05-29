<?php

$id = $_GET['id'];
require_once "../../../function.php";

// Fetch manga details
// Fetch manga details
$queryManga = "SELECT * FROM mangas WHERE id = '$id'";
$resultManga = mysqli_query($koneksi, $queryManga);
$manga = mysqli_fetch_assoc($resultManga);

// Fetch chapters for the manga
// Fetch chapters for the manga
$queryChapters = "SELECT * FROM chapters WHERE manga = '$id'";
$resultChapters = mysqli_query($koneksi, $queryChapters);

?>


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

                <div class="TitleDeta   ilHeader-module_flexContainer_3D03N" sns="[object Object]" updateinfo="1684854000" numberofviews="974399" updatetiming="0" issimulreleased="true">
                    <div class="TitleDetailHeader-module_left1_3C2Fx">
                        <div class="TitleDetailHeader-module_fitImage_1-ino" style="background-image: url(&quot;https://mangaplus.shueisha.co.jp/drm/title/100037/title_thumbnail_main/233340.jpg?key=3d3844f6f4a80f3a14f06fcc402e033b&amp;duration=86400&quot;);">
                            <div></div>
                        </div>
                        <div class="TitleDetailHeader-module_right1_1o9Bj">
                            <div class="TitleDetailHeader-module_cover_3ljyH">
                                <img src="../../../assets/storage/cover/<?php echo $manga['cover']; ?>" alt="" class="TitleDetailHeader-module_coverImage_3rvaT">
                                <div><button class="styles-module_btn_17GWO styles-module_default_uUjEB TitleDetailHeader-module_favoritedBtn_Z2Lrg">Tambahkan
                                        ke Favorit</button></div>
                            </div>
                            <div class="TitleDetailHeader-module_info_1_7BN">
                                <h1 class="TitleDetailHeader-module_title_Iy33M"><?php echo $manga['title']; ?></h1>
                                <p class="TitleDetailHeader-module_author_3Q2QN"><?php echo $manga['author']; ?></p>
                                <div>
                                    <div class="TitleDetailHeader-module_overviewTitleWrapper_3_vMN">
                                        <h6 class="TitleDetailHeader-module_overviewTitle_1X9aO">Ikhtisar</h6>
                                    </div>
                                    <p class="TitleDetailHeader-module_overview_32fOi"><?php echo $manga['sinopsis']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="TitleDetail-module_flexContainer_1oGb4">
                    <topside class="TitleDetail-module_topside_1IIit">
                        <div>
                            <h6 class="TitleDetail-module_languageHeader_16ygX">Bahasa yang Tersedia</h6>
                            <div class="TitleDetail-module_languages_87lPm"><a href="/titles/100037" aria-current="page" class="router-link-exact-active router-link-active TitleDetail-module_active_1rFIx" title="Read in English">English</a><a href="/titles/200098" class="" title="Read in English">indonesia</a>
                            </div>
                        </div>
                        <div>
                            <h6 class="TitleDetail-module_updateHeader_Ku5ec">Jadwal Pembaharuan</h6>
                            <p class="TitleDetail-module_updateInfo_2MITq"><span>Bab baru meluncur pada Tuesday, May 23,
                                    22:00</span></p>
                            <p class="TitleDetail-module_updateDescription_2dpJE">The latest 3 chapters are viewable in
                                this
                                title.
                                Please be aware that the 3rd latest chapter will be hidden when a new chapter is added.
                            </p>
                        </div>
                        <div class="TitleDetail-module_simul_2dkiC"><span class="TitleDetail-module_simulText_2uVb6">SIMULRELEASE!!!</span>
                            <div class="TitleDetail-module_simul2_2YRGj"></div>
                        </div>
                        <div class="TitleDetail-module_gridContainer_3ff95">
                            <div class="TitleDetail-module_gridItemFacebook_30GJz"><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fjumpg-webapi.tokyo-cdn.com%2Fwww%2Fsns_share%3Ftitle_id%3D100037" class="ShareButton-module_shareButton_217yQ ShareButton-module_facebook_2v5Yx" text="#MANGA_Plus Chainsaw Man">Bagikan</a></div>
                            <div class="TitleDetail-module_gridItemTwitter_3lYhB"><a href="https://twitter.com/intent/tweet?text=%23MANGA_Plus%20Chainsaw%20Man&amp;url=https%3A%2F%2Fjumpg-webapi.tokyo-cdn.com%2Fwww%2Fsns_share%3Ftitle_id%3D100037" class="ShareButton-module_shareButton_217yQ ShareButton-module_twitter_36sb8">Tweet</a>
                            </div>
                        </div>
                    </topside>
                    <main class="TitleDetail-module_main_19fsJ">
                        <div overview="Denji harbors a chainsaw devil within him. The world is introduced to Chainsaw Man, but...?!">
                            <div>
                                <div class="ChapterList-module_chapterListTitleWrapper_1MLyK">
                                    <h6 class="ChapterList-module_chapterListTitle_3-F05">Daftar Bab</h6>
                                    <p class="ChapterList-module_numberOfViews_14bIt"><img src="../../../assets/img/icon_eye.53d7b892.svg" class="ChapterList-module_viewIcon_1p37L">
                                    <?php
                                        $count = $manga['count'] + 1;
                                        $queryUpdateCount = "UPDATE mangas SET count = $count WHERE id = '$id'";
                                        mysqli_query($koneksi, $queryUpdateCount);
                                        echo $count;
                                    ?>
                                    </p>
                                </div>
                            </div>


                            <div class="ChapterList-module_chapterHeader_1_HCB">
                                <h3 class="ChapterList-module_message_bxe9x"></h3>
                                <div class="ChapterList-module_sort_3OHNF"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAMAAADVRocKAAAAjVBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8DizOFAAAALnRSTlMAgBj0hwSKyYLihGpbQSAB+/jvptXNX00tCMa+spuYUDkqEujl3a9yVS/mkXkX4MN39wAAAcpJREFUaN7t1mlvgkAQgOGhHKJyQ1G876PH/P+fV+NgBknaxjKTmHTfT65ueBLWXQCTyWR66iyss+DH3CAvsnQ38c86QNnHW4dIHnDn2CgLxYF3vMteCwMjbFW4okD8iu0CUSBEahpGw5Q+vooCHk2YVI27tZEEejRh1BwsJQHaAgkt7AfNHkoC9vX3Pg0Cni0G0MLuaXBSALbX31MaHPkWSS/y+DqY8UYQAxY0YQ6X1siaGLBE6ujCuT5Us1gScLe3Q66PdbnsYVdiu5UsEOd4X0/8gbNoHaZSABfmNqKN1JsrCHCbaIi8yxQAqHY0c++qADy1BB3gs16CIlYCFsjPGg1gnfAeUAFmSIU6AL9agArA70YrJSBAagY6QFUf1MlYCeAMAAb410DUo4kvSsApQ02gmiNqAuMCVYFhiprA5oCoCvRQGShVAX5cTtQAWOElz9UDIMdsBKAIRNMIdADuqQDLbpTcgKT5rdUJAA9/yet6i7y/XJ+BroInscgOfpsj8y9yHr4+A50ER24fOA9en4EOgiO7kwfYagCyQFsYgCzQFgYah53P1/dBA2DBBw2ABR80AH4iWKABsGCBBsCCBQ8BJpPJ9KR9AY4H9+HKSblgAAAAAElFTkSuQmCC" alt="sort" class="ChapterList-module_sortIcon_1dGE4"></div>
                            </div>

                            <?php
                            foreach ($resultChapters as $chapter) {
                            ?>

                                <div class="ChapterListItem-module_chapterListItem_ykICp">
                                    <div class="ChapterListItem-module_chapterWrapper_3CxyE"><img alt="thumbnail" class="ChapterListItem-module_thumbnail_alreadyRead_1u3_a" src="https://mangaplus.shueisha.co.jp/drm/title/100037/chapter/1001249/chapter_thumbnail/7129.jpg?key=cb8b8e8b395d55f5bfe2705147f1b3d9&amp;duration=86400" lazy="loaded">
                                        <a href="komik.php?id=<?php echo $chapter['id'] ?>">
                                            <p class="ChapterListItem-module_name_alreadyRead_1HYKk"><?php echo $chapter['chapter_number']; ?></p>
                                            <br>
                                            <p class="ChapterListItem-module_date_alreadyRead_31MGZ"><?php echo $chapter['updated_at']; ?></p>
                                        </a>
                                    </div>
                                </div>

                            <?php
                            }
                            ?>

                    </main>
                    <aside class="TitleDetail-module_sub_3Gl_e">
                        <div class="TitleDetail-module_topAd_MtvCi">
                            <div id="mangaplus_pc_title_rectangle_1" class="gado" data-google-query-id="" style="min-height: 250px;">
                                <div id="google_ads_iframe_/16791533/MANGAPLUS/mangaplus_pc_title_rectangle_1_2__container__" style="border: 0pt none; width: 300px; height: 0px;"></div>
                            </div>
                        </div>
                        <div class="BannerList-module_wrapper_3nK2F">
                            <div class="BannerList-module_container_3lDbU"><a><img data-id="1019" class="BannerList-module_banner_2U34h" data-src="https://mangaplus.shueisha.co.jp/drm/publisher_banner/173791.jpg?key=3c5cf56642e6d4e3673796cc50d89e89&amp;duration=86400" src="https://mangaplus.shueisha.co.jp/drm/publisher_banner/173791.jpg?key=3c5cf56642e6d4e3673796cc50d89e89&amp;duration=86400" lazy="loaded"></a></div>
                        </div>
                        <div class="TitleDetail-module_banners_1ALpQ">
                            <div class="TitleDetail-module_bannerWrap_3Iyuy"><img src="https://mangaplus.shueisha.co.jp/drm/featured_banner/253256.jpg?key=294d925d9ed9da7c7236442d91e798f4&amp;duration=86400" data-banner-id="279" class="TitleDetail-module_banner_2kTCX"></div>
                            <div class="TitleDetail-module_bannerWrap_3Iyuy"><img src="https://mangaplus.shueisha.co.jp/drm/featured_banner/139707.jpg?key=5fd72927b232941343f756b45956d9c1&amp;duration=86400" data-banner-id="209" class="TitleDetail-module_banner_2kTCX"></div>
                            <div class="TitleDetail-module_bannerWrap_3Iyuy"><img src="https://mangaplus.shueisha.co.jp/drm/featured_banner/139704.jpg?key=2c89a2d9b84efab9f506d319e2edb97a&amp;duration=86400" data-banner-id="208" class="TitleDetail-module_banner_2kTCX"></div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>

    <?php
    include_once 'layout_page/footer_page.php';
    ?>

</body>

</html>