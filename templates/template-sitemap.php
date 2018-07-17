<?php
/**
 * Template name: Sitemap page
 */
get_header(); ?>
    <section class="hero-block__secondary">
        <img src="<?php the_field('blog_page_hero_background', 'options'); ?>" alt="background-img">
    </section>
    <div class="container">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if (function_exists('bcn_display')):
                bcn_display();
            endif; ?>
        </div>
        <?php echo do_shortcode('[wp_sitemap_page]'); ?>
    </div>
<?php get_footer('secondary'); ?>