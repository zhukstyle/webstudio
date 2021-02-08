<?php
/*
Template Name: Контакты
*/
get_header();
?>
<div class="text">
    <?php
    while (have_posts()) {
        the_post();
    ?>
        <h1><?php the_title(); ?></h1>
        <div class="post_img"><?php the_post_thumbnail('post_thumb') ?></div>
        <?php the_content(); ?>
        <?php edit_post_link(__('Редактировать')); ?>
    <?php
    }
    ?>
</div>
<?php
get_footer();
