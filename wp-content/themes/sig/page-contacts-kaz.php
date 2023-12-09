<?php 
/*
    Template Name: Шаблон "Страницы контакты каз"
*/
?>

<?php get_header(); ?>

<main class="main">
        <div class="container">
            <div class="breadcrumbs">
                <a href="/">Главная</a>
                <p>></p>
                <p>Контактілер </p>
            </div>
        </div>
        <section class="contacts">
            <div class="contacts__bg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts-bg.png" alt="bg">
            </div>
            <div class="container">
                <div class="contacts__info">
                    <div class="contacts__title">Контактілер</div>
                    <a href="77071320798" class="contacts__phone">+7 (707) 132 07 98</a>
                    <a href="mailto:too.sig@mail.ru" class="contacts__phone">too.sig@mail.ru</a>
                    <p>Алматы қ., Муратбаев көш., 211, 13</p>
                    <p>Алматы қ., Шагабутдинов көш., 125, 37</p>
                    <p>Дүйсенбіден жұмаға дейін
                    (Демалыс күндері кездесу? Мәселе жоқ)</p>
                    <p>09:00 - 18.00 (қажет болса күтеміз)</p>
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