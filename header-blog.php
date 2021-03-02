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
    <link rel="icon" type="image/png" href="<?php echo FAVICON;?>">
    <link href="/sass/main.css" rel="stylesheet">
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
                            <a href="/index.php">&#10229; Back home</a>

                        </li>
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

            <h1 class="header__name">Notes_</h1>
            <h2 class="header__sub">Writings about tech SEO and related bits n bobs</h2>
            
        </div>
        <!-- /personal info -->

</header>