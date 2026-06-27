<?php
/**
 * Page template.
 *
 * @package MebelMira
 */

get_header();
?>
<section class="site-container content-single">
    <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class(); ?>>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </article>
    <?php endwhile; ?>
</section>
<?php
get_footer();
