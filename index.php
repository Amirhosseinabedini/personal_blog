<?php
// session_start();
require_once('connector/MysqliDb.php');
require_once('connector/cn.php');

// Start a Session
if (!session_id()) @session_start();


$basics = $db->getOne('basics_eng');
$exp = $db->getOne('Experience');
$db->where('status', 1);
$skills = $db->get('skills');
$db->where('status', 1);
$education = $db->get('education');
$db->where('status', 1);
$Certificates = $db->get('Certificates');
?>

<!DOCTYPE html>
<html class="no-js vlt-is--homepage vlt-is--footer-fixed" lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $basics["title"]; ?></title>
    <meta name="description" content="Personal Page">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="icon" type="image/svg" href="assets/img/root/<?php echo $basics["faveicon"]; ?>">

    <link rel="stylesheet" href="assets/css/framework/bootstrap.min.css">

    <link rel="stylesheet" href="assets/fonts/Gilroy/style.css">

    <link rel="stylesheet" href="assets/fonts/LineIcons/Pro-Regular/font-css/LineIcons.css">

    <link rel="stylesheet" href="assets/css/vlt-plugins.min.css">

    <link rel="stylesheet" href="assets/css/vlt-main.min.css">

    <!-- <link rel="stylesheet" href="assets/css/custom.css"> -->
</head>

<body class=" animsition">

    <header class="vlt-header vlt-header--default">
        <div class="vlt-navbar vlt-navbar--main vlt-navbar--transparent vlt-navbar--sticky">
            <div class="vlt-navbar-background"></div>
            <div class="vlt-navbar-inner">
                <div class="vlt-navbar-inner--left">
                    <a class="vlt-navbar-logo" href="index.html"><img src="assets/img/root/<?php echo $basics["logo_pic"]; ?>" alt="Amir"></a>
                </div>
                <div class="vlt-navbar-inner--center">
                    <div class="container">
                        <nav class="vlt-default-menu__navigation">

                            <ul class="sf-menu">
                                <li data-menuanchor="Home"><a href="#Home">Home</a>
                                </li>
                                <li data-menuanchor="About"><a href="#About">About</a>
                                </li>
                                <li data-menuanchor="Projects"><a href="#Projects">Projects</a>
                                </li>
                                <li data-menuanchor="Education"><a href="#Education">Education</a>
                                </li>
                                <!-- <li data-menuanchor="WORK_EXPERIENCES"><a href="#WORK_EXPERIENCES">WORK EXPERIENCES</a>
                                </li> -->
                                <li data-menuanchor="Testimonials"><a href="#Testimonials">Testimonials</a>
                                </li>
                                <!-- <li data-menuanchor="Partners"><a href="#Partners">Partners</a>
                                </li> -->
                                <li data-menuanchor="Blog"><a href="#Blog">Blog</a>
                                </li>
                                <li data-menuanchor="Contact"><a href="#Contact">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="vlt-navbar-inner--right">
                    <div class="d-flex align-items-center">

                        <div class="vlt-navbar-contacts"><a href="<?php echo $basics["tel"]; ?>"><?php echo $basics["tel"]; ?></a></div>
                        <a class="vlt-menu-burger js-offcanvas-menu-open" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="square" stroke-linejoin="round">
                                <line x1="3" y1="12" x2="21" y2="12" />
                                <line x1="3" y1="6" x2="21" y2="6" />
                                <line x1="3" y1="18" x2="21" y2="18" />
                            </svg></a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="vlt-offcanvas-menu">
        <div class="vlt-offcanvas-menu__header">

            <div class="vlt-language-switcher"><a class="is-active" href="index.html">Eng</a><a href="index - fa.html">Fa</a></div>
            <a class="vlt-menu-burger vlt-menu-burger--opened js-offcanvas-menu-close" href="#"><svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="square" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                    <defs />
                    <path d="M18 6L6 18M6 6l12 12" />
                </svg></a>
        </div>
        <nav class="vlt-offcanvas-menu__navigation">

            <ul class="sf-menu">
                <li data-menuanchor="Home"><a href="#Home">Home</a>
                </li>
                <li data-menuanchor="About"><a href="#About">About</a>
                </li>
                <li data-menuanchor="Projects"><a href="#Projects">Projects</a>
                </li>
                <li data-menuanchor="Education"><a href="#Education">Education</a>
                </li>
                <!-- <li data-menuanchor="WORK_EXPERIENCES"><a href="#WORK_EXPERIENCES">WORK EXPERIENCES</a>
                </li> -->
                <li data-menuanchor="Testimonials"><a href="#Testimonials">Testimonials</a>
                </li>
                <!-- <li data-menuanchor="Partners"><a href="#Partners">Partners</a>
                </li> -->
                <li data-menuanchor="Blog"><a href="#Blog">Blog</a>
                </li>
                <li data-menuanchor="Contact"><a href="#Contact">Contact</a>
                </li>
            </ul>
        </nav>
        <div class="vlt-offcanvas-menu__footer">

            <div class="vlt-offcanvas-menu__socials"><a class="vlt-social-icon vlt-social-icon--style-1" href="https://<?php echo $basics["linkedin"]; ?>" target="_blank">
                    <i class="lnir-linkedin-original"></i>
                </a>
                <a class="vlt-social-icon vlt-social-icon--style-1" href="https://<?php echo $basics["github"]; ?>" target="_blank">
                    <i class="lnir-github-original"></i>
                </a>
                <a class="vlt-social-icon vlt-social-icon--style-1" href="https://<?php echo $basics["instagram"]; ?>" target="_blank">
                    <i class="lnir-instagram"></i>
                </a>
            </div>

            <div class="vlt-offcanvas-menu__copyright">
                <p>© <?php echo $basics["Copyright"]; ?> Copyright.<br>All rights reserved.</p>
            </div>
        </div>
    </div>

    <div class="vlt-site-overlay"></div>

    <div class="vlt-fixed-socials">
        <a class="vlt-social-icon vlt-social-icon--style-1" href="https://<?php echo $basics["linkedin"]; ?>" target="_blank">
            <i class="lnir-linkedin-original"></i>
        </a>
        <a class="vlt-social-icon vlt-social-icon--style-1" href="https://<?php echo $basics["github"]; ?>" target="_blank">
            <i class="lnir-github-original"></i>
        </a>
        <a class="vlt-social-icon vlt-social-icon--style-1" href="https://<?php echo $basics["instagram"]; ?>" target="_blank">
            <i class="lnir-instagram"></i>
        </a>
    </div>

    <main class="vlt-main">

        <div class="vlt-fullpage-slider" data-loop-top="" data-loop-bottom="" data-speed="450">


            <div class="vlt-section pp-scrollable" data-anchor="Home">
                <div class="vlt-section__vertical-align">
                    <div class="vlt-section__content">

                        <div class="vlt-section__ken-burn-background has-mobile-image"><img src="assets/img/<?php echo $basics["main_image_web"]; ?>" alt=""><img src="assets/img/<?php echo $basics["main_image_mobile"]; ?>" alt=""></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="vlt-gap-160"></div>

                                    <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:0s; animation-duration:700ms;">

                                        <!-- <div class="vlt-video-button"><a href="https://vimeo.com/367945766" data-fancybox data-small-btn="true" rel="nofollow"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 27">
                                                    <defs />
                                                    <path fill="currentColor" d="M23.7471 13.2802L.876191 26.4847.876192.0757026 23.7471 13.2802z" />
                                                </svg></a></div> -->
                                    </div>
                                    <div class="vlt-gap-100"></div>

                                    <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.1s; animation-duration:700ms;"><span class="vlt-display-1 has-white-color">Webdeveloper</span>
                                    </div>
                                    <div class="vlt-gap-15"></div>

                                    <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.2s; animation-duration:700ms;">
                                        <h1 class="vlt-large-heading">Amir<span class="has-accent-color">.</span></h1>
                                    </div>
                                    <div class="vlt-gap-15"></div>

                                    <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.3s; animation-duration:700ms;">
                                        <p>
                                            <?php echo $basics["about"]; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="vlt-section pp-scrollable" data-anchor="About">
                <div class="vlt-section__vertical-align">
                    <div class="vlt-section__content">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6">

                                    <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:0s; animation-duration:700ms;">
                                        <div class="vlt-experience-block"><span class="vlt-experience-block__number"><?php echo $exp["year_of"]; ?><span class="has-accent-color">.</span></span>
                                            <h5 class="vlt-experience-block__title">Years<br>Experience<br>Working</h5>
                                        </div>
                                    </div>
                                    <div class="vlt-gap-100--lg"></div>
                                </div>
                                <div class="col-xl-6 col-md-8">

                                    <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.1s; animation-duration:700ms;">
                                        <h3>Great Experience</h3>
                                    </div>
                                    <!-- <div class="vlt-gap-20"></div> -->

                                    <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.2s; animation-duration:700ms;">
                                        <p><?php echo $exp["Slogan"]; ?></p>
                                    </div>
                                    <div class="vlt-gap-20"></div>

                                    <?php
                                    foreach ($skills as $key => $value) {

                                    ?>
                                        <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.3s; animation-duration:700ms;">

                                            <div class="vlt-progress-bar" data-final-value="<?php echo $value["percentage"]; ?>" data-animation-speed="1000">
                                                <h5 class="vlt-progress-bar__title"><?php echo $value["name"]; ?><span class="counter">0</span>
                                                </h5>
                                                <div class="vlt-progress-bar__bar"><span></span></div>
                                            </div>
                                        </div>
                                        <div class="vlt-gap-20"></div>
                                    <?php
                                    }
                                    ?>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="vlt-section pp-scrollable" data-anchor="Projects">
                <div class="vlt-section__vertical-align">
                    <div class="vlt-section__content">

                        <div class="vlt-section__projects-background"><img class="is-active" src="assets/img/project-01.jpg" alt="" loading="lazy"><img src="assets/img/project-02.jpg" alt="" loading="lazy"><img src="assets/img/project-03.jpg" alt="" loading="lazy"></div>
                        <div class="container">
                            <div class="vlt-gap-100"></div>

                            <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:0s; animation-duration:700ms;">

                                <div class="vlt-content-slider " data-navigation-anchor=".vlt-projects-anchor" data-effect="fade" data-gap="" data-loop="" data-speed="" data-autoplay="" data-autoplay-speed="" data-slides-centered="" data-slide-settings="{}" data-free-mode="" data-slider-offset="" data-mousewheel="">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">

                                                <article class="vlt-project">
                                                    <div class="col-md-12">
                                                        <div class="col-md-6">
                                                            <h3 class="vlt-project-title">Wordpress Project<span class="has-accent-color">.</span></h3>
                                                            <div class="vlt-project-excerpt">
                                                                <p>WordPress website design and development for a upvc
                                                                    window
                                                                    shop.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <img src="assets/img/alumtechwin.png" alt="" loading="lazy">
                                                            <div class="vlt-gap-20"></div>
                                                            <a class="vlt-btn vlt-btn--primary vlt-btn--md" href="https://alumtechwin.ir" target="_blank">See
                                                                Project</a>
                                                        </div>
                                                    </div>

                                                </article>
                                            </div>
                                            <div class="swiper-slide">

                                                <article class="vlt-project">
                                                    <h3 class="vlt-project-title">The Bottle<span class="has-accent-color">.</span></h3>
                                                    <div class="vlt-project-excerpt">
                                                        <p>Working with client and community, we deliver masterplans
                                                            that create vibrant new places and spaces, attract people,
                                                            and encourage investment through.</p>
                                                    </div>
                                                    <a class="vlt-btn vlt-btn--primary vlt-btn--md" href="single-product.html" target="_self">See Project</a>
                                                </article>
                                            </div>
                                            <div class="swiper-slide">

                                                <article class="vlt-project">
                                                    <h3 class="vlt-project-title">Aesop<span class="has-accent-color">.</span></h3>
                                                    <div class="vlt-project-excerpt">
                                                        <p>Third dry hath saying our over fruit Place creeping creepeth
                                                            let Good. Created also darkness which open appear cattle
                                                            Second shall brought wherein given. Moveth.</p>
                                                    </div>
                                                    <a class="vlt-btn vlt-btn--primary vlt-btn--md" href="single-product.html" target="_self">See Project</a>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vlt-gap-150"></div>

                                <div class="vlt-slider-controls vlt-slider-controls--style-2 vlt-projects-anchor">
                                    <div class="vlt-swiper-pagination"></div>
                                    <div class="vlt-swiper-button-prev"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 45">
                                            <defs />
                                            <path fill="currentColor" fill-rule="evenodd" d="M1.36413 22.5795L24 43.9524l-.7271.6865L.272896 22.9223l.383716-.3623-.362754-.3367L23.0941.319721l.733.680233L1.36413 22.5795z" clip-rule="evenodd" />
                                        </svg></div>
                                    <div class="vlt-swiper-button-next"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 45">
                                            <defs />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M22.6359 22.3728L0 1.00001.727101.313477 23.7271 22.0301l-.3837.3623.3627.3367L.905866 44.6327l-.732997-.6803L22.6359 22.3728z" fill="currentColor" />
                                        </svg></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="vlt-section pp-scrollable" data-anchor="Work Experiences">
                <div class="vlt-section__vertical-align">
                    <div class="vlt-section__content">
                        <div class="container">
                            <div class="vlt-gap-70"></div>

                            <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:0s; animation-duration:700ms;">
                                <div class="d-block d-md-flex align-items-center justify-content-between">
                                    <h3>WORK EXPERIENCES</h3>
                                    <div class="vlt-gap-30--sm"></div>
                                    <form action="download.php" method="post">
                                        <input class="vlt-btn vlt-btn--primary vlt-btn--md" type="submit" name="submit" value="Download
                                        Resume" />
                                    </form>

                                </div>
                            </div>
                            <div class="vlt-gap-50"></div>

                            <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.1s; animation-duration:700ms;">

                                <div class="vlt-content-slider " data-navigation-anchor=".vlt-education-anchor" data-effect="" data-gap="120" data-loop="" data-speed="" data-autoplay="" data-autoplay-speed="" data-slides-centered="" data-slide-settings="{}" data-free-mode="" data-slider-offset="" data-mousewheel="">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <?php
                                                foreach ($education as $key => $value) {
                                                ?>

                                                    <div class="vlt-timeline-item">
                                                        <div class="row">
                                                            <div class="col-xl-4"><img src="assets/img/root/<?php echo $value["institute_logo"]; ?>" alt="rouzbahan-logo" loading="lazy" style="
                                                                width: 30%;">
                                                            </div>
                                                            <div class="col-xl-4"><span class="vlt-timeline-item__date"><?php echo $value["start_date"]; ?> ‑ <?php echo $value["end_date"]; ?></span>
                                                                <h5 class="vlt-timeline-item__title"><?php echo $value["institute_name"]; ?>
                                                                </h5>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <p class="vlt-timeline-item__text"><?php echo $value["degree_name"]; ?>
                                                                    <hr>
                                                                    <?php echo $value["resume"]; ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php

                                                }
                                                ?>


                                            </div>
                                            <div class="swiper-slide">

                                                <div class="vlt-timeline-item">
                                                    <div class="row">
                                                        <div class="col-xl-4"><img src="assets/img/root/rouzbahan-logo.png" alt="rouzbahan-logo" loading="lazy">
                                                        </div>
                                                        <div class="col-xl-4"><span class="vlt-timeline-item__date">2019
                                                                - 2020</span>
                                                            <h5 class="vlt-timeline-item__title">rouzbahan-logo</h5>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <p class="vlt-timeline-item__text">Which firmament dominion
                                                                first rule and tree. The seas he i were cattle Under
                                                                living. It may beast every forth place.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="vlt-timeline-item">
                                                    <div class="row">
                                                        <div class="col-xl-4"><img src="assets/img/root/envato.png" alt="Envato" loading="lazy">
                                                        </div>
                                                        <div class="col-xl-4"><span class="vlt-timeline-item__date">2017
                                                                - 2018</span>
                                                            <h5 class="vlt-timeline-item__title">Envato</h5>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <p class="vlt-timeline-item__text">Rule bearing whales.
                                                                Created gathering blessed, sixth likeness male. Over
                                                                were which you'll so be make moveth made saw above.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="vlt-timeline-item">
                                                    <div class="row">
                                                        <div class="col-xl-4"><img src="assets/img/root/twitter.png" alt="Twitter" loading="lazy">
                                                        </div>
                                                        <div class="col-xl-4"><span class="vlt-timeline-item__date">2015
                                                                - 2018</span>
                                                            <h5 class="vlt-timeline-item__title">Twitter</h5>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <p class="vlt-timeline-item__text">Firmament itself rule
                                                                their evening, which moved very night so great them
                                                                cattle bearing and gathered forth had whose bearing.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">

                                                <div class="vlt-timeline-item">
                                                    <div class="row">
                                                        <div class="col-xl-4"><img src="assets/img/root/rouzbahan-logo.png" alt="rouzbahan-logo" loading="lazy">
                                                        </div>
                                                        <div class="col-xl-4"><span class="vlt-timeline-item__date">2018/09 ‑ 2022/11</span>
                                                            <h5 class="vlt-timeline-item__title">Rouzbahan University</h5>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <p class="vlt-timeline-item__text">BEng Computer Science</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="vlt-timeline-item">
                                                    <div class="row">
                                                        <div class="col-xl-4"><img src="assets/img/root/envato.png" alt="Envato" loading="lazy">
                                                        </div>
                                                        <div class="col-xl-4"><span class="vlt-timeline-item__date">2017
                                                                - 2018</span>
                                                            <h5 class="vlt-timeline-item__title">Envato</h5>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <p class="vlt-timeline-item__text">Rule bearing whales.
                                                                Created gathering blessed, sixth likeness male. Over
                                                                were which you'll so be make moveth made saw above.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="vlt-timeline-item">
                                                    <div class="row">
                                                        <div class="col-xl-4"><img src="assets/img/root/twitter.png" alt="Twitter" loading="lazy">
                                                        </div>
                                                        <div class="col-xl-4"><span class="vlt-timeline-item__date">2015
                                                                - 2018</span>
                                                            <h5 class="vlt-timeline-item__title">Twitter</h5>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <p class="vlt-timeline-item__text">Firmament itself rule
                                                                their evening, which moved very night so great them
                                                                cattle bearing and gathered forth had whose bearing.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vlt-gap-75"></div>

                                <div class="vlt-slider-controls vlt-slider-controls--style-2 vlt-education-anchor">
                                    <div class="vlt-swiper-pagination"></div>
                                    <div class="vlt-swiper-button-prev"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 45">
                                            <defs />
                                            <path fill="currentColor" fill-rule="evenodd" d="M1.36413 22.5795L24 43.9524l-.7271.6865L.272896 22.9223l.383716-.3623-.362754-.3367L23.0941.319721l.733.680233L1.36413 22.5795z" clip-rule="evenodd" />
                                        </svg></div>
                                    <div class="vlt-swiper-button-next"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 45">
                                            <defs />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M22.6359 22.3728L0 1.00001.727101.313477 23.7271 22.0301l-.3837.3623.3627.3367L.905866 44.6327l-.732997-.6803L22.6359 22.3728z" fill="currentColor" />
                                        </svg></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 -->


            <div class="vlt-section pp-scrollable" data-anchor="Education">
                <div class="vlt-section__vertical-align">
                    <div class="vlt-section__content">
                        <div class="container">
                            <div class="vlt-gap-70"></div>

                            <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:0s; animation-duration:700ms;">
                                <div class="d-block d-md-flex align-items-center justify-content-between">
                                    <h3>Education</h3>
                                    <div class="vlt-gap-30--sm"></div>
                                    <!-- <form action="download.php" method="post">
                                        <input class="vlt-btn vlt-btn--primary vlt-btn--md" type="submit" name="submit" value="Download
                                        Resume" /> -->
                                    </form>

                                </div>
                            </div>
                            <div class="vlt-gap-50"></div>

                            <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.1s; animation-duration:700ms;">

                                <div class="vlt-content-slider " data-navigation-anchor=".vlt-education-anchor" data-effect="" data-gap="120" data-loop="" data-speed="" data-autoplay="" data-autoplay-speed="" data-slides-centered="" data-slide-settings="{}" data-free-mode="" data-slider-offset="" data-mousewheel="">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <?php
                                                foreach ($education as $key => $value) {
                                                ?>

                                                    <div class="vlt-timeline-item">
                                                        <div class="row">
                                                            <div class="col-xl-4"><img src="assets/img/root/<?php echo $value["institute_logo"]; ?>" alt="rouzbahan-logo" loading="lazy" style="
                                                                width: 30%;">
                                                            </div>
                                                            <div class="col-xl-4"><span class="vlt-timeline-item__date"><?php echo $value["start_date"]; ?> ‑ <?php echo $value["end_date"]; ?></span>
                                                                <h5 class="vlt-timeline-item__title"><?php echo $value["institute_name"]; ?>
                                                                </h5>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <p class="vlt-timeline-item__text"><?php echo $value["degree_name"]; ?>
                                                                    <hr>
                                                                    <?php echo $value["resume"]; ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php

                                                }
                                                ?>


                                            </div>
                                            <!-- <div class="swiper-slide">

                                                <div class="vlt-timeline-item">
                                                    <div class="row">
                                                        <div class="col-xl-4"><img
                                                                src="assets/img/root/rouzbahan-logo.png" alt="rouzbahan-logo"
                                                                loading="lazy">
                                                        </div>
                                                        <div class="col-xl-4"><span class="vlt-timeline-item__date">2019
                                                                - 2020</span>
                                                            <h5 class="vlt-timeline-item__title">rouzbahan-logo</h5>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <p class="vlt-timeline-item__text">Which firmament dominion
                                                                first rule and tree. The seas he i were cattle Under
                                                                living. It may beast every forth place.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="vlt-timeline-item">
                                                    <div class="row">
                                                        <div class="col-xl-4"><img src="assets/img/root/envato.png"
                                                                alt="Envato" loading="lazy">
                                                        </div>
                                                        <div class="col-xl-4"><span class="vlt-timeline-item__date">2017
                                                                - 2018</span>
                                                            <h5 class="vlt-timeline-item__title">Envato</h5>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <p class="vlt-timeline-item__text">Rule bearing whales.
                                                                Created gathering blessed, sixth likeness male. Over
                                                                were which you'll so be make moveth made saw above.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="vlt-timeline-item">
                                                    <div class="row">
                                                        <div class="col-xl-4"><img src="assets/img/root/twitter.png"
                                                                alt="Twitter" loading="lazy">
                                                        </div>
                                                        <div class="col-xl-4"><span class="vlt-timeline-item__date">2015
                                                                - 2018</span>
                                                            <h5 class="vlt-timeline-item__title">Twitter</h5>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <p class="vlt-timeline-item__text">Firmament itself rule
                                                                their evening, which moved very night so great them
                                                                cattle bearing and gathered forth had whose bearing.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">

                                                <div class="vlt-timeline-item">
                                                    <div class="row">
                                                        <div class="col-xl-4"><img
                                                                src="assets/img/root/rouzbahan-logo.png" alt="rouzbahan-logo"
                                                                loading="lazy">
                                                        </div>
                                                        <div class="col-xl-4"><span class="vlt-timeline-item__date">2018/09 ‑ 2022/11</span>
                                                            <h5 class="vlt-timeline-item__title">Rouzbahan University</h5>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <p class="vlt-timeline-item__text">BEng Computer Science</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="vlt-timeline-item">
                                                    <div class="row">
                                                        <div class="col-xl-4"><img src="assets/img/root/envato.png"
                                                                alt="Envato" loading="lazy">
                                                        </div>
                                                        <div class="col-xl-4"><span class="vlt-timeline-item__date">2017
                                                                - 2018</span>
                                                            <h5 class="vlt-timeline-item__title">Envato</h5>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <p class="vlt-timeline-item__text">Rule bearing whales.
                                                                Created gathering blessed, sixth likeness male. Over
                                                                were which you'll so be make moveth made saw above.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="vlt-timeline-item">
                                                    <div class="row">
                                                        <div class="col-xl-4"><img src="assets/img/root/twitter.png"
                                                                alt="Twitter" loading="lazy">
                                                        </div>
                                                        <div class="col-xl-4"><span class="vlt-timeline-item__date">2015
                                                                - 2018</span>
                                                            <h5 class="vlt-timeline-item__title">Twitter</h5>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <p class="vlt-timeline-item__text">Firmament itself rule
                                                                their evening, which moved very night so great them
                                                                cattle bearing and gathered forth had whose bearing.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="vlt-gap-75"></div>

                                <!-- <div class="vlt-slider-controls vlt-slider-controls--style-2 vlt-education-anchor">
                                    <div class="vlt-swiper-pagination"></div>
                                    <div class="vlt-swiper-button-prev"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 45">
                                            <defs />
                                            <path fill="currentColor" fill-rule="evenodd" d="M1.36413 22.5795L24 43.9524l-.7271.6865L.272896 22.9223l.383716-.3623-.362754-.3367L23.0941.319721l.733.680233L1.36413 22.5795z" clip-rule="evenodd" />
                                        </svg></div>
                                    <div class="vlt-swiper-button-next"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 45">
                                            <defs />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M22.6359 22.3728L0 1.00001.727101.313477 23.7271 22.0301l-.3837.3623.3627.3367L.905866 44.6327l-.732997-.6803L22.6359 22.3728z" fill="currentColor" />
                                        </svg></div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="vlt-section pp-scrollable" data-anchor="Testimonials">
                <div class="vlt-section__vertical-align">
                    <div class="vlt-section__content">

                        <div class="vlt-section__ken-burn-background"><img src="assets/img/testimonials.jpg" alt="">
                        </div>
                        <div class="container">
                            <div class="row align-items-end">
                                <div class="col-xl-6">

                                    <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:0s; animation-duration:700ms;">
                                        <div class="has-accent-color">
                                            <h3>Certificates</h3>
                                            <div class="vlt-gap-215 vlt-gap-100--lg"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 offset-xl-2">
                                    <div class="vlt-gap-70--lg"></div>

                                    <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.1s; animation-duration:700ms;">

                                        <div class="vlt-content-slider " data-navigation-anchor=".vlt-testimonials-anchor" data-effect="" data-gap="" data-loop="" data-speed="" data-autoplay="" data-autoplay-speed="" data-slides-centered="" data-slide-settings="{}" data-free-mode="" data-slider-offset="" data-mousewheel="">
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper">

                                                    <?php
                                                    foreach ($Certificates as $key => $value) {
                                                    ?>
                                                        <div class="swiper-slide">
                                                            <div class="col-xl-2"></div>
                                                            <div class="col-xl-8">
                                                                <a href="net+mft.jpg">
                                                                    <img src="assets/img/<?php echo $value["img"]; ?>" class="img-thumbnail" alt="<?php echo $value["img"]; ?>" loading="lazy" style="width: 100%;">
                                                                </a>
                                                            </div>
                                                            <div class="col-xl-2"></div>
                                                            <div class="vlt-testimonial">
                                                                <div class="vlt-testimonial__text">
                                                                    <p><?php echo $value["description"]; ?></p>
                                                                </div>
                                                                <div class="vlt-testimonial__meta">
                                                                    <h5 class="vlt-testimonial__name"><?php echo $value["title"]; ?></h5>
                                                                    <div class="vlt-testimonial__function"><?php echo $value["Institute"]; ?></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
                                                    }
                                                    ?>

                                                    ّ
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vlt-gap-75"></div>

                                        <div class="vlt-slider-controls vlt-slider-controls--style-1 vlt-testimonials-anchor">
                                            <div class="vlt-swiper-button-prev"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 45">
                                                    <defs />
                                                    <path fill="currentColor" fill-rule="evenodd" d="M1.36413 22.5795L24 43.9524l-.7271.6865L.272896 22.9223l.383716-.3623-.362754-.3367L23.0941.319721l.733.680233L1.36413 22.5795z" clip-rule="evenodd" />
                                                </svg></div>
                                            <div class="vlt-swiper-button-next"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 45">
                                                    <defs />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.6359 22.3728L0 1.00001.727101.313477 23.7271 22.0301l-.3837.3623.3627.3367L.905866 44.6327l-.732997-.6803L22.6359 22.3728z" fill="currentColor" />
                                                </svg></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 
            <div class="vlt-section pp-scrollable" data-anchor="Partners">
                <div class="vlt-section__vertical-align">
                    <div class="vlt-section__content">
                        <div class="container">

                            <div class="vlt-animated-block" data-animation-name="fadeInUpSm"
                                style="animation-delay:0s; animation-duration:700ms;">
                                <h3>Partners</h3>
                            </div>
                            <div class="vlt-gap-100"></div>

                            <div class="vlt-animated-block" data-animation-name="fadeInUpSm"
                                style="animation-delay:.1s; animation-duration:700ms;">
                                <ul class="vlt-partners">
                                    <li><img src="assets/img/root/logo-01.png" alt="" loading="lazy"></li>
                                    <li><img src="assets/img/root/logo-02.png" alt="" loading="lazy"></li>
                                    <li><img src="assets/img/root/logo-03.png" alt="" loading="lazy"></li>
                                    <li><img src="assets/img/root/logo-04.png" alt="" loading="lazy"></li>
                                    <li><img src="assets/img/root/logo-05.png" alt="" loading="lazy"></li>
                                    <li><img src="assets/img/root/logo-06.png" alt="" loading="lazy"></li>
                                    <li><img src="assets/img/root/logo-07.png" alt="" loading="lazy"></li>
                                    <li><img src="assets/img/root/logo-08.png" alt="" loading="lazy"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->


            <div class="vlt-section pp-scrollable" data-anchor="Blog">
                <div class="vlt-section__vertical-align">
                    <div class="vlt-section__content">
                        <div class="container">

                            <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:0s; animation-duration:700ms;">
                                <h3>Recent news</h3>
                            </div>
                            <div class="vlt-gap-100"></div>
                            <div class="row">
                                <div class="col-xl-4">

                                    <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.1s; animation-duration:700ms;">

                                        <article class="vlt-post vlt-post--masonry">
                                            <div class="vlt-post-border"><span class="top"></span><span class="right"></span><span class="bottom"></span><span class="left"></span></div>
                                            <div class="vlt-post-media"><img src="assets/img/blog-01.jpg" alt="" loading="lazy"></div>
                                            <div class="vlt-post-content">
                                                <header class="vlt-post-header"><span class="vlt-post-date">December 27,
                                                        2020</span>
                                                    <h3 class="vlt-post-title"><a href="single-post.html">Scent in the
                                                            Voyages</a></h3>
                                                </header>
                                                <div class="vlt-post-excerpt">
                                                    <p>Let years seasons given two fowl above is itself shall third
                                                        night female seasons you’re whales, unto had fowl Herb. Moving
                                                        so. Said be fruitful first lights creeping deep void, lesser.
                                                    </p>
                                                </div>
                                                <footer class="vlt-post-footer"><a class="vlt-read-more-link" href="single-post.html">
                                                        Read more<svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 8">
                                                            <defs />
                                                            <path d="M15.3536 4.35355c.1952-.19526.1952-.51184 0-.7071L12.1716.464466c-.1953-.195262-.5119-.195262-.7071 0-.1953.195262-.1953.511845 0 .707104L14.2929 4l-2.8284 2.82843c-.1953.19526-.1953.51184 0 .7071.1952.19527.5118.19527.7071 0l3.182-3.18198zM0 4.5h15v-1H0v1z" fill="currentColor" />
                                                        </svg></a></footer>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="vlt-gap-30--lg"></div>

                                    <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.2s; animation-duration:700ms;">

                                        <article class="vlt-post vlt-post--masonry">
                                            <div class="vlt-post-border"><span class="top"></span><span class="right"></span><span class="bottom"></span><span class="left"></span></div>
                                            <div class="vlt-post-media"><img src="assets/img/blog-02.jpg" alt="" loading="lazy"></div>
                                            <div class="vlt-post-content">
                                                <header class="vlt-post-header"><span class="vlt-post-date">December 27,
                                                        2020</span>
                                                    <h3 class="vlt-post-title"><a href="single-post.html">The Stone of
                                                            the Flames</a></h3>
                                                </header>
                                                <div class="vlt-post-excerpt">
                                                    <p>Let years seasons given two fowl above is itself shall third
                                                        night female seasons you’re whales, unto had fowl Herb. Moving
                                                        so. Said be fruitful first lights creeping deep void, lesser.
                                                    </p>
                                                </div>
                                                <footer class="vlt-post-footer"><a class="vlt-read-more-link" href="single-post.html">
                                                        Read more<svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 8">
                                                            <defs />
                                                            <path d="M15.3536 4.35355c.1952-.19526.1952-.51184 0-.7071L12.1716.464466c-.1953-.195262-.5119-.195262-.7071 0-.1953.195262-.1953.511845 0 .707104L14.2929 4l-2.8284 2.82843c-.1953.19526-.1953.51184 0 .7071.1952.19527.5118.19527.7071 0l3.182-3.18198zM0 4.5h15v-1H0v1z" fill="currentColor" />
                                                        </svg></a></footer>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="vlt-gap-30--lg"></div>

                                    <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.3s; animation-duration:700ms;">

                                        <article class="vlt-post vlt-post--masonry">
                                            <div class="vlt-post-border"><span class="top"></span><span class="right"></span><span class="bottom"></span><span class="left"></span></div>
                                            <div class="vlt-post-media"><img src="assets/img/blog-03.jpg" alt="" loading="lazy"></div>
                                            <div class="vlt-post-content">
                                                <header class="vlt-post-header"><span class="vlt-post-date">December 27,
                                                        2020</span>
                                                    <h3 class="vlt-post-title"><a href="single-post.html">Secrets of the
                                                            Serpents</a></h3>
                                                </header>
                                                <div class="vlt-post-excerpt">
                                                    <p>Let years seasons given two fowl above is itself shall third
                                                        night female seasons you’re whales, unto had fowl Herb. Moving
                                                        so. Said be fruitful first lights creeping deep void, lesser.
                                                    </p>
                                                </div>
                                                <footer class="vlt-post-footer"><a class="vlt-read-more-link" href="single-post.html">
                                                        Read more<svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 8">
                                                            <defs />
                                                            <path d="M15.3536 4.35355c.1952-.19526.1952-.51184 0-.7071L12.1716.464466c-.1953-.195262-.5119-.195262-.7071 0-.1953.195262-.1953.511845 0 .707104L14.2929 4l-2.8284 2.82843c-.1953.19526-.1953.51184 0 .7071.1952.19527.5118.19527.7071 0l3.182-3.18198zM0 4.5h15v-1H0v1z" fill="currentColor" />
                                                        </svg></a></footer>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="vlt-section pp-scrollable" data-anchor="Contact">
                <div class="vlt-section__vertical-align">
                    <div class="vlt-section__content">

                        <div class="vlt-section__ken-burn-background"><img src="assets/img/contact.jpg" alt=""></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-4">

                                    <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:0s; animation-duration:700ms;">
                                        <h3>Contact</h3>
                                        <div class="vlt-gap-30"></div>
                                        <p>Your comment makes me better.</p>
                                        <div class="vlt-gap-40"></div>
                                        <address><?php echo $basics["city"]; ?></address>
                                        <p><a class="tel" href="tel:<?php echo $basics["tel"]; ?>"><?php echo $basics["tel"]; ?></a></p>
                                        <p>
                                            <a class="email" href="mailto:<?php echo $basics["email"]; ?>">
                                                <span class="__cf_email__">
                                                    <?php echo $basics["email"]; ?>
                                                </span>
                                            </a>

                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-6 offset-xl-2">
                                    <div class="vlt-gap-70--lg"></div>

                                    <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.1s; animation-duration:700ms;">
                                        <h4>If you have any questions or comments about me, <span class="has-accent-color">send me a message</span></h4>
                                        <div class="vlt-gap-20"></div>
                                        <!-- 
                                        <form action="send_email.php" method="post" class="vlt-contact-form" novalidate="novalidate"> -->
                                        <form action="send_email.php" method="post" novalidate="novalidate">
                                            <div class="vlt-form-group">
                                                <input type="text" id="name" name="name" required="required" placeholder="Your Name">
                                            </div>
                                            <div class="vlt-form-group">
                                                <input type="email" id="email" name="email" required="required" placeholder="Your Email">
                                            </div>
                                            <div class="vlt-form-group">
                                                <textarea name="message" id="message" rows="3" placeholder="Message"></textarea>
                                            </div>
                                            <!-- <div class="message success">Your message is successfully sent...</div>
                                            <div class="message danger">Sorry something went wrong!</div> -->
                                            <input type="submit" class="vlt-btn vlt-btn--primary vlt-btn--md" value="Contact Me">
                                            <!-- <button class="vlt-btn vlt-btn--primary vlt-btn--md">Contact Me</button> -->
                                        </form>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="vlt-fullpage-slider-progress-bar"><span></span></div>
        </div>
    </main>

    <footer class="vlt-footer vlt-footer--default vlt-footer--fixed">
        <div class="vlt-footer-copyright">
            <p>© <?php echo $basics["Copyright"]; ?></p>
        </div>
        <div class="vlt-language-switcher"><a class="is-active" href="index.html">Eng</a><a href="index - fa.html">Fa</a></div>
    </footer>

    <script data-cfasync="false" src="assets/scripts/email-decode.min.js"></script>
    <script src="assets/vendors/jquery-3.5.1.min.js"></script>
    <script src="assets/scripts/vlt-plugins.min.js"></script>
    <script src="assets/scripts/vlt-helpers.js"></script>
    <script src="assets/scripts/vlt-controllers.min.js"></script>
</body>


</html>
