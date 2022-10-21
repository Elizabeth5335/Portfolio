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
use yii\helpers\Url;

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
/*
$exp = explode('/',$_SERVER['REQUEST_URI']);
$language = $exp[1]; // first element before / (slash)*/
Yii::$app->language=Yii::$app->session->get('language');
echo '<html lang="';
echo Yii::$app->language;
echo '" class="h-100">';

?>
<head>
    <title><?= Html::encode($this->title) ?></title>

    <!-- Favicons -->
    <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

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

    <link rel="stylesheet" href="js/css/style.css" />
    <link rel="stylesheet" href="js/css/glightbox.css" />

    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex justify-content-end align-items-end header-transparent pe-4">
    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link" href="/"><?= Yii::t('translations', 'Home') ?></a></li>
            <li><a class="nav-link scrollto" href="#about"><?= Yii::t('translations', 'About') ?></a></li>
            <li><a class="nav-link scrollto" href="#resume"><?= Yii::t('translations', 'Resume') ?></a></li>
            <li><a class="nav-link scrollto " href="#portfolio"><?= Yii::t('translations', 'Portfolio') ?></a></li>
            <li><a class="nav-link scrollto" href="#contact"><?= Yii::t('translations', 'Contact') ?></a></li>
            <li class="dropdown"><a href="#"><span><?= Yii::t('translations', 'Language') ?></span> <i class="fa fa-chevron-down"></i></a>
                <ul>
                    <li><a href="" id="en" >en</a></li>
                    <li><a href="" id="ua" >ua</a></li>
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

<?=$content?>

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <h3><?= Yii::t('translations', 'Yelyzaveta') ?> <?= Yii::t('translations', 'Lazarieva') ?></h3>
        <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
        <div class="social-links">
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        </div>
        <div class="copyright">
            &copy; Copyright <strong><span>Laura</span></strong>. All Rights Reserved
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<script>
    document.getElementById("en").addEventListener("click", en);
    function en() {
        <?php Yii::$app->session->set('language', 'en')?>
    }
    document.getElementById("ua").addEventListener("click", ua);
    function ua() {
        <?php Yii::$app->session->set('language', 'ua')?>
    }
</script>
<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>

