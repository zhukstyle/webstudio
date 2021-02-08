</article>
<div class="book_bottom">
    <!-- <ol id="page-numbers">
            <li>1</li>
            <li>2</li>
        </ol> -->
</div>
<?php
the_posts_pagination($args);
$args = array(
    'show_all'     => false, // показаны все страницы участвующие в пагинации
    'end_size'     => 0,     // количество страниц на концах
    'mid_size'     => 0,     // количество страниц вокруг текущей
    'prev_next'    => false,  // выводить ли боковые ссылки "предыдущая/следующая страница".
    'prev_text'    => __('« Previous'),
    'next_text'    => __('Next »'),
    'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
    'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
    'screen_reader_text' => __('Posts navigation'),
);
?>
</section>
</div>
</div>
<footer>
    <div class="content_footer">
        &#169;Reprinting materials from this site is strictly prohibited. But fragments of stories can be quoted, with a mandatory link to the site and an indication of the author.
    </div>
</footer>
<?php wp_footer() ?>
</body>

</html>