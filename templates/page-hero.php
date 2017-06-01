<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

/*
Template Name: Herosense
*/

get_header(); ?>
<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>
<div class="le-hero has-background is-gray" style="background-image: url(<?php echo $src[0]; ?> )">
    <header>
        <div class="row valign-middle">

            <div class="columns large-6 medium-4 small-6">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/mockup/mockup.png" />
            </div>

            <div class="columns large-6 medium-12 small-12">
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <p class="theme-desc">A minimalistic free wordpress theme, that focuses on content hierarchy and content engagement by the reader.</p>
                <a href="#config" class="button ghost info radius">Documentation</a>
                <a href="http://creativecoon.com/wp-content/uploads/2015/11/herosense.1.1.0.zip" style="margin-left: 10px;" class="button ghost success radius">Download</a>
            </div>
        </div>
    </header>
</div>
<div class="row">
    <div class="small-12 large-8 large-push-2 columns" role="main">

    <?php do_action( 'foundationpress_before_content' ); ?>

    <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
            <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
            <footer>
                <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
                <p><?php the_tags(); ?></p>
            </footer>
            <?php do_action( 'foundationpress_page_before_comments' ); ?>
            <?php comments_template(); ?>
            <?php do_action( 'foundationpress_page_after_comments' ); ?>
        </article>
    <?php endwhile;?>

    <?php do_action( 'foundationpress_after_content' ); ?>

    </div>
</div>
<?php get_footer(); ?>
