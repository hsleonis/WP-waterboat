<div class="bg-single-service" style="background-image: url('<?php echo TmxLibraryIncluder::getAdminImage('service_page_img'); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-xs-12 col-mb-12">
                <div class="service-section">
                    <div class="srv-text"><?php echo TmxLibraryIncluder::getAdmin()->getOption('service_subtitle'); ?></div>
                    <div class="srv-text1"><?php echo TmxLibraryIncluder::getAdmin()->getOption('service_title'); ?></div>
                    <?php
                    $posts = new WP_Query(array(
                        'post_type' => 'Service'
                    ));
                    if($posts->have_posts()): ?>
                        <ul class="service-list">
                        <?php while ($posts->have_posts()): $posts->the_post();
                            ?>
                            <li>
                                <a href="<?php the_permalink(); ?>" class=""> <?php the_title(); ?> </a>
                            </li>
                            <?php
                            wp_reset_query();
                        endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
            <!--service section right side column-->
            <div class="col-sm-9 col-xs-12 col-mb-12 service-content">
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
            </div><!--service section right side column-->
        </div>
    </div>
</div><!--3rd banner area -->