<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
get_header(); ?>
<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="le-hero has-background is-gray" style="background-image: url(<?php echo $src[0]; ?> )">
    <header>
        <div class="row valign-middle">
            <div class="column large-8 medium-12 small-12 large-push-2">
                <span class="single__catgname"><i class="fa icon-space fa-compass"></i><?php $categories = get_the_category(); foreach($categories as $category) { echo $category->name . ' '; } ?></span>
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <span class="single__meta--display">By <?php the_author(); ?>  /  Reviewed: <?php echo get_the_date(); ?>  /  Updated: <?php the_modified_date('F j, Y'); ?></span>

                <div class="single__heading--contain clearfix">
                    <div class="single__heading single__heading--rating"><?php if (function_exists('wp_review_show_total')) wp_review_show_total(); ?></div>
                    <?php if( get_post_meta($post->ID, 'price', true) ) { ?>

                    <div class="single__heading single__heading--price"><?php echo get_post_meta($post->ID, 'price', true); ?></div>

                    <div class="single__heading single__heading--buy">
                        <div class="buynow"><a href="<?php echo get_post_meta($post->ID, 'link', true); ?>" class="button green-feature radius">Check it out!</a></div>
                    </div>

                    <?php } ?>


                </div>

            </div>
        </div>
    </header>
</div>

<div class="row">
	<div class="small-12 large-9 medium-9 columns" role="main">

	<?php do_action( 'foundationpress_before_content' ); ?>


		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
			<div class="entry-content">
			<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_post_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_post_after_comments' ); ?>
		</article>
	<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>
    
    <div class="meta sidebar">
        <div class="front-half clearfix">

            <?php get_sidebar() ?>

        </div>
        <?php foundationpress_entry_meta(); ?>
        
    </div>

</div>
<?php get_footer(); ?>
