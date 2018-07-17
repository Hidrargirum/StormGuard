<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>
<div class="main-wrapper">
    <?php get_header(); ?>
    <section class="hero-block__secondary">
        <img src="<?php the_field('blog_page_hero_background', 'options'); ?>" alt="background-img">
    </section>

    <div class="wrap page-container container">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <section class="error-404 not-found">
                    <h1 class="section-title">Oops! That page can&rsquo;t be found.</h1>
                    <div class="page-content">
                        <p class=" text-center">It looks like nothing was found at this location.</p>
                    </div>
                </section>
            </main>
        </div>
    </div>
</div>
<?php get_footer('secondary'); ?>
