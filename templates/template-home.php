<?php
/**
 * Template name: Home page
 */
get_header(); ?>
    <section class="hero-block">
        <div class="container">
            <div class="hero-block__title">
                <?php the_field('hero_title', 'options');
                ?>
                <a href="<?php echo get_site_url(); ?>/contact"><?php the_field('hero_button_text', 'options'); ?></a>
            </div>
        </div>
    </section>
    <section class="zipcode-block">
        <div class="container">
            <div class="zipcode-block__inner">
                <div class="zipcode-block__title">
                    <h2><?php the_field('franchise_block_title', 'options'); ?></h2>
                    <p><?php the_field('franchise_block_subtitle', 'options'); ?></p>
                </div>
                <div class="zipcode-block__form">
                    <form>
                        <input type="text" placeholder="Enter Zip Code">
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="services">
        <div class="container">
            <div class="services__title-block">
                <h3 class="section-title"><?php the_field('services_title', 'options'); ?></h3>
                <p><?php the_field('services_subtitle', 'options'); ?></p>
            </div>
            <div class="services__items-block">
                <div class="row flex-row">
                    <?php
                    $query = new WP_Query(array('post_type' => 'services_cpt', 'posts_per_page' => 6));
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
            <div class="services__btn-wrap">
                <a href="<?php echo get_post_type_archive_link('services_cpt'); ?>" class="btn-custom"><span><?php the_field('services_button_text', 'options'); ?></span></a>
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
    <section class="reviews">
        <div class="container">
            <h3 class="section-title"><?php the_field('reviews_block_title', 'options'); ?></h3>
            <div class="reviews__slider">
                <?php
                if (have_rows('reviews_slider_item', 'options')):
                    while (have_rows('reviews_slider_item', 'options')) : the_row(); ?>
                        <div class="reviews__slider-item">
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
    <section class="news">
        <div class="container">
            <h3 class="section-title"><?php the_field('news_block_title', 'options'); ?></h3>
            <div class="row news__wrap">
                <?php $args = array(
                    'posts_per_page' => 3,
                    'post_type' => 'post',
                    'category_name' => 'news',
                );
                $query = new WP_Query($args);
                if ($query->have_posts()):
                    foreach ($query->posts as $post):
                        $recent_author = get_user_by('ID', $post->post_author);
                        $author_display_name = $recent_author->display_name;
                        $post_id = get_the_id(); ?>
                        <div class="col-sm-4 news__item">
                            <div class="news__item-inner">
                                <div class="news__item-photo">
                                    <?php echo get_the_post_thumbnail($post_id, "large"); ?>
                                    <div class="news__item-date">
                                        <p class="month-item"><?php echo date('M', strtotime($post->post_date)); ?></p>
                                        <p class="date-item"><?php echo date('d', strtotime($post->post_date)); ?></p>
                                    </div>
                                </div>
                                <div class="news__item-text">
                                    <h3><?php echo $post->post_title; ?></h3>
                                    <p><?php echo $post->post_excerpt; ?> <a href="<?php echo $post->guid; ?>">Read
                                            More</a></p>
                                    <p class="autor">By <?php echo $author_display_name; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                    endforeach;
                endif;
                wp_reset_postdata(); ?>
            </div>
            <div class="news__btn-wrap">
                <a href="<?php echo get_site_url(); ?>/blog"
                   class="btn-custom"><span><?php the_field('news_button_text', 'options'); ?></span></a>
            </div>
        </div>
    </section>
<?php get_footer(); ?>