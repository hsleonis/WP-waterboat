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
                                        <?php
                                        if(basename( get_page_template() )=='page-home-slide.php'){ ?>
                                            <div data-slide="service-<?php echo get_post_field( 'post_name', get_post() ); ?>" class="btn btn-default btn-general"> READ MORE </div>

                                        <?php } else if(basename( get_page_template() )=='page-home-onepage.php'){ ?>
                                            <a href="#service-<?php echo get_post_field( 'post_name', get_post() ); ?>" class="btn btn-default btn-general"> READ MORE </a>

                                        <?php } else if(basename( get_page_template() )=='page-home-popup.php'){ ?>
                                            <a data-toggle="modal" data-target="#service-<?php echo get_post_field( 'post_name', get_post() ); ?>" href="#" class="btn btn-default btn-general"> READ MORE </a>

                                        <?php } else { ?>
                                            <a href="<?php the_permalink(); ?>" class="btn btn-default btn-general"> READ MORE </a>

                                        <?php } ?>
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