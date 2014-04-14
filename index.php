<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<?php 

$args = array( 'posts_per_page' => 10, 'offset'=> 0);
$posts = get_posts( $args );
?>
<div id="main-content" class="main-content">
	<div class="latest-post center">
		<?php if ( $posts && count($posts) > 0 ) : ?>
		<?php
			$i = 0;
			foreach ($posts as $post): setup_postdata($post);
		?>


		<?php if ($i == 4) : ?>
			<div class="col-sm-3 blog-list">
				<div class="logo">
				</div>
				<h3 class="title">
				From the Blog
				</h3>

		<?php endif;?>

		<?php if ($i >= 4) : ?>
			<div class="each-blog">
				<div class="date">
					<?php echo the_date('jS  F'); ?>
				</div>

				<div class="content">
					<?php the_title();?>
					<a href="<?php echo the_permalink(); ?>" class="blog-more">
					Read More&#187;
					</a>
				</div>				

			</div>
		<?php endif; ?>

		<?php if ($i == 0) :  ?>
		<div class="col-sm-9 post4">
		<?php endif;
		?>
		<?php if ($i < 4):	?>
			<div class=" col-sm-6 each-post">
				<div class="each-post-image">
					
					<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );     ?> " >
				</div>
				
				<h3 class="title">
				<?php the_title(); ?>
				</h3>
				<div class="content">
					<?php the_content(); ?>					
				</div>                        
				<a href="<?php the_permalink(); ?>" class="more button">Read More&#187;</a>
               
                            <div class="clear"></div>
			</div> <!--each-post-->
		<?php endif;
			if ($i == 3) :  ?>
			<div class="clear">
			</div>
			</div> <!-- posts4 -->
		<?php endif;
		$i++;
		if ($i > 13) {
			break;
		}
		endforeach;
		wp_reset_postdata(); 	
			if ($i < 3) :  ?>
			</div> <!-- posts4 -->
			<?php endif;?>

			<?php if ($i > 4) : ?>		
				</div> <!-- blog-list -->			
			<?php endif; ?>

		<?php endif; ?>
		<div class="clear">
		</div>
	</div> <!-- latest-post -->
</div><!-- #main-content -->
<div class="featured-products">
	<div class="bar">
	</div>
	<div class="center">
			<?php dynamic_sidebar( 'sidebar-4' ); ?>
	</div>
	<div class="clear">
	</div>

</div>
<?php

get_footer();
