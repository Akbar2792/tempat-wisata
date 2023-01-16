<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tiket Pemesanan</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
            crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/8cd47d63c0.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-info bg-opacity-25">
        <!-- awal navigasi -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
            <div class="container">
            <a class="navbar-brand" href="#">
            <img src="img/logo.jpg" alt="Logo" width="40" height="30" class="d-inline-block align-text-top">
            Jalan².com
            </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- akhir navigasi -->

        <!-- cetak tiket -->
        <div class="container">
            <div class="row shadow border border-2 rounded-5 border-primary p-3 bg-info bg-opacity-75 w-50 mx-auto my-5">
                <h3 class="text-center mb-2">Tiket Pemesanan</h3>
                <div class="col">
                    <?php
                    include "koneksi.php";
                    $ambildata = mysqli_query($conn, "select * from pengunjung order by id desc limit 1;");
                    while ($tampil = mysqli_fetch_array($ambildata)){
                        echo "

                        <table style='' class='table table-striped'>
                        <tr>
                        <!-- Menampilkan Nama Pemesan -->
                        <td>Nama Pemesan :</td>
                        <td>".$tampil['nama_lengkap']."</td>
                        </tr>
                        <tr>
                        <!-- Menampilkan Nomor Identitas (no ktp) -->
                        <td>Nomor Identitas :</td>
                        <td>".$tampil['no_ktp']."</td>
                        </tr>
                        <tr>
                        <!-- Menampilkan No. HP -->
                        <td>No. HP :</td>
                        <td>".$tampil['no_hp']."</td>
                        </tr>
                        <!-- Menampilkan Tempat Wisata yang dipilih -->
                        <td>Tempat Wisata :</td>
                        <td>".$tampil['tempat_wisata']."</td>
                        </tr>
                        <tr>
                        <!-- Menampilkan Jumlah Pengunjung Dewasa -->
                        <td>Pengunjung Dewasa :</td>
                        <td>".$tampil['p_dewasa']."</td>
                        </tr>
                        <tr>
                        <!-- Menampilkan Jumlah Pengunjung Anak-Anak -->
                        <td>Pengunjung Anak-Anak :</td>
                        <td>".$tampil['p_anak']."</td>
                        </tr>
                        <!-- Menampilkan Harga Tiket -->
                        <td>Harga Tiket :</td>
                        <td>".$tampil['harga_tiket']."</td>
                        </tr>
                        <tr>
                        <!-- Menampilkan Total Bayar -->
                        <td>Total Bayar :</td>
                        <td>".$tampil['total_bayar']."</td>
                        </tr>
                        <tr>
                        
                        ";
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="my-5 w-20 h-20 text-center">
                        <img src="img/QR.jpeg" alt="qr" style="width: 200px;" class="img-thumbnail mx-auto d-block">
                        <p>Scan Untuk Melakukan Pembayaran</p>
                    </div>

    </body>
</html>