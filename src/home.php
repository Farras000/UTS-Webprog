<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5 Responsive Landing Page Design</title>

    <!-- All CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css"
        rel="stylesheet">

    <link rel="stylesheet" href="css/home.css">
</head>

<style>
    :root {
        --1: #1B2E3C;
        --2: #0C0C1E;
        --3: #4B0000;
        --4: #F3E3E2;

    }
</style>

<body style="background-color : var(--1); color: var(--4);">

    <nav class="navbar navbar-expand-lg navbar-light fixed-top "
        style="background-color: rgba(245, 222, 179, 0.927);  ">
        <div class="container">
            <a class="navbar-brand text-success " href="#" style="color: ;"><span
                    style="color: var(--1);">Koper</span>Ase</a>
            <button style="background-color: white; border: 2px solid var(--3);" class="navbar-toggler btn"
                type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pembayaran.php">Pembayaran</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="history.php">History</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            More
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end animate__animated animate__fadeIn"
                            style="background-color: rgba(245, 222, 179, 0.927); ">
                            <li><a class="dropdown-item" href="#">Profile</a></li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#" style="color: red;">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/pexels-andrea-piacquadio-840996.jpg " class="d-block w-100 object-fit-cover " alt="...">
                <div class="carousel-caption  ">
                    <h5 style=" color: var(--4); ">APAKAH KAMU <br> INGIN MENABUNG</h5>
                    <p class>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore.
                        Deserunt
                        excepturi quas vero.</p>
                    <p><a href="#" class="btn   mt-3"
                            style=" border: 1px solid var(--3); color: var(--3); background-color: var(--4) ;">Learn
                            More</a>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/pexels-cowomen-2041627.jpg" class="d-block w-100 object-fit-cover " alt="...">
                <div class="carousel-caption">
                    <h5>INGIN TRANSFER <br> TANPA BIAYA ADMIN</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt
                        excepturi quas vero.</p>
                    <p><a href="#" class="btn   mt-3"
                            style=" border: 1px solid var(--3); color: var(--3); background-color: var(--4) ;">Learn
                            More</a>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/pexels-fauxels-3183197.jpg" class="d-block w-100 object-fit-cover " alt="...">
                <div class="carousel-caption  ">
                    <h5>APAKAH KAMU <br> BUTUH PINJAMAN </h5>
                    <p>Kami menyediakan pinjaman dengan bunga kecil</p>
                    <p><a href="#" class="btn   mt-3"
                            style=" border: 1px solid var(--3); color: var(--3); background-color: var(--4) ;">Learn
                            More</a>
                    </p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- about section starts -->
    <section id="about" class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="about-img">
                        <img src="img/about.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                        <h2>We Provide the Best Quality <br /> Services Ever</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam, labore reiciendis. Assumenda
                            eos quod animi! Soluta nesciunt inventore dolores excepturi provident, culpa beatae tempora,
                            explicabo corporis quibusdam corrupti. Autem, quaerat. Assumenda quo aliquam vel, nostrum
                            explicabo ipsum dolor, ipsa perferendis porro doloribus obcaecati placeat natus iste odio
                            est non earum?</p>
                        <p><a href="#" class="btn btn-outline-dark  mt-3"
                                style=" background-color: var(--4); color: var(--3)">Learn More</a></p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section Ends -->
    <!-- services section Starts -->
    <section class="services section-padding" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2 class=" text-start mb-5 ">Informasi Simpanan
                            <hr>
                        </h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-center pb-2"
                        style="background-color: var(--2); color:var(--4); height: 400px;">
                        <div class="card-body">
                            <i class="bi bi-wallet2"></i>
                            <h3 class="card-title">Wajib</h3>
                            <hr>
                            <p class="lead">
                                ceritanya disini ada simpanan wajib
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-center pb-2"
                        style="background-color: var(--2); color:var(--4); height: 400px;">
                        <div class="card-body">
                            <i class="bi bi-cash-coin"></i>
                            <h3 class="card-title">Pokok</h3>
                            <hr>
                            <p class="lead">
                                disini nanti ada simpanan pokok
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-center pb-2"
                        style="background-color: var(--2); color:var(--4); height: 400px;">
                        <div class="card-body">
                            <i class="bi bi-wallet"></i>
                            <h3 class="card-title">Sukarela</h3>
                            <hr>
                            <p class="lead">disini simpanan sukarela</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- team starts -->
    <section class="team section-padding" id="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Our Team</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit. Non, quo.</p>
                    </div>
                </div>
            </div>
            <div class="row" ">
                <div class=" col-12 col-md-6 col-lg-3">
                <div class="card text-center" style="background-color: var(--2); color: var(--4) ; ">
                    <div class="card-body">
                        <img src="img/team-1.jpg" alt="" class="img-fluid rounded-circle">
                        <h3 class="card-title py-2">Jack Wilson</h3>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ipsam
                            nostrum illo tempora esse quibusdam.</p>


                        <p class="socials">
                            <i class="bi bi-twitter mx-1"></i>
                            <i class="bi bi-facebook mx-1"></i>
                            <i class="bi bi-linkedin mx-1"></i>
                            <i class="bi bi-instagram  mx-1" onclick="openInstagram('https://www.instagram.com/')"></i>
                        </p>
                    </div>
                </div>
            </div>

    </section>

    <footer class="text-center text-lg-start " style="background-color: #1c2331">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-between p-4" style="background-color: #6351ce">
            <!-- Left -->
            <div class="me-5">
                <span>Get connected with us on social networks:</span>
            </div>

            <div>
                <a href="" class=" me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class=" me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class=" me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class=" me-4">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class=" me-4">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class=" me-4">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold">PT Damen Sejahtera</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            Here you can use rows and columns to organize your footer
                            content. Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit.
                        </p>
                    </div>
                    <!-- Grid column -->



                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 ">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Contact</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                        <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
                        <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2020 Copyright:
            <a class="" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>

    </footer>
    <script>
        function openInstagram(url) {
            window.location.href = url;
        }
    </script>
    <!-- footer ends -->










    <!-- All Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>




<!--for getting the form download the code from download button-->