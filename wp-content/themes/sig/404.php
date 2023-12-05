<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package sig
 */

get_header();
?>

	<main class="main">
        <section class="error">
            <div class="error__title">404</div>
            <div class="error__text">Извините, страница не найдена</div>
            <a href="/" class="error__btn btn-yellow">Вернуться на главную</a>
        </section>
    </main>

<?php
get_footer();
