<?php get_header(); ?>
<main id="content" role="main">
<header class="header">
<h1 class="entry-title" itemprop="name"><?php single_term_title(); ?></h1>
<div class="archive-meta" itemprop="description"><?php if ( '' != the_archive_description() ) { echo esc_html( the_archive_description() ); } ?></div>
</header>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; endif; ?>
<?php
/** ナビバー */
$args = array(
    'prev_text' => sprintf( esc_html__( '%s older', 'generic' ), '<span class="meta-nav">&larr;d</span>' ),
    'next_text' => sprintf( esc_html__( 'newer %s', 'generic' ), '<span class="meta-nav">&rarr;</span>' )
    );
the_posts_navigation( $args );
?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>