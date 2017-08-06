<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<?php if(is_front_page() ): ?>
	<div class="site-branding">
		<div class="wrap">

			<?php the_custom_logo(); ?>

			<div class="site-branding-text">
				<?php if ( is_front_page() ) : ?>
					<img class="site-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/logo_animated.svg"></img>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php $description = get_bloginfo( 'description', 'display' );

					if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; ?></p>
				<?php else : ?>
					<!-- TOP以外のページではHeader画像を表示しない -->
					<div class="site-branding close"></div>
					<!-- <p class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></p> -->
				<?php endif; ?>

				<?php endif; ?>
			</div><!-- .site-branding-text -->

			<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && ! has_nav_menu( 'top' ) ) : ?>
			<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
		<?php endif; ?>

		</div><!-- .wrap -->
	</div><!-- .site-branding -->
<?php endif; ?>
