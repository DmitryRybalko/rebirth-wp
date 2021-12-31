<!DOCTYPE html>
<html <?php get_language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ЖК ВОЗРОЖДЕНИЕ</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <?php wp_head(); ?>
</head>

<body>
    <div class="mobile-menu">
        <ul class="mobile-menu__list">
            <li class="mobile-menu__item">
                <a class="mobile-menu__link nav-link" href="./pages/about.html">О компании</a>
            </li>
            <li class="mobile-menu__item">
                <a class="mobile-menu__link nav-link" href="./pages/news.html">Новости</a>
            </li>
            <li class="mobile-menu__item">
                <a class="mobile-menu__link nav-link" href="./pages/documents.html">Документы</a>
            </li>
            <li class="mobile-menu__item">
                <a class="mobile-menu__link nav-link" href="./pages/projects.html">Проекты</a>
            </li>
        </ul>
        <div class="mobile-menu__phone">
            <div class="mobile-menu__connect">
                <span class="mobile-menu__phone-number phone-number">+7 982 45-22-67</span>
                <span class="mobile-menu__work-hours work-hours">Пн-Пт. с 8:00 до 19:00</span>
            </div>
            <a class="mobile-menu__phone-link phone-link oval-element--blue" href="tel:+798245-22-67"><span
                    class="mobile-menu__phone-text">Позвонить</span>
                <img class="mobile-menu__phone-img phone-img"
                    src="<?php bloginfo("template_url")?>/assets/icons/phone.svg" alt="телефон" /></a>
        </div>
    </div>
    <header class="header">
        <div class="header__wrapper">
            <div class="container">
                <nav class="header__nav">
                    <a class="header__logo logo" href="./index.html">
                        <img class="header__logo-small"
                            src="<?php bloginfo("template_url")?>/assets/images/logo/logo-mobile.svg"
                            alt="жк возрождение" />
                        <img class="header__logo-big" src="<?php bloginfo("template_url")?>/assets/images/logo/logo.svg"
                            alt="жк возрождение" />
                    </a>
                    <ul class="header__list">
                        <li class="header__item">
                            <a class="header__link nav-link" href="./pages/about.html">О компании</a>
                        </li>
                        <li class="header__item">
                            <a class="header__link nav-link" href="./pages/news.html">Новости</a>
                        </li>
                        <li class="header__item">
                            <a class="header__link nav-link" href="./pages/documents.html">Документы</a>
                        </li>
                        <li class="header__item">
                            <a class="header__link nav-link" href="./pages/projects.html">Проекты</a>
                        </li>
                    </ul>
                    <div class="header__phone">
                        <div class="header__connect">
                            <span class="header__phone-number phone-number">+7 982 45-22-67</span>
                            <span class="header__work-hours work-hours">Пн-Пт. с 8:00 до 19:00</span>
                        </div>
                        <a class="header__phone-link phone-link" href="tel:+798245-22-67"><img
                                class="header__phone-img phone-img"
                                src="<?php bloginfo("template_url")?>/assets/icons/phone.svg" alt="телефон" /></a>
                    </div>
                    <button class="header__menu-btn menu-btn oval-element--blue">
                        <span class="menu-btn-text">Menu</span>
                        <img class="menu-btn-icon" src="<?php bloginfo("template_url")?>/assets/icons/menu.svg"
                            alt="иконка меню - открыть" />
                        <img class="menu-btn-icon menu-toggled"
                            src="<?php bloginfo("template_url")?>/assets/icons/menu-close.svg"
                            alt="иконка меню - закрыть" />
                    </button>
                </nav>
            </div>
        </div>
        <div class="container">
            <div class="header__main">
                <h1 class="header__title heading">
                    Более <span class="underline">1000</span> комфортных квартир от 2,3
                    млн рублей в Дзержинском р-не Ярославля
                </h1>
                <div class="header__consultation">
                    <button class="header__action-btn oval-element--blue" href="#">Выбрать квартиру
                        <img class="header__building-icon building-icon"
                            src="<?php bloginfo("template_url")?>/assets/icons/house.svg"
                            alt="иконка здания" /></button>
                    <button class="header__action-btn header__consultation-btn oval-element open-modal"
                        href="#">Получить консультацию</button>
                </div>
            </div>
        </div>
    </header>