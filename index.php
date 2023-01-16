<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
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
                    <img
                        src="img/logo.jpg"
                        alt="Logo"
                        width="40"
                        height="30"
                        class="d-inline-block align-text-top">
                    Jalan².com
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        <a class="nav-link" href="#wisata">List Tour</a>
                        <a class="nav-link" href="#kontak">Contact</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- akhir navigasi -->

        <!-- awal jumbotron -->
        <div class="carousel">
            <div
                id="carouselExampleCaptions"
                class="carousel slide"
                data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button
                        type="button"
                        data-bs-target="#carouselExampleCaptions"
                        data-bs-slide-to="0"
                        class="active"
                        aria-current="true"
                        aria-label="Slide 1"></button>
                    <button
                        type="button"
                        data-bs-target="#carouselExampleCaptions"
                        data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button
                        type="button"
                        data-bs-target="#carouselExampleCaptions"
                        data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img
                            src="img/borobudur.jpg"
                            class="d-block w-100"
                            alt="candi borobudur"
                            style="height: 750px">
                        <div class="carousel-caption">
                            <h5>Candi Borobudur</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img
                            src="img/prambanan.jpg"
                            class="d-block w-100"
                            alt="candi prambanan"
                            style="height: 750px">
                        <div class="carousel-caption">
                            <h5>Candi Prambanan</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img
                            src="img/taman sari.jpg"
                            class="d-block w-100"
                            alt="taman sari"
                            style="height: 750px">
                        <div class="carousel-caption">
                            <h5>Taman Sari</h5>
                        </div>
                    </div>
                </div>
                <button
                    class="carousel-control-prev"
                    type="button"
                    data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                    class="carousel-control-next"
                    type="button"
                    data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- akhir jumbotron -->

        <!-- awal cards -->
        <section id="wisata">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col text-center text-dark mb-3 mt-5">
                        <h2 class="mt-5">Pilihan Wisata</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card">
                            <img
                                src="img/borobudur.jpg"
                                class="card-img-top"
                                alt="candi borobudur"
                                style="height: 200px">
                            <div class="card-body">
                                <h5 class="card-title">Candi Borobudur</h5>
                                <p class="card-text">Candi yang berada di Borobudur, Kec. Borobudur, Kabupaten Magelang, Jawa Tengah</p>
                                <a href="borobudur.php" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img
                                src="img/prambanan.jpg"
                                class="card-img-top"
                                alt="candi prambanan"
                                style="height: 200px">
                            <div class="card-body">
                                <h5 class="card-title">Candi Prambanan</h5>
                                <p class="card-text">Candi yang berada di Bokoharjo, Kec. Prambanan, Kabupaten
                                    Sleman, Daerah Istimewa Yogyakarta</p>
                                <a href="prambanan.php" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img
                                src="img/taman sari.jpg"
                                class="card-img-top"
                                alt="taman sari"
                                style="height: 200px">
                            <div class="card-body">
                                <h5 class="card-title">Taman Sari</h5>
                                <p class="card-text">Bangunan kraton yang berada di Patehan, Kecamatan Kraton,
                                    Kota Yogyakarta, Daerah Istimewa Yogyakarta</p>
                                <a href="tamansari.php" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- akhir cards -->

        <!-- awal kontak -->
        <section id="kontak">
            <div class="container-fluid mt-5 bg-info bg-opacity-50">
                <div class="row">
                    <div class="col text-center text-dark mt-5">
                        <h2 class="mt-5">Hubungi Kami</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 text-dark">
                        <form>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="nama" class="form-control" id="nama" aria-describedby="nama">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" aria-describedby="email">
                            </div>
                            <div class="mb-3">
                                <label for="pesan" class="form-label">Pesan</label>
                                <textarea class="form-control" id="pesan" rows="4"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mb-5">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- akhir kontak -->

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
            crossorigin="anonymous"></script>
    </body>

    <footer class="text-center text-lg-start bg-primary bg-opacity-75">
        <div class="container d-flex justify-content-center py-5">
            <button
                type="button"
                class="btn btn-primary btn-lg btn-floating mx-2"
                style="background-color: #54456b;">
                <i class="fab fa-facebook-f"></i>
            </button>
            <button
                type="button"
                class="btn btn-primary btn-lg btn-floating mx-2"
                style="background-color: #54456b;">
                <i class="fab fa-youtube"></i>
            </button>
            <button
                type="button"
                class="btn btn-primary btn-lg btn-floating mx-2"
                style="background-color: #54456b;">
                <i class="fab fa-instagram"></i>
            </button>
            <button
                type="button"
                class="btn btn-primary btn-lg btn-floating mx-2"
                style="background-color: #54456b;">
                <i class="fab fa-twitter"></i>
            </button>
        </div>
        <div class=" d-flex text-center text-white p-3 bg-primary">
            © 2022 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">jalan-jalan.com</a>
        </div>
    </footer>
</html>