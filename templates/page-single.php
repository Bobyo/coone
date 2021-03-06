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
Template Name: SinglePage
*/

get_header(); ?>
<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>
<div class="le-hero has-background is-gray" style="background-image: url(<?php echo $src[0]; ?> )">
    <header>
        <div class="row valign-middle">
            <div class="columns large-12 medium-12 small-12">
                <h1 class="entry-title"><?php the_title(); ?></h1>
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
