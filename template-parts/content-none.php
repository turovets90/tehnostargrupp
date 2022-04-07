<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tehnostargrupp
 */

?>

<div class="no-results not-found">

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'tehnostargrupp' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p><?php esc_html_e( 'Извините, но ничего не соответствует условиям вашего поиска. Пожалуйста, попытайтесь снова с другими ключевыми словами.', 'tehnostargrupp' ); ?></p>
			<?php

		else :
			?>

			<p><?php esc_html_e( 'Кажется, мы не можем найти то, что вы ищете. Возможно поиск поможет.', 'tehnostargrupp' ); ?></p>
			<?php
		endif;
		?>
	</div><!-- .page-content -->
</div><!-- .no-results -->
