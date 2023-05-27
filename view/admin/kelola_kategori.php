<?php
require_once "function.php";

if (($_SESSION["level"]) !== "1") {
    echo "
            <script>
                alert('anda bukan admin');
                document.location.href = 'index.php';
            </script>";
}

$perpage = 6;
$page = isset($_GET['page']) ? $_GET['page'] : "";

if (empty($page)) {
    $num = 0;
    $page = 1;
} else {
    $num = ($page - 1) * $perpage;
}

?>
<section id="content">
    <div class="container ">
        <div class="row">
            <span class="text h1">Kelola Kategori</span>
            <hr><br>
        </div>
        <div class="row">
            <div class="col">
                <a href="./?p=tambahkategori" class="btn btn-primary mb-2">tambah [+]</a>
                <a href="./?p=admin" class="btn btn-warning mb-2">kembali</a>
                <div class="card shadow mb-4 text-center">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Daftar Kategori</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <?php
                        $query = "SELECT * FROM kategori";
                        $hasil = mysqli_query($koneksi, "select * from kategori order by kategori.id asc LIMIT $num, $perpage");
                        echo "<table class='table table bordered'>";
                        echo
                            "<tr> <th>Nama kategori</th> <th>Deskripsi</th> <th>Id kategori</th> <th>Tanggal dibuat</th> <th colspan='2'>Aksi</th> </tr>";

                        foreach ($hasil as $data) {
                            //update
                            echo "<tr> 
                                                <td>" . $data['kategori'] . "</td> 
                                                <td>" . $data['deskripsi'] . "</td> 
                                                <td>" . $data['id'] . "</td>  
                                                <td>" . $data['tanggalpost'] . "</td>";
                            echo "<td> 
                                                    <form method='post' action='index.php?p=ubahkategori&id=$data[id]'>
                                                        <input hidden type='text' name='id' value=" . $data['id'] . ">
                                                        <button type='submit' name='btnUpdate' class='btn btn-info'>edit</button> 
                                                    </form> 
                                                </td>";
                            //delete
                            echo "<td> 
                                                    <form onsubmit=\"return confirm ('Menghapus kategori akan menghapus seluruh berita yang memiliki kategori ini, Anda yakin mau menghapus kategori?');\"method='POST'> 
                                                        <input hidden name='id' type='text' value=$data[id]> 
                                                        <button type='submit' name='btnHapus' class='btn btn-danger'>hapus</button> 
                                                    </form> 
                                                </td> ";

                            echo " </tr>";
                        }
                        echo "</table>";
                        ?>
                    </div>
                    <?php
                    if (isset($_POST['btnHapus'])) {

                        //insiasi variabel untuk menampung isian id
                        $id = $_POST['id'];

                        if ($koneksi) {

                            $sql = "DELETE FROM kategori WHERE id = $id";
                            $sqlb = "DELETE FROM berita WHERE idkategori = $id";
                            mysqli_query($koneksi, $sql);
                            mysqli_query($koneksi, $sqlb);
                            echo "<script> alert ('kategori berhasil dihapus');</script>";
                            echo "<script>window.location.href = '';</script>";
                        } else if ($koneksi->connect_error) {
                            echo "<script> alert ('kategori gagal dihapus');</script>";
                            echo "<script>window.location.href = '';</script>";
                        }
                    }
                    ?>
                    <?php
                    require_once "./function.php";

                    $sql = mysqli_query($koneksi, "SELECT * FROM kategori");
                    $total_record = mysqli_num_rows($sql);
                    $total_page = ceil($total_record / $perpage); ?>
                    <?php
                    if (isset($_POST["cari"])) {

                    } else { ?>
                        <ul class="pagination justify-content-center mb-4">
                            <?php
                            if ($page > 1) {
                                $prev = "<a href='./index.php?p=kelkategori&page=1' class='page-link'><span aria-hidden='true'>First</span></a>";
                            } else {
                                $prev = "<a href='./index.php?p=kelkategori&page=1' class='page-link'><span aria-hidden='true'>First</span></a>";
                            }
                            $number = '';
                            for ($i = 1; $i <= $total_page; $i++) {
                                if ($i == $page) {
                                    $number .= "<li><a href='./index.php?p=kelkategori&page=$i' class='page-link'>$i</a></li>";
                                } else {
                                    $number .= "<li><a href='./index.php?p=kelkategori&page=$i' class='page-link'>$i</a></li>";
                                }
                            }
                            if ($page < $total_page) {
                                $link = $page + 1;
                                $next = "<a href='./index.php?p=kelkategori&page=$total_page' class='page-link'><span aria-hidden='true'>Last</span></a>";
                            } else {
                                $next = "<a href='./index.php?p=kelkategori&page=$total_page' class='page-link'><span aria-hidden='true'>Last</span></a>";
                            }
                            ?>
                            <li class="page-item">
                                <?php echo $prev; ?>
                            </li>
                            <li class="page-item flex-col">
                                <?php echo $number; ?>
                            </li>
                            <li class="page-item">
                                <?php echo $next; ?>
                            </li>
                        </ul>
                        <?php } ?>
                </div>
            </div>
        </div>
    </div>

</section>