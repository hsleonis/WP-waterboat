<?php
/**
 * Template Name: Home PopUp
 *
 * Nordic Home Template 3
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

    <!-- Popups -->
<?php
$posts = new WP_Query(array(
    'post_type' => 'Service'
));
if($posts->have_posts()):
    while ($posts->have_posts()): $posts->the_post();
        ?>
        <div class="service-modal modal fade" id="service-<?php echo get_post_field( 'post_name', get_post() ); ?>" tabindex="-1" role="dialog" aria-labelledby="label-<?php echo get_post_field( 'post_name', get_post() ); ?>">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="label-service-<?php echo get_post_field( 'post_name', get_post() ); ?>"><?php the_title(); ?></h4>
                        <div>
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                    <div class="modal-body">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        wp_reset_query();
    endwhile;
endif;
?>

    <div class="service-modal modal fade" id="page-left-popup" tabindex="-1" role="dialog" aria-labelledby="label-page-left">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="label-page-left"><?php echo TmxLibraryIncluder::getAdmin()->getOption('page_left_title'); ?></h4>
                    <div>
                        <?php echo TmxLibraryIncluder::getAdmin()->getOption('page_left_desc'); ?>
                    </div>
                </div>
                <div class="modal-body">
                    <?php echo TmxLibraryIncluder::getAdmin()->getOption('page_left_detail'); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="service-modal modal fade" id="page-right-popup" tabindex="-1" role="dialog" aria-labelledby="label-page-right">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="label-page-right"><?php echo TmxLibraryIncluder::getAdmin()->getOption('page_right_title'); ?></h4>
                    <div>
                        <?php echo TmxLibraryIncluder::getAdmin()->getOption('page_right_desc'); ?>
                    </div>
                </div>
                <div class="modal-body">
                    <?php echo TmxLibraryIncluder::getAdmin()->getOption('page_right_detail'); ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();