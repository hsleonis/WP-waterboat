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

        <!--body container area-->
        <div class="container">
            <!--top banner area-->
            <div class="row">
                <div class="col-xs-6 col-mb-12">
                    <div class="banner-left-block">
                        <p class="welcome"><?php echo TmxLibraryIncluder::getAdmin()->getOption('before_title'); ?></p>
                        <h1 class="title"><?php echo TmxLibraryIncluder::getAdmin()->getOption('title'); ?></h1>
                        <div class="separator"></div>
                        <p class="subtitle"><?php echo TmxLibraryIncluder::getAdmin()->getOption('subtitle'); ?></p>
                        <?php if(TmxLibraryIncluder::getAdmin()->getOption('show_link')): ?>
                            <a href="<?php echo TmxLibraryIncluder::getAdmin()->getOption('link'); ?>" class="btn btn-default btn-general">
                                <?php echo TmxLibraryIncluder::getAdmin()->getOption('link_text'); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xs-6 col-mb-12">
                    <div class="banner-right-block">
                        <h4 class="track-trace text-uppercase">Track & trace</h4>
                        <p class="find">Find your shipping</p>
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-xs-4"> Fullname:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control input-field" id="fullname" placeholder="Enter your fullname.">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-4">Shipping no:</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control input-field" id="shipping-no" placeholder="Enter your shipping no.">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <button type="submit" class="btn btn-default btn-general">TRACE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!--top banner area-->
        </div><!--body container area-->
    </div><!--top banner section with menu item-->

    <!--2nd banner area-->
    <div class="bg-one" style="background-image: url(<?php echo TmxLibraryIncluder::getAdminImage('contact_img'); ?>);">
        <div class="container">
            <div class="row">
                <?php for($i=1;$i<=3;$i++): ?>
                    <div class="col-xs-4 col-mb-12">
                        <div class="info-block info-block-<?php echo $i; ?>">
                            <div class="title"><?php echo TmxLibraryIncluder::getAdmin()->getOption('contact_title_'.$i); ?></div>
                            <div><?php echo TmxLibraryIncluder::getAdmin()->getOption('contact_info_'.$i); ?></div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div><!--2nd banner area&ndash -->

    <!--3rd banner area-->
    <div class="bg-two" style="background-image: url(<?php echo TmxLibraryIncluder::getAdminImage('service_img'); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-xs-12 col-mb-12">
                    <div class="service-section">
                        <div class="srv-text"><?php echo TmxLibraryIncluder::getAdmin()->getOption('service_subtitle'); ?></div>
                        <div class="srv-text1"><?php echo TmxLibraryIncluder::getAdmin()->getOption('service_title'); ?></div>
                    </div>
                </div>
                <!--service section right side column-->
                <div class="col-sm-9 col-xs-12 col-mb-12">
                    <div class="row">
                        <?php
                        $posts = new WP_Query(array(
                            'post_type' => 'Service'
                        ));
                        if($posts->have_posts()):
                            while ($posts->have_posts()): $posts->the_post();
                                ?>
                                <div class="col-md-4 col-sm-6 col-xs-6 col-mb-12">
                                    <div class="service-block">
                                        <div class="inner-block text-center">
                                            <div class="s-block-title">
                                                <span><?php the_title(); ?></span>
                                            </div>
                                            <div class="s-block-info">
                                                <span><?php the_excerpt(); ?></span>
                                            </div>
                                        </div>
                                        <div class="readMore-button text-center">
                                            <a data-toggle="modal" data-target="#service-<?php echo get_post_field( 'post_name', get_post() ); ?>" href="#" class="btn btn-default btn-general"> READ MORE </a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                wp_reset_query();
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div><!--service section right side column-->
            </div>
        </div>
    </div><!--3rd banner area -->

    <!--4th banner area-->
    <div class="bg-three" style="background-image: url(<?php echo TmxLibraryIncluder::getAdminImage('page_img'); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-mb-12 text-center right-border">
                    <div class="different-services">
                        <p class="different-services-title"><?php echo TmxLibraryIncluder::getAdmin()->getOption('page_left_title'); ?></p>
                        <p class="different-services-info">
                            <?php echo TmxLibraryIncluder::getAdmin()->getOption('page_left_desc'); ?>
                        </p>
                        <a href="<?php echo TmxLibraryIncluder::getAdmin()->getOption('page_left_link'); ?>" class="btn btn-default btn-general">Find out more</a>
                    </div>
                </div>
                <div class="col-xs-6 col-mb-12 text-center">
                    <div class="different-services">
                        <p class="different-services-title"><?php echo TmxLibraryIncluder::getAdmin()->getOption('page_right_title'); ?></p>
                        <p class="different-services-info">
                            <?php echo TmxLibraryIncluder::getAdmin()->getOption('page_right_desc'); ?>
                        </p>
                        <a href="<?php echo TmxLibraryIncluder::getAdmin()->getOption('page_right_link'); ?>" class="btn btn-default btn-general">Find out more</a>
                    </div>
                </div>

            </div>
        </div>
    </div><!--4th banner area-->
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

<?php get_footer();