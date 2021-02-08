<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cat-story
 */

get_header();

?>


<div class="text noselect">
    <?php
    while (have_posts()) {
        the_post();
    ?>
        <h1><?php the_title(); ?></h1>
        <div class="post_img"><?php the_post_thumbnail('post_thumb') ?></div>

        <?php the_content(); ?>
        <p>&#169;story writer: Yosef Lazarev</p>
        <?php edit_post_link(__('Редактировать')); ?>


    <?php
    }
    ?>
</div>

<?php

get_footer('single');
