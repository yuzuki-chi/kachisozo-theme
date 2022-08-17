<?php

/**
 * front-page.php
 * トップページ
 */
?>
<?php get_header(); ?>
<!-- container_frontpage として新しいクラスを作成 -->
<div class="frontpage-image">
    <h2>コンサルグループ　価値創造hub</h2>
    <p>我が国の喫緊の課題は、新たな価値を生むための体制を整えることです</p>
    <p>そのためには、価値創造に適した体制と人材作りが欠かせません</p>
</div>
<main id="frontpage-main" role="main">
    <header class="header">
        <h1 class="frontpage-title" itemprop="name"><?php the_title(); ?></h1>
    </header>
    <div class="frontpage-content" itemprop="mainContentOfPage">
        <?php if (has_post_thumbnail()) {
            the_post_thumbnail('full', array('itemprop' => 'image'));
        } ?>
        <?php the_content(); ?>
        <div class="entry-links"><?php wp_link_pages(); ?></div>
    </div>
</main>
<?php get_footer(); ?>