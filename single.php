<?php
/**
 * Nordic Single Post
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
    <div class="top-bg" style="background-image: url(<?php echo TmxLibraryIncluder::getAdminImage('banner_img'); ?>);">
        <!--site menu-->
        <nav class="navbar navbar-default nsl-menubar">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle nsl-menubar-toggle collapsed" data-toggle="collapse" data-target="#nsl-menubar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo bloginfo('url'); ?>">
                        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php echo bloginfo('title'); ?>" />
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <?php wp_nav_menu( array(
                    'theme_location'    => 'main-menu',
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'nsl-menubar-collapse',
                    'menu_class'        => 'nav navbar-nav navbar-right',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker()
                )); ?><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div><!--top banner section with menu item-->

    <!--2nd banner area-->
    <div class="main-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 main-content">
                    <?php if(have_posts()): the_post(); ?>
                        <h3><?php the_title(); ?></h3>
                        <div class="page-content">
                            <?php the_content(); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div><!--2nd banner area&ndash -->

<?php get_footer();