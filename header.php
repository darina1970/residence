<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <a class="header-logo__wrapper" href="#">
            <img src="./assets/logo-small.svg" alt="logo" class="header__logo">
        </a>
        <nav class="nav">
            <ul class="header__menu">
                <li class="menu__item"><a href="#about">О проекте</a></li>
                <li class="menu__item"><a href="#location">Расположение</a></li>
                <li class="menu__item"><a href="#appartments">Квартиры</a></li>
                <li class="menu__item"><a href="#contacts">Контакты</a></li>
            </ul>
        </nav>
        <button class="header__btn btn btn-green open-modal">Заказать звонок</button>
    </header>