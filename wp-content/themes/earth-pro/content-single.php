<?php
/**
 * @package earthpro
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta">
			<?php earthpro_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'earthpro' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'earthpro' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'earthpro' ) );

			if ( ! earthpro_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( '<i class="dashicons dashicons-tag"></i> %2$s. <i class="dashicons dashicons-admin-links"></i> <a href="%3$s" rel="bookmark">permalink</a>.', 'earthpro' );
				} else {
					$meta_text = __( '<i class="dashicons dashicons-admin-links"></i> <a href="%3$s" rel="bookmark">permalink</a>.', 'earthpro' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( '<i class="dashicons dashicons-category"></i> %1$s <i class="dashicons dashicons-tag"></i> %2$s. <i class="dashicons dashicons-admin-links"></i> <a href="%3$s" rel="bookmark">permalink</a>.', 'earthpro' );
				} else {
					$meta_text = __( '<i class="dashicons dashicons-category"></i> %1$s. <i class="dashicons dashicons-admin-links"></i> <a href="%3$s" rel="bookmark">permalink</a>.', 'earthpro' );
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink()
			);
		?>

		<?php edit_post_link( __( 'Edit', 'earthpro' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
