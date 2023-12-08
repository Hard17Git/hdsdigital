<!DOCTYPE html>
<html lang="en">

<head>

    <title>HDS DIGITAL | About</title>

    <?php include '../../layouts/title-logo.php'; ?>
    <?php include '../../layouts/title-css.php'; ?>

</head>

<body class="page-contact">

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
                    <li><a href="../../page/portfolio/portfolio.php">Portfolio</a></li>
                    <li><a href="../../page/contact/contact.php" class="active">Contact</a></li>
                    <li><a href="../../sistem-hdsdigital/" class="btn-login">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main id="main">
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('../../assets/img/hds-bg-contact.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center">
                <h2>Contact</h2>
                <ol>
                    <li><a href="../../index.php">Home</a></li>
                    <li>Contact</li>
                </ol>
            </div>
        </div>

        <section id="contact" class="contact">
            <div class="container position-relative" data-aos="fade-up">
                <div class="row gy-4 d-flex justify-content-end">
                    <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4>Lokasi:</h4>
                                <p>Kelurahan Karyamulya, Kesambi, <br>
                                Kota Cirebon, Jawa Barat 45131
                                </p>
                            </div>
                        </div>
                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>Email:</h4>
                                <p>hds.official33@gmail.com</p>
                            </div>
                        </div>
                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>Telpon:</h4>
                                <p>+62 813 9540 8423</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Nama Lengkap" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Alamat Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Judul" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Keterangan / Pesan" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Kirim Pesan</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include '../../layouts/footer.php'; ?>
    <?php include '../../layouts/title-js.php'; ?>

</body>
</html>