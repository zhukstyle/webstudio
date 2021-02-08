<?php

get_header();
?>

<div class="text">

    <?php if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>
            <h2>
                <a href="<?php the_permalink() ?>" title="Read More..."><?php the_title() ?></a>
            </h2>
            <?php the_excerpt() ?>

        <?php } ?>
</div>


<?php  } ?>

<?php
get_footer('story');
