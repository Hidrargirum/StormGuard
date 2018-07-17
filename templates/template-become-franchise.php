<?php
/**
 * Template name: Become a franchise page
 */
get_header(); ?>
<section class="hero-block__secondary">
    <img src="<?php the_field('franchise_hero', 'options'); ?>" alt="background-img">
</section>
<div class="container">
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')):
            bcn_display();
        endif; ?>
    </div>
    <div class="become-franchise">
        <?php if (have_posts()):
            while (have_posts()):
                the_post();
                ?>
                <div class="become-franchise__thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="become-franchise__content">
                    <?php the_content(); ?>
                </div>
                <?php
            endwhile;
        endif; ?>
    </div>
</div>
<div class="franchise-bottom">
    <div class="zipcode-block">
        <div class="container">
            <div class="zipcode-block__inner">
                <div class="zipcode-block__title franchise-bottom-title">
                    <h2><?php the_field('franchise-bottom_title', 'options'); ?></h2>
                    <p><?php the_field('franchise-bottom_subtitle', 'options'); ?></p>
                </div>
                <div class="franchise-button-wrap">
                    <a href="<?php echo get_site_url(); ?>/contact"><?php the_field('franchise-bottom_button_text', 'options'); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer('simple'); ?>
