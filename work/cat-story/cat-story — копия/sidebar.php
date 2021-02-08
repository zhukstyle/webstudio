<?php if (is_active_sidebar('left_sidebar')) : ?>
    <aside id="secondary" class="sidebar_left">

        <div class="sidebar_left_content">
            <div class="logo">
                <h2><?php bloginfo('name') ?></h2>
                <a href="<?php echo home_url('') ?>"></a>
            </div>
            <?php dynamic_sidebar('left_sidebar'); ?>
        </div>
    </aside><!-- #secondary -->
<?php endif; ?>