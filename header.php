<?php
// Include seo variables;
include("seo.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $pageDescr; ?>">
    <meta name="robots" content="<?php echo INDEX; ?>"
    <?php 
    // If canonical is present
    if($pageCanonical) {
        echo '<link rel="Canonical" href="' . $pageCanonical . '">';
    }

    // If meta robots specified
    if($pageRobots) {
        echo '<meta name="robots" content="' . $pageRobots . '">';
    }
    ?>
    <link rel="icon" tpe="image/png" href="/images/favicon.png">
    <link href="sass/main.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" rel="stylesheet">

</head>

<body>

    <!-- <div class="theme-picker">
        <div class="theme-picker__choice theme-picker__choice--one" data-color="primary"></div>
        <div class="theme-picker__choice theme-picker__choice--two" data-color="secondary"></div>
        <div class="theme-picker__choice theme-picker__choice--three" data-color="tertiary"></div>
    </div> -->

    <header class="header" id="top">
        
        <!-- Navigation -->

            <div class="row">
                <nav class="navigation">

                        <!-- Main Menu-->
                        <ul class="main-menu">
                            <li class="main-menu__item">
                                <a href="#top">Home</a>
                            </li>
                            <li class="main-menu__item">
                                <a href="#intro">About</a>
                            </li>
                            <li class="main-menu__item">
                                <a href="#resume">Resume</a>
                            </li>
                            <li class="main-menu__item">
                                <a href="#contact">Contact</a>
                            </li>
                            <!-- <li class="main-menu__item">
                                <a href="notes.php">Notes</a>
                            </li> -->
                        </ul>
                        <!-- / main menu -->



                        <!-- Social icons -->
                        <ul class="social-list">
                            <li class="social-list__item">
                                <a href="https://twitter.com/jjdev6" target="_blank"><i class="lab la-twitter"></i></a>
                            </li>
                            <li class="social-list__item">
                                <a href="https://github.com/JeremyJamesL" target="_blank"><i class="lab la-github"></i></a> 
                            </li>
                            <li class="social-list__item">
                                <a href="mailto:jeremy@jeremyjl.com"><i class="las la-envelope"></i></a>
                            </li>
                        </ul>
                        <!-- / social icons -->

                        <!-- Menu toggle -->
                        <div class="menu-toggle" onclick="openNav()">
                            <i class="las la-bars"></i>
                        </div>


                </nav>

            </div>

        
        <!-- / navigation -->

        <!-- Personal info -->    
        <div class="row">

            <div class="col-1-of-3 header__headshot-container">
                <img src="images/headshot.jpg" alt='' class="header__headshot">
            </div>

            <div class="col-2-of-3">

                <h1 class="header__name">Jeremy Luscombe_</h1>
                <h2 class="header__job-title">Digital marketer, SEO</h2>

                <!-- Header profile list -->
                <ul class="profile-list">

                    <li class="profile-list__item">
                        <span class="profile-list__item-title">Email: </span>
                        <span class="profile-list__item-data"><a href="mailto:jeremy@jeremyjl.com">Jeremy@jeremyjl.com</a></span>
                    </li>

                    <li class="profile-list__item">
                        <span class="profile-list__item-title">Address: </span>
                        <span class="profile-list__item-data">London, United Kingdom</span>
                    </li>

                </ul><!-- / Header profile list -->

            </div>
            
        </div>
        <!-- /personal info -->

</header>