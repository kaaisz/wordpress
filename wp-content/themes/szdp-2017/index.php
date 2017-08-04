<?php get_header(); ?>
<!-- 「全体の」記事一覧表示用のファイル -->
<div class="wrap">
	<header class="page-header">
		<h2 class="page-title">Works</h2>
	</header>

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
						'<span class="screen-reader-text">'. __( 'Previous page', 'twentyseventeen' ). '</span>',
						'next_text' => '<span class="screen-reader-text">'. __( 'Next page', 'twentyseventeen' ). '</span>'
						. twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">'.'Page'
						// . __( 'Page', 'twentyseventeen' )
						. ' </span>',
					) );

			else :

					get_template_part( 'template-parts/post/content', 'none' );

			endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
  <header class="page-header">
    <h2 id="bio" class="page-title">Biography</h2>
    <h3>鈴木 カアイ / Kaai Suzuki</h3>
    <p>9月2日埼玉県生まれ。幼少期より家族の影響でジャズ周辺の美術や音楽に親しみ、5歳にして初めてMacintoshに触れる。<br>
      小学校4年で初めてPhotoshopを使用したイラスト描画を体験して以降、同時期より興味関心の高かったファッションとデジタルアートに好奇心を抱き始め、
      服作り・グラフィックデザイン・ドローイングを独学で習得。<br>
      2012年文化服装学院卒業。在学中よりアパレル・インテリアのデザイン事務所勤務を経て、2013年〜15年までスタートアップ企業のブランディングを担当。
      現在はファッション・アート領域の興味関心と経験を強みとし、Web・グラフィックにおけるディレクションやデザインを行う。
    </p>
    <h2 id="contact" class="page-title">Contact</h2>
    <p>Please let me know if you're impressed or interested.</p>
    <button>Tap Here</button>
  </header>
</div><!-- .wrap -->

<?php get_footer();
