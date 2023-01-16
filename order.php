<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pemesanan Tiket Wisata</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
            crossorigin="anonymous">
        <script>
        function ganti(){ 
            let harga = document.formPemesanan.tempat_wisata.value;  
            if (harga == "Candi Borobudur"){
                harga_tiket = 700000;
            }else if (harga == "Candi Prambanan"){
                harga_tiket = 80000;
            }else if (harga == "Taman Sari"){
                harga_tiket = 20000;
            }else {
                harga_tiket = 0;
            }
            document.formPemesanan.harga_tiket.value=eval(harga_tiket);
        } 

        function totalHarga(){
            let p_dewasa = document.formPemesanan.p_dewasa.value;
            let p_anak   = document.formPemesanan.p_anak.value;
            document.formPemesanan.total_bayar.value = eval(p_dewasa)*eval(document.formPemesanan.harga_tiket.value) + eval(p_anak)/2*eval(document.formPemesanan.harga_tiket.value);
            
        }
        </script>
    </head>
    <body style=" background-image: url('https://i2.wp.com/blog.tripcetera.com/id/wp-content/uploads/2020/10/pulau-padar.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;">
        <div class="container">
            <div class="row shadow border border-2 rounded-5 border-primary p-3 bg-info bg-opacity-75 w-50 mx-auto my-5 ">
                <div class="col">
                    <h2 class="text-center m-4">Form Pemesanan</h2>
                    <hr class="mb-3 ">
                    <form action="input.php" method="POST" id="formPemesanan" name="formPemesanan">
                        <div class="mb-3">
                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                        </div>
                        <div class="mb-3">
                            <label for="nomor_identitas" class="form-label">Nomor Identitas</label>
                            <input type="number" class="form-control" id="no_ktp" name="no_ktp" required>
                        </div>
                        <div class="mb-3">
                            <label for="nomor_hp" class="form-label">Nomor Handphone</label>
                            <input type="number" class="form-control" id="no_hp" name="no_hp" required>
                        </div>
                        <div class="mb-3">
                            <label for="tempat_wisata" id="tempat_wisata">Tempat Wisata</label>
                            <select onchange="ganti()" class="form-control" name="tempat_wisata" required>
                                <option>--- Pilih Tempat Wisata ---</option>
                                <option value="Candi Borobudur">Candi Borobudur</option>
                                <option value="Candi Prambanan">Candi Prambanan</option>
                                <option value="Taman Sari">Taman Sari</option> 
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_kunjungan" class="form-label">Tanggal Kunjungan</label>
                            <input type="date" class="form-control" id="tgl" name="tgl" required>
                        </div>
                        <div class="mb-3">
                            <label for="pengunjung_dewasa" class="form-label">Pengunjung Dewasa</label>
                            <input type="number" class="form-control" id="p_dewasa" name="p_dewasa" required>
                        </div>
                        <div class="mb-3">
                            <label for="pengunjung_anak-anak" class="form-label">Pengunjung Anak-Anak</label>
                            <input type="number" class="form-control" id="p_anak" name="p_anak" placeholder="isi 0 jika tidak ada" required>
                            <div class="form-text">Usia di bawah 12 tahun</div>
                        </div>
                        <div class="row mb-3">
                            <label for="harga_tiket" class="col-sm-3 col-form-label">Harga Tiket</label>
                            <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext text-danger fw-bold"  id="harga_tiket" name="harga_tiket">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Total Bayar</label>
                            <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext text-danger fw-bold" id="total_bayar" name="total_bayar">
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">Saya dan/atau rombongan sudah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan</label>
                        </div>
                        <div class="d-grid my-5 d-md-block mx-auto text-center">
                            <button onclick="totalHarga()" type="button" form="formPemesanan" value="HitungTotal" name="HitungTotal" class="btn btn-primary">Hitung Total Bayar</button>
                            <button type="submit" form="formPemesanan" value="Pesan" name="Pesan" class="btn btn-primary">Pesan Tiket</button>
                            <a class="btn btn-primary" href="index.php">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

    </body>
</html>