<?php
/**
 * Template Name: Home Main
 *
 * Nordic Home Template 1
 *
 * @package     TMXFilmMaker
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */
?>
<?php get_header(); ?>

    <!--start of full-container-->
    <section class="full-container">
    <!--top banner section with menu item-->
    <div class="top-bg" style="background-image: url(<?php echo TmxLibraryIncluder::getAdminImage('banner_img'); ?>);">
        <!--site menu-->
        <?php get_template_part('templates/section','nav'); ?>

        <!--body container area-->
        <?php get_template_part('templates/section','banner'); ?>
    </div><!--top banner section with menu item-->

    <!-- Contact section -->
    <?php get_template_part('templates/section','contact'); ?>

    <!-- Services section -->
    <?php get_template_part('templates/section','service'); ?>

    <!-- Page section -->
    <?php get_template_part('templates/section','page'); ?>

<?php get_footer();