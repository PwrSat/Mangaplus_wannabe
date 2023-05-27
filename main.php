<?php
    if(@$_GET){
        switch($_GET['p']){
            case "user";
                include "page/user.php";
            break;
            case "profiluser";
                include "page/profiluser.php";
            break;
            case "logout";
                include "page/logout.php";
            break;
            case "tambah";
                include "admin/tambahberita.php";
            break;
            case "detail";
                include "page/detailberita.php";
            break;
            case "ubah";
                include "page/editberita.php";
            break;
            case "kategori";
                include "page/kategori.php";
            break;
            case "home";
                include "page/home.php";
            break;
            case "admin";
                include "admin/admin.php";
            break;
            case "keluser";
                include "admin/kelola_user.php";
            break;
            case "kelkategori";
                include "admin/kelola_kategori.php";
            break;
            case "kelberita";
                include "admin/kelola_berita.php";
            break;
            case "kelkomentar";
                include "admin/kelola_komentar.php";
            break;
            case "tambahkategori";
                include "admin/tambahkategori.php";
            break;
            case "ubahkategori";
                include "admin/ubahkategori.php";
            break;
            case "ubahuser";
                include "admin/ubahuser.php";
            break;
            case "tambahuser";
                include "admin/tambahuser.php";
            break;
            case "profiladmin";
                include "admin/profiladmin.php";
            break;
            case "tentang";
                include "page/aboutus.php";
            break;
        }
    }
    else include "page/home.php";
?>


