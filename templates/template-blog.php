<?php
/**
 * Template name: Blog page
 */
get_header();
?>
<section class="hero-block__secondary">
    <img src="<?php the_field('blog_page_hero_background', 'options'); ?>" alt="background-img">
</section>
<section class="news">
    <div class="container">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if (function_exists('bcn_display')):
                bcn_display();
            endif; ?>
        </div>
        <h3 class="section-title"><?php the_field('news_block_title', 'options'); ?></h3>
        <div class="row news__wrap">
            <?php $args = array(
                'posts_per_page' => -1,
                'post_type' => 'post',
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
                                <?php
                                ?>
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
    </div>
</section>

<?php get_footer('secondary'); ?>
