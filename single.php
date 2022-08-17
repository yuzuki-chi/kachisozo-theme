<?php
/**
 * single.php
 * 投稿用ページの実態
 * ほとんどが entry.php の呼び出しに任せている
 */
?>
<?php get_header(); ?>
<main id="content" role="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php get_template_part('entry'); ?>
            <?php if (comments_open() && !post_password_required()) {
                comments_template('', true);
            } ?>
    <?php endwhile;
    endif; ?>
    <footer class="footer">
        <?php
        /** ナビバー  */
        $args = array(
            'prev_text' => '<span class="meta-nav">&larr;</span> %title',
            'next_text' => '%title <span class="meta-nav">&rarr;</span>'
        );
        the_post_navigation($args);
        ?>
    </footer>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>