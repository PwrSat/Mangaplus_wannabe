<!-- database -->
<!-- database -->
<!-- database -->

<?php
    if(!isset($_SESSION)){
        session_start();
    }
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'sbd2';

    $koneksi = mysqli_connect($host,$user,$pass,$database);

    if ($koneksi->connect_error){
        die("Koneksi gagal ".$koneksi->connect_error);
    }
?>


<!-- fungsi fungsi -->
<!-- fungsi fungsi -->
<!-- fungsi fungsi -->

<?php


function tampilkan($query)
{
    global $koneksi;
    $hasil = mysqli_query($koneksi, $query);
    $kosong = [];
    while ($isi = mysqli_fetch_assoc($hasil)) {
        $kosong[] = $isi;
    }
    return $kosong;
}

function register($data)
{
    global $koneksi;
    $email = $data['email'];
    $username = $data['username'];
    $password = $data['password'];
    $confirm_password = $data['konpas'];
    
    $cekEmail = mysqli_query($koneksi, "SELECT email FROM users WHERE email='$email'");

    

    if (mysqli_num_rows($cekEmail) > 0) {
        echo "
        <script>
            alert('Email sudah digunakan');
            document.location.href = 'register.php';
        </script>
    ";
    } elseif (strlen($password) < 6) {
        echo "
        <script>
            alert('Kata sandi terlalu pendek (minimum 6 karakter)');
            document.location.href = 'register.php';
        </script>
    ";
    } elseif ($password != $confirm_password) {
        echo "
         <script>
             alert('Konfirmasi kata sandi tidak sesuai dengan Kata sandi');
             document.location.href = 'register.php';
         </script> ";
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);
        mysqli_query($koneksi, "INSERT INTO users ( username, email, password) VALUES ( '$username', '$email', '$password')");
        echo "
    <script>
        alert('Registrasi Akun Berhasil');
        document.location.href = 'index.php';
    </script>";
        header("Location:login.php");
    }

}

function login($data)
{
    global $koneksi;
    global $pass;
    global $email;
    $email_login = $data["email"];
    $pass_login = $data["password"];

    $sql = "SELECT * FROM users WHERE email = '{$email_login}' AND password = '{$pass_login}'";
    $query = mysqli_query($koneksi, $sql);

    if (!$query) {
        die("Query gagal" . mysqli_error($koneksi));
    }

    $email = null;
    $isAdmin = false;

    while ($row = mysqli_fetch_array($query)) {
        $email = $row['email'];
        $pass = $row['password'];
        $user = $row['username'];
        $id_user = $row['id'];
        $isAdmin = ($row['user_role'] == 'admin');
    }
    
    if ($email_login == $email && $pass_login == $pass) {
        if ($isAdmin) {
            echo "<script>
                alert('Selamat kamu telah login sebagai admin');
                document.location.href = '../view/admin/admin.php';
            </script>";
        } else {
            echo "<script>
                alert('Selamat kamu telah login');
                document.location.href = '../view/page/favorite.php';
            </script>";
        }

        $_SESSION['email'] = $email;
        $_SESSION['username'] = $user;
        $_SESSION['id_user'] = $id_user;
    } else {
        echo "<script>
            alert('User tidak ditemukan');
        </script>";
    }
}

function konmail($data)
{
    global $koneksi;
    $konemail = $data['email'];

    $cekEmail = mysqli_query($koneksi, "SELECT email FROM users WHERE email='$konemail'");
    if (mysqli_num_rows($cekEmail) > 0) {
        echo "
                    <script>
                        document.location.href = 'forget.php?email=$konemail';
                    </script>
                ";
    } else {
        echo "
                    <script>
                        alert('Email tidak terdaftar!');
                        document.location.href = '';
                    </script>
                ";
    }
}

function forget($data, $konemail)
{
    global $koneksi;
    $pass = $data['password'];
    $konpass = $data['konpas'];



    if ($pass !== $konpass) {
        echo "
                    <script>
                        alert('Konfirmasi password harus sama!');
                        document.location.href = '';
                    </script>
                ";
    } else {
        $pass = password_hash($pass, PASSWORD_DEFAULT);

        $ganti = "UPDATE users SET password = '$pass' where email = '$konemail'";
        if ($koneksi->query($ganti) === TRUE) {
            echo "
                        <script>
                            alert('password berhasil dirubah');
                            document.location.href = 'login.php';
                        </script>";
        } else {
            echo "
                        <script>
                            alert('password gagal dirubah');
                            document.location.href = 'login.php';
                        </script>";
        }
    }
}

?>


<?php

function favorite($data){
    global $koneksi; 
    // var_dump($data); die;

    $uid = $data["user_id"];
    $mdi = $data["manga_id"];
    $sts = $data["status"];

    if ($sts == 1) {
        mysqli_query($koneksi, "INSERT into favorites(manga_id, user_id) values($mdi, $uid)");
        echo "
        <script>
            document.location.href = '';
        </script>";
    } else {
        mysqli_query($koneksi, "DELETE from favorites where manga_id = $mdi AND user_id = $uid");
        echo "
        <script>
            document.location.href = '';
        </script>";
    }

    }
?>



<!-- fungsi fungsi -->

<?php
function tambahmanga($data)
{
    global $koneksi;
    $user = $_SESSION['username'];
    $judul = $data['judul'];
    $konten = $data['isi'];
    $kategori = $data['kategori'];
    $gambar = upload();

    if (!$gambar) {
        echo "
                    <script>
                        alert('berita gagal ditambahkan');
                        document.location.href = 'index.php?p=tambah';
                    </script>";
    } else {
        $manga = "INSERT INTO berita (judul, konten, idkategori, username, beritaimage) VALUES ('$judul', '$konten','$kategori', '$user', '$gambar')";
    }
    if ($koneksi->query($manga) === TRUE) {
        echo "
                    <script>
                        alert('berita berhasil ditambahkan');
                        document.location.href = 'index.php?p=tambah';
                    </script>";
    } else {
        echo "
                    <script>
                        alert('berita gagal ditambahkan');
                        document.location.href = 'index.php?p=tambah';
                    </script>";
    }
}

function upload()
{
    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpname = $_FILES['gambar']['tmp_name'];
    $ekstensiok = ['jpg', 'jpeg', 'png'];
    $ekstensi = explode('.', $namafile);
    $ekstensi = strtolower(end($ekstensi));

    if ($error === 4) {
        echo "
                <script>
                    alert('pilih gambar terlebih dahulu!');
                </script>";
        return false;
    }

    if (!in_array($ekstensi, $ekstensiok)) {
        echo "
                <script>
                    alert('yang anda upload bukan gambar!');
                </script>";
        return false;
    }

    if ($ukuranfile > 100000000) {
        echo "
                <script>
                    alert('ukuran gambar melebihi!');
                </script>";
        return false;
    }

    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $ekstensi;

    move_uploaded_file($tmpname, 'gambar/' . $namafilebaru);
    return $namafilebaru;

}

function editmanga($data, $idb)
{
    global $koneksi;
    $user = $_SESSION['username'];
    $judul = $data['judul'];
    $konten = $data['isi'];
    $gambarlama = $data['gambarlama'];

    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarlama;
    } else {
        $gambar = upload();
    }

    $edit = "UPDATE berita SET judul = '$judul', konten = '$konten', username = '$user', beritaimage = '$gambar'  where id = $idb";

    if ($koneksi->query($edit) === TRUE) {
        echo "
                    <script>
                        alert('berita berhasil diupdate');
                        document.location.href = '';
                    </script>";
    } else {
        echo "
                    <script>
                        alert('berita gagal diupdate');
                        document.location.href = '';
                    </script>";
    }
}


function tambahgenre($data)
{
    global $koneksi;
    $kategori = $data["genre"];
    $deskripsi = $data["deskripsi"];

    $query = "INSERT INTO genres (genre, deskripsi) VALUES('$kategori', '$deskripsi')";

    if ($koneksi->query($query) === TRUE) {
        echo "
                    <script>
                        alert('kategori berhasil ditambahkan');
                        document.location.href = './?p=kelkategori';
                    </script>";
    } else {
        echo "
                    <script>
                        alert('kategori gagal ditambahkan');
                        document.location.href = './?p=kelkategori';
                    </script>";
    }
}

function editgenre($data, $id)
{
    global $koneksi;
    $genre = $data["genre"];
    $deskripsi = $data["deskripsi"];

    $edit = "UPDATE genres SET genres = '$genre', deskripsi = '$deskripsi' where id = $id";

    if ($koneksi->query($edit) === TRUE) {
        echo "
                    <script>
                        alert('kategori berhasil diupdate');
                        document.location.href = '';
                    </script>";
    } else {
        echo "
                    <script>
                        alert('kategori gagal diupdate');
                        document.location.href = '';
                    </script>";
    }
}

function editakun($data, $id)
{
    global $koneksi;

    $username = $data["username"];
    $email = $data["email"];
    $password = $data["password"];

    $password = password_hash($password, PASSWORD_DEFAULT);

    $edit = "UPDATE users SET username = '$username', email = '$email', password = '$password'  where id = $id";

    if ($koneksi->query($edit) === TRUE) {
        echo "
                    <script>
                        alert('akun berhasil diupdate');
                        document.location.href = '';
                    </script>";
    } else {
        echo "
                    <script>
                        alert('akun gagal diupdate');
                        document.location.href = '';
                    </script>";
    }

}


?>

