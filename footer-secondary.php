<div class="footer-secondary">
    <div class="zipcode-block">
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
    </div>
    <section class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 footer-top__contacts">
                    <h3 class="footer-top__title"><?php the_field('footer_contacts_title', 'options'); ?></h3>
                    <p><?php the_field('footer_secondary_contacts_subtitle', 'options'); ?></p>
                    <div class="footer-top__btn-block">
                        <a href="<?php echo get_site_url(); ?>/contact-local">Contact Your Local Storm Guard
                            Franchise</a>
                    </div>
                    <div class="footer-top__btn-block">
                        <a href="<?php echo get_site_url(); ?>/contact-corporate">Contact the Storm Guard Corporate
                            Office</a>
                    </div>

                </div>
                <div class="col-sm-6 footer-top__gallery">
                    <h3 class="footer-top__title"><?php the_field('footer_gallery_title', 'options'); ?></h3>
                    <p><?php the_field('footer_gallery_subtitle', 'options'); ?><a
                            href="<?php echo get_post_type_archive_link('gallery'); ?>"><?php the_field('footer_gallery_link_text', 'options'); ?></a>
                    </p>
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
                                            <a href="<?php echo $gallery_item["url"]; ?>"
                                               data-lightbox="project-gallery">
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