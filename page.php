<?php get_header();
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
        <?php
        if (have_posts()):
            while (have_posts()): the_post();?>
               <h3 class="section-title"><?php the_title(); ?> </h3>
                <?php the_content();
            endwhile;
        endif; ?>
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
    </div>
<?php get_footer('secondary'); ?>