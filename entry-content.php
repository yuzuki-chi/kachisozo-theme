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
<div class="entry-content" itemprop="mainEntityOfPage">
    <?php if (has_post_thumbnail()) : ?>
        <a href="<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false);
                    echo esc_url($src[0]); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('full', array('itemprop' => 'image')); ?></a>
    <?php endif; ?>
    <meta itemprop="description" content="<?php echo wp_strip_all_tags(get_the_excerpt(), true); ?>" />
    <?php the_content(); ?>
    <div class="entry-links"><?php wp_link_pages(); ?></div>
</div>