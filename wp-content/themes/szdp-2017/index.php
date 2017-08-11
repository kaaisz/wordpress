<?php get_header(); ?>
<!-- 「全体の」記事一覧表示用のファイル -->
<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section>
				<h2 class="page-title">Works</h2>
					<h3>Personal Work</h3>
						<div id="tile-list">
								<?php

								$posts = get_posts(array(
								'posts_per_page' => 6, // 表示件数
								'category' => '281' // カテゴリIDもしくはスラッグ名
								));

					      $cnt = 0;
								//if ( have_posts() ) :
								if($posts):

										/* Start the Loop */
										//while ( have_posts() ) : the_post();
										foreach($posts as $post): setup_postdata($post);

											/*
											 * Include the Post-Format-specific template for the content.
											 * If you want to override this in a child theme, then include a file
											 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
											 */
											echo '<div class="tile-entry">';
											get_template_part( 'template-parts/post/content', get_post_format() );
											echo '</div>';

										//endwhile;
										endforeach;
										echo '</div>';

										// the_posts_pagination( array(
										// 	'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) .
										// 	'<span class="screen-reader-text">'
										// 	// . __( 'Previous page', 'twentyseventeen' )
										// 	. '</span>',
										// 	'next_text' => '<span class="screen-reader-text">'
										// 	. __( 'Next page', 'twentyseventeen' )
										// 	. '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
										// 	'before_page_number' => '<span class="meta-nav screen-reader-text">'.'Page'
										// 	// . __( 'Page', 'twentyseventeen' )
										// 	. ' </span>',
										// ) );

										echo'<a class="seemore" href="http://localhost/wordpress/category/personal-work/">See Personal Work ></a>';
										echo'<br><p></p><br>';
										echo'<h3>Client Work <i class="fa fa-lock"></i></h3>
												<p>-Password Required-</p>
												<a class="seemore" href="http://localhost/wordpress/category/client-work/">See Client Work ></a>
												<br><p></p><br>';

								else :

										get_template_part( 'template-parts/post/content', 'none' );

								endif;?>
			</section>
			<section>
	    <h2 id="bio" class="page-title">Biography</h2>
		    <h3>鈴木 カアイ / Kaai Suzuki</h3>
		    <p>9月2日埼玉県生まれ。幼少期より家族の影響でジャズ周辺の美術や音楽に親しみ、5歳にして初めてMacintoshに触れる。<br>
		      小学校4年で初めてPhotoshopを使用したイラスト描画を体験して以降、同時期より興味関心の高かったファッションとデジタルアートに好奇心を抱き始め、
		      服作り・グラフィックデザイン・ドローイングを独学で習得。<br>
		      2012年文化服装学院卒業。在学中よりアパレル・インテリアのデザイン事務所勤務を経て、2013年〜15年までスタートアップ企業のブランディングを担当。
		      現在はファッション・アート領域の興味関心と経験を強みとし、Web・グラフィックにおけるディレクションやデザインを行う。
		    </p>
				<p>Kaai Suzuki is Born on 2 Sep, Saitama, JP.<br>
					She grown up with Jazz Music and other cultural thing affected by parents.
					Her first experience of technology was to use Macintosh at 5 years old. after then,
					Started to design her own graphics with photoshop from 4th degrees of elementary school.
					At the same time, thanks to enthusiasm about the things for fashion and digital art,
					She got the knowledge for drawings, make clothes, and graphic design in her own way. <br>
					Graduated Bunka Fashion College at 2012. Since student, she experienced at two design office for apparel and interior.
					after about them from 2013 to 2015, assigned to the branding director/designer at a startup venture company. <br>
					Nowadays She's working as a director/designer in IT service company based on her experiences and strength for fashion and art.</p>
	    <h2 id="contact" class="page-title">Contact</h2>
		    <p>Please let me know if you're impressed or interested.</p>
		    <a href="http://localhost/wordpress/contact"><button>Tap Here</button></a>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
