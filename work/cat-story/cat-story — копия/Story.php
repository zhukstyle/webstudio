<?php
/*
Template Name: not
*/
get_header();
?>

<div class="text">
    <?php
    // параметры по умолчанию
    $posts = get_posts(array(
        'numberposts' => 0,
        'post_type'   => 'post',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ));

    foreach ($posts as $post) {
        setup_postdata($post);
    ?>
        <h2>
            <a href="<?php the_permalink() ?>" title="Read More..."><?php the_title() ?></a>
        </h2>

        <?php the_excerpt() ?>

    <?php
    } ?>
    <?php
    the_posts_pagination($args);
    $args = array(
        'show_all'     => false, // показаны все страницы участвующие в пагинации
        'end_size'     => 1,     // количество страниц на концах
        'mid_size'     => 1,     // количество страниц вокруг текущей
        'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
        'prev_text'    => __('« Previous'),
        'next_text'    => __('Next »'),
        'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
        'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
        'screen_reader_text' => __('Posts navigation'),
    );
    ?>

    <?php
    wp_reset_postdata(); // сброс
    ?>

</div>

<?php
get_footer();
