<?php
/**
 * Adds a Recent Posts widget.
 *
 * @package Consultix
 */

/**
 * Class Definition.
 */
class Consultix_Recent_Posts_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
			// Base ID of your widget.
			'consultix_recent_posts_widget',
			// Widget name will appear in UI.
			esc_html__( 'Consultix Recent Posts With Thumbnail Widget', 'consultix' ),
			// Widget description.
			array(
				'description' => esc_html__( 'Widget for recent posts.', 'consultix' ),
			)
		);
	}

	/**
	 * Creating widget front-end.
	 *
	 * @param  [type] $args     description.
	 * @param  [type] $instance description.
	 * @return void
	 */
	public function widget( $args, $instance ) {
		// before and after widget arguments are defined by themes.
		echo wp_kses_post( $args['before_widget'] );
		if ( ( $instance['title'] ) ) {
			echo wp_kses_post( $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'] );
		}

		$maxpoststitle = ( $instance['maxpoststitle'] ) ? $instance['maxpoststitle'] : esc_html__( 'RECENT POSTS', 'consultix' );
		$maxposts      = ( $instance['maxposts'] ) ? $instance['maxposts'] : esc_html__( '4', 'consultix' );
		?>
		<div class="rt-recent-post-with-thumbnail element-one">
			<h2 class="widget-title"><?php echo esc_attr( $maxpoststitle ); ?></h2>
			<ul class="rt-recent-post-with-thumbnail-holder">
				<?php
				$query = new WP_Query(
					array(
						'post_type'      => 'post',
						'posts_per_page' => $maxposts,
						'orderby'        => 'date',
						'order'          => 'DESC',

					)
				);
				while ( $query->have_posts() ) :
					$query->the_post();
				?>
				<li class="rt-recent-post-with-thumbnail-post">
					<?php if ( has_post_thumbnail() ) { ?>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
					<?php } ?>
					<a href="<?php the_permalink(); ?>"><p class="title"><?php the_title(); ?></p></a>
					<p class="date"><?php the_time( 'j F, Y' ); ?></p>
				</li>
				<?php
				endwhile; // End of the loop.
				?>
			</ul>
		</div>
		<?php
		echo wp_kses_post( $args['after_widget'] );
	}

	/**
	 * Widget Backend
	 *
	 * @param  [type] $instance description.
	 */
	public function form( $instance ) {
		$maxpoststitle = ( $instance['maxpoststitle'] ) ? $instance['maxpoststitle'] : esc_html__( 'RECENT POSTS', 'consultix' );
		$maxposts      = ( $instance['maxposts'] ) ? $instance['maxposts'] : esc_html__( '4', 'consultix' );
		// Widget admin form.
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'maxpoststitle' ) ); ?>"><?php esc_html_e( 'Title:', 'consultix' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'maxpoststitle' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'maxpoststitle' ) ); ?>" type="text" value="<?php echo esc_attr( $maxpoststitle ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'maxposts' ) ); ?>"><?php esc_html_e( 'No. of Posts to show:', 'consultix' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'maxposts' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'maxposts' ) ); ?>" type="number" value="<?php echo esc_attr( $maxposts ); ?>" />
		</p>
	<?php
	}

	/**
	 * Updating widget replacing old instances with new.
	 *
	 * @param  [type] $new_instance description.
	 * @param  [type] $old_instance description.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance                  = array();
		$instance['maxpoststitle'] = ( ( $new_instance['maxpoststitle'] ) ) ? strip_tags(
			$new_instance['maxpoststitle']
		) : '';

		$instance['maxposts'] = ( ( $new_instance['maxposts'] ) ) ? strip_tags(
			$new_instance['maxposts']
		) : '';

		return $instance;
	}

}
/**
 * Register and load the widget
 */
function consultix_recent_posts_load_widget() {
	register_widget( 'Consultix_Recent_Posts_Widget' );
}
add_action( 'widgets_init', 'consultix_recent_posts_load_widget' );
