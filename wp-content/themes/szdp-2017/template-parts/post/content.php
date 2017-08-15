<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<!-- 「カテゴリーの」記事一覧表示用のファイル -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		if ( is_sticky() && is_home() ) :
			echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
		endif;
	?>


	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
				<div class="entry-header">
					<a class="post-thumbnail" href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
					<?php
						// if ( 'post' === get_post_type() ) :
							echo '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="entry-meta">';
							echo twentyseventeen_time_link();
							twentyseventeen_edit_link();
								if ( is_front_page() ) :
									the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
								else :
									the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
								endif;
							echo '</a><!-- .entry-meta -->';
						// endif;

						// if ( is_single() ) {
						// 	the_title( '<h1 class="entry-title">', '</h1>' );
						// } elseif ( is_front_page() && is_home() ) {
						// 	the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
						// } else {
						// 	the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
						// }
					?>
					</a>
				</div><!-- .entry-header -->
	<?php endif; ?>

	<!-- 投稿ページ -->
	<?php if ( is_single() ) :
		echo '<div class="entry-meta">';
		twentyseventeen_posted_on();
		echo '</div><!-- .entry-meta -->';
		the_title('<h1 class="entry-title">', '</h1>');?>
		<div class="entry-content">
			<?php
				/* translators: %s: Name of current post */
				the_content( sprintf(
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
					get_the_title()
				) );

				wp_link_pages( array(
					'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
					'after'       => '</div>',
					'link_before' => '<span class="page-number">',
					'link_after'  => '</span>',
				) );
			?>
		</div><!-- .entry-content -->

		<?php twentyseventeen_entry_footer(); ?>
	<?php endif; ?>

</article><!-- #post-## -->
