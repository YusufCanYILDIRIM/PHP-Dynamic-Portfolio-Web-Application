<?php require 'include/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $data['name'] ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Personal
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container">

            <h1><a href="index.php"><?= $data['name'] ?></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
            <h2>I'm a passionate <span><?= $data['title'] ?></span> from <?= $data['place'] ?></h2>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link active" href="#header">Home</a></li>
                    <li><a class="nav-link" href="#about">About</a></li>
                    <li><a class="nav-link" href="#resume">Resume</a></li>
                    <li><a class="nav-link" href="#services">Services</a></li>
                    <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class="social-links">
                <?php
                if ($data['twitter']) {
                ?>
                    <a href="<?= $data["twitter"] ?>" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
                <?php
                }
                ?>

                <?php
                if ($data['instagram']) {
                ?>
                    <a href="<?= $data["instagram"] ?>" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                <?php
                }
                ?>


                <?php
                if ($data['github']) {
                ?>
                    <a href="<?= $data["github"] ?>" target="_blank" class="github"><i class="bi bi-github"></i></a>
                <?php
                }
                ?>

                <?php
                if ($data['linkedin']) {
                ?>
                    <a href="<?= $data["linkedin"] ?>" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
                <?php
                }
                ?>

            </div>

        </div>
    </header><!-- End Header -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <!-- ======= About Me ======= -->
        <div class="about-me container">

            <div class="section-title">
                <h2>About</h2>
                <p>Learn more about me</p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="assets/img/me.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3><?= $data['title']; ?></h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?= $data['birthday'] ?></span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><?= $data_details['url'] ?></span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?= $data['phone'] ?></span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?= $data['place'] ?></span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?= $data['age'] ?></span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?= $data['degree'] ?></span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Certification:</strong> <span><?= $data['certification'] ?></span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span><?= $data['freelance'] ?></span></li>
                            </ul>
                        </div>
                    </div>
                    <p>
                        Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                        Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
                    </p>
                </div>
            </div>

        </div><!-- End About Me -->

        <!-- ======= Counts ======= -->
        <div class="counts container">

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Happy Clients</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext"></i>
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Projects</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="bi bi-headset"></i>
                        <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Hours Of Support</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="bi bi-award"></i>
                        <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Awards</p>
                    </div>
                </div>

            </div>

        </div><!-- End Counts -->

        <!-- ======= Skills  ======= -->
        <div class="skills container">

            <div class="section-title">
                <h2>Skills</h2>
            </div>

            <div class="row skills-content">
                <div class="row">
                    <?php
                    if ($skills_result->num_rows > 0) {
                        while ($row = $skills_result->fetch_assoc()) {
                    ?>
                            <div class="col-lg-6">
                                <div class="progress">
                                    <span class="skill"><?= $row['name'] ?><i class="val"><?= $row['value'] ?></i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?= $row['value'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>

        </div>

        </div><!-- End Skills -->

        <!-- ======= Interests ======= -->
        <div class="interests container">

            <div class="section-title">
                <h2>Interests</h2>
            </div>

            <div class="row">
                <?php

                if ($interests_result->num_rows > 0) {
                    while ($interests_row = $interests_result->fetch_assoc()) {
                ?>
                        <div class="col-lg-3 col-md-4">
                            <div class="icon-box">
                                <i class="<?= $interests_row['icon'] ?>" style="color: #<?= $interests_row['color'] ?>;"></i>
                                <h3><?= $interests_row['title'] ?></h3>
                            </div>
                        </div>
                <?php
                    }
                }

                ?>

            </div><!-- End Interests -->

            <!-- ======= Testimonials ======= -->
            <div class="testimonials container">

                <div class="section-title">
                    <h2>Testimonials</h2>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="owl-carousel testimonials-carousel">

                </div>

            </div><!-- End Testimonials  -->

    </section><!-- End About Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">

            <div class="section-title">
                <h2>Resume</h2>
                <p>Check My Resume</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <h3 class="resume-title">Sumary</h3>
                    <div class="resume-item pb-0">
                        <h4>Alice Barkley</h4>
                        <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
                        <p>
                        <ul>
                            <li>Portland par 127,Orlando, FL</li>
                            <li>(123) 456-7891</li>
                            <li>alice.barkley@example.com</li>
                        </ul>
                        </p>
                    </div>

                    <h3 class="resume-title">Education</h3>
                    <div class="resume-item">
                        <h4>Afyon Kocatepe Üniversitesi</h4>
                        <h5>2021-2023</h5>
                        <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                        <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
                    </div>
                    <div class="resume-item">
                        <h4>Eskişehir Anadolu Üniversitesi</h4>
                        <h5>2023-2025</h5>
                        <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                        <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="resume-title">Professional Experience</h3>
                    <div class="resume-item">
                        <h4>Junior <?= $data['title'] ?></h4>
                        <h5>2019 - Present</h5>
                        <p><em>Experion, New York, NY </em></p>
                        <p>
                        <ul>
                            <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
                            <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                            <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
                            <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
                        </ul>
                        </p>
                    </div>
                    <div class="resume-item">
                        <h4>Junior <?= $data['title'] ?></h4>
                        <h5>2017 - 2018</h5>
                        <p><em>Stepping Stone Advertising, New York, NY</em></p>
                        <p>
                        <ul>
                            <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
                            <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                            <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                            <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Resume Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>Services</h2>
                <p>My Services</p>
            </div>

            <div class="row">
                <?php
                if ($services_result->num_rows > 0) {
                    while ($services_data = $services_result->fetch_assoc()) {
                ?>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="icon-box">
                                <div class="icon"><i class="<?= $services_data['icon'] ?>"></i></div>
                                <h4><?= $services_data['title'] ?></h4>
                                <p><?= $services_data['text'] ?></p>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "No Service Found.";
                }
                ?>
            </div>
        </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title">
                <h2>Portfolio</h2>
                <p>My Works</p>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 2</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 2</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 1</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 3</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Contact Me</p>
            </div>

            <div class="row mt-2">

                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-map"></i>
                        <h3>My Address</h3>
                        <p><?= $data['adress'] ?></p>
                    </div>
                </div>

                <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-share-alt"></i>
                        <h3>Social Profiles</h3>
                        <div class="social-links">
                            <?php
                            if ($data['twitter']) {
                            ?>
                                <a href="<?= $data["twitter"] ?>" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
                            <?php
                            }
                            ?>

                            <?php
                            if ($data['instagram']) {
                            ?>
                                <a href="<?= $data["instagram"] ?>" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                            <?php
                            }
                            ?>


                            <?php
                            if ($data['github']) {
                            ?>
                                <a href="<?= $data["github"] ?>" target="_blank" class="github"><i class="bi bi-github"></i></a>
                            <?php
                            }
                            ?>

                            <?php
                            if ($data['linkedin']) {
                            ?>
                                <a href="<?= $data["linkedin"] ?>" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Me</h3>
                        <p><?= $data['email'] ?></p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Me</h3>
                        <p><?= $data['phone'] ?></p>
                    </div>
                </div>
            </div>

            <?php
            if (isset($_POST['send'])) {
                // Veritabanı bağlantısı
                $conn = mysqli_connect("host", "username", "password", "database");

                // Bağlantı kontrolü
                if (!$conn) {
                    die("Veritabanı bağlantı hatası: " . mysqli_connect_error());
                }

                // Form verilerini al
                $name = mysqli_real_escape_string($conn, $_POST['name']);
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $subject = mysqli_real_escape_string($conn, $_POST['subject']);
                $message = mysqli_real_escape_string($conn, $_POST['message']);

                // SQL sorgusu
                $contact = "INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message')";

                // SQL sorgusunu çalıştır ve sonucu kontrol et
                if (mysqli_query($conn, $contact)) {
                    echo "Message sent successfully.";
                } else {
                    echo "Error: " . $contact . "<br>" . mysqli_error($conn);
                }

                // Veritabanı bağlantısını kapat
                mysqli_close($conn);
            }
            ?>

            <form action="#" method="post" role="form" class="php-email-form mt-4">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit" name="send">Send Message</button></div>
            </form>

        </div>
    </section><!-- End Contact Section -->

    <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
        Designed by <a href="<?= $data_details['url']; ?>"><?= $data['name'] ?></a>
    </div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>