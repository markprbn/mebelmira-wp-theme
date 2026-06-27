<?php
/**
 * Front page template.
 *
 * @package MebelMira
 */

get_header();
?>
<section class="hero">
    <div class="site-container hero__content">
        <h1><?php bloginfo( 'name' ); ?></h1>
        <p><?php bloginfo( 'description' ); ?></p>
    </div>
</section>
<section class="site-container content-list">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class( 'content-card' ); ?>>
                <?php the_content(); ?>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
</section>
<?php
get_footer();
