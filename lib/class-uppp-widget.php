<?php

/*
 * Implements our User Posts Per Page widget
 * @author Samer Bechara <sam@thoughtengineer.com>
 */
class UPPP_Widget extends WP_Widget {

    // Holds the widget instance array
    private $instance = false;

    /**
     * Sets up the widgets name etc
     */
    public function __construct() {

	// Call parent constructior
	parent::__construct(
		'user_posts_per_page', // Base ID
		__('User Posts Per Page', 'user-posts-per-page'), // Name
		array( 'description' => __( 'Displays a form which allows you to limit the number of posts per page' ), ) // Args
	);
    }

    /**
     * Outputs the content of the widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget( $args, $instance ) {		     	        	    

	// Initialize instance object
	$this->instance = $instance;

	echo 'Aillleuve yu baiybaine';


    }

    /**
     * Outputs the options form on admin
     *
     * @param array $instance The widget options
     */
    public function form( $instance ) {

	// If title is set, use it
	if ( isset( $instance[ 'title' ] ) ) {
	    $title = $instance[ 'title' ];
	}
	// Use default title
	else {
	    $title = 'Posts Per Page';
	}
   
	?>
	<p>
	    <!-- Widget Title Field -->
	    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title' ); ?></label> 
	    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
	</p>

	<?php 

    }

    /**
     * Processing widget options on save
     *
     * @param array $new_instance The new options
     * @param array $old_instance The previous options
     */
    public function update( $new_instance, $old_instance ) {

	// Initialize instance
	$instance = array();
	
	// Set widget title based on user entered option
	$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';	    

	// Return values to be saved
	return $instance;	    
    }

}