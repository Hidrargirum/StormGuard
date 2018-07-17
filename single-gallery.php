<?php get_header(); ?>
    <section class="hero-block__secondary">
        <img src="<?php the_field('blog_page_hero_background', 'options'); ?>" alt="background-img">
    </section>
    <div class="container gallery-page">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if (function_exists('bcn_display')):
                bcn_display();
            endif; ?>
        </div>
        <div class="footer-top__gallery">
            <h3 class="footer-top__title"><?php the_field('footer_gallery_title', 'options'); ?></h3>
            <p><?php the_field('footer_gallery_subtitle', 'options'); ?></p>
            <div class="footer-top__gallery-wrap">
                <?php
                if (have_posts()):
                    $postId = get_post();
                    $args = array(
                        'p' => $postId->ID,
                        'post_type' => 'gallery',
                    );
                    $query = new WP_Query($args);
                    foreach ($query->posts as $post):
                        foreach (get_field("gallery_item", $post->id) as $gallery_item):;
                            /*var_dump($gallery_item);*/
                            ?>
                            <div class="footer-top__gallery-item">
                                <div class="footer-top__gallery-item-inner">
                                    <a href="<?php echo $gallery_item["url"]; ?>" data-lightbox="project-gallery">
                                        <img src="<?php echo $gallery_item["sizes"]["thumbnail"]; ?>"
                                             alt="gallery-photo">
                                    </a>
                                </div>
                            </div>
                            <?php
                        endforeach;
                    endforeach;
                endif; ?>
            </div>
        </div>
    </div>
<?php get_footer('secondary'); ?>