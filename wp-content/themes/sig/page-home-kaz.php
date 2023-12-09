<?php 
/*
    Template Name: Шаблон "Главной страницы каз"
*/
?>

<?php get_header(); ?>

<main class="main">

<section class="banner">
    <div class="banner__slider">
        <div class="banner__item">
            <video src="<?php echo get_template_directory_uri(); ?>/assets/video/qwer.mp4" autoplay muted loop width="100%"></video>            
        </div>
        <div class="banner__item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner1.png" alt="banner">
        </div>
        <div class="banner__item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner2.png" alt="banner">
        </div>
        <div class="banner__item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner3.png" alt="banner">
        </div>
    </div>
    <div class="banner__content">
        <div class="container">
            <div class="banner__info">
                <b>SARZHAN </b>
                <span>INVEST GROUP</span>
                <p>
                    Біз құндылықты – кәсіби, объективті, дер кезінде анықтаймыз
                </p>
            </div>
        </div>
    </div>
</section>

<section class="about" id="about">
    
    <div class="about__bg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-bg.png" alt="bg">
    </div>
    <div class="container">
        <div class="about__title main-title">Біз туралы</div>
        <div class="about__content">
            «Саржан Инвест Групп» ЖШС стратегиялық мәселелерді шешуге бағытталған қайта құрылымдау жүргізді
            кәсіпорын қызметінің тиімділігін сақтау, арттыру міндеттері
            бәсекеге қабілеттілік және компанияның дамуы. Сізге «Саржан Инвест Групп» ЖШС ұсына алады
            Қазақстан нарығында мүлікті бағалау және зияткерлік саласындағы қызметтердің ең кең спектрі
            мүлік. Біз әрқашан серіктестеріміздің қажеттіліктерін ескереміз және жаңа жобалармен жұмыс істеуге дайынбыз
            бизнес мүмкіндіктерін кеңейту. Біз өз жұмысымызда ең алдымен сапаны және
            кәсіпқойлық, бұл бізге кең ауқымды клиенттер арасында сұранысқа ие болуға мүмкіндік береді
            қажеттіліктер. <br><br>
            Біздің мүмкіндіктеріміз. <br>
            «Саржан Инвест Групп» ЖШС мүлікті бағалау және зияткерлік меншік саласында қызмет көрсетеді
             құнды кәсіби және әділ бағалауға негізделген мүлік. Бізді қызықтырады
             ұзақ мерзімді ынтымақтастықта және жеткізу кезінде өзара есеп айырысудың жеңілдетілген шарттарын ұсынуға дайын
             барынша қысқа мерзімде қызметтерді көрсету.
        </div>
        <a class="about__btn btn-yellow" href="/about">Толығырақ</a>
    </div>
</section>

<section class="services" id="services">
    <div class="container">
        <div class="services__title main-title">ҚЫЗМЕТТЕР</div>
    </div>
    <div class="services__slider">
        <?php
            global $post;

            $myposts = get_posts([ 
                'numberposts' => -1,
                'category'    => 3
            ]);

            if( $myposts ){
                foreach( $myposts as $post ){
                    setup_postdata( $post );
                    ?>

                    <div class="services__item">
                        <?php the_post_thumbnail(); ?>
                        <div class="services__content">
                            <div class="container">
                                <div class="services__info">
                                    <b><?php the_title(); ?></b>
                                    <a href="<?php the_permalink(); ?>">Толығырақ</a>
                                </div>
                            </div>
                        </div>
                    </div>

                     
                    <?php 
                }
            } else {
                // Постов не найдено
            }

            wp_reset_postdata(); // Сбрасываем $post
        ?>
    </div>
</section>

<section class="team">
    <div class="team__bg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team-bg.png" alt="bg" loading='lazy'>
    </div>
    <div class="container">
        <div class="team__title main-title">Бізге сенеді</div>
    </div>
    <div class="team__slider1">
        <div class="team__item1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/part1.png" alt="icon" loading='lazy'>
        </div>
        <div class="team__item1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/part2.png" alt="icon" loading='lazy'>
        </div>
        <div class="team__item1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/part3.png" alt="icon" loading='lazy'>
        </div>
        <div class="team__item1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/part4.png" alt="icon" loading='lazy'>
        </div>
        <div class="team__item1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/part5.jpg" alt="icon" loading='lazy'>
        </div>
        <div class="team__item1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/part6.png" alt="icon" loading='lazy'>
        </div>
        <div class="team__item1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/part8.png" alt="icon" loading='lazy'>
        </div>
        <div class="team__item1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/part9.png" alt="icon" loading='lazy'>
        </div>
        <div class="team__item1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/part10.png" alt="icon" loading='lazy'>
        </div>
        <div class="team__item1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/part11.jpg" alt="icon" loading='lazy'>
        </div>
        <div class="team__item1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/part12.png" alt="icon" loading='lazy'>
        </div>
        <div class="team__item1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/part13.png" alt="icon" loading='lazy'>
        </div>
        <div class="team__item1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/part14.png" alt="icon" loading='lazy'>
        </div>
        <div class="team__item1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/part15.png" alt="icon" loading='lazy'>
        </div>
        <div class="team__item1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/part16.png" alt="icon" loading='lazy'>
        </div>
        <div class="team__item1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/part17.png" alt="icon" loading='lazy'>
        </div>
        <div class="team__item1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/part18.jpg" alt="icon" loading='lazy'>
        </div>
        <div class="team__item1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/part19.jpg" alt="icon" loading='lazy'>
        </div>
        <div class="team__item1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/part20.png" alt="icon" loading='lazy'>
        </div>
        <div class="team__item1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/part21.png" alt="icon" loading='lazy'>
        </div>
        <div class="team__item1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/part22.jpg" alt="icon" loading='lazy'>
        </div>
        <div class="team__item1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/part23.jpg" alt="icon" loading='lazy'>
        </div>
        <div class="team__item1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/part24.jpg" alt="icon" loading='lazy'>
        </div>
        <div class="team__item1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/part25.jpg" alt="icon" loading='lazy'>
        </div>
        <div class="team__item1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/part26.jpg" alt="icon" loading='lazy'>
        </div>
        <div class="team__item1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/part27.png" alt="icon" loading='lazy'>
        </div>
        <div class="team__item1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/part28.jpg" alt="icon" loading='lazy'>
        </div>

    </div>
    <div class="container">
        <div class="team__title2 main-title" id="team">КОМАНДА</div>
        <div class="team__slider2">
            <div class="team__item2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team3.jpg" alt="person" loading='lazy'>
                <b>Саржанов Асхат</b>
                <p>Основатель компании</p>
                <p>
                    За его плечами более 30-летний опыт работы в сфере оценки бизнеса и оценке стоимости 
                    нематериальных и основных активов и управления проектами. За годы осуществления деятельности, 
                    руководил множеством проектов по оценке имущества производственных предприятий, организовывает 
                    обслуживание страховых компаний. А также, внес значительный вклад в развитие данной отрасли 
                    в РК. Член палаты оценщиков «Содружество оценщиков Казахстана», Член экспертного совета палаты 
                    оценщиков «Содружество оценщиков Казахстана».
                </p>
            </div>
            <div class="team__item2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team4.jpg" alt="person" loading='lazy'>
                <b>Саржанов Муслим</b>
                <p>Генеральный директор</p>
                <p>
                    Общий стаж работы более 20 лет. Оценщик - член и советник директора палаты оценщиков 
                    «Содружество оценщиков Казахстана». 
                    Цель: давать людям уверенность и надежность, делая их жизнь лучше, помогая реализовывать их 
                    устремления и мечты. 
                    Лозунг: Я знаю цену времени, имущества и мысли!!!
                    Мечта: основать первую Казахстанскую международную компанию в области консалтинга и 
                    финансовых услуг, со 100% Казахстанским участием.
                </p>
            </div>
            <div class="team__item2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team6.jpg" alt="person" loading='lazy'>
                <b>Саржанов Даирхан</b>
                <p>Заместитель Генерального директора</p>
                <p>
                    За свой более чем 15-летний опыт работы в сфере оценки, является лидером практики оценочных 
                    услуг, создает команды из людей со стратегическим видением для быстрого и эффективного 
                    оказания услуг клиентам.
                </p>
            </div>
            <div class="team__item2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team2.jpg" alt="person" loading='lazy'>
                <b>Китайбек Асхат</b>
                <p>Директор SMAD GROUP</p>
                <p>
                    За свой более чем 4-летний опыт работы в сфере оценки успешно инициировал и возглавлял ряд 
                    сложноорганизованных проектов — от концепции до завершения. В нынешнем качестве директора 
                    отвечает за всестороннюю реализацию флагманского проекта.
                </p>
            </div>
            <div class="team__item2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team5.jpg" alt="person" loading='lazy'>
                <b>Нигматов Малик</b>
                <p>Директор Ocenim.kz</p>
                <p>
                    За его плечами более 5-летний опыт работы в сфере оценки и управления проектами. Эффективный 
                    лидер с обширным опытом предоставления услуг.
                </p>
            </div>
            <div class="team__item2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team1.jpg" alt="person" loading='lazy'>
                <b>Аймухамбетов Темирлан</b>
                <p>Директор Golden Mark Group</p>
                <p>
                    За свой более чем 7-летний опыт работы в сфере оценки, активно участвует в проектах по 
                    улучшению делового климата и инвестиционной привлекательности, курирует проекты по оценке.
                </p>
            </div>                                               
            <div class="team__item2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team7.jpg" alt="person" loading='lazy'>
                <b>Нурадилов Азамат</b>
                <p>Директор SAD Group</p>
                <p>
                    За свой более чем 2-летний опыт работы в сфере оценки, стремится создавать ценность для 
                    бизнеса и общества, помогая клиентам пройти через трансформацию их бизнеса. Благодаря 
                    приверженности принципам прозрачности и доверия, Азамат выстраивает долгосрочные и надежные 
                    отношения с клиентами.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="consult">
    <div class="consult__bg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/consult__bg.png" alt="" loading='lazy'>
    </div>
    <div class="container">
        <div class="consult__title">
        2013 жылдан бері және бүгінде ол қарқынды дамып келе жатқан және жетекші орындардың бірі болып табылады
             Қазақстандық компания консалтингтік қызметтер нарығында
        </div>
        <div class="consult__content">
            <div class="consult__number">
                <b>11</b>
                <p>Біз сіз үшін жылдар бойы жұмыс істеп келеміз</p>
            </div>
            <div class="consult__form">
                <form action="">
                    <?php echo do_shortcode('[contact-form-7 id="f737cdc" title="Контактная форма"]'); ?>                    
                </form>
            </div>
        </div>

    </div>
</section>

<section class="materials" id="news">
    <div class="container">
        <div class="materials__title main-title">Ағымдағы материалдар</div>
        <div class="materials__content">
        <?php
            global $post;

            $myposts = get_posts([ 
                'numberposts' => 3,
                'category'    => 2
            ]);

            if( $myposts ){
                foreach( $myposts as $post ){
                    setup_postdata( $post );
                    ?>
                     <div class="materials__item">
                     <?php the_post_thumbnail(); ?>
                        <!-- <img src="" alt="mat"> -->
                        <div class="materials__info">
                            <p><?php the_title(); ?></p>
                            <a href="<?php the_permalink(); ?>">Ары қарай оқу</a>
                        </div>
                    </div>
                    <?php 
                }
            } else {
                // Постов не найдено
            }

            wp_reset_postdata(); // Сбрасываем $post
        ?>
           
        </div>
    </div>
</section>

<section class="contacts">
    <div class="contacts__bg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts-bg.png" alt="bg" loading='lazy'>
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
                <a href="https://wa.me/87071320798">
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