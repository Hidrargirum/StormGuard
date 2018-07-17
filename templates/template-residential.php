<?php
/**
 * Template name: Residential page
 */
get_header();
?>
    <section class="hero-block__secondary">
        <img src="<?php the_field('blog_page_hero_background', 'options'); ?>" alt="background-img">
    </section>
    <div class="container">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if (function_exists('bcn_display')):
                bcn_display();
            endif; ?>
        </div>
    </div>
    <section class="services">
        <div class="container">
            <div class="services__title-block">
                <h3 class="section-title"><?php the_title(); ?></h3>
            </div>
            <?php if (have_posts()):
                while (have_posts()):
                    the_post(); ?>
                    <p><?php the_content(); ?></p>
                <?php endwhile;
            endif; ?>
            <div class="services__items-block">
                <h3 class="section-title"><?php the_field('services_title', 'options'); ?></h3>
                <div class="row flex-row">
                    <?php
                    $args = array(
                        'post_type' => 'services_cpt',
                        'posts_per_page' => -1,
                        'category_name' => 'Residential',
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
<?php get_footer('secondary'); ?>