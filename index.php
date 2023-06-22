<?php
// session_start();
require_once('connector/MysqliDb.php');
require_once('connector/cn.php');
$basics = $db->getOne('basics_eng');
$exp = $db->getOne('experience');
$db->where('status', 1);
$skills = $db->get('skills');
$db->where('status', 1);
$education = $db->get('education');
$db->where('status', 1);
$db->orderBy("ordered", "asc");
$Certificates = $db->get('certificates');
$db->where('status', 1);
$projects = $db->get('projects');
$db->where('status', 1);
$work_experiences = $db->get('work_experiences');

$user_agent = $_SERVER['HTTP_USER_AGENT'];

if (isset($_GET["err"])) {
    $err = $_GET["err"];
} else {
    $err = 0;
}


// Make the page validate
ini_set('session.use_trans_sid', '0');

// Include the random string file
require 'captcha/rand.php';

// Begin the session
session_start();

// Set the session contents
$_SESSION['captcha_id'] = $str;


function getOS()
{

    global $user_agent;

    $os_platform = "Unknown OS Platform";

    $os_array = array(
        '/windows nt 10/i' => 'Windows 10',
        '/windows nt 6.3/i' => 'Windows 8.1',
        '/windows nt 6.2/i' => 'Windows 8',
        '/windows nt 6.1/i' => 'Windows 7',
        '/windows nt 6.0/i' => 'Windows Vista',
        '/windows nt 5.2/i' => 'Windows Server 2003/XP x64',
        '/windows nt 5.1/i' => 'Windows XP',
        '/windows xp/i' => 'Windows XP',
        '/windows nt 5.0/i' => 'Windows 2000',
        '/windows me/i' => 'Windows ME',
        '/win98/i' => 'Windows 98',
        '/win95/i' => 'Windows 95',
        '/win16/i' => 'Windows 3.11',
        '/macintosh|mac os x/i' => 'Mac OS X',
        '/mac_powerpc/i' => 'Mac OS 9',
        '/linux/i' => 'Linux',
        '/ubuntu/i' => 'Ubuntu',
        '/iphone/i' => 'iPhone',
        '/ipod/i' => 'iPod',
        '/ipad/i' => 'iPad',
        '/android/i' => 'Android',
        '/blackberry/i' => 'BlackBerry',
        '/webos/i' => 'Mobile'
    );

    foreach ($os_array as $regex => $value)
        if (preg_match($regex, $user_agent))
            $os_platform = $value;

    return $os_platform;
}

function getBrowser()
{

    global $user_agent;

    $browser = "Unknown Browser";

    $browser_array = array(
        '/msie/i' => 'Internet Explorer',
        '/firefox/i' => 'Firefox',
        '/safari/i' => 'Safari',
        '/chrome/i' => 'Chrome',
        '/edge/i' => 'Edge',
        '/opera/i' => 'Opera',
        '/netscape/i' => 'Netscape',
        '/maxthon/i' => 'Maxthon',
        '/konqueror/i' => 'Konqueror',
        '/mobile/i' => 'Handheld Browser'
    );

    foreach ($browser_array as $regex => $value)
        if (preg_match($regex, $user_agent))
            $browser = $value;

    return $browser;
}

$user_browser = "null";
$user_os = "null";
$v_ip = $_SERVER['REMOTE_ADDR'];
$user_os = getOS();
$user_browser = getBrowser();
$date = new DateTime("now", new DateTimeZone('Iran'));
$data = array(
    "browser" => $user_browser,
    "operating_system" => $user_os,
    "ip" => $v_ip,
    "setdate" => $date->format('Y-m-d H:i:s')
);
$id = $db->insert('visitor_data', $data);
?>

<!DOCTYPE html>
<html class="no-js vlt-is--homepage vlt-is--footer-fixed" lang="en">

<head>
    <meta charset="utf-8">
    <title>
        <?php echo $basics["title"]; ?>
    </title>
    <meta name="description" content="Personal Page">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="icon" type="image/svg" href="assets/img/root/<?php echo $basics["faveicon"]; ?>">

    <link rel="stylesheet" href="assets/css/framework/bootstrap.min.css">

    <link rel="stylesheet" href="assets/fonts/Gilroy/style.css">

    <link rel="stylesheet" href="assets/fonts/LineIcons/Pro-Regular/font-css/LineIcons.css">

    <link rel="stylesheet" href="assets/css/vlt-plugins.min.css">

    <link rel="stylesheet" href="assets/css/vlt-main.min.css">

    <!-- captcha  -->

    <script src="captcha/../../lib/jquery.js"></script>
    <script src="captcha/../../dist/jquery.validate.js"></script>
    <script src="captcha/captcha.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />


    <!-- <link rel="stylesheet" href="assets/css/custom.css"> -->
</head>

<body class=" animsition">

    <header class="vlt-header vlt-header--default">
        <div class="vlt-navbar vlt-navbar--main vlt-navbar--transparent vlt-navbar--sticky">
            <div class="vlt-navbar-background"></div>
            <div class="vlt-navbar-inner">
                <div class="vlt-navbar-inner--left">
                    <a class="vlt-navbar-logo" href="index.php">
                        <?php
                        if (file_exists("assets/img/root/" . $basics["logo_pic"])) {
                        ?>
                            <img src="assets/img/root/<?php echo $basics["logo_pic"]; ?>" alt="Amir">
                        <?php
                        } else {
                        ?>
                            <img src="assets/img/root/No_Image_Available.jpg" alt="Amir">
                        <?php
                        }
                        ?>
                    </a>
                </div>
                <div class="vlt-navbar-inner--center">
                    <div class="container">
                        <nav class="vlt-default-menu__navigation">

                            <ul class="sf-menu">
                                <li data-menuanchor="Home"><a href="#Home">Home</a>
                                </li>
                                <li data-menuanchor="About"><a href="#About">About</a>
                                </li>
                                <li data-menuanchor="work_experiences"><a href="#work_experiences">Work experiences</a>
                                </li>
                                <li data-menuanchor="Education"><a href="#Education">Education</a>
                                </li>
                                <li data-menuanchor="Testimonials"><a href="#Testimonials">Testimonials</a>
                                </li>
                                <li data-menuanchor="Projects"><a href="#Projects">Projects</a>
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

            <!-- <div class="vlt-language-switcher"><a class="is-active" href="index.php">Eng</a><a href="index - fa.php">Fa</a></div> -->
            <a class="vlt-menu-burger vlt-menu-burger--opened js-offcanvas-menu-close" href="#"><svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="square" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                    <defs />
                    <path d="M18 6L6 18M6 6l12 12" />
                </svg></a>
        </div>
        <nav class="vlt-offcanvas-menu__navigation">

            <ul class="sf-menu">
                <li data-menuanchor="Home"><a style="width: 100%;" href="#Home">Home</a>
                </li>
                <li data-menuanchor="About"><a style="width: 100%;" href="#About">About</a>
                </li>
                <li data-menuanchor="work_experiences"><a style="width: 100%;" href="#work_experiences">Work
                        experiences</a>
                </li>
                <li data-menuanchor="Education"><a style="width: 100%;" href="#Education">Education</a>
                </li>
                <li data-menuanchor="Testimonials"><a style="width: 100%;" href="#Testimonials">Testimonials</a>
                </li>
                <li data-menuanchor="Projects"><a style="width: 100%;" href="#Projects">Projects</a>
                </li>
                <li data-menuanchor="Contact"><a style="width: 100%;" href="#Contact">Contact</a>
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
                <p>©
                    <?php echo $basics["Copyright"]; ?> Copyright.<br>All rights reserved.
                </p>
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
                                            <?php echo $basics["about"]; ?>
                                        </p>
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
                                        <div class="vlt-experience-block"><span class="vlt-experience-block__number">
                                                <?php echo $exp["year_of"]; ?><span class="has-accent-color">.</span>
                                            </span>
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
                                        <p>
                                            <?php echo $exp["Slogan"]; ?>
                                        </p>
                                    </div>
                                    <div class="vlt-gap-20"></div>

                                    <?php
                                    foreach ($skills as $key => $value) {

                                    ?>
                                        <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.3s; animation-duration:700ms;">

                                            <div class="vlt-progress-bar" data-final-value="<?php echo $value["percentage"]; ?>" data-animation-speed="1000">
                                                <h5 class="vlt-progress-bar__title">
                                                    <?php echo $value["name"]; ?><span class="counter">0</span>
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

            <div class="vlt-section pp-scrollable" data-anchor="work_experiences">
                <div class="vlt-section__vertical-align">
                    <div class="vlt-section__content">
                        <div class="container">
                            <div class="vlt-gap-70"></div>

                            <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:0s; animation-duration:700ms;">
                                <div class="d-block d-md-flex align-items-center justify-content-between">
                                    <h3>Work experiences</h3>
                                    <div class="vlt-gap-30--sm"></div>
                                    <form action="download.php" method="post">
                                        <input class="vlt-btn vlt-btn--primary vlt-btn--md" type="submit" name="submit" value="Download
                                        Resume" />
                                    </form>

                                </div>
                            </div>
                            <div class="vlt-gap-50"></div>

                            <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.1s; animation-duration:700ms;">

                                <div class="vlt-content-slider " data-navigation-anchor=".vlt-work_experiences-anchor" data-effect="" data-gap="120" data-loop="" data-speed="" data-autoplay="" data-autoplay-speed="" data-slides-centered="" data-slide-settings="{}" data-free-mode="" data-slider-offset="" data-mousewheel="">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">

                                            <?php
                                            foreach ($work_experiences as $key => $value) {
                                            ?>
                                                <div class="swiper-slide">
                                                    <div class="vlt-timeline-item">
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <h5 class="vlt-timeline-item__title">
                                                                    <?php echo $value["position"]; ?>
                                                                </h5>
                                                                <h6 class="vlt-timeline-item__title">
                                                                    <?php echo $value["Company"]; ?>
                                                                </h6>
                                                                <span class="vlt-timeline-item__date">
                                                                    <?php echo $value["start_date"]; ?> ‑
                                                                    <?php echo $value["end_date"]; ?>
                                                                </span>
                                                                <span class="vlt-timeline-item__date">
                                                                    <?php echo $value["location"]; ?>
                                                                </span>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <h5>Tasks:</h5>
                                                                <p class="vlt-timeline-item__text">
                                                                    <?php echo $value["tasks"]; ?>
                                                                    <!-- <hr>
                                                                    <?php echo $value["resume"]; ?> -->
                                                                </p>
                                                            </div>
                                                            <div class="col-xl-2">
                                                                <?php
                                                                if (isset($value["work_certificate_img"])) {
                                                                    if (file_exists("assets/img/" . $value["work_certificate_img"])) {
                                                                ?>
                                                                        <a href="assets/img/<?php echo $value["work_certificate_img"]; ?>">
                                                                            <img src="assets/img/<?php echo $value["work_certificate_img"]; ?>" class="img-thumbnail" alt="<?php echo $value["work_certificate_img"]; ?>" loading="lazy" style="width: 100%;">
                                                                        </a>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="vlt-gap-75"></div>

                                <div class="vlt-slider-controls vlt-slider-controls--style-2 vlt-work_experiences-anchor">
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
                                                            <div class="col-xl-4"><img src="assets/img/root/<?php echo $value["institute_logo"]; ?>" alt="<?php echo $value["institute_logo"]; ?>" loading="lazy" style="
                                                                width: 30%;">
                                                            </div>
                                                            <div class="col-xl-4"><span class="vlt-timeline-item__date">
                                                                    <?php echo $value["start_date"]; ?> ‑
                                                                    <?php echo $value["end_date"]; ?>
                                                                </span>
                                                                <h5 class="vlt-timeline-item__title">
                                                                    <?php echo $value["institute_name"]; ?>
                                                                </h5>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <p class="vlt-timeline-item__text">
                                                                    <?php echo $value["degree_name"]; ?>
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
                            <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:0s; animation-duration:700ms;">
                                <h3>Certificates</h3>
                            </div>
                            <div class="vlt-gap-100"></div>
                            <div class="row">
                                <?php
                                foreach ($Certificates as $key => $value) {
                                ?>
                                    <div class="col-xl-4" style="margin-top: 30px;">
                                        <div class="vlt-gap-30--lg"></div>

                                        <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:.3s; animation-duration:700ms;">

                                            <article class="vlt-post vlt-post--masonry">
                                                <div class="vlt-post-border"><span class="top"></span><span class="right"></span><span class="bottom"></span><span class="left"></span></div>
                                                <div class="vlt-post-media"><img src="assets/img/<?php echo $value["img"]; ?>" alt="" loading="lazy"></div>
                                                <div class="vlt-post-content">
                                                    <header class="vlt-post-header">
                                                        <span class="vlt-post-date">
                                                            <?php echo $value["Institute"]; ?>
                                                        </span>
                                                        <!-- <h3 class="vlt-post-title"><a href="single-post.php">Secrets of the
                                                            Serpents</a></h3>                                                     -->
                                                        <h5 class="vlt-post-title"><?php echo substr($value["title"], 0, 35) . "..."; ?></h5>
                                                    </header>
                                                    <div class="vlt-post-excerpt">
                                                        <p><?php echo substr($value["description"], 0, 80) . "..."; ?></p>
                                                    </div>
                                                    <!-- <footer class="vlt-post-footer"><a class="vlt-read-more-link" href="single-post.php"> -->
                                                    <footer class="vlt-post-footer">
                                                        <?php if (isset($value["Proof_link"]) && !is_null($value["Proof_link"])) {
                                                        ?>
                                                            <a class="vlt-btn vlt-btn--primary vlt-btn--md" href="<?php echo $value["Proof_link"]; ?>" target="_blank">
                                                                verify</a>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <div style="height: 2.8125rem;padding: 0 2.8125rem;"></div>
                                                        <?php
                                                        } ?>
                                                        <a class="vlt-read-more-link" href="#" data-fancybox data-src="assets/img/<?php echo $value["img"]; ?>" data-caption="<?php echo $value["description"]; ?>">
                                                            Read more<svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 8">
                                                                <defs />
                                                                <path d="M15.3536 4.35355c.1952-.19526.1952-.51184 0-.7071L12.1716.464466c-.1953-.195262-.5119-.195262-.7071 0-.1953.195262-.1953.511845 0 .707104L14.2929 4l-2.8284 2.82843c-.1953.19526-.1953.51184 0 .7071.1952.19527.5118.19527.7071 0l3.182-3.18198zM0 4.5h15v-1H0v1z" fill="currentColor" />
                                                            </svg></a>

                                                        </a>

                                                    </footer>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="vlt-gap-30--lg"></div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="vlt-section pp-scrollable" data-anchor="Projects">
                <div class="vlt-section__vertical-align">
                    <div class="vlt-section__content">

                        <div class="vlt-section__projects-background">
                            <img class="is-active" src="assets/img/project-01.jpg" alt="" loading="lazy">
                            <img src="assets/img/project-02.jpg" alt="" loading="lazy">
                        </div>
                        <div class="container">
                            <div class="vlt-gap-100"></div>

                            <div class="vlt-animated-block" data-animation-name="fadeInUpSm" style="animation-delay:0s; animation-duration:700ms;">

                                <div class="vlt-content-slider " data-navigation-anchor=".vlt-projects-anchor" data-effect="fade" data-gap="" data-loop="" data-speed="" data-autoplay="" data-autoplay-speed="" data-slides-centered="" data-slide-settings="{}" data-free-mode="" data-slider-offset="" data-mousewheel="">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <?php
                                            foreach ($projects as $key => $value) {
                                            ?>
                                                <div class="swiper-slide">
                                                    <article class="vlt-project">
                                                        <div class="col-md-12">
                                                            <div class="col-md-6">
                                                                <h3 class="vlt-project-title">
                                                                    <?php echo $value["title"]; ?><span class="has-accent-color">.</span>
                                                                </h3>
                                                                <div class="vlt-project-excerpt">
                                                                    <p>
                                                                        <?php echo $value["description"]; ?>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <img src="assets/img/<?php echo $value["image"]; ?>" alt="" loading="lazy">
                                                                <div class="vlt-gap-20"></div>
                                                                <?php if (isset($value["direct_link"]) && !is_null($value["direct_link"])) {


                                                                ?>
                                                                    <a class="vlt-btn vlt-btn--primary vlt-btn--md" href="<?php echo $value["direct_link"]; ?>" target="_blank">See
                                                                        Project </a>
                                                                <?php
                                                                }
                                                                if (isset($value["github_link"]) && !is_null($value["github_link"])) {
                                                                ?>
                                                                    <a class="vlt-btn vlt-btn--primary vlt-btn--md" href="<?php echo $value["github_link"]; ?>" target="_blank">See
                                                                        Project in Github</a>
                                                                <?php
                                                                } ?>
                                                            </div>
                                                        </div>

                                                    </article>
                                                </div>

                                            <?php
                                            }
                                            ?>
                                            <?php ?>

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
                                        <address>
                                            <?php echo $basics["city"]; ?>
                                        </address>
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
                                        <div class="vlt-gap-20">

                                            <?php
                                            if ($err == 10) {
                                            ?>
                                                <div class="message danger">Wrong captcha!!!</div>
                                            <?php
                                            }
                                            if ($err == 11) {
                                            ?>
                                                <div class="message success">Your message is successfully sent...</div>
                                            <?php
                                            }
                                            if ($err == 12) {
                                            ?>
                                                <div class="message danger">Sorry something went wrong!!!</div>
                                            <?php
                                            }
                                            ?>

                                        </div>

                                        <form id="message-form" action="send_email.php" method="post" novalidate>
                                            <div class="vlt-form-group">
                                                <input id="name" type="text" name="name" required placeholder="Your Name">
                                            </div>
                                            <div class="vlt-form-group">
                                                <input type="email" id="email" name="email" required placeholder="Your Email">
                                            </div>
                                            <div class="vlt-form-group">
                                                <textarea name="message" id="message" rows="3" required placeholder="Message"></textarea>
                                            </div>

                                            <div>
                                                <div style="display:inline-block;">
                                                    <div style="float: left;margin-top: 16px;">
                                                        <div id="captchaimage"><a href="<?php echo htmlEntities($_SERVER['PHP_SELF'], ENT_QUOTES); ?>#Contact" id="refreshimg" title="Click to refresh image"><img src="captcha/images/image.php?<?php echo time(); ?>" width="132" height="46" alt="Captcha image"></a></div>
                                                    </div>
                                                    <div style=" float: right;"><input type="text" maxlength="6" name="captcha" id="captcha" placeholder="Enter the characters..."></div>

                                                    <div class="message danger">case sensitive!!!</div>
                                                </div>
                                            </div>
                                            <input type="submit" class="vlt-btn vlt-btn--primary vlt-btn--md" value="Contact Me">
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
            <p>©
                <?php echo $basics["Copyright"]; ?>
            </p>
        </div>
        <!-- <div class="vlt-language-switcher"><a class="is-active" href="index.php">Eng</a><a href="index - fa.php">Fa</a></div> -->
    </footer>

    <!-- <script data-cfasync="false" src="assets/scripts/email-decode.min.js"></script> -->
    <script src="assets/vendors/jquery-3.5.1.min.js"></script>
    <script src="assets/scripts/vlt-plugins.min.js"></script>
    <script src="assets/scripts/vlt-helpers.js"></script>
    <script src="assets/scripts/vlt-controllers.min.js"></script>
    <!-- <script src='js/jquery.validate.min.js'></script> -->
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

    <script>
        $("#message-form").validate({
            errorClass: "error fail-alert",
            validClass: "valid success-alert",
            rules: {
                name: {
                    required: true,
                    maxlength: 30,
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                },
            },
            messages: {
                name: {
                    // required: "نام خود را وارد کنید",
                    // maxlength: "نام نمیتواند بیشتر از 30 کاراکتر باشد"

                },
                email: {
                    // required: "ایمیل خود را وارد کنید",
                    // email: "ایمیل خود را با فرمت صحیح وارد کنید"
                    required: 'Email is required.',
                    email: 'A valid email is required.'
                },
                message: {
                    // required: "ایمیل خود را وارد کنید",
                    // email: "ایمیل خود را با فرمت صحیح وارد کنید"
                },
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

</body>

</html>