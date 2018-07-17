<section class="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 footer-top__contacts">
                <h3 class="footer-top__title"><?php the_field('footer_contacts_title', 'options'); ?></h3>
                <p><?php the_field('footer_contacts_home_subtitle', 'options'); ?></p>
                <form>
                    <?php echo do_shortcode('[contact-form-7 id="190" title="Footer contacts form"]'); ?>
                </form>
            </div>
            <div class="col-sm-6 footer-top__gallery">
                <h3 class="footer-top__title"><?php the_field('footer_gallery_title', 'options'); ?></h3>
                <p><?php the_field('footer_gallery_subtitle', 'options'); ?></p>
                <div class="footer-top__gallery-wrap">
                    <?php
                    $query = new WP_Query(array('post_type' => 'gallery'));
                    $counter = 0;
                    foreach ($query->posts as $post):
                        foreach (get_field("gallery_item", $post->id) as $gallery_item):;
                            $counter++;
                            if ($counter <= 8): ?>
                                <div class="footer-top__gallery-item">
                                    <div class="footer-top__gallery-item-inner">
                                        <a href="<?php echo $gallery_item["url"]; ?>" data-lightbox="project-gallery">
                                            <img src="<?php echo $gallery_item["sizes"]["thumbnail"]; ?>"
                                                 alt="gallery-photo">
                                        </a>
                                    </div>
                                </div>
                                <?php
                            endif;
                        endforeach;
                    endforeach; ?>
                </div>
                <div class="btn-wrap">
                    <a href="<?php echo get_post_type_archive_link('gallery'); ?>"><?php the_field('footer_button_text', 'options'); ?></a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
</div>
<footer class="footer">
    <div class="container">
        <div class="footer__copyright-block">
            <p>Copyright <?php echo date('Y'); ?>. Storm Guard. All Rights Reserved. Website Produced by: <a
                    href="https://www.inverseparadox.com/">Inverse Paradox</a></p>
        </div>
        <div class="footer__menu">
            <?php
            $args = array(
                'theme_location' => 'footer-nav',
                'container' => 'false',
                'menu_class' => 'footer__menu-list',
            );
            wp_nav_menu($args);
            ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
