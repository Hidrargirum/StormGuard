<?php get_header(); ?>
<section class="hero-block__secondary">
    <img src="<?php the_field('blog_page_hero_background', 'options'); ?>" alt="background-img">
</section>
<div class="container">
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')):
            bcn_display();
        endif; ?>
    </div>
    <h1 class="section-title"><?php single_cat_title(); ?></h1>
    <!--<p><?php /*$category = get_queried_object();
        echo $category->term_id; */ ?></p>-->
    <div class="row news__wrap">
        <?php
        if (have_posts()):
            while (have_posts()): the_post(); ?>
                <div class="col-sm-4 news__item">
                    <div class="news__item-inner">
                        <div class="news__item-photo">
                            <?php the_post_thumbnail(); ?>
                            <div class="news__item-date">
                                <p class="month-item"><?php echo get_the_date('M'); ?></p>
                                <p class="date-item"><?php echo get_the_date('d'); ?></p>
                            </div>
                        </div>
                        <div class="news__item-text">
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_excerpt(); ?> <a href="<?php the_permalink(); ?>">Read
                                    More</a></p>
                            <p class="autor">By <?php the_author(); ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile;
        endif;
        ?>
    </div>
</div>
<?php get_footer('secondary'); ?>


