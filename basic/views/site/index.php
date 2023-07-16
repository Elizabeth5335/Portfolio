<?php

/** @var yii\web\View $this */

$this->title = 'My Portfolio';


/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\bootstrap5\Dropdown;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

?>

<?php

$exp = explode('/', $_SERVER['REQUEST_URI']);
$language = $exp[1]; // first element before / (slash)
$acceptLang = ['uk', 'en'];
if (in_array($language, $acceptLang)) {
    Yii::$app->session->set('language', $language);
    Yii::$app->language = Yii::$app->session->get('language');
} else {
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $lang = in_array($lang, $acceptLang) ? $lang : 'en';
    Yii::$app->language = $_COOKIE['language'] ?? $lang;
    Yii::$app->session->set('language', $_COOKIE['language'] ?? $lang);
}

?>
<main id="main">
    <!-- ======= About Me Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-title">
                <span><?= Yii::t('translations', 'About') ?></span>
                <h2><?= Yii::t('translations', 'About') ?></h2>
                <h4 class="text-uppercase">Front-end Developer</h4>
            </div>

            <div class="row">
                <div class="image mb-3 col-md-6 col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
                <div class="col-md-6 col-lg-8 d-flex flex-column align-items-stretch justify-content-center justify-content-lg-start">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="customPadding">
                                <li>
                                    <i class="fa fa-chevron-right"></i> <strong><?= Yii::t('translations', 'Name') ?>
                                        : </strong><span><?= Yii::t('translations', 'Yelyzaveta') ?> <?= Yii::t('translations', 'Lazarieva') ?> </span>
                                </li>
                                <li>
                                    <i class="fa fa-chevron-right"></i> <strong><?= Yii::t('translations', 'Website') ?>
                                        :</strong> <a href="http://yelyzavetalazarieva.space/"><span>http://yelyzavetalazarieva.space/</span></a></li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto pe-1"><i class="fa fa-chevron-right"></i>
                                            <strong><?= Yii::t('translations', 'Phone') ?>:</strong></div>
                                        <div class="col ps-0"><a href="tel:+380991889215"><span>+380 991 889 215</span></a><br><a
                                                    href="tel:+48695178074"><span>+48 695 178 074</span></a></div>
                                    </div>
                                </li>
                                <li><i class="fa fa-chevron-right"></i> <strong>E-mail:</strong> <a
                                            href="mailto:lazareva15elizaveta@gmail.com"><span>lazareva15elizaveta@gmail.com</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="customPadding">
                                <li><i class="fa fa-chevron-right"></i>
                                    <strong><?= Yii::t('translations', 'Birthday') ?>:</strong> <span>15.02.2002</span>
                                </li>
                                <li><i class="fa fa-chevron-right"></i> <strong><?= Yii::t('translations', 'Age') ?>
                                        :</strong> <span>21</span></li>
                                <li>
                                    <div class="row">
                                        <div class="col-auto pe-1"><i class="fa fa-chevron-right"></i>
                                            <strong><?= Yii::t('translations', 'City') ?>:</strong></div>
                                        <div class="col ps-0">
                                            <span><?= Yii::t('translations', 'Kharkiv, Ukraine') ?><br><?= Yii::t('translations', 'Łódź, Poland') ?></span>
                                        </div>
                                    </div>
                                </li>
                                <li><i class="fa fa-chevron-right"></i>
                                    <strong><?= Yii::t('translations', 'Education') ?>:</strong>
                                    <span><?= Yii::t('translations', 'V.N.Karazin Kharkiv National University') ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="">
                        <h3 class="text-center mb-3"><?= Yii::t('translations', 'My skills') ?></h3>
                        <div class="row skills text-center">
                            <div class="col-sm-3 col-4">
                                <h1><i class="fab fa-html5"></i></h1>
                                <h5>HTML</h5>
                            </div>
                            <div class="col-sm-3 col-4">
                                <h1><i class="fab fa-css3-alt"></i></h1>
                                <h5>CSS</h5>
                            </div>
                            <div class="col-sm-3 col-4">
                                <h1><i class="fab fa-sass"></i></h1>
                                <h5>SASS</h5>
                            </div>
                            <div class="col-sm-3 col-4">
                                <h1><i class="fab fa-bootstrap"></i></h1>
                                <h5>Bootstrap 5</h5>
                            </div>
                            <div class="col-sm-3 col-4">
                                <h1><i class="fab fa-php"></i></h1>
                                <h5>PHP</h5>
                            </div>
                            <div class="col-sm-3 col-4">
                                <h1><i class="fab fa-js"></i></h1>
                                <h5>JavaScript</h5>
                            </div>
                            <div class="col-sm-3 col-4">
                                <div class="" id="yii" style="margin-bottom: 0.5rem;">
                                    <img src="/img/yii2.png" style="margin-top: 0.6em; height: 3em">
                                </div>
                                <h5>Yii2</h5>
                            </div>
                            <div class="col-sm-3 col-4">
                                <h1><i class="fas fa-database"></i></h1>
                                <h5>MySQL</h5>
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
                        <h4><?= Yii::t('translations', 'Yelyzaveta') ?> <?= Yii::t('translations', 'Lazarieva') ?></h4>
                        <p>
                            <em><?= Yii::t('translations', 'I graduated from V.N.Karazin Kharkiv National University. I have one year of commercial experience in Frontend development.') ?></em>
                        </p>
                        <p>
                        <ul>
                            <li><i class="fa fa-chevron-right"></i> <?= Yii::t('translations', 'Kharkiv, Ukraine') ?> / <?= Yii::t('translations', 'Łódź, Poland') ?>
                            </li>
                            <li><i class="fa fa-chevron-right"></i> <a href="tel:+380991889215">+380 991 889 215</a>; <a
                                        href="tel:+48695178074">+48 695 178 074</a></li>
                            <li><i class="fa fa-chevron-right"></i> <a
                                        href="mailto:lazareva15elizaveta@gmail.com"><span>lazareva15elizaveta@gmail.com</span></a>
                            </li>
                        </ul>
                        </p>
                    </div>
                    <h3 class="resume-title"><?= Yii::t('translations', 'Professional Experience') ?></h3>
                    <div class="resume-item">
                        <h4>Front-End Developer</h4>
                        <h5><?= Yii::t('translations', 'June 2022 - June 2023') ?></h5>
                        <p><em><?= Yii::t('translations', 'VESCOM, Łódź, Poland') ?></em></p>
                        <p>
                        <ul>
                            <li>
                                <i class="fa fa-chevron-right"></i> <?= Yii::t('translations', 'Update legacy project to Bootstrap5') ?>
                            </li>
                            <li>
                                <i class="fa fa-chevron-right"></i> <?= Yii::t('translations', 'Make layouts responsive') ?>
                            </li>
                            <li>
                                <i class="fa fa-chevron-right"></i> <?= Yii::t('translations', 'Work with YII2, Angular and .net frameworks') ?>
                            </li>
                            <li>
                                <i class="fa fa-chevron-right"></i> <?= Yii::t('translations', 'Work with database (SQL)') ?>
                            </li>
                        </ul>
                        </p>
                    </div>

                </div>
                <div class="col-lg-6">
                    <h3 class="resume-title"><?= Yii::t('translations', 'Education') ?></h3>
                    <div class="resume-item">
                        <h4><?= Yii::t('translations', 'V.N.Karazin Kharkiv National University') ?></h4>
                        <h5>2019 - 2023</h5>
                        <p><em><?= Yii::t('translations', 'Faculty of Computer Science') ?>
                                , <?= Yii::t('translations', 'Speciality: Cyber-security') ?></em></p>
                    </div>
                    <div class="resume-item">
                        <h4><?= Yii::t('translations', 'University of Łódź') ?></h4>
                        <h5>2022</h5>
                        <p><em><?= Yii::t('translations', 'Faculty of Computer Science') ?></em></p>
                        <p><?= Yii::t('translations', 'I studied at the University of Łódź as a mobility student for one semester. Taken courses:') ?></p>
                        <ul>
                            <li><i class="fa fa-chevron-right"></i> Database Systems</li>
                            <li><i class="fa fa-chevron-right"></i> Design Interfaces</li>
                            <li><i class="fa fa-chevron-right"></i> Programming and Data Structures</li>
                            <li><i class="fa fa-chevron-right"></i> Software Engineering</li>
                            <li><i class="fa fa-chevron-right"></i> Architecture of Computer Systems</li>
                            <li><i class="fa fa-chevron-right"></i> Computer Networks</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End My Resume Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
        <div class="container">
            <div class="section-title">
                <span><?= Yii::t('translations', 'Random facts') ?></span>
                <h2><?= Yii::t('translations', 'Random facts') ?></h2>
            </div>


            <div class="row">
                <div class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
                <div class="row m-0">
                    <div class="col-xs-12 col-md-6 mb-4">

                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <ol class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                        aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                                        aria-label="Slide 5"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                                        aria-label="Slide 6"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"
                                        aria-label="Slide 7"></button>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/plants1.jpg" class="d-block w-100" alt="plants">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/guitar.jpg" class="d-block w-100" alt="guitar">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/languages.jpg" class="d-block w-100" alt="languages">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/tea.jpg" class="d-block w-100" alt="tea">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/cat.jpg" class="d-block w-100" alt="cat">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/winner.jpg" class="d-block w-100" alt="competition">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/soup.jpg" class="d-block w-100" alt="soup">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>

                        </div>

                    </div>
                    <div class="col-xs-12 col-md-6">
                        <ul class="mx-auto customPadding">
                            <li>
                                <i class="fa fa-chevron-right"></i> <?= Yii::t('translations', 'I am addicted to plants') ?>
                            </li>
                            <li>
                                <i class="fa fa-chevron-right"></i> <?= Yii::t('translations', 'I play guitar and piano') ?>
                            </li>
                            <li>
                                <i class="fa fa-chevron-right"></i> <?= Yii::t('translations', 'I studied 6 languages (although some of them remained at the elementary level)') ?>
                            </li>
                            <li>
                                <i class="fa fa-chevron-right"></i> <?= Yii::t('translations', 'I drink a looooot of tea') ?>
                            </li>
                            <li>
                                <i class="fa fa-chevron-right"></i> <?= Yii::t('translations', 'I dream of having a cat') ?>
                            </li>
                            <li>
                                <i class="fa fa-chevron-right"></i> <?= Yii::t('translations', 'In 2021 I won an award from \'She is Science\' for the best essay about female scientist') ?>
                            </li>
                            <li>
                                <i class="fa fa-chevron-right"></i> <?= Yii::t('translations', 'I enjoy cooking, especially soups') ?>
                            </li>

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

            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item">
                    <ul class="box-container m-auto p-3">
                        <li class="box">
                            <div class="portfolio-img">
                                <a href="/img/portfolio/portfolio-1.jpg" class="glightbox2"
                                   data-glightbox="title: <?= Yii::t('translations', 'Portfolio') ?>; description: .custom-desc1; descPosition: left;">
                                    <img src="/img/portfolio/portfolio-1.jpg" alt="image"/>
                                </a>
                                <div class="glightbox-desc custom-desc1">
                                    <p>
                                        <a href="#" target="_blank"
                                           style="text-decoration: underline; font-weight: bold"><?= Yii::t('translations', 'Portfolio') ?> </a>
                                        <?= Yii::t('translations', 'is written using Yii2, bootstrap5 and SASS.') ?>
                                    </p>
                                    <p>
                                        <?= Yii::t('translations', 'This site demonstrates the skills I possess. To a greater extent, the emphasis is on Yii2 and Bootstrap5. Also presented on the site:') ?>
                                    </p>
                                    <ul style="list-style: circle">
                                        <li>
                                            <?= Yii::t('translations', 'Image Gallery (Lightbox)') ?>
                                        </li>
                                        <li>
                                            <?= Yii::t('translations', 'Contact form') ?>
                                        </li>
                                        <li>
                                            <?= Yii::t('translations', 'Moreover it is possible to change the language (by default, the language is selected according to the settings of your browser)') ?>
                                        </li>
                                    </ul>
                                    <p>
                                        <?= Yii::t('translations', 'Source code could be found on GitHub.') ?>
                                        <a href="https://github.com/Elizabeth5335/Portfolio" target="_blank"
                                           style="text-decoration: underline; font-weight: bold"><br><?= Yii::t('translations', 'Link to Repo') ?>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h4><?= Yii::t('translations', 'Portfolio') ?></h4>
                                <p><?= Yii::t('translations', 'Made with Yii2') ?> </p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item">
                    <ul class="box-container m-auto p-3">
                        <li class="box">
                            <div class="portfolio-img">
                                <a href="/img/portfolio/portfolio-4.jpg" class="glightbox2"
                                   data-glightbox="title: Gamesss ; description: .custom-desc4; descPosition: left;">
                                    <img src="/img/portfolio/portfolio-4.jpg" alt="image"/>
                                </a>
                                <div class="glightbox-desc custom-desc4">
                                    <p>
                                        <a href="https://elizabeth5335.github.io/Games/index.html" target="_blank"
                                           style="text-decoration: underline; font-weight: bold">Gamesss </a>
                                        <?= Yii::t('translations', 'is a project for practicing the use of JavaScript.') ?>
                                    </p>
                                    <p>
                                        <?= Yii::t('translations', 'It is a website with three games. It was written using HTML, CSS and a looooot of JavaScript.') ?>
                                    </p>
                                    <p>
                                        <?= Yii::t('translations', 'Initially, the website was supposed to be only for desktops. However in the end I decided to make it mobile friendly as well :)') ?>
                                    </p>
                                    <p>
                                        <?= Yii::t('translations', 'It was hosted on GitHub Pages.') ?>
                                        <a href="https://github.com/Elizabeth5335/Games" target="_blank"
                                           style="text-decoration: underline; font-weight: bold"><br><?= Yii::t('translations', 'Link to Repo') ?>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h4>Gamesss</h4>
                                <p><?= Yii::t('translations', 'Made with JavaScript') ?></p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item">
                    <ul class="box-container m-auto p-3">
                        <li class="box">
                            <div class="portfolio-img">
                                <a href="/img/portfolio/portfolio-5.jpg" class="glightbox2"
                                   data-glightbox="title: Currency converter ; description: .custom-desc5; descPosition: left;">
                                    <img src="/img/portfolio/portfolio-5.jpg" alt="image"/>
                                </a>
                                <div class="glightbox-desc custom-desc5">
                                    <p>
                                        <a href="https://elizabeth5335.github.io/exchange/" target="_blank"
                                           style="text-decoration: underline; font-weight: bold">Currency converter</a>
                                        <?= Yii::t('translations', 'is a project for practicing the use of Angular.') ?>
                                    </p>
                                    <p>
                                        <?= Yii::t('translations', 'It is a website that converts one currency into another. It was written using Angular.') ?>
                                    </p>
                                    <p>
                                        <?= Yii::t('translations', 'For this website, I used an open API to get the current exchange rate for EUR, USD, UAH and PLN.') ?>
                                    </p>
                                    <p>
                                        <?= Yii::t('translations', 'It was hosted on GitHub Pages.') ?>
                                        <a href="https://github.com/Elizabeth5335/exchange" target="_blank"
                                           style="text-decoration: underline; font-weight: bold"><br><?= Yii::t('translations', 'Link to Repo') ?>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h4>Currency converter</h4>
                                <p><?= Yii::t('translations', 'Made with Angular') ?></p>
                            </div>
                        </li>
                    </ul>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item">
                    <ul class="box-container m-auto p-3">
                        <li class="box">
                            <div class="portfolio-img">
                                <a href="/img/portfolio/portfolio-2.jpg" class="glightbox2"
                                   data-glightbox="title: <?= Yii::t('translations', 'First Resume') ?> ; description: .custom-desc2; descPosition: left;">
                                    <img src="/img/portfolio/portfolio-2.jpg" alt="image"/>
                                </a>
                                <div class="glightbox-desc custom-desc2">
                                    <p>
                                        <a href="https://elizabeth5335.github.io/Resume/" target="_blank"
                                           style="text-decoration: underline; font-weight: bold"><?= Yii::t('translations', 'First Resume') ?> </a>
                                        <?= Yii::t('translations', 'was a kind of test project to show my bootstrap 5 skills.') ?>
                                    </p>
                                    <p>
                                        <?= Yii::t('translations', 'It is a one-page website with adaptive layout. It was written using HTML (bootstrap 5), CSS and some JavaScript for animations.') ?>
                                    </p>
                                    <p>
                                        <?= Yii::t('translations', 'The aim of this project was to show my ability to work with bootstrap 5: create responsive tables, long descriptions, images and so on.') ?>
                                    </p>
                                    <p>
                                        <?= Yii::t('translations', 'It was hosted on GitHub Pages.') ?>
                                        <a href="https://github.com/Elizabeth5335/Resume" target="_blank"
                                           style="text-decoration: underline; font-weight: bold"><br><?= Yii::t('translations', 'Link to Repo') ?>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h4><?= Yii::t('translations', 'First Resume') ?></h4>
                                <p><?= Yii::t('translations', 'Made with bootstrap 5') ?></p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item">
                    <ul class="box-container m-auto p-3">
                        <li class="box">
                            <div class="portfolio-img">
                                <a href="/img/portfolio/portfolio-3.jpg" class="glightbox2"
                                   data-glightbox="title: <?= Yii::t('translations', 'Building Materials') ?>; description: .custom-desc3; descPosition: left;">
                                    <img src="/img/portfolio/portfolio-3.jpg" alt="image"/>
                                </a>
                                <div class="glightbox-desc custom-desc3">
                                    <p>
                                        <a href="https://elizabeth5335.github.io/Budmaterialy/" target="_blank"
                                           style="text-decoration: underline; font-weight: bold"><?= Yii::t('translations', 'Building Materials') ?> </a>
                                        <?= Yii::t('translations', 'was my first attempt to create a web page.') ?>
                                    </p>
                                    <p>
                                        <?= Yii::t('translations', 'It is a one-page website with adaptive layout. It was written without any frameworks - using bare HTML and CSS. Some JavaScript fragments were used to create responsive navigation and a "scroll to top" button.') ?>
                                    </p>
                                    <p>
                                        <?= Yii::t('translations', 'It was hosted on GitHub Pages.') ?>
                                        <a href="https://github.com/Elizabeth5335/Budmaterialy" target="_blank"
                                           style="text-decoration: underline; font-weight: bold"><br><?= Yii::t('translations', 'Link to Repo') ?>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h4><?= Yii::t('translations', 'Building materials - online shop') ?></h4>
                                <p><?= Yii::t('translations', 'My first page ever') ?></p>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

            <script src="js/js/valde.min.js"></script>
            <script src="js/js/glightbox.js"></script>
            <script src="js/js/site.js"></script>
            <script>
                var lightboxDescription = GLightbox({
                    selector: '.glightbox2'
                });
            </script>
    </section>

    <!-- ======= Contact Section ======= -->
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
                                <i class="fas fa-share-alt"></i>
                                <h3><?= Yii::t('translations', 'Social Profiles') ?></h3>
                                <div class="social-links">
                                    <a href="https://www.facebook.com/profile.php?id=100046831201474"
                                       class="facebook"><i class="fab fa-facebook"></i></a>
                                    <a href="https://instagram.com/eli_che_va?igshid=YmMyMTA2M2Y=" class="instagram"><i
                                                class="fab fa-instagram"></i></a>
                                    <a href="https://www.linkedin.com/in/yelyzaveta-lazarieva-876047235"
                                       class="linkedin"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="fas fa-envelope"></i>
                                <h3>E-mail</h3>
                                <p><a href="mailto:lazareva15elizaveta@gmail.com"><br>lazareva15elizaveta@gmail.com</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="fas fa-phone-alt"></i>
                                <h3><?= Yii::t('translations', 'Phone') ?></h3>
                                <p><a href="tel:+380991889215">+380 991 889 215</a><br><a href="tel:+48695178074">+48 695 178
                                        074</a></p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6" style="max-height: 395px;">
                    <script>
                        // JavaScript code
                        function refreshPage() {
                            location.reload(); // Reloads the current page
                        }
                    </script>

                    <?php if (Yii::$app->session->hasFlash('error')): ?>
                        <div class="php-email-form" style="height: 100%; text-align: center">

                            <img class="img-fluid" style="max-height: 75%;" src="/img/error.jpg">
                            <div class="my-2">
                                <?= Yii::t('translations', 'Something went wrong! Try again.') ?>
                            </div>

                            <div class="text-center mb-3">
                                <div class="form-group col-lg-offset-1 col-lg-11">
                                    <button class="btn btn-primary" type="submit"
                                            onclick="refreshPage()"><?= Yii::t('translations', 'Try again') ?></button>
                                </div>
                            </div>
                        </div>

                    <?php elseif (Yii::$app->session->hasFlash('success')): ?>
                        <div class="php-email-form" style="height: 100%; text-align: center">

                            <img class="img-fluid" style="max-height: 75%;" src="/img/success.jpg">
                            <div class="my-2">
                                <?= Yii::t('translations', 'Your message has been sent! I will respond to you as soon as possible.') ?>
                            </div>

                            <div class="text-center mb-3">
                                <div class="form-group col-lg-offset-1 col-lg-11">
                                    <button class="btn btn-primary" type="submit"
                                            onclick="refreshPage()"><?= Yii::t('translations', 'Send one more') ?></button>
                                </div>
                            </div>
                        </div>


                    <?php else: ?>

                        <?php
                        $model = new \app\models\ContactForm();
                        $form = ActiveForm::begin([
                            'id' => 'my-form',
                            'options' => ['class' => 'php-email-form'],
                            'action' => ['site/contact'],
                            'method' => 'post',
                        ]) ?>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <?= $form->field($model, 'name')->label(false)->textInput(['placeholder' => Yii::t('translations', 'Your name')]) ?>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <?= $form->field($model, 'email')->label(false)->input('email', ['placeholder' => Yii::t('translations', 'Email')]) ?>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <?= $form->field($model, 'subject')->label(false)->textInput(['placeholder' => Yii::t('translations', 'Subject')]) ?>
                        </div>
                        <div class="form-group mt-3">
                            <?= $form->field($model, 'message')->label(false)->textarea(['rows' => 6, 'placeholder' => Yii::t('translations', 'Message')]) ?>
                        </div>
                        <div class="text-center my-3">
                            <div class="form-group col-lg-offset-1 col-lg-11">
                                <?= Html::submitButton(Yii::t('translations', 'Send Message'), ['class' => 'btn btn-primary']) ?>
                            </div>
                        </div>
                        <?php ActiveForm::end() ?>
                    <?php endif; ?>


                </div>
            </div>

        </div>
    </section>

</main>

