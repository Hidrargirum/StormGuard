<?php
/**
 * Template name: Contact corporate page
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
    <div class="row">
        <div class="col-sm-6 footer-top__contacts contacts">
            <h3 class="section-title"><?php the_title(); ?></h3>
            <p><?php the_field('footer_contacts_home_subtitle', 'options'); ?></p>
            <form>
                <?php echo do_shortcode('[contact-form-7 id="190" title="Footer contacts form"]'); ?>
            </form>
        </div>
        <div class="col-sm-6 contact-info">
            <h3 class="section-title"><?php the_field('contact_info_title', 'options'); ?></h3>
            <p><?php the_field('contact_info_description', 'options'); ?></p>
            <?php if (have_rows('contact_phone_and_address', 'options')):
                while (have_rows('contact_phone_and_address', 'options')) : the_row(); ?>
                    <p>
                        <strong>Phone:</strong>
                        <a href="tel:<?php the_sub_field('contact_phone'); ?>"><?php the_sub_field('contact_phone'); ?></a>
                    </p>
                    <p>
                        <strong>Address:</strong>
                        <?php the_sub_field('contact_address'); ?>
                    </p>
                    <?php
                endwhile;
            endif; ?>
        </div>
    </div>
</div>
</div>
<?php get_footer('secondary'); ?>
