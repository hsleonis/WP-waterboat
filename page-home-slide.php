<?php
/**
 * Template Name: Home Slide
 *
 * Nordic Home Template 4
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

    <!-- Slides -->
<?php
$posts = new WP_Query(array(
    'post_type' => 'Service'
));
if($posts->have_posts()):
    while ($posts->have_posts()): $posts->the_post();
        ?>
        <div id="service-<?php echo get_post_field( 'post_name', get_post() ); ?>" class="bg-service tmx-data-panel" style="background-image: url();">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="different-services-title"><?php the_title(); ?></div>
                        <div class="different-services-info">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                    <div class="col-sm-8 col-xs-12">
                        <div class="different-services-content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="tmx-close-data-panel">
                        <button title="close" type="button" class="close"><span>&times;</span></button>
                    </div>
                </div>
            </div>
        </div>
        <?php
        wp_reset_query();
    endwhile;
endif;
?>

<?php get_footer();