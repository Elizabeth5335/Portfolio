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
$this->registerMetaTag(['name' => 'description', 'content' => Yii::t('translations', 'I am a front-end developer from Ukraine. I am not afraid of challenges and am ready to take on interesting tasks.')]);
$this->registerMetaTag(['name' => 'keywords', 'content' => 'фронт-енд розробник, front-end developer, сайти, web-sites, html, css, php, js, Єлизавета Лазарєва, Yelyzaveta Lazarieva']);

?>
<?php $this->beginPage() ?>


<!DOCTYPE html>
<?php

$exp = explode('/', $_SERVER['REQUEST_URI']);
$language = $exp[1]; // first element before / (slash)
$acceptLang = ['uk', 'en'];
if (in_array($language, $acceptLang)) {
    Yii::$app->session->set('language', $language);
    Yii::$app->language = Yii::$app->session->get('language');
} else {
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    //$acceptLang = ['uk', 'en'];
    $lang = in_array($lang, $acceptLang) ? $lang : 'en';
    Yii::$app->language = $_COOKIE['language'] ?? $lang;
    Yii::$app->session->set('language', $_COOKIE['language'] ?? $lang);
}

echo '<html lang="';
echo Yii::$app->session->get('language');
echo '" class="h-100">';

?>
<head>
    <title><?= Html::encode($this->title) ?></title>

    <!-- Favicon -->
    <link href="/img/logo-light.PNG" rel="icon" type="image/x-icon">

    <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy"
          rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="js/main.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <link rel="stylesheet" href="js/css/style.css"/>
    <link rel="stylesheet" href="js/css/glightbox.css"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex justify-content-end align-items-end header-transparent pe-4">
    <?php
    $current_url_lang = Yii::$app->request->url;
    if (str_contains($current_url_lang, "uk")) {
        $params = explode("/", $current_url_lang);
        $query = "";
        if (!empty($params[2])) {
            $query = '/' . $params[2];
        }
        $current_url_lang = $query;
        Yii::$app->language = 'uk';
        Yii::$app->session->set('language', 'uk');
    } else if (str_contains($current_url_lang, "en")) {
        $params = explode("/", $current_url_lang);
        $query = "";
        if (!empty($params[2])) {
            $query = '/' . $params[2];
        }
        $current_url_lang = $query;
        Yii::$app->language = 'en';
        Yii::$app->session->set('language', 'en');
    } else if ($current_url_lang == "/")
        $current_url_lang = "";

    ?>

    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto" href="/<?php echo Yii::$app->language; ?>"><?= Yii::t('translations', 'Home') ?></a>
            </li>
            <li><a class="nav-link scrollto" href="/#about"><?= Yii::t('translations', 'About') ?></a></li>
            <li><a class="nav-link scrollto" href="/#resume"><?= Yii::t('translations', 'Resume') ?></a></li>
            <li><a class="nav-link scrollto " href="/#portfolio"><?= Yii::t('translations', 'Portfolio') ?></a></li>
            <li><a class="nav-link scrollto" href="/#contact"><?= Yii::t('translations', 'Contact') ?></a></li>
            <li class="dropdown"><a href="/#"><span><?= Yii::t('translations', 'Language') ?></span> <i
                            class="fa fa-chevron-down"></i></a>
                <ul>
                    <li><a href="/en<?= $current_url_lang ?>">en</a></li>
                    <li><a href="/uk<?= $current_url_lang ?>">ua</a></li>
                </ul>
            </li>
        </ul>
        <i class="fa fa-bars mobile-nav-toggle"></i>
    </nav>
</header><!-- End Header -->

<!-- ======= Name Section ======= -->
<section id="hero">
    <div class="hero-container">
        <h1 id="name" class="mb-0"><?= Yii::t('translations', 'Yelyzaveta') ?></h1>
        <h1 id="surname"><?= Yii::t('translations', 'Lazarieva') ?></h1>
    </div>
</section><!-- End Name -->


<?= $content ?>

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container col-12">
        <div class="left">
            Copyright &copy; 2023 <span>Yelyzaveta Lazarieva</span>. All Rights Reserved
        </div>
        <nav id="nav" class="">
            <ul>
                <li><a class="nav-link"
                       href="/<?php echo Yii::$app->language; ?>"><?= Yii::t('translations', 'Home') ?></a></li>
                <li><a class="nav-link scrollto" href="/#about"><?= Yii::t('translations', 'About') ?></a></li>
                <li><a class="nav-link scrollto" href="/#resume"><?= Yii::t('translations', 'Resume') ?></a></li>
                <li><a class="nav-link scrollto " href="/#portfolio"><?= Yii::t('translations', 'Portfolio') ?></a></li>
                <li><a class="nav-link scrollto" href="/#contact"><?= Yii::t('translations', 'Contact') ?></a></li>
            </ul>
            <i class="fa fa-bars mobile-nav-toggle"></i>
        </nav>

    </div>
    <div class="arrow">
        <a href="#" class="top back-to-top d-flex align-items-center justify-content-center"><i
                    class="fas fa-arrow-up"></i></a>
    </div>
</footer><!-- End Footer -->

<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>

<!--
    Portfolio
    Favicon
    Шрифти
-->
