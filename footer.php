<?php
/**
 * FilmMaker Theme Footer
 *
 * @package     TMXFilmMaker
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */
?>

<!--footer area-->
<div class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 col-xs-6 col-mb-12 col-sm-offset-2">
                <div class="footer-logo">
                    <a href="<?php echo bloginfo('url'); ?>"><img class="img-responsive" src="<?php header_image(); ?>" alt="<?php echo bloginfo('title'); ?>" /></a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6 col-mb-12">
                <?php get_sidebar('sidebar-1'); ?>
            </div>
            <!--<div class="col-sm-3 col-xs-6 col-mb-12">
                <?php /*//dynamic_sidebar('sidebar-2'); */?>
            </div>-->
            <div class="col-sm-4 col-xs-6 col-mb-12">
                <?php dynamic_sidebar('sidebar-3'); ?>
            </div>
        </div>
    </div>
</div>

</section><!--start of full-container-->

<!-- Scripts -->
<?php wp_footer(); ?>

<!-- Author: MD. Hasan Shahriar, hsleonis2@gmail.com -->

</body>
</html>