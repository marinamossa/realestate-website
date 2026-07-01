<?php require_once __DIR__ . '/../bootstrap.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   <title><?= e($pageTitle ?? SITE_NAME); ?></title>

    <meta name="description" content="<?= e($pageDescription ?? 'Dubai Realty is a real estate agency in Dubai. Buy, sell or rent properties in Dubai.'); ?>" />

    <link rel="canonical" href="<?= page_url($canonical ?? 'index.php'); ?>" />

   <meta property="og:type" content="<?= e($ogType ?? 'website'); ?>" />
    <meta property="og:url" content="<?= page_url($canonical ?? 'index.php'); ?>" />
    <meta property="og:title" content="<?= e($pageTitle ?? SITE_NAME); ?>" />
    <meta property="og:description" content="<?= e($pageDescription ?? 'Find apartments, villas and luxury properties in Dubai.'); ?>" />
   <meta property="og:image" content="<?= asset($ogImage ?? 'img/og-preview.jpg'); ?>" />
    <meta property="og:image:alt" content="<?= e($ogImageAlt ?? SITE_NAME . ' preview'); ?>" />
   <meta property="og:site_name" content="<?= e(SITE_NAME); ?>" />
    <meta property="og:locale" content="en_US" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?= e($pageTitle ?? SITE_NAME); ?>" />
    <meta name="twitter:description" content="<?= e($pageDescription ?? 'Buy, sell or rent apartments and villas in Dubai with Dubai Realty.'); ?>" />
    <meta name="twitter:image" content="<?= asset($ogImage ?? 'img/og-preview.jpg'); ?>" />
    <meta name="twitter:image:alt" content="<?= e($ogImageAlt ?? SITE_NAME . ' preview'); ?>" />
    <meta name="theme-color" content="#0b0b0f" />
    <link rel="icon" href="<?= asset('favicon.ico'); ?>" type="image/x-icon" />

    <link rel="stylesheet" type="text/css" href="<?= asset('slick/slick.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?= asset('slick/slick-theme.css'); ?>" />
    <link rel="stylesheet" href="<?= asset('css/style.css'); ?>" />

    <script defer src="<?= asset('js/main.js'); ?>"></script>
    <script defer src="<?= asset('js/video-accordion.js'); ?>"></script>
    <script defer type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script defer type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script defer type="text/javascript" src="<?= asset('slick/slick.min.js'); ?>"></script>
    <script defer src="<?= asset('js/slider.js'); ?>"></script>
</head>

<body id="body">
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="header__inner">
                    <div class="header-logo logo">
                        <a href="<?= page_url('index.php'); ?>" class="logo__link">
                            <img
                            src="<?= asset('img/logo-dubai.svg'); ?>"
                            alt="<?= e(SITE_NAME); ?> logo" />
                        </a>
                    </div>
                    <nav class="header__menu" id="header_menu">
                       <ul class="header__menu-list">
    <li class="header__menu-item menu-dropdown" id="click-dropdown">
        <a href="#" class="header__menu-link dropdown-btn <?= is_current_page('category.php') ? 'is-current' : ''; ?>" id="dropdown_link" onclick="return false">
            Category
        </a>

        <ul class="header__menu-dropdown" id="header-dropdown">
            <li class="header__menu-dropdown-item">
                <a href="<?= page_url('category.php'); ?>" class="header__menu-dropdown-link">
                    All offers
                </a>
            </li>

            <li class="header__menu-dropdown-item">
                <a href="<?= page_url('category.php'); ?>" class="header__menu-dropdown-link">
                    Commercial real estate
                </a>
            </li>

            <li class="header__menu-dropdown-item">
                <a href="<?= page_url('category.php'); ?>" class="header__menu-dropdown-link">
                    Apartments for rent
                </a>
            </li>

            <li class="header__menu-dropdown-item">
                <a href="<?= page_url('category.php'); ?>" class="header__menu-dropdown-link">
                    Villas and Townhouses
                </a>
            </li>
        </ul>
    </li>

    <li class="header__menu-item">
        <a
	href="<?= page_url('blog.php'); ?>"
	class="header__menu-link <?= is_blog_section() ? 'is-current' : ''; ?>"
>
	Blog
</a>
    </li>

    <li class="header__menu-item">
        <a href="<?= page_url('services.php'); ?>" class="header__menu-link <?= is_current_page('services.php') ? 'is-current' : ''; ?>">
            Services
        </a>
    </li>

    <li class="header__menu-item">
        <a href="<?= page_url('contact.php'); ?>" class="header__menu-link <?= is_current_page('contact.php') ? 'is-current' : ''; ?>">
            Contact
        </a>
    </li>
</ul>
                        <div class="header__menu-nav-wrp">
                            <button class="regular-btn" onclick="popupOpen()">
                                Book a consultation
                            </button>
                            <div class="header__contacts">
                                <span><?= SITE_PHONE; ?></span>
                            </div>
                            <div class="header__switch-lang">
                                <a href="#" class="switch-lang__en lang-on" onclick="return false">en</a>
                                <a href="#" class="switch-lang__ru" onclick="return false">ru</a>
                            </div>
                        </div>
                    </nav>
                    <div class="header__inner-wrp">
                        <button class="regular-btn" onclick="popupOpen()">
                            Book a consultation
                        </button>
                        <div class="header__switch-lang">
                            <a href="#" class="switch-lang__en lang-on">en</a>
                            <a href="#" class="switch-lang__ru">ru</a>
                        </div>
                        <div class="header__contacts">
                            <span><?= SITE_PHONE; ?></span>
                        </div>
                        <div class="header__burger-wrp">
                            <div class="header__burger" id="burger">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>