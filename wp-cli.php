<?php 

/**
 * Loop through all posts, setting the first attached image as the featured images
 */
class Auto_Thumbnail_Command extends WP_CLI_Command {

    /**
     * Loop through all posts, setting the first attached image as the featured images
     * 
     * ## OPTIONS
     * 
     * ## EXAMPLES
	 *
	 * wp auto-thumbnail
     *
     */
     public function __invoke( $args, $assoc_args ) {
   		
     	set_time_limit(0);
     	
      	// Get all public post types
     	$get_post_types = get_post_types( array( 'public'   => true	) );
     	// Post types array that will be used by default
     	$post_types = array();
     	
     	foreach ( $get_post_types  as $post_type ) {
     		// Only add post types that support
     		if(post_type_supports($post_type,'thumbnail')){
     			$post_types[] = $post_type;
     		}
     	}
     	// Default values for wp query
     	$defaults = array(
     		'post_type'      => $post_types,
     		'posts_per_page' => -1,
     		'post_status' => 'any'
     	);
     	// Merge user args with defaults
     	$assoc_args = wp_parse_args( $assoc_args, $defaults );
     	
     	// The Query
     	$the_query = new WP_Query( $assoc_args );
     	
     	// Number of posts returned by query
     	$found_posts = $the_query->found_posts;
     	
     	// Generate progess bar
     	$progress = new \cli\progress\Bar( 'Progress',  $found_posts );
     	
     	// Counter for number of post successfully processed
     	$counter_success = 0;
     	
     	// Counter for number of post processed
     	$counter_processed = 0;
     	
     	// The Loop
     	while ( $the_query->have_posts() ) :$the_query->the_post();
     		// Move the processbar on
     		$progress->tick();
     		
     		$has_thumb = has_post_thumbnail(get_the_ID());
     		if (!$has_thumb)  {
     			$attached_image = get_children( "post_parent=".get_the_ID()."&post_type=attachment&post_mime_type=image&numberposts=1" );
     			if ($attached_image) {
     				foreach ($attached_image as $attachment_id => $attachment) {
     					set_post_thumbnail(get_the_ID(), $attachment_id);
     					$counter_success++;
     				}
     			}
     			$counter_processed++;
     		}
     		
     		
     	endwhile;
     	
     	$progress->finish();
     	
     	/* Restore original Post Data
     	 * NB: Because we are using new WP_Query we aren't stomping on the
     	* original $wp_query and it does not need to be reset.
     	*/
     	wp_reset_postdata();
     	
     	if($found_posts == 0){
     		WP_CLI::error( "No posts found" );
     	}elseif($counter_processed == 0){
     		WP_CLI::error( "No posts processed" );
     	}elseif($counter_success == 0){
     		WP_CLI::success( "Unable to processed any posts" );
     	}else{
     		WP_CLI::success( "Processing compelete. $counter_success of $counter_processed where processed successfully." );
     	}
        
    }
}

WP_CLI::add_command( 'auto-thumbnail', 'Auto_Thumbnail_Command' );