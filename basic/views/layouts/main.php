<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\bootstrap5\Dropdown;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => '@web/favicon.ico']);
?>
<?php $this->beginPage() ?>



<!DOCTYPE html>
<?php

$exp = explode('/',$_SERVER['REQUEST_URI']);
$language = $exp[1]; // first element before / (slash)
echo '<html lang="';
echo $language;
echo '" class="h-100">';
Yii::$app->language = $language;
?>
<head>
    <title><?= Html::encode($this->title) ?></title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Laura Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link href="/web/site.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


    <!-- Vendor JS Files -->
    <script src="../../assets/vendor/purecounter/purecounter_vanilla.js" type="text/javascript"></script>
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="../../assets/vendor/glightbox/js/glightbox.min.js" type="text/javascript"></script>
    <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js" type="text/javascript"></script>
    <script src="../../assets/vendor/swiper/swiper-bundle.min.js" type="text/javascript"></script>
    <script src="../../assets/vendor/waypoints/noframework.waypoints.js" type="text/javascript"></script>
    <script src="../../assets/vendor/php-email-form/validate.js" type="text/javascript"></script>

    <!-- Template Main JS File -->
    <script src="../../web/js/main.js" type="text/javascript"></script>

    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>

<?php $languageItem = new cetver\LanguageSelector\items\DropDownLanguageItem([
     'languages' => [
         'en' => '<span class="flag-icon flag-icon-us"></span> English',
         'ru' => '<span class="flag-icon flag-icon-ru"></span> Russian',
         'de' => '<span class="flag-icon flag-icon-de"></span> Deutsch',
     ],
     'options' => ['encode' => false],
 ]);
?>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex justify-content-end align-items-end header-transparent pe-4">
    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto" href="#about"><?= Yii::t('translations', 'About') ?></a></li>
            <li><a class="nav-link scrollto" href="#resume"><?= Yii::t('translations', 'Resume') ?></a></li>
            <li><a class="nav-link scrollto " href="#portfolio"><?= Yii::t('translations', 'Portfolio') ?></a></li>
            <li><a class="nav-link scrollto" href="#contact"><?= Yii::t('translations', 'Contact') ?></a></li>

            <li class="dropdown"><a href="#"><span><?= Yii::t('translations', 'Language') ?></span> <i class="fa fa-chevron-down"></i></a>
                <ul>
                    <li><a href="en">en</a></li>
                    <li><a href="ua">ua</a></li>
                </ul>
            </li>
        </ul>
        <i class="fa fa-bars mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
        <h1 id="name" class="mb-0"><?= Yii::t('translations', 'Yelyzaveta') ?></h1>
            <h1 id="surname"><?= Yii::t('translations', 'Lazarieva') ?></h1>
        <a href="#about" class="btn-scroll scrollto" title="Scroll Down"><i class="fa fa-angle-double-down"></i></a>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Me Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <span><?= Yii::t('translations', 'About') ?></span>
                <h2><?= Yii::t('translations', 'About') ?></h2>
                <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
            </div>

            <div class="row">
                <div class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start">
                    <img src="img/me.jpg" width="400">
                </div>
                <div class="col-lg-8 d-flex flex-column align-items-stretch">
                    <div class="content ps-lg-4 d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="fa fa-chevron-right"></i> <strong><?= Yii::t('translations', 'Name') ?>:</strong> <span><?= Yii::t('translations', 'Yelyzaveta') ?> <?= Yii::t('translations', 'Lazarieva') ?> </span></li>
                                    <li><i class="fa fa-chevron-right"></i> <strong><?= Yii::t('translations', 'Website') ?>:</strong> <span>www.example.com</span></li>
                                    <li><i class="fa fa-chevron-right"></i> <strong><?= Yii::t('translations', 'Phone') ?>:</strong> <span>+123 456 7890</span></li>
                                    <li><i class="fa fa-chevron-right"></i> <strong><?= Yii::t('translations', 'City') ?>:</strong> <span><?= Yii::t('translations', 'Kharkiv, Ukraine') ?></span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="fa fa-chevron-right"></i> <strong><?= Yii::t('translations', 'Birthday') ?>:</strong> <span>15.02.2002</span></li>
                                    <li><i class="fa fa-chevron-right"></i> <strong><?= Yii::t('translations', 'Age') ?>:</strong> <span>30</span></li>
                                    <li><i class="fa fa-chevron-right"></i> <strong>E-mail:</strong> <span>mymail@gmail.com</span></li>
                                    <li><i class="fa fa-chevron-right"></i> <strong><?= Yii::t('translations', 'Education') ?>:</strong> <span><?= Yii::t('translations', 'Karazin') ?></span></li>

                                </ul>
                            </div>
                        </div>
                    </div><!-- End .content-->

                    <div class="skills-content ps-lg-4">
                        <div class="progress">
                            <span class="skill">HTML <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar w-80" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">CSS, SASS <i class="val">70%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">PHP <i class="val">25%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress">
                            <span class="skill">JavaScript <i class="val">15%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar w-15" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Bootstrap <i class="val">98%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar w-98" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Yii2 Framework <i class="val">50%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End About Me Section -->

    <!-- ======= My Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">

            <div class="section-title">
                <span><?= Yii::t('translations', 'My resume') ?></span>
                <h2><?= Yii::t('translations', 'My resume') ?></h2>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <h3 class="resume-title"><?= Yii::t('translations', 'Summary') ?></h3>
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

                    <h3 class="resume-title"><?= Yii::t('translations', 'Education') ?></h3>
                    <div class="resume-item">
                        <h4>Master of Fine Arts &amp; Graphic Design</h4>
                        <h5>2015 - 2016</h5>
                        <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                        <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="resume-title"><?= Yii::t('translations', 'Professional Experience') ?></h3>
                    <div class="resume-item">
                        <h4>Senior graphic design specialist</h4>
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
                </div>
            </div>

        </div>
    </section><!-- End My Resume Section -->

    <!-- ======= About Me Section ======= -->
    <section id="facts" class="facts">
        <div class="container">

            <div class="section-title">
                <span><?= Yii::t('translations', 'Random facts') ?></span>
                <h2><?= Yii::t('translations', 'Random facts') ?></h2>
            </div>

            <div class="row">
                <div class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
                        <div class="row">
                            <div class="col-6">
                                <img src="/img/plants1.jpg" alt="plants" style="max-width: 80%;">
                            </div>
                            <div class="col-6">
                                <ul>
                                    <li><i class="fa fa-chevron-right"></i> <strong><?= Yii::t('translations', 'Birthday') ?>:</strong> <span>15.02.2002</span></li>
                                    <li><i class="fa fa-chevron-right"></i> <strong><?= Yii::t('translations', 'Age') ?>:</strong> <span>30</span></li>
                                    <li><i class="fa fa-chevron-right"></i> <strong>E-mail:</strong> <span>mymail@gmail.com</span></li>
                                    <li><i class="fa fa-chevron-right"></i> <strong><?= Yii::t('translations', 'Education') ?>:</strong> <span><?= Yii::t('translations', 'Karazin') ?></span></li>

                                </ul>
                            </div>
                        </div>
                </div><!-- End .content-->

        </div>
    </section><!-- End Random facts Section -->

    <!-- ======= My Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title">
                <span><?= Yii::t('translations', 'My portfolio') ?></span>
                <h2><?= Yii::t('translations', 'My portfolio') ?></h2>
            </div>

            <ul id="portfolio-flters" class="d-flex justify-content-center">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-card">Card</li>
                <li data-filter=".filter-web">Web</li>
            </ul>

            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-img"><img src="/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>App 1</h4>
                        <p>App</p>
                        <a href="/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-img"><img src="/img/portfolio/portfolio-3.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>App 2</h4>
                        <p>App</p>
                        <a href="/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-img"><img src="/img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>Card 2</h4>
                        <p>Card</p>
                        <a href="/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-img"><img src="/img/portfolio/portfolio-5.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>Web 2</h4>
                        <p>Web</p>
                        <a href="/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-img"><img src="/img/portfolio/portfolio-6.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>App 3</h4>
                        <p>App</p>
                        <a href="/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-img"><img src="/img/portfolio/portfolio-7.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>Card 1</h4>
                        <p>Card</p>
                        <a href="/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-img"><img src="/img/portfolio/portfolio-8.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>Card 3</h4>
                        <p>Card</p>
                        <a href="/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>



            </div>

        </div>
    </section><!-- End My Portfolio Section -->


    <!-- ======= Contact Me Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <span><?= Yii::t('translations', 'Contact me') ?></span>
                <h2><?= Yii::t('translations', 'Contact me') ?></h2>
            </div>

            <div class="row">

                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box">
                                <i class="bx bx-share-alt"></i>
                                <h3>Social Profiles</h3>
                                <div class="social-links">
                                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                    <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-envelope"></i>
                                <h3>Email Me</h3>
                                <p>contact@example.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-phone-call"></i>
                                <h3>Call Me</h3>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="../../forms/contact.php" method="post" role="form" class="php-email-form">
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
                            <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Me Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <h3><?= Yii::t('translations', 'Yelyzaveta') ?> <?= Yii::t('translations', 'Lazarieva') ?></h3>
        <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
        <div class="social-links">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
        <div class="copyright">
            &copy; Copyright <strong><span>Laura</span></strong>. All Rights Reserved
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>

