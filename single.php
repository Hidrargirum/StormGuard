<?php
/**
 * The template for displaying all single posts and attachments
 *
 */
get_header(); ?>
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
            while (have_posts()):
                the_post(); ?>
                <div class="post">
                    <div class="container">
                        <div class="row post-wrap">
                            <div class="col-md-6 text-center post-thumbnail">
                                <?php
                                echo get_the_post_thumbnail(get_the_id(), "large"); ?>
                            </div>
                            <div class="col-md-6 post-content">
                                <h1><?php echo get_the_title(); ?></h1>
                                <p><?php echo get_the_content(); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile;
        endif; ?>
    </div>
<?php
get_footer('secondary'); ?>