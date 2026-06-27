<?php
/**
 * Main template file.
 *
 * @package MebelMira
 */

get_header();
?>
<section class="site-container content-list">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class( 'content-card' ); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="entry-summary"><?php the_excerpt(); ?></div>
            </article>
        <?php endwhile; ?>
        <?php the_posts_pagination(); ?>
    <?php else : ?>
        <p><?php esc_html_e( 'No content found.', 'mebelmira' ); ?></p>
    <?php endif; ?>
</section>
<?php
get_footer();
