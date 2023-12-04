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

	<main class="main">
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
    </main>

<?php

get_footer();
