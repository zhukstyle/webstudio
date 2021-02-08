<?php

// TODO Подключаем стили / CSS Start
add_action('wp_enqueue_scripts', 'style_theme');

function style_theme()
{
    // wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
}
// TODO CSS End

// TODO Подключаем скрипты / Scripts Start
add_action('wp_enqueue_scripts', 'scripts_theme');

function scripts_theme()
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
    // wp_enqueue_scripts('jquery');
    wp_enqueue_script('init', get_template_directory_uri() . '/assets/js/script.js', ['jquery'], null, true);
}
// TODO Scripts End

// TODO Подключаем сайдбар / Sidebar Start
add_action('widgets_init', 'register_my_widgets');
function register_my_widgets()
{

    register_sidebar(array(
        'name'          => 'Left Sidebar',
        'id'            => "left_sidebar",
        'description'   => 'Левый сайдбар',
        'class'         => '',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => "</div>\n",
        'before_title'  => '<h5 class="widgettitle">',
        'after_title'   => "</h5>\n",
        'before_sidebar' => '', // WP 5.6
        'after_sidebar'  => '', // WP 5.6
    ));
}
// TODO Sidebar End

// TODO Start Filters

// TODO Title Filter Start
add_filter('document_title_separator', 'my_sep');
function my_sep($sep)
{
    $sep = ' | ';

    return $sep;
}
// TODO Title Filter Start

// TODO  Search Form Filter Start
add_filter('get_search_form', 'my_search_form');
function my_search_form($form)
{

    $form = '
	<form role="search" method="get" id="searchform" action="' . home_url('/') . '" >
		<label class="screen-reader-text">Search</label>
		<input class="input_text" type="text"   value=" ' . get_search_query() . '" name="s" id="s" required/>
        <input type="submit" id="searchsubmit" value="Go!" />
        <input type="hidden" value="post" name="post_type" />
	</form>';

    return $form;
}
// onkeyup="this.setAttribute('value', this.value);"
// TODO Search Form Filter End
// TODO End Filters

// TODO After Setup Theme Start
add_action('after_setup_theme', 'theme_register_nav_menu');
function theme_register_nav_menu()
{
    register_nav_menu('top', 'Верхнее Меню');
    add_theme_support('post-thumbnails', array('post'));
    add_image_size('post_thumb', 300, 300, true);
}
// TODO After Setup Theme End
// TODO Title Tag Start
add_theme_support('title-tag');
// TODO Title Tag End
// TODO The Excerpt Filter Start
add_filter('excerpt_length', function () {
    return 20;
});
add_filter('excerpt_more', 'new_excerpt_more');
function new_excerpt_more($more)
{
    global $post;
    return '<a href="' . get_permalink($post) . '">.....</a>';
}
// TODO The Excerpt Filter End
// TODO Pagination Filter Start
// удаляет H2 из шаблона пагинации
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2);
function my_navigation_template($template, $class)
{
    /*
	Вид базового шаблона:
	<nav class="navigation %1$s" role="navigation">
		<h2 class="screen-reader-text">%2$s</h2>
		<div class="nav-links">%3$s</div>
	</nav>
	*/

    return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
}

// выводим пагинацию
// the_posts_pagination(array(
//     'show_all'     => false, // показаны все страницы участвующие в пагинации
//     'end_size'     => 0,     // количество страниц на концах
//     'mid_size'     => 0,     // количество страниц вокруг текущей
//     'prev_text'    => __('<'),
//     'next_text'    => __('>'),
// )); 
// TODO Pagination Filter End