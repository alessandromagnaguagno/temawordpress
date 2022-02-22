<?php

get_header(); ?>

<?php

if ( have_posts() ) {

	// Load posts loop.
	while (have_posts()) {
		//$qwe = get_the_post();
		//echo $qwe;
		the_post();
	}

}

the_content();

?>

<?php

get_footer();

?>