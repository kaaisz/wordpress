<?php get_header(); ?>
<!-- 「全体の」記事一覧表示用のファイル -->
<div class="top wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="works">
				<h2 class="page-title">Works</h2>
					<h3>Personal Work</h3>
					<div id="trigger-fadein"></div>
					<div id="fadein" class="type01 box01 opacity0">
						<div id="tile-list">
								<?php

								$posts = get_posts(array(
								'posts_per_page' => 12, // 表示件数
								'category' => '3' // カテゴリIDもしくはスラッグ名
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
											echo '</div><!--tile-entry-->';

										//endwhile;
										endforeach;
										echo '</div><!--tile-list--></div><!--fadein-->';

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
										else :

												get_template_part( 'template-parts/post/content', 'none' );

										endif;?>
					<div class="seemore-before">
						<a class="seemore" href="<?php echo(get_category_link(3));?>">View More Personal Work ></a>
					</div>
					<br><p></p><br>
					<h3>Project Work <i class="fa fa-lock"></i></h3>
					<p>-Password Required-</p>
					<div class="seemore-before">
						<a class="seemore" href="<?php echo(get_category_link(4));?>">View Project Work ></a>
					</div>
					<br><p></p><br>
			</section>
			<section id="fadein-trigger">
				<h2 id="bio" class="page-title">Biography</h2>
					<div class="bioImg">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/szdp_prof.jpg" />
					</div>
			    <h3>Kaai Suzuki</h3>
					<p>Born in 2 Sep, Saitama, JP<br>
						Developing & Directing Web and Graphic Based on fashion and lifestyle cultural experience.</p>
						<div class="seemore-before">
							<a class="seemore" href="<?php bloginfo('template_url');?>/biography/">View Details ></a>
						</div>
	    </section>
			<section>
		    <h2 id="contact" class="page-title">Contact</h2>
			    <p>Please let me know if you're impressed or interested.</p>
			    <div class="toContact">
						<a href="<?php bloginfo('template_url');?>/contact">
							<button>Contact</button>
						</a>
					</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
