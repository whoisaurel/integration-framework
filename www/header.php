<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="no-js ie lte-ie9 lte-ie8 lte-ie7 ie6" lang="fr"> <![endif]-->
<!--[if IE 7 ]>
<html class="no-js ie lte-ie9 lte-ie8 lte-ie7 ie7" lang="fr"> <![endif]-->
<!--[if IE 8 ]>
<html class="no-js ie lte-ie9 lte-ie8 ie8" lang="fr"> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js ie lte-ie9 ie9" lang="fr"> <![endif]-->
<!--[if !(IE)]><! -->
<html class="no-js" lang="fr"><!--<![endif]-->
<head itemscope itemtype="http://schema.org/WebSite">

    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title itemprop='name'></title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="canonical" href="https://example.com/" itemprop="url">
    <link rel="alternate" type="application/rss+xml" title="" href=""/>

    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/assets/img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/assets/img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/assets/img/favicons/safari-pinned-tab.svg" color="#e7484a">
    <link rel="shortcut icon" href="/assets/img/favicons/favicon.ico">
    <meta property="og:image" content="favicons/open-graph.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicons/mstile-144x144.png">
    <meta name="msapplication-config" content="favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Meta Facebook -->
    <meta property="og:postal-code" content=""/>
    <meta property="og:region" content=""/>
    <meta property="og:country-name" content=""/>
    <meta property="og:locality" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:street-address" content=""/>
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <meta property="og:longitude" content=""/>
    <meta property="og:latitude" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content=""/>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" media="all" href="/assets/css/main.css?t=<?php echo time(); ?>"/>

</head>
<body itemscope itemtype="http://schema.org/WebPage" class="<?php echo $class; ?>">
<div id="main" class="main-content">

    <header id="header" class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

        <div class="button__menu-container">
            <button class="button__menu-open">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </button>
            <button class="button__menu-close"></button>
        </div>

        <div class="wrapper">
            <div class="header__logo">
                <a href="#" class="header__logo-link">
                    <img src="" width="" height="" alt="">
                </a>
            </div>

            <?php if ($class == 'page__home') : ?>
                <h1 class="header__title visuallyhidden"><a href="01-home.php">Titre h1</a></h1>
            <?php else: ?>
                <div class="header__title visuallyhidden"><a href="01-home.php">Titre</a></div>
            <?php endif; ?>

        </div>

        <nav id="menu" class="menu menu__mobile" role="navigation" itemscope
             itemtype="http://schema.org/SiteNavigationElement">
            <div class="wrapper">
                <ul>
                    <li itemprop="url">
                        <a href="01-home.php" itemprop="name">menu item</a>
                        <ul>
                            <li itemprop="url"><a href="#" itemprop="name">menu item</a></li>
                            <li itemprop="url"><a href="#" itemprop="name">menu item</a></li>
                            <li itemprop="url"><a href="#" itemprop="name">menu item</a></li>
                            <li itemprop="url"><a href="#" itemprop="name">menu item</a></li>
                            <li itemprop="url"><a href="#" itemprop="name">menu item</a></li>
                            <li itemprop="url"><a href="#" itemprop="name">menu item</a></li>
                        </ul>
                    </li>
                    <li class="current-menu-item" itemprop="url"><a href="#" itemprop="name">menu item</a></li>
                    <li itemprop="url"><a href="#" itemprop="name">menu item</a></li>
                    <li itemprop="url"><a href="#" itemprop="name">menu item</a></li>
                    <li itemprop="url"><a href="#" itemprop="name">menu item</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main id="main__content" class="main__content" role="main" itemscope itemprop="mainContentOfPage"
          itemtype="http://schema.org/Blog">
        <div class="wrapper">