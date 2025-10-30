<footer class="footer">
    <div class="footer__wrapper container">
        <div class="footer-left">
            <?php
            $footer_logo = get_field('footer_logo');
            if ($footer_logo) {
                echo '<a href="#"><img src="' . esc_url($footer_logo['url']) . '" alt="' . esc_attr(get_bloginfo('name')) . '" class="footer__logo"></a>';
            }
            $footer_description = get_field('footer_description');
            if ($footer_description) {
                echo '<p>' . esc_html($footer_description) . '</p>';
            }
            ?>
        </div>
        <div class="footer-right">
            <h4 class="footer__title">Контактная информация</h4>
            <?php
            $company_name = get_field('footer_company_name');
            if ($company_name) {
                echo '<p><a href="#">' . esc_html($company_name) . '</a> © ' . date('Y') . '.</p>';
            }

            $address = get_field('footer_address');
            if ($address) {
                echo '<p>' . esc_html($address) . '</p>';
            }

            $phone = get_field('footer_phone');
            if ($phone) {
                echo '<p><a href="tel:' . esc_attr($phone) . '">' . esc_html($phone) . '</a></p>';
            }
            ?>
        </div>

    </div>
</footer>

<?php
wp_footer(); 
?>

</body>
</html>