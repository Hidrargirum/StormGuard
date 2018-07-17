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
            $query = new WP_Query(array('post_type' => 'gallery'));
            foreach ($query->posts as $post):
                foreach (get_field("gallery_item", $post->id) as $gallery_item):;
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
            endforeach; ?>
        </div>
    </div>
</div>
<?php get_footer('secondary'); ?>

