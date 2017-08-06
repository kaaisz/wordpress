<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<!-- 「カテゴリーの」記事一覧表示用のファイル -->
<div class="wrap">

	<?php if ( have_posts() ) : ?>
        <header class="page-header">
            <h1 class="page-title"><?php single_cat_title( '', true ); ?></h1>
            <?php
                the_archive_description( '<div class="taxonomy-description">', '</div>' );
            ?>
        </header><!-- .page-header -->
  <?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div id="tile-list">
					<?php
		      $cnt = 0;
					if ( have_posts() ) :

						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							echo '<div class="tile-entry">';
							get_template_part( 'template-parts/post/content', get_post_format() );
							echo '</div>';

						endwhile;
				echo '</div>';

			the_posts_pagination( array(
				'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) .
				'<span class="screen-reader-text">'
				// . __( 'Previous page', 'twentyseventeen' )
				. '</span>',
				'next_text' => '<span class="screen-reader-text">'
				. __( 'Next page', 'twentyseventeen' )
				. '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">'.'Page'
				// . __( 'Page', 'twentyseventeen' )
				. ' </span>',
			) );

		else :

			get_template_part( 'template-parts/post/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
