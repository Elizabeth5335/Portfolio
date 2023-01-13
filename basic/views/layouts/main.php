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

$exp = explode('/',$_SERVER['REQUEST_URI']);
$language = $exp[1]; // first element before / (slash)
Yii::$app->language=Yii::$app->session->get('language');
Yii::$app->session->set('language',$language);
echo '<html lang="';
echo Yii::$app->session->get('language');
echo '" class="h-100">';

?>
<head>
    <title><?= Html::encode($this->title) ?></title>

    <!-- Favicons -->
    <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

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
    <?php
    $current_url_lang = Yii::$app->request->url;
    if (str_contains($current_url_lang, "ua")) {
        $params = explode("/",$current_url_lang);
        $query = "";
        if(!empty($params[2])){
            $query = '/'.$params[2];
        }
        $current_url_lang = $query;
        Yii::$app->language='ua';
        Yii::$app->session->set('language','ua');
        }
    else if (str_contains($current_url_lang, "en")) {
        $params = explode("/",$current_url_lang);
        $query = "";
        if(!empty($params[2])){
            $query = '/'.$params[2];
        }
        $current_url_lang = $query;
        Yii::$app->language='en';
        Yii::$app->session->set('language','en');
    }


    ?>

    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link" href="/<?php echo Yii::$app->language;?>"><?= Yii::t('translations', 'Home') ?></a></li>
            <li><a class="nav-link scrollto" href="#about"><?= Yii::t('translations', 'About') ?></a></li>
            <li><a class="nav-link scrollto" href="#resume"><?= Yii::t('translations', 'Resume') ?></a></li>
            <li><a class="nav-link scrollto " href="#portfolio"><?= Yii::t('translations', 'Portfolio') ?></a></li>
            <li><a class="nav-link scrollto" href="#contact"><?= Yii::t('translations', 'Contact') ?></a></li>
            <li class="dropdown"><a href="#"><span><?= Yii::t('translations', 'Language') ?></span> <i class="fa fa-chevron-down"></i></a>
                <ul>
                    <li><a href="/en<?= $current_url_lang?>">en</a></li>
                    <li><a href="/ua<?= $current_url_lang?>">ua</a></li>
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
    </div>
</section><!-- End Hero -->

<?=$content?>

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container col-12">
        <div class="left">
            Copyright &copy; 2023 <span>Yelyzaveta Lazarieva</span>. All Rights Reserved
        </div>
        <nav id="nav" class="">
            <ul>
                <li><a class="nav-link" href="/"><?= Yii::t('translations', 'Home') ?></a></li>
                <li><a class="nav-link scrollto" href="#about"><?= Yii::t('translations', 'About') ?></a></li>
                <li><a class="nav-link scrollto" href="#resume"><?= Yii::t('translations', 'Resume') ?></a></li>
                <li><a class="nav-link scrollto " href="#portfolio"><?= Yii::t('translations', 'Portfolio') ?></a></li>
                <li><a class="nav-link scrollto" href="#contact"><?= Yii::t('translations', 'Contact') ?></a></li>
            </ul>
            <i class="fa fa-bars mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
    <div class="arrow">
        <a href="#" class="top back-to-top d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></a>
    </div>
</footer><!-- End Footer -->

<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>

<!--
    Portfolio
    Favicon
    Dark theme
    Шрифти
    lang
    contact form
-->
