<?php
/**
 * Template part for displaying loop home posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package magazin
 */
	//
	//
	//
?>
	<?php $autor=get_post_meta($post->ID, '_wpb_autor', true);?>
	<?php $resum=get_post_meta($post->ID, '_wpb_resumen', true);?>
	<?php $specs=get_post_meta($post->ID, '_wpb_specs', true);?>
	<?php $linkpdf=get_post_meta($post->ID, '_wpb_linkpdf', true);?>
	<?php $precio=get_post_meta($post->ID, '_wpb_precio', true);?>

	<!-- PRODUCT -->
	
	<header class="product">
	<div class="allwrap">
	<div class="block">
		<div class="autorphoto flotar">
			<?php the_post_thumbnail(); ?>		
		</div><!-- .entry-content -->
		<div class="infoproduct flotar hyphenate">
			<?php the_title( '<h2 class="entry-title">', '</h2>' );?>
			<div class="autorname"><?php echo $autor; ?></div>
			<div class="resum"><?php echo $resum; ?></div>			
		</div>
		<div class="pdfdoc flotar">
			<a href="<?php echo $linkpdf; ?>">
				
			</a>
		</div>		
	</div>
		<div class="actionbtns">
			<div class="orderbtn">
				<a href="#" id="contactbtn">more info</a>
			</div>
		<div class="wrapidatos">
			<div class="specsproduct">
				<?php echo $specs; ?>
			</div>
			<div class="precio">
				<span>Complete set: <?php echo $precio; ?> €</span>
			</div>
		</div>	

		</div>
		
	</div>
	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'promocionpiles' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'promocionpiles' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	</header>


