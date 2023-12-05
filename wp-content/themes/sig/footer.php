<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sig
 */

?>

<footer class="footer">
        <hr>
        <div class="container">
            <div class="footer__left">
                <a href="/" class="footer__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/logo.svg" alt="logo">
                </a>
                <div class="footer__deskop">
                    <a href="">+7 (707) 777-77-77</a>
                    <a href="">someemail@mail.com</a>
                </div>
            </div>
            <div class="footer__right">
                <?php wp_nav_menu(); ?>
                <?php wp_nav_menu(array(
                        'menu' => 5,
                        'menu_class' => 'footer__subnav', // Можно также указать класс для стилизации меню через CSS.
                        'container' => ' ',
                        'container_class' => ' ', // Можно также указать класс контейнера.
                    ));

                    ; ?>
                
                <div class="footer__bot">
                    <div class="footer__mobile">
                        <a href="77071320798">+7 (707) 132-07-98</a>
                        <a href="">someemail@mail.com</a>
                    </div>
                    <p>Все права защищены</p>
                    <a href="/policy">Политика конфиденциальности</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.6.3.min.js" defer></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js" defer></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js" defer></script>

	<?php wp_footer(); ?>
</body>

</html>




