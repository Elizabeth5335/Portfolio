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

?>

<?php

$exp = explode('/',$_SERVER['REQUEST_URI']);
$language = $exp[1]; // first element before / (slash)
Yii::$app->language=Yii::$app->session->get('language');
Yii::$app->session->set('language',$language);
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
                                    <li><i class="fa fa-chevron-right"></i> <strong><?= Yii::t('translations', 'Name') ?>:</strong> <span><?= Yii::t('translations', 'Yelyzaveta') ?> <?= Yii::t('translations', 'Lazarieva') ?> </span></li>
                                    <li><i class="fa fa-chevron-right"></i> <strong><?= Yii::t('translations', 'Website') ?>:</strong> <a href="#" ><span>www.example.com</span></a></li>
                                    <li><i class="fa fa-chevron-right"></i> <strong><?= Yii::t('translations', 'Phone') ?>:</strong> <a href="tel:+380991889215"><span>+380 991 889 215</span></a></li>
                                    <li><i class="fa fa-chevron-right"></i> <strong><?= Yii::t('translations', 'City') ?>:</strong> <span><?= Yii::t('translations', 'Kharkiv, Ukraine') ?></span></li>
                                </ul>
                            </div>
                        <div class="col-lg-6">
                                <ul class="customPadding">
                                    <li><i class="fa fa-chevron-right"></i> <strong><?= Yii::t('translations', 'Birthday') ?>:</strong> <span>15.02.2002</span></li>
                                    <li><i class="fa fa-chevron-right"></i> <strong><?= Yii::t('translations', 'Age') ?>:</strong> <span>20</span></li>
                                    <li><i class="fa fa-chevron-right"></i> <strong>E-mail:</strong> <a href="mailto:lazareva15elizaveta@gmail.com"><span>lazareva15elizaveta@gmail.com</span></a></li>
                                    <li><i class="fa fa-chevron-right"></i> <strong><?= Yii::t('translations', 'Education') ?>:</strong> <span><?= Yii::t('translations', 'Karazin') ?></span></li>
                                </ul>
                            </div>
                    </div>

                    <div class="">
                        <h3 class="text-center mb-3"><?= Yii::t('translations', 'My skills') ?></h3>
                        <div class="row skills text-center">
                            <div class="col-sm-3 col-4">
                                <h1> <i class="fab fa-html5"></i></h1>
                                <h5>HTML</h5>
                            </div>
                            <div class="col-sm-3 col-4">
                                <h1> <i class="fab fa-css3-alt"></i></h1>
                                <h5>CSS</h5>
                            </div><div class="col-sm-3 col-4">
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
                                <div class="mb-3" id="yii"></div>
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

<!--            <div class="skills-content ps-lg-4">-->
<!--                <div class="progress">-->
<!--                    <span class="skill"><i class="fab fa-html5"></i>HTML <i class="val">80%</i></span>-->
<!--                    <div class="progress-bar-wrap">-->
<!--                        <div class="progress-bar w-80" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="progress">-->
<!--                    <span class="skill"><i class="fab fa-css3-alt"></i>   <i class="fab fa-sass"></i>   CSS, SASS <i class="val">70%</i></span>-->
<!--                    <div class="progress-bar-wrap">-->
<!--                        <div class="progress-bar w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="progress">-->
<!--                    <span class="skill"><i class="fab fa-php"></i>  PHP <i class="val">25%</i></span>-->
<!--                    <div class="progress-bar-wrap">-->
<!--                        <div class="progress-bar w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="progress">-->
<!--                    <span class="skill"><i class="fab fa-js"></i>  JavaScript <i class="val">15%</i></span>-->
<!--                    <div class="progress-bar-wrap">-->
<!--                        <div class="progress-bar w-15" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="progress">-->
<!--                    <span class="skill"><i class="fab fa-bootstrap"></i> Bootstrap <i class="val">98%</i></span>-->
<!--                    <div class="progress-bar-wrap">-->
<!--                        <div class="progress-bar w-98" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="progress">-->
<!--                    <span class="skill">Yii2 Framework <i class="val">50%</i></span>-->
<!--                    <div class="progress-bar-wrap">-->
<!--                        <div class="progress-bar w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

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
                        <p><em>Наразі я студентка четвертого курсу. Маю досвід роботи в якості Front-End розробника.</em></p>
                        <p>
                        <ul>
                            <li><i class="fa fa-chevron-right"></i> <?= Yii::t('translations', 'Kharkiv, Ukraine') ?></li>
                            <li><i class="fa fa-chevron-right"></i> <a href="tel:+380991889215">+380 991 889 215</a></li>
                            <li><i class="fa fa-chevron-right"></i> <a href="mailto:lazareva15elizaveta@gmail.com"><span>lazareva15elizaveta@gmail.com</span></a></li>
                        </ul>
                        </p>
                    </div>
                    <h3 class="resume-title"><?= Yii::t('translations', 'Professional Experience') ?></h3>
                    <div class="resume-item">
                        <h4>Front-End Developer</h4>
                        <h5><?= Yii::t('translations', 'June 2022 - Present') ?></h5>
                        <p><em><?= Yii::t('translations', 'VESCOM, Łódź, Poland') ?></em></p>
                        <p>
                        <ul>
                            <li><i class="fa fa-chevron-right"></i> <?= Yii::t('translations', 'Update legacy project to Bootstrap5') ?></li>
                            <li><i class="fa fa-chevron-right"></i> <?= Yii::t('translations', 'Make layouts responsive') ?></li>
                            <li><i class="fa fa-chevron-right"></i> <?= Yii::t('translations', 'Create new webpages using YII2 framework') ?></li>
                            <li><i class="fa fa-chevron-right"></i> <?= Yii::t('translations', 'Work with database (SQL)') ?></li>
                        </ul>
                        </p>
                    </div>

                </div>
                <div class="col-lg-6">
                    <h3 class="resume-title"><?= Yii::t('translations', 'Education') ?></h3>
                    <div class="resume-item">
                        <h4><?= Yii::t('translations', 'V.N.Karazin') ?></h4>
                        <h5>2019 - 2023</h5>
                        <p><em><?= Yii::t('translations', 'Faculty') ?>, <?= Yii::t('translations', 'Speciality') ?></em></p>
                    </div>
                    <div class="resume-item">
                        <h4><?= Yii::t('translations', 'University of Łódź') ?></h4>
                        <h5>2022</h5>
                        <p><em><?= Yii::t('translations', 'Faculty') ?></em></p>
                        <p><?= Yii::t('translations', 'uni description') ?></p>
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
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
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
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>

                        </div>

                    </div>
                    <div class="col-xs-12 col-md-6">
                        <ul class="mx-auto customPadding">
                            <li><i class="fa fa-chevron-right"></i> <?= Yii::t('translations', 'I am addicted to plants') ?></li>
                            <li><i class="fa fa-chevron-right"></i> <?= Yii::t('translations', 'I play guitar and piano') ?></li>
                            <li><i class="fa fa-chevron-right"></i> <?= Yii::t('translations', 'I started to learn 7 languages, but speak 4.5') ?></li>
                            <li><i class="fa fa-chevron-right"></i> <?= Yii::t('translations', 'I drink a looooot of tea') ?></li>
                            <li><i class="fa fa-chevron-right"></i> <?= Yii::t('translations', 'I dream of having a cat') ?></li>
                            <li><i class="fa fa-chevron-right"></i> <?= Yii::t('translations', 'In 2021 I won an award from \'She is Science\' for the best essay about female scientist') ?></li>
                            <li><i class="fa fa-chevron-right"></i> <?= Yii::t('translations', 'I enjoy cooking, especially soups') ?></li>

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
                    <ul class="box-container">
                        <li class="box">
                            <div class="portfolio-img">
                                <a href="/img/portfolio/portfolio-1.jpg" class="glightbox2" data-glightbox="title: My Title; description: .custom-desc1; descPosition: left;">
                                    <img src="/img/portfolio/portfolio-1.jpg" alt="image" />
                                </a>
                                <div class="glightbox-desc custom-desc1">
                                    <p>
                                        You can set the position of the description in different ways for example
                                        <strong style="text-decoration: underline">top, bottom, left or right</strong>
                                    </p>
                                    <p>
                                        <a href="budmaterialy" target="_blank" style="text-decoration: underline; font-weight: bold">Example Google link</a>
                                        ipsum vehicula eros ultrices lacinia Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Duis quis ipsum vehicula eros ultrices lacinia.
                                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                    </p>
                                    <p>
                                        Primis pharetra facilisis lorem quis penatibus ad nulla inceptos, dui per tempor taciti aliquet consequat sodales, curae tristique gravida auctor interdum malesuada sagittis.
                                        Felis pretium eros ligula natoque ad ante rutrum himenaeos, adipiscing urna mauris porta quam efficitur odio, sagittis morbi tellus nisi molestie mus faucibus.
                                    </p>
                                    <p>
                                        Primis pharetra facilisis lorem quis penatibus ad nulla inceptos, dui per tempor taciti aliquet consequat sodales, curae tristique gravida auctor interdum malesuada sagittis.
                                        Felis pretium eros ligula natoque ad ante rutrum himenaeos, adipiscing urna mauris porta quam efficitur odio, sagittis morbi tellus nisi molestie mus faucibus.
                                    </p>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>App</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item">
                    <ul class="box-container">
                        <li class="box">
                            <div class="portfolio-img">
                                <a href="/img/portfolio/portfolio-2.jpg" class="glightbox2" data-glightbox="title: My Title; description: .custom-desc1; descPosition: left;">
                                    <img src="/img/portfolio/portfolio-2.jpg" alt="image" />
                                </a>
                                <div class="glightbox-desc custom-desc1">
                                    <p>
                                        You can set the position of the description in different ways for example
                                        <strong style="text-decoration: underline">top, bottom, left or right</strong>
                                    </p>
                                    <p>
                                        <a href="budmaterialy" target="_blank" style="text-decoration: underline; font-weight: bold">Example Google link</a>
                                        ipsum vehicula eros ultrices lacinia Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Duis quis ipsum vehicula eros ultrices lacinia.
                                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                    </p>
                                    <p>
                                        Primis pharetra facilisis lorem quis penatibus ad nulla inceptos, dui per tempor taciti aliquet consequat sodales, curae tristique gravida auctor interdum malesuada sagittis.
                                        Felis pretium eros ligula natoque ad ante rutrum himenaeos, adipiscing urna mauris porta quam efficitur odio, sagittis morbi tellus nisi molestie mus faucibus.
                                    </p>
                                    <p>
                                        Primis pharetra facilisis lorem quis penatibus ad nulla inceptos, dui per tempor taciti aliquet consequat sodales, curae tristique gravida auctor interdum malesuada sagittis.
                                        Felis pretium eros ligula natoque ad ante rutrum himenaeos, adipiscing urna mauris porta quam efficitur odio, sagittis morbi tellus nisi molestie mus faucibus.
                                    </p>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>App</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item">
                    <ul class="box-container">
                        <li class="box">
                            <div class="portfolio-img">
                                <a href="/img/portfolio/portfolio-3.jpg" class="glightbox2" data-glightbox="title: My Title; description: .custom-desc1; descPosition: left;">
                                    <img src="/img/portfolio/portfolio-3.jpg" alt="image" />
                                </a>
                                <div class="glightbox-desc custom-desc1">
                                    <p>
                                        You can set the position of the description in different ways for example
                                        <strong style="text-decoration: underline">top, bottom, left or right</strong>
                                    </p>
                                    <p>
                                        <a href="budmaterialy" target="_blank" style="text-decoration: underline; font-weight: bold">Example Google link</a>
                                        ipsum vehicula eros ultrices lacinia Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Duis quis ipsum vehicula eros ultrices lacinia.
                                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                    </p>
                                    <p>
                                        Primis pharetra facilisis lorem quis penatibus ad nulla inceptos, dui per tempor taciti aliquet consequat sodales, curae tristique gravida auctor interdum malesuada sagittis.
                                        Felis pretium eros ligula natoque ad ante rutrum himenaeos, adipiscing urna mauris porta quam efficitur odio, sagittis morbi tellus nisi molestie mus faucibus.
                                    </p>
                                    <p>
                                        Primis pharetra facilisis lorem quis penatibus ad nulla inceptos, dui per tempor taciti aliquet consequat sodales, curae tristique gravida auctor interdum malesuada sagittis.
                                        Felis pretium eros ligula natoque ad ante rutrum himenaeos, adipiscing urna mauris porta quam efficitur odio, sagittis morbi tellus nisi molestie mus faucibus.
                                    </p>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>App</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item">
                    <ul class="box-container">
                        <li class="box">
                            <div class="portfolio-img">
                                <a href="/img/portfolio/portfolio-4.jpg" class="glightbox2" data-glightbox="title: My Title; description: .custom-desc1; descPosition: left;">
                                    <img src="/img/portfolio/portfolio-4.jpg" alt="image" />
                                </a>
                                <div class="glightbox-desc custom-desc1">
                                    <p>
                                        You can set the position of the description in different ways for example
                                        <strong style="text-decoration: underline">top, bottom, left or right</strong>
                                    </p>
                                    <p>
                                        <a href="budmaterialy" target="_blank" style="text-decoration: underline; font-weight: bold">Example Google link</a>
                                        ipsum vehicula eros ultrices lacinia Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Duis quis ipsum vehicula eros ultrices lacinia.
                                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                    </p>
                                    <p>
                                        Primis pharetra facilisis lorem quis penatibus ad nulla inceptos, dui per tempor taciti aliquet consequat sodales, curae tristique gravida auctor interdum malesuada sagittis.
                                        Felis pretium eros ligula natoque ad ante rutrum himenaeos, adipiscing urna mauris porta quam efficitur odio, sagittis morbi tellus nisi molestie mus faucibus.
                                    </p>
                                    <p>
                                        Primis pharetra facilisis lorem quis penatibus ad nulla inceptos, dui per tempor taciti aliquet consequat sodales, curae tristique gravida auctor interdum malesuada sagittis.
                                        Felis pretium eros ligula natoque ad ante rutrum himenaeos, adipiscing urna mauris porta quam efficitur odio, sagittis morbi tellus nisi molestie mus faucibus.
                                    </p>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>App</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item">
                    <ul class="box-container">
                        <li class="box">
                            <div class="portfolio-img">
                                <a href="/img/portfolio/portfolio-5.jpg" class="glightbox2" data-glightbox="title: My Title; description: .custom-desc1; descPosition: left;">
                                    <img src="/img/portfolio/portfolio-5.jpg" alt="image" />
                                </a>
                                <div class="glightbox-desc custom-desc1">
                                    <p>
                                        You can set the position of the description in different ways for example
                                        <strong style="text-decoration: underline">top, bottom, left or right</strong>
                                    </p>
                                    <p>
                                        <a href="budmaterialy" target="_blank" style="text-decoration: underline; font-weight: bold">Example Google link</a>
                                        ipsum vehicula eros ultrices lacinia Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Duis quis ipsum vehicula eros ultrices lacinia.
                                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                    </p>
                                    <p>
                                        Primis pharetra facilisis lorem quis penatibus ad nulla inceptos, dui per tempor taciti aliquet consequat sodales, curae tristique gravida auctor interdum malesuada sagittis.
                                        Felis pretium eros ligula natoque ad ante rutrum himenaeos, adipiscing urna mauris porta quam efficitur odio, sagittis morbi tellus nisi molestie mus faucibus.
                                    </p>
                                    <p>
                                        Primis pharetra facilisis lorem quis penatibus ad nulla inceptos, dui per tempor taciti aliquet consequat sodales, curae tristique gravida auctor interdum malesuada sagittis.
                                        Felis pretium eros ligula natoque ad ante rutrum himenaeos, adipiscing urna mauris porta quam efficitur odio, sagittis morbi tellus nisi molestie mus faucibus.
                                    </p>
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>App</p>
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
                                <i class="fas fa-share-alt"></i>
                                <h3><?= Yii::t('translations', 'Social Profiles') ?></h3>
                                <div class="social-links">
                                    <a href="https://www.facebook.com/profile.php?id=100046831201474" class="facebook"><i class="fab fa-facebook"></i></a>
                                    <a href="https://instagram.com/eli_che_va?igshid=YmMyMTA2M2Y=" class="instagram"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.linkedin.com/in/yelyzaveta-lazarieva-876047235" class="linkedin"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="fas fa-envelope"></i>
                                <h3>E-mail</h3>
                                <p><a href="mailto:lazareva15elizaveta@gmail.com">lazareva15elizaveta@gmail.com</a> </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="fas fa-phone-alt"></i>
                                <h3><?= Yii::t('translations', 'Phone') ?></h3>
                                <p><a href="+380991889215">+380 991 889 215</a></p>
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

