<?php 
/*
    Template Name: Шаблон "Страницы контакты"
*/
?>

<?php get_header(); ?>

<main class="main">
        <div class="container">
            <div class="breadcrumbs">
                <a href="index.html">Главная</a>
                <p>></p>
                <p>Контакты </p>
            </div>
        </div>
        <section class="contacts">
            <div class="contacts__bg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts-bg.png" alt="bg">
            </div>
            <div class="container">
                <div class="contacts__info">
                    <div class="contacts__title">Контакты</div>
                    <a href="77071320798" class="contacts__phone">+7 (707) 132 07 98</a>
                    <a href="mailto:someemail@mail.com" class="contacts__phone">someemail@mail.com</a>
                    <p>г.Алматы, ул.Муратбаева, 211, 13</p>
                    <p>г.Алматы, ул.Шагабутдинова, 125, 37</p>
                    <p>С понедельника по пятницу
                        (Встреча на выходных? Не проблема)</p>
                    <p>09:00 - 18.00 (задержимся если потребуется)</p>
                    <div class="contacts__socials">
                        <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/fb.svg" alt="icon">
                        </a>
                        <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/whtsp.svg" alt="icon">
                        </a>
                        <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/insta.svg" alt="icon">
                        </a>
                    </div>
                </div>
            </div>

        </section>
    </main>

<?php get_footer(); ?>