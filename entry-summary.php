<?php

/**
 * entry-summary.php
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
<div class="entry-summary">
    <?php if ((has_post_thumbnail()) && (!is_search())) : ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
    <?php endif; ?>
    <span itemprop="description"><?php the_excerpt(); ?></span>
    <?php if (is_search()) { ?>
        <div class="entry-links"><?php wp_link_pages(); ?></div>
    <?php } ?>
</div>