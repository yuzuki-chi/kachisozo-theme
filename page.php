<?php get_header(); ?>
<?php if(is_front_page()): ?>
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
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); } ?>
            <?php the_content(); ?>
            <div class="entry-links"><?php wp_link_pages(); ?></div>
        </div>
    </main>
    <?php get_footer(); ?>
<?php else: ?>
    <main id="content" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="header">
    <h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
    </header>
    <div class="entry-content" itemprop="mainContentOfPage">
    <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); } ?>
    <?php the_content(); ?>
    <div class="entry-links"><?php wp_link_pages(); ?></div>
    </div>
    </article>
    <?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
    <?php endwhile; endif; ?>
    </main>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
<?php endif; ?>