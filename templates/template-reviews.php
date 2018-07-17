<?php
/**
 * Template name: Reviews page
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
        <section class="reviews reviews-page">
            <div class="container">
                <h3 class="section-title"><?php the_field('reviews_block_title', 'options'); ?></h3>
                <div class="reviews__wrapper">
                    <?php
                    if (have_rows('reviews_slider_item', 'options')):
                        while (have_rows('reviews_slider_item', 'options')) : the_row(); ?>
                            <div class="reviews__wrapper-item">
                                <blockquote>
                                    <p><?php the_sub_field('reviews_item_text'); ?> </p>
                                </blockquote>
                                <cite>
                                    <p><?php the_sub_field('reviews_author'); ?></p>
                                    <p><?php the_sub_field('reviews_author_status'); ?></p>
                                </cite>
                            </div>
                            <?php
                        endwhile;
                    endif; ?>
                </div>
            </div>
        </section>
    </div>
<?php get_footer('secondary'); ?>