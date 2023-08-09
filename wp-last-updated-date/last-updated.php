<?php

/*
* Last Updated function to display at the front end of the site 
*/

/**
* @param $parameter
*
* @return string
**/

 function last_updated( $parameter ) {

	global $post;
	ob_start();

?>
	<span class="last-updated">

		<?php

            // Get the date from the database
            $last_updated_date = new DateTime($post->post_modified);

		    echo $last_updated_date->format('m/d/Y');

		?>

	</span>

<?php

	$output = ob_get_contents();
	ob_clean();
	wp_reset_postdata();
	return $output;
}