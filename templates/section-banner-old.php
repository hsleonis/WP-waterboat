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
                        <label class="control-label col-xs-4"> Email:</label>
                        <div class="col-xs-8">
                            <input type="text" class="form-control input-field" id="email" placeholder="Enter your email">
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
</div>