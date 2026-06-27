<?php
/**
 * 404 template.
 *
 * @package MebelMira
 */

get_header();
?>
<section class="site-container content-single not-found">
    <h1><?php esc_html_e( 'Page not found', 'mebelmira' ); ?></h1>
    <p><?php esc_html_e( 'The page you are looking for does not exist or has been moved.', 'mebelmira' ); ?></p>
    <a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to home', 'mebelmira' ); ?></a>
</section>
<?php
get_footer();
