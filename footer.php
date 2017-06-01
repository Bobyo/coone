<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

?>
</section>

<div class='footer-contain bgcolor gray'>
    <footer class="row">

    <div class="row">
        <div class="columns large-6 small-12 medium-6">
            <?php
            if(is_active_sidebar('footer-widgets')){
                dynamic_sidebar('footer-widgets');
            }
            ?>
        </div>
        <div class="columns large-6 small-12 medium-6 disclaimer-area">
        <?php
            if(is_active_sidebar('disclaimer-widgets')){
                dynamic_sidebar('disclaimer-widgets');
            }
            ?>
        </div>
    </div>

    <div class="row">
        <div class="columns large-12 small-12 copyright">
            Copyright © 2015 Creativecoon. Designed by <a href="http://creativecoon.com">Creativecoon's handler</a>. You can reach us <a rel="nofollow" href="hello at creativecoon dot com">here</a>.
        </div>
    </div>

    	<?php do_action( 'foundationpress_before_footer' ); ?>
    	<?php do_action( 'foundationpress_after_footer' ); ?>
    </footer>
</div>

<a class="exit-off-canvas"></a>

	<?php do_action( 'foundationpress_layout_end' ); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us11.list-manage.com","uuid":"50f818960e36416de7808882c","lid":"66472f9208"}) })</script>
</body>
</html>
