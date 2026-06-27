<?php
/**
 * Archive template.
 *
 * @package MebelMira
 */

get_header();
?>
<section class="site-container content-list">
    <header class="archive-header">
        <?php the_archive_title( '<h1>', '</h1>' ); ?>
        <?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
    </header>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class( 'content-card' ); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
            </article>
        <?php endwhile; ?>
        <?php the_posts_pagination(); ?>
    <?php endif; ?>
</section>
<?php
get_footer();
