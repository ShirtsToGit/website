<?php
/**
 * @package Illustratr
 */

$format = get_post_format();
?>


<article id="post-<?php the_ID(); ?>" <?php if ( is_single() ){post_class();}else{post_class('summary');} ?>>
	<div itemscope itemtype="http://schema.org/Product" id="<?php echo $post->post_name;?>">
		<?php
			if ( is_single() ) {
				echo '<header class="entry-header">';
					the_title( '<h1 class="entry-title" itemprop="name">', '</h1>' );
				echo '</header><!-- .entry-header -->';
			} else {
				the_title( '<span itemprop="name">', '</span>' );
			}
		?>

		<div class="entry-content">
			<?php
				if ( is_single() ) {
					?>
					<!-- Custom Product Attributes - Full Details-->
					<div class="product-attributes">

						<div class="design_image">
						<?php 
							$img_array=get_field('design_image');
							echo '<img itemprop="image" src="' . $img_array["sizes"]["medium"] . '" />';
						?>		
						</div>
						<div class="description" itemprop="description">
							<?php the_field('description'); ?>
						</div>
						<p class="repo_url">
							<a href="<?php the_field('repo_url'); ?>">View on GitHub</a>
						</p>

						<?php extraInfo(); ?>
						<?php 
							$store_slug=get_field('store_slug'); 
							if(!$store_slug){$store_slug=$post->post_name;} 
						?>
						<p class="store_url">
							<a class="myButton" href="https://teespring.com/<?php echo $store_slug?>">Buy It!</a>
						</p>
						<div class="attribution">
							<?php the_field('attribution'); ?>
						</div>
					</div>
					<!-- end product attributes -->	
				<?php				
				} else {
				?>
					<!-- Custom Product Attributes - Summary for Archive-->
					<div class="product-attributes-summary">
						<div class="summary-left">
							<div class="design_image">
							<?php 
								$img_array=get_field('design_image');
								echo '<a href="' . get_permalink() . '"><img itemprop="image" src="' . $img_array["sizes"]["thumbnail"] . '" /></a>';
							?>		
							</div>
						</div>
						<div class="summary-right">
							<div class="description" itemprop="description">
								<?php the_field('description'); ?>
							</div>
							<?php extraInfo(); ?>
						</div>

						<?php 
							$store_slug=get_field('store_slug'); 
							if(!$store_slug){$store_slug=$post->post_name;} 
						?>
						<p class="store_url">
							<a class="myButton" href="https://teespring.com/<?php echo $store_slug?>">Buy It</a>
							| <a href="<?php the_permalink(); ?>">See Attributions & Details for 
	           						 <span itemprop="mpn"><?php echo $post->post_name;?></span>
	           					</a>
						</p>
						<div class="clear">&nbsp;</div>
					</div>
					<!-- end product attributes -->
				<?php
				}
			?>

			
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'illustratr' ) ); ?>
			<?php
				wp_link_pages( array(
					'before'   => '<div class="page-links clear">',
					'after'    => '</div>',
					'pagelink' => '<span class="page-link">%</span>',
				) );
			?>
		</div><!-- .entry-content -->
		

		<?php
			$comments_status = false;
			if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) {
				$comments_status = true;
			}
		?>
	</div><!-- end itemprop product -->
	
</article><!-- #post-## -->
