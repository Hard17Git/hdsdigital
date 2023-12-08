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
                <h2>Portfolio Details</h2>
                <ol>
                    <li><a href="../../index.php">Home</a></li>
                    <li>Portfolio Details</li>
                </ol>
            </div>
        </div>
        <section id="portfolio-details" class="portfolio-details">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    <div class="col-lg-8">
                        <div class="slides-1 portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide">
                                    <img src="../../assets/img/portfolio/app-1.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="../../assets/img/portfolio/product-1.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="../../assets/img/portfolio/branding-1.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="../../assets/img/portfolio/books-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Project information</h3>
                            <ul>
                                <li><strong>Category</strong>: Web design</li>
                                <li><strong>Client</strong>: ASU Company</li>
                                <li><strong>Project date</strong>: 01 March, 2020</li>
                                <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <h2>This is an example of portfolio detail</h2>
                            <p>
                                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                            </p>
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