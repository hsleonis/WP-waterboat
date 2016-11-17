<div class="bg-three" style="background-image: url(<?php echo TmxLibraryIncluder::getAdminImage('page_img'); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-mb-12 text-center right-border">
                <div class="different-services">
                    <p class="different-services-title"><?php echo TmxLibraryIncluder::getAdmin()->getOption('page_left_title'); ?></p>
                    <p class="different-services-info">
                        <?php echo TmxLibraryIncluder::getAdmin()->getOption('page_left_desc'); ?>
                    </p>
                    <?php if(basename( get_page_template() )=='page-home-popup.php'){ ?>
                        <a data-toggle="modal" data-target="#page-left-popup" href="#" class="btn btn-default btn-general">Find out more</a>
                    <?php } else { ?>
                        <a href="<?php echo TmxLibraryIncluder::getAdmin()->getOption('page_left_link'); ?>" class="btn btn-default btn-general">Find out more</a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-xs-6 col-mb-12 text-center">
                <div class="different-services">
                    <p class="different-services-title"><?php echo TmxLibraryIncluder::getAdmin()->getOption('page_right_title'); ?></p>
                    <p class="different-services-info">
                        <?php echo TmxLibraryIncluder::getAdmin()->getOption('page_right_desc'); ?>
                    </p>
                    <?php if(basename( get_page_template() )=='page-home-popup.php'){ ?>
                        <a data-toggle="modal" data-target="#page-right-popup" href="#" class="btn btn-default btn-general">Find out more</a>
                    <?php } else { ?>
                        <a href="<?php echo TmxLibraryIncluder::getAdmin()->getOption('page_right_link'); ?>" class="btn btn-default btn-general">Find out more</a>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>
</div><!--4th banner area-->