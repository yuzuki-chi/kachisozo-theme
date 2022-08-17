<?php

/**
 * entry.php
 * 特定の投稿ページ用コンポーネント
 * 
 * このテーマは少し複雑化されており, コンポーネント毎に分割化されている. 
 * entry        -> 投稿ページ
 * entry-meta   -> 投稿ページ用のメタデータが挿入されている
 * entry->summary -> 投稿ページのサマリー用のページ (-> content)
 * entry-content ->  投稿ページの投稿内容を表示する部分 (-> summary)
 * entry-footer -> 投稿用ページのフッター
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <?php if (is_singular()) {
            echo '<h1 class="entry-title" itemprop="headline">';
        } else {
            echo '<h2 class="entry-title">';
        } ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
        <?php if (is_singular()) {
            echo '</h1>';
        } else {
            echo '</h2>';
        } ?>
        <?php edit_post_link(); ?>
        <?php if (!is_search()) {
            get_template_part('entry', 'meta');
        } ?>
    </header>
    <?php get_template_part(
        'entry',
        (is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary' : 'content')
    ); ?>

    <?php if (is_singular()) {
        get_template_part('entry-footer');
    } ?>
</article>