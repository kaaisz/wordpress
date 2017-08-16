<?php get_header(); ?>
<!-- 「全体の」記事一覧表示用のファイル -->
<div class="top wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="works">
				<h2 class="page-title">Works</h2>
					<h3>Personal Work</h3>
						<div id="tile-list">
								<?php

								$posts = get_posts(array(
								'posts_per_page' => 12, // 表示件数
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

										echo'<div class="seemore-before"><a class="seemore" href="http://localhost/wordpress/category/personal-work/">View Personal Work ></a></div>';
										echo'<br><p></p><br>';
										echo'<h3>Client Work <i class="fa fa-lock"></i></h3>
												<p>-Password Required-</p>
												<div class="seemore-before"><a class="seemore" href="http://localhost/wordpress/category/client-work/">View Client Work ></a></div>
												<br><p></p><br>';

								else :

										get_template_part( 'template-parts/post/content', 'none' );

								endif;?>
			</section>
			<section>
				<h2 id="bio" class="page-title">Biography</h2>
					<div class="bioImg">
						<img src="http://localhost/wordpress/wp-content/uploads/2017/08/szdp_prof.jpg" />
					</div>
			    <h3>Kaai Suzuki</h3>
					<p>Born in 2 Sep, Saitama, JP<br>
						Developing & Directing Web and Graphic Based on fashion and lifestyle cultural experience.</p>
						<div class="seemore-before">
							<a class="seemore" href="http://localhost/wordpress/biography/">Details ></a>
						</div>
	    </section>
			<section>
		    <h2 id="contact" class="page-title">Contact</h2>
			    <p>Please let me know if you're impressed or interested.</p>
			    <div class="toContact">
						<a href="http://localhost/wordpress/contact">
							<button>Contact</button>
						</a>
					</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
