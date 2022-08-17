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
<footer class="entry-footer">
    <span class="cat-links"><?php esc_html_e('Categories: ', 'generic'); ?><?php the_category(', '); ?></span>
    <span class="tag-links"><?php the_tags(); ?></span>
    <?php if (comments_open()) {
        echo '<span class="meta-sep">|</span> <span class="comments-link"><a href="' . esc_url(get_comments_link()) . '">' . sprintf(esc_html__('Comments', 'generic')) . '</a></span>';
    } ?>
</footer>