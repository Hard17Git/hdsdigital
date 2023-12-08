<!DOCTYPE html>
<html lang="en">

<head>

    <title>HDS DIGITAL | About</title>

    <?php include '../../layouts/title-logo.php'; ?>
    <?php include '../../layouts/title-css.php'; ?>

</head>

<body class="page-portfolio">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center">
                <img src="../../assets/img/logo_HDS.png" alt="">
            </a>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="../../index.php">Home</a></li>
                    <li><a href="../../page/about/about.php">About</a></li>
                    <li><a href="../../page/product/product.php">Product</a></li>
                    <li><a href="../../page/portfolio/portfolio.php" class="active">Portfolio</a></li>
                    <li><a href="../../page/contact/contact.php">Contact</a></li>
                    <li><a href="../../sistem-hdsdigital/" class="btn-login">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main id="main">
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('../../assets/img/portfolio-header.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center">
                <h2>Portfolio</h2>
                <ol>
                    <li><a href="../../index.php">Home</a></li>
                    <li>Portfolio</li>
                </ol>
            </div>
        </div>

        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">
                    <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-anvs">ANVS</li>
                        <li data-filter=".filter-it">IT Solution</li>
                        <li data-filter=".filter-konveksi">Konveksi</li>
                        <li data-filter=".filter-advertising">Advertising</li>
                        <li data-filter=".filter-belajar">Ruang Belajar</li>
                        <!--<li data-filter=".filter-branding">Graphic Design</li>-->
                    </ul>
                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="300">
                        <div class="col-lg-4 col-md-6 portfolio-item filter-konveksi">
                            <img src="../../assets/img/portfolio/konveksi/testi-kaos-traveler.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>T-Shirt Traveler SE</h4>
                                <p>Kaos Couple Aa dan Teteh Traveler</p>
                                <a href="../../assets/img/portfolio/konveksi/testi-kaos-traveler.jpg" title="T-Shirt Traveler SE" data-gallery="portfolio-gallery-konveksi" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-advertising">
                            <img src="../../assets/img/portfolio/advertising/testi-cv-budika.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Curriculum Vitae (CV)</h4>
                                <p>CV Elegant Budika Aditiana</p>
                                <a href="../../assets/img/portfolio/advertising/testi-cv-budika.jpg" title="CV Budika Aditiana" data-gallery="portfolio-gallery-advertising" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-advertising">
                            <img src="../../assets/img/portfolio/advertising/testi-mie-kocok.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Mie Kocok Baraya</h4>
                                <p>Logo dan Stiker Mie Kocok Khas Bandung</p>
                                <a href="../../assets/img/portfolio/advertising/testi-mie-kocok.jpg" title="Mie Kocok Baraya" data-gallery="portfolio-gallery-advertising" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-advertising">
                            <img src="../../assets/img/portfolio/advertising/testi-cemilan-kampoeng.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Cemilan Kampoeng</h4>
                                <p>Logo dan Stiker Cemilan Kampoeng</p>
                                <a href="../../assets/img/portfolio/advertising/testi-cemilan-kampoeng.jpg" title="Logo Cemilan Kampoeng" data-gallery="portfolio-gallery-advertising" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-konveksi">
                            <img src="../../assets/img/portfolio/konveksi/testi-kaos-uwais.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>T-Shirt Uwais Al Qarni</h4>
                                <p>Not famous on earth, but famous in the sky</p>
                                <a href="../../assets/img/portfolio/konveksi/testi-kaos-uwais.jpg" title="T-Shirt Uwais Al Qarni" data-gallery="portfolio-gallery-konveksi" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-advertising">
                            <img src="../../assets/img/portfolio/advertising/testi-case.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Softcase Handphone</h4>
                                <p>Softcase Premium Desain Custom</p>
                                <a href="../../assets/img/portfolio/advertising/testi-case.jpg" title="Softcase Handphone Custom" data-gallery="portfolio-gallery-advertising" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-advertising">
                            <img src="../../assets/img/portfolio/advertising/testi-XBanner.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>X-Banner Mie Kocok</h4>
                                <p>X-Banner Mie Kocok Baraya Khas Bandung </p>
                                <a href="../../assets/img/portfolio/advertising/testi-XBanner.jpg" title="X-Banner Mie Kocok Baraya" data-gallery="portfolio-gallery-advertising" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-advertising">
                            <img src="../../assets/img/portfolio/advertising/testi-ayam-juragan.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Ayam Penyet Juragan</h4>
                                <p>Logo dan Stiker Ayam Penyet Juragan</p>
                                <a href="../../assets/img/portfolio/advertising/testi-ayam-juragan.jpg" title="Ayam Penyet Juragan" data-gallery="portfolio-gallery-advertising" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-konveksi">
                            <img src="../../assets/img/portfolio/konveksi/testi-kaos-ciremai.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>MT. Ciremai SE</h4>
                                <p>Always Say Yes To New adventure</p>
                                <a href="../../assets/img/portfolio/konveksi/testi-kaos-ciremai.jpg" title="T-Shirt MT.Ciremai 3078 MDPL SE" data-gallery="portfolio-gallery-konveksi" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-konveksi">
                            <img src="../../assets/img/portfolio/konveksi/testi-kaos-dakwah.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>T-Shirt SE Dakwah</h4>
                                <p>Kaos Bertemakan Dakwah Unlimited </p>
                                <a href="../../assets/img/portfolio/konveksi/testi-kaos-dakwah.jpg" title="T-Shirt SE Dakwah Unlimited" data-gallery="portfolio-gallery-konveksi" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-advertising">
                            <img src="../../assets/img/portfolio/advertising/testi-poster.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Poster Custom</h4>
                                <p>Desain Poster Dengan Desain Suka-suka</p>
                                <a href="../../assets/img/portfolio/advertising/testi-poster.jpg" title="Percetakan Poster Custom" data-gallery="portfolio-gallery-advertising" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-belajar">
                            <img src="../../assets/img/portfolio/ruang_belajar/testi-joki-tugas.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Pengerjaan Tugas Bersama</h4>
                                <p>Ruang Belajar Untuk Membantu Kesulitan Anda</p>
                                <a href="../../assets/img/portfolio/ruang_belajar/testi-joki-tugas.jpg" title="Pengerjaan Tugas Bersama" data-gallery="portfolio-gallery-belajar" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-advertising">
                            <img src="../../assets/img/portfolio/advertising/testi-logo-irmas.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Logo Irmas</h4>
                                <p>Desain Logo TEBAS Kedung Bunder</p>
                                <a href="../../assets/img/portfolio/advertising/testi-logo-irmas.jpg" title="Desain Logo Irmas" data-gallery="portfolio-gallery-advertising" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-anvs">
                            <img src="../../assets/img/portfolio/anvs/testi-kaos-anvs1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>T-Shirt ANVS</h4>
                                <p>Kaos Simple dan Elegant dari Brand Kami</p>
                                <a href="../../assets/img/portfolio/anvs/testi-kaos-anvs1.jpg" title="T-Shirt ANVS Limited Edition" data-gallery="portfolio-gallery-anvs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-it">
                            <img src="../../assets/img/portfolio/it-solution/testi-upgrade-ram-hdd.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Upgrade RAM dan Hardisk</h4>
                                <p>Upgrade Komponen Laptop RAM dan HDD</p>
                                <a href="../../assets/img/portfolio/it-solution/testi-upgrade-ram-hdd.jpg" title="Upgrade RAM dan Hardisk" data-gallery="portfolio-gallery-it" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-advertising">
                            <img src="../../assets/img/portfolio/advertising/testi-undangan.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Percetakan Undangan</h4>
                                <p>Testimonial Percetakan Undangan Pernikahan</p>
                                <a href="../../assets/img/portfolio/advertising/testi-undangan.jpg" title="Percetakan Undangan Pernikahan" data-gallery="portfolio-gallery-advertising" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-it">
                            <img src="../../assets/img/portfolio/it-solution/testi-install-office.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Install Aplikasi Office</h4>
                                <p>Instalasi Software Pendukung Office</p>
                                <a href="../../assets/img/portfolio/it-solution/testi-install-office.jpg" title="Install Aplikasi Office" data-gallery="portfolio-gallery-it" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-konveksi">
                            <img src="../../assets/img/portfolio/konveksi/testi-jersey-kabehfc.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Jersey Kabeh FC</h4>
                                <p>Jersey Dengan Bahan Premium Milano</p>
                                <a href="../../assets/img/portfolio/konveksi/testi-jersey-kabehfc.jpg" title="Jersey Premium Kabeh FC" data-gallery="portfolio-gallery-konveksi" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include '../../layouts/footer.php'; ?>
    <?php include '../../layouts/title-js.php'; ?>

</body>
</html>