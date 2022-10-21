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

//$exp = explode('/',$_SERVER['REQUEST_URI']);
//$language = $exp[1]; // first element before / (slash)
Yii::$app->language=Yii::$app->session->get('language');
//Yii::$app->session->set('language',$language);

?>
<main id="main">
    <!-- ======= About Me Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <span><?= Yii::t('translations', 'About') ?></span>
                <h2><?= Yii::t('translations', 'About') ?></h2>
                <h4>Junior Front-end Developer</h4>
            </div>

            <div class="row">
                <div class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
                <div class="col-lg-8 d-flex flex-column align-items-stretch">
                    <div class="content ps-lg-4 d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="fa fa-chevron-right"></i> <strong><?= Yii::t('translations', 'Name') ?>:</strong> <span><?= Yii::t('translations', 'Yelyzaveta') ?> <?= Yii::t('translations', 'Lazarieva') ?> </span></li>
                                    <li><i class="fa fa-chevron-right"></i> <strong><?= Yii::t('translations', 'Website') ?>:</strong> <a href="#" ><span>www.example.com</span></a></li>
                                    <li><i class="fa fa-chevron-right"></i> <strong><?= Yii::t('translations', 'Phone') ?>:</strong> <a href="tel:+380991889215"><span>+380 991 889 215</span></a></li>
                                    <li><i class="fa fa-chevron-right"></i> <strong><?= Yii::t('translations', 'City') ?>:</strong> <span><?= Yii::t('translations', 'Kharkiv, Ukraine') ?></span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="fa fa-chevron-right"></i> <strong><?= Yii::t('translations', 'Birthday') ?>:</strong> <span>15.02.2002</span></li>
                                    <li><i class="fa fa-chevron-right"></i> <strong><?= Yii::t('translations', 'Age') ?>:</strong> <span>20</span></li>
                                    <li><i class="fa fa-chevron-right"></i> <strong>E-mail:</strong> <a href="mailto:lazareva15elizaveta@gmail.com"><span>lazareva15elizaveta@gmail.com</span></a></li>
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
                                <i class="fa fa-share-alt"></i>
                                <h3>Social Profiles</h3>
                                <div class="social-links">
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="fa fa-envelope"></i>
                                <h3>Email Me</h3>
                                <p>contact@example.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="fa fa-phone"></i>
                                <h3>Call Me</h3>
                                <p>+380991889215</p>
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

