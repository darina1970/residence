<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <?php
            if (has_custom_logo()) {
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                echo '<a href="#" class="header-logo__wrapper">';
                echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" class="header__logo">';
                echo '</a>';
            }
        ?>
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