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
                <!-- <div class="footer__nav">
                    <ul>
                        <li>
                            <a href="/about">О нас</a>
                        </li>
                        <li>
                            <a href="/services">Услуги</a>
                        </li>
                        <li>
                            <a href="/trustus">Нам доверяют</a>
                        </li>
                        <li>
                            <a href="/news">Публикации</a>
                        </li>
                        <li>
                            <a href="/contacts">Контакты</a>
                        </li>
                    </ul>
                </div> -->
                <ul class="footer__subnav">
                    <li>
                        <a href="">Оценка движимого и недвижимого имущества</a>
                    </li>
                    <li>
                        <a href="">Строительная экспертиза</a>
                    </li>
                    <li>
                        <a href="">Оценка интеллектуальной собственности</a>
                    </li>
                    <li>
                        <a href="">Оформление и узаконение имущества</a>
                    </li>
                    <li>
                        <a href="">Аудиторские услуги</a>
                    </li>
                    <li>
                        <a href="">Налоговое и правовое консультирование</a>
                    </li>
                    <li>
                        <a href="">Помощь в получении займов в банках РК</a>
                    </li>
                    <li>
                        <a href="">Юридические услуги</a>
                    </li>
                </ul>
                <div class="footer__bot">
                    <div class="footer__mobile">
                        <a href="">+7 (707) 777-77-77</a>
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




