<?php
/**
 * Template part for displaying single posts.
 *
 * @package Infinity
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) { ?>
		<div class="post-thumb">
			<div class="dates">
				<span class="month"><?php the_time( 'F' ); ?></span>
				<span class="date"><?php the_time( 'd' ); ?></span>
				<span class="year"><?php the_time( 'Y' ); ?></span>
			</div>
			<?php the_post_thumbnail( array( 848, 450 ) ); ?>
		</div>
	<?php } ?>
	<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<span class="author vcard"><i
					class="fa fa-user"></i> <?php echo esc_html__( 'Posted by ', 'tm_transport' ) . get_the_author(); ?></span>
			<span class="categories-links"><i
					class="fa fa-folder"></i> <?php echo esc_html__( 'In ', 'tm_transport' ) . get_the_category_list( esc_html__( ', ', 'tm_transport' ) ) ?> </span>
			<span class="comments-counts"><i
					class="fa fa-comment"></i><?php comments_number( '0', '1', '%' ); ?> <?php comments_number( 'comment', 'Comment', 'Comments' ); ?></span>
		</div><!-- .entry-meta -->
	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tm_transport' ),
			'after'  => '</div>',
		) );
		?>
	</div>
	<!-- .entry-content -->
	<div class="entry-footer">
		<div class="row middle">
			<div class="col-sm-8">
				<?php the_tags( '<i class="fa fa-tags"></i> Tags: ', ', ' ); ?>
			</div>
			<div class="col-sm-4 end">
				<div class="share">
					<span><i class="fa fa-share-alt"></i> <?php echo esc_html__( 'Share: ', 'tm_transport' ); ?></span>
					<span><a target="_blank"
					         href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>"><i
								class="fa fa-facebook"></i></a></span>
					<span><a target="_blank"
					         href="http://twitter.com/share?text=<?php echo urlencode( the_title() ); ?>&url=<?php echo urlencode( the_permalink() ); ?>&via=twitter&related=<?php echo urlencode( "coderplus:Wordpress Tips, jQuery and more" ); ?>"><i
								class="fa fa-twitter"></i></a></span>
					<span><a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink() ?>"><i
								class="fa fa-google-plus"></i></a></span>
				</div>
			</div>
		</div>
	</div>

</article><!-- #post-## -->
