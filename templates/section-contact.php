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
</div>