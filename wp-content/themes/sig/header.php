<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sig
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Merriweather:wght@400;700&family=Yeseva+One&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/logo.svg">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
    <header class="header">
        <div class="header__top">
            <div class="container">
                <a href="/" class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/logo.svg" alt="logo">
                </a>
                <div class="header__menu--desktop">
                    <?php wp_nav_menu(); ?>
                    <!-- <div class="header__nav">
                        <ul>
                            <li>
                                <a href="/about">О нас</a>
                            </li>
                            <li>
                                <a href="/services" id="services">Услуги</a>
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
                </div>
                <div class="langs">
                    <p>Рус</p>
                    <hr>
                    <a href="/kk">Қаз</a>
                </div>
                <div class="burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <hr>
        <div class="header__bot">
            <div class="container">
                <div class="header__left">
                    <b>
                        Услуги, которые мы можем вам предоставить
                    </b>
                    <p>
                        SARZHAN INVEST GROUP стремится создавать долгосрочную ценность для всех заинтересованных сторон,
                        с помощью
                        услуг и решений, основанных на аналитических данных и новейших технологиях.
                    </p>
                </div>
                <div class="header__right">
                    <ul>
                        <li>
                            <a href="">Оценка движимого и недвижимого имущества</a>
                        </li>
                        <li>
                            <a href="">Оценка интеллектуальной собственности</a>
                        </li>
                        <li>
                            <a href="">Строительная экспертиза</a>
                        </li>
                        <li>
                            <a href="">Юридические услуги</a>
                        </li>
                        <li>
                            <a href="">Оформление и узаконение имущества</a>
                        </li>
                        <li>
                            <a href="">Налоговое и правовое консультирование</a>
                        </li>
                        <li>
                            <a href="">Аудиторские услуги</a>
                        </li>
                        <li>
                            <a href="">Помощь в получении займов в банках РК</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header__mobile">
            <div class="header__mobile--wrapper"></div>
            <div class="header__mobile--content">
                <?php wp_nav_menu(); ?>
                <!-- <div class="header__nav">
                    <ul>
                        <li>
                            <a href="/about">О нас</a>
                        </li>
                        <li>
                            <a href="/services" id="services">Услуги</a>
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
            </div>
        </div>
    </header>
