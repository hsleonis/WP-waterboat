<?php
/**
 * Nordic Services Template
 *
 * @package     TMXNordic
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */
?>
<?php get_header(); ?>

    <!--start of full-container-->
    <section class="full-container">
    <!--top banner section with menu item-->
    <div class="top-bg" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);background-color: <?php echo TmxLibraryIncluder::getAdminImage('service_header_bgcolor'); ?>;">
        <!--site menu-->
        <?php get_template_part('templates/section','nav'); ?>

        <!--body container area-->
        <?php get_template_part('templates/section','banner-service'); ?>
    </div><!--top banner section with menu item-->

    <!-- Services section -->
    <?php get_template_part('templates/section','single-service'); ?>

    <!-- Page section -->
    <?php get_template_part('templates/section','page'); ?>

<?php get_footer();