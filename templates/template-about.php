<?php
/**
 * Template name: About page
 */
get_header(); ?>
<section class="hero-block__secondary">
    <img src="<?php the_field('about_page_hero_background', 'options'); ?>" alt="background-img">
</section>
<div class="container">
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')):
            bcn_display();
        endif; ?>
    </div>

</div>
<section class="who-we-are">
    <div class="container">
        <div class="who-we-are__wrapper">
            <div class="who-we-are__img-block">
                <img src="<?php the_field('about_photo', 'options'); ?>" alt="">
            </div>
            <div class="who-we-are__info-block">
                <h1 class="section-title"><?php the_field('about_title', 'options'); ?></h1>
                <?php the_field('about_description', 'options'); ?>
            </div>
        </div>
    </div>
</section>
<section class="get-started">
    <div class="container">
        <div class="get-started__title-block">
            <h3 class="section-title"><?php the_field('get_started_title', 'options'); ?></h3>
            <p><?php the_field('get_started_subtitle', 'options'); ?></p>
        </div>
        <div class="get-started__links">
            <div class="row">
                <div class="col-sm-4 get-started__links-item">
                    <img src="<?php the_field('get_started_first_photo', 'options'); ?>" alt="photo">
                    <a href="<?php echo get_site_url(); ?>/residential">
                        <p>Residential Repair</p>
                    </a>
                </div>
                <div class="col-sm-4 get-started__links-item">
                    <img
                        src="<?php the_field('get_started_second_photo', 'options'); ?>"
                        alt="photo">
                    <a href="<?php echo get_site_url(); ?>/commercial">
                        <p>Commercial Repair</p>
                    </a>
                </div>
                <div class="col-sm-4 get-started__links-item">
                    <img src="<?php the_field('get_started_third_photo', 'options'); ?>" alt="photo">
                    <a href="<?php echo get_site_url(); ?>/insurance-claims">
                        <p>Insurance Claims</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer('secondary'); ?>
