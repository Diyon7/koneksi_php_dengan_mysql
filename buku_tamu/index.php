<?php
include "koneksi.php";

$sql = "SELECT * FROM buku_tamu";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>

<head>
    <title>Daftar Peminjam</title>
</head>
<style type="text/css">
    .bt {
        background-color: blue;
        border: blue solid;
        color: white;
        padding: 9px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 19px;
        margin: 9px 15px;
        cursor: pointer;
        transition: 0.3s ease-in;
    }

    .bt:hover {
        background-color: white;
        color: blue;
        border: blue solid;
    }
</style>

<body>
    <center>
        <a href="index.php">
            <h1>Buku Tamu</h1>
        </a>
        <table border="1" width="500px">
            <thead style="background-color: blue; color:white">
                <td>Id_bt</td>
                <td>Nama</td>
                <td>Email</td>
                <td>Isi</td>
            </thead>
            <?php
            while ($daftar = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $daftar['id_bt'] . "<?td>";
                echo "<td>" . $daftar['nama'] . "</td>";
                echo "<td>" . $daftar['email'] . "</td>";
                echo "<td>" . $daftar['isi'] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
        <br><?php
            if (isset($_GET['status'])) {
                if ($_GET['status'] == 'sukses') {
                    echo "<h5>Status Sukses</h5>";
                }
            } ?>
        <a href="isi_buku.php" class="bt">isi buku tamu</a>
    </center>
</body>

</html>