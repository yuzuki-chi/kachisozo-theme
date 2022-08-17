<?php

/**
 * index.php
 * デフォルトでここにアクセスされるファイルが多いが, 実態は各ファイルに分配されている. 
 * 例: トップページ→front-page.php, 投稿一覧ページ→archive.php など
 */
?>
<?php get_header(); ?>
<main id="content" role="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php get_template_part('entry'); ?>
            <?php comments_template(); ?>
    <?php endwhile;
    endif; ?>
    <?php
    /** ナビバー */
    $args = array(
        'prev_text' => sprintf(esc_html__('%s older', 'generic'), '<span class="meta-nav">&larr;d</span>'),
        'next_text' => sprintf(esc_html__('newer %s', 'generic'), '<span class="meta-nav">&rarr;</span>')
    );
    the_posts_navigation($args);
    ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>