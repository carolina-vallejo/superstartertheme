<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package promocionpiles
 */

get_header(); ?>

<div class="row btn">
		<div class="backbtn">
			<a href="#">X</a>
		</div>	

</div>


<?php
	$args1=array(
	  'category__not_in' => array(3,2) // exclude HOME category
	  //'category_name' => 'home',
	  //'posts_per_page' => 1
	 );
	// Loop para PRODUCTS
	$second_query = new WP_Query($args1); 

	$mcounter = -1;

	echo '<main class="row wrap_posts">';
	while($second_query->have_posts()) : $second_query->the_post();
		
		$mcounter+=1;
		
		if( $mcounter % 2 == 0 ){

			//cada 2 loops poner meter en div
			if($mcounter==0){
				echo '<div class="par">';
			}else{
				echo '</div><div class="par">';
			}
			
		}
		

		get_template_part( 'template-parts/content', 'loopproducts' );

		
		

	endwhile;
	echo '</main>';	
	wp_reset_postdata(); // reset the query

?>



<?php
get_footer();
