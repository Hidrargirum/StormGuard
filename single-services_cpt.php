<?php
/**
 * The template for displaying services single posts and attachments
 *
 */
get_header(); ?>
    <section class="hero-block__secondary">
        <img src="<?php the_field('blog_page_hero_background', 'options'); ?>" alt="background-img">
    </section>
    <div class="container single-services">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if (function_exists('bcn_display')):
                bcn_display();
            endif; ?>
        </div>
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post(); ?>
                <div class="flex-wrap">
                    <div class="service-photo">
                        <?php
                        echo get_the_post_thumbnail(get_the_id(), "large"); ?>
                    </div>
                    <div class="service-description">
                        <h1 class="section-title"><?php echo get_the_title(); ?></h1>
                        <p><?php echo get_the_content(); ?></p>
                    </div>
                </div>
            <?php endwhile;
        endif; ?>
    </div>
    <section class="services">
        <div class="container">
            <div class="services__title-block">
                <h3 class="section-title"><?php the_field('services_single_title', 'options'); ?></h3>
                <p><?php the_field('services_subtitle', 'options'); ?></p>
            </div>
            <div class="services__items-block">
                <div class="row flex-row">
                    <?php
                    $args = array(
                        'post_type' => 'services_cpt',
                        'posts_per_page' => -1,
                    );
                    $query = new WP_Query($args);
                    foreach ($query->posts as $post): ?>
                        <div class="col-sm-4 services__item">
                            <a href="<?php echo $post->guid; ?>">
                                <div class="services__item-icons">
                                    <img src="<?php the_field('service_icon', $post->ID); ?>" alt="services-icon">
                                </div>
                                <h6><?php echo $post->post_title; ?></h6>
                            </a>
                            <p><?php the_field('service_description', $post->ID); ?></p>
                        </div>
                        <?php
                    endforeach;
                    wp_reset_postdata(); ?>
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
<?php
get_footer('secondary'); ?>