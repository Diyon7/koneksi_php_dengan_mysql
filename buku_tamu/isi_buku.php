<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>isi buku</title>
</head>

<style type="text/css">
    .bt {
        background-color: blue;
        border: blue solid;
        color: white;
        padding: 5px 15px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 9px;
        margin: 3px 9px;
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
        <h1>Form Isi Buku Tamu</h1>
        <form action="" method="post">
            <table style="width: 90px">
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" required></td>
                </tr>
                <tr style="height: 50px">
                    <td>Isi</td>
                    <td><textarea name="isi" cols="30" rows="10" style="height: 50px; width:158px" required></textarea></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" class="bt" value="simpan"><input type="reset" class="bt" value="reset"></td>
                </tr>
            </table>
            <br>
            <a href="nampil_buku.php" class="bt">Kembali</a>
        </form>
    </center>
</body>

</html><?php
        if (isset($_POST['nama'])) {
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $isi = $_POST['isi'];

            $sql = "INSERT INTO buku_tamu(nama,email,isi) VALUES('$nama','$email','$isi')";
            $sql = mysqli_query($conn, $sql);
            if ($sql) {
                header("location:index.php?status=sukses");
            } else {
                echo "error yah";
            }
        }
