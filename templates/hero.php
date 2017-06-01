<?php
/*
Template Name: Hero
*/
get_header(); ?>

<header id="homepage-hero" role="banner">
    <div class="hero-gray-bg">
    	<div class="row valign-middle setting-height">
    		<div class="small-12 medium-12 large-9 columns large-centered">
    			<h1>Introducing the epic digital reviews on the web</h1>
    			<h4 class="subheader">Mindblowing plugins * Epic themes * Killer worpdress templates and much more...</h4>
    		</div>
    	</div>
    </div>
</header>

<div class="row" data-equalizer>
    <div class="small-12 large-9 columns big-left-column">
        <div class="row" data-equalizer>
        <article>
           <?php
            $catquery = new WP_Query( 'category_name=wordpress&posts_per_page=1' );
            while($catquery->have_posts()) : $catquery->the_post();
           ?>
           <?php
            $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), false, '' );
           ?>
                     <div class="small-12 medium-4 large-4 columns has-background is-gray" style="background: url(<?php echo $src[0]; ?> ) no-repeat center center" data-equalizer-watch>


                        <div class="block-title text-center">
                            <?php
                            $category = get_the_category();
                            echo $category[0]->cat_name;
                            ?>
                        </div>
                        <h2 class="text-center article-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                        <div class="article-brief text-center">
                            <?php
                            $strings = preg_split('/(\.|!|\?)\s/', strip_tags($post->post_content), 2, PREG_SPLIT_DELIM_CAPTURE);
                            echo apply_filters('the_content', $strings[0] .  $strings[1]);
                            ?>
                        </div>
                        <div class="article-actions text-center">
                            <span class="time"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></span>
                        </div>
                    <?php endwhile; ?>
                </div>
            </article>

            <article>
            <?php
            $catquery = new WP_Query( 'category_name=e-commerce&posts_per_page=1' );
            while($catquery->have_posts()) : $catquery->the_post();
           ?>
                <div class="small-12 medium-4 large-4 columns half-block" data-equalizer-watch>
                <div class="contain bg-color white">
                    <div class="article-image">
                        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                    <div class="padded-content">
                    <div class="block-header">
                        <div class="category left">
                        <?php
                            $category = get_the_category();
                            $category_name = $category[0]->cat_name;
                            $category_link = get_category_link($category[0]->term_id );
                            ?>
                            <div class="block-title"><a href="<?php echo $category_link ?>"><?php echo $category_name ?></a></div>
                        </div>
                        <div class="meta right">
                            <div class="article-actions">
                                <span class="time"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></span>
                            </div>
                        </div>
                    </div>
                    <article>
                        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                        <div class="article-brief">
                            <?php
                            $strings = preg_split('/(\.|!|\?)\s/', strip_tags($post->post_content), 2, PREG_SPLIT_DELIM_CAPTURE);
                            echo apply_filters('the_content', $strings[0] .  $strings[1]);
                            ?>
                        </div>
                    </article>
                    </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </article>

             <article>
            <?php
            $catquery = new WP_Query( 'category_name=marketing&posts_per_page=1' );
            while($catquery->have_posts()) : $catquery->the_post();
           ?>
                <div class="small-12 medium-4 large-4 columns half-block" data-equalizer-watch>
                <div class="contain bg-color white">
                    <div class="article-image">
                        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                    <div class="padded-content">
                    <div class="block-header">
                        <div class="category left">
                        <?php
                            $category = get_the_category();
                            $category_name = $category[0]->cat_name;
                            $category_link = get_category_link($category[0]->term_id );
                            ?>
                            <div class="block-title"><a href="<?php echo $category_link ?>"><?php echo $category_name ?></a></div>
                        </div>
                        <div class="meta right">
                            <div class="article-actions">
                                <span class="time"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></span>
                            </div>
                        </div>
                    </div>
                    <article>
                        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                        <div class="article-brief">
                            <?php
                            $strings = preg_split('/(\.|!|\?)\s/', strip_tags($post->post_content), 2, PREG_SPLIT_DELIM_CAPTURE);
                            echo apply_filters('the_content', $strings[0] .  $strings[1]);
                            ?>
                        </div>
                    </article>
                    </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </article>
        </div>
        <div class="row horizontal-ruling" data-equalizer>

        <article>
        <?php
            $catquery = new WP_Query( 'category_name=showcase&posts_per_page=1' );
            while($catquery->have_posts()) : $catquery->the_post();
           ?>
           <?php
            $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), false, '' );
           ?>
            <div class="small-12 medium-8 large-8 columns has-background showcase" style="background: url(<?php echo $src[0]; ?> ) no-repeat center center" data-equalizer-watch>
                <?php
                $category = get_the_category();
                $category_name = $category[0]->cat_name;
                $category_link = get_category_link($category[0]->term_id );
                ?>
                <div class="block-title"><a href="<?php echo $category_link ?>"><?php echo $category_name ?></a></div>
                <h2 class="article-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                <div class="article-actions"><span class="time"><i class="fa icon-space fa-calendar-o"></i><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></span></div>
            </div>
            <?php endwhile; ?>
            </article>
            <article>
            <div class="small-12 medium-4 large-4 columns design-trends text-center half-block" data-equalizer-watch>
                <div class="contain bg-color white" >
                    <?php
                    $catquery = new WP_Query( 'category_name=design-trends&posts_per_page=1' );
                    while($catquery->have_posts()) : $catquery->the_post();
                    ?>
                    <?php
                    $category = get_the_category();
                    $category_name = $category[0]->cat_name;
                    $category_link = get_category_link($category[0]->term_id );
                    ?>
                    <div class="block-title padded-content"><a href="<?php echo $category_link ?>"><?php echo $category_name ?></a></div>
                    <div class="article-image">
                        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                    <h4 class="title padded-content"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                    <span class="time"><i class="fa icon-space fa-calendar-o"></i><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></span>
                    <?php endwhile; ?>
                </div>
            </div>
            </article>
        </div>
    </div>

    <div class="small-12 medium-3 large-3 columns single-tall-one">
        <div class="side-column bg-color white padded-content">
        <?php $first = true; ?>
        <?php
        $catquery = new WP_Query( 'category_name=hot-products&posts_per_page=5' );
        while($catquery->have_posts()) : $catquery->the_post();
        ?>

            <?php
            $category = get_the_category();
            $category_name = $category[0]->cat_name;
            $category_link = get_category_link($category[0]->term_id );
            ?>
            <?php if ( $first ): ?>
            <span class="block-title"><a href="<?php echo $category_link ?>"><?php echo $category_name ?></a></span>
            <div class="product-latest-image"><a href="<?php the_permalink() ?>">
                  <?php the_post_thumbnail();?>
                  <?php $first = false; ?>
            </a></div>
            <?php endif; ?>
            <div class="product">
                <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                <span class="price"><i class="fa icon-space fa-tag"></i><?php echo get_post_meta($post->ID, 'price', true); ?></span>
                <span class="time"><i class="fa icon-space fa-calendar-o"></i><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></span>
            </div>


        <?php endwhile; ?>
        </div>
    </div>


</div>

<div class="row">
    <div class="small-12 medium-12 large-12 columns padded-left plug">

        <div class="header-article-info text-center">
            <h3>Check out these awesome goodies</h3>
            <div class="subtitle">See what other awesome specialists have to offer</div>
        </div>

            <?php
                $ch = curl_init();
                $accesstoken = 'YA7xKQ7zN1MXmQtNkVGpzX8G8rfoiJdb';
                $headr = array();
                $headr[] = 'Content-length: 0';
                $headr[] = 'Content-type: application/json';
                $headr[] = 'Authorization: Bearer '.$accesstoken;
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
                curl_setopt($ch, CURLOPT_URL, 'https://api.envato.com/v1/market/popular:themeforest.json');
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $ch_data = curl_exec($ch);

                if ($ch_data === false)
                {
                     throw new Exception('Curl error: ' . curl_error($crl));
                    // print_r('Curl error: ' . curl_error($crl));
                }

                curl_close($ch);

                if(!empty($ch_data))
                {

                    $json_data  = json_decode($ch_data, true);
                    $json_data  = $json_data['popular'];
                    $data_count = count($json_data) -1;
                    echo '<div class="row under-spacing" data-equalizer>';
                    for($i = 0; $i <= 2; $i++)
                    {
                        echo '<div class="small-12 medium-6 large-4 columns" data-equalizer-watch><div class="text-center item bg-color white"><a href="',$json_data['items_last_week'][$i]['url'],'?ref=Bobyo"><img src="',$json_data['items_last_week'][$i]['live_preview_url'],'" alt="" /></a><div class="padded-content"><h4 class="title"><a href="',$json_data['items_last_week'][$i]['url'],'?ref=Bobyo">',$json_data['items_last_week'][$i]['item'],'</a></h4> <div class="meta"><span class="user left"><i class="fa icon-space fa-user-plus"></i>',$json_data['items_last_week'][$i]['user'],'</span> <span class="price right"><i class="fa icon-space fa-tag"></i>',$json_data['items_last_week'][$i]['cost'],' $</span></div></div></div></div>';
                    }
                    echo '</div>';

                    echo '<div class="row under-spacing" data-equalizer>';
                    for($i = 4; $i <= 6; $i++)
                    {
                        echo '<div class="small-12 medium-6 large-4 columns" data-equalizer-watch><div class="text-center item bg-color white"><a href="',$json_data['items_last_week'][$i]['url'],'?ref=Bobyo"><img src="',$json_data['items_last_week'][$i]['live_preview_url'],'" alt="" /></a><div class="padded-content"><h4 class="title"><a href="',$json_data['items_last_week'][$i]['url'],'?ref=Bobyo">',$json_data['items_last_week'][$i]['item'],'</a></h4> <div class="meta"><span class="user left"><i class="fa icon-space fa-user-plus"></i>',$json_data['items_last_week'][$i]['user'],'</span> <span class="price right"><i class="fa icon-space fa-tag"></i>',$json_data['items_last_week'][$i]['cost'],' $</span></div></div></div></div>';
                    }
                    echo '</div>';

                }
                else
                {
                    echo 'Sorry, but there was a problem connecting to the API.';
                }
             ?>


    </div>
</div>

<div class="row">
    <div class="small-12 large-12 large-centered medium-12 columns free padded-left">
        <div class="header-article-info text-center">
            <h3>Free as in beer!</h3>
            <div class="subtitle">Check out these awesome free items</div>
            <div class="row first">

            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
