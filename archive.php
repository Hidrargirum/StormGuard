<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
    <div class="container">
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
                the_title();
                the_post_thumbnail();
                the_excerpt();
                ?>
                <a href="<?php the_permalink(); ?>">222</a>
        <?php
            endwhile;
        endif;
        ?>
    </div>
<?php get_footer('secondary');
