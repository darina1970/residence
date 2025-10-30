<?php
get_header();
?>

<main class="main">
    <section class="hero container">
        <div class="hero__wrapper">
            <?php
            $hero_image = get_field('hero_image');
            if ($hero_image):
            ?>
                <img class="hero__image" src="<?php echo esc_url($hero_image); ?>" alt="Hero Logo">
            <?php endif; ?>
            <div class="hero__buttons">
                <button class="hero__button-about btn btn-green open-modal">О проекте</button>
                <button class="hero__button-request btn btn-transparent open-modal">Оставить заявку</button>
            </div>
        </div>          
    </section>
    <div class="decoration">
        <?php
            $hero_bottom_image = get_field('hero-bottom_image');
            if ($hero_bottom_image):
            ?>
                <img src="<?php echo esc_url($hero_bottom_image); ?>" alt="photo">
        <?php endif; ?>
    </div>
    <div class="pulse-btn open-modal" id="callButton">
        <div class="pulse-circle"></div>
        <div class="pulse-wave"></div>
        <img class="pulse-icon" src="<?php echo get_template_directory_uri(); ?>/assets/call.svg" alt="phone">
    </div>
    <section class="section-common fade-in" id="about">
        <div class="container">
            <div class="block__wrapper">
                <?php
                $about_top_image = get_field('about_top_image');
                if ($about_top_image):
                    $top_img_url = is_array($about_top_image) ? $about_top_image['url'] : $about_top_image;
                ?>
                    <img class="block__top-img" src="<?php echo esc_url($top_img_url); ?>" alt="Декоративный элемент">
                <?php endif; ?>

                <?php if ($title = get_field('about_title')): ?>
                    <h1><?php echo esc_html($title); ?></h1>
                <?php endif; ?>

                <?php if ($content = get_field('about_content')): ?>
                    <div class="block-content">
                        <?php echo wp_kses_post($content); ?>
                    </div>
                <?php endif; ?>

                <button class="btn btn-green open-modal">Оставить заявку</button>
            </div>
        </div>

        <?php
        $about_decoration_inner = get_field('about_decoration_inner');
        if ($about_decoration_inner):
            $dec_img_url = is_array($about_decoration_inner) ? $about_decoration_inner['url'] : $about_decoration_inner;
        ?>
            <div class="decoration-inner">
                <img src="<?php echo esc_url($dec_img_url); ?>" alt="Фото ЖК">
            </div>
        <?php endif; ?>
    </section>
    <section class="section-common fade-in" id="location">
        <div class="container">
            <div class="block__wrapper">
                <?php
                $section_top_image = get_field('section2_top_image');
                if ($section_top_image):
                    $top_img_url = is_array($section_top_image) ? $section_top_image['url'] : $section_top_image;
                ?>
                    <img class="block__top-img" src="<?php echo esc_url($top_img_url); ?>" alt="Декоративный элемент">
                <?php endif; ?>

                <?php if ($title = get_field('section2_title')): ?>
                    <h1><?php echo esc_html($title); ?></h1>
                <?php endif; ?>

                <?php if ($content = get_field('section2_content')): ?>
                    <div class="block-content">
                        <?php echo wp_kses_post($content); ?>
                    </div>
                <?php endif; ?>

                <button class="btn btn-green open-modal">Оставить заявку</button>
            </div>
        </div>

        <?php
        $section_decoration_inner = get_field('section2_decoration_inner');
        if ($section_decoration_inner):
            $dec_img_url = is_array($section_decoration_inner) ? $section_decoration_inner['url'] : $section_decoration_inner;
        ?>
            <div class="decoration-inner">
                <img src="<?php echo esc_url($dec_img_url); ?>" alt="Фото ЖК">
            </div>
        <?php endif; ?>
    </section>
    <section class="section-common fade-in">
        <div class="container">
            <div class="block__wrapper">
                <?php
                $section_top_image = get_field('section3_top_image');
                if ($section_top_image):
                    $top_img_url = is_array($section_top_image) ? $section_top_image['url'] : $section_top_image;
                ?>
                    <img class="block__top-img" src="<?php echo esc_url($top_img_url); ?>" alt="Декоративный элемент">
                <?php endif; ?>

                <?php if ($title = get_field('section3_title')): ?>
                    <h1><?php echo esc_html($title); ?></h1>
                <?php endif; ?>

                <?php if ($content = get_field('section3_content')): ?>
                    <div class="block-content">
                        <?php echo wp_kses_post($content); ?>
                    </div>
                <?php endif; ?>

                <button class="btn btn-green open-modal">Оставить заявку</button>
            </div>
        </div>

        <?php
        $section_decoration_inner = get_field('section3_decoration_inner');
        if ($section_decoration_inner):
            $dec_img_url = is_array($section_decoration_inner) ? $section_decoration_inner['url'] : $section_decoration_inner;
        ?>
            <div class="decoration-inner">
                <img src="<?php echo esc_url($dec_img_url); ?>" alt="Фото ЖК">
            </div>
        <?php endif; ?>
    </section>
    <section class="section-common fade-in">
        <div class="container">
            <div class="block__wrapper">
                <?php
                $section_top_image = get_field('section4_top_image');
                if ($section_top_image):
                    $top_img_url = is_array($section_top_image) ? $section_top_image['url'] : $section_top_image;
                ?>
                    <img class="block__top-img" src="<?php echo esc_url($top_img_url); ?>" alt="Декоративный элемент">
                <?php endif; ?>

                <?php if ($title = get_field('section4_title')): ?>
                    <h1><?php echo esc_html($title); ?></h1>
                <?php endif; ?>

                <?php if ($content = get_field('section4_content')): ?>
                    <div class="block-content">
                        <?php echo wp_kses_post($content); ?>
                    </div>
                <?php endif; ?>

                <button class="btn btn-green open-modal">Оставить заявку</button>
            </div>
        </div>

        <?php
        $section_decoration_inner = get_field('section4_decoration_inner');
        if ($section_decoration_inner):
            $dec_img_url = is_array($section_decoration_inner) ? $section_decoration_inner['url'] : $section_decoration_inner;
        ?>
            <div class="decoration-inner">
                <img src="<?php echo esc_url($dec_img_url); ?>" alt="Фото ЖК">
            </div>
        <?php endif; ?>
    </section>
    <section class="section-common fade-in">
        <div class="container">
            <div class="block__wrapper">
                <?php
                $section_top_image = get_field('section5_top_image');
                if ($section_top_image):
                    $top_img_url = is_array($section_top_image) ? $section_top_image['url'] : $section_top_image;
                ?>
                    <img class="block__top-img" src="<?php echo esc_url($top_img_url); ?>" alt="Декоративный элемент">
                <?php endif; ?>

                <?php if ($title = get_field('section5_title')): ?>
                    <h1><?php echo esc_html($title); ?></h1>
                <?php endif; ?>

                <?php if ($content = get_field('section5_content')): ?>
                    <div class="block-content">
                        <?php echo wp_kses_post($content); ?>
                    </div>
                <?php endif; ?>

                <button class="btn btn-green open-modal">Оставить заявку</button>
            </div>
        </div>

        <?php
        $section_decoration_inner = get_field('section5_decoration_inner');
        if ($section_decoration_inner):
            $dec_img_url = is_array($section_decoration_inner) ? $section_decoration_inner['url'] : $section_decoration_inner;
        ?>
            <div class="decoration-inner">
                <img src="<?php echo esc_url($dec_img_url); ?>" alt="Фото ЖК">
            </div>
        <?php endif; ?>
    </section>
    <section class="section-common fade-in" id="double-block">
        <div class="container">
            <div class="block__wrapper">
                <?php
                $top_image = get_field('double_top_image');
                if ($top_image):
                    $top_img_url = is_array($top_image) ? $top_image['url'] : $top_image;
                ?>
                    <img class="block__top-img" src="<?php echo esc_url($top_img_url); ?>" alt="Декоративный элемент">
                <?php endif; ?>

                <?php if ($title = get_field('double_title')): ?>
                    <h2><?php echo esc_html($title); ?></h2>
                <?php endif; ?>

                <?php if ($content = get_field('double_content')): ?>
                    <div class="block-content">
                        <?php echo wp_kses_post($content); ?>
                    </div>
                <?php endif; ?>

                <button class="btn btn-green open-modal">Оставить заявку</button>
            </div>
        </div>

        <?php
        $dec_1 = get_field('double_decoration_1');
        $dec_2 = get_field('double_decoration_2');
        if ($dec_1 || $dec_2):
        ?>
            <div class="decoration-double container">
                <?php if ($dec_1):
                    $dec1_url = is_array($dec_1) ? $dec_1['url'] : $dec_1;
                ?>
                    <div class="img__wrapper">
                        <img src="<?php echo esc_url($dec1_url); ?>" alt="Декоративный элемент 1">
                    </div>
                <?php endif; ?>

                <?php if ($dec_2):
                    $dec2_url = is_array($dec_2) ? $dec_2['url'] : $dec_2;
                ?>
                    <div class="img__wrapper">
                        <img src="<?php echo esc_url($dec2_url); ?>" alt="Декоративный элемент 2">
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </section>
    <section class="section-common fade-in" id="appartments">
        <div class="container">
            <div class="block__wrapper">
                <?php
                $top_image = get_field('appartments_top_image');
                if ($top_image):
                    $top_img_url = is_array($top_image) ? $top_image['url'] : $top_image;
                ?>
                    <img class="block__top-img" src="<?php echo esc_url($top_img_url); ?>" alt="Декоративный элемент">
                <?php endif; ?>

                <?php if ($title = get_field('appartments_title')): ?>
                    <h2><?php echo esc_html($title); ?></h2>
                <?php endif; ?>

                <?php if ($content = get_field('appartments_content')): ?>
                    <div class="block-content">
                        <?php echo wp_kses_post($content); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="flats__wrapper container-fluid">
            <?php
            for ($i = 1; $i <= 4; $i++):
                $flat_img   = get_field("flat_{$i}_image");
                $flat_title = get_field("flat_{$i}_title");

                if ( !$flat_img && !$flat_title ) continue;

                $flat_img_url = is_array($flat_img) ? $flat_img['url'] : $flat_img;
            ?>
                <div class="flat__wrapper">
                    <?php if ($flat_img): ?>
                        <div class="flat-img__wrapper">
                            <img src="<?php echo esc_url($flat_img_url); ?>" alt="<?php echo esc_attr($flat_title ?: 'Квартира'); ?>">
                        </div>
                    <?php endif; ?>

                    <?php if ($flat_title): ?>
                        <h4 class="flat__title"><?php echo esc_html($flat_title); ?></h4>
                    <?php endif; ?>

                    <button class="btn btn-green open-modal">Узнать цены</button>
                </div>
            <?php endfor; ?>
        </div>

        <?php
        $decoration = get_field('appartments_decoration');
        if ($decoration):
            $dec_img_url = is_array($decoration) ? $decoration['url'] : $decoration;
        ?>
            <div class="decoration-inner">
                <img src="<?php echo esc_url($dec_img_url); ?>" alt="">
            </div>
        <?php endif; ?>
    </section>
    <section class="contacts" id="contacts">
        <div class="contacts__content">
            <h3 class="contacts__title">Офис продаж</h3>
            <div class="contacts__address">
                <p class="contacts__city">г. Москва,</p>
                <p class="contacts__street">ул. Кржижановского,</p>
                <p class="contacts__building">д. 31</p>  
            </div>
            <form class="contact-form">
                <input type="text" name="name" placeholder="Имя*" required>
                <input type="tel" name="phone" placeholder="Телефон*" required>
                <button class="btn btn-green" type="submit">Отправить</button>
            </form>
        </div>
        <div class="contacts__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/office.jpg" alt="office">
        </div>
    </section>
    <div class="modal" id="offerModal">
        <div class="modal__overlay"></div>
        <div class="modal__content">
            <button class="modal__close">&times;</button>
            <h4 class="modal__title">Получить предложение</h4>
            <form class="modal__form">
                <input type="text" name="name" placeholder="Ваше имя*" required>
                <input type="tel" name="phone" placeholder="Номер телефона*" required>
                <button type="submit" class="btn btn-green">Отправить</button>
            </form>
        </div>
    </div>
</main>

<?php
get_footer();
?>