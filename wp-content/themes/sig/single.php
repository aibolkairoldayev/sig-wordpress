<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package sig
 */

get_header();

?>
	<main class="main single">
        <section class="new-banner">
            <div class="new-banner__bg">
				<?php the_post_thumbnail(); ?>
            </div>
            <div class="new-banner__wrapper">
                <div class="container">
                    <div class="new-banner__title"><?php the_title(); ?></div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="breadcrumbs">
                <a href="/">Главная</a>
                <p>></p>
                <p><?php the_title(); ?></p>
            </div>
            <div class="new-banner__content editor">
				<?php the_content(); ?>
            </div>

            	

        </div>
        

        <section class="consult

        <?php 
            while (have_posts()) : the_post();

            
            if (!has_category('services')) {
                echo 'hidden';
            }
   
       
   
        endwhile;
        ?>
        ">
            <div class="consult__bg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/consult__bg.png" alt="">
            </div>
            <div class="container">
                <div class="consult__title">
                    С 2013 года, и на сегодняшний день является одной из динамично развивающихся и лидирующей
                    Казахстанской компанией на рынке консалтинговых услуг
                </div>
                <div class="consult__content">
                    <div class="consult__number">
                        <b>11</b>
                        <p>Лет мы работаем для вас</p>
                    </div>
                    <div class="consult__form">
                        <form action="">
                            <?php echo do_shortcode('[contact-form-7 id="f737cdc" title="Контактная форма"]'); ?>                            
                        </form>
                    </div>
                </div>

            </div>
        </section>


    </main>

<?php

get_footer();
